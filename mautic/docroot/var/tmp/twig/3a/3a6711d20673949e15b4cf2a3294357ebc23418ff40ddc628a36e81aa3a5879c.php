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

/* @bundles/NotificationBundle/Event/SendingNotificationEvent.php */
class __TwigTemplate_39a3fed2a13b28fde721ed6e60a1fc597a8c3de7692a368db7542419529ef60b extends Template
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

namespace Mautic\\NotificationBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\NotificationBundle\\Entity\\Notification;

/**
 * Class SendingNotificationEvent.
 */
class SendingNotificationEvent extends CommonEvent
{
    /**
     * @var Lead
     */
    protected \$lead;

    /**
     * @var Notification
     */
    protected \$entity;

    /**
     * SendingNotificationEvent constructor.
     */
    public function __construct(Notification \$notification, Lead \$lead)
    {
        \$this->entity = \$notification;
        \$this->lead   = \$lead;
    }

    /**
     * @return Notification
     */
    public function getNotification()
    {
        return \$this->entity;
    }

    /**
     * @return \$this
     */
    public function setNotifiction(Notification \$notification)
    {
        \$this->entity = \$notification;

        return \$this;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return \$this
     */
    public function setLead(Lead \$lead)
    {
        \$this->lead = \$lead;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Event/SendingNotificationEvent.php";
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
        return new Source("", "@bundles/NotificationBundle/Event/SendingNotificationEvent.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Event/SendingNotificationEvent.php");
    }
}
