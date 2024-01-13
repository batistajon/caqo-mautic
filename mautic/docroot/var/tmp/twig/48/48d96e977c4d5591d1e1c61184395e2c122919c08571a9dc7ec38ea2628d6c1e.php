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

/* @bundles/WebhookBundle/Tests/Http/ClientTest.php */
class __TwigTemplate_6127ef35929a2cdb3e0b50780aaf81b369996015cd771a22aa4b9fc9b0aac9e6 extends Template
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

namespace Mautic\\WebhookBundle\\Tests\\Http;

use GuzzleHttp\\Psr7\\Request;
use GuzzleHttp\\Psr7\\Response;
use Http\\Mock\\Client as GuzzleClient;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\WebhookBundle\\Http\\Client;
use PHPUnit\\Framework\\TestCase;

class ClientTest extends TestCase
{
    public function testPost()
    {
        \$method  = 'POST';
        \$url     = 'url';
        \$payload = ['payload'];
        \$siteUrl = 'siteUrl';
        \$headers = [
            'Content-Type'      => 'application/json',
            'X-Origin-Base-URL' => \$siteUrl,
        ];

        \$response = new Response(); // here too

        \$parametersMock     = \$this->createMock(CoreParametersHelper::class);
        \$httpClientMock     = \$this->createMock(GuzzleClient::class);

        \$parametersMock->expects(\$this->once())
            ->method('get')
            ->with('site_url')
            ->willReturn(\$siteUrl);

        \$httpClientMock->expects(\$this->once())
            ->method('sendRequest')
            ->with(\$this->callback(function (Request \$request) use (\$method, \$url, \$headers, \$payload) {
                \$this->assertSame(\$method, \$request->getMethod());
                \$this->assertSame(\$url, \$request->getUri()->getPath());

                foreach (\$headers as \$headerName => \$headerValue) {
                    \$header = \$request->getHeader(\$headerName);
                    \$this->assertSame(\$headerValue, \$header[0]);
                }

                \$this->assertSame(json_encode(\$payload), (string) \$request->getBody());

                return true;
            }))
            ->willReturn(\$response);

        \$client = new Client(\$parametersMock, \$httpClientMock);

        \$this->assertEquals(\$response, \$client->post(\$url, \$payload));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Tests/Http/ClientTest.php";
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
        return new Source("", "@bundles/WebhookBundle/Tests/Http/ClientTest.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Tests/Http/ClientTest.php");
    }
}
