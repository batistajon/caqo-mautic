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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/UnsubscribeTest.php */
class __TwigTemplate_10d6d7f2e2ca5391172b1bb69330f11e243d70a452e320ec035254902c1ea1ca extends Template
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
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscribe;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\ContactFinder;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result;
use Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Transport\\TestTransport;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\DoNotContact;
use Monolog\\Logger;

class UnsubscribeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that the transport interface processes the message appropriately
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscribe::process()
     * @covers  \\Mautic\\EmailBundle\\Swiftmailer\\Transport\\UnsubscriptionProcessorInterface::processUnsubscription()
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
                function (\$email) {
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

        \$translator = \$this->getMockBuilder(Translator::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$logger = \$this->getMockBuilder(Logger::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$doNotContact = \$this->getMockBuilder(DoNotContact::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$processor = new Unsubscribe(\$transport, \$contactFinder, \$translator, \$logger, \$doNotContact);

        \$message = new Message();
        \$this->assertTrue(\$processor->process(\$message));
    }

    /**
     * @testdox Test that the message is processed appropriately
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscribe::process()
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
                function (\$email) {
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

        \$translator = \$this->getMockBuilder(Translator::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$logger = \$this->getMockBuilder(Logger::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$doNotContact = \$this->getMockBuilder(DoNotContact::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$processor = new Unsubscribe(\$transport, \$contactFinder, \$translator, \$logger, \$doNotContact);

        \$message     = new Message();
        \$message->to = ['contact+unsubscribe_123abc@test.com' => null];
        \$this->assertTrue(\$processor->process(\$message));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/UnsubscribeTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/UnsubscribeTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/UnsubscribeTest.php");
    }
}
