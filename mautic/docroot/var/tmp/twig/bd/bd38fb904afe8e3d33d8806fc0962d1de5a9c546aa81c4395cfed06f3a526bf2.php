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

/* @bundles/CampaignBundle/Tests/EventListener/CampaignSubscriberTest.php */
class __TwigTemplate_a3d010c0840c467806b6c38e8a49729fb09a05826b59c491551cbab39b3a509f extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\EventListener;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Event\\CampaignEvent;
use Mautic\\CampaignBundle\\EventListener\\CampaignSubscriber;
use Mautic\\CampaignBundle\\Service\\Campaign as CampaignService;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\CoreBundle\\Service\\FlashBag;
use PHPUnit\\Framework\\TestCase;

class CampaignSubscriberTest extends TestCase
{
    private \$ipLookupHelper;
    private \$auditLogModel;
    private \$campaignService;
    private \$flashBag;

    /**
     * @var CampaignSubscriber
     */
    private \$subscriber;

    public function setUp(): void
    {
        parent::setUp();

        \$this->ipLookupHelper  = \$this->createMock(IpLookupHelper::class);
        \$this->auditLogModel   = \$this->createMock(AuditLogModel::class);
        \$this->campaignService = \$this->createMock(CampaignService::class);
        \$this->flashBag        = \$this->createMock(FlashBag::class);

        \$this->subscriber = new CampaignSubscriber(
            \$this->ipLookupHelper,
            \$this->auditLogModel,
            \$this->campaignService,
            \$this->flashBag
        );
    }

    public function testGetSubscribedEvents(): void
    {
        self::assertEquals(
            [
                CampaignEvents::CAMPAIGN_POST_SAVE     => ['onCampaignPostSave', 0],
                CampaignEvents::CAMPAIGN_POST_DELETE   => ['onCampaignDelete', 0],
            ],
            CampaignSubscriber::getSubscribedEvents()
        );
    }

    public function testOnCampaignPostSaveNothingHappened(): void
    {
        \$campaign            = new Campaign();
        \$event               = new CampaignEvent(\$campaign);

        \$this->auditLogModel->expects(\$this->never())
            ->method('writeToLog');

        \$this->subscriber->onCampaignPostSave(\$event);
    }

    public function testOnCampaignPostSaveUnpublished(): void
    {
        \$ipAddress    = 'someIp';

        \$dateTime = new \\DateTime();
        \$dateTime->setTimestamp(1597752193);

        \$campaign = new Campaign();
        \$campaign->setPublishDown(\$dateTime);

        \$event = new CampaignEvent(\$campaign);

        \$this->ipLookupHelper->expects(\$this->once())
            ->method('getIpAddressFromRequest')
            ->willReturn(\$ipAddress);

        \$expectedLog = [
            'bundle'    => 'campaign',
            'object'    => 'campaign',
            'objectId'  => \$campaign->getId(),
            'action'    => 'update',
            'details'   => [
                'publishDown' => [
                    0 => null,
                    1 => '2020-08-18T12:03:13+00:00',
                ],
            ],
            'ipAddress' => \$ipAddress,
        ];

        \$this->auditLogModel->expects(\$this->once())
            ->method('writeToLog')
            ->with(\$expectedLog);

        \$this->subscriber->onCampaignPostSave(\$event);
    }

    public function testOnCampaignPostSaveCreateFlash(): void
    {
        \$ipAddress    = 'someIp';
        \$campaignName = 'campaignName';

        \$dateTime = new \\DateTime();
        \$dateTime->setTimestamp(1597752193);

        \$campaign = new Campaign();
        \$campaign->setPublishUp(\$dateTime);
        \$campaign->setName(\$campaignName);

        \$event = new CampaignEvent(\$campaign);

        \$this->campaignService->expects(\$this->once())
            ->method('hasUnpublishedEmail')
            ->with(null)
            ->willReturn(true);

        \$this->flashBag->expects(\$this->once())
            ->method('add')
            ->with(
                'mautic.core.notice.campaign.unpublished.email',
                [
                    '%name%' => \$campaign->getName(),
                ]
            );

        \$this->ipLookupHelper->expects(\$this->once())
            ->method('getIpAddressFromRequest')
            ->willReturn(\$ipAddress);

        \$expectedLog = [
            'action'    => 'update',
            'bundle'    => 'campaign',
            'details'   => [
                'name' => [
                    0 => null,
                    1 => \$campaignName,
                ],
                'publishUp' => [
                    0 => null,
                    1 => '2020-08-18T12:03:13+00:00',
                ],
            ],
            'ipAddress' => \$ipAddress,
            'object'    => 'campaign',
            'objectId'  => \$campaign->getId(),
        ];

        \$this->auditLogModel->expects(\$this->once())
            ->method('writeToLog')
            ->with(\$expectedLog);

        \$this->subscriber->onCampaignPostSave(\$event);
    }

    public function testOnCampaignDelete(): void
    {
        \$deletedId    = 1;
        \$campaignName = 'campaignName';
        \$ipAddress    = 'someIp';

        \$campaign            = new Campaign();
        \$campaign->deletedId = \$deletedId;
        \$campaign->setName(\$campaignName);

        \$event = new CampaignEvent(\$campaign);

        \$this->ipLookupHelper->expects(\$this->once())
            ->method('getIpAddressFromRequest')
            ->willReturn(\$ipAddress);

        \$expectedLog = [
            'bundle'    => 'campaign',
            'object'    => 'campaign',
            'objectId'  => \$deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$campaignName],
            'ipAddress' => \$ipAddress,
        ];

        \$this->auditLogModel->expects(\$this->once())
            ->method('writeToLog')
            ->with(\$expectedLog);

        \$this->subscriber->onCampaignDelete(\$event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/EventListener/CampaignSubscriberTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/EventListener/CampaignSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/EventListener/CampaignSubscriberTest.php");
    }
}
