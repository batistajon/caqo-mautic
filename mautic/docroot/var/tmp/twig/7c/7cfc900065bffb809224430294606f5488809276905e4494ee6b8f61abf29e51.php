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

/* @bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerNowBuilderTest.php */
class __TwigTemplate_2ef2e8f2341a3afbffa950bbed18ccc838cefced5ccc3ab31d928f983be1242b extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Scheduler\\Builder;

use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerNowBuilder;
use Mautic\\ReportBundle\\Scheduler\\Entity\\SchedulerEntity;
use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Recurr\\Exception\\InvalidArgument;
use Recurr\\Rule;

class SchedulerNowBuilderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBuilEvent(): void
    {
        \$schedulerNowBuilder = new SchedulerNowBuilder();
        \$schedulerEntity     = new SchedulerEntity(true, SchedulerEnum::UNIT_NOW, null, null);
        \$startDate           = new \\DateTime();
        \$rule                = new Rule();

        \$rule->setStartDate(\$startDate)
            ->setCount(1);

        \$schedulerNowBuilder->build(\$rule, \$schedulerEntity);

        \$this->assertEquals(Rule::\$freqs['SECONDLY'], \$rule->getFreq());
    }

    public function testBuilEventFails(): void
    {
        \$schedulerNowBuilder = new SchedulerNowBuilder();
        \$schedulerEntity     = new SchedulerEntity(true, SchedulerEnum::UNIT_NOW, null, null);
        \$rule                = \$this->createMock(Rule::class);

        \$rule->expects(\$this->once())
            ->method('setFreq')
            ->with('SECONDLY')
            ->willThrowException(new InvalidArgument());

        \$this->expectException(InvalidSchedulerException::class);

        \$schedulerNowBuilder->build(\$rule, \$schedulerEntity);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerNowBuilderTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerNowBuilderTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerNowBuilderTest.php");
    }
}
