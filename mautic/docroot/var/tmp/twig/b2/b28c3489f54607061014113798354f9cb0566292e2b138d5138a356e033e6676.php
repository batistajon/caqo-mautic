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

/* @bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/Oauth2ThreeLegged/HttpFactoryTest.php */
class __TwigTemplate_86f54bd6653f114311c83f4b2ab00bf93ddd00f4c2ac649542c0a3e47d4ad665 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Auth\\Provider\\Oauth2ThreeLegged;

use GuzzleHttp\\ClientInterface;
use kamermans\\OAuth2\\OAuth2Middleware;
use kamermans\\OAuth2\\Persistence\\TokenPersistenceInterface as KamermansTokenPersistenceInterface;
use kamermans\\OAuth2\\Signer\\AccessToken\\SignerInterface as AccessTokenSigner;
use kamermans\\OAuth2\\Signer\\ClientCredentials\\SignerInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth2ThreeLegged\\Credentials\\CodeInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth2ThreeLegged\\Credentials\\CredentialsInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth2ThreeLegged\\Credentials\\RedirectUriInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth2ThreeLegged\\Credentials\\ScopeInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth2ThreeLegged\\HttpFactory;
use Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\ConfigAccess\\ConfigCredentialsSignerInterface;
use Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\ConfigAccess\\ConfigTokenPersistenceInterface;
use Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\ConfigAccess\\ConfigTokenSignerInterface;
use Mautic\\IntegrationsBundle\\Exception\\PluginNotConfiguredException;
use PHPUnit\\Framework\\TestCase;

class HttpFactoryTest extends TestCase
{
    public function testType(): void
    {
        \$this->assertEquals('oauth2_three_legged', (new HttpFactory())->getAuthType());
    }

    public function testMissingAuthorizationUrlThrowsException(): void
    {
        \$this->expectException(PluginNotConfiguredException::class);

        \$credentials = new class() implements CredentialsInterface {
            public function getAuthorizationUrl(): string
            {
                return '';
            }

            public function getTokenUrl(): string
            {
                return '';
            }

            public function getClientId(): ?string
            {
                return '';
            }

            public function getClientSecret(): ?string
            {
                return '';
            }
        };

        (new HttpFactory())->getClient(\$credentials);
    }

    public function testMissingTokenUrlThrowsException(): void
    {
        \$this->expectException(PluginNotConfiguredException::class);

        \$credentials = new class() implements CredentialsInterface {
            public function getAuthorizationUrl(): string
            {
                return 'http://auth.url';
            }

            public function getTokenUrl(): string
            {
                return '';
            }

            public function getClientId(): ?string
            {
                return '';
            }

            public function getClientSecret(): ?string
            {
                return '';
            }
        };

        (new HttpFactory())->getClient(\$credentials);
    }

    public function testMissingClientIdThrowsException(): void
    {
        \$this->expectException(PluginNotConfiguredException::class);

        \$credentials = new class() implements CredentialsInterface {
            public function getAuthorizationUrl(): string
            {
                return 'http://auth.url';
            }

            public function getTokenUrl(): string
            {
                return 'http://token.url';
            }

            public function getClientId(): ?string
            {
                return '';
            }

            public function getClientSecret(): ?string
            {
                return '';
            }
        };

        (new HttpFactory())->getClient(\$credentials);
    }

    public function testMissingClientSecretThrowsException(): void
    {
        \$this->expectException(PluginNotConfiguredException::class);

        \$credentials = new class() implements CredentialsInterface {
            public function getAuthorizationUrl(): string
            {
                return 'http://auth.url';
            }

            public function getTokenUrl(): string
            {
                return 'http://token.url';
            }

            public function getClientId(): ?string
            {
                return 'foo';
            }

            public function getClientSecret(): ?string
            {
                return '';
            }
        };

        (new HttpFactory())->getClient(\$credentials);
    }

    public function testInstantiatedClientIsReturned(): void
    {
        \$credentials = new class() implements CredentialsInterface {
            public function getAuthorizationUrl(): string
            {
                return 'http://auth.url';
            }

            public function getTokenUrl(): string
            {
                return 'http://token.url';
            }

            public function getClientId(): ?string
            {
                return 'foo';
            }

            public function getClientSecret(): ?string
            {
                return 'bar';
            }
        };

        \$factory = new HttpFactory();

        \$client1 = \$factory->getClient(\$credentials);
        \$client2 = \$factory->getClient(\$credentials);
        \$this->assertTrue(\$client1 === \$client2);

        \$credentials2 = new class() implements CredentialsInterface {
            public function getAuthorizationUrl(): string
            {
                return 'http://auth.url';
            }

            public function getTokenUrl(): string
            {
                return 'http://token.url';
            }

            public function getClientId(): ?string
            {
                return 'bar';
            }

            public function getClientSecret(): ?string
            {
                return 'foo';
            }
        };

        \$client3 = \$factory->getClient(\$credentials2);
        \$this->assertFalse(\$client1 === \$client3);
    }

    public function testReAuthClientConfiguration(): void
    {
        \$credentials = \$this->getCredentials();

        \$client = (new HttpFactory())->getClient(\$credentials);

        \$middleware = \$this->extractMiddleware(\$client);

        \$reflectedMiddleware = new \\ReflectionClass(\$middleware);
        \$grantType           = \$this->getProperty(\$reflectedMiddleware, \$middleware, 'grantType');

        \$reflectedGrantType = new \\ReflectionClass(\$grantType);
        \$reauthConfig       = \$this->getProperty(\$reflectedGrantType, \$grantType, 'config');

        \$expectedConfig = [
            'client_id'     => \$credentials->getClientId(),
            'client_secret' => \$credentials->getClientSecret(),
            'code'          => \$credentials->getCode(),
            'redirect_uri'  => \$credentials->getRedirectUri(),
            'scope'         => \$credentials->getScope(),
        ];

        \$this->assertEquals(\$expectedConfig, \$reauthConfig->toArray());
    }

    public function testClientConfiguration(): void
    {
        \$credentials               = \$this->getCredentials();
        \$signerInterface           = \$this->createMock(SignerInterface::class);
        \$kamermansTokenPersistence = \$this->createMock(KamermansTokenPersistenceInterface::class);
        \$accessTokenSigner         = \$this->createMock(AccessTokenSigner::class);

        \$clientCredentialSigner = \$this->createMock(ConfigCredentialsSignerInterface::class);
        \$clientCredentialSigner->expects(\$this->once())
            ->method('getCredentialsSigner')
            ->willReturn(\$signerInterface);

        \$client              = (new HttpFactory())->getClient(\$credentials, \$clientCredentialSigner);
        \$middleware          = \$this->extractMiddleware(\$client);
        \$reflectedMiddleware = new \\ReflectionClass(\$middleware);
        \$this->assertTrue(\$this->getProperty(\$reflectedMiddleware, \$middleware, 'clientCredentialsSigner') === \$signerInterface);

        \$tokenPersistence = \$this->createMock(ConfigTokenPersistenceInterface::class);
        \$tokenPersistence->expects(\$this->once())
            ->method('getTokenPersistence')
            ->willReturn(\$kamermansTokenPersistence);

        \$client              = (new HttpFactory())->getClient(\$credentials, \$tokenPersistence);
        \$middleware          = \$this->extractMiddleware(\$client);
        \$reflectedMiddleware = new \\ReflectionClass(\$middleware);
        \$this->assertTrue(\$this->getProperty(\$reflectedMiddleware, \$middleware, 'tokenPersistence') === \$kamermansTokenPersistence);

        \$tokenPersistence = \$this->createMock(ConfigTokenSignerInterface::class);
        \$tokenPersistence->expects(\$this->once())
            ->method('getTokenSigner')
            ->willReturn(\$accessTokenSigner);

        \$client              = (new HttpFactory())->getClient(\$credentials, \$tokenPersistence);
        \$middleware          = \$this->extractMiddleware(\$client);
        \$reflectedMiddleware = new \\ReflectionClass(\$middleware);
        \$this->assertTrue(\$this->getProperty(\$reflectedMiddleware, \$middleware, 'accessTokenSigner') === \$accessTokenSigner);
    }

    /**
     * @throws \\ReflectionException
     */
    private function extractMiddleware(ClientInterface \$client): OAuth2Middleware
    {
        \$handler = \$client->getConfig()['handler'];

        \$reflection = new \\ReflectionClass(\$handler);
        \$property   = \$reflection->getProperty('stack');
        \$property->setAccessible(true);

        \$stack = \$property->getValue(\$handler);

        /** @var OAuth2Middleware \$oauthMiddleware */
        \$oauthMiddleware = array_pop(\$stack);

        return \$oauthMiddleware[0];
    }

    private function getProperty(\\ReflectionClass \$reflection, \$object, string \$name)
    {
        \$property = \$reflection->getProperty(\$name);
        \$property->setAccessible(true);

        return \$property->getValue(\$object);
    }

    /**
     * @return CredentialsInterface|CodeInterface|RedirectUriInterface|ScopeInterface
     */
    private function getCredentials(): CredentialsInterface
    {
        return new class() implements CredentialsInterface, CodeInterface, RedirectUriInterface, ScopeInterface {
            public function getAuthorizationUrl(): string
            {
                return 'http://auth.url';
            }

            public function getTokenUrl(): string
            {
                return 'http://token.url';
            }

            public function getClientId(): ?string
            {
                return 'bar';
            }

            public function getClientSecret(): ?string
            {
                return 'foo';
            }

            public function getCode(): ?string
            {
                return 'auth_code';
            }

            public function getRedirectUri(): string
            {
                return 'http://redirect.url';
            }

            public function getScope(): ?string
            {
                return 'scope';
            }
        };
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/Oauth2ThreeLegged/HttpFactoryTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/Oauth2ThreeLegged/HttpFactoryTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/Oauth2ThreeLegged/HttpFactoryTest.php");
    }
}
