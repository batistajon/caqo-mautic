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

/* @bundles/ReportBundle/Tests/Scheduler/Model/SendScheduleTest.php */
class __TwigTemplate_50993c93c2d35fd7a05e54e68eafd4294600d991b690a46b3367d31ef644a7ac extends Template
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

use Mautic\\EmailBundle\\Helper\\MailHelper;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Exception\\FileTooBigException;
use Mautic\\ReportBundle\\Scheduler\\Model\\FileHandler;
use Mautic\\ReportBundle\\Scheduler\\Model\\MessageSchedule;
use Mautic\\ReportBundle\\Scheduler\\Model\\SendSchedule;
use PHPUnit\\Framework\\MockObject\\MockObject;

class SendScheduleTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var Report
     */
    private \$report;

    /**
     * @var Scheduler
     */
    private \$scheduler;

    /**
     * @var SendSchedule
     */
    private \$sendSchedule;

    /**
     * @var MockObject|MailHelper
     */
    private \$mailHelperMock;

    /**
     * @var MockObject|MessageSchedule
     */
    private \$messageSchedule;

    /**
     * @var MockObject|FileHandler
     */
    private \$fileHandler;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->report          = new Report();
        \$this->scheduler       = new Scheduler(\$this->report, new \\DateTime());
        \$this->mailHelperMock  = \$this->createMock(MailHelper::class);
        \$this->messageSchedule = \$this->createMock(MessageSchedule::class);
        \$this->fileHandler     = \$this->createMock(FileHandler::class);

        \$this->mailHelperMock->expects(\$this->once())
            ->method('getMailer')
            ->willReturnSelf();

        \$this->sendSchedule = new SendSchedule(
            \$this->mailHelperMock,
            \$this->messageSchedule,
            \$this->fileHandler
        );
    }

    public function testSendScheduleWithCsvFile()
    {
        \$this->report->setToAddress('john@doe.com, doe@john.com');

        \$this->messageSchedule->expects(\$this->once())
            ->method('getSubject')
            ->with(\$this->report)
            ->willReturn('Subject');

        \$this->messageSchedule->expects(\$this->once())
            ->method('getMessageForAttachedFile')
            ->with(\$this->report)
            ->willReturn('Message');

        \$this->fileHandler->expects(\$this->once())
            ->method('fileCanBeAttached')
            ->with('/path/to/report.csv');

        \$this->mailHelperMock->expects(\$this->once())
            ->method('setTo')
            ->with(['john@doe.com', 'doe@john.com']);

        \$this->mailHelperMock->expects(\$this->once())
            ->method('setSubject')
            ->with('Subject');

        \$this->mailHelperMock->expects(\$this->once())
            ->method('setBody')
            ->with('Message');

        \$this->mailHelperMock->expects(\$this->once())
            ->method('parsePlainText')
            ->with('Message');

        \$this->mailHelperMock->expects(\$this->once())
            ->method('attachFile')
            ->with('/path/to/report.csv', 'report.csv', 'text/csv');

        \$this->mailHelperMock->expects(\$this->once())
            ->method('send')
            ->with(true);

        \$this->sendSchedule->send(\$this->scheduler, '/path/to/report.csv');
    }

    public function testSendScheduleWithZipFile()
    {
        \$this->report->setToAddress('john@doe.com, doe@john.com');

        \$this->messageSchedule->expects(\$this->once())
            ->method('getSubject')
            ->with(\$this->report)
            ->willReturn('Subject');

        \$this->messageSchedule->expects(\$this->once())
            ->method('getMessageForAttachedFile')
            ->with(\$this->report)
            ->willReturn('Message');

        \$this->fileHandler->expects(\$this->exactly(2))
            ->method('fileCanBeAttached')
            ->withConsecutive(
                ['/path/to/report.csv'],
                ['/path/to/report.zip']
            )
            ->will(\$this->onConsecutiveCalls(
                \$this->throwException(new FileTooBigException()),
                null
            ));

        \$this->fileHandler->expects(\$this->once())
            ->method('zipIt')
            ->with('/path/to/report.csv')
            ->willReturn('/path/to/report.zip');

        \$this->mailHelperMock->expects(\$this->once())
            ->method('setTo')
            ->with(['john@doe.com', 'doe@john.com']);

        \$this->mailHelperMock->expects(\$this->once())
            ->method('setSubject')
            ->with('Subject');

        \$this->mailHelperMock->expects(\$this->once())
            ->method('setBody')
            ->with('Message');

        \$this->mailHelperMock->expects(\$this->once())
            ->method('parsePlainText')
            ->with('Message');

        \$this->mailHelperMock->expects(\$this->once())
            ->method('attachFile')
            ->with('/path/to/report.zip', 'report.zip', 'application/zip');

        \$this->mailHelperMock->expects(\$this->once())
            ->method('send')
            ->with(true);

        \$this->sendSchedule->send(\$this->scheduler, '/path/to/report.csv');
    }

    public function testSendScheduleWithoutFile()
    {
        \$this->report->setToAddress('john@doe.com, doe@john.com');

        \$this->messageSchedule->expects(\$this->once())
            ->method('getSubject')
            ->with(\$this->report)
            ->willReturn('Subject');

        \$this->messageSchedule->expects(\$this->once())
            ->method('getMessageForLinkedFile')
            ->with(\$this->report)
            ->willReturn('Message');

        \$this->fileHandler->expects(\$this->once())
            ->method('zipIt')
            ->with('path-to-a-file')
            ->willReturn('path-to-a-zip-file');

        \$this->fileHandler->expects(\$this->exactly(2))
            ->method('fileCanBeAttached')
            ->withConsecutive(['path-to-a-file'], ['path-to-a-zip-file'])
            ->will(\$this->throwException(new FileTooBigException()));

        \$this->mailHelperMock->expects(\$this->once())
            ->method('setTo')
            ->with(['john@doe.com', 'doe@john.com']);

        \$this->mailHelperMock->expects(\$this->once())
            ->method('setSubject')
            ->with('Subject');

        \$this->mailHelperMock->expects(\$this->once())
            ->method('setBody')
            ->with('Message');

        \$this->mailHelperMock->expects(\$this->once())
            ->method('parsePlainText')
            ->with('Message');

        \$this->mailHelperMock->expects(\$this->never())
            ->method('attachFile');

        \$this->mailHelperMock->expects(\$this->once())
            ->method('send')
            ->with(true);

        \$this->sendSchedule->send(\$this->scheduler, 'path-to-a-file');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Scheduler/Model/SendScheduleTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Model/SendScheduleTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Scheduler/Model/SendScheduleTest.php");
    }
}
