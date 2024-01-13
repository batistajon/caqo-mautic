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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/ParserTest.php */
class __TwigTemplate_01e106c18ba5ff77dd46551bf96bf999d7cbea4188eee218b7a3c8ef0de39b2b extends Template
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

use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BouncedEmail;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Parser;

class ParserTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that a bounce is found through DsnReport
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Parser::parse()
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

        \$parser = new Parser(\$message);
        \$bounce = \$parser->parse(\$message);

        \$this->assertInstanceOf(BouncedEmail::class, \$bounce);
    }

    /**
     * @testdox Test that a bounce is found through body
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Parser::parse()
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

        \$parser = new Parser(\$message);
        \$bounce = \$parser->parse(\$message);

        \$this->assertInstanceOf(BouncedEmail::class, \$bounce);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/ParserTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/ParserTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/ParserTest.php");
    }
}
