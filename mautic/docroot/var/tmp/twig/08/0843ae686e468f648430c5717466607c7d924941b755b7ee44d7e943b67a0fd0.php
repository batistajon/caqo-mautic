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

/* @bundles/SmsBundle/Tests/Sms/TransportChainTest.php */
class __TwigTemplate_d7833dee7d16c4e334a1e143a4adec7fc1ebe3fdd5c03d25894b1eb57e607cff extends Template
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

namespace Mautic\\SmsBundle\\Tests\\Sms;

use Exception;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\SmsBundle\\Integration\\Twilio\\TwilioTransport;
use Mautic\\SmsBundle\\Sms\\TransportChain;
use Mautic\\SmsBundle\\Sms\\TransportInterface;
use PHPUnit\\Framework\\MockObject\\MockObject;
use ReflectionClass;

class TransportChainTest extends MauticMysqlTestCase
{
    /**
     * @var TransportChain|MockObject
     */
    private \$transportChain;

    /**
     * @var TransportInterface|MockObject
     */
    private \$twilioTransport;

    /**
     * Call protected/private method of a class.
     *
     * @param object &\$object    Instantiated object that we will run method on
     * @param string \$methodName Method name to call
     * @param array  \$parameters array of parameters to pass into method
     *
     * @throws \\ReflectionException
     *
     * @return mixed method return
     */
    public function invokeMethod(&\$object, \$methodName, array \$parameters = [])
    {
        \$reflection = new ReflectionClass(get_class(\$object));
        \$method     = \$reflection->getMethod(\$methodName);
        \$method->setAccessible(true);

        return \$method->invokeArgs(\$object, \$parameters);
    }

    protected function setUp(): void
    {
        parent::setUp();

        \$this->transportChain = new TransportChain(
            'mautic.test.twilio.mock',
            self::\$container->get('mautic.helper.integration')
        );

        \$this->twilioTransport = \$this->createMock(TwilioTransport::class);

        \$this->twilioTransport
            ->method('sendSMS')
            ->will(\$this->returnValue('lol'));
    }

    public function testAddTransport()
    {
        \$count = count(\$this->transportChain->getTransports());

        \$this->transportChain->addTransport('mautic.transport.test', self::\$container->get('mautic.sms.twilio.transport'), 'mautic.transport.test', 'Twilio');

        \$this->assertCount(\$count + 1, \$this->transportChain->getTransports());
    }

    public function testSendSms()
    {
        \$this->testAddTransport();

        \$this->transportChain->addTransport('mautic.test.twilio.mock', \$this->twilioTransport, 'mautic.test.twilio.mock', 'Twilio');

        \$lead = new Lead();
        \$lead->setMobile('+123456789');

        try {
            \$this->transportChain->sendSms(\$lead, 'Yeah');
        } catch (Exception \$e) {
            \$message = \$e->getMessage();
            \$this->assertEquals('Primary SMS transport is not enabled', \$message);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Tests/Sms/TransportChainTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/Sms/TransportChainTest.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Tests/Sms/TransportChainTest.php");
    }
}
