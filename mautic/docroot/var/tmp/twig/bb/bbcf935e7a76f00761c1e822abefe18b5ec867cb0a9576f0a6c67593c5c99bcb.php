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

/* @bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/DecisionAccessorTest.php */
class __TwigTemplate_eb0564479c28d9423e1947f54246b58a1794c0066bd632e9fcdab2ae41ba80f5 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\EventCollector\\Accessor\\Event;

use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\DecisionAccessor;

class DecisionAccessorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testEventNameIsReturned()
    {
        \$accessor = new DecisionAccessor(['eventName' => 'test']);

        \$this->assertEquals('test', \$accessor->getEventName());
    }

    public function testExtraParamIsReturned()
    {
        \$accessor = new DecisionAccessor(['eventName' => 'test', 'foo' => 'bar']);

        \$this->assertEquals(['foo' => 'bar'], \$accessor->getExtraProperties());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/DecisionAccessorTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/DecisionAccessorTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/DecisionAccessorTest.php");
    }
}
