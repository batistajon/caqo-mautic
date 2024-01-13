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

/* @bundles/CoreBundle/Tests/Unit/Update/StepProviderTest.php */
class __TwigTemplate_98ae63275f11bf3d912915a2de3a1e63be323fb4631dcaeaaa4895c7f5b622c8 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Update;

use Mautic\\CoreBundle\\Update\\Step\\StepInterface;
use Mautic\\CoreBundle\\Update\\StepProvider;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class StepProviderTest extends TestCase
{
    /**
     * @var StepProvider
     */
    private \$provider;

    protected function setUp(): void
    {
        \$this->provider = new StepProvider();

        /** @var MockObject|StepInterface \$step1 */
        \$step1 = \$this->createMock(StepInterface::class);
        \$step1->method('getOrder')
            ->willReturn(10);
        \$step1->method('shouldExecuteInFinalStage')
            ->willReturn(false);
        \$this->provider->addStep(\$step1);

        /** @var MockObject|StepInterface \$step2 */
        \$step2 = \$this->createMock(StepInterface::class);
        \$step2->method('getOrder')
            ->willReturn(0);
        \$step2->method('shouldExecuteInFinalStage')
            ->willReturn(false);
        \$this->provider->addStep(\$step2);

        /** @var MockObject|StepInterface \$step3 */
        \$step3 = \$this->createMock(StepInterface::class);
        \$step3->method('getOrder')
            ->willReturn(50);
        \$step3->method('shouldExecuteInFinalStage')
            ->willReturn(true);
        \$this->provider->addStep(\$step3);

        /** @var MockObject|StepInterface \$step4 */
        \$step4 = \$this->createMock(StepInterface::class);
        \$step4->method('getOrder')
            ->willReturn(30);
        \$step4->method('shouldExecuteInFinalStage')
            ->willReturn(true);
        \$this->provider->addStep(\$step4);
    }

    public function testInitialStepsAreOrdered()
    {
        \$steps = \$this->provider->getInitialSteps();
        \$this->assertCount(2, \$steps);
        \$this->assertEquals(0, \$steps[0]->getOrder());
        \$this->assertEquals(10, \$steps[1]->getOrder());
    }

    public function testsFinalStepsAreOrdered()
    {
        \$steps = \$this->provider->getFinalSteps();
        \$this->assertCount(2, \$steps);
        \$this->assertEquals(30, \$steps[0]->getOrder());
        \$this->assertEquals(50, \$steps[1]->getOrder());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Update/StepProviderTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/StepProviderTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Update/StepProviderTest.php");
    }
}
