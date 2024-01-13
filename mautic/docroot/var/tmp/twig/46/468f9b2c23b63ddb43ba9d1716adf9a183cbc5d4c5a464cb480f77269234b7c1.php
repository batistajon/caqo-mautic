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

/* @bundles/IntegrationsBundle/Tests/Unit/Helper/BuilderIntegrationsHelperTest.php */
class __TwigTemplate_f17247187251138f6a34c0f59812ccda00bca2ab27ad0b6c2a94e0ace241bc88 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Helper;

use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Helper\\BuilderIntegrationsHelper;
use Mautic\\IntegrationsBundle\\Helper\\IntegrationsHelper;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\BuilderInterface;
use Mautic\\PluginBundle\\Entity\\Integration;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class BuilderIntegrationsHelperTest extends TestCase
{
    /**
     * @var IntegrationsHelper|MockObject
     */
    private \$integrationsHelper;

    /**
     * @var BuilderIntegrationsHelper
     */
    private \$builderIntegrationsHelper;

    protected function setUp(): void
    {
        \$this->integrationsHelper        = \$this->createMock(IntegrationsHelper::class);
        \$this->builderIntegrationsHelper = new BuilderIntegrationsHelper(\$this->integrationsHelper);
    }

    public function testBuilderNotFoundIfFeatureSupportedButNotEnabled(): void
    {
        \$builder     = \$this->createMock(BuilderInterface::class);
        \$integration = new Integration();

        \$builder->expects(\$this->once())
            ->method('isSupported')
            ->with('page')
            ->willReturn(true);

        \$builder->expects(\$this->once())
            ->method('getIntegrationConfiguration')
            ->willReturn(\$integration);

        \$this->builderIntegrationsHelper->addIntegration(\$builder);

        \$this->expectException(IntegrationNotFoundException::class);

        \$this->builderIntegrationsHelper->getBuilder('page');
    }

    public function testBuilderNotFoundIfFeatureIsNotSupported(): void
    {
        \$builder = \$this->createMock(BuilderInterface::class);
        \$builder->expects(\$this->once())
            ->method('isSupported')
            ->with('page')
            ->willReturn(false);

        \$builder->expects(\$this->never())
            ->method('getIntegrationConfiguration');

        \$this->builderIntegrationsHelper->addIntegration(\$builder);

        \$this->expectException(IntegrationNotFoundException::class);

        \$this->builderIntegrationsHelper->getBuilder('page');
    }

    public function testBuilderFoundIfFeatureIsSupportedAndBuilderEnabled(): void
    {
        \$builder = \$this->createMock(BuilderInterface::class);

        \$integration = new Integration();
        \$integration->setIsPublished(true);

        \$builder->expects(\$this->once())
            ->method('isSupported')
            ->with('page')
            ->willReturn(true);

        \$builder->expects(\$this->once())
            ->method('getIntegrationConfiguration')
            ->willReturn(\$integration);

        \$this->builderIntegrationsHelper->addIntegration(\$builder);

        \$foundBuilder = \$this->builderIntegrationsHelper->getBuilder('page');

        Assert::assertSame(\$builder, \$foundBuilder);
    }

    public function testBuilderNamesAreReturned(): void
    {
        \$builder1 = \$this->createMock(BuilderInterface::class);
        \$builder1->expects(\$this->exactly(2))
            ->method('getName')
            ->willReturn('builder1');
        \$builder1->expects(\$this->once())
            ->method('getDisplayName')
            ->willReturn('Builder One');
        \$this->builderIntegrationsHelper->addIntegration(\$builder1);

        \$builder2 = \$this->createMock(BuilderInterface::class);
        \$builder2->expects(\$this->exactly(2))
            ->method('getName')
            ->willReturn('builder2');
        \$builder2->expects(\$this->once())
            ->method('getDisplayName')
            ->willReturn('Builder Two');
        \$this->builderIntegrationsHelper->addIntegration(\$builder2);

        Assert::assertSame(
            [
                'builder1' => 'Builder One',
                'builder2' => 'Builder Two',
            ],
            \$this->builderIntegrationsHelper->getBuilderNames()
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Helper/BuilderIntegrationsHelperTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Helper/BuilderIntegrationsHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Helper/BuilderIntegrationsHelperTest.php");
    }
}
