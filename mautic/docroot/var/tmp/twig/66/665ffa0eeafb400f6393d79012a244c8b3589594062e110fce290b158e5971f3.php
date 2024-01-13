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

/* @bundles/LeadBundle/Entity/LeadCategory.php */
class __TwigTemplate_23ab3e02e0e8e4250a183ae87b4b855ac91be7c8a710abe0ada39a03ae39257a extends Template
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
use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

/**
 * Class LeadCategory.
 */
class LeadCategory
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var Category
     **/
    private \$category;

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
    private \$manuallyRemoved = false;

    /**
     * @var bool
     */
    private \$manuallyAdded = false;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('lead_categories')
            ->setCustomRepositoryClass('Mautic\\LeadBundle\\Entity\\LeadCategoryRepository');

        \$builder->addId();

        \$builder->createManyToOne('category', 'Mautic\\CategoryBundle\\Entity\\Category')
            ->addJoinColumn('category_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->addLead(false, 'CASCADE', false);

        \$builder->addDateAdded();

        \$builder->createField('manuallyRemoved', 'boolean')
            ->columnName('manually_removed')
            ->build();

        \$builder->createField('manuallyAdded', 'boolean')
            ->columnName('manually_added')
            ->build();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return \$this->id;
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
     * @return Category
     */
    public function getCategory()
    {
        return \$this->category;
    }

    /**
     * @param Category \$category
     */
    public function setCategory(\$category)
    {
        \$this->category = \$category;
    }

    /**
     * @return bool
     */
    public function getManuallyRemoved()
    {
        return \$this->manuallyRemoved;
    }

    /**
     * @param bool \$manuallyRemoved
     */
    public function setManuallyRemoved(\$manuallyRemoved)
    {
        \$this->manuallyRemoved = \$manuallyRemoved;
    }

    /**
     * @return bool
     */
    public function wasManuallyRemoved()
    {
        return \$this->manuallyRemoved;
    }

    /**
     * @return bool
     */
    public function getManuallyAdded()
    {
        return \$this->manuallyAdded;
    }

    /**
     * @param bool \$manuallyAdded
     */
    public function setManuallyAdded(\$manuallyAdded)
    {
        \$this->manuallyAdded = \$manuallyAdded;
    }

    /**
     * @return bool
     */
    public function wasManuallyAdded()
    {
        return \$this->manuallyAdded;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/LeadCategory.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/LeadCategory.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Entity/LeadCategory.php");
    }
}
