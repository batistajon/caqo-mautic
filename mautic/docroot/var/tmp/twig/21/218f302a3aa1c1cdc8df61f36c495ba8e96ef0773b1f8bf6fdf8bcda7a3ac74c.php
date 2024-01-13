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

/* @bundles/CampaignBundle/Event/DecisionResultsEvent.php */
class __TwigTemplate_986184d60b1e6c7b9771796a1b69a00f58a479c75abd577ea6881ba8365c56b9 extends Template
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

namespace Mautic\\CampaignBundle\\Event;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;
use Mautic\\CampaignBundle\\Executioner\\Result\\EvaluatedContacts;
use Symfony\\Component\\EventDispatcher\\Event;

class DecisionResultsEvent extends Event
{
    /**
     * @var AbstractEventAccessor
     */
    private \$eventConfig;

    /**
     * @var ArrayCollection|LeadEventLog[]
     */
    private \$eventLogs;

    /**
     * @var EvaluatedContacts
     */
    private \$evaluatedContacts;

    /**
     * DecisionResultsEvent constructor.
     */
    public function __construct(AbstractEventAccessor \$config, ArrayCollection \$logs, EvaluatedContacts \$evaluatedContacts)
    {
        \$this->eventConfig       = \$config;
        \$this->eventLogs         = \$logs;
        \$this->evaluatedContacts = \$evaluatedContacts;
    }

    /**
     * @return AbstractEventAccessor
     */
    public function getEventConfig()
    {
        return \$this->eventConfig;
    }

    /**
     * @return ArrayCollection|LeadEventLog[]
     */
    public function getLogs()
    {
        return \$this->eventLogs;
    }

    /**
     * @return EvaluatedContacts
     */
    public function getEvaluatedContacts()
    {
        return \$this->evaluatedContacts;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Event/DecisionResultsEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/DecisionResultsEvent.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Event/DecisionResultsEvent.php");
    }
}
