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

/* @bundles/ReportBundle/Views/FormTheme/Report/filter_selector_row.html.php */
class __TwigTemplate_7c4567ca3b5367074d59c019e975c5280944d642cbbe09bfabbb29452ee67a03 extends Template
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
\$labelClass = (empty(\$form->vars['label_attr']['class'])) ? 'control-label' : \$form->vars['label_attr']['class'];
\$inGroup    = !isset(\$form->vars['data']['glue']) || (isset(\$form->vars['data']['glue']) && 'and' === \$form->vars['data']['glue']);
?>
<div class=\"panel<?php echo \$inGroup ? ' in-group' : ''; ?>\" id=\"<?php echo \$form->vars['id']; ?>_container\">
    <div class=\"panel-heading\">
        <div class=\"panel-glue col-sm-2 pl-0\">
            <?php echo \$view['form']->row(\$form->vars['form']->children['glue']); ?>
        </div>
    </div>
    <div class=\"panel-body\">
        <div class=\"row mb-sm\">
            <div class=\"choice-wrapper col-xs-3\">
                <?php echo \$view['form']->row(\$form->vars['form']->children['column']); ?>
            </div>
            <div class=\"choice-wrapper col-xs-2\">
                <?php echo \$view['form']->row(\$form->vars['form']->children['condition']); ?>
            </div>
            <div class=\"choice-wrapper col-xs-4\">
                <?php echo \$view['form']->row(\$form->vars['form']->children['value']); ?>
            </div>
            <div class=\"choice-wrapper col-xs-2\">
                <?php echo \$view['form']->row(\$form->vars['form']->children['dynamic']); ?>
            </div>
            <div class=\"col-xs-1 mt-lg\">
                <button type=\"button\" class=\"btn btn-danger\" onclick=\"Mautic.removeReportRow('<?php echo \$form->vars['id']; ?>_container');\" data-toggle=\"tooltip\" title=\"<?php echo \$view['translator']->trans('mautic.report.report.label.removefilter'); ?>\"><i class=\"fa fa-minus-square-o\"></i></button>
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
        return "@bundles/ReportBundle/Views/FormTheme/Report/filter_selector_row.html.php";
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
        return new Source("", "@bundles/ReportBundle/Views/FormTheme/Report/filter_selector_row.html.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Views/FormTheme/Report/filter_selector_row.html.php");
    }
}
