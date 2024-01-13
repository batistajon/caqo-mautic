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

/* @bundles/CampaignBundle/Executioner/Result/Responses.php */
class __TwigTemplate_fcf52f8d1d59141b8dd4391052daf7041c287bafcefbe83d7658981841d1af50 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Result;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;

class Responses
{
    /**
     * @var array
     */
    private \$actionResponses = [];

    /**
     * @var array
     */
    private \$conditionResponses = [];

    /**
     * DecisionResponses constructor.
     */
    public function setFromLogs(ArrayCollection \$logs)
    {
        /** @var LeadEventLog \$log */
        foreach (\$logs as \$log) {
            \$metadata = \$log->getMetadata();
            \$response = \$metadata;

            if (isset(\$metadata['timeline']) && 1 === count(\$metadata)) {
                // Legacy listeners set a string in CampaignExecutionEvent::setResult that Lead::appendToMetadata put into
                // under a timeline key for BC support. To keep BC for decisions, we have to extract that back out for the bubble
                // up responses

                \$response = \$metadata['timeline'];
            }

            \$this->setResponse(\$log->getEvent(), \$response);
        }
    }

    /**
     * @param mixed \$response
     */
    public function setResponse(Event \$event, \$response)
    {
        switch (\$event->getEventType()) {
            case Event::TYPE_ACTION:
                if (!isset(\$this->actionResponses[\$event->getType()])) {
                    \$this->actionResponses[\$event->getType()] = [];
                }
                \$this->actionResponses[\$event->getType()][\$event->getId()] = \$response;
                break;
            case Event::TYPE_CONDITION:
                if (!isset(\$this->conditionResponses[\$event->getType()])) {
                    \$this->conditionResponses[\$event->getType()] = [];
                }
                \$this->conditionResponses[\$event->getType()][\$event->getId()] = \$response;
                break;
        }
    }

    /**
     * @param string|null \$type
     *
     * @return array
     */
    public function getActionResponses(\$type = null)
    {
        if (\$type) {
            return (isset(\$this->actionResponses[\$type])) ? \$this->actionResponses[\$type] : [];
        }

        return \$this->actionResponses;
    }

    /**
     * @param string|null \$type
     *
     * @return array
     */
    public function getConditionResponses(\$type = null)
    {
        if (\$type) {
            return (isset(\$this->conditionResponses[\$type])) ? \$this->conditionResponses[\$type] : [];
        }

        return \$this->conditionResponses;
    }

    /**
     * @return int
     */
    public function containsResponses()
    {
        return count(\$this->actionResponses) + count(\$this->conditionResponses);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/Result/Responses.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Result/Responses.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Executioner/Result/Responses.php");
    }
}
