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

/* @bundles/DynamicContentBundle/EventListener/CampaignSubscriber.php */
class __TwigTemplate_82d416bcc8b1651fc69246baeb4aadf3be87bdc742f923d6a80e7ed3ab2199dd extends Template
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

namespace Mautic\\DynamicContentBundle\\EventListener;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent;
use Mautic\\CoreBundle\\Event\\TokenReplacementEvent;
use Mautic\\DynamicContentBundle\\DynamicContentEvents;
use Mautic\\DynamicContentBundle\\Entity\\DynamicContent;
use Mautic\\DynamicContentBundle\\Form\\Type\\DynamicContentDecisionType;
use Mautic\\DynamicContentBundle\\Form\\Type\\DynamicContentSendType;
use Mautic\\DynamicContentBundle\\Model\\DynamicContentModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Session;

class CampaignSubscriber implements EventSubscriberInterface
{
    /**
     * @var DynamicContentModel
     */
    private \$dynamicContentModel;
    /**
     * @var Session
     */
    private \$session;
    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    public function __construct(DynamicContentModel \$dynamicContentModel, Session \$session, EventDispatcherInterface \$dispatcher)
    {
        \$this->dynamicContentModel = \$dynamicContentModel;
        \$this->session             = \$session;
        \$this->dispatcher          = \$dispatcher;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            CampaignEvents::CAMPAIGN_ON_BUILD                  => ['onCampaignBuild', 0],
            DynamicContentEvents::ON_CAMPAIGN_TRIGGER_DECISION => ['onCampaignTriggerDecision', 0],
            DynamicContentEvents::ON_CAMPAIGN_TRIGGER_ACTION   => ['onCampaignTriggerAction', 0],
        ];
    }

    public function onCampaignBuild(CampaignBuilderEvent \$event)
    {
        \$event->addAction(
            'dwc.push_content',
            [
                'label'                  => 'mautic.dynamicContent.campaign.send_dwc',
                'description'            => 'mautic.dynamicContent.campaign.send_dwc.tooltip',
                'eventName'              => DynamicContentEvents::ON_CAMPAIGN_TRIGGER_ACTION,
                'formType'               => DynamicContentSendType::class,
                'formTypeOptions'        => ['update_select' => 'campaignevent_properties_dynamicContent'],
                'formTheme'              => 'MauticDynamicContentBundle:FormTheme\\DynamicContentPushList',
                'timelineTemplate'       => 'MauticDynamicContentBundle:SubscribedEvents\\Timeline:index.html.php',
                'hideTriggerMode'        => true,
                'connectionRestrictions' => [
                    'anchor' => [
                        'decision.inaction',
                    ],
                    'source' => [
                        'decision' => [
                            'dwc.decision',
                        ],
                    ],
                ],
                'channel'        => 'dynamicContent',
                'channelIdField' => 'dwc_slot_name',
            ]
        );

        \$event->addDecision(
            'dwc.decision',
            [
                'label'           => 'mautic.dynamicContent.campaign.decision_dwc',
                'description'     => 'mautic.dynamicContent.campaign.decision_dwc.tooltip',
                'eventName'       => DynamicContentEvents::ON_CAMPAIGN_TRIGGER_DECISION,
                'formType'        => DynamicContentDecisionType::class,
                'formTypeOptions' => ['update_select' => 'campaignevent_properties_dynamicContent'],
                'formTheme'       => 'MauticDynamicContentBundle:FormTheme\\DynamicContentDecisionList',
                'channel'         => 'dynamicContent',
                'channelIdField'  => 'dynamicContent',
            ]
        );
    }

    /**
     * @return bool|CampaignExecutionEvent
     */
    public function onCampaignTriggerDecision(CampaignExecutionEvent \$event)
    {
        \$eventConfig  = \$event->getConfig();
        \$eventDetails = \$event->getEventDetails();
        \$lead         = \$event->getLead();

        // stop
        if (\$eventConfig['dwc_slot_name'] !== \$eventDetails) {
            \$event->setResult(false);

            return false;
        }

        \$defaultDwc = \$this->dynamicContentModel->getRepository()->getEntity(\$eventConfig['dynamicContent']);

        if (\$defaultDwc instanceof DynamicContent) {
            // Set the default content in case none of the actions return data
            \$this->dynamicContentModel->setSlotContentForLead(\$defaultDwc, \$lead, \$eventDetails);
        }

        \$this->session->set('dwc.slot_name.lead.'.\$lead->getId(), \$eventDetails);

        \$event->stopPropagation();

        return \$event->setResult(true);
    }

    public function onCampaignTriggerAction(CampaignExecutionEvent \$event)
    {
        \$eventConfig = \$event->getConfig();
        \$lead        = \$event->getLead();
        \$slot        = \$this->session->get('dwc.slot_name.lead.'.\$lead->getId());

        \$dwc = \$this->dynamicContentModel->getRepository()->getEntity(\$eventConfig['dynamicContent']);

        if (\$dwc instanceof DynamicContent) {
            // Use translation if available
            list(\$ignore, \$dwc) = \$this->dynamicContentModel->getTranslatedEntity(\$dwc, \$lead);

            if (\$slot) {
                \$this->dynamicContentModel->setSlotContentForLead(\$dwc, \$lead, \$slot);
            }

            \$this->dynamicContentModel->createStatEntry(\$dwc, \$lead, \$slot);

            \$tokenEvent = new TokenReplacementEvent(\$dwc->getContent(), \$lead, ['slot' => \$slot, 'dynamic_content_id' => \$dwc->getId()]);
            \$this->dispatcher->dispatch(DynamicContentEvents::TOKEN_REPLACEMENT, \$tokenEvent);

            \$content = \$tokenEvent->getContent();
            \$content = preg_replace('#<script(.*?)>(.*?)</script>#is', '', \$content);

            \$event->stopPropagation();

            \$result = \$event->setResult(\$content);
            \$event->setChannel('dynamicContent', \$dwc->getId());

            return \$result;
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
        return "@bundles/DynamicContentBundle/EventListener/CampaignSubscriber.php";
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
        return new Source("", "@bundles/DynamicContentBundle/EventListener/CampaignSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/DynamicContentBundle/EventListener/CampaignSubscriber.php");
    }
}