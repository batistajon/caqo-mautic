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

/* @bundles/ReportBundle/Views/FormTheme/Report/_report_tableOrder_entry_column_row.html.php */
class __TwigTemplate_6b0c841a653e51f0dab6855e2742f00a00fee15f6444b42c1ae59e42585aa664 extends Template
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
        echo "<div class=\"choice-wrapper col-xs-6\">
    <label class=\"<?php echo \$form->vars['label_attr']['class']; ?>\" for=\"<?php echo \$form->vars['id']; ?>\"><?php echo \$view['translator']->trans(\$form->vars['label']); ?></label>
    <select id=\"<?php echo \$form->vars['id']; ?>\" name=\"<?php echo \$form->vars['full_name']; ?>\" class=\"<?php echo \$form->vars['attr']['class']; ?>\">
        <?php foreach (\$form->vars['choices'] as \$column) : ?>
        <option value=\"<?php echo \$view->escape(\$column->value); ?>\"<?php echo (\$column->value == \$form->vars['data']) ? ' selected' : ''; ?>>
            <?php echo \$column->label; ?>
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
        return "@bundles/ReportBundle/Views/FormTheme/Report/_report_tableOrder_entry_column_row.html.php";
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
        return new Source("", "@bundles/ReportBundle/Views/FormTheme/Report/_report_tableOrder_entry_column_row.html.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Views/FormTheme/Report/_report_tableOrder_entry_column_row.html.php");
    }
}
