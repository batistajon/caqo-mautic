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

/* @bundles/ReportBundle/EventListener/DashboardSubscriber.php */
class __TwigTemplate_a3d33f1e9d6c0f773351682bdb9ddfe873b0ec01db8d5d2abbd54f45f40fa10a extends Template
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

namespace Mautic\\ReportBundle\\EventListener;

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use Mautic\\DashboardBundle\\EventListener\\DashboardSubscriber as MainDashboardSubscriber;
use Mautic\\ReportBundle\\Form\\Type\\ReportWidgetType;
use Mautic\\ReportBundle\\Model\\ReportModel;

class DashboardSubscriber extends MainDashboardSubscriber
{
    /**
     * @var ReportModel
     */
    protected \$reportModel;

    /**
     * @var CorePermissions
     */
    protected \$security;

    /**
     * Define the name of the bundle/category of the widget(s).
     *
     * @var string
     */
    protected \$bundle = 'report';

    /**
     * Define the widget(s).
     *
     * @var string
     */
    protected \$types = [
        'report' => [
            'formAlias' => ReportWidgetType::class,
        ],
    ];

    /**
     * Define permissions to see those widgets.
     *
     * @var array
     */
    protected \$permissions = [
        'report:reports:viewown',
        'report:reports:viewother',
    ];

    public function __construct(ReportModel \$reportModel, CorePermissions \$security)
    {
        \$this->reportModel = \$reportModel;
        \$this->security    = \$security;
    }

    /**
     * Set a widget detail when needed.
     */
    public function onWidgetDetailGenerate(WidgetDetailEvent \$event)
    {
        \$this->checkPermissions(\$event);

        if ('report' == \$event->getType()) {
            \$widget = \$event->getWidget();
            \$params = \$widget->getParams();
            if (!\$event->isCached()) {
                list(\$reportId, \$graph) = explode(':', \$params['graph']);
                \$report                 = \$this->reportModel->getEntity(\$reportId);

                if (\$report && \$this->security->hasEntityAccess('report:reports:viewown', 'report:reports:viewother', \$report->getCreatedBy())) {
                    \$reportData = \$this->reportModel->getReportData(
                        \$report,
                        null,
                        [
                            'ignoreTableData' => true,
                            'graphName'       => \$graph,
                            'dateFrom'        => \$params['dateFrom'],
                            'dateTo'          => \$params['dateTo'],
                        ]
                    );

                    if (isset(\$reportData['graphs'][\$graph])) {
                        \$graphData = \$reportData['graphs'][\$graph];
                        if (!isset(\$graphData['data']['data'])) {
                            \$graphData['data']['data'] = \$graphData['data'];
                        }
                        \$event->setTemplateData(
                            [
                                'chartData'   => \$graphData['data'],
                                'chartType'   => \$graphData['type'],
                                'chartHeight' => \$widget->getHeight() - 90,
                                'reportId'    => \$report->getId(),
                                'dateFrom'    => \$params['dateFrom'],
                                'dateTo'      => \$params['dateTo'],
                            ]
                        );
                    }
                }
            }
            \$event->setTemplate('MauticReportBundle:SubscribedEvents\\Dashboard:widget.html.php');
            \$event->stopPropagation();
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/EventListener/DashboardSubscriber.php";
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
        return new Source("", "@bundles/ReportBundle/EventListener/DashboardSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/EventListener/DashboardSubscriber.php");
    }
}
