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

/* @bundles/LeadBundle/Tests/Helper/LeadChangeEventDispatcherTest.php */
class __TwigTemplate_79ee7d9c9b8d7ddc5fd68b93fc2321ffbd977e629bf3333e4cc82ae2662926d9 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Helper;

use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Event\\ChannelSubscriptionChange;
use Mautic\\LeadBundle\\Event\\LeadEvent;
use Mautic\\LeadBundle\\Event\\LeadUtmTagsEvent;
use Mautic\\LeadBundle\\Event\\PointsChangeEvent;
use Mautic\\LeadBundle\\Helper\\LeadChangeEventDispatcher;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;

class LeadChangeEventDispatcherTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that date identified change dispatches correct event
     */
    public function testDateIdentifiedEventIsDispatched()
    {
        \$dispatcher = \$this->getMockBuilder(EventDispatcher::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$lead  = new Lead();
        \$event = new LeadEvent(\$lead);

        \$dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                LeadEvents::LEAD_IDENTIFIED,
                \$event
            );

        \$leadEventDispatcher = new LeadChangeEventDispatcher(\$dispatcher);

        \$leadEventDispatcher->dispatchEvents(\$event, ['dateIdentified' => ['foo', 'bar']]);
    }

    /**
     * @testdox Test that point changes dispatches correct event
     */
    public function testPointChangeEventIsDispatched()
    {
        \$dispatcher = \$this->getMockBuilder(EventDispatcher::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$lead        = new Lead();
        \$event       = new LeadEvent(\$lead);
        \$pointsEvent = new PointsChangeEvent(\$lead, 10, 20);
        \$dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                LeadEvents::LEAD_POINTS_CHANGE,
                \$pointsEvent
            );

        \$leadEventDispatcher = new LeadChangeEventDispatcher(\$dispatcher);

        \$leadEventDispatcher->dispatchEvents(\$event, ['points' => [10, 20]]);
    }

    /**
     * @testdox Test that points change event is not dispatched if we did an import
     */
    public function testPointChangeEventIsNotDispatchedWithImport()
    {
        \$dispatcher = \$this->getMockBuilder(EventDispatcher::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$lead           = new Lead();
        \$lead->imported = true;

        \$event = new LeadEvent(\$lead);

        \$dispatcher->expects(\$this->never())
            ->method('dispatch');

        \$leadEventDispatcher = new LeadChangeEventDispatcher(\$dispatcher);

        \$leadEventDispatcher->dispatchEvents(\$event, ['points' => [10, 20]]);
    }

    /**
     * @testdox Test that points change event is not dispatched if points are empty (false positive)
     */
    public function testPointChangeEventIsNotDispatchedWithEmptyPoints()
    {
        \$dispatcher = \$this->getMockBuilder(EventDispatcher::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$lead  = new Lead();
        \$event = new LeadEvent(\$lead);

        \$dispatcher->expects(\$this->never())
            ->method('dispatch');

        \$leadEventDispatcher = new LeadChangeEventDispatcher(\$dispatcher);

        \$leadEventDispatcher->dispatchEvents(\$event, ['points' => [0, 0]]);
    }

    /**
     * @testdox Test that points change event is dispatched if points are changed from something to nothing
     */
    public function testPointChangeEventIsDispatchedWithPointsChangedToZero()
    {
        \$dispatcher = \$this->getMockBuilder(EventDispatcher::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$lead        = new Lead();
        \$event       = new LeadEvent(\$lead);
        \$pointsEvent = new PointsChangeEvent(\$lead, 10, 0);
        \$dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                LeadEvents::LEAD_POINTS_CHANGE,
                \$pointsEvent
            );

        \$leadEventDispatcher = new LeadChangeEventDispatcher(\$dispatcher);

        \$leadEventDispatcher->dispatchEvents(\$event, ['points' => [10, 0]]);
    }

    /**
     * @testdox Test that points change event is not dispatched if this is a new Lead
     */
    public function testPointChangeEventIsNotDispatchedWithNewContact()
    {
        \$dispatcher = \$this->getMockBuilder(EventDispatcher::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$lead  = new Lead();
        \$event = new LeadEvent(\$lead, true);
        \$dispatcher->expects(\$this->never())
            ->method('dispatch');

        \$leadEventDispatcher = new LeadChangeEventDispatcher(\$dispatcher);

        \$leadEventDispatcher->dispatchEvents(\$event, ['points' => [10, 0]]);
    }

    /**
     * @testdox Test that utm event is dispatched
     */
    public function testUtmTagsChangeEventIsDispatched()
    {
        \$dispatcher = \$this->getMockBuilder(EventDispatcher::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$lead         = new Lead();
        \$event        = new LeadEvent(\$lead);
        \$changes      = ['utmtags' => ['foo', 'bar']];
        \$utmTagsEvent = new LeadUtmTagsEvent(\$lead, \$changes['utmtags']);
        \$dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                LeadEvents::LEAD_UTMTAGS_ADD,
                \$utmTagsEvent
            );

        \$leadEventDispatcher = new LeadChangeEventDispatcher(\$dispatcher);

        \$leadEventDispatcher->dispatchEvents(\$event, \$changes);
    }

    /**
     * @testdox Test that channel subscription changes are dispatched
     */
    public function testChannelSubscriptionChangeEventIsDispatched()
    {
        \$dispatcher = \$this->getMockBuilder(EventDispatcher::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$lead    = new Lead();
        \$event   = new LeadEvent(\$lead);
        \$changes = ['dnc_channel_status' => ['email' => ['old_reason' => DoNotContact::IS_CONTACTABLE, 'reason' => DoNotContact::UNSUBSCRIBED]]];

        \$dncEvent = new ChannelSubscriptionChange(\$lead, 'email', DoNotContact::IS_CONTACTABLE, DoNotContact::UNSUBSCRIBED);
        \$dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                LeadEvents::CHANNEL_SUBSCRIPTION_CHANGED,
                \$dncEvent
            );

        \$leadEventDispatcher = new LeadChangeEventDispatcher(\$dispatcher);

        \$leadEventDispatcher->dispatchEvents(\$event, \$changes);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Helper/LeadChangeEventDispatcherTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Helper/LeadChangeEventDispatcherTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Helper/LeadChangeEventDispatcherTest.php");
    }
}
