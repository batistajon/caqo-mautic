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

/* @bundles/NotificationBundle/Views/Notification/list.html.php */
class __TwigTemplate_c28cb579080c8de7de34f9dbc7b6923100a196e2281fa424e85a8a992b7e893a extends Template
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
    \$view->extend('MauticNotificationBundle:Notification:index.html.php');
}

if (count(\$items)):

    ?>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-striped table-bordered notification-list\">
            <thead>
            <tr>
                <?php
                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'checkall'        => 'true',
                        'routeBase'       => 'notification',
                        'templateButtons' => [
                            'delete' => \$permissions['notification:notifications:deleteown']
                                || \$permissions['notification:notifications:deleteother'],
                        ],
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'sessionVar' => 'notification',
                        'orderBy'    => 'e.name',
                        'text'       => 'mautic.core.name',
                        'class'      => 'col-notification-name',
                        'default'    => true,
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'sessionVar' => 'notification',
                        'orderBy'    => 'c.title',
                        'text'       => 'mautic.core.category',
                        'class'      => 'visible-md visible-lg col-notification-category',
                    ]
                );
                ?>

                <th class=\"visible-sm visible-md visible-lg col-notification-stats\"><?php echo \$view['translator']->trans(
                        'mautic.core.stats'
                    ); ?></th>

                <?php
                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'sessionVar' => 'notification',
                        'orderBy'    => 'e.id',
                        'text'       => 'mautic.core.id',
                        'class'      => 'visible-md visible-lg col-notification-id',
                    ]
                );
                ?>
            </tr>
            </thead>
            <tbody>
            <?php
            /** @var \\Mautic\\NotificationBundle\\Entity\\Notification \$item */
            foreach (\$items as \$item):
                \$type = \$item->getNotificationType();
                ?>
                <tr>
                    <td>
                        <?php
                        \$edit = \$view['security']->hasEntityAccess(
                            \$permissions['notification:notifications:editown'],
                            \$permissions['notification:notifications:editother'],
                            \$item->getCreatedBy()
                        );
                        \$customButtons = [
                            [
                                'attr' => [
                                    'data-toggle' => 'ajaxmodal',
                                    'data-target' => '#MauticSharedModal',
                                    'data-header' => \$view['translator']->trans('mautic.notification.notification.header.preview'),
                                    'data-footer' => 'false',
                                    'href'        => \$view['router']->path(
                                        'mautic_notification_action',
                                        ['objectId' => \$item->getId(), 'objectAction' => 'preview']
                                    ),
                                ],
                                'btnText'   => \$view['translator']->trans('mautic.notification.preview'),
                                'iconClass' => 'fa fa-share',
                            ],
                        ];
                        echo \$view->render(
                            'MauticCoreBundle:Helper:list_actions.html.php',
                            [
                                'item'            => \$item,
                                'templateButtons' => [
                                    'edit'   => \$edit,
                                    'delete' => \$view['security']->hasEntityAccess(
                                        \$permissions['notification:notifications:deleteown'],
                                        \$permissions['notification:notifications:deleteother'],
                                        \$item->getCreatedBy()
                                    ),
                                ],
                                'routeBase'     => 'notification',
                                'customButtons' => \$customButtons,
                            ]
                        );
                        ?>
                    </td>
                    <td>
                        <div>
                            <?php if ('template' == \$type): ?>
                                <?php echo \$view->render(
                                    'MauticCoreBundle:Helper:publishstatus_icon.html.php',
                                    ['item' => \$item, 'model' => 'notification']
                                ); ?>
                            <?php else: ?>
                                <i class=\"fa fa-fw fa-lg fa-toggle-on text-muted disabled\"></i>
                            <?php endif; ?>
                            <a href=\"<?php echo \$view['router']->path(
                                'mautic_notification_action',
                                ['objectAction' => 'view', 'objectId' => \$item->getId()]
                            ); ?>\">
                                <?php echo \$item->getName(); ?>
                                <?php if ('list' == \$type): ?>
                                    <span data-toggle=\"tooltip\" title=\"<?php echo \$view['translator']->trans(
                                        'mautic.notification.icon_tooltip.list_notification'
                                    ); ?>\"><i class=\"fa fa-fw fa-list\"></i></span>
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
                    <td class=\"visible-sm visible-md visible-lg col-stats\">
                        <span class=\"mt-xs label label-warning has-click-event clickable-stat\"
                              data-toggle=\"tooltip\"
                              title=\"<?php echo \$view['translator']->trans('mautic.channel.stat.leadcount.tooltip'); ?>\">
                            <a href=\"<?php echo \$view['router']->path(
                                'mautic_contact_index',
                                ['search' => \$view['translator']->trans('mautic.lead.lead.searchcommand.web_sent').':'.\$item->getId()]
                            ); ?>\"><?php echo \$view['translator']->trans(
                                    'mautic.notification.stat.sentcount',
                                    ['%count%' => \$item->getSentCount(true)]
                                ); ?></a>
                        </span>
                    </td>
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
                'baseUrl'    => \$view['router']->path('mautic_notification_index'),
                'sessionVar' => 'notification',
            ]
        ); ?>
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
        return "@bundles/NotificationBundle/Views/Notification/list.html.php";
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
        return new Source("", "@bundles/NotificationBundle/Views/Notification/list.html.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Views/Notification/list.html.php");
    }
}
