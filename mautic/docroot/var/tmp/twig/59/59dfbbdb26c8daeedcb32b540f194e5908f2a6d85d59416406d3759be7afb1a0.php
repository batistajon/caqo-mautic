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

/* @bundles/LeadBundle/Deduplicate/CompanyDeduper.php */
class __TwigTemplate_83df03aecd0124503d4794d6fec754e4154cdc5e5c2764b653784e4a480c0fdc extends Template
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

namespace Mautic\\LeadBundle\\Deduplicate;

use Mautic\\LeadBundle\\Entity\\CompanyRepository;
use Mautic\\LeadBundle\\Exception\\UniqueFieldNotFoundException;
use Mautic\\LeadBundle\\Model\\FieldModel;

class CompanyDeduper
{
    use DeduperTrait;

    /**
     * @var CompanyRepository
     */
    private \$companyRepository;

    /**
     * DedupModel constructor.
     */
    public function __construct(FieldModel \$fieldModel, CompanyRepository \$companyRepository)
    {
        \$this->fieldModel        = \$fieldModel;
        \$this->companyRepository = \$companyRepository;
        \$this->object            = 'company';
    }

    /**
     * @return Company[]
     *
     * @throws UniqueFieldNotFoundException
     */
    public function checkForDuplicateCompanies(array \$queryFields): array
    {
        \$uniqueData = \$this->getUniqueData(\$queryFields);
        if (empty(\$uniqueData)) {
            throw new UniqueFieldNotFoundException();
        }

        return \$this->companyRepository->getCompaniesByUniqueFields(\$uniqueData);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Deduplicate/CompanyDeduper.php";
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
        return new Source("", "@bundles/LeadBundle/Deduplicate/CompanyDeduper.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Deduplicate/CompanyDeduper.php");
    }
}
