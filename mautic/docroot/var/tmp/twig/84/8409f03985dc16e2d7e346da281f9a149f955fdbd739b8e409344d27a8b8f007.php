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

/* @bundles/LeadBundle/EventListener/ReportUtmTagSubscriber.php */
class __TwigTemplate_0d92a7abc74d9d63f93de546b5fa468025a32a2d1515efb3d91b76892b0aa876 extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\LeadBundle\\Model\\CompanyReportData;
use Mautic\\LeadBundle\\Report\\FieldsBuilder;
use Mautic\\ReportBundle\\Event\\ReportBuilderEvent;
use Mautic\\ReportBundle\\Event\\ReportGeneratorEvent;
use Mautic\\ReportBundle\\ReportEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ReportUtmTagSubscriber implements EventSubscriberInterface
{
    const UTM_TAG = 'lead.utmTag';

    /**
     * @var FieldsBuilder
     */
    private \$fieldsBuilder;

    /**
     * @var CompanyReportData
     */
    private \$companyReportData;

    public function __construct(
        FieldsBuilder \$fieldsBuilder,
        CompanyReportData \$companyReportData
    ) {
        \$this->fieldsBuilder     = \$fieldsBuilder;
        \$this->companyReportData = \$companyReportData;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            ReportEvents::REPORT_ON_BUILD    => ['onReportBuilder', 0],
            ReportEvents::REPORT_ON_GENERATE => ['onReportGenerate', 0],
        ];
    }

    /**
     * Add available tables and columns to the report builder lookup.
     */
    public function onReportBuilder(ReportBuilderEvent \$event)
    {
        if (!\$event->checkContext([self::UTM_TAG])) {
            return;
        }

        \$columns        = \$this->fieldsBuilder->getLeadFieldsColumns('l.');
        \$companyColumns = \$this->companyReportData->getCompanyData();

        \$utmTagColumns = [
            'utm.utm_campaign' => [
                'label' => 'mautic.lead.report.utm.campaign',
                'type'  => 'text',
            ],
            'utm.utm_content' => [
                'label' => 'mautic.lead.report.utm.content',
                'type'  => 'text',
            ],
            'utm.utm_medium' => [
                'label' => 'mautic.lead.report.utm.medium',
                'type'  => 'text',
            ],
            'utm.utm_source' => [
                'label' => 'mautic.lead.report.utm.source',
                'type'  => 'text',
            ],
            'utm.utm_term' => [
                'label' => 'mautic.lead.report.utm.term',
                'type'  => 'text',
            ],
        ];

        \$data = [
            'display_name' => 'mautic.lead.report.utm.utm_tag',
            'columns'      => array_merge(\$columns, \$companyColumns, \$utmTagColumns),
        ];
        \$event->addTable(self::UTM_TAG, \$data, ReportSubscriber::GROUP_CONTACTS);
    }

    /**
     * Initialize the QueryBuilder object to generate reports from.
     */
    public function onReportGenerate(ReportGeneratorEvent \$event)
    {
        if (!\$event->checkContext([self::UTM_TAG])) {
            return;
        }

        \$qb = \$event->getQueryBuilder();
        \$qb->from(MAUTIC_TABLE_PREFIX.'lead_utmtags', 'utm')
            ->leftJoin('utm', MAUTIC_TABLE_PREFIX.'leads', 'l', 'l.id = utm.lead_id');

        if (\$event->usesColumn(['u.first_name', 'u.last_name'])) {
            \$qb->leftJoin('l', MAUTIC_TABLE_PREFIX.'users', 'u', 'u.id = l.owner_id');
        }

        if (\$event->usesColumn('i.ip_address')) {
            \$event->addLeadIpAddressLeftJoin(\$qb);
        }

        if (\$this->companyReportData->eventHasCompanyColumns(\$event)) {
            \$qb->leftJoin('l', MAUTIC_TABLE_PREFIX.'companies_leads', 'companies_lead', 'l.id = companies_lead.lead_id');
            \$qb->leftJoin('companies_lead', MAUTIC_TABLE_PREFIX.'companies', 'comp', 'companies_lead.company_id = comp.id');
        }

        \$event->setQueryBuilder(\$qb);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/EventListener/ReportUtmTagSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/ReportUtmTagSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/EventListener/ReportUtmTagSubscriber.php");
    }
}
