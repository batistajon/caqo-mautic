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

/* @bundles/CoreBundle/Tests/Unit/Update/Step/FinalizeUpdateStepTest.php */
class __TwigTemplate_6da717ea9cfbd12df21718838d2e961d21aea84350dcbaec23469943b85338ca extends Template
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

use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Update\\Step\\FinalizeUpdateStep;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\Translation\\TranslatorInterface;

class FinalizeUpdateStepTest extends AbstractStepTest
{
    /**
     * @var MockObject|TranslatorInterface
     */
    private \$translator;

    /**
     * @var MockObject|PathsHelper
     */
    private \$pathsHelper;

    /**
     * @var MockObject|Session
     */
    private \$session;

    /**
     * @var MockObject|AppVersion
     */
    private \$appVersion;

    /**
     * @var FinalizeUpdateStep
     */
    private \$step;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->translator  = \$this->createMock(TranslatorInterface::class);
        \$this->pathsHelper = \$this->createMock(PathsHelper::class);
        \$this->session     = \$this->createMock(Session::class);
        \$this->appVersion  = \$this->createMock(AppVersion::class);

        \$this->step = new FinalizeUpdateStep(\$this->translator, \$this->pathsHelper, \$this->session, \$this->appVersion);
    }

    public function testFinalizationCleansUpFiles()
    {
        file_put_contents(__DIR__.'/resources/upgrade.php', '');
        file_put_contents(__DIR__.'/resources/lastUpdateCheck.txt', '');

        \$wrappingUpKey       = 'mautic.core.update.step.wrapping_up';
        \$updateSuccessfulKey = 'mautic.core.update.update_successful';

        \$this->translator->expects(\$this->exactly(2))
            ->method('trans')
            ->withConsecutive(
                [\$wrappingUpKey],
                [\$updateSuccessfulKey, ['%version%' => '10.0.0']]
            )
            ->willReturnOnConsecutiveCalls(
                \$wrappingUpKey,
                \$updateSuccessfulKey
            );

        \$this->pathsHelper->expects(\$this->once())
            ->method('getRootPath')
            ->willReturn(__DIR__.'/resources');

        \$this->pathsHelper->expects(\$this->once())
            ->method('getCachePath')
            ->willReturn(__DIR__.'/resources');

        \$this->appVersion->expects(\$this->once())
            ->method('getVersion')
            ->willReturn('10.0.0');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);

        \$this->assertFileDoesNotExist(__DIR__.'/resources/upgrade.php');
        \$this->assertFileDoesNotExist(__DIR__.'/resources/lastUpdateCheck.txt');

        \$this->assertEquals(\$updateSuccessfulKey, trim(\$this->progressBar->getMessage()));
    }

    public function testFinalizationWithPostUpgradeMessage()
    {
        file_put_contents(__DIR__.'/resources/upgrade.php', '');
        file_put_contents(__DIR__.'/resources/lastUpdateCheck.txt', '');

        \$this->pathsHelper->expects(\$this->once())
            ->method('getRootPath')
            ->willReturn(__DIR__.'/resources');

        \$this->pathsHelper->expects(\$this->once())
            ->method('getCachePath')
            ->willReturn(__DIR__.'/resources');

        \$this->session->expects(\$this->once())
            ->method('get')
            ->with('post_upgrade_message')
            ->willReturn('This is an example message');

        \$this->session->expects(\$this->once())
            ->method('remove');

        \$this->output->expects(\$this->once())
            ->method('writeln')
            ->with(\"\\n\\n<info>This is an example message</info>\");

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);

        \$this->assertFileDoesNotExist(__DIR__.'/resources/upgrade.php');
        \$this->assertFileDoesNotExist(__DIR__.'/resources/lastUpdateCheck.txt');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Update/Step/FinalizeUpdateStepTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/Step/FinalizeUpdateStepTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Update/Step/FinalizeUpdateStepTest.php");
    }
}
