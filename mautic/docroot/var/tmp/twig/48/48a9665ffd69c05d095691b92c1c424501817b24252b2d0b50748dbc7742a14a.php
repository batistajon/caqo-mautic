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

/* @bundles/CampaignBundle/Tests/Controller/SourceControllerTest.php */
class __TwigTemplate_9018d39e2fd5674e6341d4514d310ea08e1986af3a640ee62cf19242ffc8587b extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\FormBundle\\Entity\\Form;

class SourceControllerTest extends MauticMysqlTestCase
{
    public function testTwoSourcesWithSameName(): void
    {
        \$form1 = new Form();
        \$form1->setName('test');
        \$form1->setAlias('test');
        \$form1->setFormType('campaign');

        \$form2 = new Form();
        \$form2->setName('test');
        \$form2->setAlias('test');
        \$form2->setFormType('campaign');

        \$this->em->persist(\$form1);
        \$this->em->persist(\$form2);

        \$this->em->flush();
        \$this->em->clear();

        \$this->client->request('GET', '/s/campaigns/sources/new/random_object_id?sourceType=forms', [], [], \$this->createAjaxHeaders());
        \$clientResponse  = \$this->client->getResponse();
        \$responseContent = \$clientResponse->getContent();
        \$this->assertSame(200, \$clientResponse->getStatusCode(), \$responseContent);

        \$html = json_decode(\$responseContent, true)['newContent'];
        \$this->assertStringContainsString(\"<option value=\\\"{\$form1->getId()}\\\" >test ({\$form1->getId()})</option>\", \$html);
        \$this->assertStringContainsString(\"<option value=\\\"{\$form2->getId()}\\\" >test ({\$form2->getId()})</option>\", \$html);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Controller/SourceControllerTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Controller/SourceControllerTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Controller/SourceControllerTest.php");
    }
}
