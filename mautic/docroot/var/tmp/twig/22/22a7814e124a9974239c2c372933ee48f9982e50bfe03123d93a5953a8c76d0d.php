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

/* @bundles/MarketplaceBundle/Tests/Functional/Controller/DetailControllerTest.php */
class __TwigTemplate_f7a533d2cae1dd540716159997764eb0341ce73438f0942c07bb403ba581d8dc extends Template
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

namespace Mautic\\MarketplaceBundle\\Tests\\Functional\\Controller;

use GuzzleHttp\\Handler\\MockHandler;
use GuzzleHttp\\Psr7\\Response;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\MarketplaceBundle\\Service\\Allowlist;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Response as SymfonyResponse;

final class DetailControllerTest extends MauticMysqlTestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testMarketplaceDetailPage(string \$requestedPackage, int \$responseCode, string \$foundPackageName, string \$foundPackageDesc, string \$latestVersion = ''): void
    {
        /** @var MockHandler \$handlerStack */
        \$handlerStack = self::\$container->get('mautic.http.client.mock_handler');
        \$handlerStack->append(
            new Response(SymfonyResponse::HTTP_OK, [], file_get_contents(__DIR__.'/../../ApiResponse/allowlist.json')), // Getting Allow list from Github API.
            new Response(200, [], file_get_contents(__DIR__.'/../../ApiResponse/detail.json')) // Getting package detail from Packagist API.
        );

        /** @var Allowlist \$allowlist */
        \$allowlist = self::\$container->get('marketplace.service.allowlist');
        \$allowlist->clearCache();

        \$this->client->request('GET', \"s/marketplace/detail/{\$requestedPackage}\");

        \$responseContent = \$this->client->getResponse()->getContent();

        Assert::assertSame(\$responseCode, \$this->client->getResponse()->getStatusCode(), \$this->client->getResponse()->getContent());
        Assert::assertStringContainsString(\$foundPackageDesc, \$responseContent);
        Assert::assertStringContainsString(\$foundPackageName, \$responseContent);
        Assert::assertStringContainsString(\$latestVersion, \$responseContent);
    }

    /**
     * @return iterable<array<string|int>>
     */
    public function dataProvider(): iterable
    {
        // Package that do not exist in the allowlist.
        yield [
            'mautic/unicorn',
            SymfonyResponse::HTTP_NOT_FOUND,
            'mautic/unicorn',
            'Package \\'mautic/unicorn\\' not found in allowlist.',
        ];

        // Package that exists in the allowlist with display name.
        yield [
            'koco/mautic-recaptcha-bundle',
            SymfonyResponse::HTTP_OK,
            'KocoCaptcha',
            'This plugin brings reCAPTCHA integration to mautic.',
            '<a href=\"https://github.com/KonstantinCodes/mautic-recaptcha/releases/tag/3.0.1\" id=\"latest-version\" target=\"_blank\" rel=\"noopener noreferrer\">',
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Tests/Functional/Controller/DetailControllerTest.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Tests/Functional/Controller/DetailControllerTest.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Tests/Functional/Controller/DetailControllerTest.php");
    }
}
