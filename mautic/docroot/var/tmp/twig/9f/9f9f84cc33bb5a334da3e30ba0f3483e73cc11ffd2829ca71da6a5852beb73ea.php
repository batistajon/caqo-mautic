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

/* @bundles/ChannelBundle/Tests/Model/MessageQueueModelTest.php */
class __TwigTemplate_ee50b7979cbfdd611c1c7599dbae6926b487bfd469acfc47c9ea8a73d179830f extends Template
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

namespace Mautic\\ChannelBundle\\Tests\\Model;

use Mautic\\ChannelBundle\\Entity\\MessageQueue;
use Mautic\\ChannelBundle\\Model\\MessageQueueModel;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\LeadBundle\\Model\\CompanyModel;
use Mautic\\LeadBundle\\Model\\LeadModel;

class MessageQueueModelTest extends \\PHPUnit\\Framework\\TestCase
{
    /** @var string */
    const DATE = '2019-07-07 15:00:00';

    /** @var MessageQueueModel */
    protected \$messageQueue;

    /** @var MessageQueue */
    protected \$message;

    protected function setUp(): void
    {
        \$lead       = \$this->createMock(LeadModel::class);
        \$company    = \$this->createMock(CompanyModel::class);
        \$coreHelper = \$this->createMock(CoreParametersHelper::class);

        \$this->messageQueue = new MessageQueueModel(\$lead, \$company, \$coreHelper);

        \$message      = new MessageQueue();
        \$scheduleDate = new \\DateTime(self::DATE);
        \$message->setScheduledDate(\$scheduleDate);

        \$this->message = \$message;
    }

    public function testRescheduleMessageIntervalDay()
    {
        \$interval = new \\DateInterval('P2D');
        \$this->prepareRescheduleMessageIntervalTest(\$interval);
    }

    public function testRescheduleMessageIntervalWeek()
    {
        \$interval = new \\DateInterval('P4W');
        \$this->prepareRescheduleMessageIntervalTest(\$interval);
    }

    public function testRescheduleMessageIntervalMonth()
    {
        \$interval = new \\DateInterval('P8M');
        \$this->prepareRescheduleMessageIntervalTest(\$interval);
    }

    public function testRescheduleMessageNoInterval()
    {
        \$interval = new \\DateInterval('PT0S');
        \$this->prepareRescheduleMessageIntervalTest(\$interval);
    }

    protected function prepareRescheduleMessageIntervalTest(\\DateInterval \$interval)
    {
        \$oldScheduleDate = \$this->message->getScheduledDate();
        \$this->messageQueue->reschedule(\$this->message, \$interval);
        \$scheduleDate = \$this->message->getScheduledDate();
        \$oldScheduleDate->add(\$interval);

        \$this->assertEquals(\$oldScheduleDate, \$scheduleDate);
        \$this->assertNotSame(\$oldScheduleDate, \$scheduleDate);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Tests/Model/MessageQueueModelTest.php";
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
        return new Source("", "@bundles/ChannelBundle/Tests/Model/MessageQueueModelTest.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Tests/Model/MessageQueueModelTest.php");
    }
}
