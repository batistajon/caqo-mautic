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

/* @bundles/ReportBundle/Tests/Model/ReportModelTest.php */
class __TwigTemplate_cdcfc20d2bf58b3c8020f276d41dd31a134e552817fdf4b468510e9fe8991271 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Model;

use Mautic\\ChannelBundle\\Helper\\ChannelListHelper;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\TemplatingHelper;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Mautic\\ReportBundle\\Event\\ReportBuilderEvent;
use Mautic\\ReportBundle\\Helper\\ReportHelper;
use Mautic\\ReportBundle\\Model\\CsvExporter;
use Mautic\\ReportBundle\\Model\\ExcelExporter;
use Mautic\\ReportBundle\\Model\\ReportModel;
use Mautic\\ReportBundle\\Tests\\Fixtures;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\Translation\\Translator;

class ReportModelTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var ReportModel
     */
    private \$reportModel;

    protected function setUp(): void
    {
        \$fieldModelMock = \$this->createMock(FieldModel::class);
        \$fieldModelMock->method('getPublishedFieldArrays')->willReturn([]);

        \$this->reportModel = new ReportModel(
            \$this->createMock(CoreParametersHelper::class),
            \$this->createMock(TemplatingHelper::class),
            \$this->createMock(ChannelListHelper::class),
            \$fieldModelMock,
            \$this->createMock(ReportHelper::class),
            \$this->createMock(CsvExporter::class),
            \$this->createMock(ExcelExporter::class)
        );

        \$mockDispatcher = \$this->createMock(EventDispatcher::class);
        \$mockDispatcher->method('dispatch')
            ->willReturnCallback(
                function (\$eventName, ReportBuilderEvent \$event) {
                    \$reportBuilderData = Fixtures::getReportBuilderEventData();
                    \$event->addTable('assets', \$reportBuilderData['all']['tables']['assets']);
                }
            );
        \$this->reportModel->setDispatcher(\$mockDispatcher);

        \$translatorMock = \$this->createMock(Translator::class);
        // Make the translator return whatever string is passed to it instead of null
        \$translatorMock->method('trans')->withAnyParameters()->willReturnArgument(0);
        \$this->reportModel->setTranslator(\$translatorMock);

        // Do this to build the initial set of data from the subscribers that get used in all other contexts
        \$this->reportModel->buildAvailableReports('all');

        parent::setUp();
    }

    public function testGetColumnListWithContext()
    {
        \$properContextFormat = 'assets';
        \$actual              = \$this->reportModel->getColumnList(\$properContextFormat);
        \$expected            = Fixtures::getGoodColumnList();

        \$this->assertEquals(\$expected->choices, \$actual->choices);
        \$this->assertEquals(\$expected->definitions, \$actual->definitions);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Model/ReportModelTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Model/ReportModelTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Model/ReportModelTest.php");
    }
}
