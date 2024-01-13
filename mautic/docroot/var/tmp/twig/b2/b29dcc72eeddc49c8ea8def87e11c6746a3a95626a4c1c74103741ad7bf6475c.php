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

/* @bundles/LeadBundle/Tests/Deduplicate/CompanyDeduperTest.php */
class __TwigTemplate_d0999bd7e008074c6dc9ceb50cd5cfe9f455324b1c541d51c926eb987d074891 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Deduplicate;

use Mautic\\LeadBundle\\Deduplicate\\CompanyDeduper;
use Mautic\\LeadBundle\\Entity\\CompanyRepository;
use Mautic\\LeadBundle\\Exception\\UniqueFieldNotFoundException;
use Mautic\\LeadBundle\\Model\\FieldModel;

class CompanyDeduperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|FieldModel
     */
    private \$fieldModel;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|CompanyRepository
     */
    private \$companyRepository;

    protected function setUp(): void
    {
        \$this->fieldModel = \$this->getMockBuilder(FieldModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$this->companyRepository = \$this->getMockBuilder(CompanyRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testUniqueFieldNotFoundException()
    {
        \$this->expectException(UniqueFieldNotFoundException::class);
        \$this->fieldModel->method('getFieldList')->willReturn([]);
        \$this->getDeduper()->checkForDuplicateCompanies([]);
    }

    /**
     * @return CompanyDeduper
     */
    private function getDeduper()
    {
        return new CompanyDeduper(
            \$this->fieldModel,
            \$this->companyRepository
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Deduplicate/CompanyDeduperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Deduplicate/CompanyDeduperTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Deduplicate/CompanyDeduperTest.php");
    }
}
