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

/* @bundles/CategoryBundle/Entity/Category.php */
class __TwigTemplate_28f076ebc2d234fb713586210578b9cdb2d4a0cb756978ca394902457c355b4a extends Template
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

namespace Mautic\\CategoryBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\FormEntity;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Class Category.
 */
class Category extends FormEntity
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$title;

    /**
     * @var string
     */
    private \$description;

    /**
     * @var string
     */
    private \$alias;

    /**
     * @var string
     */
    private \$color;

    /**
     * @var string
     */
    private \$bundle;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('categories')
            ->setCustomRepositoryClass('Mautic\\CategoryBundle\\Entity\\CategoryRepository')
            ->addIndex(['alias'], 'category_alias_search');

        \$builder->addIdColumns('title');

        \$builder->addField('alias', 'string');

        \$builder->createField('color', 'string')
            ->nullable()
            ->length(7)
            ->build();

        \$builder->createField('bundle', 'string')
            ->length(50)
            ->build();
    }

    public static function loadValidatorMetadata(ClassMetadata \$metadata)
    {
        \$metadata->addPropertyConstraint(
            'title',
            new NotBlank(
                [
                    'message' => 'mautic.core.title.required',
                ]
            )
        );

        \$metadata->addPropertyConstraint(
            'bundle',
            new NotBlank(
                [
                    'message' => 'mautic.core.value.required',
                ]
            )
        );
    }

    /**
     * Prepares the metadata for API usage.
     *
     * @param \$metadata
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata)
    {
        \$metadata->setGroupPrefix('category')
            ->addListProperties(
                [
                    'id',
                    'title',
                    'alias',
                    'description',
                    'color',
                    'bundle',
                ]
            )
            ->build();
    }

    public function __clone()
    {
        \$this->id = null;

        parent::__clone();
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
     * Set title.
     *
     * @param string \$title
     *
     * @return Category
     */
    public function setTitle(\$title)
    {
        \$this->title = \$title;

        return \$this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return \$this->title;
    }

    /**
     * Set alias.
     *
     * @param string \$alias
     *
     * @return Category
     */
    public function setAlias(\$alias)
    {
        \$this->alias = \$alias;

        return \$this;
    }

    /**
     * Get alias.
     *
     * @return string
     */
    public function getAlias()
    {
        return \$this->alias;
    }

    /**
     * Set description.
     *
     * @param string \$description
     *
     * @return Category
     */
    public function setDescription(\$description)
    {
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
     * Set color.
     *
     * @param string \$color
     *
     * @return Category
     */
    public function setColor(\$color)
    {
        \$this->color = \$color;
    }

    /**
     * Get color.
     *
     * @return string
     */
    public function getColor()
    {
        return \$this->color;
    }

    /**
     * Set bundle.
     *
     * @param string \$bundle
     *
     * @return Category
     */
    public function setBundle(\$bundle)
    {
        \$this->bundle = \$bundle;
    }

    /**
     * Get bundle.
     *
     * @return string
     */
    public function getBundle()
    {
        return \$this->bundle;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Entity/Category.php";
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
        return new Source("", "@bundles/CategoryBundle/Entity/Category.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/Entity/Category.php");
    }
}
