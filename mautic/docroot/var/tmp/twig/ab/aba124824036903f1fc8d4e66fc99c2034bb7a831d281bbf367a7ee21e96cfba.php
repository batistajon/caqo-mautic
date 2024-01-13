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

/* @bundles/CampaignBundle/Tests/Executioner/Dispatcher/DecisionDispatcherTest.php */
class __TwigTemplate_4d5a25572ddb054218145b1b0dbc974d3afbd391111513c8cf9a66d36c2bddfc extends Template
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

declare(strict_types=1);

namespace Mautic\\CampaignBundle\\Tests\\Executioner\\Dispatcher;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\DecisionEvent;
use Mautic\\CampaignBundle\\Event\\DecisionResultsEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\DecisionAccessor;
use Mautic\\CampaignBundle\\Executioner\\Dispatcher\\DecisionDispatcher;
use Mautic\\CampaignBundle\\Executioner\\Dispatcher\\LegacyEventDispatcher;
use Mautic\\CampaignBundle\\Executioner\\Result\\EvaluatedContacts;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class DecisionDispatcherTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var MockObject|LegacyEventDispatcher
     */
    private \$legacyDispatcher;

    /**
     * @var MockObject|DecisionAccessor
     */
    private \$config;

    /**
     * @var DecisionDispatcher
     */
    private \$decisionDispatcher;

    protected function setUp(): void
    {
        \$this->dispatcher         = \$this->createMock(EventDispatcherInterface::class);
        \$this->legacyDispatcher   = \$this->createMock(LegacyEventDispatcher::class);
        \$this->config             = \$this->createMock(DecisionAccessor::class);
        \$this->decisionDispatcher = new DecisionDispatcher(\$this->dispatcher, \$this->legacyDispatcher);
    }

    public function testDecisionEventIsDispatched(): void
    {
        \$this->config->expects(\$this->once())
            ->method('getEventName')
            ->willReturn('something');

        \$this->legacyDispatcher->expects(\$this->never())
            ->method('dispatchDecisionEvent');

        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with('something', \$this->isInstanceOf(DecisionEvent::class));

        \$this->decisionDispatcher->dispatchRealTimeEvent(\$this->config, new LeadEventLog(), null);
    }

    public function testDecisionEvaluationEventIsDispatched(): void
    {
        \$this->config->expects(\$this->never())
            ->method('getEventName');

        \$this->legacyDispatcher->expects(\$this->once())
            ->method('dispatchDecisionEvent');

        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(CampaignEvents::ON_EVENT_DECISION_EVALUATION, \$this->isInstanceOf(DecisionEvent::class));

        \$this->decisionDispatcher->dispatchEvaluationEvent(\$this->config, new LeadEventLog());
    }

    public function testDecisionResultsEventIsDispatched(): void
    {
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(CampaignEvents::ON_EVENT_DECISION_EVALUATION_RESULTS, \$this->isInstanceOf(DecisionResultsEvent::class));

        \$this->decisionDispatcher->dispatchDecisionResultsEvent(\$this->config, new ArrayCollection([new LeadEventLog()]), new EvaluatedContacts());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Executioner/Dispatcher/DecisionDispatcherTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/Dispatcher/DecisionDispatcherTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Executioner/Dispatcher/DecisionDispatcherTest.php");
    }
}
