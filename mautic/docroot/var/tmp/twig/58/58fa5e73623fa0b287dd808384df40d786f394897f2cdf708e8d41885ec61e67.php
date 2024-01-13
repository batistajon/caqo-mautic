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

/* @bundles/LeadBundle/Helper/CampaignEventHelper.php */
class __TwigTemplate_76885bb4aecd3af9460569a350dfe89a6fb3fa13df350fffda451d85c8ee011c extends Template
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

namespace Mautic\\LeadBundle\\Helper;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Event\\ListChangeEvent;

/**
 * Class CampaignEventHelper.
 */
class CampaignEventHelper
{
    /**
     * @param \$event
     *
     * @return bool
     */
    public static function validatePointChange(\$event, Lead \$lead)
    {
        \$properties  = \$event['properties'];
        \$checkPoints = \$properties['points'];

        if (!empty(\$checkPoints)) {
            \$points = \$lead->getPoints();
            if (\$points < \$checkPoints) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param \$event
     *
     * @return bool
     */
    public static function validateListChange(ListChangeEvent \$eventDetails, \$event)
    {
        \$limitAddTo      = \$event['properties']['addedTo'];
        \$limitRemoveFrom = \$event['properties']['removedFrom'];
        \$list            = \$eventDetails->getList();

        if (\$eventDetails->wasAdded() && !empty(\$limitAddTo) && !in_array(\$list->getId(), \$limitAddTo)) {
            return false;
        }

        if (\$eventDetails->wasRemoved() && !empty(\$limitRemoveFrom) && !in_array(\$list->getId(), \$limitRemoveFrom)) {
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
        return "@bundles/LeadBundle/Helper/CampaignEventHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/CampaignEventHelper.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Helper/CampaignEventHelper.php");
    }
}
