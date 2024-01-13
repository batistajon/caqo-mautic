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

/* @bundles/PluginBundle/Event/PluginIntegrationAuthCallbackUrlEvent.php */
class __TwigTemplate_fb595b131f0d413955d35ba216a061d2980a6d6d2b25d02a41f886c24bba1f0c extends Template
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
 * Class PluginIntegrationAuthCallbackUrlEvent.
 */
class PluginIntegrationAuthCallbackUrlEvent extends AbstractPluginIntegrationEvent
{
    /**
     * @var string
     */
    private \$callbackUrl;

    public function __construct(UnifiedIntegrationInterface \$integration, \$callbackUrl)
    {
        \$this->integration = \$integration;
        \$this->callbackUrl = \$callbackUrl;
    }

    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return \$this->callbackUrl;
    }

    /**
     * @param string \$callbackUrl
     */
    public function setCallbackUrl(\$callbackUrl)
    {
        \$this->callbackUrl = \$callbackUrl;

        \$this->stopPropagation();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Event/PluginIntegrationAuthCallbackUrlEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginIntegrationAuthCallbackUrlEvent.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Event/PluginIntegrationAuthCallbackUrlEvent.php");
    }
}
