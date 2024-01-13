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

/* @bundles/EmailBundle/Tests/Swiftmailer/SendGrid/SendGridApiMessageTest.php */
class __TwigTemplate_2b98d78a139a41071d42941a0452630511de35567c8269d584b937e8e03a40d7 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Swiftmailer\\SendGrid;

use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Mail\\SendGridMailAttachment;
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Mail\\SendGridMailBase;
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Mail\\SendGridMailMetadata;
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Mail\\SendGridMailPersonalization;
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\SendGridApiMessage;
use SendGrid\\Mail;

class SendGridApiMessageTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetMail()
    {
        \$sendGridMailBase = \$this->getMockBuilder(SendGridMailBase::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridMailPersonalization = \$this->getMockBuilder(SendGridMailPersonalization::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridMailMetadata = \$this->getMockBuilder(SendGridMailMetadata::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridMailAttachment = \$this->getMockBuilder(SendGridMailAttachment::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$mail = \$this->getMockBuilder(Mail::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$message = \$this->getMockBuilder(\\Swift_Mime_SimpleMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridApiMessage = new SendGridApiMessage(\$sendGridMailBase, \$sendGridMailPersonalization, \$sendGridMailMetadata, \$sendGridMailAttachment);

        \$sendGridMailBase->expects(\$this->once())
            ->method('getSendGridMail')
            ->with(\$message)
            ->willReturn(\$mail);

        \$sendGridMailPersonalization->expects(\$this->once())
            ->method('addPersonalizedDataToMail')
            ->with(\$mail, \$message);

        \$sendGridMailMetadata->expects(\$this->once())
            ->method('addMetadataToMail')
            ->with(\$mail, \$message);

        \$sendGridMailAttachment->expects(\$this->once())
            ->method('addAttachmentsToMail')
            ->with(\$mail, \$message);

        \$result = \$sendGridApiMessage->getMessage(\$message);

        \$this->assertSame(\$mail, \$result);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/SendGridApiMessageTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/SendGridApiMessageTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Swiftmailer/SendGrid/SendGridApiMessageTest.php");
    }
}
