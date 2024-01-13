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

/* @bundles/CoreBundle/Tests/Unit/Update/Step/DeleteCacheStepTest.php */
class __TwigTemplate_b44a3b09d19af3900392ed633c4ef23dfb1a0fc50de068a65e1bfdc7adf881f2 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Update\\Step;

use Mautic\\CoreBundle\\Helper\\CacheHelper;
use Mautic\\CoreBundle\\Update\\Step\\DeleteCacheStep;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Translation\\TranslatorInterface;

class DeleteCacheStepTest extends AbstractStepTest
{
    /**
     * @var MockObject|CacheHelper
     */
    private \$cacheHelper;

    /**
     * @var MockObject|TranslatorInterface
     */
    private \$translator;

    /**
     * @var DeleteCacheStep
     */
    private \$step;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->cacheHelper = \$this->createMock(CacheHelper::class);
        \$this->translator  = \$this->createMock(TranslatorInterface::class);
        \$this->step        = new DeleteCacheStep(\$this->cacheHelper, \$this->translator);
    }

    public function testCacheIsNukedAndProgressNoted()
    {
        \$stepOutput = 'mautic.core.update.clear.cache';
        \$this->translator->expects(\$this->once())
            ->method('trans')
            ->with(\$stepOutput)
            ->willReturn(\$stepOutput);

        \$this->cacheHelper->expects(\$this->once())
            ->method('nukeCache');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);

        \$this->assertEquals(\$stepOutput, \$this->progressBar->getMessage());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Update/Step/DeleteCacheStepTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/Step/DeleteCacheStepTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Update/Step/DeleteCacheStepTest.php");
    }
}
