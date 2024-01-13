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

/* @bundles/CoreBundle/EventListener/DashboardSubscriber.php */
class __TwigTemplate_b0e6cbe8e3f978aad34e7431b90b4b52a35417e647effc8a6ce98fa622e21b3c extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\IconEvent;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\CoreBundle\\Model\\FormModel;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use Mautic\\DashboardBundle\\EventListener\\DashboardSubscriber as MainDashboardSubscriber;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class DashboardSubscriber extends MainDashboardSubscriber
{
    /**
     * Define the name of the bundle/category of the widget(s).
     *
     * @var string
     */
    protected \$bundle = 'core';

    /**
     * Define the widget(s).
     *
     * @var string
     */
    protected \$types = [
        'recent.activity' => [],
    ];

    /**
     * @var AuditLogModel
     */
    protected \$auditLogModel;

    /**
     * @var TranslatorInterface
     */
    protected \$translator;

    /**
     * @var RouterInterface
     */
    protected \$router;

    /**
     * @var CorePermissions
     */
    protected \$security;

    /**
     * @var EventDispatcherInterface
     */
    protected \$dispatcher;

    /**
     * @var ModelFactory
     */
    protected \$modelFactory;

    /**
     * @param AuditLogModel   \$router
     * @param CorePermissions \$dispatcher
     */
    public function __construct(
        AuditLogModel \$auditLogModel,
        TranslatorInterface \$translator,
        RouterInterface \$router,
        CorePermissions \$security,
        EventDispatcherInterface \$dispatcher,
        ModelFactory \$modelFactory
    ) {
        \$this->auditLogModel = \$auditLogModel;
        \$this->translator    = \$translator;
        \$this->router        = \$router;
        \$this->security      = \$security;
        \$this->dispatcher    = \$dispatcher;
        \$this->modelFactory  = \$modelFactory;
    }

    /**
     * Set a widget detail when needed.
     */
    public function onWidgetDetailGenerate(WidgetDetailEvent \$event)
    {
        if ('recent.activity' == \$event->getType()) {
            if (!\$event->isCached()) {
                \$height = \$event->getWidget()->getHeight();
                \$limit  = round((\$height - 80) / 75);
                \$logs   = \$this->auditLogModel->getLogForObject(null, null, null, \$limit);

                // Get names of log's items
                foreach (\$logs as \$key => &\$log) {
                    if (!empty(\$log['bundle']) && !empty(\$log['object']) && !empty(\$log['objectId'])) {
                        try {
                            \$model = \$this->modelFactory->getModel(\$log['bundle'].'.'.\$log['object']);
                            \$item  = \$model->getEntity(\$log['objectId']);
                            if (null === \$item) {
                                \$log['objectName'] = \$log['object'].'-'.\$log['objectId'];
                            } elseif (\$model instanceof FormModel && method_exists(\$item, \$model->getNameGetter())) {
                                \$log['objectName'] = \$item->{\$model->getNameGetter()}();

                                if ('lead' === \$log['bundle'] && 'mautic.lead.lead.anonymous' === \$log['objectName']) {
                                    \$log['objectName'] = \$this->translator->trans('mautic.lead.lead.anonymous');
                                }
                            } else {
                                \$log['objectName'] = '';
                            }

                            \$routeName = 'mautic_'.\$log['bundle'].'_action';
                            if (null !== \$item && null !== \$this->router->getRouteCollection()->get(\$routeName)) {
                                \$log['route'] = \$this->router->generate(
                                    'mautic_'.\$log['bundle'].'_action',
                                    ['objectAction' => 'view', 'objectId' => \$log['objectId']]
                                );
                            } else {
                                \$log['route'] = false;
                            }
                        } catch (\\Exception \$e) {
                            unset(\$logs[\$key]);
                        }
                    }
                }

                \$iconEvent = new IconEvent(\$this->security);
                \$this->dispatcher->dispatch(CoreEvents::FETCH_ICONS, \$iconEvent);
                \$event->setTemplateData(['logs' => \$logs, 'icons' => \$iconEvent->getIcons()]);
            }

            \$event->setTemplate('MauticDashboardBundle:Dashboard:recentactivity.html.php');
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
        return "@bundles/CoreBundle/EventListener/DashboardSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/DashboardSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/EventListener/DashboardSubscriber.php");
    }
}
