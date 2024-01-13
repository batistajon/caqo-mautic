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

/* @bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailMetadataTest.php */
class __TwigTemplate_bba484e15f97e727d95a10084b09d9bcb3560cc476a8619b3f9fdd2103d97033 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Swiftmailer\\SendGrid\\Mail;

use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Mail\\SendGridMailMetadata;
use SendGrid\\BccSettings;
use SendGrid\\Mail;
use SendGrid\\MailSettings;
use SendGrid\\ReplyTo;

class SendGridMailMetadataTest extends \\PHPUnit\\Framework\\TestCase
{
    private function make_header(string \$key, string \$value): \\Swift_Mime_Header
    {
        \$header = new \\Swift_Mime_Headers_OpenDKIMHeader(\$key);
        \$header->setValue(\$value);

        return \$header;
    }

    public function testBaseMessage()
    {
        \$sendGridMailMetadata = new SendGridMailMetadata();

        \$randomvalue = rand(-100, 100).'';
        \$headers     = \$this->createMock(\\Swift_Mime_SimpleHeaderSet::class);

        \$headers->expects(\$this->once())
            ->method('getAll')
            ->willReturn([
                \$this->make_header('X-FOO', 'Bar'),
                \$this->make_header('X-rand', \$randomvalue),
                \$this->make_header('to', 'nobody@email.com'),
            ]);

        \$message = \$this->getMockBuilder(\\Swift_Mime_SimpleMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$message->expects(\$this->exactly(2))
            ->method('getReplyTo')
            ->with()
            ->willReturn(['email@example.com' => 'email@example.com']);

        \$message->expects(\$this->exactly(2))
            ->method('getBcc')
            ->with()
            ->willReturn(['bcc@example.com' => 'bcc@example.com']);

        \$message->expects(\$this->once())
            ->method('getHeaders')
            ->willReturn(\$headers);

        \$mail = new Mail('from', 'subject', 'to', 'content');

        \$sendGridMailMetadata->addMetadataToMail(\$mail, \$message);

        \$replyTo = new ReplyTo('email@example.com');
        \$this->assertEquals(\$replyTo, \$mail->getReplyTo());

        // Header \"to\" should be ignored
        \$this->assertEquals([
            'X-FOO'  => 'Bar',
            'X-rand' => \$randomvalue,
        ], \$mail->getheaders());

        /**
         * @var MailSettings
         * @var BccSettings  \$bccSettings
         */
        \$mailSettings = \$mail->getMailSettings();
        \$bccSettings  = \$mailSettings->getBccSettings();

        \$this->assertSame('bcc@example.com', \$bccSettings->getEmail());
        \$this->assertTrue(\$bccSettings->getEnable());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailMetadataTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailMetadataTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailMetadataTest.php");
    }
}
