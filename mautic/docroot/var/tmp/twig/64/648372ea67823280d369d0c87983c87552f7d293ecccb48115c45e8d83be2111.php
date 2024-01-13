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

/* @bundles/ReportBundle/Views/Report/details.html.php */
class __TwigTemplate_c7085a79d933729bb745333ccbcda8e497fd98dae0b9a013f09a102b0458c51a extends Template
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

use PhpOffice\\PhpSpreadsheet\\Spreadsheet;

\$header = \$view['translator']->trans(
    'mautic.report.report.header.view',
    ['%name%' => \$view->escape(\$view['translator']->trans(\$report->getName()))]
);

if ('index' == \$tmpl) {
    \$showDynamicFilters  = (true === !empty(\$report->getSettings()['showDynamicFilters']));
    \$hideDateRangeFilter = (true === !empty(\$report->getSettings()['hideDateRangeFilter']));

    \$view->extend('MauticCoreBundle:Default:content.html.php');
    \$view['slots']->set('mauticContent', 'report');

    \$view['slots']->set('headerTitle', \$header);

    \$buttons = [];
    if (!empty(\$data) || !empty(\$graphs)) {
        \$buttons[] = [
            'attr' => [
                'target'      => '_new',
                'data-toggle' => '',
                'class'       => 'btn btn-default btn-nospin',
                'href'        => \$view['router']->path(
                    'mautic_report_export',
                    ['objectId' => \$report->getId(), 'format' => 'html']
                ),
            ],
            'btnText'   => \$view['translator']->trans('mautic.form.result.export.html'),
            'iconClass' => 'fa fa-file-code-o',
        ];

        if (!empty(\$data)) {
            \$buttons[] = [
                'attr' => [
                    'data-toggle' => 'download',
                    'class'       => 'btn btn-default btn-nospin',
                    'href'        => \$view['router']->path(
                        'mautic_report_export',
                        ['objectId' => \$report->getId(), 'format' => 'csv']
                    ),
                ],
                'btnText'   => \$view['translator']->trans('mautic.form.result.export.csv'),
                'iconClass' => 'fa fa-file-text-o',
            ];

            if (class_exists(Spreadsheet::class)) {
                \$buttons[] = [
                    'attr' => [
                        'data-toggle' => 'download',
                        'class'       => 'btn btn-default btn-nospin',
                        'href'        => \$view['router']->path(
                            'mautic_report_export',
                            ['objectId' => \$report->getId(), 'format' => 'xlsx']
                        ),
                    ],
                    'btnText'   => \$view['translator']->trans('mautic.form.result.export.xlsx'),
                    'iconClass' => 'fa fa-file-excel-o',
                ];
            }
        }
    }

    \$view['slots']->set(
        'actions',
        \$view->render(
            'MauticCoreBundle:Helper:page_actions.html.php',
            [
                'item'            => \$report,
                'templateButtons' => [
                    'edit' => \$view['security']->hasEntityAccess(
                        \$permissions['report:reports:editown'],
                        \$permissions['report:reports:editother'],
                        \$report->getCreatedBy()
                    ),
                    'delete' => \$view['security']->hasEntityAccess(
                        \$permissions['report:reports:deleteown'],
                        \$permissions['report:reports:deleteother'],
                        \$report->getCreatedBy()
                    ),
                    'close' => \$view['security']->hasEntityAccess(
                        \$permissions['report:reports:viewown'],
                        \$permissions['report:reports:viewother'],
                        \$report->getCreatedBy()
                    ),
                ],
                'routeBase'         => 'report',
                'langVar'           => 'report.report',
                'customButtons'     => \$buttons,
            ]
        )
    );

    \$view['slots']->set(
        'publishStatus',
        \$view->render('MauticCoreBundle:Helper:publishstatus_badge.html.php', ['entity' => \$report])
    );
}
?>

<!-- report detail header -->
<?php if (\$report->getDescription()): ?>
<div class=\"pr-md pl-md pt-lg pb-lg\">
    <div class=\"text-white dark-sm mb-0\"><?php echo \$view->escape(\$report->getDescription()); ?></div>
</div>
<?php endif; ?>
<!--/ report detail header -->
<!-- report detail collapseable -->
<div id=\"report-shelves\" class=\"mb-5\" aria-multiselectable=\"true\">
    <div class=\"collapse\" id=\"report-details\">
        <div class=\"pr-md pl-md pb-md\">
            <div class=\"panel shd-none mb-0\">
                <table class=\"table table-bordered table-striped mb-0\">
                    <tbody>
                    <?php echo \$view->render(
                        'MauticCoreBundle:Helper:details.html.php',
                        ['entity' => \$report]
                    ); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"collapse<?php if (\$showDynamicFilters): ?> in<?php endif; ?>\" id=\"report-filters\">
        <div class=\"pr-md pl-md pb-md\">
            <div class=\"panel shd-none mb-0 pa-lg\">
                <div class=\"row\">
                    <div class=\"col-sm-12 mb-10<?php if (\$hideDateRangeFilter):?> hide<?php endif; ?>\">
                        <?php echo \$view->render('MauticCoreBundle:Helper:graph_dateselect.html.php', ['dateRangeForm' => \$dateRangeForm]); ?>
                    </div>
                    <?php \$view['form']->start(\$dynamicFilterForm); ?>
                    <?php foreach (\$dynamicFilterForm->children as \$filter): ?>
                    <?php if ('hidden' == \$filter->vars['block_prefixes'][1]) {
                        continue;
                    } ?>
                    <div class=\"col-sm-4\">
                        <?php echo \$view['form']->row(\$filter); ?>
                    </div>
                    <?php endforeach; ?>
                    <?php \$view['form']->end(\$dynamicFilterForm); ?>
                </div>
            </div>
        </div>
    </div>
    <!--/ report detail collapseable -->

    <div class=\"bg-auto bg-dark-xs\">
        <!-- report detail collapseable toggler -->
        <div class=\"hr-expand nm\">
            <a href=\"#report-details\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"report-details\">
                <span class=\"caret\"></span> <?php echo \$view['translator']->trans('mautic.core.details'); ?>
            </a>
            <a href=\"#report-filters\" class=\"arrow text-muted <?php if (!\$showDynamicFilters): ?>collapsed<?php endif; ?>\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"report-filters\">
                <span class=\"caret\"></span> <?php echo \$view['translator']->trans('mautic.core.filters'); ?>
            </a>
        </div>
        <!--/ report detail collapseable toggler -->
    </div>
</div>

<div class=\"report-content\">
    <?php \$view['slots']->output('_content'); ?>
</div>
<?php if (!empty(\$debug) && isset(\$debug['count_query'])): ?>
<div class=\"well\">
    <h4>Debug: <?php echo \$debug['query_time']; ?></h4>
    <div><?php echo \$debug['count_query']; ?></div>
    <br />
    <div><?php echo \$debug['query']; ?></div>
</div>
<?php endif; ?>
<!--/ end: box layout -->
<input type=\"hidden\" name=\"entityId\" id=\"entityId\" value=\"<?php echo \$view->escape(\$report->getId()); ?>\"/>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Views/Report/details.html.php";
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
        return new Source("", "@bundles/ReportBundle/Views/Report/details.html.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Views/Report/details.html.php");
    }
}
