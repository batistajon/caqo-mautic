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

/* @bundles/LeadBundle/Tests/EventListener/ReportUtmTagSubscriberTest.php */
class __TwigTemplate_5349d5b1c50cc8216aa161400ffe5d42bac6c580620f8d6392e8975f3fce409e extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Doctrine\\DBAL\\Query\\QueryBuilder;
use Mautic\\ChannelBundle\\Helper\\ChannelListHelper;
use Mautic\\LeadBundle\\EventListener\\ReportUtmTagSubscriber;
use Mautic\\LeadBundle\\Model\\CompanyReportData;
use Mautic\\LeadBundle\\Report\\FieldsBuilder;
use Mautic\\ReportBundle\\Event\\ReportBuilderEvent;
use Mautic\\ReportBundle\\Event\\ReportGeneratorEvent;
use Mautic\\ReportBundle\\Helper\\ReportHelper;
use Symfony\\Component\\Translation\\TranslatorInterface;

class ReportUtmTagSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNotRelevantContextBuilder(): void
    {
        \$fieldsBuilderMock      = \$this->createMock(FieldsBuilder::class);
        \$companyReportDataMock  = \$this->createMock(CompanyReportData::class);
        \$reportBuilderEventMock = \$this->createMock(ReportBuilderEvent::class);

        \$reportBuilderEventMock->expects(\$this->once())
            ->method('checkContext')
            ->with(['lead.utmTag'])
            ->willReturn(false);

        \$reportBuilderEventMock->expects(\$this->never())
            ->method('addTable');

        \$reportUtmTagSubscriber = new ReportUtmTagSubscriber(\$fieldsBuilderMock, \$companyReportDataMock);
        \$reportUtmTagSubscriber->onReportBuilder(\$reportBuilderEventMock);
    }

    public function testNotRelevantContextGenerate(): void
    {
        \$fieldsBuilderMock        = \$this->createMock(FieldsBuilder::class);
        \$companyReportDataMock    = \$this->createMock(CompanyReportData::class);
        \$reportGeneratorEventMock = \$this->createMock(ReportGeneratorEvent::class);

        \$reportGeneratorEventMock->expects(\$this->once())
            ->method('checkContext')
            ->with(['lead.utmTag'])
            ->willReturn(false);

        \$reportGeneratorEventMock->expects(\$this->never())
            ->method('getQueryBuilder');

        \$reportUtmTagSubscriber = new ReportUtmTagSubscriber(\$fieldsBuilderMock, \$companyReportDataMock);
        \$reportUtmTagSubscriber->onReportGenerate(\$reportGeneratorEventMock);
    }

    public function testReportBuilder(): void
    {
        \$translatorMock        = \$this->createMock(TranslatorInterface::class);
        \$channelListHelperMock = \$this->createMock(ChannelListHelper::class);
        \$reportHelperMock      = \$this->createMock(ReportHelper::class);
        \$fieldsBuilderMock     = \$this->createMock(FieldsBuilder::class);
        \$companyReportDataMock = \$this->createMock(CompanyReportData::class);

        \$leadColumns = [
            'lead.name' => [
                'label' => 'lead name',
                'type'  => 'bool',
            ],
        ];
        \$companyColumns = [
            'comp.name' => [
                'label' => 'company name',
                'type'  => 'bool',
            ],
        ];

        \$fieldsBuilderMock->expects(\$this->once())
            ->method('getLeadFieldsColumns')
            ->with('l.')
            ->willReturn(\$leadColumns);

        \$companyReportDataMock->expects(\$this->once())
            ->method('getCompanyData')
            ->with()
            ->willReturn(\$companyColumns);

        \$reportBuilderEvent = new ReportBuilderEvent(\$translatorMock, \$channelListHelperMock, 'lead.utmTag', [], \$reportHelperMock);

        \$segmentReportSubscriber = new ReportUtmTagSubscriber(\$fieldsBuilderMock, \$companyReportDataMock);
        \$segmentReportSubscriber->onReportBuilder(\$reportBuilderEvent);

        \$expected = [
            'lead.utmTag' => [
                'display_name' => 'mautic.lead.report.utm.utm_tag',
                'columns'      => [
                    'lead.name' => [
                        'label' => null,
                        'type'  => 'bool',
                        'alias' => 'name',
                    ],
                    'comp.name' => [
                        'label' => null,
                        'type'  => 'bool',
                        'alias' => 'name',
                    ],
                    'utm.utm_campaign' => [
                        'label' => null,
                        'type'  => 'text',
                        'alias' => 'utm_campaign',
                    ],
                    'utm.utm_content' => [
                        'label' => null,
                        'type'  => 'text',
                        'alias' => 'utm_content',
                    ],
                    'utm.utm_medium' => [
                        'label' => null,
                        'type'  => 'text',
                        'alias' => 'utm_medium',
                    ],
                    'utm.utm_source' => [
                        'label' => null,
                        'type'  => 'text',
                        'alias' => 'utm_source',
                    ],
                    'utm.utm_term' => [
                        'label' => null,
                        'type'  => 'text',
                        'alias' => 'utm_term',
                    ],
                ],
                'group' => 'contacts',
            ],
        ];

        \$this->assertSame(\$expected, \$reportBuilderEvent->getTables());
    }

    public function testReportGenerateNoJoinedTables(): void
    {
        \$reportGeneratorEventMock = \$this->getReportGeneratorEventMock();
        \$reportUtmTagSubscriber   = \$this->getReportUtmTagSubscriber();
        \$queryBuilderMock         = \$this->getQueryBuilderMock();

        \$reportGeneratorEventMock->expects(\$this->once())
            ->method('getQueryBuilder')
            ->willReturn(\$queryBuilderMock);

        \$reportUtmTagSubscriber->onReportGenerate(\$reportGeneratorEventMock);
    }

    public function testReportGenerateWithUsers(): void
    {
        \$reportGeneratorEventMock = \$this->getReportGeneratorEventMock();
        \$reportUtmTagSubscriber   = \$this->getReportUtmTagSubscriber();
        \$queryBuilderMock         = \$this->getQueryBuilderMock();

        \$reportGeneratorEventMock->expects(\$this->once())
            ->method('getQueryBuilder')
            ->willReturn(\$queryBuilderMock);

        \$reportGeneratorEventMock->expects(\$this->exactly(2))
            ->method('usesColumn')
            ->withConsecutive(
                [['u.first_name', 'u.last_name']],
                ['i.ip_address']
            )
            ->willReturn(true);

        \$reportUtmTagSubscriber->onReportGenerate(\$reportGeneratorEventMock);
    }

    private function getReportUtmTagSubscriber(): ReportUtmTagSubscriber
    {
        \$fieldsBuilderMock      = \$this->createMock(FieldsBuilder::class);
        \$companyReportDataMock  = \$this->createMock(CompanyReportData::class);
        \$reportUtmTagSubscriber = new ReportUtmTagSubscriber(\$fieldsBuilderMock, \$companyReportDataMock);

        return \$reportUtmTagSubscriber;
    }

    /**
     * @return ReportGeneratorEvent|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private function getReportGeneratorEventMock()
    {
        \$reportGeneratorEventMock = \$this->createMock(ReportGeneratorEvent::class);

        \$reportGeneratorEventMock->expects(\$this->once())
            ->method('checkContext')
            ->with(['lead.utmTag'])
            ->willReturn(true);

        return \$reportGeneratorEventMock;
    }

    /**
     * @return QueryBuilder|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private function getQueryBuilderMock()
    {
        \$queryBuilderMock = \$this->createMock(QueryBuilder::class);

        \$queryBuilderMock->expects(\$this->once())
            ->method('from')
            ->with(MAUTIC_TABLE_PREFIX.'lead_utmtags', 'utm')
            ->willReturn(\$queryBuilderMock);

        \$queryBuilderMock->method('leftJoin')
            ->withConsecutive(['utm', MAUTIC_TABLE_PREFIX.'leads', 'l', 'l.id = utm.lead_id'])
            ->willReturn(\$queryBuilderMock);

        return \$queryBuilderMock;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/EventListener/ReportUtmTagSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/ReportUtmTagSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/EventListener/ReportUtmTagSubscriberTest.php");
    }
}