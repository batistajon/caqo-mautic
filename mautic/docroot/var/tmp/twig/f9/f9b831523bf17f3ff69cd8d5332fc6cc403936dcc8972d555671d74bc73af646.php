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

/* @bundles/EmailBundle/Tests/Swiftmailer/SendGrid/SendGridApiFacadeTest.php */
class __TwigTemplate_b235ab8b2d803c9c646c3e3a458fcceba960ce2931aef6b56af4b7236352f807 extends Template
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

use Mautic\\EmailBundle\\Swiftmailer\\Exception\\SendGridBadLoginException;
use Mautic\\EmailBundle\\Swiftmailer\\Exception\\SendGridBadRequestException;
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\SendGridApiFacade;
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\SendGridApiMessage;
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\SendGridApiResponse;
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\SendGridWrapper;
use SendGrid\\Mail;
use SendGrid\\Response;

class SendGridApiFacadeTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testRequest()
    {
        \$sendGridWrapper = \$this->getMockBuilder(SendGridWrapper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridApiMessage = \$this->getMockBuilder(SendGridApiMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridApiResponse = \$this->getMockBuilder(SendGridApiResponse::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$message = \$this->getMockBuilder(\\Swift_Mime_SimpleMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$mail = \$this->getMockBuilder(Mail::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$response = \$this->getMockBuilder(Response::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridApiFacade = new SendGridApiFacade(\$sendGridWrapper, \$sendGridApiMessage, \$sendGridApiResponse);

        \$sendGridApiMessage->expects(\$this->once())
            ->method('getMessage')
            ->with(\$message)
            ->willReturn(\$mail);

        \$sendGridWrapper->expects(\$this->once())
            ->method('send')
            ->with(\$mail)
            ->willReturn(\$response);

        \$sendGridApiResponse->expects(\$this->once())
            ->method('checkResponse')
            ->with(\$response);

        \$sendGridApiFacade->send(\$message);
    }

    public function testBadLogin()
    {
        \$sendGridWrapper = \$this->getMockBuilder(SendGridWrapper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridApiMessage = \$this->getMockBuilder(SendGridApiMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridApiResponse = \$this->getMockBuilder(SendGridApiResponse::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$message = \$this->getMockBuilder(\\Swift_Mime_SimpleMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$mail = \$this->getMockBuilder(Mail::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$response = \$this->getMockBuilder(Response::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridApiFacade = new SendGridApiFacade(\$sendGridWrapper, \$sendGridApiMessage, \$sendGridApiResponse);

        \$sendGridApiMessage->expects(\$this->once())
            ->method('getMessage')
            ->with(\$message)
            ->willReturn(\$mail);

        \$sendGridWrapper->expects(\$this->once())
            ->method('send')
            ->with(\$mail)
            ->willReturn(\$response);

        \$sendGridApiResponse->expects(\$this->once())
            ->method('checkResponse')
            ->with(\$response)
            ->willThrowException(new SendGridBadLoginException('Bad login'));

        \$this->expectException(\\Swift_TransportException::class);
        \$this->expectExceptionMessage('Bad login');

        \$sendGridApiFacade->send(\$message);
    }

    public function testBadRequest()
    {
        \$sendGridWrapper = \$this->getMockBuilder(SendGridWrapper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridApiMessage = \$this->getMockBuilder(SendGridApiMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridApiResponse = \$this->getMockBuilder(SendGridApiResponse::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$message = \$this->getMockBuilder(\\Swift_Mime_SimpleMessage::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$mail = \$this->getMockBuilder(Mail::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$response = \$this->getMockBuilder(Response::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$sendGridApiFacade = new SendGridApiFacade(\$sendGridWrapper, \$sendGridApiMessage, \$sendGridApiResponse);

        \$sendGridApiMessage->expects(\$this->once())
            ->method('getMessage')
            ->with(\$message)
            ->willReturn(\$mail);

        \$sendGridWrapper->expects(\$this->once())
            ->method('send')
            ->with(\$mail)
            ->willReturn(\$response);

        \$sendGridApiResponse->expects(\$this->once())
            ->method('checkResponse')
            ->with(\$response)
            ->willThrowException(new SendGridBadRequestException('Bad request'));

        \$this->expectException(\\Swift_TransportException::class);
        \$this->expectExceptionMessage('Bad request');

        \$sendGridApiFacade->send(\$message);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/SendGridApiFacadeTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/SendGridApiFacadeTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Swiftmailer/SendGrid/SendGridApiFacadeTest.php");
    }
}
