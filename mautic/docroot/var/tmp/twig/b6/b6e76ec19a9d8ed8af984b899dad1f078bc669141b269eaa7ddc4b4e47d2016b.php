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

/* @bundles/LeadBundle/Tests/Tracker/Service/ContactTrackingService/ContactTrackingServiceTest.php */
class __TwigTemplate_45569093b40468c79f431d780c10d0f88738c6f895215b65fcaf7b831beaff99 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Tracker\\Service\\ContactTrackingService;

use Mautic\\CoreBundle\\Helper\\CookieHelper;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadDeviceRepository;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Mautic\\LeadBundle\\Entity\\MergeRecordRepository;
use Mautic\\LeadBundle\\Tracker\\Service\\ContactTrackingService\\ContactTrackingService;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

final class ContactTrackingServiceTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|CookieHelper
     */
    private \$cookieHelperMock;

    /**
     * @var MockObject|LeadDeviceRepository
     */
    private \$leadDeviceRepositoryMock;

    /**
     * @var MockObject|LeadRepository
     */
    private \$leadRepositoryMock;

    /**
     * @var MockObject|RequestStack
     */
    private \$requestStackMock;

    /**
     * @var MockObject|MergeRecordRepository
     */
    private \$mergeRecordRepository;

    protected function setUp(): void
    {
        \$this->cookieHelperMock         = \$this->createMock(CookieHelper::class);
        \$this->leadDeviceRepositoryMock = \$this->createMock(LeadDeviceRepository::class);
        \$this->leadRepositoryMock       = \$this->createMock(LeadRepository::class);
        \$this->requestStackMock         = \$this->createMock(RequestStack::class);
        \$this->mergeRecordRepository    = \$this->createMock(MergeRecordRepository::class);
    }

    public function testGetTrackedIdentifier(): void
    {
        \$trackingId = 'randomTrackingId';

        \$this->cookieHelperMock->expects(\$this->once())
            ->method('getCookie')
            ->with('mautic_session_id', null)
            ->willReturn(\$trackingId);

        \$contactTrackingService = \$this->getContactTrackingService();
        \$this->assertSame(\$trackingId, \$contactTrackingService->getTrackedIdentifier());
    }

    public function testGetTrackedLeadNoRequest(): void
    {
        \$this->requestStackMock->expects(\$this->once())
            ->method('getCurrentRequest')
            ->willReturn(null);

        \$contactTrackingService = \$this->getContactTrackingService();
        \$this->assertNull(\$contactTrackingService->getTrackedLead());
    }

    public function testGetTrackedLeadNoTrackedIdentifier(): void
    {
        \$requestMock = \$this->createMock(Request::class);

        \$this->requestStackMock->expects(\$this->once())
            ->method('getCurrentRequest')
            ->willReturn(\$requestMock);

        \$this->cookieHelperMock->expects(\$this->once())
            ->method('getCookie')
            ->with('mautic_session_id', null)
            ->willReturn(null);

        \$contactTrackingService = \$this->getContactTrackingService();
        \$this->assertNull(\$contactTrackingService->getTrackedLead());
    }

    /**
     * Test no lead id found.
     */
    public function testGetTrackedLeadNoLeadId(): void
    {
        \$requestMock = \$this->createMock(Request::class);
        \$trackingId  = 'randomTrackingId';

        \$this->requestStackMock->expects(\$this->once())
            ->method('getCurrentRequest')
            ->willReturn(\$requestMock);

        \$this->cookieHelperMock->expects(\$this->exactly(2))
            ->method('getCookie')
            ->withConsecutive(
                ['mautic_session_id', null],
                [\$trackingId, null]
            )
            ->willReturnOnConsecutiveCalls(\$trackingId, null);

        \$requestMock->expects(\$this->once())
            ->method('get')
            ->with('mtc_id', null)
            ->willReturn(null);

        \$contactTrackingService = \$this->getContactTrackingService();
        \$this->assertNull(\$contactTrackingService->getTrackedLead());
    }

    /**
     * Test lead id found in request but no lead entity found.
     */
    public function testGetTrackedLeadRequestLeadIdAndNoLeadFound(): void
    {
        \$requestMock = \$this->createMock(Request::class);
        \$trackingId  = 'randomTrackingId';
        \$leadId      = 1;

        \$this->requestStackMock->expects(\$this->once())
            ->method('getCurrentRequest')
            ->willReturn(\$requestMock);

        \$this->cookieHelperMock->expects(\$this->exactly(2))
            ->method('getCookie')
            ->withConsecutive(
                ['mautic_session_id', null],
                [\$trackingId, null]
            )
            ->willReturnOnConsecutiveCalls(\$trackingId, null);

        \$requestMock->expects(\$this->once())
            ->method('get')
            ->with('mtc_id', null)
            ->willReturn(\$leadId);

        \$this->leadRepositoryMock->expects(\$this->once())
            ->method('getEntity')
            ->with(\$leadId)
            ->willReturn(null);

        \$contactTrackingService = \$this->getContactTrackingService();
        \$this->assertNull(\$contactTrackingService->getTrackedLead());
    }

    /**
     * Test lead id found in request and another device is already tracked and associated with lead.
     */
    public function testGetTrackedLeadRequestLeadIdAndAnotherDeviceAlreadyTracked(): void
    {
        \$requestMock = \$this->createMock(Request::class);
        \$trackingId  = 'randomTrackingId';
        \$leadId      = 1;
        \$leadMock    = \$this->createMock(Lead::class);

        \$this->requestStackMock->expects(\$this->once())
            ->method('getCurrentRequest')
            ->willReturn(\$requestMock);

        \$this->cookieHelperMock->expects(\$this->exactly(2))
            ->method('getCookie')
            ->withConsecutive(
                ['mautic_session_id', null],
                [\$trackingId, null]
            )
            ->willReturnOnConsecutiveCalls(\$trackingId, null);

        \$requestMock->expects(\$this->once())
            ->method('get')
            ->with('mtc_id', null)
            ->willReturn(\$leadId);

        \$this->leadRepositoryMock->expects(\$this->once())
            ->method('getEntity')
            ->with(\$leadId)
            ->willReturn(\$leadMock);

        \$this->leadDeviceRepositoryMock->expects(\$this->once())
            ->method('isAnyLeadDeviceTracked')
            ->with(\$leadMock)
            ->willReturn(true);

        \$contactTrackingService = \$this->getContactTrackingService();
        \$this->assertNull(\$contactTrackingService->getTrackedLead());
    }

    /**
     * Test lead id found in request and another device is not tracked and associated with lead.
     */
    public function testGetTrackedLeadRequestLeadIdAndAnotherDeviceNotTracked(): void
    {
        \$requestMock = \$this->createMock(Request::class);
        \$trackingId  = 'randomTrackingId';
        \$leadId      = 1;
        \$leadMock    = \$this->createMock(Lead::class);

        \$this->requestStackMock->expects(\$this->once())
            ->method('getCurrentRequest')
            ->willReturn(\$requestMock);

        \$this->cookieHelperMock->expects(\$this->exactly(2))
            ->method('getCookie')
            ->withConsecutive(
                ['mautic_session_id', null],
                [\$trackingId, null]
            )
            ->willReturnOnConsecutiveCalls(\$trackingId, null);

        \$requestMock->expects(\$this->once())
            ->method('get')
            ->with('mtc_id', null)
            ->willReturn(\$leadId);

        \$this->leadRepositoryMock->expects(\$this->once())
            ->method('getEntity')
            ->with(\$leadId)
            ->willReturn(\$leadMock);

        \$this->leadDeviceRepositoryMock->expects(\$this->once())
            ->method('isAnyLeadDeviceTracked')
            ->with(\$leadMock)
            ->willReturn(false);

        \$contactTrackingService = \$this->getContactTrackingService();
        \$this->assertSame(\$leadMock, \$contactTrackingService->getTrackedLead());
    }

    /**
     * Test lead id found in request and another device is not tracked and associated with lead.
     */
    public function testGetTrackedLeadCookieLeadIdAndAnotherDeviceNotTracked(): void
    {
        \$requestMock = \$this->createMock(Request::class);
        \$trackingId  = 'randomTrackingId';
        \$leadId      = 1;
        \$leadMock    = \$this->createMock(Lead::class);

        \$this->requestStackMock->expects(\$this->once())
            ->method('getCurrentRequest')
            ->willReturn(\$requestMock);

        \$this->cookieHelperMock->expects(\$this->exactly(2))
            ->method('getCookie')
            ->withConsecutive(
                ['mautic_session_id', null],
                [\$trackingId, null]
            )
            ->willReturnOnConsecutiveCalls(\$trackingId, \$leadId);

        \$this->leadRepositoryMock->expects(\$this->once())
            ->method('getEntity')
            ->with(\$leadId)
            ->willReturn(\$leadMock);

        \$this->leadDeviceRepositoryMock->expects(\$this->once())
            ->method('isAnyLeadDeviceTracked')
            ->with(\$leadMock)
            ->willReturn(false);

        \$contactTrackingService = \$this->getContactTrackingService();
        \$this->assertSame(\$leadMock, \$contactTrackingService->getTrackedLead());
    }

    private function getContactTrackingService(): ContactTrackingService
    {
        return new ContactTrackingService(
            \$this->cookieHelperMock,
            \$this->leadDeviceRepositoryMock,
            \$this->leadRepositoryMock,
            \$this->mergeRecordRepository,
            \$this->requestStackMock
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
        return "@bundles/LeadBundle/Tests/Tracker/Service/ContactTrackingService/ContactTrackingServiceTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Tracker/Service/ContactTrackingService/ContactTrackingServiceTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Tracker/Service/ContactTrackingService/ContactTrackingServiceTest.php");
    }
}
