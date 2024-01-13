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

/* @bundles/LeadBundle/Tests/Field/BackgroundServiceTest.php */
class __TwigTemplate_04d086e31f55564c87f1c5a20df7682a16b0ab10de5bd19ff55140cf207c28b9 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Field;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Field\\BackgroundService;
use Mautic\\LeadBundle\\Field\\CustomFieldColumn;
use Mautic\\LeadBundle\\Field\\Dispatcher\\FieldColumnBackgroundJobDispatcher;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Mautic\\LeadBundle\\Field\\Exception\\ColumnAlreadyCreatedException;
use Mautic\\LeadBundle\\Field\\Exception\\CustomFieldLimitException;
use Mautic\\LeadBundle\\Field\\Exception\\LeadFieldWasNotFoundException;
use Mautic\\LeadBundle\\Field\\LeadFieldSaver;
use Mautic\\LeadBundle\\Field\\Notification\\CustomFieldNotification;
use Mautic\\LeadBundle\\Model\\FieldModel;
use PHPUnit\\Framework\\MockObject\\MockObject;

class BackgroundServiceTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|BackgroundService
     */
    private \$backgroundService;

    /**
     * @var MockObject|FieldModel
     */
    private \$fieldModel;

    /**
     * @var MockObject|CustomFieldColumn
     */
    private \$customFieldColumn;

    /**
     * @var MockObject|LeadFieldSaver
     */
    private \$leadFieldSaver;

    /**
     * @var MockObject|FieldColumnBackgroundJobDispatcher
     */
    private \$fieldColumnBackgroundJobDispatcher;

    /**
     * @var MockObject|CustomFieldNotification
     */
    private \$customFieldNotification;

    public function setUp(): void
    {
        \$this->fieldModel                         = \$this->createMock(FieldModel::class);
        \$this->customFieldColumn                  = \$this->createMock(CustomFieldColumn::class);
        \$this->leadFieldSaver                     = \$this->createMock(LeadFieldSaver::class);
        \$this->fieldColumnBackgroundJobDispatcher = \$this->createMock(FieldColumnBackgroundJobDispatcher::class);
        \$this->customFieldNotification            = \$this->createMock(CustomFieldNotification::class);

        \$this->backgroundService = new BackgroundService(
            \$this->fieldModel,
            \$this->customFieldColumn,
            \$this->leadFieldSaver,
            \$this->fieldColumnBackgroundJobDispatcher,
            \$this->customFieldNotification
        );
    }

    public function testNoLeadField(): void
    {
        \$this->fieldModel->expects(\$this->once())
            ->method('getEntity')
            ->willReturn(null);

        \$this->expectException(LeadFieldWasNotFoundException::class);
        \$this->expectExceptionMessage('LeadField entity was not found');

        \$this->backgroundService->addColumn(1, 3);
    }

    public function testColumnAlreadyCreated(): void
    {
        \$leadField = new LeadField();
        \$leadField->setColumnWasCreated();

        \$this->fieldModel->expects(\$this->once())
            ->method('getEntity')
            ->willReturn(\$leadField);

        \$userId = 3;
        \$this->customFieldNotification->expects(\$this->once())
            ->method('customFieldWasCreated')
            ->with(\$leadField, \$userId);

        \$this->expectException(ColumnAlreadyCreatedException::class);
        \$this->expectExceptionMessage('Column was already created');

        \$this->backgroundService->addColumn(1, \$userId);
    }

    public function testAbortColumnCreate(): void
    {
        \$leadField = new LeadField();
        \$leadField->setColumnIsNotCreated();

        \$this->fieldModel->expects(\$this->once())
            ->method('getEntity')
            ->willReturn(\$leadField);

        \$userId = 3;

        \$this->fieldColumnBackgroundJobDispatcher->expects(\$this->once())
            ->method('dispatchPreAddColumnEvent')
            ->with(\$leadField)
            ->willThrowException(new AbortColumnCreateException('Message'));

        \$this->expectException(AbortColumnCreateException::class);
        \$this->expectExceptionMessage('Message');

        \$this->backgroundService->addColumn(1, \$userId);
    }

    public function testCustomFieldLimit(): void
    {
        \$leadField = new LeadField();
        \$leadField->setColumnIsNotCreated();

        \$this->fieldModel->expects(\$this->once())
            ->method('getEntity')
            ->willReturn(\$leadField);

        \$this->fieldColumnBackgroundJobDispatcher->expects(\$this->once())
            ->method('dispatchPreAddColumnEvent')
            ->with(\$leadField);

        \$this->customFieldColumn->expects(\$this->once())
            ->method('processCreateLeadColumn')
            ->with(\$leadField, false)
            ->willThrowException(new CustomFieldLimitException('Limit'));

        \$userId = 3;
        \$this->customFieldNotification->expects(\$this->once())
            ->method('customFieldLimitWasHit')
            ->with(\$leadField, \$userId);

        \$this->expectException(CustomFieldLimitException::class);
        \$this->expectExceptionMessage('Limit');

        \$this->backgroundService->addColumn(1, \$userId);
    }

    public function testCreateColumnWithNoError(): void
    {
        \$leadField = new LeadField();
        \$leadField->setColumnIsNotCreated();

        \$this->fieldModel->expects(\$this->once())
            ->method('getEntity')
            ->willReturn(\$leadField);

        \$this->fieldColumnBackgroundJobDispatcher->expects(\$this->once())
            ->method('dispatchPreAddColumnEvent')
            ->with(\$leadField);

        \$this->customFieldColumn->expects(\$this->once())
            ->method('processCreateLeadColumn')
            ->with(\$leadField, false);

        \$this->leadFieldSaver->expects(\$this->once())
            ->method('saveLeadFieldEntity')
            ->with(\$leadField, false);

        \$userId = 3;
        \$this->customFieldNotification->expects(\$this->once())
            ->method('customFieldWasCreated')
            ->with(\$leadField, \$userId);

        \$this->backgroundService->addColumn(1, \$userId);

        \$this->assertFalse(\$leadField->getColumnIsNotCreated());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Field/BackgroundServiceTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/BackgroundServiceTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Field/BackgroundServiceTest.php");
    }
}
