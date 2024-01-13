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

/* @bundles/IntegrationsBundle/EventListener/TimelineSubscriber.php */
class __TwigTemplate_bf2a23cb2a405f1426ff341b55e4517e15a0e513337b4d1204dd74e12ccfd80a extends Template
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

namespace Mautic\\IntegrationsBundle\\EventListener;

use Mautic\\LeadBundle\\Entity\\LeadEventLogRepository;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class TimelineSubscriber implements EventSubscriberInterface
{
    /**
     * @var LeadEventLogRepository
     */
    private \$eventLogRepository;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(LeadEventLogRepository \$eventLogRepository, TranslatorInterface \$translator)
    {
        \$this->eventLogRepository = \$eventLogRepository;
        \$this->translator         = \$translator;
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
     * @param      \$eventType
     * @param      \$eventTypeName
     * @param      \$icon
     * @param null \$bundle
     * @param null \$object
     * @param null \$action
     */
    private function addEvents(LeadTimelineEvent \$event, \$eventType, \$eventTypeName, \$icon, \$bundle = null, \$object = null, \$action = null): void
    {
        \$eventTypeName = \$this->translator->trans(\$eventTypeName);
        \$event->addEventType(\$eventType, \$eventTypeName);

        if (!\$event->isApplicable(\$eventType)) {
            return;
        }

        \$events = \$this->eventLogRepository->getEvents(\$event->getLead(), \$bundle, \$object, \$action, \$event->getQueryOptions());

        // Add to counter
        \$event->addToCounter(\$eventType, \$events);

        if (\$event->isEngagementCount()) {
            return;
        }

        // Add the logs to the event array
        foreach (\$events['results'] as \$log) {
            \$event->addEvent(
                \$this->getEventEntry(\$log, \$eventType, \$eventTypeName, \$icon)
            );
        }
    }

    /**
     * @param \$eventType
     * @param \$eventTypeName
     * @param \$icon
     *
     * @return array
     */
    private function getEventEntry(array \$log, \$eventType, \$eventTypeName, \$icon)
    {
        \$properties = json_decode(\$log['properties'], true);

        return [
            'event'           => \$eventType,
            'eventId'         => \$eventType.\$log['id'],
            'eventType'       => \$eventTypeName,
            'eventLabel'      => \$this->translator->trans(
                'mautic.integration.sync.user_notification.header',
                [
                    '%integration%' => \$properties['integration'],
                    '%object%'      => \$properties['object'],
                ]
            ),
            'timestamp'       => \$log['date_added'],
            'icon'            => \$icon,
            'contactId'       => \$log['lead_id'],
            'contentTemplate' => 'IntegrationsBundle:Timeline:index.html.php',
            'extra'           => \$properties,
        ];
    }

    public function onTimelineGenerate(LeadTimelineEvent \$event): void
    {
        \$this->addEvents(
            \$event,
            'integration_sync_issues',
            'mautic.integration.sync.timeline_notices',
            'fa-refresh',
            'integrations'
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/EventListener/TimelineSubscriber.php";
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
        return new Source("", "@bundles/IntegrationsBundle/EventListener/TimelineSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/EventListener/TimelineSubscriber.php");
    }
}
