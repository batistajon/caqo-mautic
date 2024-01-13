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

/* @bundles/LeadBundle/Entity/Tag.php */
class __TwigTemplate_5af73151c69d38c73641c980aab113a263aef67b82f178ac13f9f748af1d46fa extends Template
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

use Doctrine\\DBAL\\Types\\Type;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Helper\\InputHelper;

class Tag
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$tag;

    /**
     * @var string
     */
    private \$description;

    /**
     * @param string \$tag
     * @param bool   \$clean
     */
    public function __construct(\$tag = null, \$clean = true)
    {
        \$this->tag = \$clean ? \$this->validateTag(\$tag) : \$tag;
    }

    public static function loadMetadata(ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);
        \$builder->setTable('lead_tags')
            ->setCustomRepositoryClass(TagRepository::class)
            ->addIndex(['tag'], 'lead_tag_search');

        \$builder->addId();
        \$builder->addField('tag', Type::STRING);
        \$builder->addNamedField('description', Type::TEXT, 'description', true);
    }

    public static function loadApiMetadata(ApiMetadataDriver \$metadata)
    {
        \$metadata->setGroupPrefix('tag')
            ->addListProperties(
                [
                    'id',
                    'tag',
                    'description',
                ]
            )
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
     * @return string
     */
    public function getTag()
    {
        return \$this->tag;
    }

    /**
     * @param string \$tag
     *
     * @return Tag
     */
    public function setTag(\$tag)
    {
        \$this->tag = \$this->validateTag(\$tag);

        return \$this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * @param string \$description
     *
     * @return Tag
     */
    public function setDescription(\$description)
    {
        \$this->description = \$description;

        return \$this;
    }

    /**
     * @param string \$tag
     *
     * @return Tag
     */
    protected function validateTag(\$tag)
    {
        return InputHelper::string(trim(\$tag));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/Tag.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/Tag.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Entity/Tag.php");
    }
}
