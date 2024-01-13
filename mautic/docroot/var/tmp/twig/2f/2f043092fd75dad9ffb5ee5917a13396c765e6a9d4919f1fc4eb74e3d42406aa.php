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

/* @bundles/CoreBundle/Views/FormTheme/Custom/dynamiclist_row.html.php */
class __TwigTemplate_bdcec6cb793f49f7af14d99791273ab91dc28680b3ce79a61388a4b4de6c7acb extends Template
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
\$list          = \$form->children;
\$hasErrors     = count(\$list->vars['errors']);
\$feedbackClass = (!empty(\$hasErrors)) ? ' has-error' : '';
\$datePrototype = (isset(\$list->vars['prototype'])) ?
    \$view->escape('<div class=\"sortable\">'.\$view['form']->widget(\$list->vars['prototype']).'</div>') : '';
\$feedbackClass = (!empty(\$hasErrors)) ? ' has-error' : '';
?>
<div class=\"row\">
    <div data-toggle=\"sortablelist\" data-prefix=\"<?php echo \$form->vars['id']; ?>\" class=\"form-group col-xs-12 <?php echo \$feedbackClass; ?>\" id=\"<?php echo \$form->vars['id']; ?>_list\">
        <?php echo \$view['form']->label(\$form, \$label); ?>
        <a  data-prototype=\"<?php echo \$datePrototype; ?>\"
           class=\"btn btn-warning btn-xs btn-add-item\" href=\"#\" id=\"<?php echo \$form->vars['id']; ?>_additem\">
            <?php echo \$view['translator']->trans('mautic.core.form.list.additem'); ?>
        </a>
        <?php if (\$isSortable): ?>
        <div class=\"list-sortable\">
        <?php endif; ?>
            <?php foreach (\$list->children as \$item): ?>
            <?php echo \$view['form']->block(\$item, 'sortablelist_entry_row'); ?>
            <?php endforeach; ?>
        </div>
        <?php echo \$view['form']->errors(\$list); ?>
        <?php if (\$isSortable): ?>
        <input type=\"hidden\" class=\"sortable-itemcount\" id=\"<?php echo \$form->vars['id']; ?>_itemcount\" value=\"<?php echo count(\$list); ?>\" />
        <?php endif; ?>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/Custom/dynamiclist_row.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Custom/dynamiclist_row.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Custom/dynamiclist_row.html.php");
    }
}
