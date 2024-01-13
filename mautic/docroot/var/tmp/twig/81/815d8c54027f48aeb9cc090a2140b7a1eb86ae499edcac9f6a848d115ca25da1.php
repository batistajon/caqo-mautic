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

/* @bundles/ReportBundle/Views/FormTheme/Report/aggregator_row.html.php */
class __TwigTemplate_bce9731ae87db0137ee4acfb29b4bb508b2c64bc8bfaa262fb82fa973f6c69c3 extends Template
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
?>
<div id=\"<?php echo \$form->vars['id']; ?>_container\" class=\"row mb-sm\">
    <?php echo \$view['form']->row(\$form->vars['form']->children['function']); ?>
    <?php echo \$view['form']->row(\$form->vars['form']->children['column']); ?>
    <div class=\"col-xs-1 mt-lg\">
        <button type=\"button\" class=\"btn btn-danger\" onclick=\"Mautic.removeReportRow('<?php echo \$form->vars['id']; ?>_container');\" data-toggle=\"tooltip\" title=\"<?php echo \$view['translator']->trans('mautic.report.report.label.removefilter'); ?>\"><i class=\"fa fa-minus-square-o\"></i></button>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Views/FormTheme/Report/aggregator_row.html.php";
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
        return new Source("", "@bundles/ReportBundle/Views/FormTheme/Report/aggregator_row.html.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Views/FormTheme/Report/aggregator_row.html.php");
    }
}
