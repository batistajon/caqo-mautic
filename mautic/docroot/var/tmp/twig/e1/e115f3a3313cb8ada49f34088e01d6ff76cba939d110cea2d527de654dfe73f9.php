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

/* @bundles/CoreBundle/DependencyInjection/Compiler/ModelPass.php */
class __TwigTemplate_76d3a910e1f6b76bbaa7b54b3c91ece888ae7b047f810e599847bd557f1667b8 extends Template
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

namespace Mautic\\CoreBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Class ModelPass.
 */
class ModelPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        foreach (\$container->findTaggedServiceIds('mautic.model') as \$id => \$tags) {
            \$definition = \$container->findDefinition(\$id);

            \$modelClass = \$definition->getClass();
            \$reflected  = new \\ReflectionClass(\$modelClass);

            if (\$reflected->hasMethod('setEntityManager')) {
                \$definition->addMethodCall('setEntityManager', [new Reference('doctrine.orm.entity_manager')]);
            }

            if (\$reflected->hasMethod('setSecurity')) {
                \$definition->addMethodCall('setSecurity', [new Reference('mautic.security')]);
            }

            if (\$reflected->hasMethod('setDispatcher')) {
                \$definition->addMethodCall('setDispatcher', [new Reference('event_dispatcher')]);
            }

            if (\$reflected->hasMethod('setTranslator')) {
                \$definition->addMethodCall('setTranslator', [new Reference('translator')]);
            }

            if (\$reflected->hasMethod('setUserHelper')) {
                \$definition->addMethodCall('setUserHelper', [new Reference('mautic.helper.user')]);
            }

            if (\$reflected->hasMethod('setCoreParametersHelper')) {
                \$definition->addMethodCall('setCoreParametersHelper', [new Reference('mautic.helper.core_parameters')]);
            }

            if (\$reflected->hasMethod('setRouter')) {
                \$definition->addMethodCall('setRouter', [new Reference('router')]);
            }

            if (\$reflected->hasMethod('setLogger')) {
                \$definition->addMethodCall('setLogger', [new Reference('monolog.logger.mautic')]);
            }

            if (\$reflected->hasMethod('setSession')) {
                \$definition->addMethodCall('setSession', [new Reference('session')]);
            }
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
        return "@bundles/CoreBundle/DependencyInjection/Compiler/ModelPass.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Compiler/ModelPass.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/DependencyInjection/Compiler/ModelPass.php");
    }
}
