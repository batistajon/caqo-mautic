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

/* @bundles/LeadBundle/Entity/PointsChangeLog.php */
class __TwigTemplate_6a8040223ef326b92c421f693b2cfc0805b07fab8641f13faee4eb45df8a155a extends Template
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

/**
 * Class PointsChangeLog.
 */
class PointsChangeLog
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var Lead
     */
    private \$lead;

    /**
     * @var \\Mautic\\CoreBundle\\Entity\\IpAddress
     */
    private \$ipAddress;

    /**
     * @var string
     */
    private \$type;

    /**
     * @var string
     */
    private \$eventName;

    /**
     * @var string
     */
    private \$actionName;

    /**
     * @var int
     */
    private \$delta;

    /**
     * @var \\DateTime
     */
    private \$dateAdded;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('lead_points_change_log')
            ->setCustomRepositoryClass('Mautic\\LeadBundle\\Entity\\PointsChangeLogRepository')
            ->addIndex(['date_added'], 'point_date_added');

        \$builder->addBigIntIdField();

        \$builder->addLead(false, 'CASCADE', false, 'pointsChangeLog');

        \$builder->addIpAddress();

        \$builder->createField('type', 'text')
            ->length(50)
            ->build();

        \$builder->createField('eventName', 'string')
            ->columnName('event_name')
            ->build();

        \$builder->createField('actionName', 'string')
            ->columnName('action_name')
            ->build();

        \$builder->addField('delta', 'integer');

        \$builder->addDateAdded();
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
     * Set type.
     *
     * @param string \$type
     *
     * @return PointsChangeLog
     */
    public function setType(\$type)
    {
        \$this->type = \$type;

        return \$this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Set eventName.
     *
     * @param string \$eventName
     *
     * @return PointsChangeLog
     */
    public function setEventName(\$eventName)
    {
        \$this->eventName = \$eventName;

        return \$this;
    }

    /**
     * Get eventName.
     *
     * @return string
     */
    public function getEventName()
    {
        return \$this->eventName;
    }

    /**
     * Set actionName.
     *
     * @param string \$actionName
     *
     * @return PointsChangeLog
     */
    public function setActionName(\$actionName)
    {
        \$this->actionName = \$actionName;

        return \$this;
    }

    /**
     * Get actionName.
     *
     * @return string
     */
    public function getActionName()
    {
        return \$this->actionName;
    }

    /**
     * Set delta.
     *
     * @param int \$delta
     *
     * @return PointsChangeLog
     */
    public function setDelta(\$delta)
    {
        \$this->delta = \$delta;

        return \$this;
    }

    /**
     * Get delta.
     *
     * @return int
     */
    public function getDelta()
    {
        return \$this->delta;
    }

    /**
     * Set dateAdded.
     *
     * @param \\DateTime \$dateAdded
     *
     * @return PointsChangeLog
     */
    public function setDateAdded(\$dateAdded)
    {
        \$this->dateAdded = \$dateAdded;

        return \$this;
    }

    /**
     * Get dateAdded.
     *
     * @return \\DateTime
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * Set lead.
     *
     * @return PointsChangeLog
     */
    public function setLead(Lead \$lead)
    {
        \$this->lead = \$lead;

        return \$this;
    }

    /**
     * Get lead.
     *
     * @return \\Mautic\\LeadBundle\\Entity\\Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * Set ipAddress.
     *
     * @return PointsChangeLog
     */
    public function setIpAddress(\\Mautic\\CoreBundle\\Entity\\IpAddress \$ipAddress)
    {
        \$this->ipAddress = \$ipAddress;

        return \$this;
    }

    /**
     * Get ipAddress.
     *
     * @return \\Mautic\\CoreBundle\\Entity\\IpAddress
     */
    public function getIpAddress()
    {
        return \$this->ipAddress;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/PointsChangeLog.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/PointsChangeLog.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Entity/PointsChangeLog.php");
    }
}
