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

/* @bundles/PluginBundle/Event/PluginIntegrationAuthRedirectEvent.php */
class __TwigTemplate_2224ebee6a2689620a1426ec7089b96e3c6c23c40e52e30dba4322b69e1c6aaf extends Template
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
 * Class PluginIntegrationAuthRedirectEvent.
 */
class PluginIntegrationAuthRedirectEvent extends AbstractPluginIntegrationEvent
{
    /**
     * @var string
     */
    private \$authUrl;

    public function __construct(UnifiedIntegrationInterface \$integration, \$authUrl)
    {
        \$this->integration = \$integration;
        \$this->authUrl     = \$authUrl;
    }

    /**
     * @return string
     */
    public function getAuthUrl()
    {
        return \$this->authUrl;
    }

    /**
     * @param string \$authUrl
     */
    public function setAuthUrl(\$authUrl)
    {
        \$this->authUrl = \$authUrl;

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
        return "@bundles/PluginBundle/Event/PluginIntegrationAuthRedirectEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginIntegrationAuthRedirectEvent.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Event/PluginIntegrationAuthRedirectEvent.php");
    }
}
