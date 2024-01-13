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

/* @bundles/PluginBundle/Event/PluginUpdateEvent.php */
class __TwigTemplate_d88ee859a7dc240512bb6cd47213062ce6a912cc9862a2b0216d1ce76d75a8c1 extends Template
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

class PluginUpdateEvent extends Event
{
    private Plugin \$plugin;
    private string \$oldVersion;

    public function __construct(Plugin \$plugin, string \$oldVersion)
    {
        \$this->plugin     = \$plugin;
        \$this->oldVersion = \$oldVersion;
    }

    public function getPlugin(): Plugin
    {
        return \$this->plugin;
    }

    public function getOldVersion(): string
    {
        return \$this->oldVersion;
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
        return "@bundles/PluginBundle/Event/PluginUpdateEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginUpdateEvent.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Event/PluginUpdateEvent.php");
    }
}
