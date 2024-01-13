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

/* @bundles/CoreBundle/Tests/Functional/Helper/CommandHelperTest.php */
class __TwigTemplate_0841fdb24215cee08d7d6895fb18b17305cfb86af03036cf204466050efff819 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Helper;

use Mautic\\CoreBundle\\Helper\\CommandHelper;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;

class CommandHelperTest extends MauticMysqlTestCase
{
    /**
     * @var CommandHelper
     */
    private \$commandHelper;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->commandHelper = \$this->getContainer()->get('mautic.helper.command');
    }

    public function testRunCommandWithParam(): void
    {
        \$response = \$this->commandHelper->runCommand('help', ['--version']);
        Assert::assertSame(0, \$response->getStatusCode());
        Assert::assertStringContainsString('(env: test, debug: false)', \$response->getMessage());
    }

    public function testRunCommandWithoutParam(): void
    {
        \$response = \$this->commandHelper->runCommand('list');
        Assert::assertSame(0, \$response->getStatusCode());
        Assert::assertStringContainsString('doctrine:database:create', \$response->getMessage());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Functional/Helper/CommandHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Helper/CommandHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Functional/Helper/CommandHelperTest.php");
    }
}
