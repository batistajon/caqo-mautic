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

/* @bundles/AssetBundle/EventListener/DashboardSubscriber.php */
class __TwigTemplate_f7f81780bf53c0389d9bce77412fd33c1c8d65c3d982e971e1299ad4b0c9fb88 extends Template
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

namespace Mautic\\AssetBundle\\EventListener;

use Mautic\\AssetBundle\\Model\\AssetModel;
use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use Mautic\\DashboardBundle\\EventListener\\DashboardSubscriber as MainDashboardSubscriber;
use Symfony\\Component\\Routing\\RouterInterface;

class DashboardSubscriber extends MainDashboardSubscriber
{
    /**
     * Define the name of the bundle/category of the widget(s).
     *
     * @var string
     */
    protected \$bundle = 'asset';

    /**
     * Define the widget(s).
     *
     * @var array
     */
    protected \$types = [
        'asset.downloads.in.time'        => [],
        'unique.vs.repetitive.downloads' => [],
        'popular.assets'                 => [],
        'created.assets'                 => [],
    ];

    /**
     * Define permissions to see those widgets.
     *
     * @var array
     */
    protected \$permissions = [
        'asset:assets:viewown',
        'asset:assets:viewother',
    ];

    /**
     * @var AssetModel
     */
    protected \$assetModel;

    /**
     * @var RouterInterface
     */
    protected \$router;

    public function __construct(AssetModel \$assetModel, RouterInterface \$router)
    {
        \$this->assetModel = \$assetModel;
        \$this->router     = \$router;
    }

    /**
     * Set a widget detail when needed.
     */
    public function onWidgetDetailGenerate(WidgetDetailEvent \$event)
    {
        \$this->checkPermissions(\$event);
        \$canViewOthers = \$event->hasPermission('asset:assets:viewother');

        if ('asset.downloads.in.time' == \$event->getType()) {
            \$widget = \$event->getWidget();
            \$params = \$widget->getParams();

            if (!\$event->isCached()) {
                \$event->setTemplateData([
                    'chartType'   => 'line',
                    'chartHeight' => \$widget->getHeight() - 80,
                    'chartData'   => \$this->assetModel->getDownloadsLineChartData(
                        \$params['timeUnit'],
                        \$params['dateFrom'],
                        \$params['dateTo'],
                        \$params['dateFormat'],
                        \$canViewOthers
                    ),
                ]);
            }

            \$event->setTemplate('MauticCoreBundle:Helper:chart.html.php');
            \$event->stopPropagation();
        }

        if ('unique.vs.repetitive.downloads' == \$event->getType()) {
            if (!\$event->isCached()) {
                \$params = \$event->getWidget()->getParams();
                \$event->setTemplateData([
                    'chartType'   => 'pie',
                    'chartHeight' => \$event->getWidget()->getHeight() - 80,
                    'chartData'   => \$this->assetModel->getUniqueVsRepetitivePieChartData(\$params['dateFrom'], \$params['dateTo'], \$canViewOthers),
                ]);
            }

            \$event->setTemplate('MauticCoreBundle:Helper:chart.html.php');
            \$event->stopPropagation();
        }

        if ('popular.assets' == \$event->getType()) {
            if (!\$event->isCached()) {
                \$params = \$event->getWidget()->getParams();

                if (empty(\$params['limit'])) {
                    // Count the pages limit from the widget height
                    \$limit = round(((\$event->getWidget()->getHeight() - 80) / 35) - 1);
                } else {
                    \$limit = \$params['limit'];
                }

                \$assets = \$this->assetModel->getPopularAssets(\$limit, \$params['dateFrom'], \$params['dateTo'], \$canViewOthers);
                \$items  = [];

                // Build table rows with links
                if (\$assets) {
                    foreach (\$assets as &\$asset) {
                        \$assetUrl = \$this->router->generate('mautic_asset_action', ['objectAction' => 'view', 'objectId' => \$asset['id']]);
                        \$row      = [
                            [
                                'value' => \$asset['title'],
                                'type'  => 'link',
                                'link'  => \$assetUrl,
                            ],
                            [
                                'value' => \$asset['download_count'],
                            ],
                        ];
                        \$items[] = \$row;
                    }
                }

                \$event->setTemplateData([
                    'headItems' => [
                        'mautic.dashboard.label.title',
                        'mautic.dashboard.label.downloads',
                    ],
                    'bodyItems' => \$items,
                    'raw'       => \$assets,
                ]);
            }

            \$event->setTemplate('MauticCoreBundle:Helper:table.html.php');
            \$event->stopPropagation();
        }

        if ('created.assets' == \$event->getType()) {
            if (!\$event->isCached()) {
                \$params = \$event->getWidget()->getParams();

                if (empty(\$params['limit'])) {
                    // Count the assets limit from the widget height
                    \$limit = round(((\$event->getWidget()->getHeight() - 80) / 35) - 1);
                } else {
                    \$limit = \$params['limit'];
                }

                \$assets = \$this->assetModel->getAssetList(\$limit, \$params['dateFrom'], \$params['dateTo'], [], ['canViewOthers' => \$canViewOthers]);
                \$items  = [];

                // Build table rows with links
                if (\$assets) {
                    foreach (\$assets as &\$asset) {
                        \$assetUrl = \$this->router->generate('mautic_asset_action', ['objectAction' => 'view', 'objectId' => \$asset['id']]);
                        \$row      = [
                            [
                                'value' => \$asset['name'],
                                'type'  => 'link',
                                'link'  => \$assetUrl,
                            ],
                        ];
                        \$items[] = \$row;
                    }
                }

                \$event->setTemplateData([
                    'headItems' => [
                        'mautic.dashboard.label.title',
                    ],
                    'bodyItems' => \$items,
                    'raw'       => \$assets,
                ]);
            }

            \$event->setTemplate('MauticCoreBundle:Helper:table.html.php');
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
        return "@bundles/AssetBundle/EventListener/DashboardSubscriber.php";
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
        return new Source("", "@bundles/AssetBundle/EventListener/DashboardSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/EventListener/DashboardSubscriber.php");
    }
}
