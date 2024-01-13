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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/MauticSyncDataExchangeTest.php */
class __TwigTemplate_6da0744a622ca79bbf5340384dbe1967b9e87bd31fed0f4cfd7fce7f6ae71116 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\SyncDataExchange;

use Mautic\\IntegrationsBundle\\Entity\\FieldChangeRepository;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\MappingManualDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\FieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\RequestDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\MappingHelper;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Helper\\FieldHelper;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Executioner\\OrderExecutioner;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ReportBuilder\\FullObjectReportBuilder;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ReportBuilder\\PartialObjectReportBuilder;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class MauticSyncDataExchangeTest extends TestCase
{
    /**
     * @var MockObject|FieldChangeRepository
     */
    private \$fieldChangeRepository;

    /**
     * @var MockObject|FieldHelper
     */
    private \$fieldHelper;

    /**
     * @var MockObject|MappingHelper
     */
    private \$mappingHelper;

    /**
     * @var MockObject|FullObjectReportBuilder
     */
    private \$fullObjectReportBuilder;

    /**
     * @var MockObject|PartialObjectReportBuilder
     */
    private \$partialObjectReportBuilder;

    /**
     * @var MockObject|OrderExecutioner
     */
    private \$orderExecutioner;

    /**
     * @var MauticSyncDataExchange
     */
    private \$mauticSyncDataExchange;

    protected function setUp(): void
    {
        \$this->fieldChangeRepository      = \$this->createMock(FieldChangeRepository::class);
        \$this->fieldHelper                = \$this->createMock(FieldHelper::class);
        \$this->mappingHelper              = \$this->createMock(MappingHelper::class);
        \$this->fullObjectReportBuilder    = \$this->createMock(FullObjectReportBuilder::class);
        \$this->partialObjectReportBuilder = \$this->createMock(PartialObjectReportBuilder::class);
        \$this->orderExecutioner           = \$this->createMock(OrderExecutioner::class);

        \$this->mauticSyncDataExchange = new MauticSyncDataExchange(
            \$this->fieldChangeRepository,
            \$this->fieldHelper,
            \$this->mappingHelper,
            \$this->fullObjectReportBuilder,
            \$this->partialObjectReportBuilder,
            \$this->orderExecutioner
        );
    }

    public function testFirstTimeSyncUsesFullObjectBuilder(): void
    {
        \$inputOptionsDAO = new InputOptionsDAO(
            [
                'integration'     => 'foobar',
                'first-time-sync' => true,
            ]
        );

        \$requestDAO = new RequestDAO('foobar', 1, \$inputOptionsDAO);

        \$this->fullObjectReportBuilder->expects(\$this->once())
            ->method('buildReport')
            ->with(\$requestDAO);

        \$this->partialObjectReportBuilder->expects(\$this->never())
            ->method('buildReport')
            ->with(\$requestDAO);

        \$this->mauticSyncDataExchange->getSyncReport(\$requestDAO);
    }

    public function testSyncingSpecificMauticIdsUseFullObjectBuilder(): void
    {
        \$inputOptionsDAO = new InputOptionsDAO(
            [
                'integration'      => 'foobar',
                'mautic-object-id' => [1, 2, 3],
            ]
        );

        \$requestDAO = new RequestDAO('foobar', 1, \$inputOptionsDAO);

        \$this->fullObjectReportBuilder->expects(\$this->once())
            ->method('buildReport')
            ->with(\$requestDAO);

        \$this->partialObjectReportBuilder->expects(\$this->never())
            ->method('buildReport')
            ->with(\$requestDAO);

        \$this->mauticSyncDataExchange->getSyncReport(\$requestDAO);
    }

    public function testUseOfPartialObjectBuilder(): void
    {
        \$inputOptionsDAO = new InputOptionsDAO(
            [
                'integration' => 'foobar',
            ]
        );

        \$requestDAO = new RequestDAO('foobar', 1, \$inputOptionsDAO);

        \$this->fullObjectReportBuilder->expects(\$this->never())
            ->method('buildReport')
            ->with(\$requestDAO);

        \$this->partialObjectReportBuilder->expects(\$this->once())
            ->method('buildReport')
            ->with(\$requestDAO);

        \$this->mauticSyncDataExchange->getSyncReport(\$requestDAO);
    }

    public function testGetConflictedInternalObjectWithNoObjectId(): void
    {
        \$mappingManualDao     = new MappingManualDAO('IntegrationA');
        \$integrationObjectDao = new ObjectDAO('Lead', 'some-SF-ID');

        \$this->mappingHelper->expects(\$this->once())
            ->method('findMauticObject')
            ->with(\$mappingManualDao, 'lead', \$integrationObjectDao)
            ->willReturn(new ObjectDAO('lead', null));

        // No need to make the DB query when ID is null.
        \$this->fieldChangeRepository->expects(\$this->never())
            ->method('findChangesForObject');

        \$internalObjectDao = \$this->mauticSyncDataExchange->getConflictedInternalObject(\$mappingManualDao, 'lead', \$integrationObjectDao);

        Assert::assertSame('lead', \$internalObjectDao->getObject());
        Assert::assertNull(\$internalObjectDao->getObjectId());
    }

    public function testGetConflictedInternalObjectWithObjectId(): void
    {
        \$mappingManualDao     = new MappingManualDAO('IntegrationA');
        \$integrationObjectDao = new ObjectDAO('Lead', 'some-SF-ID');
        \$fieldChange          = [
            'modified_at'  => '2020-08-25 17:20:00',
            'column_type'  => 'text',
            'column_value' => 'some-field-value',
            'column_name'  => 'some-field-name',
        ];

        \$this->mappingHelper->expects(\$this->once())
            ->method('findMauticObject')
            ->with(\$mappingManualDao, 'lead', \$integrationObjectDao)
            ->willReturn(new ObjectDAO('lead', 123));

        \$this->mappingHelper->method('getMauticEntityClassName')
            ->with('lead')
            ->willReturn(Lead::class);

        \$this->fieldHelper->method('getFieldChangeObject')
            ->with(\$fieldChange)
            ->willReturn(new FieldDAO('some-field-name', new NormalizedValueDAO('type', 'some-field-value')));

        \$this->fieldChangeRepository->expects(\$this->once())
            ->method('findChangesForObject')
            ->with('IntegrationA', Lead::class, 123)
            ->willReturn([\$fieldChange]);

        \$internalObjectDao = \$this->mauticSyncDataExchange->getConflictedInternalObject(\$mappingManualDao, 'lead', \$integrationObjectDao);

        Assert::assertSame('lead', \$internalObjectDao->getObject());
        Assert::assertSame(123, \$internalObjectDao->getObjectId());
        Assert::assertCount(1, \$internalObjectDao->getFields());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/MauticSyncDataExchangeTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/MauticSyncDataExchangeTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/MauticSyncDataExchangeTest.php");
    }
}
