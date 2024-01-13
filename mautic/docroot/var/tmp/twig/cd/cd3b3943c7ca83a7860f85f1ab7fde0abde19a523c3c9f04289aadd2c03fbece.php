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

/* @bundles/DynamicContentBundle/Views/DynamicContent/list.html.php */
class __TwigTemplate_6e4d98e4ad337b8c6eef622fa7a4c2815fb49690fd8ee07db6d90c57899b46f6 extends Template
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
if ('index' == \$tmpl) {
    \$view->extend('MauticDynamicContentBundle:DynamicContent:index.html.php');
}
/* @var \\Mautic\\DynamicContentBundle\\Entity\\DynamicContent[] \$items */
?>

<?php if (count(\$items)): ?>
    <div class=\"table-responsive page-list\">
        <table class=\"table table-hover table-striped table-bordered dwctable-list\" id=\"dwcTable\">
            <thead>
            <tr>
                <?php
                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'checkall'        => 'true',
                        'target'          => '#dwcTable',
                        'routeBase'       => 'dynamicContent',
                        'templateButtons' => [
                            'delete' => \$permissions['dynamiccontent:dynamiccontents:deleteown']
                                || \$permissions['dynamiccontent:dynamiccontents:deleteother'],
                        ],
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'sessionVar' => 'dynamicContent',
                        'orderBy'    => 'e.name',
                        'text'       => 'mautic.core.name',
                        'class'      => 'col-dwc-name',
                        'default'    => true,
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'sessionVar' => 'dynamicContent',
                        'orderBy'    => 'e.slotName',
                        'text'       => 'mautic.dynamicContent.label.slot_name',
                        'class'      => 'col-dwc-slotname visible-md visible-lg',
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'sessionVar' => 'dynamicContent',
                        'orderBy'    => 'c.title',
                        'text'       => 'mautic.core.category',
                        'class'      => 'col-dwc-category visible-md visible-lg',
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'sessionVar' => 'dynamicContent',
                        'orderBy'    => 'e.id',
                        'text'       => 'mautic.core.id',
                        'class'      => 'col-dwc-id visible-md visible-lg',
                    ]
                );
                ?>
            </tr>
            </thead>
            <tbody>
            <?php foreach (\$items as \$item): ?>
                <tr>
                    <td>
                        <?php
                        echo \$view->render(
                            'MauticCoreBundle:Helper:list_actions.html.php',
                            [
                                'item'            => \$item,
                                'templateButtons' => [
                                    'edit' => \$view['security']->hasEntityAccess(
                                        \$permissions['dynamiccontent:dynamiccontents:editown'],
                                        \$permissions['dynamiccontent:dynamiccontents:editother'],
                                        \$item->getCreatedBy()
                                    ),
                                    'clone'  => \$permissions['dynamiccontent:dynamiccontents:create'],
                                    'delete' => \$view['security']->hasEntityAccess(
                                        \$permissions['dynamiccontent:dynamiccontents:deleteown'],
                                        \$permissions['dynamiccontent:dynamiccontents:deleteother'],
                                        \$item->getCreatedBy()
                                    ),
                                ],
                                'routeBase'  => 'dynamicContent',
                                'nameGetter' => 'getName',
                            ]
                        );
                        ?>
                    </td>
                    <td>
                        <?php echo \$view->render(
                            'MauticCoreBundle:Helper:publishstatus_icon.html.php',
                            ['item' => \$item, 'model' => 'dynamicContent']
                        ); ?>
                        <a href=\"<?php echo \$view['router']->url(
                            'mautic_dynamicContent_action',
                            ['objectAction' => 'view', 'objectId' => \$item->getId()]
                        ); ?>\" data-toggle=\"ajax\">
                            <?php echo \$item->getName(); ?>
                            <?php
                            \$hasVariants     = \$item->isVariant();
                            \$hasTranslations = \$item->isTranslation();
                            \$isFilterBased   = !\$item->getIsCampaignBased();

                            if (\$hasVariants || \$hasTranslations || \$isFilterBased): ?>
                                <span>
                                <?php if (\$hasVariants): ?>
                                    <span data-toggle=\"tooltip\" title=\"<?php echo \$view['translator']->trans('mautic.core.icon_tooltip.ab_test'); ?>\">
                                            <i class=\"fa fa-fw fa-sitemap\"></i>
                                        </span>
                                <?php endif; ?>
                                    <?php if (\$hasTranslations): ?>
                                        <span data-toggle=\"tooltip\" title=\"<?php echo \$view['translator']->trans(
                                            'mautic.core.icon_tooltip.translation'
                                        ); ?>\">
                                            <i class=\"fa fa-fw fa-language\"></i>
                                        </span>
                                    <?php endif; ?>
                                 </span>
                            <?php endif; ?>
                        </a>
                    </td>
                    <td class=\"visible-md visible-lg\"><?php echo \$item->getSlotName(); ?></td>
                    <td class=\"visible-md visible-lg\">
                        <?php \$category = \$item->getCategory(); ?>
                        <?php \$catName  = (\$category) ? \$category->getTitle() : \$view['translator']->trans('mautic.core.form.uncategorized'); ?>
                        <?php \$color    = (\$category) ? '#'.\$category->getColor() : 'inherit'; ?>
                        <span style=\"white-space: nowrap;\"><span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: <?php echo \$color; ?>;\"> </span> <span><?php echo \$catName; ?></span></span>
                    </td>
                    <td class=\"visible-md visible-lg\"><?php echo \$item->getId(); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class=\"panel-footer\">
            <?php echo \$view->render(
                'MauticCoreBundle:Helper:pagination.html.php',
                [
                    'totalItems' => count(\$items),
                    'page'       => \$page,
                    'limit'      => \$limit,
                    'menuLinkId' => 'mautic_dynamicContent_index',
                    'baseUrl'    => \$view['router']->url('mautic_dynamicContent_index'),
                    'sessionVar' => 'dynamicContent',
                ]
            ); ?>
        </div>
    </div>
<?php else: ?>
    <?php echo \$view->render('MauticCoreBundle:Helper:noresults.html.php'); ?>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/Views/DynamicContent/list.html.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Views/DynamicContent/list.html.php", "/var/www/html/mautic/docroot/app/bundles/DynamicContentBundle/Views/DynamicContent/list.html.php");
    }
}
