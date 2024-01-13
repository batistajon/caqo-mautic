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

/* @bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/Oauth1aTwoLegged/HttpFactoryTest.php */
class __TwigTemplate_eb48188824774aab42e2558b67cbc163e355a32d22701ce2dee236a29562c6b9 extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Auth\\Provider\\Oauth1aTwoLegged;

use Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth1aTwoLegged\\CredentialsInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth1aTwoLegged\\HttpFactory;
use Mautic\\IntegrationsBundle\\Exception\\PluginNotConfiguredException;
use PHPUnit\\Framework\\TestCase;

class HttpFactoryTest extends TestCase
{
    public function testType(): void
    {
        \$this->assertEquals('oauth1a_two_legged', (new HttpFactory())->getAuthType());
    }

    public function testGetClientWithEmptyCredentials(): void
    {
        \$credentials = \$this->createMock(CredentialsInterface::class);
        \$httpFactory = new HttpFactory();
        \$this->expectException(PluginNotConfiguredException::class);
        \$httpFactory->getClient(\$credentials);
    }

    public function testGetClientWithFullCredentials(): void
    {
        \$credentials = \$this->createMock(CredentialsInterface::class);
        \$credentials->method('getConsumerKey')->willReturn('ConsumerKeyValue');
        \$credentials->method('getConsumerSecret')->willReturn('ConsumerSecretValue');
        \$credentials->method('getToken')->willReturn('TokenValue');
        \$credentials->method('getTokenSecret')->willReturn('TokenSecretValue');
        \$credentials->method('getAuthUrl')->willReturn('AuthUrlValue');
        \$httpFactory = new HttpFactory();
        \$client      = \$httpFactory->getClient(\$credentials);
        \$config      = \$client->getConfig();

        \$this->assertSame('oauth', \$config['auth']);
        \$this->assertSame('AuthUrlValue', \$config['base_uri']->getPath());
        \$this->assertTrue(\$config['handler']->hasHandler());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/Oauth1aTwoLegged/HttpFactoryTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/Oauth1aTwoLegged/HttpFactoryTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/Oauth1aTwoLegged/HttpFactoryTest.php");
    }
}
