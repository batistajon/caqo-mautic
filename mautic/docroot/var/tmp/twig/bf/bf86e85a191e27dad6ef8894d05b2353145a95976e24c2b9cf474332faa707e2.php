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

/* @bundles/NotificationBundle/Entity/PushID.php */
class __TwigTemplate_7cc4bdbeac4a9b44288e941eba0accf3208312fe6fa065af97dd7bb13b5db4a0 extends Template
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

namespace Mautic\\NotificationBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\LeadBundle\\Entity\\Lead;

class PushID
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var \\Mautic\\LeadBundle\\Entity\\Lead
     */
    private \$lead;

    /**
     * @var string
     */
    private \$pushID;

    /**
     * @var bool
     */
    private \$enabled;

    /**
     * @var bool
     */
    private \$mobile;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('push_ids')
            ->setCustomRepositoryClass('Mautic\\NotificationBundle\\Entity\\PushIDRepository');

        \$builder->createField('id', 'integer')
            ->isPrimaryKey()
            ->generatedValue()
            ->build();

        \$builder->createField('pushID', 'string')
            ->columnName('push_id')
            ->nullable(false)
            ->build();

        \$builder->createManyToOne('lead', 'Mautic\\LeadBundle\\Entity\\Lead')
            ->addJoinColumn('lead_id', 'id', true, false, 'SET NULL')
            ->inversedBy('pushIds')
            ->build();

        \$builder->createField('enabled', 'boolean')->build();
        \$builder->createField('mobile', 'boolean')->build();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @param int \$id
     *
     * @return \$this
     */
    public function setId(\$id)
    {
        \$this->id = \$id;

        return \$this;
    }

    /**
     * @return \\Mautic\\LeadBundle\\Entity\\Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return \$this
     */
    public function setLead(Lead \$lead)
    {
        \$this->lead = \$lead;

        return \$this;
    }

    /**
     * @return string
     */
    public function getPushID()
    {
        return \$this->pushID;
    }

    /**
     * @param string \$pushID
     *
     * @return \$this
     */
    public function setPushID(\$pushID)
    {
        \$this->pushID = \$pushID;

        return \$this;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return \$this->enabled;
    }

    /**
     * @param \$enabled
     *
     * @return \$this
     */
    public function setEnabled(\$enabled)
    {
        \$this->enabled = \$enabled;

        return \$this;
    }

    /**
     * @return bool
     */
    public function isMobile()
    {
        return \$this->mobile;
    }

    /**
     * @param bool \$mobile
     *
     * @return \$this
     */
    public function setMobile(\$mobile)
    {
        \$this->mobile = \$mobile;

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
        return "@bundles/NotificationBundle/Entity/PushID.php";
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
        return new Source("", "@bundles/NotificationBundle/Entity/PushID.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Entity/PushID.php");
    }
}
