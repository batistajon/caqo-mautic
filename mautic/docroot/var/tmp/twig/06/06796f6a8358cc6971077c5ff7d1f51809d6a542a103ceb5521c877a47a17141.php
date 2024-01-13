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

/* @bundles/CampaignBundle/EventListener/CampaignActionChangeMembershipSubscriber.php */
class __TwigTemplate_9901ecc2fb262f5cc3d6913681d210ea0cf80baed37d8c9f237c64b05a6e40a0 extends Template
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

namespace Mautic\\CampaignBundle\\EventListener;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\Event\\PendingEvent;
use Mautic\\CampaignBundle\\Form\\Type\\CampaignEventAddRemoveLeadType;
use Mautic\\CampaignBundle\\Membership\\MembershipManager;
use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CampaignActionChangeMembershipSubscriber implements EventSubscriberInterface
{
    /**
     * @var MembershipManager
     */
    private \$membershipManager;

    /**
     * @var CampaignModel
     */
    private \$campaignModel;

    /**
     * CampaignActionChangeMembershipSubscriber constructor.
     */
    public function __construct(MembershipManager \$membershipManager, CampaignModel \$campaignModel)
    {
        \$this->membershipManager = \$membershipManager;
        \$this->campaignModel     = \$campaignModel;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            CampaignEvents::CAMPAIGN_ON_BUILD                    => ['addAction', 0],
            CampaignEvents::ON_CAMPAIGN_ACTION_CHANGE_MEMBERSHIP => ['changeMembership', 0],
        ];
    }

    /**
     * Add change membership action.
     */
    public function addAction(CampaignBuilderEvent \$event)
    {
        \$event->addAction(
            'campaign.addremovelead',
            [
                'label'           => 'mautic.campaign.event.addremovelead',
                'description'     => 'mautic.campaign.event.addremovelead_descr',
                'formType'        => CampaignEventAddRemoveLeadType::class,
                'formTypeOptions' => [
                    'include_this' => true,
                ],
                'batchEventName'  => CampaignEvents::ON_CAMPAIGN_ACTION_CHANGE_MEMBERSHIP,
            ]
        );
    }

    public function changeMembership(PendingEvent \$event)
    {
        \$properties          = \$event->getEvent()->getProperties();
        \$contacts            = \$event->getContactsKeyedById();
        \$executingCampaign   = \$event->getEvent()->getCampaign();

        if (!empty(\$properties['addTo'])) {
            \$campaigns = \$this->getCampaigns(\$properties['addTo'], \$executingCampaign);

            /** @var Campaign \$campaign */
            foreach (\$campaigns as \$campaign) {
                \$this->membershipManager->addContacts(
                    \$contacts,
                    \$campaign,
                    true
                );
            }
        }

        if (!empty(\$properties['removeFrom'])) {
            \$campaigns = \$this->getCampaigns(\$properties['removeFrom'], \$executingCampaign);

            /** @var Campaign \$campaign */
            foreach (\$campaigns as \$campaign) {
                \$this->membershipManager->removeContacts(
                    \$event->getContactsKeyedById(),
                    \$campaign,
                    true
                );
            }
        }

        \$event->passAll();
    }

    /**
     * @return array
     */
    private function getCampaigns(array \$campaigns, Campaign \$executingCampaign)
    {
        // Check for the keyword \"this\"
        \$includeExecutingCampaign = false;
        \$key                      = array_search('this', \$campaigns);
        if (false !== \$key) {
            \$includeExecutingCampaign = true;
            // Remove it from the list of IDs
            unset(\$campaigns[\$key]);
        }

        \$campaignEntities = [];
        if (!empty(\$campaigns)) {
            \$campaignEntities = \$this->campaignModel->getEntities(['ids' => \$campaigns, 'ignore_paginator' => true]);
        }

        // Include executing campaign if the keyword this was used
        if (\$includeExecutingCampaign) {
            \$campaignEntities[] = \$executingCampaign;
        }

        return \$campaignEntities;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/EventListener/CampaignActionChangeMembershipSubscriber.php";
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
        return new Source("", "@bundles/CampaignBundle/EventListener/CampaignActionChangeMembershipSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/EventListener/CampaignActionChangeMembershipSubscriber.php");
    }
}
