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

/* @bundles/CoreBundle/Tests/Unit/Update/Step/PreUpdateChecksStepTest.php */
class __TwigTemplate_98384dc14665586654eb5577ba13699b13fd34abd6d8bc3ff8a89f37bb5acc26 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Update\\Step;

use Mautic\\CoreBundle\\Exception\\UpdateFailedException;
use Mautic\\CoreBundle\\Helper\\Update\\PreUpdateChecks\\PreUpdateCheckError;
use Mautic\\CoreBundle\\Helper\\Update\\PreUpdateChecks\\PreUpdateCheckResult;
use Mautic\\CoreBundle\\Helper\\UpdateHelper;
use Mautic\\CoreBundle\\Update\\Step\\PreUpdateChecksStep;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class PreUpdateChecksStepTest extends AbstractStepTest
{
    /**
     * @var MockObject|TranslatorInterface
     */
    private \$translator;

    /**
     * @var MockObject|UpdateHelper
     */
    private \$updateHelper;
    private PreUpdateChecksStep \$step;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->translator   = \$this->createMock(TranslatorInterface::class);
        \$this->updateHelper = \$this->createMock(UpdateHelper::class);

        \$this->step = new PreUpdateChecksStep(\$this->translator, \$this->updateHelper);
    }

    public function testUpdateFailedExceptionIfPreUpdateChecksFailed(): void
    {
        \$this->updateHelper->expects(\$this->once())
            ->method('runPreUpdateChecks')
            ->willReturn(
                [
                    new PreUpdateCheckResult(false, null, [new PreUpdateCheckError('Dummy')]),
                ]
            );

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('Dummy');

        \$this->expectException(UpdateFailedException::class);

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);
    }

    public function testNoExceptionIfPreUpdateChecksPassed(): void
    {
        \$this->updateHelper->expects(\$this->once())
            ->method('runPreUpdateChecks')
            ->willReturn(
                [
                    new PreUpdateCheckResult(true, null),
                ]
            );

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('Dummy');

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
        return "@bundles/CoreBundle/Tests/Unit/Update/Step/PreUpdateChecksStepTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/Step/PreUpdateChecksStepTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Update/Step/PreUpdateChecksStepTest.php");
    }
}
