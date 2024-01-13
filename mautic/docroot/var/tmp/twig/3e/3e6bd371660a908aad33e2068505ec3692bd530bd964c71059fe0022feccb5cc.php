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

/* @bundles/LeadBundle/Event/LeadChangeEvent.php */
class __TwigTemplate_4ef18d2bf95de0c2b3ff9218fc315ba5ca133178cfa8bfedd613cfa7e9d103ae extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\Event;

class LeadChangeEvent extends Event
{
    /**
     * @var Lead
     */
    private \$oldLead;

    private \$oldTrackingId;

    /**
     * @var Lead
     */
    private \$newLead;

    private \$newTrackingId;

    /**
     * @param \$oldTrackingId
     * @param \$newTrackingId
     */
    public function __construct(Lead \$oldLead, \$oldTrackingId, Lead \$newLead, \$newTrackingId)
    {
        \$this->oldLead       = \$oldLead;
        \$this->oldTrackingId = \$oldTrackingId;
        \$this->newLead       = \$newLead;
        \$this->newTrackingId = \$newTrackingId;
    }

    /**
     * @return Lead
     */
    public function getOldLead()
    {
        return \$this->oldLead;
    }

    /**
     * @return mixed
     */
    public function getOldTrackingId()
    {
        return \$this->oldTrackingId;
    }

    /**
     * @return Lead
     */
    public function getNewLead()
    {
        return \$this->newLead;
    }

    /**
     * @return mixed
     */
    public function getNewTrackingId()
    {
        return \$this->newTrackingId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/LeadChangeEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadChangeEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/LeadChangeEvent.php");
    }
}
