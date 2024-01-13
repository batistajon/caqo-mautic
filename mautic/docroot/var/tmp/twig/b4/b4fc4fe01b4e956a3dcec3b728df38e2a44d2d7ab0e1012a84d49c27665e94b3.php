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

/* @bundles/ChannelBundle/EventListener/LeadSubscriber.php */
class __TwigTemplate_8008925597e6fcc234186d132e601b910565d9d8f9cbf3a899be4e86eac22cb9 extends Template
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

namespace Mautic\\ChannelBundle\\EventListener;

use Mautic\\ChannelBundle\\Entity\\MessageQueueRepository;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class LeadSubscriber implements EventSubscriberInterface
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var RouterInterface
     */
    private \$router;

    /**
     * @var MessageQueueRepository
     */
    private \$messageQueueRepository;

    public function __construct(
        TranslatorInterface \$translator,
        RouterInterface \$router,
        MessageQueueRepository \$messageQueueRepository
    ) {
        \$this->translator             = \$translator;
        \$this->router                 = \$router;
        \$this->messageQueueRepository = \$messageQueueRepository;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            LeadEvents::TIMELINE_ON_GENERATE => ['onTimelineGenerate', 0],
        ];
    }

    /**
     * Compile events for the lead timeline.
     */
    public function onTimelineGenerate(LeadTimelineEvent \$event)
    {
        \$this->addChannelMessageEvents(\$event);
    }

    private function addChannelMessageEvents(LeadTimelineEvent \$event)
    {
        \$eventTypeKey  = 'message.queue';
        \$eventTypeName = \$this->translator->trans('mautic.message.queue');

        \$event->addEventType(\$eventTypeKey, \$eventTypeName);
        \$event->addSerializerGroup('messageQueueList');

        \$label = \$this->translator->trans('mautic.queued.channel');

        // Decide if those events are filtered
        if (!\$event->isApplicable(\$eventTypeKey)) {
            return;
        }

        \$logs = \$this->messageQueueRepository->getLeadTimelineEvents(\$event->getLeadId(), \$event->getQueryOptions());

        // Add to counter
        \$event->addToCounter(\$eventTypeKey, \$logs);

        if (!\$event->isEngagementCount()) {
            // Add the logs to the event array
            foreach (\$logs['results'] as \$log) {
                \$eventName = [
                    'label' => \$label.\$log['channelName'].' '.\$log['channelId'],
                    'href'  => \$this->router->generate('mautic_'.\$log['channelName'].'_action', ['objectAction' => 'view', 'objectId' => \$log['channelId']]),
                ];
                \$event->addEvent(
                    [
                        'eventId'    => \$eventTypeKey.\$log['id'],
                        'event'      => \$eventTypeKey,
                        'eventLabel' => \$eventName,
                        'eventType'  => \$eventTypeName,
                        'timestamp'  => \$log['dateAdded'],
                        'extra'      => [
                            'log' => \$log,
                        ],
                        'contentTemplate' => 'MauticChannelBundle:SubscribedEvents\\Timeline:queued_messages.html.php',
                        'icon'            => 'fa-comments-o',
                        'contactId'       => \$log['lead_id'],
                    ]
                );
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/EventListener/LeadSubscriber.php";
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
        return new Source("", "@bundles/ChannelBundle/EventListener/LeadSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/EventListener/LeadSubscriber.php");
    }
}
