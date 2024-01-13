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

/* @bundles/ReportBundle/Translations/en_US/messages.ini */
class __TwigTemplate_d5566b141911d47070336df546dccd36dc350c277299a468b40f1f79cd95c3ee extends Template
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
        echo "mautic.report.dashboard.widgets=\"Report Widgets\"
mautic.report.dashboard.widgets.full_report=\"View Full Report\"
mautic.report.field.category_id=\"Category ID\"
mautic.report.field.category_name=\"Category name\"
mautic.report.field.date_added=\"Date created\"
mautic.report.field.date_modified=\"Date last modified\"
mautic.report.field.is_published=\"Is published\"
mautic.report.field.lead.label=\"Contact %field%\"
mautic.report.field.lead.address1=\"Contact address 1\"
mautic.report.field.lead.address2=\"Contact address 2\"
mautic.report.field.lead.city=\"Contact city\"
mautic.report.field.lead.company=\"Contact company\"
mautic.report.field.lead.country=\"Contact country\"
mautic.report.field.lead.email=\"Contact email\"
mautic.report.field.lead.firstname=\"Contact first name\"
mautic.report.field.lead.id=\"Contact ID\"
mautic.report.field.lead.lastname=\"Contact last name\"
mautic.report.field.lead.mobile=\"Contact mobile\"
mautic.report.field.lead.phone=\"Contact phone\"
mautic.report.field.lead.position=\"Contact position\"
mautic.report.field.lead.state=\"Contact state\"
mautic.report.field.lead.title=\"Contact title\"
mautic.report.field.lead.zipcode = \"Contact zip code\"
mautic.report.field.modified_by_user=\"Last modified by\"
mautic.report.field.publish_down=\"Publish down on\"
mautic.report.field.publish_up=\"Publish up on\"
mautic.report.field.source=\"Original source\"
mautic.report.field.source_id=\"Original source ID\"
mautic.report.graph.bar=\"Bar graph\"
mautic.report.graph.line=\"Line graph\"
mautic.report.graph.pie=\"Pie chart\"
mautic.report.graph.table=\"Table\"
mautic.report.permissions.header=\"Reporting Permissions\"
mautic.report.permissions.reports=\"Reports - User has access to\"
mautic.widget.report=\"Report Graph\"
mautic.report.report.form.columnselector=\"Columns\"
mautic.report.report.form.confirmbatchdelete=\"Delete the selected reports?\"
mautic.report.report.form.confirmdelete=\"Delete the report, %name%?\"
mautic.report.report.form.graphs=\"Graphs/tables to include in the report\"
mautic.report.report.form.displayBeforeTables=\"Display graphs before tables\"
mautic.report.report.form.owner=\"Owner\"
mautic.report.report.form.issystem=\"System Report?\"
mautic.report.report.form.issystem.tooltip=\"A system report is available to all users. Setting this to no will make it visible to the creator and roles with permission to view other users' reports.\"
mautic.report.report.form.display.dynamic.filters.settings=\"Dynamic filters settings\"
mautic.report.report.form.display.graphs.above.table=\"Display graphs above table data on report page\"
mautic.report.report.form.display.show.dynamic.filters=\"Show opened by default\"
mautic.report.report.form.display.hide.date.ranges=\"Hide date range\"
mautic.report.report.form.source=\"Data Source\"
mautic.report.report.form.source.help=\"Choose the data source to use for this report. Changing this will clear your existing column and filter selections.\"
mautic.report.report.form.choose_graphs=\"Choose a graph\"
mautic.report.report.header.edit=\"Edit Report - %name%\"
mautic.report.report.header.new=\"New Report\"
mautic.report.report.header.view=\"View Report - %name%\"
mautic.report.report.help.searchcommands=\"<strong>Search commands</strong><br />ids:ID1,ID2 (comma separated IDs, no spaces)<br />is:published<br />is:unpublished<br />is:mine\"
mautic.report.report.label.addfilter=\"Add Filter\"
mautic.report.report.label.addtableorder=\"Add Order\"
mautic.report.report.label.availablecolumns=\"Available Columns\"
mautic.report.report.label.filtercolumn=\"Column\"
mautic.report.report.label.filtercondition=\"Condition\"
mautic.report.report.label.filterdynamic=\"Dynamic?\"
mautic.report.report.label.filterdynamic_tooltip=\"If this is set to yes, this filter will be available in the list view for dynamic filtering of this report.\"
mautic.report.report.label.filtervalue=\"Value\"
mautic.report.report.label.removefilter=\"Remove Filter\"
mautic.report.report.label.selectedcolumns=\"Selected Columns\"
mautic.report.report.label.tableorder_dir.asc=\"Ascending\"
mautic.report.report.label.tableorder_dir.desc=\"Descending\"
mautic.report.report.menu.index=\"Manage Reports\"
mautic.report.report.noresults=\"No data returned for this report\"
mautic.report.report.tooltip.selected.columns=\"The order of the columns in this box is the order in which they will be displayed on the report. Please use the buttons to order the columns.\"
mautic.report.reports=\"Reports\"
mautic.report.tab.data=\"Data\"
mautic.report.tab.graphs=\"Graphs\"
mautic.report.tab.schedule=\"Schedule\"
mautic.report.table.noresults=\"No results found. Consider changing your data filters.\"
mautic.report.campaign.channel.category_id=\"Channel Item: Category ID\"
mautic.report.campaign.channel.created_by=\"Channel Item: Created by\"
mautic.report.campaign.channel.created_by_user=\"Channel Item: Created by name\"
mautic.report.campaign.channel.date_added=\"Channel Item: Date added\"
mautic.report.campaign.channel.description=\"Channel Item: Description\"
mautic.report.campaign.channel.name=\"Channel Item: Name\"
mautic.report.form.groupby=\"Group by\"
mautic.core.calculated.fields=\"Calculated columns\"
mautic.report.report.label.function=\"Add function\"
mautic.report.report.label.aggregators.count=\"COUNT\"
mautic.report.report.label.aggregators.avg=\"AVG\"
mautic.report.report.label.aggregators.sum=\"SUM\"
mautic.report.report.label.aggregators.min=\"MIN\"
mautic.report.report.label.aggregators.max=\"MAX\"
mautic.report.function=\"Function\"
mautic.report.report.groupby.totals=\"Totals\"
mautic.report.report.glue.choice.and=\"And\"
mautic.report.report.glue.choice.or=\"Or\"
mautic.report.schedule.isScheduled=\"Email report\"
mautic.report.schedule.toAddress.label=\"To\"
mautic.report.schedule.toAddress.tooltip=\"Separate multiple emails with a comma\"
mautic.report.schedule.every=\"Every\"
mautic.report.schedule.day=\"On\"
mautic.report.schedule.month_frequency=\"On the\"
mautic.report.schedule.unit.now=\"now\"
mautic.report.schedule.unit.day=\"day\"
mautic.report.schedule.unit.week=\"week\"
mautic.report.schedule.unit.month=\"month\"
mautic.report.schedule.day.monday=\"Monday\"
mautic.report.schedule.day.tuesday=\"Tuesday\"
mautic.report.schedule.day.wednesday=\"Wednesday\"
mautic.report.schedule.day.thursday=\"Thursday\"
mautic.report.schedule.day.friday=\"Friday\"
mautic.report.schedule.day.saturday=\"Saturday\"
mautic.report.schedule.day.sunday=\"Sunday\"
mautic.report.schedule.day.week_days=\"Weekdays\"
mautic.report.schedule.month_frequency.first=\"First\"
mautic.report.schedule.month_frequency.last=\"Last\"
mautic.report.schedule.preview_data=\"Example dates report will be sent:\"
mautic.report.schedule.email.subject=\"Report %report_name% - %date%.\"
mautic.report.schedule.email.message=\"The report <a href=\"%link%\">%report_name%</a> generated at %date% is attached.\"
mautic.report.schedule.email.message_file_not_attached=\"The file is too big to be sent via email, click the link to view this report:  <a href=\"%link%\">%report_name%</a>.\"
mautic.report.schedule.email.message_file_linked=\"File is too big to send via email, click here to download the report: <a href=\"%link%\">%report_name%</a>.\"
mautic.report.schedule.command.finished=\"Scheduler has finished\"
mautic.report.schedule.command.invalid_parameter=\"Parameter report has to be number\"
mautic.report.download.missing=\"Report %id% does not have a CSV generated yet. But it has a scheduled report configured.\"
mautic.report.download.missing.but.scheduled=\"Report %id% does not have a CSV generated yet. But it has been requested with your attempt to download it. You will receive email notification as soon as it is generated.\"
mautic.report.dashboard.widgets.no_report_found=\"<strong>Oh snap!</strong> Report has been deleted or no data has been found.\"
mautic.config.tab.reportconfig=\"Report Settings\"
mautic.config.tab.form.csv_always_enclose=\"Always quote data in CSV export\"
mautic.config.tab.form.csv_always_enclose.tooltip=\"Enable this if the application used to open the CSV requires values to be quoted with double quotations. For example: &#34;Firstname&#34;,&#34;&#34;,&#34;Lastname&#34;\"
mautic.report.notfound=\"Report with ID %id% was not found.\"
mautic.report.export.and.send=\"Export & Send\"
mautic.format.invalid=\"Format %format% is not supported. Supported formats are: %validFormats%.\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/ReportBundle/Translations/en_US/messages.ini", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Translations/en_US/messages.ini");
    }
}
