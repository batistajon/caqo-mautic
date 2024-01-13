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

/* @bundles/ReportBundle/Views/FormTheme/Report/_report_aggregators_entry_function_row.html.php */
class __TwigTemplate_1b26976d41a006e9c9aa4775cc946fb23bbeb2f8878093329792883f1c1bf772 extends Template
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
        echo "<div class=\"choice-wrapper col-xs-4\">
    <label class=\"<?php echo \$form->vars['label_attr']['class']; ?>\" for=\"<?php echo \$form->vars['id']; ?>\"><?php echo \$view['translator']->trans(\$form->vars['label']); ?></label>
    <select id=\"<?php echo \$form->vars['id']; ?>\" name=\"<?php echo \$form->vars['full_name']; ?>\" class=\"<?php echo \$form->vars['attr']['class']; ?>\" onchange=\"Mautic.checkReportCondition('<?php echo \$form->vars['id']; ?>')\">
        <?php foreach (\$form->vars['choices'] as \$function) : ?>
            <option value=\"<?php echo \$view->escape(\$function->value); ?>\"<?php echo (\$function->value == \$form->vars['data']) ? ' selected' : ''; ?>>
                <?php echo \$function->label; ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Views/FormTheme/Report/_report_aggregators_entry_function_row.html.php";
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
        return new Source("", "@bundles/ReportBundle/Views/FormTheme/Report/_report_aggregators_entry_function_row.html.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Views/FormTheme/Report/_report_aggregators_entry_function_row.html.php");
    }
}
