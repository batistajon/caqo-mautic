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

/* @bundles/NotificationBundle/Api/AbstractNotificationApi.php */
class __TwigTemplate_b848eb03397ffbf4009c8944efc2abf48bf1492dfe6a1f59f7b99a94e37bbab3 extends Template
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

namespace Mautic\\NotificationBundle\\Api;

use GuzzleHttp\\Client;
use Mautic\\NotificationBundle\\Entity\\Notification;
use Mautic\\PageBundle\\Model\\TrackableModel;
use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Psr\\Http\\Message\\ResponseInterface;

abstract class AbstractNotificationApi
{
    protected Client \$http;
    protected TrackableModel \$trackableModel;
    protected IntegrationHelper \$integrationHelper;

    /**
     * AbstractNotificationApi constructor.
     */
    public function __construct(Client \$http, TrackableModel \$trackableModel, IntegrationHelper \$integrationHelper)
    {
        \$this->http              = \$http;
        \$this->trackableModel    = \$trackableModel;
        \$this->integrationHelper = \$integrationHelper;
    }

    /**
     * @param string \$endpoint One of \"apps\", \"players\", or \"notifications\"
     * @param array  \$data     Array of data to send
     */
    abstract public function send(string \$endpoint, array \$data): ResponseInterface;

    /**
     * @param \$id
     *
     * @return mixed
     */
    abstract public function sendNotification(\$id, Notification \$notification);

    /**
     * Convert a non-tracked url to a tracked url.
     *
     * @param string \$url
     *
     * @return string
     */
    public function convertToTrackedUrl(\$url, array \$clickthrough, Notification \$notification)
    {
        /* @var \\Mautic\\PageBundle\\Entity\\Redirect \$redirect */
        \$trackable = \$this->trackableModel->getTrackableByUrl(\$url, 'notification', \$clickthrough['notification']);

        return \$this->trackableModel->generateTrackableUrl(\$trackable, \$clickthrough, [], \$notification->getUtmTags());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Api/AbstractNotificationApi.php";
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
        return new Source("", "@bundles/NotificationBundle/Api/AbstractNotificationApi.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Api/AbstractNotificationApi.php");
    }
}
