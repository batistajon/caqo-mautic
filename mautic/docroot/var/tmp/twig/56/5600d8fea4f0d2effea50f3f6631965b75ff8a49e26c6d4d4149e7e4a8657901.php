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

/* @bundles/DashboardBundle/EventListener/DashboardSubscriber.php */
class __TwigTemplate_6fad69b32e8aaa2363bb747a1c430d3b090b58d5a90bcbfde5c3d72792731066 extends Template
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

namespace Mautic\\DashboardBundle\\EventListener;

use Mautic\\DashboardBundle\\DashboardEvents;
use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use Mautic\\DashboardBundle\\Event\\WidgetFormEvent;
use Mautic\\DashboardBundle\\Event\\WidgetTypeListEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class DashboardSubscriber implements EventSubscriberInterface
{
    /**
     * Define the name of the bundle/category of the widget(s).
     *
     * @var string
     */
    protected \$bundle = 'others';

    /**
     * Define the widget(s).
     *
     * @var array
     */
    protected \$types = [];

    /**
     * Define permissions to see those widgets.
     *
     * @var array
     */
    protected \$permissions = [];

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            DashboardEvents::DASHBOARD_ON_MODULE_LIST_GENERATE   => ['onWidgetListGenerate', 0],
            DashboardEvents::DASHBOARD_ON_MODULE_FORM_GENERATE   => ['onWidgetFormGenerate', 0],
            DashboardEvents::DASHBOARD_ON_MODULE_DETAIL_GENERATE => ['onWidgetDetailGenerate', 0],
        ];
    }

    /**
     * Adds widget new widget types to the list of available widget types.
     */
    public function onWidgetListGenerate(WidgetTypeListEvent \$event)
    {
        if (\$this->permissions && !\$event->hasPermissions(\$this->permissions)) {
            return;
        }

        \$widgetTypes = array_keys(\$this->types);

        foreach (\$widgetTypes as \$type) {
            \$event->addType(\$type, \$this->bundle);
        }
    }

    /**
     * Set a widget edit form when needed.
     */
    public function onWidgetFormGenerate(WidgetFormEvent \$event)
    {
        if (isset(\$this->types[\$event->getType()])) {
            \$event->setForm(\$this->types[\$event->getType()]);
            \$event->stopPropagation();
        }
    }

    /**
     * Set a widget detail when needed.
     */
    public function onWidgetDetailGenerate(WidgetDetailEvent \$event)
    {
    }

    /**
     * Set a widget detail when needed.
     */
    public function checkPermissions(WidgetDetailEvent \$event)
    {
        \$widgetTypes = array_keys(\$this->types);
        if (\$this->permissions && !\$event->hasPermissions(\$this->permissions) && in_array(\$event->getType(), \$widgetTypes)) {
            \$translator = \$event->getTranslator();
            \$event->setErrorMessage(\$translator->trans('mautic.dashboard.missing.permission', ['%section%' => \$this->bundle]));
            \$event->stopPropagation();

            return;
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
        return "@bundles/DashboardBundle/EventListener/DashboardSubscriber.php";
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
        return new Source("", "@bundles/DashboardBundle/EventListener/DashboardSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/EventListener/DashboardSubscriber.php");
    }
}
