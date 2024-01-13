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

/* @bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailBaseTest.php */
class __TwigTemplate_ac83231699e5fe6957f6b19a912eec5ba2e7f718a4e071c280c7f592cb38a844 extends Template
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

use Mautic\\EmailBundle\\Helper\\PlainTextMessageHelper;
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Mail\\SendGridMailBase;
use SendGrid\\Content;
use SendGrid\\Email;

class SendGridMailBaseTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @dataProvider contentTypeProvider
     */
    public function testHtmlMessage(\$contentType)
    {
        \$plainTextMessageHelper = \$this->getMockBuilder(PlainTextMessageHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridMailBase = new SendGridMailBase(\$plainTextMessageHelper);

        \$message = \$this->getMockBuilder(\\Swift_Mime_SimpleMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$message->expects(\$this->once())
            ->method('getFrom')
            ->with()
            ->willReturn(['email@example.com' => 'My name']);

        \$message->expects(\$this->once())
            ->method('getSubject')
            ->with()
            ->willReturn('My subject');

        \$message->expects(\$this->once())
            ->method('getContentType')
            ->with()
            ->willReturn(\$contentType);

        \$message->expects(\$this->once())
            ->method('getBody')
            ->with()
            ->willReturn('HTML body');

        \$plainTextMessageHelper->expects(\$this->once())
            ->method('getPlainTextFromMessageNotStatic')
            ->with(\$message)
            ->willReturn('Plain text');

        \$mail = \$sendGridMailBase->getSendGridMail(\$message);

        \$personalizations = \$mail->getPersonalizations();
        \$this->assertSame([], \$personalizations);

        \$from = new Email('My name', 'email@example.com');
        \$this->assertEquals(\$from, \$mail->getFrom());

        \$this->assertSame('My subject', \$mail->getSubject());

        \$contents = \$mail->getContents();
        \$this->assertCount(2, \$contents);

        \$plainText   = new Content('text/plain', 'Plain text');
        \$htmlContent = new Content('text/html', 'HTML body');
        \$this->assertEquals(\$plainText, \$contents[0]);
        \$this->assertEquals(\$htmlContent, \$contents[1]);
    }

    public function contentTypeProvider()
    {
        return [
            ['text/html'],
            ['multipart/alternative'],
        ];
    }

    public function testPlainTextMessage()
    {
        \$plainTextMessageHelper = \$this->getMockBuilder(PlainTextMessageHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridMailBase = new SendGridMailBase(\$plainTextMessageHelper);

        \$message = \$this->getMockBuilder(\\Swift_Mime_SimpleMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$message->expects(\$this->once())
            ->method('getFrom')
            ->with()
            ->willReturn(['email@example.com' => 'My name']);

        \$message->expects(\$this->once())
            ->method('getSubject')
            ->with()
            ->willReturn('My subject');

        \$message->expects(\$this->exactly(2))
            ->method('getContentType')
            ->with()
            ->willReturn('text/plain');

        \$message->expects(\$this->once())
            ->method('getBody')
            ->with()
            ->willReturn('Plain text');

        \$plainTextMessageHelper->expects(\$this->never())
            ->method('getPlainTextFromMessageNotStatic');

        \$mail = \$sendGridMailBase->getSendGridMail(\$message);

        \$personalizations = \$mail->getPersonalizations();
        \$this->assertSame([], \$personalizations);

        \$from = new Email('My name', 'email@example.com');
        \$this->assertEquals(\$from, \$mail->getFrom());

        \$this->assertSame('My subject', \$mail->getSubject());

        \$contents = \$mail->getContents();
        \$this->assertCount(1, \$contents);

        \$plainText   = new Content('text/plain', 'Plain text');
        \$this->assertEquals(\$plainText, \$contents[0]);
    }

    public function testEmptyPlainTextMessage()
    {
        \$plainTextMessageHelper = \$this->getMockBuilder(PlainTextMessageHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridMailBase = new SendGridMailBase(\$plainTextMessageHelper);

        \$message = \$this->getMockBuilder(\\Swift_Mime_SimpleMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$message->expects(\$this->once())
            ->method('getFrom')
            ->with()
            ->willReturn(['email@example.com' => 'My name']);

        \$message->expects(\$this->once())
            ->method('getSubject')
            ->with()
            ->willReturn('My subject');

        \$message->expects(\$this->once())
            ->method('getContentType')
            ->with()
            ->willReturn('text/html');

        \$message->expects(\$this->once())
            ->method('getBody')
            ->with()
            ->willReturn('HTML body');

        \$plainTextMessageHelper->expects(\$this->once())
            ->method('getPlainTextFromMessageNotStatic')
            ->with(\$message)
            ->willReturn('');

        \$mail = \$sendGridMailBase->getSendGridMail(\$message);

        \$personalizations = \$mail->getPersonalizations();
        \$this->assertSame([], \$personalizations);

        \$from = new Email('My name', 'email@example.com');
        \$this->assertEquals(\$from, \$mail->getFrom());

        \$this->assertSame('My subject', \$mail->getSubject());

        \$contents = \$mail->getContents();
        \$this->assertCount(1, \$contents);

        \$content   = new Content('text/html', 'HTML body');
        \$this->assertEquals(\$content, \$contents[0]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailBaseTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailBaseTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailBaseTest.php");
    }
}
