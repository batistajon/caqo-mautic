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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Integration/ObjectChangeGeneratorTest.php */
class __TwigTemplate_b4be31962b1571922eb55523d3b615ee7afc1a144d01ff42fc6bcd51f551ef10 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\SyncProcess\\Direction\\Integration;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\MappingManualDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\ObjectMappingDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\FieldDAO as ReportFieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ObjectDAO as ReportObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ReportDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Helper\\ValueHelper;
use Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Integration\\ObjectChangeGenerator;
use PHPUnit\\Framework\\TestCase;

class ObjectChangeGeneratorTest extends TestCase
{
    /**
     * @var ValueHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$valueHelper;

    protected function setUp(): void
    {
        \$this->valueHelper = \$this->createMock(ValueHelper::class);
    }

    public function testFieldIsAddedToObjectChange(): void
    {
        \$this->valueHelper->method('getValueForIntegration')
            ->willReturnCallback(
                function (NormalizedValueDAO \$normalizedValueDAO, string \$fieldState, string \$syncDirection) {
                    return \$normalizedValueDAO;
                }
            );

        \$integration = 'Test';
        \$objectName  = 'Contact';

        \$mappingManual = \$this->getMappingManual(\$integration, \$objectName);
        \$syncReport    = \$this->getInternalSyncReport();

        \$integrationReportObject = new ReportObjectDAO(\$objectName, 2);
        \$integrationReportObject->addField(new ReportFieldDAO('email', new NormalizedValueDAO(NormalizedValueDAO::EMAIL_TYPE, 'test@test.com')));
        \$integrationReportObject->addField(new ReportFieldDAO('first_name', new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'Bob')));

        \$objectChangeGenerator = \$this->getObjectChangeGenerator();
        \$objectChangeDAO       = \$objectChangeGenerator->getSyncObjectChange(
            \$syncReport,
            \$mappingManual,
            \$mappingManual->getObjectMapping(Contact::NAME, \$objectName),
            \$syncReport->getObject(Contact::NAME, 1),
            \$integrationReportObject
        );

        \$this->assertEquals(\$integration, \$objectChangeDAO->getIntegration());

        // object and object ID should be the integrations (from the integration's POV)
        \$this->assertEquals(\$objectName, \$objectChangeDAO->getObject());
        \$this->assertEquals(2, \$objectChangeDAO->getObjectId());

        // mapped object and ID should be Mautic's
        \$this->assertEquals(Contact::NAME, \$objectChangeDAO->getMappedObject());
        \$this->assertEquals(1, \$objectChangeDAO->getMappedObjectId());

        // Email should be a required field
        \$requiredFields = \$objectChangeDAO->getRequiredFields();
        \$this->assertTrue(isset(\$requiredFields['email']));

        // Both fields should be included
        \$fields = \$objectChangeDAO->getFields();
        \$this->assertTrue(isset(\$fields['email']) && isset(\$fields['first_name']));

        // First name is presumed to be changed
        \$changedFields = \$objectChangeDAO->getChangedFields();
        \$this->assertTrue(isset(\$changedFields['first_name']));
    }

    public function testFieldIsNotAddedToObjectChangeIfNotFound(): void
    {
        \$this->valueHelper->method('getValueForIntegration')
            ->willReturnCallback(
                function (NormalizedValueDAO \$normalizedValueDAO, string \$fieldState, string \$syncDirection) {
                    return \$normalizedValueDAO;
                }
            );

        \$integration = 'Test';
        \$objectName  = 'Contact';

        \$mappingManual = \$this->getMappingManual(\$integration, \$objectName);
        \$syncReport    = \$this->getInternalSyncReport(false);

        \$integrationReportObject = new ReportObjectDAO(\$objectName, 2);
        \$integrationReportObject->addField(new ReportFieldDAO('email', new NormalizedValueDAO(NormalizedValueDAO::EMAIL_TYPE, 'test@test.com')));
        \$integrationReportObject->addField(new ReportFieldDAO('first_name', new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'Bob')));

        \$objectChangeGenerator = \$this->getObjectChangeGenerator();
        \$objectChangeDAO       = \$objectChangeGenerator->getSyncObjectChange(
            \$syncReport,
            \$mappingManual,
            \$mappingManual->getObjectMapping(Contact::NAME, \$objectName),
            \$syncReport->getObject(Contact::NAME, 1),
            \$integrationReportObject
        );

        \$this->assertEquals(\$integration, \$objectChangeDAO->getIntegration());

        // object and object ID should be the integrations (from the integration's POV)
        \$this->assertEquals(\$objectName, \$objectChangeDAO->getObject());
        \$this->assertEquals(2, \$objectChangeDAO->getObjectId());

        // mapped object and ID should be Mautic's
        \$this->assertEquals(Contact::NAME, \$objectChangeDAO->getMappedObject());
        \$this->assertEquals(1, \$objectChangeDAO->getMappedObjectId());

        // Email should be a required field
        \$requiredFields = \$objectChangeDAO->getRequiredFields();
        \$this->assertTrue(isset(\$requiredFields['email']));

        // First name should not be included because it wasn't found in the internal object
        \$fields = \$objectChangeDAO->getFields();
        \$this->assertFalse(isset(\$fields['first_name']));
    }

    /**
     * @return MappingManualDAO
     */
    private function getMappingManual(string \$integration, string \$objectName)
    {
        \$mappingManual = new MappingManualDAO(\$integration);
        \$objectMapping = new ObjectMappingDAO(Contact::NAME, \$objectName);
        \$objectMapping->addFieldMapping('email', 'email', ObjectMappingDAO::SYNC_BIDIRECTIONALLY, true);
        \$objectMapping->addFieldMapping('firstname', 'first_name');
        \$mappingManual->addObjectMapping(\$objectMapping);

        return \$mappingManual;
    }

    /**
     * @param bool \$includeFirstNameField
     *
     * @return ReportDAO
     */
    private function getInternalSyncReport(\$includeFirstNameField = true)
    {
        \$syncReport           = new ReportDAO(MauticSyncDataExchange::NAME);
        \$internalReportObject = new ReportObjectDAO(Contact::NAME, 1);
        \$internalReportObject->addField(
            new ReportFieldDAO('email', new NormalizedValueDAO(NormalizedValueDAO::EMAIL_TYPE, 'test@test.com'), ReportFieldDAO::FIELD_REQUIRED)
        );

        if (\$includeFirstNameField) {
            \$internalReportObject->addField(new ReportFieldDAO('firstname', new NormalizedValueDAO(NormalizedValueDAO::TEXT_TYPE, 'Bob')));
        }

        \$syncReport->addObject(\$internalReportObject);

        return \$syncReport;
    }

    /**
     * @return ObjectChangeGenerator
     */
    private function getObjectChangeGenerator()
    {
        return new ObjectChangeGenerator(\$this->valueHelper);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Integration/ObjectChangeGeneratorTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Integration/ObjectChangeGeneratorTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/SyncProcess/Direction/Integration/ObjectChangeGeneratorTest.php");
    }
}
