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

/* @bundles/CampaignBundle/Tests/Executioner/Logger/EventLoggerTest.php */
class __TwigTemplate_7d51d72a5c6d6ba4be4b910854aeca4e99a9c38977286349aea19fc070f26f0f extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Executioner\\Logger;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CampaignBundle\\Entity\\LeadRepository;
use Mautic\\CampaignBundle\\Executioner\\Logger\\EventLogger;
use Mautic\\CampaignBundle\\Model\\SummaryModel;
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class EventLoggerTest extends TestCase
{
    /**
     * @var LeadRepository|MockObject
     */
    private \$ipLookupHelper;

    /**
     * @var ContactTracker|MockObject
     */
    private \$contactTracker;

    /**
     * @var LeadEventLogRepository|MockObject
     */
    private \$leadEventLogRepository;

    /**
     * @var LeadRepository|MockObject
     */
    private \$leadRepository;

    /**
     * @var SummaryModel|MockObject
     */
    private \$summaryModel;

    protected function setUp(): void
    {
        \$this->ipLookupHelper         = \$this->createMock(IpLookupHelper::class);
        \$this->contactTracker         = \$this->createMock(ContactTracker::class);
        \$this->leadEventLogRepository = \$this->createMock(LeadEventLogRepository::class);
        \$this->leadRepository         = \$this->createMock(LeadRepository::class);
        \$this->summaryModel           = \$this->createMock(SummaryModel::class);
    }

    public function testAllLogsAreReturnedWithFinalPersist(): void
    {
        \$logCollection = new ArrayCollection();
        while (\$logCollection->count() < 60) {
            \$log = \$this->createMock(LeadEventLog::class);
            \$log->method('getId')
                ->willReturn(\$logCollection->count() + 1);

            \$logCollection->add(\$log);
        }

        \$this->leadEventLogRepository->expects(\$this->exactly(3))
            ->method('saveEntities');

        \$logger = \$this->getLogger();
        foreach (\$logCollection as \$log) {
            \$logger->queueToPersist(\$log);
        }

        \$persistedLogs = \$logger->persistQueuedLogs();

        \$this->assertEquals(\$persistedLogs->count(), \$logCollection->count());
        \$this->assertEquals(\$logCollection->getValues(), \$persistedLogs->getValues());
    }

    public function testBuildLogEntry()
    {
        \$this->ipLookupHelper->method('getIpAddress')->willReturn(new IpAddress());

        \$this->leadRepository->expects(\$this->exactly(3))
            ->method('getContactRotations')
            ->willReturnOnConsecutiveCalls([1 => 1], [1 => 2], [1 => 1]);

        \$campaign = \$this->createMock(Campaign::class);
        \$campaign->method('getId')->willReturnOnConsecutiveCalls([1, 1, 2]);

        \$event = \$this->createMock(Event::class);
        \$event->method('getCampaign')->willReturn(\$campaign);

        \$contact = \$this->createMock(Lead::class);
        \$contact->method('getId')->willReturn(1);

        // rotation for campaign 1 and contact 1
        \$log = \$this->getLogger()->buildLogEntry(\$event, \$contact, false);
        \$this->assertEquals(1, \$log->getRotation());

        // rotation for campaign 1 and contact 1
        \$log = \$this->getLogger()->buildLogEntry(\$event, \$contact, false);
        \$this->assertEquals(2, \$log->getRotation());

        // rotation for campaign 2 and contact 1
        \$log = \$this->getLogger()->buildLogEntry(\$event, \$contact, false);
        \$this->assertEquals(1, \$log->getRotation());
    }

    private function getLogger(): EventLogger
    {
        return new EventLogger(
            \$this->ipLookupHelper,
            \$this->contactTracker,
            \$this->leadEventLogRepository,
            \$this->leadRepository,
            \$this->summaryModel
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
        return "@bundles/CampaignBundle/Tests/Executioner/Logger/EventLoggerTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/Logger/EventLoggerTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Executioner/Logger/EventLoggerTest.php");
    }
}
