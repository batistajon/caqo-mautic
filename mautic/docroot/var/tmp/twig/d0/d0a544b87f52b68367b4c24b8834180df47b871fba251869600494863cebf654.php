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

/* @bundles/SmsBundle/Views/Sms/list.html.php */
class __TwigTemplate_1eb5580057eb3925d107ed0663d247ec4c22bde116764a66d86b24e4972469af extends Template
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
    \$view->extend('MauticSmsBundle:Sms:index.html.php');
}

if (count(\$items)):

    ?>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-striped table-bordered sms-list\">
            <thead>
            <tr>
                <?php
                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'checkall'        => 'true',
                        'routeBase'       => 'sms',
                        'templateButtons' => [
                            'delete' => \$permissions['sms:smses:deleteown'] || \$permissions['sms:smses:deleteother'],
                        ],
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'sessionVar' => 'sms',
                        'orderBy'    => 'e.name',
                        'text'       => 'mautic.core.name',
                        'class'      => 'col-sms-name',
                        'default'    => true,
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'sessionVar' => 'sms',
                        'orderBy'    => 'c.title',
                        'text'       => 'mautic.core.category',
                        'class'      => 'visible-md visible-lg col-sms-category',
                    ]
                );
                ?>

                <th class=\"visible-sm visible-md visible-lg col-sms-stats\"><?php echo \$view['translator']->trans('mautic.core.stats'); ?></th>

                <?php
                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'sessionVar' => 'sms',
                        'orderBy'    => 'e.id',
                        'text'       => 'mautic.core.id',
                        'class'      => 'visible-md visible-lg col-sms-id',
                    ]
                );
                ?>
            </tr>
            </thead>
            <tbody>
            <?php
            /** @var \\Mautic\\SmsBundle\\Entity\\Sms \$item */
            foreach (\$items as \$item):
                \$type = \$item->getSmsType();
                ?>
                <tr>
                    <td>
                        <?php
                        \$edit = \$view['security']->hasEntityAccess(
                            \$permissions['sms:smses:editown'],
                            \$permissions['sms:smses:editother'],
                            \$item->getCreatedBy()
                        );
                        \$customButtons = [
                            [
                                'attr' => [
                                    'data-toggle' => 'ajaxmodal',
                                    'data-target' => '#MauticSharedModal',
                                    'data-header' => \$view['translator']->trans('mautic.sms.smses.header.preview'),
                                    'data-footer' => 'false',
                                    'href'        => \$view['router']->path(
                                        'mautic_sms_action',
                                        ['objectId' => \$item->getId(), 'objectAction' => 'preview']
                                    ),
                                ],
                                'btnText'   => \$view['translator']->trans('mautic.sms.preview'),
                                'iconClass' => 'fa fa-share',
                            ],
                        ];
                        echo \$view->render(
                            'MauticCoreBundle:Helper:list_actions.html.php',
                            [
                                'item'            => \$item,
                                'templateButtons' => [
                                    'edit' => \$view['security']->hasEntityAccess(
                                        \$permissions['sms:smses:editown'],
                                        \$permissions['sms:smses:editother'],
                                        \$item->getCreatedBy()
                                    ),
                                    'clone'  => \$permissions['sms:smses:create'],
                                    'delete' => \$view['security']->hasEntityAccess(
                                        \$permissions['sms:smses:deleteown'],
                                        \$permissions['sms:smses:deleteother'],
                                        \$item->getCreatedBy()
                                    ),
                                ],
                                'routeBase'     => 'sms',
                                'customButtons' => \$customButtons,
                            ]
                        );
                        ?>
                    </td>
                    <td>
                        <div>
                            <?php echo \$view->render(
                                'MauticCoreBundle:Helper:publishstatus_icon.html.php',
                                ['item' => \$item, 'model' => 'sms']
                            ); ?>
                            <a href=\"<?php echo \$view['router']->path(
                                'mautic_sms_action',
                                ['objectAction' => 'view', 'objectId' => \$item->getId()]
                            ); ?>\">
                                <?php echo \$item->getName(); ?>
                                <?php if ('list' == \$type): ?>
                                    <span data-toggle=\"tooltip\" title=\"<?php echo \$view['translator']->trans('mautic.sms.icon_tooltip.list_sms'); ?>\"><i class=\"fa fa-fw fa-pie-chart\"></i></span>
                                <?php endif; ?>
                            </a>
                        </div>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        <?php \$category = \$item->getCategory(); ?>
                        <?php \$catName  = (\$category) ? \$category->getTitle() : \$view['translator']->trans('mautic.core.form.uncategorized'); ?>
                        <?php \$color    = (\$category) ? '#'.\$category->getColor() : 'inherit'; ?>
                        <span style=\"white-space: nowrap;\"><span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: <?php echo \$color; ?>;\"> </span> <span><?php echo \$catName; ?></span></span>
                    </td>
                       <?php
                       echo \$view->render(
                           'MauticSmsBundle:Sms:list_stats.html.php',
                           [
                               'item' => \$item,
                           ]
                       );
                       ?>
                    <td class=\"visible-md visible-lg\"><?php echo \$item->getId(); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        <?php echo \$view->render(
            'MauticCoreBundle:Helper:pagination.html.php',
            [
                'totalItems' => \$totalItems,
                'page'       => \$page,
                'limit'      => \$limit,
                'baseUrl'    => \$view['router']->path('mautic_sms_index'),
                'sessionVar' => 'sms',
            ]
        ); ?>
    </div>
<?php elseif (!\$configured): ?>
    <?php echo \$view->render(
        'MauticCoreBundle:Helper:noresults.html.php',
        ['header' => 'mautic.sms.disabled', 'message' => 'mautic.sms.enable.in.configuration']
    ); ?>
<?php else: ?>
    <?php echo \$view->render('MauticCoreBundle:Helper:noresults.html.php', ['message' => 'mautic.sms.create.in.campaign.builder']); ?>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Views/Sms/list.html.php";
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
        return new Source("", "@bundles/SmsBundle/Views/Sms/list.html.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Views/Sms/list.html.php");
    }
}
