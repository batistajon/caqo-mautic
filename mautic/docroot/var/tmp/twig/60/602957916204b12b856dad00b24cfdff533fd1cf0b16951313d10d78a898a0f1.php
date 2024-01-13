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

/* @bundles/StageBundle/Entity/LeadStageLog.php */
class __TwigTemplate_eb1cf4fc89621af1babca70ab2a6ee21b0960854d993cd10e8c21da28fccdef3 extends Template
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

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

/**
 * Class LeadStageLog.
 */
class LeadStageLog
{
    /**
     * @var Stage
     **/
    private \$stage;

    /**
     * @var \\Mautic\\LeadBundle\\Entity\\Lead
     */
    private \$lead;

    /**
     * @var \\Mautic\\CoreBundle\\Entity\\IpAddress
     */
    private \$ipAddress;

    /**
     * @var \\DateTime
     **/
    private \$dateFired;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata)
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('stage_lead_action_log')
            ->setCustomRepositoryClass('Mautic\\StageBundle\\Entity\\LeadStageLogRepository');

        \$builder->createManyToOne('stage', 'Stage')
            ->isPrimaryKey()
            ->addJoinColumn('stage_id', 'id', true, false, 'CASCADE')
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
    public function getStage()
    {
        return \$this->stage;
    }

    /**
     * @param mixed \$stage
     */
    public function setStage(\$stage)
    {
        \$this->stage = \$stage;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StageBundle/Entity/LeadStageLog.php";
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
        return new Source("", "@bundles/StageBundle/Entity/LeadStageLog.php", "/var/www/html/mautic/docroot/app/bundles/StageBundle/Entity/LeadStageLog.php");
    }
}
