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

/* @bundles/LeadBundle/Tests/Model/CompanyReportDataTest.php */
class __TwigTemplate_8ecdfc9d136d64a5296f4fd99bcd14f3e50a98eb83bc3e265315d72c5fe55783 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\LeadBundle\\Model\\CompanyReportData;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Mautic\\ReportBundle\\Event\\ReportGeneratorEvent;
use Symfony\\Component\\Translation\\TranslatorInterface;

class CompanyReportDataTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    protected function setUp(): void
    {
        \$this->translator = \$this->getMockBuilder(Translator::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$this->translator->method('trans')
            ->willReturnCallback(
                function (\$key) {
                    return \$key;
                }
            );
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Model\\CompanyReportData::getCompanyData
     */
    public function testGetCompanyData()
    {
        \$fieldModelMock = \$this->getMockBuilder(FieldModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$field1 = new Field();
        \$field1->setType('boolean');
        \$field1->setAlias('boolField');
        \$field1->setLabel('boolFieldLabel');

        \$field2 = new Field();
        \$field2->setType('email');
        \$field2->setAlias('emailField');
        \$field2->setLabel('emailFieldLabel');

        \$fields = [
            \$field1,
            \$field2,
        ];

        \$fieldModelMock->expects(\$this->once())
            ->method('getEntities')
            ->willReturn(\$fields);

        \$companyReportData = new CompanyReportData(\$fieldModelMock, \$this->translator);

        \$result = \$companyReportData->getCompanyData();

        \$expected = [
            'comp.id' => [
                'alias' => 'comp_id',
                'label' => 'mautic.lead.report.company.company_id',
                'type'  => 'int',
                'link'  => 'mautic_company_action',
            ],
            'companies_lead.is_primary' => [
                'label' => 'mautic.lead.report.company.is_primary',
                'type'  => 'bool',
            ],
            'companies_lead.date_added' => [
                'label' => 'mautic.lead.report.company.date_added',
                'type'  => 'datetime',
            ],
            'comp.boolField' => [
                'label' => 'mautic.report.field.company.label',
                'type'  => 'bool',
            ],
            'comp.emailField' => [
                'label' => 'mautic.report.field.company.label',
                'type'  => 'email',
            ],
        ];

        \$this->assertSame(\$expected, \$result);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Model\\CompanyReportData::eventHasCompanyColumns
     */
    public function testEventHasCompanyColumns()
    {
        \$fieldModelMock = \$this->getMockBuilder(FieldModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$eventMock = \$this->getMockBuilder(ReportGeneratorEvent::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$field = new Field();
        \$field->setType('email');
        \$field->setAlias('email');
        \$field->setLabel('Email');

        \$fieldModelMock->expects(\$this->once())
            ->method('getEntities')
            ->willReturn([\$field]);

        \$eventMock->expects(\$this->once())
            ->method('hasColumn')
            ->with('comp.id')
            ->willReturn(true);

        \$companyReportData = new CompanyReportData(\$fieldModelMock, \$this->translator);

        \$result = \$companyReportData->eventHasCompanyColumns(\$eventMock);

        \$this->assertTrue(\$result);
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Model\\CompanyReportData::eventHasCompanyColumns
     */
    public function testEventDoesNotHaveCompanyColumns()
    {
        \$fieldModelMock = \$this->getMockBuilder(FieldModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$eventMock = \$this->getMockBuilder(ReportGeneratorEvent::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$field = new Field();
        \$field->setType('email');
        \$field->setAlias('email');
        \$field->setLabel('Email');

        \$fieldModelMock->expects(\$this->once())
            ->method('getEntities')
            ->willReturn([\$field]);

        \$eventMock->expects(\$this->any())
            ->method('hasColumn')
            ->willReturn(false);

        \$companyReportData = new CompanyReportData(\$fieldModelMock, \$this->translator);

        \$result = \$companyReportData->eventHasCompanyColumns(\$eventMock);

        \$this->assertFalse(\$result);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Model/CompanyReportDataTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Model/CompanyReportDataTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Model/CompanyReportDataTest.php");
    }
}
