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

/* @bundles/CampaignBundle/Tests/Functional/Campaign/DetailsTest.php */
class __TwigTemplate_b75034a9eecd5d6d7314f1ad55c9f7e152785abaa584746caca53d709dd4a657 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Functional\\Campaign;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;

class DetailsTest extends MauticMysqlTestCase
{
    public function testDetailsPageLoadCorrectly(): void
    {
        \$campaign = new Campaign();
        \$campaign->setName('Campaign A');
        \$campaign->setCanvasSettings([
                'nodes' => [
                    0 => [
                        'id'        => '148',
                        'positionX' => '760',
                        'positionY' => '155',
                    ],
                    1 => [
                        'id'        => 'lists',
                        'positionX' => '860',
                        'positionY' => '50',
                    ],
                ],
                'connections' => [
                    0 => [
                        'sourceId' => 'lists',
                        'targetId' => '148',
                        'anchors'  => [
                            'source' => 'leadsource',
                            'target' => 'top',
                        ],
                    ],
                ],
            ]
        );
        \$this->em->persist(\$campaign);
        \$this->em->flush();

        \$this->client->request('GET', sprintf('/s/campaigns/view/%s', \$campaign->getId()));

        \$response = \$this->client->getResponse();
        Assert::assertSame(200, \$response->getStatusCode());
        Assert::assertStringContainsString(\$campaign->getName(), \$response->getContent());
        Assert::assertStringContainsString(sprintf('data-target-url=\"/s/campaigns/view/%s/contact/1\"', \$campaign->getId()), \$response->getContent());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Functional/Campaign/DetailsTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Functional/Campaign/DetailsTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Functional/Campaign/DetailsTest.php");
    }
}
