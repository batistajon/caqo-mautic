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

/* @bundles/IntegrationsBundle/DependencyInjection/Compiler/SyncIntegrationsPass.php */
class __TwigTemplate_ef1316a74cc5c6416a6d4f361953cf271c191de4a9dc60a4ae52793ca330cf3c extends Template
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

class SyncIntegrationsPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        \$taggedServices         = \$container->findTaggedServiceIds('mautic.sync_integration');
        \$syncIntegrationsHelper = \$container->findDefinition('mautic.integrations.helper.sync_integrations');

        foreach (\$taggedServices as \$id => \$tags) {
            \$syncIntegrationsHelper->addMethodCall('addIntegration', [new Reference(\$id)]);
        }

        \$taggedServices   = \$container->findTaggedServiceIds('mautic.sync.notification_handler');
        \$handlerContainer = \$container->findDefinition('mautic.integrations.sync.notification.handler_container');

        foreach (\$taggedServices as \$id => \$tags) {
            \$handlerContainer->addMethodCall('registerHandler', [new Reference(\$id)]);
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
        return "@bundles/IntegrationsBundle/DependencyInjection/Compiler/SyncIntegrationsPass.php";
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
        return new Source("", "@bundles/IntegrationsBundle/DependencyInjection/Compiler/SyncIntegrationsPass.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/DependencyInjection/Compiler/SyncIntegrationsPass.php");
    }
}
