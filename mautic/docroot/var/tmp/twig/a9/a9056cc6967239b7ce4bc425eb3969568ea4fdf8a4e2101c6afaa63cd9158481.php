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

/* @bundles/CampaignBundle/Tests/Controller/CampaignControllerTest.php */
class __TwigTemplate_d2e81016ca0a506644c5aec8e06efbd6b46688ce1bb57a4a4570b1adff5c5eb9 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Response;

class CampaignControllerTest extends MauticMysqlTestCase
{
    /**
     * Index should return status code 200.
     */
    public function testIndexActionWhenNotFiltered(): void
    {
        \$this->client->request('GET', '/s/campaigns');
        \$clientResponse = \$this->client->getResponse();
        \$this->assertSame(200, \$clientResponse->getStatusCode(), 'Return code must be 200.');
    }

    /**
     * Filtering should return status code 200.
     */
    public function testIndexActionWhenFiltering(): void
    {
        \$this->client->request('GET', '/s/campaigns?search=has%3Aresults&tmpl=list');
        \$clientResponse = \$this->client->getResponse();
        \$this->assertSame(200, \$clientResponse->getStatusCode(), 'Return code must be 200.');
    }

    /**
     * Get campaign's create page.
     */
    public function testNewActionCampaign(): void
    {
        \$this->client->request('GET', '/s/campaigns/new/');
        \$clientResponse         = \$this->client->getResponse();
        \$clientResponseContent  = \$clientResponse->getContent();
        \$this->assertEquals(Response::HTTP_OK, \$clientResponse->getStatusCode());
    }

    /**
     * Test cancelling new campaign does not give a 500 error.
     *
     * @see https://github.com/mautic/mautic/issues/11181
     */
    public function testNewActionCampaignCancel(): void
    {
        \$crawler                = \$this->client->request('GET', '/s/campaigns/new/');
        \$clientResponse         = \$this->client->getResponse();
        Assert::assertSame(Response::HTTP_OK, \$clientResponse->getStatusCode());

        \$form = \$crawler->filter('form[name=\"campaign\"]')->selectButton('campaign_buttons_cancel')->form();
        \$this->client->submit(\$form);
        \$clientResponse         = \$this->client->getResponse();
        Assert::assertSame(Response::HTTP_OK, \$clientResponse->getStatusCode());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Controller/CampaignControllerTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Controller/CampaignControllerTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Controller/CampaignControllerTest.php");
    }
}
