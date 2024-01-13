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

/* @bundles/NotificationBundle/NotificationEvents.php */
class __TwigTemplate_8412c65496e54497fa40bb3014ad5c7172e444a6a0b71955e8914230ba527770 extends Template
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

namespace Mautic\\NotificationBundle;

/**
 * Class NotificationEvents
 * Events available for NotificationBundle.
 */
final class NotificationEvents
{
    /**
     * The mautic.notification_token_replacement event is thrown right before the content is returned.
     *
     * The event listener receives a
     * Mautic\\CoreBundle\\Event\\TokenReplacementEvent instance.
     *
     * @var string
     */
    const TOKEN_REPLACEMENT = 'mautic.notification_token_replacement';

    /**
     * The mautic.notification_form_action_send event is thrown when a notification is sent
     * as part of a form action.
     *
     * The event listener receives a
     * Mautic\\NotificationBundle\\Event\\SendingNotificationEvent instance.
     *
     * @var string
     */
    const NOTIFICATION_ON_FORM_ACTION_SEND = 'mautic.notification_form_action_send';

    /**
     * The mautic.notification_on_send event is thrown when a notification is sent.
     *
     * The event listener receives a
     * Mautic\\NotificationBundle\\Event\\NotificationSendEvent instance.
     *
     * @var string
     */
    const NOTIFICATION_ON_SEND = 'mautic.notification_on_send';

    /**
     * The mautic.notification_pre_save event is thrown right before a notification is persisted.
     *
     * The event listener receives a
     * Mautic\\NotificationBundle\\Event\\NotificationEvent instance.
     *
     * @var string
     */
    const NOTIFICATION_PRE_SAVE = 'mautic.notification_pre_save';

    /**
     * The mautic.notification_post_save event is thrown right after a notification is persisted.
     *
     * The event listener receives a
     * Mautic\\NotificationBundle\\Event\\NotificationEvent instance.
     *
     * @var string
     */
    const NOTIFICATION_POST_SAVE = 'mautic.notification_post_save';

    /**
     * The mautic.notification_pre_delete event is thrown prior to when a notification is deleted.
     *
     * The event listener receives a
     * Mautic\\NotificationBundle\\Event\\NotificationEvent instance.
     *
     * @var string
     */
    const NOTIFICATION_PRE_DELETE = 'mautic.notification_pre_delete';

    /**
     * The mautic.notification_post_delete event is thrown after a notification is deleted.
     *
     * The event listener receives a
     * Mautic\\NotificationBundle\\Event\\NotificationEvent instance.
     *
     * @var string
     */
    const NOTIFICATION_POST_DELETE = 'mautic.notification_post_delete';

    /**
     * The mautic.notification.on_campaign_trigger_action event is fired when the campaign action triggers.
     *
     * The event listener receives a
     * Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent
     *
     * @var string
     */
    const ON_CAMPAIGN_TRIGGER_ACTION = 'mautic.notification.on_campaign_trigger_action';

    /**
     * The mautic.notification.on_campaign_trigger_condition event is fired when the campaign condition triggers.
     *
     * The event listener receives a
     * Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent
     *
     * @var string
     */
    const ON_CAMPAIGN_TRIGGER_CONDITION = 'mautic.notification.on_campaign_trigger_notification';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/NotificationEvents.php";
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
        return new Source("", "@bundles/NotificationBundle/NotificationEvents.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/NotificationEvents.php");
    }
}
