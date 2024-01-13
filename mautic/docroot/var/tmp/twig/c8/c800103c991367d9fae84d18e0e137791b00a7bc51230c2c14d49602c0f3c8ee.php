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

/* @bundles/IntegrationsBundle/DependencyInjection/Compiler/AuthenticationIntegrationPass.php */
class __TwigTemplate_457d3d177c6b7276fa18d1aa48fef176c2e324ed5163b1d8a7b2fb0ae60a0420 extends Template
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

class AuthenticationIntegrationPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        \$taggedServices     = \$container->findTaggedServiceIds('mautic.authentication_integration');
        \$integrationsHelper = \$container->findDefinition('mautic.integrations.helper.auth_integrations');

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
        return "@bundles/IntegrationsBundle/DependencyInjection/Compiler/AuthenticationIntegrationPass.php";
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
        return new Source("", "@bundles/IntegrationsBundle/DependencyInjection/Compiler/AuthenticationIntegrationPass.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/DependencyInjection/Compiler/AuthenticationIntegrationPass.php");
    }
}
