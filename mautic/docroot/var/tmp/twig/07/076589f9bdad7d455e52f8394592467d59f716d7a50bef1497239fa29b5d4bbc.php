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

/* @bundles/CampaignBundle/Tests/Executioner/Dispatcher/ConditionDispatcherTest.php */
class __TwigTemplate_6f13ce476e3e69d35e47e7c1774e5597bddfb6342332d59d1a3133f89439e8d2 extends Template
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

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\ConditionEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ConditionAccessor;
use Mautic\\CampaignBundle\\Executioner\\Dispatcher\\ConditionDispatcher;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ConditionDispatcherTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|EventDispatcherInterface
     */
    private \$dispatcher;

    /**
     * @var MockObject|ConditionAccessor
     */
    private \$config;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$this->config     = \$this->createMock(ConditionAccessor::class);
    }

    public function testConditionEventIsDispatched(): void
    {
        \$this->config->expects(\$this->once())
            ->method('getEventName')
            ->willReturn('something');

        \$this->dispatcher->expects(\$this->exactly(2))
            ->method('dispatch')
            ->withConsecutive(
                ['something', \$this->isInstanceOf(ConditionEvent::class)],
                [CampaignEvents::ON_EVENT_CONDITION_EVALUATION, \$this->isInstanceOf(ConditionEvent::class)]
            );

        (new ConditionDispatcher(\$this->dispatcher))->dispatchEvent(\$this->config, new LeadEventLog());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Executioner/Dispatcher/ConditionDispatcherTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/Dispatcher/ConditionDispatcherTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Executioner/Dispatcher/ConditionDispatcherTest.php");
    }
}
