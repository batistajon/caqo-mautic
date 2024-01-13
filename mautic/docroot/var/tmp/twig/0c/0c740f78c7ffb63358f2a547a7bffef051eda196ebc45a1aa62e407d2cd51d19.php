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

/* @bundles/CoreBundle/Views/Helper/tableheader.html.php */
class __TwigTemplate_d3acfdc1cc50bb66c1381ab1c38b961f2c41805f79c5e8488e911ab0b2a6a090 extends Template
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
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

use Mautic\\CoreBundle\\Templating\\Helper\\ButtonHelper;

if (!isset(\$target)) {
    \$target = '.page-list';
}

if (!empty(\$checkall)):
    \$view['buttons']->reset(\$app->getRequest(), ButtonHelper::LOCATION_BULK_ACTIONS, ButtonHelper::TYPE_DROPDOWN);
    include 'action_button_helper.php';

    switch (true):
        case !empty(\$templateButtons['delete']):
            \$view['buttons']->addButton(
                [
                    'confirm' => [
                        'message' => \$view['translator']->hasId(\$translationBase.'.form.confirmbatchdelete') ?
                            \$view['translator']->trans(\$translationBase.'.form.confirmbatchdelete') :
                            \$view['translator']->trans('mautic.core.form.confirmbatchdelete'),
                        'confirmAction' => \$view['router']->path(\$actionRoute, array_merge(['objectAction' => 'batchDelete'], \$query)),
                        'template'      => 'batchdelete',
                    ],
                    'priority' => -1,
                ]
            );
            break;
    endswitch;
?>
<th class=\"col-actions\" <?php if (!empty(\$tooltip)): ?> data-toggle=\"tooltip\" title=\"\" data-placement=\"top\" data-original-title=\"<?php echo \$view['translator']->trans(\$tooltip); ?>\"<?php endif; ?>>
    <div class=\"input-group input-group-sm\">
        <span class=\"input-group-addon\">
            <input type=\"checkbox\" id=\"customcheckbox-one0\" value=\"1\" data-toggle=\"checkall\" data-target=\"<?php echo \$target; ?>\">
        </span>

        <div class=\"input-group-btn\">
            <button type=\"button\" disabled class=\"btn btn-default btn-sm dropdown-toggle btn-nospin\" data-toggle=\"dropdown\">
                <i class=\"fa fa-angle-down \"></i>
            </button>
            <ul class=\"pull-<?php echo \$pull; ?> page-list-actions dropdown-menu\" role=\"menu\">
                <?php echo \$view['buttons']->renderButtons(); ?>
            </ul>
        </div>
    </div>
</th>
<?php elseif (empty(\$sessionVar)) : ?>
<th<?php echo (!empty(\$class)) ? ' class=\"'.\$class.'\"' : ''; ?>>
    <span><?php echo \$view['translator']->trans(\$text); ?></span>
</th>
<?php
else:
\$defaultOrder = (!empty(\$default)) ? \$orderBy : '';
\$order        = (!empty(\$order)) ? \$order : \$app->getSession()->get(\"mautic.{\$sessionVar}.orderby\", \$defaultOrder);
\$dir          = (!empty(\$dir)) ? \$dir : \$app->getSession()->get(\"mautic.{\$sessionVar}.orderbydir\", 'ASC');
\$filters      = (!empty(\$filters)) ? \$filters : \$app->getSession()->get(\"mautic.{\$sessionVar}.filters\", []);
\$tmpl         = (!empty(\$tmpl)) ? \$tmpl : 'list';
?>
<th<?php echo (!empty(\$class)) ? ' class=\"'.\$class.'\"' : ''; ?>>
    <div class=\"thead-filter\">
        <?php if (!empty(\$orderBy)): ?>
        <a href=\"javascript: void(0);\" onclick=\"Mautic.reorderTableData('<?php echo \$sessionVar; ?>','<?php echo \$orderBy; ?>','<?php echo \$tmpl; ?>','<?php echo \$target; ?>'<?php if (!empty(\$baseUrl)): ?>, '<?php echo \$baseUrl; ?>'<?php endif; ?>);\">
            <span><?php echo \$view['translator']->trans(\$text); ?></span>
            <?php if (\$order == \$orderBy): ?>
            <i class=\"fa fa-sort-amount-<?php echo strtolower(\$dir); ?>\"></i>
            <?php endif; ?>
        </a>
        <?php else: ?>
            <span><?php echo \$view['translator']->trans(\$text); ?></span>
        <?php endif; ?>

        <?php if (!empty(\$filterBy)): ?>
        <?php \$value = (isset(\$filters[\$filterBy])) ? \$filters[\$filterBy]['value'] : ''; ?>
        <div class=\"input-group input-group-sm\">
            <?php \$toggle = (!empty(\$dataToggle)) ? ' data-toggle=\"'.\$dataToggle.'\"' : ''; ?>
            <input type=\"text\" placeholder=\"<?php echo \$view['translator']->trans('mautic.core.form.thead.filter'); ?>\" autocomplete=\"false\" class=\"form-control input-sm\" value=\"<?php echo \$view->escape(\$value); ?>\"<?php echo \$toggle; ?> onchange=\"Mautic.filterTableData('<?php echo \$sessionVar; ?>','<?php echo \$filterBy; ?>',this.value,'<?php echo \$tmpl; ?>','<?php echo \$target; ?>'<?php if (!empty(\$baseUrl)): ?>, '<?php echo \$baseUrl; ?>'<?php endif; ?>);\" />
            <?php \$inputClass = (!empty(\$value)) ? 'fa-times' : 'fa-filter'; ?>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-default btn-xs\" onclick=\"Mautic.filterTableData('<?php echo \$sessionVar; ?>','<?php echo \$filterBy; ?>',<?php echo (!empty(\$value)) ? \"'',\" : 'mQuery(this).parent().prev().val(),'; ?>'<?php echo \$tmpl; ?>','<?php echo \$target; ?>'<?php if (!empty(\$baseUrl)): ?>, '<?php echo \$baseUrl; ?>'<?php endif; ?>);\">
                    <i class=\"fa fa-fw fa-lg <?php echo \$inputClass; ?>\"></i>
                </button>
            </span>
        </div>
        <?php endif; ?>
    </div>
</th>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Helper/tableheader.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/tableheader.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/tableheader.html.php");
    }
}
