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

/* @bundles/CampaignBundle/EventListener/CampaignSubscriber.php */
class __TwigTemplate_9cc4f6e26db631dfc0e02378d6466c5736360adf149d57b2181a69a4a4400fa9 extends Template
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
use Mautic\\CampaignBundle\\Event as Events;
use Mautic\\CampaignBundle\\Service\\Campaign as CampaignService;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\CoreBundle\\Service\\FlashBag;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CampaignSubscriber implements EventSubscriberInterface
{
    /**
     * @var IpLookupHelper
     */
    private \$ipLookupHelper;

    /**
     * @var AuditLogModel
     */
    private \$auditLogModel;

    /**
     * @var CampaignService
     */
    private \$campaignService;

    /**
     * @var FlashBag
     */
    private \$flashBag;

    public function __construct(
        IpLookupHelper \$ipLookupHelper,
        AuditLogModel \$auditLogModel,
        CampaignService \$campaignService,
        FlashBag \$flashBag
    ) {
        \$this->ipLookupHelper   = \$ipLookupHelper;
        \$this->auditLogModel    = \$auditLogModel;
        \$this->campaignService  = \$campaignService;
        \$this->flashBag         = \$flashBag;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            CampaignEvents::CAMPAIGN_POST_SAVE     => ['onCampaignPostSave', 0],
            CampaignEvents::CAMPAIGN_POST_DELETE   => ['onCampaignDelete', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onCampaignPostSave(Events\\CampaignEvent \$event)
    {
        \$campaign = \$event->getCampaign();
        \$details  = \$event->getChanges();

        if (\$campaign->isPublished() && \$this->campaignService->hasUnpublishedEmail(\$campaign->getId())) {
            \$this->setUnpublishedMailFlashMessage(\$campaign);
        }

        //don't set leads
        unset(\$details['leads']);

        if (!empty(\$details)) {
            \$log = [
                'bundle'    => 'campaign',
                'object'    => 'campaign',
                'objectId'  => \$campaign->getId(),
                'action'    => (\$event->isNew()) ? 'create' : 'update',
                'details'   => \$details,
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a delete entry to the audit log.
     */
    public function onCampaignDelete(Events\\CampaignEvent \$event)
    {
        \$campaign = \$event->getCampaign();
        \$log      = [
            'bundle'    => 'campaign',
            'object'    => 'campaign',
            'objectId'  => \$campaign->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$campaign->getName()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }

    private function setUnpublishedMailFlashMessage(Campaign \$campaign)
    {
        \$this->flashBag->add(
            'mautic.core.notice.campaign.unpublished.email',
            [
                '%name%' => \$campaign->getName(),
            ]
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
        return "@bundles/CampaignBundle/EventListener/CampaignSubscriber.php";
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
        return new Source("", "@bundles/CampaignBundle/EventListener/CampaignSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/EventListener/CampaignSubscriber.php");
    }
}
