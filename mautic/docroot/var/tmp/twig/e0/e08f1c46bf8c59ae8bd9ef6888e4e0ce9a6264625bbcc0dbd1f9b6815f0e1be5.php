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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/DsnParserTest.php */
class __TwigTemplate_260a1f4046e06c9960b00826b7624a715dcecea569c81b297981254c7cd5cbf7 extends Template
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
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BouncedEmail;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition\\Category;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition\\Type;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\DsnParser;

class DsnParserTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that a BouncedEmail is returned from a dsn report
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\DsnParser::getBounce()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\DsnParser::parse()
     */
    public function testBouncedEmailIsReturnedFromParsedDsnReport()
    {
        \$message            = new Message();
        \$message->dsnReport = <<<'DSN'
Original-Recipient: sdfgsdfg@seznan.cz
Final-Recipient: rfc822;sdfgsdfg@seznan.cz
Action: failed
Status: 5.4.4
Diagnostic-Code: DNS; Host not found
DSN;
        \$parser = new DsnParser();
        \$bounce = \$parser->getBounce(\$message);

        \$this->assertInstanceOf(BouncedEmail::class, \$bounce);
        \$this->assertEquals('sdfgsdfg@seznan.cz', \$bounce->getContactEmail());
        \$this->assertEquals(Category::DNS_UNKNOWN, \$bounce->getRuleCategory());
        \$this->assertEquals(Type::HARD, \$bounce->getType());
        \$this->assertTrue(\$bounce->isFinal());
    }

    /**
     * @testdox Test a Postfix BouncedEmail is returned from a dsn report
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\DsnParser::getBounce()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\DsnParser::parse()
     */
    public function testPostfixBouncedEmailIsReturnedFromParsedDsnReport()
    {
        \$message            = new Message();
        \$message->dsnReport = <<<'DSN'
Final-Recipient: rfc822; aaaaaaaaaaaaa@yoursite.com
Original-Recipient: rfc822;aaaaaaaaaaaaa@yoursite.com
Action: failed
Status: 5.1.1
Remote-MTA: dns; mail-server.yoursite.com
Diagnostic-Code: smtp; 550 5.1.1 <aaaaaaaaaaaaa@yoursite.com> User doesn't
    exist: aaaaaaaaaaaaa@yoursite.com
DSN;

        \$parser = new DsnParser();
        \$bounce = \$parser->getBounce(\$message);

        \$this->assertInstanceOf(BouncedEmail::class, \$bounce);
        \$this->assertEquals('aaaaaaaaaaaaa@yoursite.com', \$bounce->getContactEmail());
        \$this->assertEquals(Category::UNKNOWN, \$bounce->getRuleCategory());
        \$this->assertEquals(Type::HARD, \$bounce->getType());
        \$this->assertTrue(\$bounce->isFinal());
    }

    /**
     * @testdox Test that an exception is thrown if a bounce cannot be found in a dsn report
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\DsnParser::getBounce()
     */
    public function testBounceNotFoundFromBadDsnReport()
    {
        \$this->expectException(BounceNotFound::class);

        \$message            = new Message();
        \$message->dsnReport = 'BAD';
        \$parser             = new DsnParser();
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
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/DsnParserTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/DsnParserTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/DsnParserTest.php");
    }
}
