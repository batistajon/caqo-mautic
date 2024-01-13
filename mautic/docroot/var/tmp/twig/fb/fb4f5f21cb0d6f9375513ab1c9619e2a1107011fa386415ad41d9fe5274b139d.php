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

/* @bundles/LeadBundle/DataFixtures/ORM/LoadCompanyData.php */
class __TwigTemplate_2dd77ac030bed3c13c0750182d54d5c6da18e7d312d0d552b38ba33a2ac9c3f6 extends Template
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

namespace Mautic\\LeadBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CoreBundle\\Helper\\CsvHelper;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Model\\CompanyModel;

class LoadCompanyData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * @var CompanyModel
     */
    private \$companyModel;

    /**
     * {@inheritdoc}
     */
    public function __construct(CompanyModel \$companyModel)
    {
        \$this->companyModel = \$companyModel;
    }

    public function load(ObjectManager \$manager)
    {
        \$today     = new \\DateTime();
        \$companies = CsvHelper::csv_to_array(__DIR__.'/fakecompanydata.csv');
        foreach (\$companies as \$count => \$l) {
            \$company = new Company();
            \$company->setDateAdded(\$today);
            foreach (\$l as \$col => \$val) {
                \$company->addUpdatedField(\$col, \$val);
            }
            \$this->companyModel->saveEntity(\$company);

            \$this->setReference('company-'.\$count, \$company);
        }
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 4;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/DataFixtures/ORM/LoadCompanyData.php";
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
        return new Source("", "@bundles/LeadBundle/DataFixtures/ORM/LoadCompanyData.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/DataFixtures/ORM/LoadCompanyData.php");
    }
}
