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

/* @bundles/CampaignBundle/Tests/EventCollector/Builder/EventBuilderTest.php */
class __TwigTemplate_56705b75372a6b09061b019ba84abc1c6e990a457d79908bf175aae7a49802e6 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\EventCollector\\Builder;

use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ActionAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ConditionAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\DecisionAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Builder\\EventBuilder;

class EventBuilderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testActionsAreConvertedToAccessor()
    {
        \$array = [
            'some.action'  => [
                'batchEventName' => 'some.action',
            ],
            'other.action' => [
                'batchEventName' => 'other.action',
            ],
        ];

        \$converted = EventBuilder::buildActions(\$array);

        \$this->assertCount(2, \$converted);
        \$this->assertInstanceOf(ActionAccessor::class, \$converted['some.action']);
        \$this->assertEquals('some.action', \$converted['some.action']->getBatchEventName());
        \$this->assertInstanceOf(ActionAccessor::class, \$converted['other.action']);
        \$this->assertEquals('other.action', \$converted['other.action']->getBatchEventName());
    }

    public function testConditionsAreConvertedToAccessor()
    {
        \$array = [
            'some.condition'  => [
                'eventName' => 'some.condition',
            ],
            'other.condition' => [
                'eventName' => 'other.condition',
            ],
        ];

        \$converted = EventBuilder::buildConditions(\$array);

        \$this->assertCount(2, \$converted);
        \$this->assertInstanceOf(ConditionAccessor::class, \$converted['some.condition']);
        \$this->assertEquals('some.condition', \$converted['some.condition']->getEventName());
        \$this->assertInstanceOf(ConditionAccessor::class, \$converted['other.condition']);
        \$this->assertEquals('other.condition', \$converted['other.condition']->getEventName());
    }

    public function testDecisionsAreConvertedToAccessor()
    {
        \$array = [
            'some.decision'  => [
                'eventName' => 'some.decision',
            ],
            'other.decision' => [
                'eventName' => 'other.decision',
            ],
        ];

        \$converted = EventBuilder::buildDecisions(\$array);

        \$this->assertCount(2, \$converted);
        \$this->assertInstanceOf(DecisionAccessor::class, \$converted['some.decision']);
        \$this->assertEquals('some.decision', \$converted['some.decision']->getEventName());
        \$this->assertInstanceOf(DecisionAccessor::class, \$converted['other.decision']);
        \$this->assertEquals('other.decision', \$converted['other.decision']->getEventName());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/EventCollector/Builder/EventBuilderTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/EventCollector/Builder/EventBuilderTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/EventCollector/Builder/EventBuilderTest.php");
    }
}
