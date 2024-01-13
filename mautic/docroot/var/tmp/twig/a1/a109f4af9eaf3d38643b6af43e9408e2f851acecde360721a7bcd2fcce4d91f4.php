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

/* @bundles/CoreBundle/Tests/Command/PushTransifexCommandFunctionalTest.php */
class __TwigTemplate_b381a588784a2f6f2d7e441bea671f5e24f5ddae2798a11ed82f8821de6e8f18 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Command;

use GuzzleHttp\\Handler\\MockHandler;
use GuzzleHttp\\Psr7\\Response;
use Mautic\\CoreBundle\\Command\\PushTransifexCommand;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Psr\\Http\\Message\\RequestInterface;
use Symfony\\Component\\HttpFoundation\\Response as SymfonyResponse;

class PushTransifexCommandFunctionalTest extends MauticMysqlTestCase
{
    protected function setUp(): void
    {
        \$this->configParams['transifex_api_token'] = 'some_api_token';

        parent::setUp();
    }

    public function testPullCommand(): void
    {
        \$handlerStack = self::\$container->get('mautic.http.client.mock_handler');
        \\assert(\$handlerStack instanceof MockHandler);

        // One resource is going to be found in the Transifex project:
        \$handlerStack->append(
            function (RequestInterface \$request) {
                Assert::assertSame('GET', \$request->getMethod());
                Assert::assertSame('https://rest.api.transifex.com/resources?filter%5Bproject%5D=o%3Amautic%3Ap%3Amautic', \$request->getUri()->__toString());

                return new Response(SymfonyResponse::HTTP_OK, [], file_get_contents(__DIR__.'/../Fixtures/Transifex/resources.json'));
            }
        );

        // The first resource does not exist and must be created
        \$handlerStack->append(
            function (RequestInterface \$request) {
                \$body = json_decode(\$request->getBody()->__toString(), true);
                Assert::assertSame('POST', \$request->getMethod());
                Assert::assertSame('https://rest.api.transifex.com/resources', \$request->getUri()->__toString());
                Assert::assertSame('WebhookBundle flashes', \$body['data']['attributes']['name']);
                Assert::assertSame('webhookbundle-flashes', \$body['data']['attributes']['slug']);
                Assert::assertSame('INI', \$body['data']['relationships']['i18n_format']['data']['id']);
                Assert::assertSame('o:mautic:p:mautic', \$body['data']['relationships']['project']['data']['id']);

                return new Response(SymfonyResponse::HTTP_CREATED, [], file_get_contents(__DIR__.'/../Fixtures/Transifex/resources-create.json'));
            }
        );

        // Starting the upload of content for the first resource
        \$handlerStack->append(
            function (RequestInterface \$request) {
                \$body = json_decode(\$request->getBody()->__toString(), true);
                Assert::assertSame('POST', \$request->getMethod());
                Assert::assertSame('https://rest.api.transifex.com/resource_strings_async_uploads', \$request->getUri()->__toString());
                Assert::assertNotEmpty(\$body['data']['attributes']['content']);

                return new Response(SymfonyResponse::HTTP_ACCEPTED, [], file_get_contents(__DIR__.'/../Fixtures/Transifex/resources-upload.json'));
            }
        );

        // Starting the upload of content for the second resource
        \$handlerStack->append(
            function (RequestInterface \$request) {
                \$body = json_decode(\$request->getBody()->__toString(), true);
                Assert::assertSame('POST', \$request->getMethod());
                Assert::assertSame('https://rest.api.transifex.com/resource_strings_async_uploads', \$request->getUri()->__toString());
                Assert::assertNotEmpty(\$body['data']['attributes']['content']);

                return new Response(SymfonyResponse::HTTP_ACCEPTED, [], file_get_contents(__DIR__.'/../Fixtures/Transifex/resources-upload.json'));
            }
        );

        // The first resource uploaded successfully
        \$handlerStack->append(
            function (RequestInterface \$request) {
                Assert::assertSame('GET', \$request->getMethod());
                Assert::assertSame('https://rest.api.transifex.com//resource_strings_async_uploads/4abfc726-6a27-4c33-9d99-e5254c8df748', \$request->getUri()->__toString());

                return new Response(SymfonyResponse::HTTP_ACCEPTED, [], '');
            }
        );

        // The second resource uploaded successfully
        \$handlerStack->append(
            function (RequestInterface \$request) {
                Assert::assertSame('GET', \$request->getMethod());
                Assert::assertSame('https://rest.api.transifex.com//resource_strings_async_uploads/4abfc726-6a27-4c33-9d99-e5254c8df748', \$request->getUri()->__toString());

                return new Response(SymfonyResponse::HTTP_ACCEPTED, [], '');
            }
        );

        \$commandTester = \$this->testSymfonyCommand(PushTransifexCommand::NAME, ['--bundle' => 'WebhookBundle']);
        \$dir           = realpath(__DIR__.'/../../..');

        \$expectedOutput = <<<EOT
Processing Resource 'WebhookBundle flashes'
Resource created successfully
Processing Resource 'WebhookBundle messages'
Resource for {\$dir}/WebhookBundle/Translations/en_US/flashes.ini updated successfully
Resource for {\$dir}/WebhookBundle/Translations/en_US/messages.ini updated successfully

EOT;

        Assert::assertSame(0, \$commandTester->getStatusCode(), \$commandTester->getDisplay());
        Assert::assertSame(\$expectedOutput, \$commandTester->getDisplay());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Command/PushTransifexCommandFunctionalTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Command/PushTransifexCommandFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Command/PushTransifexCommandFunctionalTest.php");
    }
}
