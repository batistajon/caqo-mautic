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

/* @bundles/EmailBundle/EventListener/DashboardBestHoursSubscriber.php */
class __TwigTemplate_b009f9efa7480f7c8d25c4cff744fc2e12e9910723dc4991e200f9e61676c65e extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\ArrayHelper;
use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use Mautic\\DashboardBundle\\EventListener\\DashboardSubscriber as MainDashboardSubscriber;
use Mautic\\EmailBundle\\Form\\Type\\DashboardBestHoursWidgetType;
use Mautic\\EmailBundle\\Model\\EmailModel;

class DashboardBestHoursSubscriber extends MainDashboardSubscriber
{
    /**
     * Define the name of the bundle/category of the widget(s).
     *
     * @var string
     */
    protected \$bundle = 'email';

    /**
     * Define the widget(s).
     *
     * @var string
     */
    protected \$types = [
        'emails.best.hours' => [
            'formAlias' => DashboardBestHoursWidgetType::class,
        ],
    ];

    /**
     * Define permissions to see those widgets.
     *
     * @var array
     */
    protected \$permissions = [
        'email:emails:viewown',
        'email:emails:viewother',
    ];

    /**
     * @var EmailModel
     */
    protected \$emailModel;

    /**
     * DashboardSubscriber constructor.
     */
    public function __construct(EmailModel \$emailModel)
    {
        \$this->emailModel = \$emailModel;
    }

    /**
     * Set a widget detail when needed.
     */
    public function onWidgetDetailGenerate(WidgetDetailEvent \$event)
    {
        \$this->checkPermissions(\$event);
        \$canViewOthers = \$event->hasPermission('email:emails:viewother');

        if ('emails.best.hours' == \$event->getType()) {
            \$widget     = \$event->getWidget();
            \$params     = \$widget->getParams();
            \$filterKeys = ['companyId', 'campaignId', 'segmentId'];

            if (!\$event->isCached()) {
                \$event->setTemplateData([
                    'chartType'   => 'bar',
                    'chartHeight' => \$widget->getHeight() - 80,
                    'chartData'   => \$this->emailModel->getBestHours(
                        'date_read',
                        \$params['dateFrom'],
                        \$params['dateTo'],
                        ArrayHelper::select(\$filterKeys, \$params),
                        \$canViewOthers,
                        \$params['timeFormat']
                    ),
                ]);
            }

            \$event->setTemplate('MauticCoreBundle:Helper:chart.html.php');
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
        return "@bundles/EmailBundle/EventListener/DashboardBestHoursSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/DashboardBestHoursSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/EventListener/DashboardBestHoursSubscriber.php");
    }
}
