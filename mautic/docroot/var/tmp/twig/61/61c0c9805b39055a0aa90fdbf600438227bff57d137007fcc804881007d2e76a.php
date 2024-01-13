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

/* @bundles/LeadBundle/EventListener/TimelineEventLogCampaignSubscriber.php */
class __TwigTemplate_a54012efb903c543d15f6be907167bf14dc248ecc21e6c39672f06fbc6b1b24d extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Event\\CampaignLeadChangeEvent;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadEventLog;
use Mautic\\LeadBundle\\Entity\\LeadEventLogRepository;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class TimelineEventLogCampaignSubscriber implements EventSubscriberInterface
{
    use TimelineEventLogTrait;

    /**
     * @var UserHelper
     */
    private \$userHelper;

    /**
     * TimelineEventLogCampaignSubscriber constructor.
     */
    public function __construct(LeadEventLogRepository \$eventLogRepository, UserHelper \$userHelper, TranslatorInterface \$translator)
    {
        \$this->eventLogRepository = \$eventLogRepository;
        \$this->userHelper         = \$userHelper;
        \$this->translator         = \$translator;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            CampaignEvents::CAMPAIGN_ON_LEADCHANGE     => 'onChange',
            CampaignEvents::LEAD_CAMPAIGN_BATCH_CHANGE => 'onBatchChange',
            LeadEvents::TIMELINE_ON_GENERATE           => 'onTimelineGenerate',
        ];
    }

    public function onChange(CampaignLeadChangeEvent \$event)
    {
        if (!\$contact = \$event->getLead()) {
            return;
        }

        \$this->writeEntries(
            [\$contact],
            \$event->getCampaign(),
            \$event->getAction()
        );
    }

    public function onBatchChange(CampaignLeadChangeEvent \$event)
    {
        if (!\$contacts = \$event->getLeads()) {
            return;
        }

        \$this->writeEntries(
            \$contacts,
            \$event->getCampaign(),
            \$event->getAction()
        );
    }

    public function onTimelineGenerate(LeadTimelineEvent \$event)
    {
        \$this->addEvents(
            \$event,
            'campaign_membership',
            'mautic.lead.timeline.campaign_membership',
            'fa-clock-o',
            'campaign',
            'campaign'
        );
    }

    /**
     * @param Lead[] \$contacts
     * @param        \$action
     */
    private function writeEntries(array \$contacts, Campaign \$campaign, \$action)
    {
        \$user = \$this->userHelper->getUser();

        \$logs = [];
        foreach (\$contacts as \$contact) {
            \$log = new LeadEventLog();
            \$log->setUserId(\$user->getId())
                ->setUserName(\$user->getUsername() ?: \$this->translator->trans('mautic.core.system'))
                ->setLead(\$contact)
                ->setBundle('campaign')
                ->setAction(\$action)
                ->setObject('campaign')
                ->setObjectId(\$campaign->getId())
                ->setProperties(
                    [
                        'campaign_id'        => \$campaign->getId(),
                        'campaign_name'      => \$campaign->getName(),
                        'object_description' => \$campaign->getName(),
                    ]
                );

            \$logs[] = \$log;
        }

        \$this->eventLogRepository->saveEntities(\$logs);
        \$this->eventLogRepository->clear();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/EventListener/TimelineEventLogCampaignSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/TimelineEventLogCampaignSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/EventListener/TimelineEventLogCampaignSubscriber.php");
    }
}
