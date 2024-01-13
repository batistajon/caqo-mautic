<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/CoreBundle/Command/PullTransifexCommand.php */
class __TwigTemplate_fbffcb899e8e1623d9864235006c3d615627700a593faa0f5b3e50f1071364ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Command;

use Mautic\\CoreBundle\\Factory\\TransifexFactory;
use Mautic\\CoreBundle\\Helper\\LanguageHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Helper\\UrlHelper;
use Mautic\\Transifex\\Connector\\Statistics;
use Mautic\\Transifex\\Connector\\Translations;
use Mautic\\Transifex\\Exception\\InvalidConfigurationException;
use Mautic\\Transifex\\Exception\\ResponseException;
use Mautic\\Transifex\\Promise;
use Psr\\Http\\Message\\ResponseInterface;
use SplQueue;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * CLI Command to pull language resources from Transifex.
 */
class PullTransifexCommand extends Command
{
    public const NAME = 'mautic:transifex:pull';

    private TransifexFactory \$transifexFactory;
    private TranslatorInterface \$translator;
    private PathsHelper \$pathsHelper;
    private LanguageHelper \$languageHelper;

    public function __construct(
        TransifexFactory \$transifexFactory,
        TranslatorInterface \$translator,
        PathsHelper \$pathsHelper,
        LanguageHelper \$languageHelper
    ) {
        \$this->transifexFactory = \$transifexFactory;
        \$this->translator       = \$translator;
        \$this->pathsHelper      = \$pathsHelper;
        \$this->languageHelper   = \$languageHelper;

        parent::__construct();
    }

    protected function configure(): void
    {
        \$this->setName(self::NAME)
            ->setDescription('Fetches translations for Mautic from Transifex')
            ->addOption('language', null, InputOption::VALUE_OPTIONAL, 'Optional language to pull', null)
            ->addOption('bundle', null, InputOption::VALUE_OPTIONAL, 'Optional bundle to pull. Example value: WebhookBundle', null)
            ->addOption('path', null, InputOption::VALUE_OPTIONAL, 'Optional path to a directory where to store the traslations.', null)
            ->setHelp(<<<'EOT'
The <info>%command.name%</info> command is used to retrieve updated Mautic translations from Transifex and writes them to the filesystem.

<info>php %command.full_name%</info>

The command can optionally only pull files for a specific language with the --language option

<info>php %command.full_name% --language=<language_code></info>
EOT
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$languageFilter = \$input->getOption('language');
        \$bundleFilter   = \$input->getOption('bundle');
        \$path           = \$input->getOption('path');
        \$files          = \$this->languageHelper->getLanguageFiles();
        \$translationDir = (\$path ?? \$this->pathsHelper->getTranslationsPath()).'/';

        try {
            \$transifex = \$this->transifexFactory->getTransifex();
        } catch (InvalidConfigurationException \$e) {
            \$output->writeln(\$this->translator->trans('mautic.core.command.transifex_no_credentials'));

            return 1;
        }

        \$statistics = \$transifex->getConnector(Statistics::class);
        \\assert(\$statistics instanceof Statistics);

        \$translations = \$transifex->getConnector(Translations::class);
        \\assert(\$translations instanceof Translations);

        /** @var SplQueue<Promise> \$queue */
        \$queue = new SplQueue();

        foreach (\$files as \$bundle => \$stringFiles) {
            if (\$bundleFilter && \$bundle !== \$bundleFilter) {
                continue;
            }
            foreach (\$stringFiles as \$file) {
                \$name     = \$bundle.' '.str_replace('.ini', '', basename(\$file));
                \$resource = UrlHelper::stringURLUnicodeSlug(\$name);
                \$output->writeln(\$this->translator->trans('mautic.core.command.transifex_processing_resource', ['%resource%' => \$name]));

                try {
                    \$response      = \$statistics->getLanguageStats(\$resource);
                    \$languageStats = json_decode((string) \$response->getBody(), true);

                    foreach (\$languageStats['data'] as \$stats) {
                        \$language = ltrim(\$stats['relationships']['language']['data']['id'], 'l:');
                        if ('en' === \$language) {
                            continue;
                        }

                        // If we are filtering on a specific language, skip anything that doesn't match
                        if (\$languageFilter && \$languageFilter !== \$language) {
                            continue;
                        }

                        \$output->writeln(\$this->translator->trans('mautic.core.command.transifex_processing_language', ['%language%' => \$language]));

                        \$completed = \$stats['attributes']['translated_strings'] / \$stats['attributes']['total_strings'];

                        // We only want resources which are 80% completed
                        if (\$completed >= 0.8) {
                            \$path = \$translationDir.\$language.'/'.\$bundle.'/'.basename(\$file);
                            try {
                                \$promise = \$transifex->getApiConnector()->createPromise(\$translations->download(\$resource, \$language));
                                \$promise->setFilePath(\$path);
                                \$queue->enqueue(\$promise);
                            } catch (ResponseException \$responseException) {
                                \$output->writeln(\$this->translator->trans(\$responseException->getMessage()));
                            }
                        }
                    }
                } catch (\\Exception \$exception) {
                    \$output->writeln(\$this->translator->trans('mautic.core.command.transifex_error_pulling_data', ['%message%' => \$exception->getMessage()]));

                    return 1;
                }
            }
        }

        \$transifex->getApiConnector()->fulfillPromises(
            \$queue,
            function (ResponseInterface \$response, Promise \$promise) use (\$output) {
                try {
                    \$this->languageHelper->createLanguageFile(\$promise->getFilePath(), \$response->getBody()->__toString());
                } catch (\\Exception \$exception) {
                    \$output->writeln(\$exception->getMessage());
                }
            },
            function (ResponseException \$exception) use (\$output) {
                \$output->writeln(\$exception->getMessage());
            }
        );

        \$output->writeln(\$this->translator->trans('mautic.core.command.transifex_resource_downloaded'));

        return 0;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Command/PullTransifexCommand.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Command/PullTransifexCommand.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Command/PullTransifexCommand.php");
    }
}
