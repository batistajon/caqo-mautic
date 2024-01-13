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

/* @bundles/ReportBundle/ReportEvents.php */
class __TwigTemplate_9ab1205765f9f57548b2e5a11682a85390bcdf49b4f7d98dfda0c6f816101e2f extends Template
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

namespace Mautic\\ReportBundle;

/**
 * Class ReportEvents.
 *
 * Events available for ReportBundle
 */
final class ReportEvents
{
    /**
     * The mautic.report_pre_save event is dispatched right before a report is persisted.
     *
     * The event listener receives a Mautic\\ReportBundle\\Event\\ReportEvent instance.
     *
     * @var string
     */
    const REPORT_PRE_SAVE = 'mautic.report_pre_save';

    /**
     * The mautic.report_post_save event is dispatched right after a report is persisted.
     *
     * The event listener receives a Mautic\\ReportBundle\\Event\\ReportEvent instance.
     *
     * @var string
     */
    const REPORT_POST_SAVE = 'mautic.report_post_save';

    /**
     * The mautic.report_pre_delete event is dispatched prior to when a report is deleted.
     *
     * The event listener receives a Mautic\\ReportBundle\\Event\\ReportEvent instance.
     *
     * @var string
     */
    const REPORT_PRE_DELETE = 'mautic.report_pre_delete';

    /**
     * The mautic.report_post_delete event is dispatched after a report is deleted.
     *
     * The event listener receives a Mautic\\ReportBundle\\Event\\ReportEvent instance.
     *
     * @var string
     */
    const REPORT_POST_DELETE = 'mautic.report_post_delete';

    /**
     * The mautic.report_on_build event is dispatched before displaying the report builder form to allow
     * bundles to specify report sources and columns.
     *
     * The event listener receives a Mautic\\ReportBundle\\Event\\ReportBuilderEvent instance.
     *
     * @var string
     */
    const REPORT_ON_BUILD = 'mautic.report_on_build';

    /**
     * The mautic.report_on_generate event is dispatched when generating a report to build the base query.
     *
     * The event listener receives a Mautic\\ReportBundle\\Event\\ReportGeneratorEvent instance.
     *
     * @var string
     */
    const REPORT_ON_GENERATE = 'mautic.report_on_generate';

    /**
     * The mautic.report_query_pre_execute event is dispatched to allow a plugin to alter the query before execution.
     *
     * The event listener receives a Mautic\\ReportBundle\\Event\\ReportQueryEvent instance.
     *
     * @var string
     */
    const REPORT_QUERY_PRE_EXECUTE = 'mautic.report_query_pre_execute';

    /**
     * The mautic.report_on_display event is dispatched when displaying a report.
     *
     * The event listener receives a Mautic\\ReportBundle\\Event\\ReportDataEvent instance.
     *
     * @var string
     */
    const REPORT_ON_DISPLAY = 'mautic.report_on_display';

    /**
     * The mautic.report_on_graph_generate event is dispatched to generate a graph data.
     *
     * The event listener receives a Mautic\\ReportBundle\\Event\\ReportGraphEvent instance.
     *
     * @var string
     */
    const REPORT_ON_GRAPH_GENERATE = 'mautic.report_on_graph_generate';

    /**
     * The mautic.report_schedule_send event is dispatched to send an exported report to a user.
     *
     * The event listener receives a Mautic\\ReportBundle\\Event\\ReportScheduleSendEvent instance.
     *
     * @var string
     */
    const REPORT_SCHEDULE_SEND = 'mautic.report_schedule_send';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/ReportEvents.php";
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
        return new Source("", "@bundles/ReportBundle/ReportEvents.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/ReportEvents.php");
    }
}