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

/* @bundles/CoreBundle/Views/FormTheme/Custom/sortablelist_row.html.php */
class __TwigTemplate_3c32bc511c32eb4ef27885f539e8b1a9d72d9d90838847e68806153d5f540255 extends Template
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
\$list            = \$form->children['list'];
\$parentHasErrors = \$view['form']->containsErrors(\$form->parent);

if (\$parentHasErrors && empty(\$list->vars['value']) && isset(\$form->parent->children['properties']['list']) && null === \$form->parent->vars['data']->getId()) {
    // Work around for Symfony bug not repopulating values only for add action
    \$list = \$form->parent->children['properties']['list'];
}
\$hasErrors     = \$view['form']->containsErrors(\$list);
\$feedbackClass = (!empty(\$hasErrors)) ? ' has-error' : '';
\$datePrototype = (isset(\$list->vars['prototype'])) ?
    \$view->escape('<div class=\"sortable\">'.\$view['form']->widget(\$list->vars['prototype']).'</div>') : '';

?>
<div class=\"row\">
    <div data-toggle=\"sortablelist\" data-prefix=\"<?php echo \$form->vars['id']; ?>\" class=\"form-group col-xs-12 <?php echo \$feedbackClass; ?>\" id=\"<?php echo \$form->vars['id']; ?>_list\" style=\"overflow:auto\">
        <?php echo \$view['form']->label(\$form, \$label); ?>
        <a  data-prototype=\"<?php echo \$datePrototype; ?>\"
           class=\"btn btn-warning btn-xs btn-add-item\" href=\"#\" id=\"<?php echo \$form->vars['id']; ?>_additem\">
            <?php echo \$view['translator']->trans(\$addValueButton); ?>
        </a>
        <?php echo \$view['form']->block(\$list, 'sortablelist_errors'); ?>
        <?php if (\$isSortable): ?>
        <div id=\"sortable-<?php echo \$form->vars['id']; ?>\" class=\"list-sortable\" <?php foreach (\$attr as \$k => \$v) {
    printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v));
}?>>
        <?php endif; ?>
            <?php foreach (\$list->children as \$key => \$item): ?>
            <?php echo \$view['form']->block(\$item, 'sortablelist_entry_row'); ?>
            <?php endforeach; ?>
        </div>
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
        return "@bundles/CoreBundle/Views/FormTheme/Custom/sortablelist_row.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Custom/sortablelist_row.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Custom/sortablelist_row.html.php");
    }
}
