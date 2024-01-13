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

/* @bundles/ReportBundle/Views/Report/list.html.php */
class __TwigTemplate_af1b2493b162b8087aa52567c37518c9cbbd49957cb264b2316f074b0adffa7e extends Template
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
    \$view->extend('MauticReportBundle:Report:index.html.php');
}
?>
<?php if (count(\$items)): ?>
    <div class=\"table-responsive panel-collapse pull out page-list\">
        <table class=\"table table-hover table-striped table-bordered report-list\" id=\"reportTable\">
            <thead>
            <tr>
                <?php
                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'checkall'        => 'true',
                        'target'          => '#reportTable',
                        'langVar'         => 'report.report',
                        'routeBase'       => 'report',
                        'templateButtons' => [
                            'delete' => \$permissions['report:reports:deleteown'] || \$permissions['report:reports:deleteother'],
                        ],
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'sessionVar' => 'report',
                        'orderBy'    => 'r.name',
                        'text'       => 'mautic.core.name',
                        'class'      => 'col-report-name',
                        'default'    => true,
                    ]
                );

                echo \$view->render(
                    'MauticCoreBundle:Helper:tableheader.html.php',
                    [
                        'sessionVar' => 'report',
                        'orderBy'    => 'r.id',
                        'text'       => 'mautic.core.id',
                        'class'      => 'col-report-id visible-md visible-lg',
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
                                    'edit' => \$security->hasEntityAccess(
                                        \$permissions['report:reports:editown'],
                                        \$permissions['report:reports:editother'],
                                        \$item->getCreatedBy()
                                    ),
                                    'clone'  => \$permissions['report:reports:create'],
                                    'delete' => \$security->hasEntityAccess(
                                        \$permissions['report:reports:deleteown'],
                                        \$permissions['report:reports:deleteother'],
                                        \$item->getCreatedBy()
                                    ),
                                ],
                                'routeBase'     => 'report',
                                'langVar'       => 'report.report',
                                'customButtons' => \$item->isScheduled() ? [] : [
                                    [
                                        'attr' => [
                                            'data-toggle' => 'ajaxmodal',
                                            'data-target' => '#AssetPreviewModal',
                                            'href'        => \$view['router']->path('mautic_report_schedule', ['reportId' => \$item->getId()]),
                                        ],
                                        'btnText'   => \$view['translator']->trans('mautic.report.export.and.send'),
                                        'iconClass' => 'fa fa-send-o',
                                    ],
                                ],
                            ]
                        );
                        ?>
                    </td>
                    <td>
                        <div>
                            <?php echo \$view->render(
                                'MauticCoreBundle:Helper:publishstatus_icon.html.php',
                                ['item' => \$item, 'model' => 'report.report']
                            ); ?>
                            <a href=\"<?php echo \$view['router']->path('mautic_report_view', ['objectId' => \$item->getId()]); ?>\" data-toggle=\"ajax\">
                                <?php echo \$view->escape(\$item->getName()); ?>
                            </a>
                        </div>
                        <?php if (\$description = \$item->getDescription()): ?>
                            <div class=\"text-muted mt-4\">
                                <small><?php echo \$view->escape(\$description); ?></small>
                            </div>
                        <?php endif; ?>
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
                    'totalItems' => \$totalItems,
                    'page'       => \$page,
                    'limit'      => \$limit,
                    'menuLinkId' => 'mautic_report_index',
                    'baseUrl'    => \$view['router']->path('mautic_report_index'),
                    'sessionVar' => 'report',
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
        return "@bundles/ReportBundle/Views/Report/list.html.php";
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
        return new Source("", "@bundles/ReportBundle/Views/Report/list.html.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Views/Report/list.html.php");
    }
}
