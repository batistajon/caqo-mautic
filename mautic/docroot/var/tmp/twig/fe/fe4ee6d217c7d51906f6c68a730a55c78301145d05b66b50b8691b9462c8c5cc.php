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

/* @bundles/FormBundle/EventListener/LeadSubscriber.php */
class __TwigTemplate_5f2c80ceb67f1caed38c7898f9e20c56e226a9d1f8e8cf6e5f368cc90217c036 extends Template
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

namespace Mautic\\FormBundle\\EventListener;

use Mautic\\FormBundle\\Entity\\SubmissionRepository;
use Mautic\\FormBundle\\Model\\FormModel;
use Mautic\\LeadBundle\\Event\\LeadMergeEvent;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\PageBundle\\Model\\PageModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class LeadSubscriber implements EventSubscriberInterface
{
    /**
     * @var FormModel
     */
    private \$formModel;

    /**
     * @var PageModel
     */
    private \$pageModel;

    /**
     * @var SubmissionRepository
     */
    private \$submissionRepository;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var RouterInterface
     */
    private \$router;

    public function __construct(
        FormModel \$formModel,
        PageModel \$pageModel,
        SubmissionRepository \$submissionRepository,
        TranslatorInterface \$translator,
        RouterInterface \$router
    ) {
        \$this->formModel            = \$formModel;
        \$this->pageModel            = \$pageModel;
        \$this->submissionRepository = \$submissionRepository;
        \$this->translator           = \$translator;
        \$this->router               = \$router;
    }

    /**
     * @return array
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
        \$eventTypeKey  = 'form.submitted';
        \$eventTypeName = \$this->translator->trans('mautic.form.event.submitted');
        \$event->addEventType(\$eventTypeKey, \$eventTypeName);
        \$event->addSerializerGroup(['formList', 'submissionEventDetails']);

        if (!\$event->isApplicable(\$eventTypeKey)) {
            return;
        }

        \$rows = \$this->submissionRepository->getSubmissions(\$event->getQueryOptions());

        // Add total to counter
        \$event->addToCounter(\$eventTypeKey, \$rows);

        if (!\$event->isEngagementCount()) {
            // Add the submissions to the event array
            foreach (\$rows['results'] as \$row) {
                // Convert to local from UTC
                \$form       = \$this->formModel->getEntity(\$row['form_id']);
                \$submission = \$this->submissionRepository->getEntity(\$row['id']);

                \$event->addEvent(
                    [
                        'event'      => \$eventTypeKey,
                        'eventId'    => \$eventTypeKey.\$row['id'],
                        'eventLabel' => [
                            'label' => \$form->getName(),
                            'href'  => \$this->router->generate('mautic_form_action', ['objectAction' => 'view', 'objectId' => \$form->getId()]),
                        ],
                        'eventType' => \$eventTypeName,
                        'timestamp' => \$row['dateSubmitted'],
                        'extra'     => [
                            'submission' => \$submission,
                            'form'       => \$form,
                            'page'       => \$this->pageModel->getEntity(\$row['page_id']),
                        ],
                        'contentTemplate' => 'MauticFormBundle:SubscribedEvents\\Timeline:index.html.php',
                        'icon'            => 'fa-pencil-square-o',
                        'contactId'       => \$row['lead_id'],
                    ]
                );
            }
        }
    }

    public function onLeadMerge(LeadMergeEvent \$event)
    {
        \$this->submissionRepository->updateLead(\$event->getLoser()->getId(), \$event->getVictor()->getId());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/EventListener/LeadSubscriber.php";
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
        return new Source("", "@bundles/FormBundle/EventListener/LeadSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/EventListener/LeadSubscriber.php");
    }
}
