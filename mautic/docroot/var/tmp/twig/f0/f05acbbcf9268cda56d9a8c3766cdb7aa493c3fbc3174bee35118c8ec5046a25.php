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

/* @bundles/MarketplaceBundle/Tests/Functional/Command/RemoveCommandTest.php */
class __TwigTemplate_8cabfbdba24112f86036140abbe9e92c981e156bf8f4cd36426052fe105064be extends Template
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

namespace Mautic\\MarketplaceBundle\\Tests\\Functional\\Command;

use Mautic\\CoreBundle\\Helper\\ComposerHelper;
use Mautic\\CoreBundle\\Test\\AbstractMauticTestCase;
use Mautic\\MarketplaceBundle\\Command\\RemoveCommand;
use Mautic\\MarketplaceBundle\\Model\\ConsoleOutputModel;
use PHPUnit\\Framework\\Assert;
use Psr\\Log\\LoggerInterface;

final class RemoveCommandTest extends AbstractMauticTestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject&LoggerInterface
     */
    private \$logger;
    private string \$packageName;

    public function setUp(): void
    {
        parent::setUp();
        \$this->logger      = \$this->createMock(LoggerInterface::class);
        \$this->packageName = 'koco/mautic-recaptcha-bundle';
    }

    public function testRemoveCommand(): void
    {
        \$composer    = \$this->createMock(ComposerHelper::class);
        \$composer->method('remove')
            ->with(\$this->packageName)
            ->willReturn(new ConsoleOutputModel(0, 'OK'));
        \$composer->method('getMauticPluginPackages')
            ->willReturn(['koco/mautic-recaptcha-bundle']);
        \$command = new RemoveCommand(\$composer, \$this->logger);

        \$result = \$this->testSymfonyCommand(
            'mautic:marketplace:remove',
            ['package' => \$this->packageName],
            \$command
        );

        Assert::assertSame(0, \$result->getStatusCode());
    }

    public function testRemoveCommandWithInvalidPackageType(): void
    {
        \$composer    = \$this->createMock(ComposerHelper::class);
        \$composer->method('remove')
            ->with(\$this->packageName)
            ->willReturn(new ConsoleOutputModel(0, 'OK'));
        \$composer->method('getMauticPluginPackages')
            ->willReturn([]);
        \$command = new RemoveCommand(\$composer, \$this->logger);

        \$result = \$this->testSymfonyCommand(
            'mautic:marketplace:remove',
            ['package' => \$this->packageName],
            \$command
        );

        Assert::assertSame(1, \$result->getStatusCode());
    }

    public function testRemoveCommandWithComposerError(): void
    {
        \$composer    = \$this->createMock(ComposerHelper::class);
        \$composer->method('remove')
            ->with(\$this->packageName)
            ->willReturn(new ConsoleOutputModel(1, 'Error while removing package'));
        \$composer->method('getMauticPluginPackages')
            ->willReturn([]);
        \$command = new RemoveCommand(\$composer, \$this->logger);

        \$result = \$this->testSymfonyCommand(
            'mautic:marketplace:remove',
            ['package' => \$this->packageName],
            \$command
        );

        Assert::assertSame(1, \$result->getStatusCode());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Tests/Functional/Command/RemoveCommandTest.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Tests/Functional/Command/RemoveCommandTest.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Tests/Functional/Command/RemoveCommandTest.php");
    }
}
