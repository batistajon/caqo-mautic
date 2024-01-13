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

/* @bundles/MarketplaceBundle/Tests/Functional/Controller/ListControllerTest.php */
class __TwigTemplate_40f05b04ab0113fe78c6a90a567dcef4a0bb9ef5eb73f79d72ffd1f236da908d extends Template
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
use Mautic\\MarketplaceBundle\\Service\\Config;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Response as SymfonyResponse;

final class ListControllerTest extends MauticMysqlTestCase
{
    protected function setUp(): void
    {
        if ('testMarketplaceListTableWithNoAllowList' === \$this->getName()) {
            \$this->configParams[Config::MARKETPLACE_ALLOWLIST_URL] = '0'; // Empty string results in null for some reason.
        }

        parent::setUp();
    }

    public function testMarketplaceListTableWithNoAllowList(): void
    {
        /** @var MockHandler \$handlerStack */
        \$handlerStack = self::\$container->get('mautic.http.client.mock_handler');
        \$handlerStack->append(
            new Response(SymfonyResponse::HTTP_OK, [], file_get_contents(__DIR__.'/../../ApiResponse/list.json'))  // Getting the package list from Packagist API.
        );

        /** @var Allowlist \$allowlist */
        \$allowlist = self::\$container->get('marketplace.service.allowlist');
        \$allowlist->clearCache();

        \$crawler = \$this->client->request('GET', 's/marketplace');

        Assert::assertTrue(\$this->client->getResponse()->isOk(), \$this->client->getResponse()->getContent());

        Assert::assertSame(
            [
                'Mautic Saelos Bundle',
                'Mautic Recaptcha Bundle',
                'Mautic Ldap Auth Bundle',
                'Mautic Referrals Bundle',
                'Mautic Do Not Contact Extras Bundle',
            ],
            array_map(
                fn (string \$dirtyPackageName) => trim(\$dirtyPackageName),
                \$crawler->filter('#marketplace-packages-table .package-name a')->extract(['_text'])
            )
        );
    }

    public function testMarketplaceListTableWithAllowList(): void
    {
        \$mockResults = json_decode(file_get_contents(__DIR__.'/../../ApiResponse/list.json'), true)['results'];

        /** @var MockHandler \$handlerStack */
        \$handlerStack = self::\$container->get('mautic.http.client.mock_handler');
        \$handlerStack->append(
            new Response(SymfonyResponse::HTTP_OK, [], file_get_contents(__DIR__.'/../../ApiResponse/allowlist.json')), // Getting Allow list from Github API.
            new Response(SymfonyResponse::HTTP_OK, [], json_encode(['results' => [\$mockResults[1]]])), // mautic-recaptcha-bundle
            new Response(SymfonyResponse::HTTP_OK, [], json_encode(['results' => [\$mockResults[3]]])), // mautic-referrals-bundle
        );

        /** @var Allowlist \$allowlist */
        \$allowlist = self::\$container->get('marketplace.service.allowlist');
        \$allowlist->clearCache();

        \$crawler = \$this->client->request('GET', 's/marketplace');

        Assert::assertTrue(\$this->client->getResponse()->isOk(), \$this->client->getResponse()->getContent());

        Assert::assertSame(
            [
                'KocoCaptcha',
                'Mautic Referrals Bundle',
            ],
            array_map(
                fn (string \$dirtyPackageName) => trim(\$dirtyPackageName),
                \$crawler->filter('#marketplace-packages-table .package-name a')->extract(['_text'])
            )
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Tests/Functional/Controller/ListControllerTest.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Tests/Functional/Controller/ListControllerTest.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Tests/Functional/Controller/ListControllerTest.php");
    }
}
