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

/* @bundles/CoreBundle/Tests/Unit/Model/IteratorExportDataModelTest.php */
class __TwigTemplate_f80627fac795b2a2ed83e78e15e0c067cabf8de95e94d71461be607fd877d2f7 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Model;

use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\CoreBundle\\Model\\AbstractCommonModel;
use Mautic\\CoreBundle\\Model\\IteratorExportDataModel;
use PHPUnit\\Framework\\MockObject\\MockObject;

class IteratorExportDataModelTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|AbstractCommonModel
     */
    private \$commonModel;

    /**
     * @var MockObject|CommonRepository
     */
    private \$commonRepository;

    /**
     * @var IteratorExportDataModel
     */
    private \$iteratorExportDataModel;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->commonModel      = \$this->createMock(AbstractCommonModel::class);
        \$this->commonRepository = \$this->createMock(CommonRepository::class);
        \$args                   = ['limit' => 1000];
        \$callback               = function (\$var) {
            return \$var;
        };

        \$this->iteratorExportDataModel = new IteratorExportDataModel(\$this->commonModel, \$args, \$callback);
    }

    public function testWorkflowWithItems(): void
    {
        \$this->commonModel->expects(\$this->once())
            ->method('getEntities')
            ->with(['limit' => 1000, 'start' => 0])
            ->willReturn(['results' => [['a'], ['b']]]);

        \$this->commonModel->method('getRepository')->willReturn(\$this->commonRepository);

        \$this->assertSame(0, \$this->iteratorExportDataModel->key());
        \$this->iteratorExportDataModel->rewind();
        \$this->iteratorExportDataModel->next();
        \$this->assertSame(1, \$this->iteratorExportDataModel->key());
    }

    public function testWorkflowWithoutItems(): void
    {
        \$this->commonModel->expects(\$this->once())
            ->method('getEntities')
            ->with(['limit' => 1000, 'start' => 0])
            ->willReturn(['results' => []]);

        \$this->commonModel->method('getRepository')->willReturn(\$this->commonRepository);

        \$this->assertSame(0, \$this->iteratorExportDataModel->key());
        \$this->iteratorExportDataModel->rewind();
        \$this->iteratorExportDataModel->next();
        \$this->assertSame(1, \$this->iteratorExportDataModel->key());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Model/IteratorExportDataModelTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Model/IteratorExportDataModelTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Model/IteratorExportDataModelTest.php");
    }
}
