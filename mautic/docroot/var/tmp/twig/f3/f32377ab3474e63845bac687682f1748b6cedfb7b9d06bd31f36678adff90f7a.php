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

/* @bundles/ReportBundle/Model/ExcelExporter.php */
class __TwigTemplate_d39933cd131fa0b2aadbd391df747f9ad38f465d05f95d847842a2ec953c544f extends Template
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

namespace Mautic\\ReportBundle\\Model;

use Mautic\\CoreBundle\\Templating\\Helper\\FormatterHelper;
use Mautic\\ReportBundle\\Crate\\ReportDataResult;
use PhpOffice\\PhpSpreadsheet\\Exception;
use PhpOffice\\PhpSpreadsheet\\IOFactory;
use PhpOffice\\PhpSpreadsheet\\Spreadsheet;

/**
 * Class CsvExporter.
 */
class ExcelExporter
{
    /**
     * @var FormatterHelper
     */
    protected \$formatterHelper;

    public function __construct(FormatterHelper \$formatterHelper)
    {
        \$this->formatterHelper = \$formatterHelper;
    }

    /**
     * @param string \$name
     *
     * @throws \\Exception
     */
    public function export(array \$reportData, \$name, string \$output = 'php://output')
    {
        if (!class_exists(Spreadsheet::class)) {
            throw new \\Exception('PHPSpreadsheet is required to export to Excel spreadsheets');
        }

        if (!array_key_exists('data', \$reportData) || !array_key_exists('columns', \$reportData)) {
            throw new \\InvalidArgumentException(\"Keys 'data' and 'columns' have to be provided\");
        }

        try {
            \$objPHPExcel = new Spreadsheet();
            \$objPHPExcel->getProperties()->setTitle(\$name);
            \$objPHPExcel->createSheet();
            \$reportDataResult = new ReportDataResult(\$reportData);

            //build the data rows
            foreach (\$reportDataResult->getData() as \$count=>\$data) {
                \$row = [];
                foreach (\$data as \$k => \$v) {
                    \$type      = \$reportDataResult->getType(\$k);
                    \$formatted = htmlspecialchars_decode(\$this->formatterHelper->_(\$v, \$type, true), ENT_QUOTES);
                    \$row[]     = \$formatted;
                }

                if (0 === \$count) {
                    //write the column names row
                    \$objPHPExcel->getActiveSheet()->fromArray(\$reportDataResult->getHeaders());
                }
                //write the row
                \$rowCount = \$count + 2;
                \$objPHPExcel->getActiveSheet()->fromArray(\$row, null, \"A{\$rowCount}\");
                //free memory
                unset(\$row, \$reportData['data'][\$count]);
            }

            \$objWriter = IOFactory::createWriter(\$objPHPExcel, 'Xlsx');
            \$objWriter->setPreCalculateFormulas(false);

            \$objWriter->save(\$output);
        } catch (Exception \$e) {
            throw new \\Exception('PHPSpreadsheet Error', 0, \$e);
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
        return "@bundles/ReportBundle/Model/ExcelExporter.php";
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
        return new Source("", "@bundles/ReportBundle/Model/ExcelExporter.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Model/ExcelExporter.php");
    }
}
