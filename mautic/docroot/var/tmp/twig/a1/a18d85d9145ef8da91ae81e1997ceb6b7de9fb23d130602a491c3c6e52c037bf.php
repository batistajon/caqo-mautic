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

/* @bundles/LeadBundle/Tests/Helper/IdentifyCompanyHelperTest.php */
class __TwigTemplate_465943ffdfbc29b5aaf71d65554aec4c995a53f6a2c9974f4668414989805a71 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Helper;

use Mautic\\LeadBundle\\Helper\\IdentifyCompanyHelper;
use Mautic\\LeadBundle\\Model\\CompanyModel;

class IdentifyCompanyHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testDomainExistsRealDomain()
    {
        \$helper     = new IdentifyCompanyHelper();
        \$reflection = new \\ReflectionClass(IdentifyCompanyHelper::class);
        \$method     = \$reflection->getMethod('domainExists');
        \$method->setAccessible(true);
        \$result = \$method->invokeArgs(\$helper, ['hello@mautic.org']);

        \$this->assertTrue(is_string(\$result));
        \$this->assertGreaterThan(0, strlen(\$result));
    }

    public function testDomainExistsWithFakeDomain()
    {
        \$helper     = new IdentifyCompanyHelper();
        \$reflection = new \\ReflectionClass(IdentifyCompanyHelper::class);
        \$method     = \$reflection->getMethod('domainExists');
        \$method->setAccessible(true);
        \$result = \$method->invokeArgs(\$helper, ['hello@domain.fake']);

        \$this->assertFalse(\$result);
    }

    public function testFindCompanyByName()
    {
        \$company = [
            'company' => 'Mautic',
        ];

        \$expected = [
            'companyname'    => 'Mautic',
        ];

        \$model = \$this->getMockBuilder(CompanyModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$model->expects(\$this->once())
            ->method('checkForDuplicateCompanies')
            ->willReturn([]);

        \$model->expects(\$this->any())
            ->method('fetchCompanyFields')
            ->willReturn([['alias' => 'companyname']]);

        \$helper     = new IdentifyCompanyHelper();
        \$reflection = new \\ReflectionClass(IdentifyCompanyHelper::class);
        \$method     = \$reflection->getMethod('findCompany');
        \$method->setAccessible(true);
        [\$resultCompany, \$entities] = \$method->invokeArgs(\$helper, [\$company, \$model]);

        \$this->assertEquals(\$expected, \$resultCompany);
    }

    public function testFindCompanyByNameWithValidEmail()
    {
        \$company = [
            'company'      => 'Mautic',
            'companyemail' => 'hello@mautic.org',
        ];

        \$expected = [
            'companyname'    => 'Mautic',
            'companyemail'   => 'hello@mautic.org',
        ];

        \$model = \$this->getMockBuilder(CompanyModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$model->expects(\$this->once())
            ->method('checkForDuplicateCompanies')
            ->willReturn([]);

        \$model->expects(\$this->any())
            ->method('fetchCompanyFields')
            ->willReturn([['alias' => 'companyname']]);

        \$helper     = new IdentifyCompanyHelper();
        \$reflection = new \\ReflectionClass(IdentifyCompanyHelper::class);
        \$method     = \$reflection->getMethod('findCompany');
        \$method->setAccessible(true);
        list(\$resultCompany, \$entities) = \$method->invokeArgs(\$helper, [\$company, \$model]);

        \$this->assertEquals(\$expected, \$resultCompany);
    }

    public function testFindCompanyByNameWithValidEmailAndCustomWebsite()
    {
        \$company = [
            'company'        => 'Mautic',
            'companyemail'   => 'hello@mautic.org',
            'companywebsite' => 'https://mautic.org',
        ];

        \$expected = [
            'companyname'    => 'Mautic',
            'companywebsite' => 'https://mautic.org',
            'companyemail'   => 'hello@mautic.org',
        ];

        \$model = \$this->getMockBuilder(CompanyModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$model->expects(\$this->once())
            ->method('checkForDuplicateCompanies')
            ->willReturn([]);

        \$model->expects(\$this->any())
            ->method('fetchCompanyFields')
            ->willReturn([['alias' => 'companyname']]);

        \$helper     = new IdentifyCompanyHelper();
        \$reflection = new \\ReflectionClass(IdentifyCompanyHelper::class);
        \$method     = \$reflection->getMethod('findCompany');
        \$method->setAccessible(true);
        list(\$resultCompany, \$entities) = \$method->invokeArgs(\$helper, [\$company, \$model]);

        \$this->assertEquals(\$expected, \$resultCompany);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Helper/IdentifyCompanyHelperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Helper/IdentifyCompanyHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Helper/IdentifyCompanyHelperTest.php");
    }
}
