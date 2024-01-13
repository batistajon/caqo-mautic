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

/* @bundles/PointBundle/Entity/LeadTriggerLog.php */
class __TwigTemplate_45217cfcc0605577f02b01c4acfe5c9f6b9af1e3dd4e0194f5ce19da4bee4844 extends Template
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

namespace Mautic\\PointBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class LeadTriggerLog
{
    /**
     * @var TriggerEvent
     **/
    private \$event;

    /**
     * @var \\Mautic\\LeadBundle\\Entity\\Lead
     **/
    private \$lead;

    /**
     * @var \\Mautic\\CoreBundle\\Entity\\IpAddress
     **/
    private \$ipAddress;

    /**
     * @var \\DateTime
     **/
    private \$dateFired;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('point_lead_event_log')
            ->setCustomRepositoryClass(LeadTriggerLogRepository::class);

        \$builder->createManyToOne('event', 'TriggerEvent')
            ->isPrimaryKey()
            ->addJoinColumn('event_id', 'id', false, false, 'CASCADE')
            ->inversedBy('log')
            ->build();

        \$builder->addLead(false, 'CASCADE', true);

        \$builder->addIpAddress(true);

        \$builder->createField('dateFired', 'datetime')
            ->columnName('date_fired')
            ->build();
    }

    /**
     * @return mixed
     */
    public function getDateFired()
    {
        return \$this->dateFired;
    }

    /**
     * @param mixed \$dateFired
     */
    public function setDateFired(\$dateFired)
    {
        \$this->dateFired = \$dateFired;
    }

    /**
     * @return mixed
     */
    public function getIpAddress()
    {
        return \$this->ipAddress;
    }

    /**
     * @param mixed \$ipAddress
     */
    public function setIpAddress(\$ipAddress)
    {
        \$this->ipAddress = \$ipAddress;
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
     * @return mixed
     */
    public function getEvent()
    {
        return \$this->event;
    }

    /**
     * @param mixed \$event
     */
    public function setEvent(\$event)
    {
        \$this->event = \$event;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Entity/LeadTriggerLog.php";
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
        return new Source("", "@bundles/PointBundle/Entity/LeadTriggerLog.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Entity/LeadTriggerLog.php");
    }
}
