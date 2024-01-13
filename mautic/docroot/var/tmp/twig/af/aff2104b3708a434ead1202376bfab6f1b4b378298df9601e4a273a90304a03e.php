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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Helper/FieldHelperTest.php */
class __TwigTemplate_ba20ffe7d62d352f8214a77ae9c171d5c5730df42ba64a28fb0a0cf98d978840 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\SyncDataExchange\\Helper;

use Mautic\\ChannelBundle\\Helper\\ChannelListHelper;
use Mautic\\IntegrationsBundle\\Event\\MauticSyncFieldsLoadEvent;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Helper\\FieldHelper;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectProvider;
use Mautic\\IntegrationsBundle\\Sync\\VariableExpresser\\VariableExpresserHelperInterface;
use Mautic\\LeadBundle\\Model\\FieldModel;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class FieldHelperTest extends TestCase
{
    /**
     * @var FieldModel|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$fieldModel;

    /**
     * @var VariableExpresserHelperInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$variableExpresserHelper;

    /**
     * @var ChannelListHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$channelListHelper;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$eventDispatcher;

    /**
     * @var MauticSyncFieldsLoadEvent|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$mauticSyncFieldsLoadEvent;

    /**
     * @var ObjectProvider|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$objectProvider;

    /**
     * @var FieldHelper
     */
    private \$fieldHelper;

    protected function setUp(): void
    {
        \$this->fieldModel              = \$this->createMock(FieldModel::class);
        \$this->variableExpresserHelper = \$this->createMock(VariableExpresserHelperInterface::class);
        \$this->channelListHelper       = \$this->createMock(ChannelListHelper::class);
        \$this->objectProvider          = \$this->createMock(ObjectProvider::class);
        \$this->channelListHelper->method('getFeatureChannels')
            ->willReturn(['Email' => 'email']);

        \$this->mauticSyncFieldsLoadEvent = \$this->createMock(MauticSyncFieldsLoadEvent::class);
        \$this->eventDispatcher           = \$this->createMock(EventDispatcherInterface::class);
        \$this->eventDispatcher->method('dispatch')
            ->willReturn(\$this->mauticSyncFieldsLoadEvent);

        \$this->fieldHelper = new FieldHelper(
            \$this->fieldModel,
            \$this->variableExpresserHelper,
            \$this->channelListHelper,
            \$this->createMock(TranslatorInterface::class),
            \$this->eventDispatcher,
            \$this->objectProvider
        );
    }

    public function testContactSyncFieldsReturned(): void
    {
        \$objectName = Contact::NAME;
        \$syncFields = ['email' => 'Email'];

        \$this->mauticSyncFieldsLoadEvent->method('getObjectName')
            ->willReturn(\$objectName);
        \$this->mauticSyncFieldsLoadEvent->method('getFields')
            ->willReturn(\$syncFields);

        \$this->fieldModel->method('getFieldList')
            ->willReturn(\$syncFields);

        \$fields = \$this->fieldHelper->getSyncFields(\$objectName);

        \$this->assertEquals(
            [
                'email',
                'mautic_internal_contact_timeline',
                'mautic_internal_dnc_email',
                'mautic_internal_id',
            ],
            array_keys(\$fields)
        );
    }

    public function testCompanySyncFieldsReturned(): void
    {
        \$objectName = Contact::NAME;
        \$syncFields = ['email' => 'Email'];

        \$this->mauticSyncFieldsLoadEvent->method('getObjectName')
            ->willReturn(\$objectName);
        \$this->mauticSyncFieldsLoadEvent->method('getFields')
            ->willReturn(\$syncFields);

        \$this->fieldModel->method('getFieldList')
            ->willReturn(\$syncFields);

        \$fields = \$this->fieldHelper->getSyncFields(\$objectName);

        \$this->assertEquals(
            [
                'email',
                'mautic_internal_contact_timeline',
                'mautic_internal_dnc_email',
                'mautic_internal_id',
            ],
            array_keys(\$fields)
        );
    }

    public function testGetRequiredFieldsForContact(): void
    {
        \$this->fieldModel->expects(\$this->once())
            ->method('getFieldList')
            ->willReturn(['some fields']);

        \$this->fieldModel->expects(\$this->once())
            ->method('getUniqueIdentifierFields')
            ->willReturn(['some unique fields']);

        \$this->assertSame(
            ['some fields', 'some unique fields'],
            \$this->fieldHelper->getRequiredFields('lead')
        );

        // Call it for the second time to ensure the result was cached,
        \$this->assertSame(
            ['some fields', 'some unique fields'],
            \$this->fieldHelper->getRequiredFields('lead')
        );
    }

    public function testGetRequiredFieldsForCompany(): void
    {
        \$this->fieldModel->expects(\$this->once())
            ->method('getFieldList')
            ->willReturn(['some fields']);

        \$this->fieldModel->expects(\$this->never())
            ->method('getUniqueIdentifierFields');

        \$this->assertSame(
            ['some fields'],
            \$this->fieldHelper->getRequiredFields('company')
        );

        // Call it for the second time to ensure the result was cached,
        \$this->assertSame(
            ['some fields'],
            \$this->fieldHelper->getRequiredFields('company')
        );
    }

    public function testGetFieldObjectName(): void
    {
        \$this->objectProvider->expects(\$this->once())
            ->method('getObjectByName')
            ->with(Contact::NAME)
            ->willReturn(new Contact());

        \$this->assertSame(
            Contact::ENTITY,
            \$this->fieldHelper->getFieldObjectName(Contact::NAME)
        );
    }

    public function testGetNormalizedFieldType(): void
    {
        \$this->assertEquals(NormalizedValueDAO::BOOLEAN_TYPE, \$this->fieldHelper->getNormalizedFieldType('boolean'));
        \$this->assertEquals(NormalizedValueDAO::DATETIME_TYPE, \$this->fieldHelper->getNormalizedFieldType('date'));
        \$this->assertEquals(NormalizedValueDAO::DATETIME_TYPE, \$this->fieldHelper->getNormalizedFieldType('datetime'));
        \$this->assertEquals(NormalizedValueDAO::DATETIME_TYPE, \$this->fieldHelper->getNormalizedFieldType('time'));
        \$this->assertEquals(NormalizedValueDAO::FLOAT_TYPE, \$this->fieldHelper->getNormalizedFieldType('number'));
        \$this->assertEquals(NormalizedValueDAO::SELECT_TYPE, \$this->fieldHelper->getNormalizedFieldType('select'));
        \$this->assertEquals(NormalizedValueDAO::MULTISELECT_TYPE, \$this->fieldHelper->getNormalizedFieldType('multiselect'));
        \$this->assertEquals(NormalizedValueDAO::STRING_TYPE, \$this->fieldHelper->getNormalizedFieldType('default'));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Helper/FieldHelperTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Helper/FieldHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Helper/FieldHelperTest.php");
    }
}
