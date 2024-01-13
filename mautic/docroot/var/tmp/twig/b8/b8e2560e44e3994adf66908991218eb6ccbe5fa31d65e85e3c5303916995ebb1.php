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

/* @bundles/LeadBundle/Tests/Command/UpdateLeadListCommandTest.php */
class __TwigTemplate_999a792887fe74be1f525860105842d975fcda3564bd0117d7578e292c5a5b86 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Command;

use Mautic\\LeadBundle\\Command\\UpdateLeadListsCommand;
use Symfony\\Component\\Console\\Input\\Input;
use Symfony\\Component\\Console\\Output\\Output;
use Symfony\\Component\\DependencyInjection\\Container;

class UpdateLeadListCommandTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var UpdateLeadListsCommand
     */
    private \$commandTester;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->commandTester  = new UpdateLeadListsCommand();
        \$this->commandTester->setContainer(\$this->createMock(Container::class));
    }

    public function testUpdateCommand(): void
    {
        \$output = \$this->commandTester->addOption('timing=1');

        \$run = \$output->run(\$this->createMock(Input::class), \$this->createMock(Output::class));
        \$this->assertEquals(
            0,
            \$run
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Command/UpdateLeadListCommandTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Command/UpdateLeadListCommandTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Command/UpdateLeadListCommandTest.php");
    }
}
