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

/* @bundles/LeadBundle/Views/Field/properties_boolean.html.php */
class __TwigTemplate_a565cf4ea723c58a1952ec16c3136e6ab9335bdc65fcac0a250db18cb386645f extends Template
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
\$yes = (isset(\$yes)) ? \$yes : \$view['translator']->trans('mautic.core.form.yes');
\$no  = (isset(\$no)) ? \$no : \$view['translator']->trans('mautic.core.form.no');
?>

<div class=\"boolean\">
    <label class=\"control-label\"><?php echo \$view['translator']->trans('mautic.lead.field.form.properties.boolean'); ?></label>
    <div class=\"row\">
        <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
            <div class=\"input-group\">
                <span class=\"input-group-addon text-danger\">
                    <i class=\"fa fa-lg fa-fw fa-times\"></i>
                </span>
                <input type=\"text\" autocomplete=\"false\" class=\"form-control\" name=\"leadfield[properties][no]\" value=\"<?php echo \$view->escape(\$no); ?>\" onkeyup=\"Mautic.updateLeadFieldBooleanLabels(this, 0);\">
            </div>
        </div>
        <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
            <div class=\"input-group\">
                <span class=\"input-group-addon text-success\">
                    <i class=\"fa fa-lg fa-fw fa-check\"></i>
                </span>
                <input type=\"text\" autocomplete=\"false\" class=\"form-control\" name=\"leadfield[properties][yes]\" value=\"<?php echo \$view->escape(\$yes); ?>\" onkeyup=\"Mautic.updateLeadFieldBooleanLabels(this, 1);\">
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
        return "@bundles/LeadBundle/Views/Field/properties_boolean.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Field/properties_boolean.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Field/properties_boolean.html.php");
    }
}
