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

/* @bundles/EmailBundle/Swiftmailer/SwiftmailerTransportFactory.php */
class __TwigTemplate_5ea4ffca401d21021a67b6a6601afc449148741f1b95caad30753780f5b270d5 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer;

use Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection\\SwiftmailerTransportFactory as TransportFactory;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\Routing\\RequestContext;

class SwiftmailerTransportFactory
{
    public static function createTransport(
        array \$options,
        RequestContext \$requestContext,
        \\Swift_Events_EventDispatcher \$eventDispatcher,
        ContainerInterface \$container
    ) {
        // Try to get the transport from the container
        \$options   = TransportFactory::resolveOptions(\$options);
        \$transport = \$options['transport'] ?? null;

        if (\$transport && \$container->has(\$transport)) {
            return \$container->get(\$transport);
        }

        return TransportFactory::createTransport(\$options, \$requestContext, \$eventDispatcher);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/SwiftmailerTransportFactory.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/SwiftmailerTransportFactory.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/SwiftmailerTransportFactory.php");
    }
}
