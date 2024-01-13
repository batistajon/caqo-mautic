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

/* @bundles/CoreBundle/Update/Step/UpdateTranslationsStep.php */
class __TwigTemplate_11685a0334c6fd0572d388c4b0dc372dbddfd89ef7b03559f236bb230c82860d extends Template
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

namespace Mautic\\CoreBundle\\Update\\Step;

use Mautic\\CoreBundle\\Helper\\LanguageHelper;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

final class UpdateTranslationsStep implements StepInterface
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var LanguageHelper
     */
    private \$languageHelper;

    /**
     * @var LoggerInterface
     */
    private \$logger;

    public function __construct(TranslatorInterface \$translator, LanguageHelper \$languageHelper, LoggerInterface \$logger)
    {
        \$this->translator     = \$translator;
        \$this->languageHelper = \$languageHelper;
        \$this->logger         = \$logger;
    }

    public function getOrder(): int
    {
        return 40;
    }

    public function shouldExecuteInFinalStage(): bool
    {
        return true;
    }

    public function execute(ProgressBar \$progressBar, InputInterface \$input, OutputInterface \$output): void
    {
        // Update languages
        \$supportedLanguages = \$this->languageHelper->getSupportedLanguages();

        // If there is only one language, assume it is 'en_US' and skip this
        if (count(\$supportedLanguages) <= 1) {
            return;
        }

        \$progressBar->setMessage(\$this->translator->trans('mautic.core.command.update.step.update_languages'));
        \$progressBar->advance();

        // First, update the cached language data
        \$result = \$this->languageHelper->fetchLanguages(true);

        // Only continue if not in error
        if (isset(\$result['error'])) {
            \$this->logger->error('UPDATE ERROR: '.\$result['error']);

            return;
        }

        foreach (\$supportedLanguages as \$locale => \$name) {
            \$this->updateLanguage(\$locale, \$name);
        }
    }

    private function updateLanguage(string \$locale, string \$name)
    {
        // We don't need to update en_US, that comes with the main package
        if ('en_US' === \$locale) {
            return;
        }

        // Update time
        \$extractResult = \$this->languageHelper->extractLanguagePackage(\$locale);
        if (empty(\$extractResult['error'])) {
            return;
        }

        \$this->logger->error(
            'UPDATE ERROR: '.
            \$this->translator->trans(
                'mautic.core.update.error_updating_language',
                [
                    '%language%' => \$name,
                ]
            )
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Update/Step/UpdateTranslationsStep.php";
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
        return new Source("", "@bundles/CoreBundle/Update/Step/UpdateTranslationsStep.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Update/Step/UpdateTranslationsStep.php");
    }
}
