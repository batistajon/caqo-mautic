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

/* @bundles/SmsBundle/Tests/Integration/Twilio/TwilioCallbackTest.php */
class __TwigTemplate_6e98632d902b9d143f0ab6488b11381118b4dcb26a8b3e38949fb1b5716cf3f2 extends Template
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

namespace Mautic\\SmsBundle\\Tests\\Integration\\Twilio;

use Mautic\\SmsBundle\\Helper\\ContactHelper;
use Mautic\\SmsBundle\\Integration\\Twilio\\Configuration;
use Mautic\\SmsBundle\\Integration\\Twilio\\TwilioCallback;
use Symfony\\Component\\HttpFoundation\\ParameterBag;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;

class TwilioCallbackTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var ContactHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$contactHelper;

    /**
     * @var Configuration|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$configuration;

    protected function setUp(): void
    {
        \$this->contactHelper = \$this->createMock(ContactHelper::class);
        \$this->configuration = \$this->createMock(Configuration::class);
        \$this->configuration->method('getAccountSid')
            ->willReturn('123');
    }

    public function testMissingFromThrowsBadRequestException()
    {
        \$this->expectException(BadRequestHttpException::class);

        \$parameterBag     = \$this->createMock(ParameterBag::class);
        \$request          = \$this->createMock(Request::class);
        \$request->request = \$parameterBag;

        \$parameterBag->method('get')
            ->withConsecutive(['AccountSid'], ['From'])
            ->willReturn('123', '');

        \$this->getCallback()->getMessage(\$request);
    }

    public function testMissingBodyThrowsBadRequestException()
    {
        \$this->expectException(BadRequestHttpException::class);

        \$parameterBag     = \$this->createMock(ParameterBag::class);
        \$request          = \$this->createMock(Request::class);
        \$request->request = \$parameterBag;

        \$parameterBag->method('get')
            ->withConsecutive(['AccountSid'], ['From'], ['Body'])
            ->willReturn('123', '321', '');

        \$this->getCallback()->getMessage(\$request);
    }

    public function testMismatchedAccountSidThrowsBadRequestException()
    {
        \$this->expectException(BadRequestHttpException::class);

        \$parameterBag     = \$this->createMock(ParameterBag::class);
        \$request          = \$this->createMock(Request::class);
        \$request->request = \$parameterBag;

        \$parameterBag->method('get')
            ->withConsecutive(['AccountSid'])
            ->willReturn('321');

        \$this->getCallback()->getMessage(\$request);
    }

    public function testMessageIsReturned()
    {
        \$parameterBag = \$this->createMock(ParameterBag::class);
        \$request      = \$this->createMock(Request::class);
        \$request->method('get')
            ->willReturn('Hello');
        \$request->request = \$parameterBag;

        \$parameterBag->method('get')
            ->withConsecutive(['AccountSid'], ['From'], ['Body'])
            ->willReturn('123', '321', 'Hello');

        \$this->assertEquals('Hello', \$this->getCallback()->getMessage(\$request));
    }

    /**
     * @return TwilioCallback
     */
    private function getCallback()
    {
        return new TwilioCallback(\$this->contactHelper, \$this->configuration);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Tests/Integration/Twilio/TwilioCallbackTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/Integration/Twilio/TwilioCallbackTest.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Tests/Integration/Twilio/TwilioCallbackTest.php");
    }
}
