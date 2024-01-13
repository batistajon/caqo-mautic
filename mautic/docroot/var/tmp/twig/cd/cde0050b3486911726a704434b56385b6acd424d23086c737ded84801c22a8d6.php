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

/* @bundles/ReportBundle/Views/FormTheme/Report/_report_filters_entry_value_row.html.php */
class __TwigTemplate_89609c45f766eda13232bff6be73c8a69f2d1ef3b82244e12734866b4c0bc950 extends Template
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
        echo "<?php \$condition = \$form->parent->children['condition']->vars['value']; ?>
<div class=\"form-group mb-0\">
    <label class=\"<?php echo \$form->vars['label_attr']['class']; ?>\" for=\"<?php echo \$form->vars['id']; ?>\"><?php echo \$view['translator']->trans(\$form->vars['label']); ?></label>
    <input type=\"text\" id=\"<?php echo \$form->vars['id']; ?>\" name=\"<?php echo \$form->vars['full_name']; ?>\" class=\"<?php echo \$form->vars['attr']['class']; ?>\" value=\"<?php echo \$view->escape(\$form->vars['data']); ?>\"<?php echo (in_array(\$condition, ['empty', 'notEmpty'])) ? ' disabled' : ''; ?> />
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Views/FormTheme/Report/_report_filters_entry_value_row.html.php";
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
        return new Source("", "@bundles/ReportBundle/Views/FormTheme/Report/_report_filters_entry_value_row.html.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Views/FormTheme/Report/_report_filters_entry_value_row.html.php");
    }
}
