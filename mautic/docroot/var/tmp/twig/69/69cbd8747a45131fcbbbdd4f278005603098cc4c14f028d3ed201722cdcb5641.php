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

/* @bundles/CampaignBundle/Tests/Executioner/Result/CounterTest.php */
class __TwigTemplate_a6dad3bef48d7e1c1f1650f8999f222ed65f91cd4490e944ac6c279b587d9422 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Executioner\\Result;

use Mautic\\CampaignBundle\\Executioner\\Result\\Counter;

class CounterTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testCounterIncrements()
    {
        \$counter = new Counter(1, 1, 1, 1, 1, 1);

        \$counter->advanceEvaluated(2);
        \$this->assertEquals(3, \$counter->getEvaluated());
        \$this->assertEquals(3, \$counter->getTotalEvaluated());

        \$counter->advanceTotalEvaluated(1);
        \$this->assertEquals(3, \$counter->getEvaluated());
        \$this->assertEquals(4, \$counter->getTotalEvaluated());

        \$counter->advanceExecuted(2);
        \$this->assertEquals(3, \$counter->getExecuted());
        \$this->assertEquals(3, \$counter->getTotalExecuted());

        \$counter->advanceTotalExecuted(1);
        \$this->assertEquals(3, \$counter->getExecuted());
        \$this->assertEquals(4, \$counter->getTotalExecuted());

        \$counter->advanceTotalScheduled(2);
        \$this->assertEquals(3, \$counter->getTotalScheduled());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Executioner/Result/CounterTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/Result/CounterTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Executioner/Result/CounterTest.php");
    }
}
