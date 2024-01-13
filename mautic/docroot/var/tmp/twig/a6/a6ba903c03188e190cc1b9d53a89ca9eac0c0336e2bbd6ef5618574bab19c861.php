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

/* @bundles/ChannelBundle/ChannelEvents.php */
class __TwigTemplate_077180b384ca3e2cc33b4cd14bfbbd09351d57911e6e0f5ea4470c1980f896ad extends Template
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

namespace Mautic\\ChannelBundle;

/**
 * Class ChannelEvents.
 */
final class ChannelEvents
{
    /**
     * The mautic.add_channel event registers communication channels.
     *
     * The event listener receives a Mautic\\ChannelBundle\\Event\\ChannelEvent instance.
     *
     * @var string
     */
    const ADD_CHANNEL = 'mautic.add_channel';

    /**
     * The mautic.channel_broadcast event is dispatched by the mautic:send:broadcast command to process communication to pending contacts.
     *
     * The event listener receives a Mautic\\ChannelBundle\\Event\\ChannelBroadcastEvent instance.
     *
     * @var string
     */
    const CHANNEL_BROADCAST = 'mautic.channel_broadcast';

    /**
     * The mautic.message_queued event is dispatched to save a message to the queue.
     *
     * The event listener receives a Mautic\\ChannelBundle\\Event\\MessageQueueEvent instance.
     *
     * @var string
     */
    const MESSAGE_QUEUED = 'mautic.message_queued';

    /**
     * The mautic.process_message_queue event is dispatched to be processed by a listener.
     *
     * The event listener receives a Mautic\\ChannelBundle\\Event\\MessageQueueProcessEvent instance.
     *
     * @var string
     */
    const PROCESS_MESSAGE_QUEUE = 'mautic.process_message_queue';

    /**
     * The mautic.process_message_queue_batch event is dispatched to process a batch of messages by channel and channel ID.
     *
     * The event listener receives a Mautic\\ChannelBundle\\Event\\MessageQueueBatchProcessEvent instance.
     *
     * @var string
     */
    const PROCESS_MESSAGE_QUEUE_BATCH = 'mautic.process_message_queue_batch';

    /**
     * The mautic.channel.on_campaign_batch_action event is dispatched when the campaign action triggers.
     *
     * The event listener receives a Mautic\\CampaignBundle\\Event\\PendingEvent
     *
     * @var string
     */
    const ON_CAMPAIGN_BATCH_ACTION = 'mautic.channel.on_campaign_batch_action';

    /**
     * The mautic.message_pre_save event is dispatched right before a form is persisted.
     *
     * The event listener receives a
     * Mautic\\ChannelEvent\\Event\\MessageEvent instance.
     *
     * @var string
     */
    const MESSAGE_PRE_SAVE = 'mautic.message_pre_save';

    /**
     * The mautic.message_post_save event is dispatched right after a form is persisted.
     *
     * The event listener receives a
     * Mautic\\ChannelEvent\\Event\\MessageEvent instance.
     *
     * @var string
     */
    const MESSAGE_POST_SAVE = 'mautic.message_post_save';

    /**
     * The mautic.message_pre_delete event is dispatched before a form is deleted.
     *
     * The event listener receives a
     * Mautic\\ChannelEvent\\Event\\MessageEvent instance.
     *
     * @var string
     */
    const MESSAGE_PRE_DELETE = 'mautic.message_pre_delete';

    /**
     * The mautic.message_post_delete event is dispatched after a form is deleted.
     *
     * The event listener receives a
     * Mautic\\ChannelEvent\\Event\\MessageEvent instance.
     *
     * @var string
     */
    const MESSAGE_POST_DELETE = 'mautic.message_post_delete';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/ChannelEvents.php";
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
        return new Source("", "@bundles/ChannelBundle/ChannelEvents.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/ChannelEvents.php");
    }
}
