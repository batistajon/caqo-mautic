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

/* @bundles/PointBundle/Entity/LeadPointLog.php */
class __TwigTemplate_3ef08c52d5c07954da8f23e6f3e7c306ee2e9c504350cbed904bd575d4481493 extends Template
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

class LeadPointLog
{
    /**
     * @var Point
     **/
    private \$point;

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

        \$builder->setTable('point_lead_action_log')
            ->setCustomRepositoryClass('Mautic\\PointBundle\\Entity\\LeadPointLogRepository');

        \$builder->createManyToOne('point', 'Point')
            ->isPrimaryKey()
            ->addJoinColumn('point_id', 'id', true, false, 'CASCADE')
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
    public function getPoint()
    {
        return \$this->point;
    }

    /**
     * @param mixed \$point
     */
    public function setPoint(\$point)
    {
        \$this->point = \$point;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Entity/LeadPointLog.php";
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
        return new Source("", "@bundles/PointBundle/Entity/LeadPointLog.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Entity/LeadPointLog.php");
    }
}
