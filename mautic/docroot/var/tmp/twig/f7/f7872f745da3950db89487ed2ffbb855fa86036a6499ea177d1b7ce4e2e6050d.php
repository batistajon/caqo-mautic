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

/* @bundles/DashboardBundle/DashboardEvents.php */
class __TwigTemplate_f508a0b0ee11ce100a9fb8079fbab2e6f2e26a45edddada395719274bcade81b extends Template
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

namespace Mautic\\DashboardBundle;

/**
 * Class LeadEvents
 * Events available for DashboardBundle.
 */
final class DashboardEvents
{
    /**
     * The mautic.dashboard_on_widget_list_generate event is dispatched when generating a list of available widget types.
     *
     * The event listener receives a
     * Mautic\\DashbardBundle\\Event\\WidgetTypeListEvent instance.
     *
     * @var string
     */
    public const DASHBOARD_ON_MODULE_LIST_GENERATE = 'mautic.dashboard_on_widget_list_generate';

    /**
     * The mautic.dashboard_on_widget_form_generate event is dispatched when generating the form of a widget type.
     *
     * The event listener receives a
     * Mautic\\DashbardBundle\\Event\\WidgetFormEvent instance.
     *
     * @var string
     */
    public const DASHBOARD_ON_MODULE_FORM_GENERATE = 'mautic.dashboard_on_widget_form_generate';

    /**
     * The mautic.dashboard_on_widget_detail_generate event is dispatched when generating the detail of a widget type.
     *
     * The event listener receives a
     * Mautic\\DashbardBundle\\Event\\WidgetDetailEvent instance.
     *
     * @var string
     */
    public const DASHBOARD_ON_MODULE_DETAIL_GENERATE = 'mautic.dashboard_on_widget_detail_generate';

    /**
     * The mautic.dashboard_on_widget_detail_pre_load event is dispatched before detail of a widget type is generate.
     *
     * The event listener receives a
     * Mautic\\DashboardBundle\\Event\\WidgetDetailEvent instance.
     *
     * @var string
     */
    public const DASHBOARD_ON_MODULE_DETAIL_PRE_LOAD = 'mautic.dashboard_on_widget_detail_pre_load';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/DashboardEvents.php";
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
        return new Source("", "@bundles/DashboardBundle/DashboardEvents.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/DashboardEvents.php");
    }
}
