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

/* @bundles/LeadBundle/Views/FormTheme/FieldValueCondition/campaignevent_lead_field_value_widget.html.php */
class __TwigTemplate_87b63156eaee254499fc56d88583c1caf108dc952f405168d504fa56c0fbe8a0 extends Template
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
    <div class=\"col-xs-4\">
        <?php echo \$view['form']->row(\$form['field']); ?>
    </div>
    <div class=\"col-xs-4\">
        <?php echo \$view['form']->row(\$form['operator']); ?>
    </div>
    <div class=\"col-xs-4\">
        <?php echo \$view['form']->row(\$form['value']); ?>
    </div>
</div>

<div class=\"row condition-custom-date-row\" style=\"display: none;\">
    <div class=\"col-sm-offset-4 col-sm-4\">
        <div class=\"row\">
            <div class=\"form-group col-xs-12 \">
                <div class=\"input-group\">
                    <span class=\"input-group-addon preaddon\">
                        <i class=\"symbol-hashtag\"></i>
                    </span>
                    <input autocomplete=\"false\" type=\"number\" id=\"lead-field-custom-date-interval\" class=\"form-control\" value=\"1\" onchange=\"Mautic.updateLeadFieldValueOptions(mQuery('#campaignevent_properties_value'), true)\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"row\">
            <div class=\"form-group col-xs-12 \">
                <select id=\"lead-field-custom-date-unit\" class=\"form-control chosen\" autocomplete=\"false\" onchange=\"Mautic.updateLeadFieldValueOptions(mQuery('#campaignevent_properties_value'), true)\">
                    <?php foreach (['i', 'h', 'd', 'm', 'y'] as \$interval): ?>
                    <?php \$selected = ('d' === \$interval) ? ' selected' : ''; ?>
                    <option<?php echo \$selected; ?> value=\"<?php echo \$view->escape(\$interval); ?>\">
                        <?php echo \$view['translator']->trans('mautic.campaign.event.intervalunit.choice.'.\$interval); ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/FormTheme/FieldValueCondition/campaignevent_lead_field_value_widget.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/FormTheme/FieldValueCondition/campaignevent_lead_field_value_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/FormTheme/FieldValueCondition/campaignevent_lead_field_value_widget.html.php");
    }
}
