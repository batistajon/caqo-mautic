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

/* @bundles/EmailBundle/DependencyInjection/Compiler/SwiftmailerDynamicMailerPass.php */
class __TwigTemplate_3694aac50677df8778c631a3be6b6c208d9a366b1cdb1bfc7eac94272c3d2db7 extends Template
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

namespace Mautic\\EmailBundle\\DependencyInjection\\Compiler;

use Mautic\\EmailBundle\\Swiftmailer\\SwiftmailerTransportFactory;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class SwiftmailerDynamicMailerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('swiftmailer.mailer.default.transport.dynamic')) {
            return;
        }

        \$definitionDecorator = \$container->getDefinition('swiftmailer.mailer.default.transport.dynamic');
        \$definitionDecorator->setFactory([SwiftmailerTransportFactory::class, 'createTransport']);
        \$definitionDecorator->setArgument(3, new Reference('service_container'));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/DependencyInjection/Compiler/SwiftmailerDynamicMailerPass.php";
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
        return new Source("", "@bundles/EmailBundle/DependencyInjection/Compiler/SwiftmailerDynamicMailerPass.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/DependencyInjection/Compiler/SwiftmailerDynamicMailerPass.php");
    }
}
