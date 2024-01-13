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

/* @bundles/LeadBundle/Tests/Segment/IntegrationCampaign/IntegrationCampaignPartsTest.php */
class __TwigTemplate_70285a3d59cf0ca1882eb152b43c57d7ff7a786b8d4e470381b261b12b7c9eb8 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\IntegrationCampaign;

use Mautic\\LeadBundle\\Segment\\IntegrationCampaign\\IntegrationCampaignParts;

class IntegrationCampaignPartsTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\IntegrationCampaign\\IntegrationCampaignParts::getIntegrationName()
     * @covers \\Mautic\\LeadBundle\\Segment\\IntegrationCampaign\\IntegrationCampaignParts::getCampaignId()
     */
    public function testConnectwise()
    {
        \$field             = 'Connectwise::283';
        \$doNotContactParts = new IntegrationCampaignParts(\$field);

        \$this->assertSame('Connectwise', \$doNotContactParts->getIntegrationName());
        \$this->assertSame('283', \$doNotContactParts->getCampaignId());
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\IntegrationCampaign\\IntegrationCampaignParts::getIntegrationName()
     * @covers \\Mautic\\LeadBundle\\Segment\\IntegrationCampaign\\IntegrationCampaignParts::getCampaignId()
     */
    public function testSalesforceExplicit()
    {
        \$field             = 'Salesforce::22';
        \$doNotContactParts = new IntegrationCampaignParts(\$field);

        \$this->assertSame('Salesforce', \$doNotContactParts->getIntegrationName());
        \$this->assertSame('22', \$doNotContactParts->getCampaignId());
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\IntegrationCampaign\\IntegrationCampaignParts::getIntegrationName()
     * @covers \\Mautic\\LeadBundle\\Segment\\IntegrationCampaign\\IntegrationCampaignParts::getCampaignId()
     */
    public function testSalesforceDefault()
    {
        \$field             = '44';
        \$doNotContactParts = new IntegrationCampaignParts(\$field);

        \$this->assertSame('Salesforce', \$doNotContactParts->getIntegrationName());
        \$this->assertSame('44', \$doNotContactParts->getCampaignId());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Segment/IntegrationCampaign/IntegrationCampaignPartsTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/IntegrationCampaign/IntegrationCampaignPartsTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Segment/IntegrationCampaign/IntegrationCampaignPartsTest.php");
    }
}
