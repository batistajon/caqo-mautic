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

/* @bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailAttachmentTest.php */
class __TwigTemplate_b3fc826ab6d561a446d2ffeb7708d56a2a26d0564bfaf19929de1ae29c064f6b extends Template
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

use Mautic\\EmailBundle\\Swiftmailer\\Message\\MauticMessage;
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Mail\\SendGridMailAttachment;
use SendGrid\\Mail;

class SendGridMailAttachmentTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNotMauticMessageWithAttachment(): void
    {
        \$sendGridMailAttachment = new SendGridMailAttachment();

        \$message = \$this->getMockBuilder(\\Swift_Mime_SimpleMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$message->expects(\$this->exactly(2))->method('getChildren')->will(\$this->onConsecutiveCalls([
            new \\Swift_Attachment('This is the plain text attachment.', 'hello.txt', 'text/plain'),
        ], [
            new \\Swift_Attachment('This is the plain text attachment.', 'hello.txt', 'text/plain'),
        ]));

        \$mail = \$this->getMockBuilder(Mail::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$mail->expects(\$this->once())
            ->method('addAttachment');

        \$sendGridMailAttachment->addAttachmentsToMail(\$mail, \$message);
    }

    public function testNotMauticMessageWithoutAttachment(): void
    {
        \$sendGridMailAttachment = new SendGridMailAttachment();

        \$message = \$this->getMockBuilder(\\Swift_Mime_SimpleMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$mail = \$this->getMockBuilder(Mail::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$mail->expects(\$this->never())
            ->method('addAttachment');

        \$sendGridMailAttachment->addAttachmentsToMail(\$mail, \$message);
    }

    public function testNoAttachment()
    {
        \$sendGridMailAttachment = new SendGridMailAttachment();

        \$message = \$this->getMockBuilder(MauticMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$mail = \$this->getMockBuilder(Mail::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$message->expects(\$this->once())
            ->method('getAttachments')
            ->willReturn([]);

        \$mail->expects(\$this->never())
            ->method('addAttachment');

        \$sendGridMailAttachment->addAttachmentsToMail(\$mail, \$message);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailAttachmentTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailAttachmentTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailAttachmentTest.php");
    }
}
