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

/* @bundles/MarketplaceBundle/Command/RemoveCommand.php */
class __TwigTemplate_bfae5d53092de74fd03067f99b514e5470eb502e9e1f4db76a639d43fdbf81fb extends Template
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

namespace Mautic\\MarketplaceBundle\\Command;

use Mautic\\CoreBundle\\Helper\\ComposerHelper;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class RemoveCommand extends Command
{
    public const NAME = 'mautic:marketplace:remove';

    private ComposerHelper \$composer;
    private LoggerInterface \$logger;

    public function __construct(ComposerHelper \$composer, LoggerInterface \$logger)
    {
        parent::__construct();
        \$this->composer = \$composer;
        \$this->logger   = \$logger;
    }

    protected function configure(): void
    {
        \$this->setName(self::NAME);
        \$this->setDescription('Removes a plugin that is currently installed');
        \$this->addArgument('package', InputArgument::REQUIRED, 'The Packagist package of the plugin to remove (e.g. mautic/example-plugin)');

        parent::configure();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$output->writeln('Removing '.\$input->getArgument('package').', this might take a while...');
        \$packageVendorAndName = \$input->getArgument('package');

        // Just checking the package type so that the user doesn't accidentially removes a core package
        if (!in_array(\$packageVendorAndName, \$this->composer->getMauticPluginPackages())) {
            \$output->writeln('This package cannot be removed, it must be of type mautic-plugin');

            return 1;
        }

        \$removeResult = \$this->composer->remove(\$packageVendorAndName);

        if (0 !== \$removeResult->exitCode) {
            \$message = 'Error while removing plugin through Composer: '.\$removeResult->output;
            \$this->logger->error(\$message);
            \$output->writeLn(\$message);

            return 1;
        }

        \$output->writeln(\$input->getArgument('package').' has successfully been removed.');

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
        return "@bundles/MarketplaceBundle/Command/RemoveCommand.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Command/RemoveCommand.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Command/RemoveCommand.php");
    }
}
