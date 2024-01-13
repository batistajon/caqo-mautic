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

/* @bundles/LeadBundle/Helper/PrimaryCompanyHelper.php */
class __TwigTemplate_9bf2a5c1787c9679e4b9e6af9769cdb0763025dcbe0f61ad07e89e52e0c2e4a8 extends Template
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

namespace Mautic\\LeadBundle\\Helper;

use Mautic\\LeadBundle\\Entity\\CompanyLeadRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;

class PrimaryCompanyHelper
{
    private \$companyLeadRepository;

    /**
     * PrimaryCompanyHelper constructor.
     *
     * @param LeadRepository \$companyLeadRepository
     */
    public function __construct(CompanyLeadRepository \$companyLeadRepository)
    {
        \$this->companyLeadRepository = \$companyLeadRepository;
    }

    /**
     * @return array
     */
    public function getProfileFieldsWithPrimaryCompany(Lead \$lead)
    {
        return \$this->mergeInPrimaryCompany(
            \$this->companyLeadRepository->getCompaniesByLeadId(\$lead->getId()),
            \$lead->getProfileFields()
        );
    }

    /**
     * @param \$contactId
     *
     * @return array
     */
    public function mergePrimaryCompanyWithProfileFields(\$contactId, array \$profileFields)
    {
        return \$this->mergeInPrimaryCompany(
            \$this->companyLeadRepository->getCompaniesByLeadId(\$contactId),
            \$profileFields
        );
    }

    /**
     * @return array
     */
    private function mergeInPrimaryCompany(array \$companies, array \$profileFields)
    {
        foreach (\$companies as \$company) {
            if (empty(\$company['is_primary'])) {
                continue;
            }

            unset(\$company['id'], \$company['score'], \$company['date_added'], \$company['date_associated'], \$company['is_primary']);

            return array_merge(\$profileFields, \$company);
        }

        return \$profileFields;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Helper/PrimaryCompanyHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/PrimaryCompanyHelper.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Helper/PrimaryCompanyHelper.php");
    }
}
