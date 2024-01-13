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

/* @bundles/CacheBundle/Command/ClearCacheCommand.php */
class __TwigTemplate_3d6586a17c2206441a40e2f45ca9d46d6a0ea6cb638a97acaa3bae888eec4c31 extends Template
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

namespace Mautic\\CacheBundle\\Command;

use Mautic\\CacheBundle\\Cache\\CacheProvider;
use Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * CLI Command to clear the application cache.
 */
class ClearCacheCommand extends ContainerAwareCommand
{
    protected function configure(): void
    {
        \$this->setName('mautic:cache:clear')
            ->setDescription('Clears Mautic\\'s cache');
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): ?int
    {
        /** @var CacheProvider \$cacheProvider */
        \$cacheProvider = \$this->getContainer()->get('mautic.cache.provider');

        return (int) !\$cacheProvider->clear();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CacheBundle/Command/ClearCacheCommand.php";
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
        return new Source("", "@bundles/CacheBundle/Command/ClearCacheCommand.php", "/var/www/html/mautic/docroot/app/bundles/CacheBundle/Command/ClearCacheCommand.php");
    }
}
