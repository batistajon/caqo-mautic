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

/* @bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/ActionAccessorTest.php */
class __TwigTemplate_8ff2739dd13f1776d28329cd1fe1883e16e7799d0fae85e476aa1f381200f44b extends Template
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

use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ActionAccessor;

class ActionAccessorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBatchEventNameIsNotExtra()
    {
        \$actionAccessor = new ActionAccessor(['batchEventName' => 'test']);

        \$this->assertEmpty(\$actionAccessor->getExtraProperties());
    }

    public function testBatchNameIsReturned()
    {
        \$actionAccessor = new ActionAccessor(['batchEventName' => 'test']);

        \$this->assertEquals('test', \$actionAccessor->getBatchEventName());
    }

    public function testExtraParamIsReturned()
    {
        \$actionAccessor = new ActionAccessor(['batchEventName' => 'test', 'foo' => 'bar']);

        \$this->assertEquals(['foo' => 'bar'], \$actionAccessor->getExtraProperties());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/ActionAccessorTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/ActionAccessorTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/ActionAccessorTest.php");
    }
}
