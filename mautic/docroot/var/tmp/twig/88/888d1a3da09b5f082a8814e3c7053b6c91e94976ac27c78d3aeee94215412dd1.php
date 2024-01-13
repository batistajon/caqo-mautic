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

/* @bundles/StageBundle/EventListener/LeadSubscriber.php */
class __TwigTemplate_89a02c9cf3ce01ae4edc03230b6c3e6981272ffc7b3e333847049bb044c32273 extends Template
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

namespace Mautic\\StageBundle\\EventListener;

use Mautic\\LeadBundle\\Entity\\StagesChangeLogRepository;
use Mautic\\LeadBundle\\Event\\LeadMergeEvent;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\StageBundle\\Entity\\LeadStageLogRepository;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class LeadSubscriber implements EventSubscriberInterface
{
    /**
     * @var StagesChangeLogRepository
     */
    private \$stagesChangeLogRepository;

    /**
     * @var LeadStageLogRepository
     */
    private \$leadStageLogRepository;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var RouterInterface
     */
    private \$router;

    public function __construct(
        StagesChangeLogRepository \$stagesChangeLogRepository,
        LeadStageLogRepository \$leadStageLogRepository,
        TranslatorInterface \$translator,
        RouterInterface \$router
    ) {
        \$this->stagesChangeLogRepository = \$stagesChangeLogRepository;
        \$this->leadStageLogRepository    = \$leadStageLogRepository;
        \$this->translator                = \$translator;
        \$this->router                    = \$router;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            LeadEvents::TIMELINE_ON_GENERATE => ['onTimelineGenerate', 0],
            LeadEvents::LEAD_POST_MERGE      => ['onLeadMerge', 0],
        ];
    }

    /**
     * Compile events for the lead timeline.
     */
    public function onTimelineGenerate(LeadTimelineEvent \$event)
    {
        // Set available event types
        \$eventTypeKey  = 'stage.changed';
        \$eventTypeName = \$this->translator->trans('mautic.stage.event.changed');
        \$event->addEventType(\$eventTypeKey, \$eventTypeName);
        \$event->addSerializerGroup('stageList');

        if (!\$event->isApplicable(\$eventTypeKey)) {
            return;
        }

        \$logs = \$this->stagesChangeLogRepository->getLeadTimelineEvents(\$event->getLeadId(), \$event->getQueryOptions());

        // Add to counter
        \$event->addToCounter(\$eventTypeKey, \$logs);

        if (!\$event->isEngagementCount()) {
            // Add the logs to the event array
            foreach (\$logs['results'] as \$log) {
                if (isset(\$log['reference']) && null != \$log['reference']) {
                    \$eventLabel = [
                        'label'      => \$log['eventName'],
                        'href'       => \$this->router->generate('mautic_stage_action', ['objectAction' => 'edit', 'objectId' => \$log['reference']]),
                        'isExternal' => false,
                    ];
                } else {
                    \$eventLabel = \$log['eventName'];
                }

                \$event->addEvent(
                    [
                        'event'      => \$eventTypeKey,
                        'eventId'    => \$eventTypeKey.\$log['id'],
                        'eventLabel' => \$eventLabel,
                        'eventType'  => \$eventTypeName,
                        'timestamp'  => \$log['dateAdded'],
                        'extra'      => [
                            'log' => \$log,
                        ],
                        'icon'      => 'fa-tachometer',
                        'contactId' => \$log['lead_id'],
                    ]
                );
            }
        }
    }

    public function onLeadMerge(LeadMergeEvent \$event)
    {
        \$this->leadStageLogRepository->updateLead(
            \$event->getLoser()->getId(),
            \$event->getVictor()->getId()
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
        return "@bundles/StageBundle/EventListener/LeadSubscriber.php";
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
        return new Source("", "@bundles/StageBundle/EventListener/LeadSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/StageBundle/EventListener/LeadSubscriber.php");
    }
}
