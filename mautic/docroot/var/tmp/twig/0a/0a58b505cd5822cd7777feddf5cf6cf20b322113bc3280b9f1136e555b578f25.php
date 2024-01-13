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

/* @bundles/LeadBundle/Segment/IntegrationCampaign/IntegrationCampaignParts.php */
class __TwigTemplate_bf025d3ec61afb319fdb58d9339256994d56b6176dc5f6179cdabbeb3ce39f7d extends Template
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

namespace Mautic\\LeadBundle\\Segment\\IntegrationCampaign;

class IntegrationCampaignParts
{
    /**
     * @var string
     */
    private \$integrationName;

    /**
     * @var string
     */
    private \$campaignId;

    /**
     * @param string \$field
     */
    public function __construct(\$field)
    {
        if (false !== strpos(\$field, '::')) {
            list(\$integrationName, \$campaignId) = explode('::', \$field);
        } else {
            // Assuming this is a Salesforce integration for BC with pre 2.11.0
            \$integrationName = 'Salesforce';
            \$campaignId      = \$field;
        }
        \$this->integrationName = \$integrationName;
        \$this->campaignId      = \$campaignId;
    }

    /**
     * @return string
     */
    public function getIntegrationName()
    {
        return \$this->integrationName;
    }

    /**
     * @return string
     */
    public function getCampaignId()
    {
        return \$this->campaignId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/IntegrationCampaign/IntegrationCampaignParts.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/IntegrationCampaign/IntegrationCampaignParts.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/IntegrationCampaign/IntegrationCampaignParts.php");
    }
}
