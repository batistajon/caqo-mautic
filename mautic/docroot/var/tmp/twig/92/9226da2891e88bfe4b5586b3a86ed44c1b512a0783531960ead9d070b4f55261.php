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

/* @bundles/DashboardBundle/Translations/en_US/messages.ini */
class __TwigTemplate_c7ef92c0452f3f5741e9a051a49e30af446d173ab5e769ea6e80f4344dd63381 extends Template
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
        echo "mautic.dashboard.confirmation_layout_name=\"Enter a name for this dashboard:\"
mautic.dashboard.create.past.tense=\"created\"
mautic.dashboard.delete_layout=\"Delete this layout?\"
mautic.dashboard.delete.past.tense=\"deleted\"
mautic.dashboard.generated_by=\"Generated by %name% on %date%\"
mautic.dashboard.header.index=\"Dashboard\"
mautic.dashboard.identified.past.tense=\"identified\"
mautic.dashboard.ipadded.past.tense=\"added IP\"
mautic.dashboard.label.downloads=\"Downloads\"
mautic.dashboard.label.hits=\"Hits\"
mautic.dashboard.label.lang=\"Lang\"
mautic.dashboard.label.title=\"Title\"
mautic.dashboard.menu.index=\"Dashboard\"
mautic.dashboard.update.past.tense=\"updated\"
mautic.note.no.upcoming.emails=\"No emails are scheduled to be sent.\"
mautic.dashboard.label.created.leads=\"Created leads\"
mautic.dashboard.label.url=\"URL\"
mautic.dashboard.label.unique.hit.count=\"Unique hit count\"
mautic.dashboard.label.total.hit.count=\"Total hit count\"
mautic.dashboard.label.email.id=\"Email ID\"
mautic.dashboard.label.email.name=\"Email name\"
mautic.dashboard.label.contact.id=\"Contact ID\"
mautic.dashboard.label.contact.email.address=\"Contact email address\"
mautic.dashboard.label.contact.open=\"Contact open\"
mautic.dashboard.label.contact.click=\"Clicks\"
mautic.dashboard.label.contact.links.clicked=\"Links clicked\"
mautic.dashboard.label.segment.id=\"Segment ID\"
mautic.dashboard.label.segment.name=\"Segment name\"
mautic.dashboard.label.company.id=\"Company ID\"
mautic.dashboard.label.company.name=\"Company name\"
mautic.dashboard.label.campaign.id=\"Company ID\"
mautic.dashboard.label.campaign.name=\"Campaign name\"
mautic.dashboard.widget.add=\"Add widget\"
mautic.dashboard.export.widgets=\"Export\"
mautic.dashboard.widget.import=\"Import\"
mautic.dashboard.widget.form.name=\"Name\"
mautic.dashboard.widget.form.type=\"Type\"
mautic.dashboard.widget.form.width=\"Width\"
mautic.dashboard.widget.form.height=\"Height\"
mautic.dashboard.widget.form.ordering=\"Place before\"
mautic.dashboard.widget.ordering.last=\"Last\"
mautic.dashboard.widget.header.edit=\"Edit widget\"
mautic.dashboard.widget.header.new=\"New widget\"
mautic.dashboard.widget.header.delete=\"Delete widget\"
mautic.dashboard.widget.load.time=\"data loaded in %time% ms\"
mautic.dashboard.widget.data.loaded.from.cache=\"from cache\"
mautic.dashboard.widget.data.loaded.from.database=\"from database\"
mautic.dashboard.import=\"Import a pre-defined dashboard\"
mautic.dashboard.predefined=\"Pre-defined dashboards\"
mautic.dashboard.import.start.instructions=\"Upload a pre-defined dashboard\"
mautic.dashboard.widgets.preview=\"Preview of the selected pre-defined dashboard\"
mautic.dashboard.date.from=\"From\"
mautic.dashboard.date.to=\"To\"
mautic.dashboard.nowidgets.tip.header=\"Hello there!\"
mautic.dashboard.nowidgets.tip=\"There are no widgets in your dashboard but don't panic! You can create the widgets with the \\\"Add widget\\\" button above, \\\"Import\\\" a dashboard from a friend or\"
mautic.dashboard.missing.permission=\"You do not have the permission to see the data from %section% section.\"
mautic.dashboard.preview=\"Preview\"
mautic.dashboard.phpversionwarning.title=\"Please update your PHP version\"
mautic.dashboard.phpversionwarning.body=\"You are currently using PHP %phpversion%, an outdated and insecure version of PHP. Future versions of Mautic won't support this version anymore.<br>For an overview of supported PHP versions per Mautic version, please visit <a target=\\\"_blank\\\" href=\\\"https://www.mautic.org/download/requirements\\\">the Mautic website</a>.\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/DashboardBundle/Translations/en_US/messages.ini", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Translations/en_US/messages.ini");
    }
}