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

/* @bundles/PluginBundle/Event/PluginIntegrationKeyEvent.php */
class __TwigTemplate_095731dd2fcc302d2a1ad00657b2fd0a779c479baf1a240c4138cdb18b2029d0 extends Template
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

namespace Mautic\\PluginBundle\\Event;

use Mautic\\PluginBundle\\Integration\\UnifiedIntegrationInterface;

/**
 * Class PluginIntegrationKeyEvent.
 */
class PluginIntegrationKeyEvent extends AbstractPluginIntegrationEvent
{
    /**
     * @var array
     */
    private \$keys;

    public function __construct(UnifiedIntegrationInterface \$integration, array \$keys = null)
    {
        \$this->integration = \$integration;
        \$this->keys        = \$keys;
    }

    /**
     * Get the keys array.
     */
    public function getKeys()
    {
        return \$this->keys;
    }

    /**
     * Set new keys array.
     *
     * @param \$keys
     */
    public function setKeys(array \$keys)
    {
        \$this->keys = \$keys;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Event/PluginIntegrationKeyEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginIntegrationKeyEvent.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Event/PluginIntegrationKeyEvent.php");
    }
}
