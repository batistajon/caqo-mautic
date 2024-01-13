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

/* @bundles/DashboardBundle/Tests/Model/DashboardModelTest.php */
class __TwigTemplate_6def10e6f52093fd3be0d33b861dd8177917934500f1d8762a110ff574f1ecfe extends Template
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

namespace Mautic\\DashboardBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\DashboardBundle\\Model\\DashboardModel;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpFoundation\\Session\\Session;

class DashboardModelTest extends TestCase
{
    /**
     * @var CoreParametersHelper|MockObject
     */
    private \$coreParametersHelper;

    /**
     * @var PathsHelper|MockObject
     */
    private \$pathsHelper;

    /**
     * @var MockObject|Filesystem
     */
    private \$filesystem;

    /**
     * @var MockObject|Session
     */
    private \$session;

    /**
     * @var DashboardModel
     */
    private \$model;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->pathsHelper          = \$this->createMock(PathsHelper::class);
        \$this->filesystem           = \$this->createMock(Filesystem::class);

        \$this->model = new DashboardModel(
            \$this->coreParametersHelper,
            \$this->pathsHelper,
            \$this->filesystem
        );

        \$this->session = \$this->createMock(Session::class);

        \$this->model->setSession(\$this->session);
    }

    public function testGetDefaultFilterFromSession(): void
    {
        \$dateFromStr = '-1 month';
        \$dateFrom    = new \\DateTime(\$dateFromStr);
        \$dateTo      = new \\DateTime('23:59:59'); // till end of the 'to' date selected

        \$this->coreParametersHelper->expects(self::once())
            ->method('get')
            ->with('default_daterange_filter', \$dateFromStr)
            ->willReturn(\$dateFromStr);

        \$this->session->expects(\$this->exactly(2))
            ->method('get')
            ->withConsecutive(
                ['mautic.daterange.form.from'],
                ['mautic.daterange.form.to']
            )
            ->willReturnOnConsecutiveCalls(
                \$dateFrom->format(\\DateTimeInterface::ATOM),
                \$dateTo->format(\\DateTimeInterface::ATOM)
            );

        \$filter = \$this->model->getDefaultFilter();

        Assert::assertSame(
            \$dateFrom->format(\\DateTimeInterface::ATOM),
            \$filter['dateFrom']->format(\\DateTimeInterface::ATOM)
        );

        Assert::assertSame(
            \$dateTo->format(\\DateTimeInterface::ATOM),
            \$filter['dateTo']->format(\\DateTimeInterface::ATOM)
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
        return "@bundles/DashboardBundle/Tests/Model/DashboardModelTest.php";
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
        return new Source("", "@bundles/DashboardBundle/Tests/Model/DashboardModelTest.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Tests/Model/DashboardModelTest.php");
    }
}
