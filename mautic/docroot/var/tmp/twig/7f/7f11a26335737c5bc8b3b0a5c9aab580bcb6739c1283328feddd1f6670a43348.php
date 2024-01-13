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

/* @bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/BasicAuth/HttpFactoryTest.php */
class __TwigTemplate_13b2031643f5fd472feda6cb6074918092d08c53780b878dac72f222b19b4a63 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Auth\\Provider\\BasicAuth;

use GuzzleHttp\\Exception\\ConnectException;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\BasicAuth\\CredentialsInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\BasicAuth\\HttpFactory;
use Mautic\\IntegrationsBundle\\Exception\\PluginNotConfiguredException;
use PHPUnit\\Framework\\TestCase;

class HttpFactoryTest extends TestCase
{
    public function testType(): void
    {
        \$this->assertEquals('basic_auth', (new HttpFactory())->getAuthType());
    }

    public function testMissingUsernameThrowsException(): void
    {
        \$this->expectException(PluginNotConfiguredException::class);

        \$credentials = new class() implements CredentialsInterface {
            public function getUsername(): ?string
            {
                return '';
            }

            public function getPassword(): ?string
            {
                return '123';
            }
        };

        (new HttpFactory())->getClient(\$credentials);
    }

    public function testMissingPasswordThrowsException(): void
    {
        \$this->expectException(PluginNotConfiguredException::class);

        \$credentials = new class() implements CredentialsInterface {
            public function getUsername(): ?string
            {
                return '123';
            }

            public function getPassword(): ?string
            {
                return '';
            }
        };

        (new HttpFactory())->getClient(\$credentials);
    }

    public function testInstantiatedClientIsReturned(): void
    {
        \$credentials = new class() implements CredentialsInterface {
            public function getUsername(): ?string
            {
                return 'foo';
            }

            public function getPassword(): ?string
            {
                return 'bar';
            }
        };

        \$factory = new HttpFactory();

        \$client1 = \$factory->getClient(\$credentials);
        \$client2 = \$factory->getClient(\$credentials);
        \$this->assertTrue(\$client1 === \$client2);

        \$credentials2 = new class() implements CredentialsInterface {
            public function getUsername(): ?string
            {
                return 'bar';
            }

            public function getPassword(): ?string
            {
                return 'foo';
            }
        };

        \$client3 = \$factory->getClient(\$credentials2);
        \$this->assertFalse(\$client1 === \$client3);
    }

    public function testHeaderIsSet(): void
    {
        \$credentials = new class() implements CredentialsInterface {
            public function getUsername(): ?string
            {
                return 'foo';
            }

            public function getPassword(): ?string
            {
                return 'bar';
            }
        };

        \$factory = new HttpFactory();

        \$client  = \$factory->getClient(\$credentials);

        try {
            // Triggering an exception so we can extract the request
            \$client->request('get', 'foobar');
        } catch (ConnectException \$exception) {
            \$headers = \$exception->getRequest()->getHeaders();
            \$this->assertArrayHasKey('Authorization', \$headers);

            \$this->assertEquals('Basic '.base64_encode('foo:bar'), \$headers['Authorization'][0]);
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/BasicAuth/HttpFactoryTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/BasicAuth/HttpFactoryTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/BasicAuth/HttpFactoryTest.php");
    }
}
