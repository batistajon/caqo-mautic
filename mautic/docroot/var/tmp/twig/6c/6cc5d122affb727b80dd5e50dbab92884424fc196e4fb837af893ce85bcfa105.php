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

/* @bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnBackgroundJobDispatcherTest.php */
class __TwigTemplate_a7a26b05c8f49a4c161e22c0cf0305b33d8e2faf2acfec14644d48a199b4ce3a extends Template
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
use Mautic\\LeadBundle\\Exception\\NoListenerException;
use Mautic\\LeadBundle\\Field\\Dispatcher\\FieldColumnBackgroundJobDispatcher;
use Mautic\\LeadBundle\\Field\\Event\\AddColumnBackgroundEvent;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class FieldColumnBackgroundJobDispatcherTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNoListener(): void
    {
        \$dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$dispatcher
            ->expects(\$this->once())
            ->method('hasListeners')
            ->willReturn(false);
        \$dispatcher
            ->expects(\$this->never())
            ->method('dispatch');

        \$fieldColumnBackgroundJobDispatcher = new FieldColumnBackgroundJobDispatcher(\$dispatcher);

        \$leadField = new LeadField();

        \$this->expectException(NoListenerException::class);
        \$this->expectExceptionMessage('There is no Listener for this event');

        \$fieldColumnBackgroundJobDispatcher->dispatchPreAddColumnEvent(\$leadField);
    }

    public function testNormalProcess(): void
    {
        \$dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$dispatcher
            ->expects(\$this->once())
            ->method('hasListeners')
            ->willReturn(true);

        \$dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(
                'mautic.lead_field_pre_add_column_background_job',
                \$this->isInstanceOf(AddColumnBackgroundEvent::class)
            );

        \$fieldColumnBackgroundJobDispatcher = new FieldColumnBackgroundJobDispatcher(\$dispatcher);

        \$leadField = new LeadField();

        \$fieldColumnBackgroundJobDispatcher->dispatchPreAddColumnEvent(\$leadField);
    }

    public function testStopPropagation(): void
    {
        \$leadField = new LeadField();

        \$dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$dispatcher
            ->expects(\$this->once())
            ->method('hasListeners')
            ->willReturn(true);

        \$dispatcher
            ->expects(\$this->once())
            ->method('dispatch')
            ->with(
                'mautic.lead_field_pre_add_column_background_job',
                \$this->callback(function (\$event) {
                    /* @var AddColumnBackgroundEvent \$event */
                    \$event->stopPropagation();

                    return \$event instanceof AddColumnBackgroundEvent;
                })
            );

        \$fieldColumnBackgroundJobDispatcher = new FieldColumnBackgroundJobDispatcher(\$dispatcher);

        \$this->expectException(AbortColumnCreateException::class);
        \$this->expectExceptionMessage('Column cannot be created now');

        \$fieldColumnBackgroundJobDispatcher->dispatchPreAddColumnEvent(\$leadField);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnBackgroundJobDispatcherTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnBackgroundJobDispatcherTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Field/Dispatcher/FieldColumnBackgroundJobDispatcherTest.php");
    }
}
