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

/* @bundles/EmailBundle/DependencyInjection/Compiler/SpoolTransportPass.php */
class __TwigTemplate_55451a3ebb04e5d5e22654dc3e764101afd0c5daa91c49f56f8ca6e230fcf8d6 extends Template
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

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class SpoolTransportPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        // Override Swiftmailer's \\Swift_TransportSpool with our own that delegates writing to the filesystem or sending immediately
        // based on the configuration
        \$container->setAlias('swiftmailer.mailer.default.transport', 'mautic.transport.spool');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/DependencyInjection/Compiler/SpoolTransportPass.php";
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
        return new Source("", "@bundles/EmailBundle/DependencyInjection/Compiler/SpoolTransportPass.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/DependencyInjection/Compiler/SpoolTransportPass.php");
    }
}
