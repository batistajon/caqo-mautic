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

/* @bundles/EmailBundle/Views/FormTheme/Email/dynamic_content_filter_entry_widget.html.php */
class __TwigTemplate_8b928018edd0ae8a9120f4eed522dcf33f2ee611b4157d9f43b0f0778a860c28 extends Template
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
?>
<div class=\"tab-pane dynamic-content-filter bdr-w-0\" id=\"<?php echo \$form->vars['id']; ?>\">
    <div class=\"row form-group\">
        <div class=\"col-xs-10\">
            <?php echo \$view['form']->label(\$form['content']); ?>
        </div>
        <div class=\"col-xs-2\">
            <?php if ('emailform_dynamicContent_0_filters_0' !== \$id) : ?>
            <a class=\"remove-item remove-filter btn btn-default text-danger\"><i class=\"fa fa-trash-o\"></i></a>
            <?php endif; ?>
        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col-xs-12\">
            <?php echo \$view['form']->widget(\$form['content']); ?>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-7\">
            <label><?php echo \$view['translator']->trans('Filters'); ?></label>
        </div>
        <div class=\"col-xs-5\">
            <div class=\"form-group\">
                <div class=\"available-filters pl-0\">
                    <select class=\"chosen form-control\" data-mautic=\"available_filters\">
                        <option value=\"\"></option>
                        <?php
                        foreach (\$fields as \$object => \$field):
                            \$header = \$object;
                            \$icon   = ('company' == \$object) ? 'fa-building' : 'fa-user';
                            ?>
                            <optgroup label=\"<?php echo \$view['translator']->trans('mautic.lead.'.\$header); ?>\">
                                <?php foreach (\$field as \$value => \$params):
                                    \$list      = (!empty(\$params['properties']['list'])) ? \$params['properties']['list'] : [];
                                    \$choices   = ('boolean' === \$params['properties']['type'])
                                        ?
                                        \\Mautic\\LeadBundle\\Helper\\FormFieldHelper::parseBooleanList(\$list)
                                        :
                                        \\Mautic\\LeadBundle\\Helper\\FormFieldHelper::parseListForChoices(\$list);
                                    \$list      = json_encode(\$choices);
                                    \$callback  = (!empty(\$params['properties']['callback'])) ? \$params['properties']['callback'] : '';
                                    \$operators = (!empty(\$params['operators'])) ? \$view->escape(json_encode(\$params['operators'])) : '{}';
                                    ?>
                                    <option value=\"<?php echo \$view->escape(\$value); ?>\" data-mautic=\"available_<?php echo \$value; ?>\" data-field-object=\"<?php echo \$object; ?>\" data-field-type=\"<?php echo \$params['properties']['type']; ?>\" data-field-list=\"<?php echo \$view->escape(\$list); ?>\" data-field-callback=\"<?php echo \$callback; ?>\" data-field-operators='<?php echo \$operators; ?>' class=\"segment-filter fa <?php echo \$icon; ?>\"><?php echo \$view['translator']->trans(\$params['label']); ?></option>
                                <?php endforeach; ?>
                            </optgroup>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
    <div data-filter-container data-index=\"<?php echo count(\$form['filters']); ?>\">
    <?php
    foreach (\$form['filters'] as \$i => \$filter) {
        \$isPrototype = ('__name__' == \$filter->vars['name']);
        if (\$isPrototype || isset(\$form->vars['fields'][\$filter->vars['value']['object']][\$filter->vars['value']['field']])) {
            echo \$view['form']->widget(\$filter, ['first' => (0 === \$i)]);
        }
    }
    ?>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Views/FormTheme/Email/dynamic_content_filter_entry_widget.html.php";
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
        return new Source("", "@bundles/EmailBundle/Views/FormTheme/Email/dynamic_content_filter_entry_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Views/FormTheme/Email/dynamic_content_filter_entry_widget.html.php");
    }
}
