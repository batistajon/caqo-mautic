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

/* @bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/ApiKey/HttpFactoryTest.php */
class __TwigTemplate_e79619d92682f6f76b7d002024f1d73cd68dd1079f4bfd49cbef73e793b384c4 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Auth\\Provider\\ApiKey;

use GuzzleHttp\\Exception\\ConnectException;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\ApiKey\\Credentials\\HeaderCredentialsInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\ApiKey\\Credentials\\ParameterCredentialsInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\ApiKey\\HttpFactory;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthCredentialsInterface;
use Mautic\\IntegrationsBundle\\Exception\\InvalidCredentialsException;
use Mautic\\IntegrationsBundle\\Exception\\PluginNotConfiguredException;
use PHPUnit\\Framework\\TestCase;

class HttpFactoryTest extends TestCase
{
    public function testType(): void
    {
        \$this->assertEquals('api_key', (new HttpFactory())->getAuthType());
    }

    public function testInvalidCredentialsThrowsException(): void
    {
        \$this->expectException(InvalidCredentialsException::class);

        \$credentials = new class() implements AuthCredentialsInterface {
        };

        (new HttpFactory())->getClient(\$credentials);
    }

    public function testMissingCredentialsThrowsException(): void
    {
        \$this->expectException(PluginNotConfiguredException::class);

        \$credentials = new class() implements HeaderCredentialsInterface {
            public function getApiKey(): ?string
            {
                return '';
            }

            public function getKeyName(): string
            {
                return '';
            }
        };

        (new HttpFactory())->getClient(\$credentials);
    }

    public function testInstantiatedClientIsReturned(): void
    {
        \$credentials = new class() implements HeaderCredentialsInterface {
            public function getApiKey(): ?string
            {
                return 'abc';
            }

            public function getKeyName(): string
            {
                return '123';
            }
        };

        \$factory = new HttpFactory();

        \$client1 = \$factory->getClient(\$credentials);
        \$client2 = \$factory->getClient(\$credentials);
        \$this->assertTrue(\$client1 === \$client2);

        \$credential2 = new class() implements HeaderCredentialsInterface {
            public function getApiKey(): ?string
            {
                return '123';
            }

            public function getKeyName(): string
            {
                return 'abc';
            }
        };

        \$client3 = \$factory->getClient(\$credential2);
        \$this->assertFalse(\$client1 === \$client3);
    }

    public function testHeaderCredentialsSetsHeader(): void
    {
        \$credentials = new class() implements HeaderCredentialsInterface {
            public function getApiKey(): ?string
            {
                return '123';
            }

            public function getKeyName(): string
            {
                return 'abc';
            }
        };

        \$factory = new HttpFactory();

        \$client  = \$factory->getClient(\$credentials);
        \$headers = \$client->getConfig('headers');

        \$this->assertArrayHasKey('abc', \$headers);
        \$this->assertEquals('123', \$headers['abc']);
    }

    public function testParameterCredentialsAppendsToken(): void
    {
        \$credentials = new class() implements ParameterCredentialsInterface {
            public function getApiKey(): ?string
            {
                return '123';
            }

            public function getKeyName(): string
            {
                return 'abc';
            }
        };

        \$factory = new HttpFactory();
        \$client  = \$factory->getClient(\$credentials);

        try {
            // Triggering an exception so we can extract the request
            \$client->request('get', 'foobar');
        } catch (ConnectException \$exception) {
            \$query = \$exception->getRequest()->getUri()->getQuery();
            \$this->assertEquals('abc=123', \$query);
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/ApiKey/HttpFactoryTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/ApiKey/HttpFactoryTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/ApiKey/HttpFactoryTest.php");
    }
}
