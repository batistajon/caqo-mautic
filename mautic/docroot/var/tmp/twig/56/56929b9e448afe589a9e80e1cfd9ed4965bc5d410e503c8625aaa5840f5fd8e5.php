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

/* @bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenFactoryTest.php */
class __TwigTemplate_4c372ae05bb40d0623b6af91c8ccf0bdc912695ab8034c6b52ba8d1328bfe457 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Auth\\Support\\Oauth2\\Token;

use Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\Token\\IntegrationToken;
use Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\Token\\IntegrationTokenFactory;
use PHPUnit\\Framework\\TestCase;

class IntegrationTokenFactoryTest extends TestCase
{
    public function testTokenGeneratedWithExpires(): void
    {
        \$factory = new IntegrationTokenFactory();
        \$data    = [
            'access_token'  => '123',
            'refresh_token' => '456',
            'expires_in'    => 10,
        ];

        \$token = \$factory(\$data);

        \$this->assertEquals(\$data['access_token'], \$token->getAccessToken());
        \$this->assertEquals(\$data['refresh_token'], \$token->getRefreshToken());
        \$this->assertFalse(\$token->isExpired());
    }

    public function testTokenGeneratedWithExpiresAt(): void
    {
        \$factory = new IntegrationTokenFactory();
        \$data    = [
            'access_token'  => '123',
            'refresh_token' => '456',
            'expires_at'    => 10,
        ];

        \$token = \$factory(\$data);

        \$this->assertEquals(\$data['access_token'], \$token->getAccessToken());
        \$this->assertEquals(\$data['refresh_token'], \$token->getRefreshToken());
        \$this->assertFalse(\$token->isExpired());
    }

    public function testTokenGeneratedWithPreviousRefreshToken(): void
    {
        \$factory = new IntegrationTokenFactory();
        \$data    = [
            'access_token' => '123',
            'expires_at'   => 10,
        ];

        \$previousToken = new IntegrationToken('789', '456');
        \$token         = \$factory(\$data, \$previousToken);

        \$this->assertEquals(\$data['access_token'], \$token->getAccessToken());
        \$this->assertEquals(\$previousToken->getRefreshToken(), \$token->getRefreshToken());
        \$this->assertFalse(\$token->isExpired());
    }

    public function testTokenGeneratedWithExtraData(): void
    {
        \$factory = new IntegrationTokenFactory(['foo']);
        \$data    = [
            'access_token'  => '123',
            'refresh_token' => '456',
            'expires_at'    => 10,
            'foo'           => 'bar',
            'bar'           => 'foo',
        ];

        \$token = \$factory(\$data);

        \$this->assertEquals(\$data['access_token'], \$token->getAccessToken());
        \$this->assertEquals(\$data['refresh_token'], \$token->getRefreshToken());
        \$this->assertFalse(\$token->isExpired());
        \$this->assertEquals(['foo' => 'bar'], \$token->getExtraData());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenFactoryTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenFactoryTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenFactoryTest.php");
    }
}
