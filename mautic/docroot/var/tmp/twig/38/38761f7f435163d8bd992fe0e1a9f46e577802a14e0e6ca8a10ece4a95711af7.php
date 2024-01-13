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

/* @bundles/DynamicContentBundle/Entity/DynamicContentLeadData.php */
class __TwigTemplate_d543811463fac87e0bb94ac19202518b64231e1f930fab5e3e699728819596c5 extends Template
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

namespace Mautic\\DynamicContentBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\CommonEntity;
use Mautic\\LeadBundle\\Entity\\Lead;

class DynamicContentLeadData extends CommonEntity
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var \\DateTime
     */
    private \$dateAdded;

    /**
     * @var DynamicContent
     */
    private \$dynamicContent;

    /**
     * @var Lead
     */
    private \$lead;

    /**
     * @var \\DateTime
     */
    private \$dataAdded;

    /**
     * @var string
     */
    private \$slot;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('dynamic_content_lead_data')
            ->setCustomRepositoryClass('Mautic\\DynamicContentBundle\\Entity\\DynamicContentLeadDataRepository');

        \$builder->addIdColumns(false, false);

        \$builder->addDateAdded(true);

        \$builder->addLead();

        \$builder->createManyToOne('dynamicContent', 'DynamicContent')
            ->inversedBy('id')
            ->addJoinColumn('dynamic_content_id', 'id', true, false, 'CASCADE')
            ->build();

        \$builder->createField('slot', 'text')
            ->columnName('slot')
            ->build();
    }

    /**
     * @return int
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
     * @param \\DateTime \$dateAdded
     *
     * @return DynamicContentLeadData
     */
    public function setDateAdded(\$dateAdded)
    {
        \$this->dateAdded = \$dateAdded;

        return \$this;
    }

    /**
     * @return DynamicContent
     */
    public function getDynamicContent()
    {
        return \$this->dynamicContent;
    }

    /**
     * @param DynamicContent \$dynamicContent
     *
     * @return DynamicContentLeadData
     */
    public function setDynamicContent(\$dynamicContent)
    {
        \$this->dynamicContent = \$dynamicContent;

        return \$this;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @param Lead \$lead
     *
     * @return DynamicContentLeadData
     */
    public function setLead(\$lead)
    {
        \$this->lead = \$lead;

        return \$this;
    }

    /**
     * @return \\DateTime
     */
    public function getDataAdded()
    {
        return \$this->dataAdded;
    }

    /**
     * @param \\DateTime \$dataAdded
     *
     * @return DynamicContentLeadData
     */
    public function setDataAdded(\$dataAdded)
    {
        \$this->dataAdded = \$dataAdded;

        return \$this;
    }

    /**
     * @return string
     */
    public function getSlot()
    {
        return \$this->slot;
    }

    /**
     * @param string \$slot
     *
     * @return DynamicContentLeadData
     */
    public function setSlot(\$slot)
    {
        \$this->slot = \$slot;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/Entity/DynamicContentLeadData.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Entity/DynamicContentLeadData.php", "/var/www/html/mautic/docroot/app/bundles/DynamicContentBundle/Entity/DynamicContentLeadData.php");
    }
}
