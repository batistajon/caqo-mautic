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

/* @bundles/CoreBundle/Command/GenerateProductionAssetsCommand.php */
class __TwigTemplate_d2b89f5692e360bdf47cb2b4fc992be6d5e99f06dbbe816280c872be993d1edc extends Template
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

namespace Mautic\\CoreBundle\\Command;

use Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * CLI Command to generate production assets.
 */
class GenerateProductionAssetsCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        \$this->setName('mautic:assets:generate')
            ->setDescription('Combines and minifies asset files from each bundle into single production files')
            ->setHelp(
                <<<'EOT'
                The <info>%command.name%</info> command Combines and minifies files from each bundle's Assets/css/* and Assets/js/* folders into single production files stored in root/media/css and root/media/js respectively.

<info>php %command.full_name%</info>
EOT
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$container   = \$this->getContainer();
        \$assetHelper = \$container->get('mautic.helper.assetgeneration');

        \$pathsHelper = \$container->get('mautic.helper.paths');

        // Combine and minify bundle assets
        \$assetHelper->getAssets(true);

        // Minify Mautic Form SDK
        file_put_contents(
            \$pathsHelper->getSystemPath('assets', true).'/js/mautic-form-tmp.js',
            \\Minify::combine([\$pathsHelper->getSystemPath('assets', true).'/js/mautic-form-src.js'])
        );
        // Fix the MauticSDK loader
        file_put_contents(
            \$pathsHelper->getSystemPath('assets', true).'/js/mautic-form.js',
            str_replace(\"'mautic-form-src.js'\", \"'mautic-form.js'\",
                file_get_contents(\$pathsHelper->getSystemPath('assets', true).'/js/mautic-form-tmp.js'))
        );
        // Remove temp file.
        unlink(\$pathsHelper->getSystemPath('assets', true).'/js/mautic-form-tmp.js');

        /** @var \\Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator \$translator */
        \$translator = \$container->get('translator');
        \$translator->setLocale(\$container->get('mautic.helper.core_parameters')->get('locale'));

        // Update successful
        \$output->writeln('<info>'.\$translator->trans('mautic.core.command.asset_generate_success').'</info>');

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
        return "@bundles/CoreBundle/Command/GenerateProductionAssetsCommand.php";
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
        return new Source("", "@bundles/CoreBundle/Command/GenerateProductionAssetsCommand.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Command/GenerateProductionAssetsCommand.php");
    }
}
