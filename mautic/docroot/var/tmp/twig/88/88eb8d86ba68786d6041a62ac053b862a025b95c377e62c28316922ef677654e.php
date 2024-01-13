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

/* @bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/TokenPersistenceFactoryTest.php */
class __TwigTemplate_703a9a5a52d03084cec1f3695616195c509e00e8f6c4e7dc8bc538faa5bbd978 extends Template
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

use Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\Token\\TokenPersistenceFactory;
use Mautic\\IntegrationsBundle\\Helper\\IntegrationsHelper;
use Mautic\\PluginBundle\\Entity\\Integration;
use PHPUnit\\Framework\\TestCase;

class TokenPersistenceFactoryTest extends TestCase
{
    private \$integrationsHelper;
    private \$integration;

    public function setup(): void
    {
        \$this->integrationsHelper = \$this->createMock(IntegrationsHelper::class);
        \$this->integration        = \$this->createMock(Integration::class);
    }

    public function testCreate(): void
    {
        \$accessToken  = 'access_token';
        \$refreshToken = 'refresh_token';
        \$expiresAt    = 10;
        \$apiKeys      = [
            'access_token'  => \$accessToken,
            'refresh_token' => \$refreshToken,
            'expires_at'    => \$expiresAt,
        ];

        \$this->integration->expects(\$this->any())
            ->method('getApiKeys')
            ->willReturn(\$apiKeys);

        \$factory          = new TokenPersistenceFactory(\$this->integrationsHelper);
        \$tokenPersistence = \$factory->create(\$this->integration);
        \$this->assertTrue(\$tokenPersistence->hasToken());
    }

    public function testCreateWithInvalidToken(): void
    {
        \$accessToken  = null;
        \$refreshToken = 'refresh_token';
        \$expiresAt    = 10;
        \$apiKeys      = [
            'access_token'  => \$accessToken,
            'refresh_token' => \$refreshToken,
            'expires_at'    => \$expiresAt,
        ];

        \$this->integration->expects(\$this->any())
            ->method('getApiKeys')
            ->willReturn(\$apiKeys);

        \$factory          = new TokenPersistenceFactory(\$this->integrationsHelper);
        \$tokenPersistence = \$factory->create(\$this->integration);
        \$this->assertFalse(\$tokenPersistence->hasToken());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/TokenPersistenceFactoryTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/TokenPersistenceFactoryTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/TokenPersistenceFactoryTest.php");
    }
}
