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

/* @bundles/StageBundle/Entity/Stage.php */
class __TwigTemplate_f95a714f38be8c7e4d8f9e25c8f74639f5f3e7d5144a58689c99cbd42f906aba extends Template
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

namespace Mautic\\StageBundle\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\FormEntity;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Class Stage.
 */
class Stage extends FormEntity
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$name;

    /**
     * @var string
     */
    private \$description;

    /**
     * @var int
     */
    private \$weight = 0;

    /**
     * @var \\DateTime
     */
    private \$publishUp;

    /**
     * @var \\DateTime
     */
    private \$publishDown;

    /**
     * @var ArrayCollection
     */
    private \$log;

    /**
     * @var \\Mautic\\CategoryBundle\\Entity\\Category
     **/
    private \$category;

    public function __clone()
    {
        \$this->id = null;

        parent::__clone();
    }

    /**
     * Construct.
     */
    public function __construct()
    {
        \$this->log = new ArrayCollection();
    }

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);
        \$builder->setTable('stages')
            ->setCustomRepositoryClass('Mautic\\StageBundle\\Entity\\StageRepository');

        \$builder->addIdColumns();

        \$builder->createField('weight', 'integer')
            ->build();

        \$builder->addPublishDates();

        \$builder->createOneToMany('log', 'LeadStageLog')
            ->mappedBy('stage')
            ->cascadePersist()
            ->cascadeRemove()
            ->fetchExtraLazy()
            ->build();

        \$builder->addCategory();
    }

    public static function loadValidatorMetadata(ClassMetadata \$metadata)
    {
        \$metadata->addPropertyConstraint('name', new Assert\\NotBlank([
            'message' => 'mautic.core.name.required',
        ]));
    }

    /**
     * Prepares the metadata for API usage.
     *
     * @param \$metadata
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata)
    {
        \$metadata->setGroupPrefix('stage')
            ->addListProperties(
                [
                    'id',
                    'name',
                    'category',
                    'weight',
                    'description',
                ]
            )
            ->addProperties(
                [
                    'publishUp',
                    'publishDown',
                ]
            )
            ->build();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set weight.
     *
     * @return int
     */
    public function setWeight(\$type)
    {
        \$this->weight = (int) \$type;

        return \$this;
    }

    /**
     * Get weight.
     *
     * @return int
     */
    public function getWeight()
    {
        return \$this->weight;
    }

    /**
     * @return array
     */
    public function convertToArray()
    {
        return get_object_vars(\$this);
    }

    /**
     * Set description.
     *
     * @param string \$description
     *
     * @return string
     */
    public function setDescription(\$description)
    {
        \$this->isChanged('description', \$description);
        \$this->description = \$description;

        return \$this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * Set name.
     *
     * @param string \$name
     *
     * @return string
     */
    public function setName(\$name)
    {
        \$this->isChanged('name', \$name);
        \$this->name = \$name;

        return \$this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Add log.
     *
     * @return Log
     */
    public function addLog(LeadStageLog \$log)
    {
        \$this->log[] = \$log;

        return \$this;
    }

    /**
     * Remove log.
     */
    public function removeLog(LeadStageLog \$log)
    {
        \$this->log->removeElement(\$log);
    }

    /**
     * Get log.
     *
     * @return \\Doctrine\\Common\\Collections\\Collection
     */
    public function getLog()
    {
        return \$this->log;
    }

    /**
     * Set publishUp.
     *
     * @param \\DateTime \$publishUp
     *
     * @return Stage
     */
    public function setPublishUp(\$publishUp)
    {
        \$this->isChanged('publishUp', \$publishUp);
        \$this->publishUp = \$publishUp;

        return \$this;
    }

    /**
     * Get publishUp.
     *
     * @return \\DateTime
     */
    public function getPublishUp()
    {
        return \$this->publishUp;
    }

    /**
     * Set publishDown.
     *
     * @param \\DateTime \$publishDown
     *
     * @return Stage
     */
    public function setPublishDown(\$publishDown)
    {
        \$this->isChanged('publishDown', \$publishDown);
        \$this->publishDown = \$publishDown;

        return \$this;
    }

    /**
     * Get publishDown.
     *
     * @return \\DateTime
     */
    public function getPublishDown()
    {
        return \$this->publishDown;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return \$this->category;
    }

    /**
     * @param mixed \$category
     */
    public function setCategory(\$category)
    {
        \$this->category = \$category;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StageBundle/Entity/Stage.php";
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
        return new Source("", "@bundles/StageBundle/Entity/Stage.php", "/var/www/html/mautic/docroot/app/bundles/StageBundle/Entity/Stage.php");
    }
}
