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

/* @bundles/CoreBundle/Tests/Unit/EventListener/ConsoleErrorListenerTest.php */
class __TwigTemplate_16e03a0a35184c04219393ea133aab8cfd7942cda69b4bc2db124826093e2734 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\EventListener;

use Mautic\\CoreBundle\\EventListener\\ConsoleErrorListener;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Event\\ConsoleErrorEvent;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class ConsoleErrorListenerTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|LoggerInterface
     */
    private \$logger;

    /**
     * @var MockObject|InputInterface
     */
    private \$input;

    /**
     * @var MockObject|OutputInterface
     */
    private \$output;

    private ?ConsoleErrorListener \$listener;

    protected function setUp(): void
    {
        \$this->logger   = \$this->createMock(LoggerInterface::class);
        \$this->input    = \$this->createMock(InputInterface::class);
        \$this->output   = \$this->createMock(OutputInterface::class);

        \$this->listener = new ConsoleErrorListener(\$this->logger);
    }

    /**
     * Should not throw an error when command is null.
     */
    public function testConsoleErrorWithNullCommand()
    {
        \$event = new ConsoleErrorEvent(
            \$this->input,
            \$this->output,
            new \\Exception('Example exception'),
            null
        );

        \$this->logger->expects(\$this->once())
            ->method('notice');

        \$this->listener->onConsoleError(\$event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/EventListener/ConsoleErrorListenerTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/EventListener/ConsoleErrorListenerTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/EventListener/ConsoleErrorListenerTest.php");
    }
}
