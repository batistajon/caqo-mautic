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

/* @bundles/EmailBundle/Views/FormTheme/Email/_emailform_dynamicContent_entry_filters_entry_filters_entry_widget.html.php */
class __TwigTemplate_89a93d45c9179e0167ede8c54fd0a2a363e5abaa9101d3d248de77ee6df61f81 extends Template
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
 * @copyright   2015 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
\$isPrototype = ('__name__' == \$form->vars['name']);
\$filterType  = \$form['field']->vars['value'];
\$filterGroup = \$form['object']->vars['value'];
\$inGroup     = (isset(\$form->vars['data']['glue']) && 'and' === \$form->vars['data']['glue']);
\$objectIcon  = (isset(\$form->vars['data']['object']) && 'company' == \$form->vars['data']['object']) ? 'fa-building' : 'fa-user';
?>

<div class=\"panel<?php echo (\$isPrototype || (\$inGroup && !\$first)) ? ' in-group' : ''; ?>\">
    <div class=\"panel-footer<?php if (!\$isPrototype && '0' === \$form->vars['name']) {
    echo ' hide';
} ?>\">
        <div class=\"col-sm-2 pl-0\">
            <?php echo \$view['form']->widget(\$form['glue']); ?>
        </div>
    </div>
    <div class=\"panel-body\">
        <div class=\"col-xs-6 col-sm-3 field-name\">
            <i class=\"object-icon fa <?php echo \$objectIcon; ?>\"></i> <span><?php echo (\$isPrototype) ? '__label__' : \$form->parent->parent->vars['fields'][\$filterGroup][\$filterType]['label']; ?></span>
        </div>

        <div class=\"col-xs-6 col-sm-3 padding-none\">
            <?php echo \$view['form']->widget(\$form['operator']); ?>
        </div>

        <?php \$hasErrors = count(\$form['filter']->vars['errors']) || count(\$form['display']->vars['errors']); ?>
        <div class=\"col-xs-10 col-sm-5 padding-none<?php if (\$hasErrors) {
    echo ' has-error';
} ?>\">
            <?php echo \$view['form']->widget(\$form['filter']); ?>
            <?php echo \$view['form']->errors(\$form['filter']); ?>
            <?php echo \$view['form']->widget(\$form['display']); ?>
            <?php echo \$view['form']->errors(\$form['display']); ?>
        </div>

        <div class=\"col-xs-2 col-sm-1\">
            <a href=\"javascript: void(0);\" class=\"remove-selected btn btn-default text-danger pull-right\"><i class=\"fa fa-trash-o\"></i></a>
        </div>
        <?php echo \$view['form']->widget(\$form['field']); ?>
        <?php echo \$view['form']->widget(\$form['type']); ?>
        <?php echo \$view['form']->widget(\$form['object']); ?>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Views/FormTheme/Email/_emailform_dynamicContent_entry_filters_entry_filters_entry_widget.html.php";
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
        return new Source("", "@bundles/EmailBundle/Views/FormTheme/Email/_emailform_dynamicContent_entry_filters_entry_filters_entry_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Views/FormTheme/Email/_emailform_dynamicContent_entry_filters_entry_filters_entry_widget.html.php");
    }
}
