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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/Unsubscription/ParserTest.php */
class __TwigTemplate_05102dfe9029ff6de0322c30ea48e6a308403739d9f93f7964fe204cd543e0e0 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Processor\\Unsubscription;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\UnsubscriptionNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\Parser;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\UnsubscribedEmail;

class ParserTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that an email is found inside a feedback report
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\Parser::parse()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\UnsubscribedEmail::getContactEmail()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\UnsubscribedEmail::getUnsubscriptionAddress()
     */
    public function testThatReplyIsDetectedThroughTrackingPixel()
    {
        \$message              = new Message();
        \$message->fromAddress = 'hello@hello.com';
        \$message->to          = [
            'test+unsubscribe@test.com' => 'Test Test',
        ];

        \$parser = new Parser(\$message);

        \$unsubscribedEmail = \$parser->parse();
        \$this->assertInstanceOf(UnsubscribedEmail::class, \$unsubscribedEmail);

        \$this->assertEquals('hello@hello.com', \$unsubscribedEmail->getContactEmail());
        \$this->assertEquals('test+unsubscribe@test.com', \$unsubscribedEmail->getUnsubscriptionAddress());
    }

    /**
     * @testdox Test that an exeption is thrown if a unsubscription email is not found
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\Parser::parse()
     */
    public function testExceptionIsThrownWithUnsubscribeNotFound()
    {
        \$this->expectException(UnsubscriptionNotFound::class);

        \$message = new Message();
        \$parser  = new Parser(\$message);

        \$parser->parse();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Unsubscription/ParserTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Unsubscription/ParserTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/Unsubscription/ParserTest.php");
    }
}
