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

/* @bundles/UserBundle/Entity/IdEntry.php */
class __TwigTemplate_6030288e010fb268b1bd1e09f94170f22beb5ce0a0b3d5ef80e6575d2b4aabcb extends Template
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

namespace Mautic\\UserBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

/**
 * @ORM\\Entity()
 */
class IdEntry
{
    /**
     * @var int
     */
    protected \$id;

    /**
     * @var string
     */
    protected \$entityId;

    /**
     * @var int
     */
    protected \$expiryTimestamp;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('saml_id_entry');

        \$builder->createField('id', 'string')
             ->makePrimaryKey()
             ->generatedValue('NONE')
             ->build();

        \$builder->createField('entityId', 'string')
            ->columnName('entity_id')
            ->makePrimaryKey()
            ->generatedValue('NONE')
            ->build();

        \$builder->createField('expiryTimestamp', 'integer')
            ->build();
    }

    /**
     * @return string
     */
    public function getEntityId()
    {
        return \$this->entityId;
    }

    /**
     * @param string \$entityId
     *
     * @return IdEntry
     */
    public function setEntityId(\$entityId)
    {
        \$this->entityId = \$entityId;

        return \$this;
    }

    /**
     * @return \\DateTime
     */
    public function getExpiryTime()
    {
        \$dt = new \\DateTime();
        \$dt->setTimestamp(\$this->expiryTimestamp);

        return \$dt;
    }

    /**
     * @return IdEntry
     */
    public function setExpiryTime(\\DateTime \$expiryTime)
    {
        \$this->expiryTimestamp = \$expiryTime->getTimestamp();

        return \$this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @param int \$id
     *
     * @return IdEntry
     */
    public function setId(\$id)
    {
        \$this->id = \$id;

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
        return "@bundles/UserBundle/Entity/IdEntry.php";
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
        return new Source("", "@bundles/UserBundle/Entity/IdEntry.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Entity/IdEntry.php");
    }
}
