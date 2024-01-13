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

/* @bundles/PluginBundle/Event/PluginIntegrationRequestEvent.php */
class __TwigTemplate_c30b447667348ac97a16dc90d37ad1856c15839c93705d495955faea27d15fb3 extends Template
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
use Psr\\Http\\Message\\ResponseInterface;

class PluginIntegrationRequestEvent extends AbstractPluginIntegrationEvent
{
    private \$url;

    /**
     * @var array
     */
    private \$parameters;

    private \$headers;

    /**
     * @var string
     */
    private \$method;

    /**
     * @var array
     */
    private \$settings;

    /**
     * @var string
     */
    private \$authType;

    private \$response;

    public function __construct(UnifiedIntegrationInterface \$integration, \$url, \$parameters, \$headers, \$method, \$settings, \$authType)
    {
        \$this->integration = \$integration;
        \$this->url         = \$url;
        \$this->parameters  = \$parameters;
        \$this->headers     = \$headers;
        \$this->method      = \$method;
        \$this->settings    = \$settings;
        \$this->authType    = \$authType;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return \$this->url;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return \$this->parameters;
    }

    public function setParameters(array \$parameters)
    {
        \$this->parameters = \$parameters;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return \$this->method;
    }

    /**
     * @return array
     */
    public function getSettings()
    {
        return \$this->settings;
    }

    /**
     * @return string
     */
    public function getAuthType()
    {
        return \$this->authType;
    }

    public function setResponse(ResponseInterface \$response)
    {
        \$this->response = \$response;
    }

    public function getResponse(): ResponseInterface
    {
        return \$this->response;
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
        return \$this->headers;
    }

    public function setHeaders(array \$headers)
    {
        \$this->headers = \$headers;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Event/PluginIntegrationRequestEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginIntegrationRequestEvent.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Event/PluginIntegrationRequestEvent.php");
    }
}
