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

/* @bundles/CoreBundle/Tests/Unit/Update/Step/AbstractStepTest.php */
class __TwigTemplate_036073358bf535b5d56b781d3e9f47dcad74cd5821631c389dc9f87a881d77f7 extends Template
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

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

abstract class AbstractStepTest extends TestCase
{
    /**
     * @var ProgressBar
     */
    protected \$progressBar;

    /**
     * @var MockObject|InputInterface
     */
    protected \$input;

    /**
     * @var MockObject|OutputInterface
     */
    protected \$output;

    protected function setUp(): void
    {
        \$this->input      = \$this->createMock(InputInterface::class);
        \$this->output     = \$this->createMock(OutputInterface::class);
        \$this->output->method('getFormatter')
            ->willReturn(\$this->createMock(OutputFormatterInterface::class));

        \$this->progressBar = new ProgressBar(\$this->output);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Update/Step/AbstractStepTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/Step/AbstractStepTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Update/Step/AbstractStepTest.php");
    }
}
