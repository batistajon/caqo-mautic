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

/* @bundles/IntegrationsBundle/Tests/Unit/Command/SyncCommandTest.php */
class __TwigTemplate_310c2ca8bf2055e36d74bf94164cf2def4c59cb779bf94b005ebfc00a5f88ee5 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Command;

use Mautic\\CoreBundle\\Test\\IsolatedTestTrait;
use Mautic\\IntegrationsBundle\\Command\\SyncCommand;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncService\\SyncServiceInterface;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Tester\\CommandTester;

/**
 * This test must run in a separate process because it sets the global constant
 * MAUTIC_INTEGRATION_SYNC_IN_PROGRESS which breaks other tests.
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class SyncCommandTest extends TestCase
{
    use IsolatedTestTrait;

    private const INTEGRATION_NAME = 'Test';

    /**
     * @var SyncServiceInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$syncService;

    /**
     * @var CommandTester
     */
    private \$commandTester;

    public function setUp(): void
    {
        parent::setUp();

        \$this->syncService = \$this->createMock(SyncServiceInterface::class);
        \$application       = new Application();

        \$application->add(new SyncCommand(\$this->syncService));

        // env is global option. Must be defined.
        \$application->getDefinition()->addOption(
            new InputOption(
                '--env',
                '-e',
                InputOption::VALUE_OPTIONAL,
                'The environment to operate in.',
                'DEV'
            )
        );

        \$this->commandTester = new CommandTester(
            \$application->find(SyncCommand::NAME)
        );
    }

    public function testExecuteWithoutIntetrationName(): void
    {
        \$this->assertSame(1, \$this->commandTester->execute([]));
    }

    public function testExecuteWithSomeOptions(): void
    {
        \$this->syncService->expects(\$this->once())
            ->method('processIntegrationSync')
            ->with(\$this->callback(function (InputOptionsDAO \$inputOptionsDAO) {
                \$this->assertSame(self::INTEGRATION_NAME, \$inputOptionsDAO->getIntegration());
                \$this->assertSame(['123', '345'], \$inputOptionsDAO->getMauticObjectIds()->getObjectIdsFor(Contact::NAME));
                \$this->assertNull(\$inputOptionsDAO->getIntegrationObjectIds());
                \$this->assertTrue(\$inputOptionsDAO->pullIsEnabled());
                \$this->assertFalse(\$inputOptionsDAO->pushIsEnabled());

                return true;
            }));

        \$code = \$this->commandTester->execute([
            'integration'        => self::INTEGRATION_NAME,
            '--disable-push'     => true,
            '--mautic-object-id' => ['contact:123', 'contact:345'],
        ]);

        \$this->assertSame(0, \$code);
    }

    public function testExecuteWhenSyncThrowsException(): void
    {
        \$this->syncService->expects(\$this->once())
            ->method('processIntegrationSync')
            ->with(\$this->callback(function (InputOptionsDAO \$inputOptionsDAO) {
                \$this->assertSame(self::INTEGRATION_NAME, \$inputOptionsDAO->getIntegration());

                return true;
            }))
            ->will(\$this->throwException(new \\Exception()));

        \$code = \$this->commandTester->execute(['integration' => self::INTEGRATION_NAME]);

        \$this->assertSame(1, \$code);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Command/SyncCommandTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Command/SyncCommandTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Command/SyncCommandTest.php");
    }
}
