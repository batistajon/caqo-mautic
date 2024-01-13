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

/* @bundles/EmailBundle/DependencyInjection/Compiler/EmailTransportPass.php */
class __TwigTemplate_b26ae7d2d8d4055e6c25766cef966126d67d5922699db5dfa3db6959cc8fc5b1 extends Template
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

use Mautic\\EmailBundle\\Model\\TransportType;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Class EmailTransportPass.
 */
class EmailTransportPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->has('mautic.email.transport_type')) {
            return;
        }

        \$definition     = \$container->getDefinition('mautic.email.transport_type');
        \$taggedServices = \$container->findTaggedServiceIds('mautic.email_transport');
        foreach (\$taggedServices as \$id => \$tags) {
            \$definition->addMethodCall('addTransport', [
                \$id,
                !empty(\$tags[0][TransportType::TRANSPORT_ALIAS]) ? \$tags[0][TransportType::TRANSPORT_ALIAS] : \$id,
                !empty(\$tags[0][TransportType::FIELD_HOST]),
                !empty(\$tags[0][TransportType::FIELD_PORT]),
                !empty(\$tags[0][TransportType::FIELD_USER]),
                !empty(\$tags[0][TransportType::FIELD_PASSWORD]),
                !empty(\$tags[0][TransportType::FIELD_API_KEY]),
            ]);
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
        return "@bundles/EmailBundle/DependencyInjection/Compiler/EmailTransportPass.php";
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
        return new Source("", "@bundles/EmailBundle/DependencyInjection/Compiler/EmailTransportPass.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/DependencyInjection/Compiler/EmailTransportPass.php");
    }
}
