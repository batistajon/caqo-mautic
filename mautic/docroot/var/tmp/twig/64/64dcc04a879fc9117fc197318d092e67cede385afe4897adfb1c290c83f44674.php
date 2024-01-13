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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ReportBuilder/FieldBuilderTest.php */
class __TwigTemplate_c7da6f5a4051731d26ae44ee91848be1996b68934d0e4a4e8a711b382fdf81d7 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\SyncDataExchange\\Internal\\ReportBuilder;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\FieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\ObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\FieldNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Helper\\FieldHelper;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectHelper\\ContactObjectHelper;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ReportBuilder\\FieldBuilder;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Routing\\Router;

class FieldBuilderTest extends TestCase
{
    /**
     * @var Router|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$router;

    /**
     * @var FieldHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$fieldHelper;

    /**
     * @var ContactObjectHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$contactObjectHelper;

    protected function setUp(): void
    {
        \$this->router      = \$this->createMock(Router::class);
        \$this->fieldHelper = \$this->getMockBuilder(FieldHelper::class)
            ->disableOriginalConstructor()
            ->setMethodsExcept(['getNormalizedFieldType', 'getFieldObjectName'])
            ->getMock();
        \$this->contactObjectHelper = \$this->createMock(ContactObjectHelper::class);
    }

    public function testIdFieldIsAdded(): void
    {
        \$field = \$this->getFieldBuilder()->buildObjectField('mautic_internal_id', ['id' => 1], new ObjectDAO('Test'), 'Test');
        \$this->assertEquals('mautic_internal_id', \$field->getName());
        \$this->assertEquals(FieldDAO::FIELD_CHANGED, \$field->getState());
        \$this->assertEquals(1, \$field->getValue()->getNormalizedValue());
    }

    public function testOwnerIdFieldIsAdded(): void
    {
        \$field = \$this->getFieldBuilder()->buildObjectField(
            'owner_id',
            ['id' => 1, 'owner_id' => 123],
            new ObjectDAO('Test'),
            'Test'
        );

        \$this->assertEquals('owner_id', \$field->getName());
        \$this->assertEquals(FieldDAO::FIELD_CHANGED, \$field->getState());
        \$this->assertEquals(123, \$field->getValue()->getNormalizedValue());
    }

    public function testDoNotContactFieldIsAdded(): void
    {
        \$this->contactObjectHelper->expects(\$this->once())
            ->method('getDoNotContactStatus')
            ->with(1, 'email')
            ->willReturn(0);

        \$field = \$this->getFieldBuilder()->buildObjectField('mautic_internal_dnc_email', ['id' => 1], new ObjectDAO('Test'), 'Test');

        \$this->assertEquals('mautic_internal_dnc_email', \$field->getName());
        \$this->assertEquals(FieldDAO::FIELD_CHANGED, \$field->getState());
        \$this->assertEquals(0, \$field->getValue()->getNormalizedValue());
    }

    public function testTimelineFieldIsAdded(): void
    {
        \$this->router->expects(\$this->once())
            ->method('generate')
            ->with(
                'mautic_plugin_timeline_view',
                [
                    'integration' => 'Test',
                    'leadId'      => 1,
                ],
                UrlGeneratorInterface::ABSOLUTE_URL
            );

        \$field = \$this->getFieldBuilder()->buildObjectField('mautic_internal_contact_timeline', ['id' => 1], new ObjectDAO('Test'), 'Test');

        \$this->assertEquals('mautic_internal_contact_timeline', \$field->getName());
        \$this->assertEquals(FieldDAO::FIELD_CHANGED, \$field->getState());
        \$this->assertEquals(0, \$field->getValue()->getNormalizedValue());
    }

    public function testCustomFieldsAreAdded(): void
    {
        \$this->fieldHelper->expects(\$this->once())
            ->method('getFieldList')
            ->with('Test')
            ->willReturn(
                [
                    'email' => [
                        'type' => 'email',
                    ],
                ]
            );

        \$objectDAO = new ObjectDAO('Test');
        \$objectDAO->setRequiredFields(['email']);

        \$field = \$this->getFieldBuilder()->buildObjectField('email', ['id' => 1, 'email' => 'test@test.com'], \$objectDAO, 'Test');

        \$this->assertEquals('email', \$field->getName());
        \$this->assertEquals(FieldDAO::FIELD_REQUIRED, \$field->getState());
        \$this->assertEquals('test@test.com', \$field->getValue()->getNormalizedValue());
    }

    public function testUnrecognizedFieldThrowsException(): void
    {
        \$this->fieldHelper->expects(\$this->once())
            ->method('getFieldList')
            ->with('Test')
            ->willReturn(
                [
                    'email' => [
                        'type' => 'email',
                    ],
                ]
            );

        \$this->expectException(FieldNotFoundException::class);

        \$this->getFieldBuilder()->buildObjectField('badfield', ['id' => 1, 'email' => 'test@test.com'], new ObjectDAO('Test'), 'Test');
    }

    public function getFieldBuilder()
    {
        return new FieldBuilder(\$this->router, \$this->fieldHelper, \$this->contactObjectHelper);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ReportBuilder/FieldBuilderTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ReportBuilder/FieldBuilderTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ReportBuilder/FieldBuilderTest.php");
    }
}
