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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/BounceTest.php */
class __TwigTemplate_25f554fb245bf2ae74e9b42a3d63d0303d1b462290a9dcb3c60eadd1f703cced extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Processor;

use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Entity\\StatRepository;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\ContactFinder;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result;
use Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Transport\\TestTransport;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\DoNotContact;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Monolog\\Logger;

class BounceTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that the transport interface processes the message appropriately
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce::process()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce::updateStat()
     * @covers  \\Mautic\\EmailBundle\\Swiftmailer\\Transport\\BounceProcessorInterface::processBounce()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::setStat()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::getStat()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::setContacts()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::getContacts()
     */
    public function testProcessorInterfaceProcessesMessage()
    {
        \$transport     = new TestTransport(new \\Swift_Events_SimpleEventDispatcher());
        \$contactFinder = \$this->getMockBuilder(ContactFinder::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$contactFinder->method('find')
            ->willReturnCallback(
                function (\$email, \$bounceAddress) {
                    \$stat = new Stat();

                    \$lead = new Lead();
                    \$lead->setEmail(\$email);
                    \$stat->setLead(\$lead);

                    \$email = new Email();
                    \$stat->setEmail(\$email);

                    \$result = new Result();
                    \$result->setStat(\$stat);
                    \$result->setContacts(
                        [
                            \$lead,
                        ]
                    );

                    return \$result;
                }
            );

        \$statRepo = \$this->getMockBuilder(StatRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$statRepo->expects(\$this->once())
            ->method('saveEntity');

        \$leadModel = \$this->getMockBuilder(LeadModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$translator = \$this->getMockBuilder(Translator::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$logger = \$this->getMockBuilder(Logger::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$doNotContact = \$this->createMock(DoNotContact::class);

        \$bouncer = new Bounce(\$transport, \$contactFinder, \$statRepo, \$leadModel, \$translator, \$logger, \$doNotContact);

        \$message = new Message();
        \$this->assertTrue(\$bouncer->process(\$message));
    }

    /**
     * @testdox Test that the message is processed appropriately
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce::process()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce::updateStat()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::setStat()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::getStat()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::setContacts()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::getContacts()
     */
    public function testContactIsFoundFromMessageAndDncRecordAdded()
    {
        \$transport     = new \\Swift_Transport_NullTransport(new \\Swift_Events_SimpleEventDispatcher());
        \$contactFinder = \$this->getMockBuilder(ContactFinder::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$contactFinder->method('find')
            ->willReturnCallback(
                function (\$email, \$bounceAddress) {
                    \$stat = new Stat();

                    \$lead = new Lead();
                    \$lead->setEmail(\$email);
                    \$stat->setLead(\$lead);

                    \$email = new Email();
                    \$stat->setEmail(\$email);

                    \$result = new Result();
                    \$result->setStat(\$stat);
                    \$result->setContacts(
                        [
                            \$lead,
                        ]
                    );

                    return \$result;
                }
            );

        \$statRepo = \$this->getMockBuilder(StatRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$statRepo->expects(\$this->once())
            ->method('saveEntity');

        \$leadModel = \$this->getMockBuilder(LeadModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$translator = \$this->getMockBuilder(Translator::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$logger = \$this->getMockBuilder(Logger::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$doNotContact = \$this->createMock(DoNotContact::class);

        \$bouncer = new Bounce(\$transport, \$contactFinder, \$statRepo, \$leadModel, \$translator, \$logger, \$doNotContact);

        \$message            = new Message();
        \$message->to        = ['contact+bounce_123abc@test.com' => null];
        \$message->dsnReport = <<<'DSN'
Original-Recipient: sdfgsdfg@seznan.cz
Final-Recipient: rfc822;sdfgsdfg@seznan.cz
Action: failed
Status: 5.4.4
Diagnostic-Code: DNS; Host not found
DSN;

        \$this->assertTrue(\$bouncer->process(\$message));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/BounceTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/BounceTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/BounceTest.php");
    }
}
