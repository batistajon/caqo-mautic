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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/FeedbackLoopTest.php */
class __TwigTemplate_09ef31ca2c9c74770963263a1fe5504ffb3fd50b7ddbf684ef8662e140790b31 extends Template
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
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\FeedbackLoop;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\ContactFinder;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\DoNotContact;
use Monolog\\Logger;

class FeedbackLoopTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that the message is processed appropriately
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\FeedbackLoop::process()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::setStat()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::getStat()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::setContacts()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::getContacts()
     */
    public function testContactIsFoundFromMessage()
    {
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

        \$processor = new FeedbackLoop(\$contactFinder, \$translator, \$logger, \$doNotContact);

        \$message            = new Message();
        \$message->fblReport = <<<'BODY'
Feedback-Type: abuse
User-Agent: SomeGenerator/1.0
Version: 1
Original-Mail-From: <somespammer@example.net>
Original-Rcpt-To: <user@example.com>
Received-Date: Thu, 8 Mar 2005 14:00:00 EDT
Source-IP: 192.0.2.2
Authentication-Results: mail.example.com
               smtp.mail=somespammer@example.com;
               spf=fail
Reported-Domain: example.net
Reported-Uri: http://example.net/earn_money.html
Reported-Uri: mailto:user@example.com
Removal-Recipient: user@example.com
BODY;

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
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/FeedbackLoopTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/FeedbackLoopTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/FeedbackLoopTest.php");
    }
}
