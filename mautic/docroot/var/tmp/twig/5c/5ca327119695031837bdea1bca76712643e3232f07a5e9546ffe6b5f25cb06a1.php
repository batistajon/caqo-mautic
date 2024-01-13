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

/* @bundles/LeadBundle/Entity/CompanyLead.php */
class __TwigTemplate_8ad2a5bac0aeaf4f10ee3670fab3019507adada56245ac663473ecfdccc79ecf extends Template
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

namespace Mautic\\LeadBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class CompanyLead
{
    /**
     * @var Company
     **/
    private \$company;

    /**
     * @var Lead
     */
    private \$lead;

    /**
     * @var \\DateTime
     */
    private \$dateAdded;

    /**
     * @var bool
     */
    private \$primary = false;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('companies_leads')
            ->setCustomRepositoryClass(CompanyLeadRepository::class);

        \$builder->createManyToOne('company', 'Company')
            ->isPrimaryKey()
            ->addJoinColumn('company_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->addLead(false, 'CASCADE', true);

        \$builder->addDateAdded();

        \$builder->createField('primary', 'boolean')
            ->columnName('is_primary')
            ->nullable()
            ->build();
    }

    /**
     * @return \\DateTime
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * @param \\DateTime \$date
     */
    public function setDateAdded(\$date)
    {
        \$this->dateAdded = \$date;
    }

    /**
     * @return mixed
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @param mixed \$lead
     */
    public function setLead(\$lead)
    {
        \$this->lead = \$lead;
    }

    /**
     * @return Company
     */
    public function getCompany()
    {
        return \$this->company;
    }

    /**
     * @return Company
     */
    public function getCompanies()
    {
        return \$this->company;
    }

    /**
     * @param Company \$company
     */
    public function setCompany(\$company)
    {
        \$this->company = \$company;
    }

    /**
     * @param bool \$primary
     */
    public function setPrimary(\$primary)
    {
        \$this->primary = \$primary;
    }

    /**
     * @return bool
     */
    public function getPrimary()
    {
        return \$this->primary;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/CompanyLead.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/CompanyLead.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Entity/CompanyLead.php");
    }
}
