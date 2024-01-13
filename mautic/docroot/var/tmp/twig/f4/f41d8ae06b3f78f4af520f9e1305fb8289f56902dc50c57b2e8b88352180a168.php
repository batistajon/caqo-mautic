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

/* @bundles/ReportBundle/Tests/Form/Type/ReportTypeTest.php */
class __TwigTemplate_09e75d023ebebdaaa0ee3b7d1db742f52e476283cda3faeb002b89a68f352080 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Form\\Type;

use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Form\\Type\\ReportType;
use Mautic\\ReportBundle\\Model\\ReportModel;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;

final class ReportTypeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|ReportModel
     */
    private \$reportModel;

    /**
     * @var MockObject|FormBuilderInterface
     */
    private \$formBuilder;

    /**
     * @var ReportType
     */
    private \$reportType;

    protected function setUp(): void
    {
        \$this->reportModel = \$this->createMock(ReportModel::class);
        \$this->formBuilder = \$this->createMock(FormBuilderInterface::class);
        \$this->reportType  = new ReportType(\$this->reportModel);
    }

    public function testBuildFormThatAssetWillBePreselectedSource(): void
    {
        \$report = new Report();
        \$data   = [
            'data'       => \$report,
            'table_list' => [
                'assets' => [
                    'display_name' => 'mautic.asset.assets',
                    'group'        => 'assets',
                    'columns'      => [
                        'a.alias' => [
                            'label' => 'Alias',
                            'type'  => 'string',
                            'alias' => 'alias',
                        ],
                    ],
                ],
            ],
        ];

        \$filterList                  = new \\stdClass();
        \$filterList->definitions     = [];
        \$filterList->operatorHtml    = [];
        \$filterList->choices         = [];
        \$filterList->operatorChoices = [];

        \$columnList          = new \\stdClass();
        \$columnList->choices = [];

        \$graphList          = new \\stdClass();
        \$graphList->choices = [];

        \$this->reportModel->method('getFilterList')
            ->willReturn(\$filterList);

        \$this->reportModel->expects(\$this->exactly(2))
            ->method('getColumnList')
            ->with(\$this->equalTo('assets')) // This is the confirmation that the source was selected properly.
            ->willReturn(\$columnList);

        \$this->reportModel->method('getGraphList')
            ->willReturn(\$graphList);

        \$this->formBuilder->method('addEventListener')
            ->withConsecutive(
                [
                    FormEvents::PRE_SET_DATA,
                    \$this->callback(
                        function (callable \$listener) use (\$report) {
                            /** @var FormInterface \$form */
                            \$form = \$this->createMock(FormInterface::class);
                            \$formEvent = new FormEvent(\$form, \$report);
                            \$listener(\$formEvent);

                            return true;
                        }
                    ),
                ]
            );

        \$this->reportType->buildForm(\$this->formBuilder, \$data);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Form/Type/ReportTypeTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Form/Type/ReportTypeTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Form/Type/ReportTypeTest.php");
    }
}
