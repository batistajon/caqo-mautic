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

/* @bundles/ReportBundle/DataFixtures/ORM/fakereportdata.csv */
class __TwigTemplate_6199a9ef90037476a4f5f36822235469cb16b3e1bf21dffc28692acb9bbc53b3 extends Template
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
        echo "\"name\",\"description\",\"system\",\"source\",\"columns\",\"filters\",\"tableOrder\",\"graphs\"
\"Visits published Pages\",NULL,1,\"page.hits\",\"a:7:{i:0;s:11:\\\"ph.date_hit\\\";i:1;s:6:\\\"ph.url\\\";i:2;s:12:\\\"ph.url_title\\\";i:3;s:10:\\\"ph.referer\\\";i:4;s:12:\\\"i.ip_address\\\";i:5;s:7:\\\"ph.city\\\";i:6;s:10:\\\"ph.country\\\";}\",\"a:2:{i:0;a:3:{s:6:\\\"column\\\";s:7:\\\"ph.code\\\";s:9:\\\"condition\\\";s:2:\\\"eq\\\";s:5:\\\"value\\\";s:3:\\\"200\\\";}i:1;a:3:{s:6:\\\"column\\\";s:14:\\\"p.is_published\\\";s:9:\\\"condition\\\";s:2:\\\"eq\\\";s:5:\\\"value\\\";s:1:\\\"1\\\";}}\",\"a:1:{i:0;a:2:{s:6:\\\"column\\\";s:11:\\\"ph.date_hit\\\";s:9:\\\"direction\\\";s:3:\\\"ASC\\\";}}\",\"a:8:{i:0;s:35:\\\"mautic.page.graph.line.time.on.site\\\";i:1;s:27:\\\"mautic.page.graph.line.hits\\\";i:2;s:38:\\\"mautic.page.graph.pie.new.vs.returning\\\";i:3;s:31:\\\"mautic.page.graph.pie.languages\\\";i:4;s:34:\\\"mautic.page.graph.pie.time.on.site\\\";i:5;s:27:\\\"mautic.page.table.referrers\\\";i:6;s:30:\\\"mautic.page.table.most.visited\\\";i:7;s:37:\\\"mautic.page.table.most.visited.unique\\\";}\"
\"Downloads of all Assets\",NULL,1,\"asset.downloads\",\"a:7:{i:0;s:16:\\\"ad.date_download\\\";i:1;s:7:\\\"a.title\\\";i:2;s:12:\\\"i.ip_address\\\";i:3;s:11:\\\"l.firstname\\\";i:4;s:10:\\\"l.lastname\\\";i:5;s:7:\\\"l.email\\\";i:6;s:4:\\\"a.id\\\";}\",\"a:1:{i:0;a:3:{s:6:\\\"column\\\";s:14:\\\"a.is_published\\\";s:9:\\\"condition\\\";s:2:\\\"eq\\\";s:5:\\\"value\\\";s:1:\\\"1\\\";}}\",\"a:1:{i:0;a:2:{s:6:\\\"column\\\";s:16:\\\"ad.date_download\\\";s:9:\\\"direction\\\";s:3:\\\"ASC\\\";}}\",\"a:4:{i:0;s:33:\\\"mautic.asset.graph.line.downloads\\\";i:1;s:31:\\\"mautic.asset.graph.pie.statuses\\\";i:2;s:34:\\\"mautic.asset.table.most.downloaded\\\";i:3;s:32:\\\"mautic.asset.table.top.referrers\\\";}\"
\"Submissions of published Forms\",NULL,1,\"form.submissions\",\"a:0:{}\",\"a:1:{i:1;a:3:{s:6:\\\"column\\\";s:14:\\\"f.is_published\\\";s:9:\\\"condition\\\";s:2:\\\"eq\\\";s:5:\\\"value\\\";s:1:\\\"1\\\";}}\",\"a:0:{}\",\"a:3:{i:0;s:34:\\\"mautic.form.graph.line.submissions\\\";i:1;s:32:\\\"mautic.form.table.most.submitted\\\";i:2;s:31:\\\"mautic.form.table.top.referrers\\\";}\"
\"All Emails\",NULL,1,\"email.stats\",\"a:5:{i:0;s:12:\\\"es.date_sent\\\";i:1;s:12:\\\"es.date_read\\\";i:2;s:9:\\\"e.subject\\\";i:3;s:16:\\\"es.email_address\\\";i:4;s:4:\\\"e.id\\\";}\",\"a:1:{i:0;a:3:{s:6:\\\"column\\\";s:14:\\\"e.is_published\\\";s:9:\\\"condition\\\";s:2:\\\"eq\\\";s:5:\\\"value\\\";s:1:\\\"1\\\";}}\",\"a:1:{i:0;a:2:{s:6:\\\"column\\\";s:12:\\\"es.date_sent\\\";s:9:\\\"direction\\\";s:3:\\\"ASC\\\";}}\",\"a:6:{i:0;s:29:\\\"mautic.email.graph.line.stats\\\";i:1;s:42:\\\"mautic.email.graph.pie.ignored.read.failed\\\";i:2;s:35:\\\"mautic.email.table.most.emails.read\\\";i:3;s:35:\\\"mautic.email.table.most.emails.sent\\\";i:4;s:43:\\\"mautic.email.table.most.emails.read.percent\\\";i:5;s:37:\\\"mautic.email.table.most.emails.failed\\\";}\"
\"Leads and Points\",NULL,1,\"lead.pointlog\",\"a:7:{i:0;s:13:\\\"lp.date_added\\\";i:1;s:7:\\\"lp.type\\\";i:2;s:13:\\\"lp.event_name\\\";i:3;s:11:\\\"l.firstname\\\";i:4;s:10:\\\"l.lastname\\\";i:5;s:7:\\\"l.email\\\";i:6;s:8:\\\"lp.delta\\\";}\",\"a:0:{}\",\"a:1:{i:0;a:2:{s:6:\\\"column\\\";s:13:\\\"lp.date_added\\\";s:9:\\\"direction\\\";s:3:\\\"ASC\\\";}}\",\"a:6:{i:0;s:29:\\\"mautic.lead.graph.line.points\\\";i:1;s:29:\\\"mautic.lead.table.most.points\\\";i:2;s:29:\\\"mautic.lead.table.top.actions\\\";i:3;s:28:\\\"mautic.lead.table.top.cities\\\";i:4;s:31:\\\"mautic.lead.table.top.countries\\\";i:5;s:28:\\\"mautic.lead.table.top.events\\\";}\"";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/DataFixtures/ORM/fakereportdata.csv";
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
        return new Source("", "@bundles/ReportBundle/DataFixtures/ORM/fakereportdata.csv", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/DataFixtures/ORM/fakereportdata.csv");
    }
}
