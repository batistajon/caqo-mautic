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

/* @bundles/SmsBundle/Tests/Integration/Twilio/ConfigurationTest.php */
class __TwigTemplate_385acd620c23354584cf4ffa6171c9d040695052c3954396615c87dc70771f49 extends Template
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

use Mautic\\PluginBundle\\Entity\\Integration;
use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Mautic\\PluginBundle\\Integration\\AbstractIntegration;
use Mautic\\SmsBundle\\Integration\\Twilio\\Configuration;
use Twilio\\Exceptions\\ConfigurationException;

class ConfigurationTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var IntegrationHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$integrationHelper;

    /**
     * @var AbstractIntegration|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$integrationObject;

    protected function setUp(): void
    {
        \$this->integrationHelper = \$this->createMock(IntegrationHelper::class);

        \$integrationSettings = new Integration();
        \$integrationSettings->setIsPublished(true);
        \$integrationSettings->setFeatureSettings(['sending_phone_number' => '123']);
        \$this->integrationObject = \$this->createMock(AbstractIntegration::class);
        \$this->integrationObject->method('getIntegrationSettings')
            ->willReturn(\$integrationSettings);

        \$this->integrationHelper->method('getIntegrationObject')
            ->with('Twilio')
            ->willReturn(\$this->integrationObject);
    }

    public function testGetSendingNumber()
    {
        \$this->integrationObject->method('getDecryptedApiKeys')
            ->willReturn(
                [
                    'username' => 'username',
                    'password' => 'password',
                ]
            );
        \$this->assertEquals('123', \$this->getConfiguration()->getSendingNumber());
    }

    public function testGetAccountSid()
    {
        \$this->integrationObject->method('getDecryptedApiKeys')
            ->willReturn(
                [
                    'username' => 'username',
                    'password' => 'password',
                ]
            );
        \$this->assertEquals('username', \$this->getConfiguration()->getAccountSid());
    }

    public function testGetAuthToken()
    {
        \$this->integrationObject->method('getDecryptedApiKeys')
            ->willReturn(
                [
                    'username' => 'username',
                    'password' => 'password',
                ]
            );
        \$this->assertEquals('password', \$this->getConfiguration()->getAuthToken());
    }

    public function testConfigurationExceptionThrownWithoutSendingNumber()
    {
        \$this->expectException(ConfigurationException::class);

        \$this->integrationObject->getIntegrationSettings()->setFeatureSettings(['sending_phone_number' => '']);

        \$this->getConfiguration()->getSendingNumber();
    }

    public function testConfigurationExceptionThrownWithoutUsername()
    {
        \$this->expectException(ConfigurationException::class);
        \$this->integrationObject->method('getDecryptedApiKeys')
            ->willReturn(
                [
                    'username' => '',
                    'password' => 'password',
                ]
            );
        \$this->getConfiguration()->getSendingNumber();
    }

    public function testConfigurationExceptionThrownWithoutPassword()
    {
        \$this->expectException(ConfigurationException::class);
        \$this->integrationObject->method('getDecryptedApiKeys')
            ->willReturn(
                [
                    'username' => 'username',
                    'password' => '',
                ]
            );
        \$this->getConfiguration()->getSendingNumber();
    }

    /**
     * @return Configuration
     */
    private function getConfiguration()
    {
        return new Configuration(\$this->integrationHelper);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Tests/Integration/Twilio/ConfigurationTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/Integration/Twilio/ConfigurationTest.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Tests/Integration/Twilio/ConfigurationTest.php");
    }
}
