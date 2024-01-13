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

/* @bundles/PointBundle/Event/TriggerExecutedEvent.php */
class __TwigTemplate_97dc62098e0729f29d2c7c2b2b13cbaa85bc93cfd332ab688edb3346e1ad53d9 extends Template
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

namespace Mautic\\PointBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PointBundle\\Entity\\TriggerEvent as TriggerEventEntity;
use Symfony\\Component\\EventDispatcher\\Event;

class TriggerExecutedEvent extends Event
{
    /** @var TriggerEventEntity */
    private \$triggerEvent;

    /** @var Lead */
    private \$lead;

    /** @var bool */
    private \$result;

    public function __construct(TriggerEventEntity \$triggerEvent, Lead \$lead)
    {
        \$this->triggerEvent = \$triggerEvent;
        \$this->lead         = \$lead;
    }

    /**
     * @return TriggerEventEntity
     */
    public function getTriggerEvent()
    {
        return \$this->triggerEvent;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return bool
     */
    public function getResult()
    {
        return \$this->result;
    }

    public function setSucceded()
    {
        \$this->result = true;
    }

    public function setFailed()
    {
        \$this->result = false;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Event/TriggerExecutedEvent.php";
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
        return new Source("", "@bundles/PointBundle/Event/TriggerExecutedEvent.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Event/TriggerExecutedEvent.php");
    }
}
