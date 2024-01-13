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

/* @bundles/DashboardBundle/Config/config.php */
class __TwigTemplate_767941ac287841aed68790559792c51db17f5993458566e3d13b047231fad467 extends Template
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

return [
    'routes' => [
        'main' => [
            'mautic_dashboard_index' => [
                'path'       => '/dashboard',
                'controller' => 'MauticDashboardBundle:Dashboard:index',
            ],
            'mautic_dashboard_widget' => [
                'path'       => '/dashboard/widget/{widgetId}',
                'controller' => 'MauticDashboardBundle:Dashboard:widget',
            ],
            'mautic_dashboard_action' => [
                'path'       => '/dashboard/{objectAction}/{objectId}',
                'controller' => 'MauticDashboardBundle:Dashboard:execute',
            ],
        ],
        'api' => [
            'mautic_widget_types' => [
                'path'       => '/data',
                'controller' => 'MauticDashboardBundle:Api\\WidgetApi:getTypes',
            ],
            'mautic_widget_data' => [
                'path'       => '/data/{type}',
                'controller' => 'MauticDashboardBundle:Api\\WidgetApi:getData',
            ],
        ],
    ],

    'menu' => [
        'main' => [
            'priority' => 100,
            'items'    => [
                'mautic.dashboard.menu.index' => [
                    'route'     => 'mautic_dashboard_index',
                    'iconClass' => 'fa-th-large',
                ],
            ],
        ],
    ],
    'services' => [
        'forms' => [
            'mautic.dashboard.form.type.widget' => [
                'class'     => 'Mautic\\DashboardBundle\\Form\\Type\\WidgetType',
                'arguments' => [
                    'event_dispatcher',
                    'mautic.security',
                ],
            ],
        ],
        'models' => [
            'mautic.dashboard.model.dashboard' => [
                'class'     => 'Mautic\\DashboardBundle\\Model\\DashboardModel',
                'arguments' => [
                    'mautic.helper.core_parameters',
                    'mautic.helper.paths',
                    'symfony.filesystem',
                ],
            ],
        ],
        'other' => [
            'mautic.dashboard.widget' => [
                'class'     => \\Mautic\\DashboardBundle\\Dashboard\\Widget::class,
                'arguments' => [
                    'mautic.dashboard.model.dashboard',
                    'mautic.helper.user',
                    'session',
                ],
            ],
        ],
    ],
    'parameters' => [
        'dashboard_import_dir'      => '%kernel.root_dir%/../media/dashboards',
        'dashboard_import_user_dir' => null,
    ],
];
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Config/config.php";
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
        return new Source("", "@bundles/DashboardBundle/Config/config.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Config/config.php");
    }
}
