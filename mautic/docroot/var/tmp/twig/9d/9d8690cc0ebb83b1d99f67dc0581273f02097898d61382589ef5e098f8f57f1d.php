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

/* @bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/TokenPersistenceTest.php */
class __TwigTemplate_c528d3f27c07021e445a0cc3fd5c66aaec4221c11f248d3a6ff4dc31a23d3b9d extends Template
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

use kamermans\\OAuth2\\Token\\RawToken;
use kamermans\\OAuth2\\Token\\RawTokenFactory;
use kamermans\\OAuth2\\Token\\TokenInterface;
use Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\Token\\IntegrationToken;
use Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\Token\\TokenPersistence;
use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotSetException;
use Mautic\\IntegrationsBundle\\Helper\\IntegrationsHelper;
use Mautic\\PluginBundle\\Entity\\Integration;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class TokenPersistenceTest extends TestCase
{
    /**
     * @var MockObject|IntegrationsHelper
     */
    private \$integrationsHelper;

    /**
     * @var TokenPersistence
     */
    private \$tokenPersistence;

    public function setUp(): void
    {
        \$this->integrationsHelper = \$this->createMock(IntegrationsHelper::class);
        \$this->tokenPersistence   = new TokenPersistence(\$this->integrationsHelper);
        parent::setUp();
    }

    public function testIntegrationNotSetRestoreToken(): void
    {
        \$this->expectException(IntegrationNotSetException::class);

        \$token = \$this->createMock(TokenInterface::class);
        \$this->tokenPersistence->restoreToken(\$token);
    }

    public function testRestoreToken(): void
    {
        \$accessToken  = 'access_token';
        \$refreshToken = 'refresh_token';
        \$expiresAt    = 10;
        \$apiKeys      = [
            'access_token'  => \$accessToken,
            'refresh_token' => \$refreshToken,
            'expires_at'    => \$expiresAt,
        ];

        \$factory      = new RawTokenFactory();
        \$tokenFromApi = \$factory([
            'access_token'  => \$accessToken,
            'refresh_token' => \$refreshToken,
            'expires_at'    => \$expiresAt,
        ]);

        \$integration = \$this->createMock(Integration::class);
        \$integration->expects(\$this->once())
            ->method('getApiKeys')
            ->willReturn(\$apiKeys);

        \$this->tokenPersistence->setIntegration(\$integration);

        \$newToken = \$this->tokenPersistence->restoreToken(\$tokenFromApi);

        \$this->assertSame(\$tokenFromApi->getAccessToken(), \$newToken->getAccessToken());
        \$this->assertSame(\$tokenFromApi->getRefreshToken(), \$newToken->getRefreshToken());
    }

    public function testIntegrationNotSetSaveToken(): void
    {
        \$this->expectException(IntegrationNotSetException::class);

        \$token = \$this->createMock(TokenInterface::class);
        \$this->tokenPersistence->saveToken(\$token);
    }

    public function testSaveToken(): void
    {
        \$oldApiKeys = [
            'access_token' => 'old_access_token',
            'something'    => 'something',
        ];

        \$newApiKeys = [
            'access_token'  => 'access_token',
            'refresh_token' => 'refresh_token',
            'expires_at'    => '0',
        ];

        \$extraData = [
            'instance_url' => 'abc.123.com',
        ];

        \$token       = new IntegrationToken(\$newApiKeys['access_token'], \$newApiKeys['refresh_token'], \$newApiKeys['expires_at'], \$extraData);
        \$integration = \$this->createMock(Integration::class);
        \$newApiKeys  = array_merge(\$oldApiKeys, \$extraData, \$newApiKeys);

        \$integration->expects(\$this->exactly(2))
            ->method('getApiKeys')
            ->willReturnOnConsecutiveCalls(\$oldApiKeys, \$newApiKeys);

        \$integration->expects(\$this->once())
            ->method('setApiKeys')
            ->with(\$newApiKeys);

        \$this->tokenPersistence->setIntegration(\$integration);

        \$this->integrationsHelper->expects(\$this->once())
            ->method('saveIntegrationConfiguration');

        \$this->tokenPersistence->saveToken(\$token);

        \$this->assertTrue(\$this->tokenPersistence->hasToken());
    }

    public function testIntegrationNotSetDeleteToken(): void
    {
        \$this->expectException(IntegrationNotSetException::class);

        \$token = \$this->createMock(TokenInterface::class);
        \$this->tokenPersistence->saveToken(\$token);
    }

    public function testDeleteToken(): void
    {
        \$accessToken  = 'access_token';
        \$refreshToken = 'refresh_token';
        \$expiresAt    = 10;
        \$token        = new RawToken(\$accessToken, \$refreshToken, \$expiresAt);
        \$expected     = [
            'leaveMe' => 'something',
        ];
        \$apiKeys = array_merge(
            [
                'access_token'  => \$accessToken,
                'refresh_token' => \$refreshToken,
                'expires_at'    => \$expiresAt,
            ],
            \$expected
        );

        \$integration = \$this->createMock(Integration::class);
        \$integration->method('getApiKeys')
            ->willReturn(\$apiKeys, \$apiKeys);

        \$this->tokenPersistence->setIntegration(\$integration);

        \$this->integrationsHelper->expects(\$this->exactly(2))
            ->method('saveIntegrationConfiguration');
        \$this->tokenPersistence->saveToken(\$token);

        \$this->assertTrue(\$this->tokenPersistence->hasToken());

        \$this->tokenPersistence->deleteToken();

        \$this->assertFalse(\$this->tokenPersistence->hasToken());
    }

    public function testHasToken(): void
    {
        \$accessToken  = 'access_token';
        \$refreshToken = 'refresh_token';
        \$expiresAt    = 10;

        \$apiKeys = [
            'access_token'  => \$accessToken,
            'refresh_token' => \$refreshToken,
            'expires_at'    => \$expiresAt,
        ];

        \$integration = \$this->createMock(Integration::class);
        \$integration->method('getApiKeys')
            ->willReturnOnConsecutiveCalls(null, \$apiKeys, ['access_token' => \$accessToken]);

        \$this->tokenPersistence->setIntegration(\$integration);
        \$this->assertFalse(\$this->tokenPersistence->hasToken());
        \$token = new RawToken(\$accessToken, \$refreshToken, \$expiresAt);
        \$this->tokenPersistence->saveToken(\$token);
        \$this->assertTrue(\$this->tokenPersistence->hasToken());

        \$token = new RawToken();
        \$this->tokenPersistence->saveToken(\$token);
        \$this->assertFalse(\$this->tokenPersistence->hasToken());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/TokenPersistenceTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/TokenPersistenceTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/TokenPersistenceTest.php");
    }
}
