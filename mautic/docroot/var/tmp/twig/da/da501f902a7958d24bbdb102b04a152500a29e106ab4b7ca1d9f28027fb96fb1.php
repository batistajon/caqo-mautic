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

/* @bundles/IntegrationsBundle/Tests/Unit/EventListener/LeadSubscriberTest.php */
class __TwigTemplate_228683976598965734a1f26cc5ac894b6469c33ae83985e88387d881f4618305 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\EventListener;

use Mautic\\IntegrationsBundle\\Entity\\FieldChangeRepository;
use Mautic\\IntegrationsBundle\\Entity\\ObjectMappingRepository;
use Mautic\\IntegrationsBundle\\EventListener\\LeadSubscriber;
use Mautic\\IntegrationsBundle\\Helper\\SyncIntegrationsHelper;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\EncodedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Mautic\\IntegrationsBundle\\Sync\\VariableExpresser\\VariableExpresserHelperInterface;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Event\\CompanyEvent;
use Mautic\\LeadBundle\\Event\\LeadEvent;
use Mautic\\LeadBundle\\LeadEvents;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class LeadSubscriberTest extends TestCase
{
    /**
     * @var MockObject|FieldChangeRepository
     */
    private \$fieldChangeRepository;

    /**
     * @var MockObject|ObjectMappingRepository
     */
    private \$objectMappingRepository;

    /**
     * @var MockObject|VariableExpresserHelperInterface
     */
    private \$variableExpresserHelper;

    /**
     * @var MockObject|SyncIntegrationsHelper
     */
    private \$syncIntegrationsHelper;

    /**
     * @var MockObject|LeadEvent
     */
    private \$leadEvent;

    /**
     * @var MockObject|CompanyEvent
     */
    private \$companyEvent;

    /**
     * @var LeadSubscriber
     */
    private \$subscriber;

    public function setUp(): void
    {
        parent::setUp();

        \$this->fieldChangeRepository   = \$this->createMock(FieldChangeRepository::class);
        \$this->objectMappingRepository = \$this->createMock(ObjectMappingRepository::class);
        \$this->variableExpresserHelper = \$this->createMock(VariableExpresserHelperInterface::class);
        \$this->syncIntegrationsHelper  = \$this->createMock(SyncIntegrationsHelper::class);
        \$this->leadEvent               = \$this->createMock(LeadEvent::class);
        \$this->companyEvent            = \$this->createMock(CompanyEvent::class);
        \$this->subscriber              = new LeadSubscriber(
            \$this->fieldChangeRepository,
            \$this->objectMappingRepository,
            \$this->variableExpresserHelper,
            \$this->syncIntegrationsHelper
        );
    }

    public function testGetSubscribedEvents(): void
    {
        \$this->assertEquals(
            [
                LeadEvents::LEAD_POST_SAVE      => ['onLeadPostSave', 0],
                LeadEvents::LEAD_POST_DELETE    => ['onLeadPostDelete', 255],
                LeadEvents::COMPANY_POST_SAVE   => ['onCompanyPostSave', 0],
                LeadEvents::COMPANY_POST_DELETE => ['onCompanyPostDelete', 255],
                LeadEvents::LEAD_COMPANY_CHANGE => ['onLeadCompanyChange', 128],
            ],
            LeadSubscriber::getSubscribedEvents()
        );
    }

    public function testOnLeadPostSaveAnonymousLead(): void
    {
        \$lead = \$this->createMock(Lead::class);
        \$lead->expects(\$this->once())
            ->method('isAnonymous')
            ->willReturn(true);
        \$lead->expects(\$this->never())
            ->method('getChanges');

        \$this->leadEvent->expects(\$this->once())
            ->method('getLead')
            ->willReturn(\$lead);

        \$this->syncIntegrationsHelper->expects(\$this->never())
            ->method('hasObjectSyncEnabled');

        \$this->subscriber->onLeadPostSave(\$this->leadEvent);
    }

    public function testOnLeadPostSaveLeadObjectSyncNotEnabled(): void
    {
        \$lead = \$this->createMock(Lead::class);
        \$lead->expects(\$this->once())
            ->method('isAnonymous')
            ->willReturn(false);
        \$lead->expects(\$this->never())
            ->method('getChanges');

        \$this->leadEvent->expects(\$this->once())
            ->method('getLead')
            ->willReturn(\$lead);

        \$this->syncIntegrationsHelper->expects(\$this->once())
            ->method('hasObjectSyncEnabled')
            ->with(Contact::NAME)
            ->willReturn(false);

        \$this->subscriber->onLeadPostSave(\$this->leadEvent);
    }

    public function testOnLeadPostSaveNoAction(): void
    {
        \$fieldChanges = [];

        \$lead = \$this->createMock(Lead::class);
        \$lead->expects(\$this->once())
            ->method('isAnonymous')
            ->willReturn(false);
        \$lead->expects(\$this->once())
            ->method('getChanges')
            ->willReturn(\$fieldChanges);

        \$this->leadEvent->expects(\$this->once())
            ->method('getLead')
            ->willReturn(\$lead);

        \$this->syncIntegrationsHelper->expects(\$this->once())
            ->method('hasObjectSyncEnabled')
            ->with(Contact::NAME)
            ->willReturn(true);

        \$this->subscriber->onLeadPostSave(\$this->leadEvent);
    }

    public function testOnLeadPostSaveRecordChanges(): void
    {
        \$fieldName    = 'fieldName';
        \$oldValue     = 'oldValue';
        \$newValue     = 'newValue';
        \$fieldChanges = [
            'fields' => [
                \$fieldName => [
                    \$oldValue,
                    \$newValue,
                ],
            ],
        ];
        \$objectId   = 1;
        \$objectType = Lead::class;

        \$lead = \$this->createMock(Lead::class);
        \$lead->expects(\$this->once())
            ->method('isAnonymous')
            ->willReturn(false);
        \$lead->expects(\$this->once())
            ->method('getChanges')
            ->willReturn(\$fieldChanges);
        \$lead->expects(\$this->once())
            ->method('getId')
            ->willReturn(\$objectId);

        \$this->leadEvent->expects(\$this->once())
            ->method('getLead')
            ->willReturn(\$lead);

        \$this->syncIntegrationsHelper->expects(\$this->once())
            ->method('hasObjectSyncEnabled')
            ->with(Contact::NAME)
            ->willReturn(true);

        \$this->handleRecordFieldChanges(\$fieldChanges['fields'], \$objectId, \$objectType);

        \$this->subscriber->onLeadPostSave(\$this->leadEvent);
    }

    public function testOnLeadPostSaveRecordChangesWithOwnerChange(): void
    {
        \$newOwnerId   = 5;
        \$fieldChanges = [
            'owner' => [
                2,
                \$newOwnerId,
            ],
        ];
        \$objectId   = 1;
        \$objectType = Lead::class;

        \$lead = \$this->createMock(Lead::class);
        \$lead->expects(\$this->once())
            ->method('isAnonymous')
            ->willReturn(false);
        \$lead->expects(\$this->once())
            ->method('getChanges')
            ->willReturn(\$fieldChanges);
        \$lead->expects(\$this->once())
            ->method('getId')
            ->willReturn(\$objectId);

        \$this->leadEvent->expects(\$this->once())
            ->method('getLead')
            ->willReturn(\$lead);

        \$this->syncIntegrationsHelper->expects(\$this->once())
            ->method('hasObjectSyncEnabled')
            ->with(Contact::NAME)
            ->willReturn(true);

        \$fieldChanges['fields']['owner_id'] = \$fieldChanges['owner'];

        \$this->handleRecordFieldChanges(\$fieldChanges['fields'], \$objectId, \$objectType);

        \$this->subscriber->onLeadPostSave(\$this->leadEvent);
    }

    public function testOnLeadPostSaveRecordChangesWithPointChange(): void
    {
        \$newPointCount   = 5;
        \$fieldChanges    = [
            'points' => [
                2,
                \$newPointCount,
            ],
        ];
        \$objectId   = 1;
        \$objectType = Lead::class;

        \$lead = \$this->createMock(Lead::class);
        \$lead->expects(\$this->once())
            ->method('isAnonymous')
            ->willReturn(false);
        \$lead->expects(\$this->once())
            ->method('getChanges')
            ->willReturn(\$fieldChanges);
        \$lead->expects(\$this->once())
            ->method('getId')
            ->willReturn(\$objectId);

        \$this->leadEvent->expects(\$this->once())
            ->method('getLead')
            ->willReturn(\$lead);

        \$this->syncIntegrationsHelper->expects(\$this->once())
            ->method('hasObjectSyncEnabled')
            ->with(Contact::NAME)
            ->willReturn(true);

        \$fieldChanges['fields']['points'] = \$fieldChanges['points'];

        \$this->handleRecordFieldChanges(\$fieldChanges['fields'], \$objectId, \$objectType);

        \$this->subscriber->onLeadPostSave(\$this->leadEvent);
    }

    public function testOnLeadPostDelete(): void
    {
        \$deletedId       = 5;
        \$lead            = new Lead();
        \$lead->deletedId = \$deletedId;
        \$lead->setEmail('john@doe.email');

        \$this->leadEvent->method('getLead')
            ->willReturn(\$lead);

        \$this->fieldChangeRepository->expects(\$this->once())
            ->method('deleteEntitiesForObject')
            ->with((int) \$deletedId, Lead::class);

        \$this->objectMappingRepository->expects(\$this->once())
            ->method('deleteEntitiesForObject')
            ->with((int) \$deletedId, MauticSyncDataExchange::OBJECT_CONTACT);

        \$this->subscriber->onLeadPostDelete(\$this->leadEvent);
    }

    public function testOnLeadPostDeleteForAnonymousLeads(): void
    {
        \$deletedId       = 5;
        \$lead            = new Lead();
        \$lead->deletedId = \$deletedId;

        \$this->leadEvent->method('getLead')
            ->willReturn(\$lead);

        \$this->fieldChangeRepository->expects(\$this->never())
            ->method('deleteEntitiesForObject');

        \$this->objectMappingRepository->expects(\$this->never())
            ->method('deleteEntitiesForObject');

        \$this->subscriber->onLeadPostDelete(\$this->leadEvent);
    }

    public function testOnCompanyPostSaveSyncNotEnabled(): void
    {
        \$this->syncIntegrationsHelper->expects(\$this->once())
            ->method('hasObjectSyncEnabled')
            ->with(MauticSyncDataExchange::OBJECT_COMPANY)
            ->willReturn(false);

        \$this->companyEvent->expects(\$this->never())
            ->method('getCompany');

        \$this->subscriber->onCompanyPostSave(\$this->companyEvent);
    }

    public function testOnCompanyPostSaveSyncNoAction(): void
    {
        \$fieldChanges = [];

        \$company = \$this->createMock(Company::class);
        \$company->expects(\$this->once())
            ->method('getChanges')
            ->willReturn(\$fieldChanges);

        \$this->companyEvent->expects(\$this->once())
            ->method('getCompany')
            ->willReturn(\$company);

        \$this->syncIntegrationsHelper->expects(\$this->once())
            ->method('hasObjectSyncEnabled')
            ->with(MauticSyncDataExchange::OBJECT_COMPANY)
            ->willReturn(true);

        \$this->subscriber->onCompanyPostSave(\$this->companyEvent);
    }

    public function testOnCompanyPostSaveSyncRecordChanges(): void
    {
        \$fieldName    = 'fieldName';
        \$oldValue     = 'oldValue';
        \$newValue     = 'newValue';
        \$fieldChanges = [
            'fields' => [
                \$fieldName => [
                    \$oldValue,
                    \$newValue,
                ],
            ],
        ];
        \$objectId   = 1;
        \$objectType = Company::class;

        \$company = \$this->createMock(Company::class);
        \$company->expects(\$this->once())
            ->method('getChanges')
            ->willReturn(\$fieldChanges);
        \$company->expects(\$this->once())
            ->method('getChanges')
            ->willReturn(\$fieldChanges);
        \$company->expects(\$this->once())
            ->method('getId')
            ->willReturn(\$objectId);

        \$this->companyEvent->expects(\$this->once())
            ->method('getCompany')
            ->willReturn(\$company);

        \$this->syncIntegrationsHelper->expects(\$this->once())
            ->method('hasObjectSyncEnabled')
            ->with(MauticSyncDataExchange::OBJECT_COMPANY)
            ->willReturn(true);

        \$this->handleRecordFieldChanges(\$fieldChanges['fields'], \$objectId, \$objectType);

        \$this->subscriber->onCompanyPostSave(\$this->companyEvent);
    }

    public function testOnCompanyPostSaveRecordChangesWithOwnerChange(): void
    {
        \$newOwnerId   = 5;
        \$fieldChanges = [
            'owner' => [
                2,
                \$newOwnerId,
            ],
        ];
        \$objectId   = 1;
        \$objectType = Company::class;

        \$company = \$this->createMock(Company::class);
        \$company->expects(\$this->once())
            ->method('getChanges')
            ->willReturn(\$fieldChanges);
        \$company->expects(\$this->once())
            ->method('getId')
            ->willReturn(\$objectId);

        \$this->companyEvent->expects(\$this->once())
            ->method('getCompany')
            ->willReturn(\$company);

        \$this->syncIntegrationsHelper->expects(\$this->once())
            ->method('hasObjectSyncEnabled')
            ->with(MauticSyncDataExchange::OBJECT_COMPANY)
            ->willReturn(true);

        \$fieldChanges['fields']['owner_id'] = \$fieldChanges['owner'];

        \$this->handleRecordFieldChanges(\$fieldChanges['fields'], \$objectId, \$objectType);

        \$this->subscriber->onCompanyPostSave(\$this->companyEvent);
    }

    public function testOnCompanyPostDelete(): void
    {
        \$deletedId       = 5;
        \$lead            = new Company();
        \$lead->deletedId = \$deletedId;

        \$this->companyEvent->expects(\$this->exactly(2))
            ->method('getCompany')
            ->willReturn(\$lead);

        \$this->fieldChangeRepository->expects(\$this->once())
            ->method('deleteEntitiesForObject')
            ->with((int) \$deletedId, MauticSyncDataExchange::OBJECT_COMPANY);

        \$this->objectMappingRepository->expects(\$this->once())
            ->method('deleteEntitiesForObject')
            ->with((int) \$deletedId, MauticSyncDataExchange::OBJECT_COMPANY);

        \$this->subscriber->onCompanyPostDelete(\$this->companyEvent);
    }

    private function handleRecordFieldChanges(array \$fieldChanges, int \$objectId, string \$objectType): void
    {
        \$integrationName     = 'testIntegration';
        \$enabledIntegrations = [\$integrationName];

        \$this->syncIntegrationsHelper->expects(\$this->any())
            ->method('getEnabledIntegrations')
            ->willReturn(\$enabledIntegrations);

        \$fieldNames = [];
        \$values     = [];
        \$valueDAOs  = [];
        \$i          = 0;
        foreach (\$fieldChanges as \$fieldName => [\$oldValue, \$newValue]) {
            \$values[]     = [\$newValue];
            \$valueDAOs[]  = new EncodedValueDAO(\$objectType, (string) \$newValue);
            \$fieldNames[] = \$fieldName;
        }

        \$this->variableExpresserHelper->method('encodeVariable')
                ->withConsecutive(...\$values)
                ->willReturn(...\$valueDAOs);

        \$this->fieldChangeRepository->expects(\$this->once())
            ->method('deleteEntitiesForObjectByColumnName')
            ->with(\$objectId, \$objectType, \$fieldNames);

        \$this->fieldChangeRepository->expects(\$this->once())
            ->method('saveEntities');

        \$this->fieldChangeRepository->expects(\$this->once())
            ->method('clear');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/EventListener/LeadSubscriberTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/EventListener/LeadSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/EventListener/LeadSubscriberTest.php");
    }
}
