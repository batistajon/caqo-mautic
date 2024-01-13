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

/* @bundles/IntegrationsBundle/DependencyInjection/Compiler/ConfigIntegrationPass.php */
class __TwigTemplate_fdf7fcf55f7d6dc33a766653333f8535f5fcc54b1f564d8bbc3df18c73f7a960 extends Template
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

namespace Mautic\\IntegrationsBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class ConfigIntegrationPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        \$taggedServices     = \$container->findTaggedServiceIds('mautic.config_integration');
        \$integrationsHelper = \$container->findDefinition('mautic.integrations.helper.config_integrations');

        foreach (\$taggedServices as \$id => \$tags) {
            \$integrationsHelper->addMethodCall('addIntegration', [new Reference(\$id)]);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/DependencyInjection/Compiler/ConfigIntegrationPass.php";
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
        return new Source("", "@bundles/IntegrationsBundle/DependencyInjection/Compiler/ConfigIntegrationPass.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/DependencyInjection/Compiler/ConfigIntegrationPass.php");
    }
}
