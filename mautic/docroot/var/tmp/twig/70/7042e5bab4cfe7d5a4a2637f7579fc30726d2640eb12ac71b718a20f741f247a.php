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

/* @bundles/PluginBundle/Event/PluginInstallEvent.php */
class __TwigTemplate_66c19d59f04fb3779998b6b18203ed783bb45e1f682a3895dbe8c6fc18374fbc extends Template
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

namespace Mautic\\PluginBundle\\Event;

use Mautic\\PluginBundle\\Entity\\Plugin;
use Symfony\\Contracts\\EventDispatcher\\Event;

class PluginInstallEvent extends Event
{
    private Plugin \$plugin;

    public function __construct(Plugin \$plugin)
    {
        \$this->plugin = \$plugin;
    }

    public function getPlugin(): Plugin
    {
        return \$this->plugin;
    }

    public function checkContext(string \$pluginName): bool
    {
        return \$pluginName === \$this->plugin->getName();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Event/PluginInstallEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginInstallEvent.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Event/PluginInstallEvent.php");
    }
}
