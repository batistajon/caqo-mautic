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

/* @bundles/LeadBundle/Tests/EventListener/CompanySubscriberTest.php */
class __TwigTemplate_cf0303d84ddb9fc92b214a5638a260ebd1e24f25b8bd04a74824d1645a836b49 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Event\\CompanyEvent;
use Mautic\\LeadBundle\\EventListener\\CompanySubscriber;
use Mautic\\LeadBundle\\LeadEvents;

class CompanySubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetSubscribedEvents()
    {
        \$ipLookupHelper = \$this->createMock(IpLookupHelper::class);
        \$auditLogModel  = \$this->createMock(AuditLogModel::class);
        \$subscriber     = new CompanySubscriber(\$ipLookupHelper, \$auditLogModel);

        \$this->assertEquals(
            [
                LeadEvents::COMPANY_POST_SAVE   => ['onCompanyPostSave', 0],
                LeadEvents::COMPANY_POST_DELETE => ['onCompanyDelete', 0],
            ],
            \$subscriber->getSubscribedEvents()
        );
    }

    public function testOnCompanyPostSave()
    {
        \$this->onCompanyPostSaveMethodCall(false); // update company log
        \$this->onCompanyPostSaveMethodCall(true); // create company log
    }

    public function testOnCompanyDelete()
    {
        \$companyId        = 1;
        \$companyName      = 'name';
        \$ip               = '127.0.0.2';

        \$log = [
            'bundle'    => 'lead',
            'object'    => 'company',
            'objectId'  => \$companyId,
            'action'    => 'delete',
            'details'   => ['name', \$companyName],
            'ipAddress' => \$ip,
        ];

        \$ipLookupHelper = \$this->createMock(IpLookupHelper::class);
        \$ipLookupHelper->expects(\$this->once())
            ->method('getIpAddressFromRequest')
            ->will(\$this->returnValue(\$ip));

        \$auditLogModel = \$this->createMock(AuditLogModel::class);
        \$auditLogModel->expects(\$this->once())
            ->method('writeToLog')
            ->with(\$log);

        \$subscriber = new CompanySubscriber(\$ipLookupHelper, \$auditLogModel);

        \$company            = \$this->createMock(Company::class);
        \$company->deletedId = \$companyId;
        \$company->expects(\$this->once())
            ->method('getPrimaryIdentifier')
            ->will(\$this->returnValue(\$companyName));

        \$event = \$this->createMock(CompanyEvent::class);
        \$event->expects(\$this->once())
            ->method('getCompany')
            ->will(\$this->returnValue(\$company));

        \$subscriber->onCompanyDelete(\$event);
    }

    /**
     * Test create or update company logging.
     *
     * @param bool \$isNew
     */
    private function onCompanyPostSaveMethodCall(\$isNew)
    {
        \$companyId = 1;
        \$changes   = ['changes'];
        \$ip        = '127.0.0.2';

        \$log = [
            'bundle'    => 'lead',
            'object'    => 'company',
            'objectId'  => \$companyId,
            'action'    => (\$isNew) ? 'create' : 'update',
            'details'   => \$changes,
            'ipAddress' => \$ip,
        ];

        \$ipLookupHelper = \$this->createMock(IpLookupHelper::class);
        \$ipLookupHelper->expects(\$this->once())
            ->method('getIpAddressFromRequest')
            ->will(\$this->returnValue(\$ip));

        \$auditLogModel = \$this->createMock(AuditLogModel::class);
        \$auditLogModel->expects(\$this->once())
            ->method('writeToLog')
            ->with(\$log);

        \$subscriber = new CompanySubscriber(\$ipLookupHelper, \$auditLogModel);

        \$company = \$this->createMock(Company::class);
        \$company->expects(\$this->once())
            ->method('getId')
            ->will(\$this->returnValue(\$companyId));

        \$event = \$this->createMock(CompanyEvent::class);
        \$event->expects(\$this->once())
            ->method('getCompany')
            ->will(\$this->returnValue(\$company));
        \$event->expects(\$this->once())
            ->method('getChanges')
            ->will(\$this->returnValue(\$changes));
        \$event->expects(\$this->once())
            ->method('isNew')
            ->will(\$this->returnValue(\$isNew));

        \$subscriber->onCompanyPostSave(\$event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/EventListener/CompanySubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/CompanySubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/EventListener/CompanySubscriberTest.php");
    }
}