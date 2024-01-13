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

/* @bundles/ReportBundle/Tests/Scheduler/Model/SchedulerPlannerTest.php */
class __TwigTemplate_b3e8ad22481edeaf5f671f495bb16cd312791367682f0145f1de999e71bf90e0 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Scheduler\\Model;

use Doctrine\\ORM\\EntityManager;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Entity\\SchedulerRepository;
use Mautic\\ReportBundle\\Scheduler\\Date\\DateBuilder;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NoScheduleException;
use Mautic\\ReportBundle\\Scheduler\\Model\\SchedulerPlanner;

class SchedulerPlannerTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testComputeSchedule()
    {
        \$dateBuilder = \$this->getMockBuilder(DateBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$schedulerRepository = \$this->getMockBuilder(SchedulerRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$entityManager = \$this->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$entityManager->expects(\$this->once())
            ->method('getRepository')
            ->with(Scheduler::class)
            ->willReturn(\$schedulerRepository);

        \$schedulerPlanner = new SchedulerPlanner(\$dateBuilder, \$entityManager);

        \$report = new Report();

        \$oldScheduler = new Scheduler(\$report, new \\DateTime());

        \$schedulerRepository->expects(\$this->once())
            ->method('getSchedulerByReport')
            ->with(\$report)
            ->willReturn(\$oldScheduler);

        \$entityManager->expects(\$this->once())
            ->method('remove')
            ->with(\$oldScheduler);

        \$entityManager->expects(\$this->exactly(2))
            ->method('flush')
            ->with();

        \$dateOfNextSchedule = new \\DateTime();

        \$dateBuilder->expects(\$this->once())
            ->method('getNextEvent')
            ->with(\$report)
            ->willReturn(\$dateOfNextSchedule);

        \$entityManager->expects(\$this->once())
            ->method('persist')
            ->with(\$this->callback(function (\$scheduler) use (\$report, \$dateOfNextSchedule) {
                return
                    \$scheduler instanceof Scheduler &&
                    \$scheduler->getReport() === \$report &&
                    \$scheduler->getScheduleDate() === \$dateOfNextSchedule;
            }));

        \$schedulerPlanner->computeScheduler(\$report);
    }

    public function testNoSchedule()
    {
        \$dateBuilder = \$this->getMockBuilder(DateBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$schedulerRepository = \$this->getMockBuilder(SchedulerRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$entityManager = \$this->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$entityManager->expects(\$this->once())
            ->method('getRepository')
            ->with(Scheduler::class)
            ->willReturn(\$schedulerRepository);

        \$schedulerPlanner = new SchedulerPlanner(\$dateBuilder, \$entityManager);

        \$report = new Report();

        \$oldScheduler = new Scheduler(\$report, new \\DateTime());

        \$schedulerRepository->expects(\$this->once())
            ->method('getSchedulerByReport')
            ->with(\$report)
            ->willReturn(\$oldScheduler);

        \$entityManager->expects(\$this->once())
            ->method('remove')
            ->with(\$oldScheduler);

        \$entityManager->expects(\$this->once())
            ->method('flush')
            ->with();

        \$dateBuilder->expects(\$this->once())
            ->method('getNextEvent')
            ->with(\$report)
            ->willThrowException(new NoScheduleException());

        \$schedulerPlanner->computeScheduler(\$report);
    }

    public function testNoRemoveNoSchedule()
    {
        \$dateBuilder = \$this->getMockBuilder(DateBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$schedulerRepository = \$this->getMockBuilder(SchedulerRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$entityManager = \$this->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$entityManager->expects(\$this->once())
            ->method('getRepository')
            ->with(Scheduler::class)
            ->willReturn(\$schedulerRepository);

        \$schedulerPlanner = new SchedulerPlanner(\$dateBuilder, \$entityManager);

        \$report = new Report();

        \$schedulerRepository->expects(\$this->once())
            ->method('getSchedulerByReport')
            ->with(\$report)
            ->willReturn(null);

        \$dateBuilder->expects(\$this->once())
            ->method('getNextEvent')
            ->with(\$report)
            ->willThrowException(new NoScheduleException());

        \$schedulerPlanner->computeScheduler(\$report);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Scheduler/Model/SchedulerPlannerTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Model/SchedulerPlannerTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Scheduler/Model/SchedulerPlannerTest.php");
    }
}
