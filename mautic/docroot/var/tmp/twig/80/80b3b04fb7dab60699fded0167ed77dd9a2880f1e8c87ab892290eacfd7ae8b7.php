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

/* @bundles/SmsBundle/MauticSmsBundle.php */
class __TwigTemplate_53a337ea912563b9e82a667f8123adb2d3b7b2ff18a8d5b587e2a6f013f11044 extends Template
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

namespace Mautic\\SmsBundle;

use Mautic\\PluginBundle\\Bundle\\PluginBundleBase;
use Mautic\\SmsBundle\\DependencyInjection\\Compiler\\SmsTransportPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Class MauticSmsBundle.
 */
class MauticSmsBundle extends PluginBundleBase
{
    public function build(ContainerBuilder \$container)
    {
        \$container->addCompilerPass(new SmsTransportPass());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/MauticSmsBundle.php";
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
        return new Source("", "@bundles/SmsBundle/MauticSmsBundle.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/MauticSmsBundle.php");
    }
}
