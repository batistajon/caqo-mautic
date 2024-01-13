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

/* @bundles/CoreBundle/Tests/Unit/Update/Step/UpdateSchemaStepTest.php */
class __TwigTemplate_c97299ff4a3e0a5e2bee8646de0fe015232979db9910349d4d025ef3f4a13fb8 extends Template
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

use Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand;
use Mautic\\CoreBundle\\Exception\\UpdateFailedException;
use Mautic\\CoreBundle\\Update\\Step\\UpdateSchemaStep;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Input\\InputArgument;
use Symfony\\Component\\Console\\Input\\InputDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpKernel\\KernelInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class UpdateSchemaStepTest extends AbstractStepTest
{
    /**
     * @var MockObject|TranslatorInterface
     */
    private \$translator;

    /**
     * @var MockObject|KernelInterface
     */
    private \$kernel;

    /**
     * @var MockObject|MigrationsMigrateDoctrineCommand
     */
    private \$migrateCommand;

    /**
     * @var MockObject|EventDispatcherInterface
     */
    private \$eventDispatcher;

    /**
     * @var UpdateSchemaStep
     */
    private \$step;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->translator     = \$this->createMock(TranslatorInterface::class);

        \$this->kernel         = \$this->createMock(KernelInterface::class);
        \$this->kernel
            ->method('getBundles')
            ->willReturn([]);

        \$this->migrateCommand = \$this->createMock(MigrationsMigrateDoctrineCommand::class);
        \$this->migrateCommand->method('isEnabled')
            ->willReturn(true);
        \$this->migrateCommand->method('getName')
            ->willReturn('doctrine:migrations:migrate');
        \$this->migrateCommand->method('getAliases')
            ->willReturn([]);
        \$this->migrateCommand->method('getHelperSet')
            ->willReturn([]);

        \$definition = \$this->createMock(InputDefinition::class);
        \$definition->method('hasArgument')
            ->willReturn(true);
        \$inputArgument = \$this->createMock(InputArgument::class);
        \$inputArgument->method('getName')
            ->willReturn('');
        \$inputArgument->method('isArray')
            ->willReturn(false);
        \$definition->method('getArgument')
            ->willReturn(\$inputArgument);
        \$this->migrateCommand->method('getDefinition')
            ->willReturn(\$definition);

        \$this->eventDispatcher = \$this->createMock(EventDispatcherInterface::class);

        /** @var ContainerInterface|MockObject \$container */
        \$container = \$this->createMock(ContainerInterface::class);
        \$container->method('get')
            ->will(\$this->returnValueMap([
                ['kernel', ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, \$this->kernel],
                ['event_dispatcher', ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, \$this->eventDispatcher],
                ['doctrine:migrations:migrate', ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE, \$this->migrateCommand],
            ]));
        \$container->method('hasParameter')
            ->will(\$this->returnValueMap([
                ['console.command.ids', true],
                ['console.laze_command.ids', false],
            ]));

        \$container->method('getParameter')
            ->with('console.command.ids')
            ->willReturn(
                ['doctrine:migrations:migrate']
            );

        \$this->kernel->method('getContainer')
            ->willReturn(\$container);

        \$this->step = new UpdateSchemaStep(\$this->translator, \$container);
    }

    public function testUpdateFailedExceptionThrownIfMigrationsFailed()
    {
        \$this->expectException(UpdateFailedException::class);

        \$this->migrateCommand->method('run')
            ->willReturn(1);

        \$this->eventDispatcher->method('dispatch')
            ->willReturnCallback(
                function (Event \$event, string \$eventName) {
                    switch (\$eventName) {
                        case ConsoleEvents::COMMAND:
                            \$event->enableCommand();
                            break;
                    }
                }
            );

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);
    }

    public function testExceptionNotThrownIfMigrationsWereSuccessful()
    {
        \$this->migrateCommand->method('run')
            ->willReturn(0);

        \$this->eventDispatcher->method('dispatch')
            ->willReturnCallback(
                function (Event \$event, string \$eventName) {
                    switch (\$eventName) {
                        case ConsoleEvents::COMMAND:
                            \$event->enableCommand();
                            break;
                    }
                }
            );

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('');

        try {
            \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);
            \$this->assertTrue(true);
        } catch (UpdateFailedException \$exception) {
            \$this->fail('UpdateFailedException should not have been thrown');
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Update/Step/UpdateSchemaStepTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/Step/UpdateSchemaStepTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Update/Step/UpdateSchemaStepTest.php");
    }
}
