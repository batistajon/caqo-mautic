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

/* @bundles/EmailBundle/Tests/Swiftmailer/SendGrid/SendGridApiResponseTest.php */
class __TwigTemplate_4dca7684d5c4e8c50af9860e01f073641c66368f75b55c4d6b90dd87a96668bd extends Template
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
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\SendGridApiResponse;
use Monolog\\Logger;
use SendGrid\\Response;

class SendGridApiResponseTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @dataProvider successfulResponseProvider
     */
    public function testSuccessfulResponse(\$code)
    {
        \$sendGridApiMessage = new SendGridApiResponse(\$this->createMock(Logger::class));
        \$response           = new Response(\$code);

        \$this->assertNull(\$sendGridApiMessage->checkResponse(\$response));
    }

    public function successfulResponseProvider()
    {
        return [
            [200],
            [202],
            [250],
            [299],
        ];
    }

    public function testBadLogin()
    {
        \$logger             = \$this->createMock(Logger::class);
        \$sendGridApiMessage = new SendGridApiResponse(\$logger);
        \$response           = new Response(401);

        \$logger->expects(\$this->once())
            ->method('addError')
            ->with('SendGrid response: 401', ['response' => \$response]);

        \$this->expectException(SendGridBadLoginException::class);

        \$sendGridApiMessage->checkResponse(\$response);
    }

    public function testBadRequest()
    {
        \$logger             = \$this->createMock(Logger::class);
        \$sendGridApiMessage = new SendGridApiResponse(\$logger);
        \$body               = '{\"errors\":[{\"message\":\"The attachment content must be base64 encoded.\",\"field\":\"attachments.0.content\",\"help\":\"http://sendgrid.com/docs/API_Reference/Web_API_v3/Mail/errors.html#message.attachments.content\"}]}';
        \$response           = new Response(410, \$body);

        \$logger->expects(\$this->once())
            ->method('addError')
            ->with('SendGrid response: 410', ['response' => \$response]);

        \$this->expectException(SendGridBadRequestException::class);
        \$this->expectExceptionMessage('The attachment content must be base64 encoded.');

        \$sendGridApiMessage->checkResponse(\$response);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/SendGridApiResponseTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/SendGridApiResponseTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Swiftmailer/SendGrid/SendGridApiResponseTest.php");
    }
}
