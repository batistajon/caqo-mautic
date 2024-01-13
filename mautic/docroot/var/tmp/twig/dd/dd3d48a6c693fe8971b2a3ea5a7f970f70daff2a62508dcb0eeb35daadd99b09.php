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

/* @bundles/ReportBundle/Tests/EventListener/SchedulerSubscriberTest.php */
class __TwigTemplate_d66a2ab79c82eda5e3149014d8f7968cf20cdc467958ba527dc1096988b388f8 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\EventListener;

use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Event\\ReportScheduleSendEvent;
use Mautic\\ReportBundle\\EventListener\\SchedulerSubscriber;
use Mautic\\ReportBundle\\Scheduler\\Model\\SendSchedule;

class SchedulerSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNoEmailsProvided()
    {
        \$sendScheduleMock = \$this->getMockBuilder(SendSchedule::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$schedulerSubscriber = new SchedulerSubscriber(\$sendScheduleMock);

        \$report                  = new Report();
        \$date                    = new \\DateTime();
        \$scheduler               = new Scheduler(\$report, \$date);
        \$file                    = 'path-to-a-file';
        \$reportScheduleSendEvent = new ReportScheduleSendEvent(\$scheduler, \$file);

        \$sendScheduleMock->expects(\$this->once())
            ->method('send')
            ->with(\$scheduler, \$file);

        \$schedulerSubscriber->onScheduleSend(\$reportScheduleSendEvent);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/EventListener/SchedulerSubscriberTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/EventListener/SchedulerSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/EventListener/SchedulerSubscriberTest.php");
    }
}
