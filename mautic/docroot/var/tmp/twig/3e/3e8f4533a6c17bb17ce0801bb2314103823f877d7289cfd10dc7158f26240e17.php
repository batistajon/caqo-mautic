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

/* @bundles/LeadBundle/Views/FormTheme/ContactCampaignsCondition/campaignevent_lead_campaigns_widget.html.php */
class __TwigTemplate_87ec36e762d1cac3b5ddc75054e9a6247b8dc059663c0011d05a239830c85ee0 extends Template
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

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<div class=\"row condition-row\">
    <div class=\"col-xs-12\">
        <?php echo \$view['form']->row(\$form['campaigns']); ?>
    </div>
</div>

<div class=\"row condition-row\">
    <div class=\"col-xs-5\">
        <?php echo \$view['form']->row(\$form['dataAddedLimit']); ?>
    </div>
    <div class=\"col-xs-3\">
        <?php echo \$view['form']->row(\$form['expr']); ?>
    </div>
    <div class=\"col-xs-4\">
        <?php echo \$view['form']->row(\$form['dateAdded']); ?>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/FormTheme/ContactCampaignsCondition/campaignevent_lead_campaigns_widget.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/FormTheme/ContactCampaignsCondition/campaignevent_lead_campaigns_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/FormTheme/ContactCampaignsCondition/campaignevent_lead_campaigns_widget.html.php");
    }
}
