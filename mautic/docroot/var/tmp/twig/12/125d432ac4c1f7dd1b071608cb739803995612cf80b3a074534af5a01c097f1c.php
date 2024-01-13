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

/* @bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailPersonalizationTest.php */
class __TwigTemplate_1404e1da4c0b2f97a4a46545cca70c03f15cfc0dbfe5f79e8799c5295b305dae extends Template
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
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Mail\\SendGridMailPersonalization;
use SendGrid\\Email;
use SendGrid\\Mail;
use SendGrid\\Personalization;

class SendGridMailPersonalizationTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNotMauticMessage()
    {
        \$sendGridMailPersonalization = new SendGridMailPersonalization();

        \$message = \$this->getMockBuilder(\\Swift_Mime_SimpleMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$message->expects(\$this->never())
            ->method('getCc');

        \$to = [
            'info1@example.com' => 'Name 1',
        ];
        \$message->expects(\$this->once())
            ->method('getTo')
            ->willReturn(\$to);

        \$mail                  = new Mail('from', 'subject', 'to', 'content');
        \$mail->personalization = [];

        \$sendGridMailPersonalization->addPersonalizedDataToMail(\$mail, \$message);

        \$personalization = \$mail->getPersonalizations();
        \$this->assertCount(1, \$personalization);

        /**
         * @var Personalization
         */
        \$personalization = \$personalization[0];
        \$tos             = \$personalization->getTos();
        \$to              = \$tos[0];
        \$toExpected      = new Email('Name 1', 'info1@example.com');
        \$this->assertEquals(\$toExpected, \$to);
    }

    public function testPersonalization()
    {
        \$sendGridMailPersonalization = new SendGridMailPersonalization();

        \$message = \$this->getMockBuilder(MauticMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$mail                  = new Mail('from', 'subject', 'to', 'content');
        \$mail->personalization = [];

        \$to = [
            'info1@example.com' => 'Name 1',
            'info2@example.com' => 'Name 2',
        ];
        \$cc = [
            'cc@example.com' => 'Name cc',
        ];
        \$metadata = [
            'info1@example.com' => ['tokens' => []],
            'info2@example.com' => ['tokens' => []],
        ];

        \$message->expects(\$this->once())
            ->method('getTo')
            ->willReturn(\$to);

        \$message->expects(\$this->once())
            ->method('getCc')
            ->willReturn(\$cc);

        \$message->expects(\$this->once())
            ->method('getMetadata')
            ->willReturn(\$metadata);

        \$sendGridMailPersonalization->addPersonalizedDataToMail(\$mail, \$message);

        \$personalization = \$mail->getPersonalizations();
        \$this->assertCount(2, \$personalization);

        \$ccExpected = new Email('Name cc', 'cc@example.com');

        /**
         * @var Personalization
         * @var Personalization \$personalization2
         */
        \$personalization1 = \$personalization[0];
        \$tos              = \$personalization1->getTos();
        \$to               = \$tos[0];
        \$toExpected       = new Email('Name 1', 'info1@example.com');
        \$this->assertEquals(\$toExpected, \$to);

        \$ccs = \$personalization1->getCcs();
        \$cc  = \$ccs[0];
        \$this->assertEquals(\$ccExpected, \$cc);

        \$personalization2 = \$personalization[1];
        \$tos              = \$personalization2->getTos();
        \$to               = \$tos[0];
        \$toExpected       = new Email('Name 2', 'info2@example.com');
        \$this->assertEquals(\$toExpected, \$to);

        \$ccs = \$personalization2->getCcs();
        \$cc  = \$ccs[0];
        \$this->assertEquals(\$ccExpected, \$cc);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailPersonalizationTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailPersonalizationTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Mail/SendGridMailPersonalizationTest.php");
    }
}
