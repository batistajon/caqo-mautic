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

/* @bundles/CoreBundle/Tests/Functional/Controller/AjaxControllerTest.php */
class __TwigTemplate_29118d5666ad4499ddf97336dd896f15af569f17a0907ad537a16b55dc9a09bd extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Controller;

use GuzzleHttp\\Handler\\MockHandler;
use GuzzleHttp\\Psr7\\Response;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;

final class AjaxControllerTest extends MauticMysqlTestCase
{
    /**
     * @var MockHandler
     */
    private \$clientMockHandler;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->clientMockHandler = self::\$container->get('mautic.http.client.mock_handler');
    }

    public function testUpdateRunChecksAction(): void
    {
        \$responseToPostUpdate  = new Response();
        \$responseToGetUpdate   = new Response(200, [], file_get_contents(__DIR__.'/../../Fixtures/releases.json'));
        \$responseToGetMetadata = new Response(200, [], file_get_contents(__DIR__.'/../../Fixtures/metadata.json'));

        \$this->clientMockHandler->append(\$responseToPostUpdate, \$responseToGetUpdate, \$responseToGetMetadata);

        \$this->client->request('GET', 's/ajax?action=core:updateRunChecks');
        \$response = \$this->client->getResponse();
        Assert::assertSame(200, \$response->getStatusCode(), \$response->getContent());
        Assert::assertStringContainsString('Great! You are running the current version of Mautic.', \$response->getContent());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Functional/Controller/AjaxControllerTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Controller/AjaxControllerTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Functional/Controller/AjaxControllerTest.php");
    }
}
