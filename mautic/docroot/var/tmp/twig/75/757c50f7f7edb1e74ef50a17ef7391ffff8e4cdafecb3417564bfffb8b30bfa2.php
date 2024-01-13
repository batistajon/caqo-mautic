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

/* @bundles/CoreBundle/Tests/Unit/Helper/PageHelperTest.php */
class __TwigTemplate_26e540813004eb3b56f44e867f2e1c1254b50bfc46fcff0e3a9ea6cfd2958896 extends Template
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
use Mautic\\CoreBundle\\Helper\\PageHelper;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;

class PageHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    private \$session;
    private \$coreParametersHelper;
    private \$pageHelper;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->session              = \$this->createMock(SessionInterface::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->pageHelper           = new PageHelper(\$this->session, \$this->coreParametersHelper, 'mautic.test', 0);
    }

    /**
     * @dataProvider PageProvider
     */
    public function testCountPage(int \$count, int \$limit, int \$page)
    {
        \$this->session->expects(\$this->once())
            ->method('get')
            ->with('mautic.test.limit')
            ->willReturn(\$limit);

        \$this->assertSame(\$page, \$this->pageHelper->countPage(\$count));
    }

    public function pageProvider()
    {
        return [
            [0, 10, 1],
            [1, 10, 1],
            [5, 10, 1],
            [10, 10, 1],
            [11, 10, 2],
            [20, 10, 2],
            [21, 10, 3],
            [15, 15, 1],
            [16, 15, 2],
        ];
    }

    /**
     * @dataProvider startProvider
     */
    public function testCountStart(int \$page, int \$limit, int \$start)
    {
        \$this->session->expects(\$this->once())
            ->method('get')
            ->with('mautic.test.limit')
            ->willReturn(\$limit);

        \$this->assertSame(\$start, \$this->pageHelper->countPage(\$page));
    }

    public function startProvider()
    {
        return [
            [0, 10, 1],
            [1, 10, 1],
            [10, 10, 1],
            [11, 10, 2],
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/PageHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/PageHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/PageHelperTest.php");
    }
}
