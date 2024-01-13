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

/* @bundles/CoreBundle/Tests/Unit/Helper/CoreParametersHelperTest.php */
class __TwigTemplate_d2f936e47f07d3af1857eef5cca9d3dd2bdf5552b1802dcc2fe4a1b990f2c264 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

class CoreParametersHelperTest extends TestCase
{
    /**
     * @var MockObject|ContainerInterface
     */
    private \$container;

    protected function setUp(): void
    {
        \$this->container = \$this->createMock(ContainerInterface::class);
    }

    public function testAllReturnsResolvedParameters()
    {
        \$this->container->method('hasParameter')
            ->willReturnCallback(
                function (string \$key) {
                    return 'mautic.cache_path' === \$key;
                }
            );

        \$this->container->expects(\$this->once())
            ->method('getParameter')
            ->with('mautic.cache_path')
            ->willReturn('/path/to/cache');

        \$all = \$this->getHelper()->all();

        // Assert that a few of the config keys exist
        Assert::assertArrayHasKey('api_enabled', \$all);
        Assert::assertArrayHasKey('cache_path', \$all);
        Assert::assertSame('/path/to/cache', \$all['cache_path']);
        Assert::assertArrayHasKey('log_path', \$all);
    }

    private function getHelper(): CoreParametersHelper
    {
        return new CoreParametersHelper(\$this->container);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/CoreParametersHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/CoreParametersHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/CoreParametersHelperTest.php");
    }
}
