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

/* @bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnDispatcherTest.php */
class __TwigTemplate_137b7a7df43a63c7b7b140249213a927627bb1af08e0a0ffed57a781957dfea3 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Field\\Dispatcher;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Field\\Dispatcher\\FieldColumnDispatcher;
use Mautic\\LeadBundle\\Field\\Event\\AddColumnEvent;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Mautic\\LeadBundle\\Field\\Settings\\BackgroundSettings;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class FieldColumnDispatcherTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNoBackground(): void
    {
        \$dispatcher         = \$this->createMock(EventDispatcherInterface::class);
        \$backgroundSettings = \$this->createMock(BackgroundSettings::class);
        \$leadField          = new LeadField();

        \$backgroundSettings->expects(\$this->once())
            ->method('shouldProcessColumnChangeInBackground')
            ->willReturn(false);

        \$dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                'mautic.lead_field_pre_add_column',
                \$this->isInstanceOf(AddColumnEvent::class)
            );

        \$fieldColumnDispatcher = new FieldColumnDispatcher(\$dispatcher, \$backgroundSettings);

        \$fieldColumnDispatcher->dispatchPreAddColumnEvent(\$leadField);
    }

    public function testStopPropagation(): void
    {
        \$leadField          = new LeadField();
        \$dispatcher         = \$this->createMock(EventDispatcherInterface::class);
        \$backgroundSettings = \$this->createMock(BackgroundSettings::class);

        \$backgroundSettings->expects(\$this->once())
            ->method('shouldProcessColumnChangeInBackground')
            ->willReturn(true);

        \$dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                'mautic.lead_field_pre_add_column',
                \$this->callback(function (\$event) {
                    /* @var AddColumnBackgroundEvent \$event */
                    return \$event instanceof AddColumnEvent;
                })
            );

        \$fieldColumnDispatcher = new FieldColumnDispatcher(\$dispatcher, \$backgroundSettings);

        \$this->expectException(AbortColumnCreateException::class);
        \$this->expectExceptionMessage('Column change will be processed in background job');

        \$fieldColumnDispatcher->dispatchPreAddColumnEvent(\$leadField);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnDispatcherTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnDispatcherTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnDispatcherTest.php");
    }
}
