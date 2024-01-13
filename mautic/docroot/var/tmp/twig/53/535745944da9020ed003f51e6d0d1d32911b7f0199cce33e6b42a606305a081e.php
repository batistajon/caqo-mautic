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

/* @bundles/CampaignBundle/Helper/CampaignEventHelper.php */
class __TwigTemplate_9d597b94a70d3714cbf2f63e31e0c2e1ca4370b4ca1df23cc5d706e843088281 extends Template
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

namespace Mautic\\CampaignBundle\\Helper;

use Mautic\\CampaignBundle\\Event\\CampaignLeadChangeEvent;

class CampaignEventHelper
{
    /**
     * Determine if this campaign applies.
     *
     * @param CampaignLeadChangeEvent \$eventDetails
     *
     * @return bool
     */
    public static function validateLeadChangeTrigger(CampaignLeadChangeEvent \$eventDetails = null, array \$event)
    {
        if (null == \$eventDetails) {
            return true;
        }

        \$limitToCampaigns = \$event['properties']['campaigns'];
        \$action           = \$event['properties']['action'];

        //check against selected campaigns
        if (!empty(\$limitToCampaigns) && !in_array(\$event['campaign']['id'], \$limitToCampaigns)) {
            return false;
        }

        //check against the selected action (was lead removed or added)
        \$func = 'was'.ucfirst(\$action);
        if (!method_exists(\$eventDetails, \$func) || !\$eventDetails->\$func()) {
            return false;
        }

        return true;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Helper/CampaignEventHelper.php";
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
        return new Source("", "@bundles/CampaignBundle/Helper/CampaignEventHelper.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Helper/CampaignEventHelper.php");
    }
}
