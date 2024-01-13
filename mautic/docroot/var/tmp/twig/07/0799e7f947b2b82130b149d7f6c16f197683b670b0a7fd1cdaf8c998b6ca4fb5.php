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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/BodyParserTest.php */
class __TwigTemplate_017ea7976f4f22c28503f2ce5cc814a5ee455873bca14ef60f4e0339f7acaeb5 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Processor\\Bounce;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\BounceNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BodyParser;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BouncedEmail;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition\\Category;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition\\Type;

class BodyParserTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that a BouncedEmail is returned from a bounce detected in the body
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BodyParser::getBounce()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BodyParser::parse()
     */
    public function testBouncedEmailIsReturnedFromParsedBody()
    {
        \$message            = new Message();
        \$message->textPlain = <<<'BODY'
Please direct further questions regarding this message to your e-mail
administrator.

--AOL Postmaster



   ----- The following addresses had permanent fatal errors -----
<recipient@example.net>

   ----- Transcript of session follows -----
... while talking to air-yi01.mail.aol.com.:
>>> RCPT To:<recipient@example.net>
<<< 550 MAILBOX NOT FOUND
550 <recipient@example.net>... User unknown
BODY;
        \$parser = new BodyParser();
        \$bounce = \$parser->getBounce(\$message);

        \$this->assertInstanceOf(BouncedEmail::class, \$bounce);
        \$this->assertEquals('recipient@example.net', \$bounce->getContactEmail());
        \$this->assertEquals(Category::UNKNOWN, \$bounce->getRuleCategory());
        \$this->assertEquals(Type::HARD, \$bounce->getType());
        \$this->assertTrue(\$bounce->isFinal());
    }

    /**
     * @testdox Test that an exception is thrown if a bounce cannot be found in the body
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BodyParser::getBounce()
     */
    public function testBounceNotFoundFromBadDsnReport()
    {
        \$this->expectException(BounceNotFound::class);

        \$message            = new Message();
        \$message->textPlain = 'BAD';
        \$parser             = new BodyParser();
        \$parser->getBounce(\$message);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/BodyParserTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/BodyParserTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/BodyParserTest.php");
    }
}
