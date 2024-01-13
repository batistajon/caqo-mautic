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

/* @bundles/ReportBundle/Views/FormTheme/Report/_report_filters_entry_condition_row.html.php */
class __TwigTemplate_e21d6d829b11baae6fcb2cab9b13c8edad4234e9518cb14a7d91801775c4eb23 extends Template
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
        echo "<label class=\"<?php echo \$form->vars['label_attr']['class']; ?>\" for=\"<?php echo \$form->vars['id']; ?>\"><?php echo \$view['translator']->trans(\$form->vars['label']); ?></label>
<select id=\"<?php echo \$form->vars['id']; ?>\" name=\"<?php echo \$form->vars['full_name']; ?>\" class=\"<?php echo \$form->vars['attr']['class']; ?>\" onchange=\"Mautic.checkReportCondition('<?php echo \$form->vars['id']; ?>')\">
    <?php foreach (\$form->vars['choices'] as \$condition) : ?>
    <option value=\"<?php echo \$view->escape(\$condition->value); ?>\"<?php echo (\$condition->value == \$form->vars['data']) ? ' selected' : ''; ?>>
        <?php echo \$condition->label; ?>
    </option>
    <?php endforeach; ?>
</select>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Views/FormTheme/Report/_report_filters_entry_condition_row.html.php";
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
        return new Source("", "@bundles/ReportBundle/Views/FormTheme/Report/_report_filters_entry_condition_row.html.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Views/FormTheme/Report/_report_filters_entry_condition_row.html.php");
    }
}
