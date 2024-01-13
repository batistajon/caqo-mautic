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

/* @bundles/EmailBundle/Entity/Copy.php */
class __TwigTemplate_04f390831013672da698d392aa30032fbbccdc8d376abd3dac36bb652447b92c extends Template
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

namespace Mautic\\EmailBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Helper\\EmojiHelper;

class Copy
{
    /**
     * MD5 hash of the content.
     *
     * @var string
     */
    private \$id;

    /**
     * @var \\DateTime
     */
    private \$dateCreated;

    /**
     * @var string
     */
    private \$body;

    /**
     * @var string|null
     */
    private \$subject;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('email_copies')
            ->setCustomRepositoryClass('Mautic\\EmailBundle\\Entity\\CopyRepository');

        \$builder->createField('id', 'string')
            ->isPrimaryKey()
            ->length(32)
            ->build();

        \$builder->createField('dateCreated', 'datetime')
            ->columnName('date_created')
            ->build();

        \$builder->addNullableField('body', 'text');

        \$builder->addNullableField('subject', 'text');
    }

    /**
     * @param \$id
     *
     * @return \$this
     */
    public function setId(\$id)
    {
        \$this->id = \$id;

        return \$this;
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
    public function getDateCreated()
    {
        return \$this->dateCreated;
    }

    /**
     * @param \\DateTime \$dateCreated
     *
     * @return Copy
     */
    public function setDateCreated(\$dateCreated)
    {
        \$this->dateCreated = \$dateCreated;

        return \$this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return \$this->body;
    }

    /**
     * @param string \$body
     *
     * @return Copy
     */
    public function setBody(\$body)
    {
        // Ensure it's clean of emoji
        \$body = EmojiHelper::toShort(\$body);

        \$this->body = \$body;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return \$this->subject;
    }

    /**
     * @param mixed \$subject
     *
     * @return Copy
     */
    public function setSubject(\$subject)
    {
        // Ensure it's clean of emoji
        \$subject = EmojiHelper::toShort(\$subject);

        \$this->subject = \$subject;

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
        return "@bundles/EmailBundle/Entity/Copy.php";
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
        return new Source("", "@bundles/EmailBundle/Entity/Copy.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Entity/Copy.php");
    }
}
