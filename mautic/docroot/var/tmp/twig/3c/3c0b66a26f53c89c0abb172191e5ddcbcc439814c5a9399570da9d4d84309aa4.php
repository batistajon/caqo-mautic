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

/* @bundles/ReportBundle/Model/CsvExporter.php */
class __TwigTemplate_8f8cff3d6eafd18a936ebd1bd7e627e7f29b574d966e942fb3c4e1a9c9d4dfba extends Template
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

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Templating\\Helper\\FormatterHelper;
use Mautic\\ReportBundle\\Crate\\ReportDataResult;

/**
 * Class CsvExporter.
 */
class CsvExporter
{
    /**
     * @var FormatterHelper
     */
    protected \$formatterHelper;

    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    public function __construct(FormatterHelper \$formatterHelper, CoreParametersHelper \$coreParametersHelper)
    {
        \$this->formatterHelper      = \$formatterHelper;
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    /**
     * @param resource \$handle
     * @param int      \$page
     */
    public function export(ReportDataResult \$reportDataResult, \$handle, \$page = 1)
    {
        if (1 === \$page) {
            \$this->putHeader(\$reportDataResult, \$handle);
        }

        foreach (\$reportDataResult->getData() as \$data) {
            \$row = [];
            foreach (\$data as \$k => \$v) {
                \$type       = \$reportDataResult->getType(\$k);
                \$typeString = 'string' !== \$type;
                \$row[]      = \$typeString ? \$this->formatterHelper->_(\$v, \$type, true) : \$v;
            }
            \$this->putRow(\$handle, \$row);
        }
    }

    /**
     * @param resource \$handle
     */
    private function putHeader(ReportDataResult \$reportDataResult, \$handle)
    {
        \$this->putRow(\$handle, \$reportDataResult->getHeaders());
    }

    /**
     * @param resource \$handle
     */
    private function putRow(\$handle, array \$row)
    {
        if (\$this->coreParametersHelper->get('csv_always_enclose')) {
            fputs(\$handle, '\"'.implode('\",\"', \$row).'\"'.\"\\n\");
        } else {
            fputcsv(\$handle, \$row);
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
        return "@bundles/ReportBundle/Model/CsvExporter.php";
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
        return new Source("", "@bundles/ReportBundle/Model/CsvExporter.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Model/CsvExporter.php");
    }
}
