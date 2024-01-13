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

/* @bundles/UserBundle/MauticUserBundle.php */
class __TwigTemplate_653f04a406894afed7e177df7d4e4e6b813cd35e434039c59fd554414da86997 extends Template
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

namespace Mautic\\UserBundle;

use Mautic\\UserBundle\\DependencyInjection\\Firewall\\Factory\\PluginFactory;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

/**
 * Class MauticUserBundle.
 */
class MauticUserBundle extends Bundle
{
    public function build(ContainerBuilder \$container)
    {
        parent::build(\$container);

        \$extension = \$container->getExtension('security');
        \$extension->addSecurityListenerFactory(new PluginFactory());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/MauticUserBundle.php";
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
        return new Source("", "@bundles/UserBundle/MauticUserBundle.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/MauticUserBundle.php");
    }
}
