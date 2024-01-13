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

/* @bundles/ReportBundle/Model/ReportExportOptions.php */
class __TwigTemplate_dbb576d82aba031b34229a689967286396cea1e2ba3f5af27c40634f7fa75d3a extends Template
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

class ReportExportOptions
{
    /**
     * @var int
     */
    private \$batchSize;

    /**
     * @var int
     */
    private \$page;

    /**
     * @var \\DateTime
     */
    private \$dateFrom;

    /**
     * @var \\DateTime
     */
    private \$dateTo;

    public function __construct(CoreParametersHelper \$coreParametersHelper)
    {
        \$this->batchSize = \$coreParametersHelper->get('report_export_batch_size');
        \$this->page      = 1;
    }

    public function beginExport()
    {
        \$this->page = 1;
    }

    public function nextBatch()
    {
        ++\$this->page;
    }

    /**
     * @return int
     */
    public function getBatchSize()
    {
        return \$this->batchSize;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return \$this->page;
    }

    /**
     * @return int
     */
    public function getNumberOfProcessedResults()
    {
        return \$this->page * \$this->getBatchSize();
    }

    /**
     * @return \\DateTime
     */
    public function getDateFrom()
    {
        return \$this->dateFrom;
    }

    /**
     * @param \\DateTime \$dateFrom
     */
    public function setDateFrom(\$dateFrom)
    {
        \$this->dateFrom = \$dateFrom;
    }

    /**
     * @return \\DateTime
     */
    public function getDateTo()
    {
        return \$this->dateTo;
    }

    /**
     * @param \\DateTime \$dateTo
     */
    public function setDateTo(\$dateTo)
    {
        \$this->dateTo = \$dateTo;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Model/ReportExportOptions.php";
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
        return new Source("", "@bundles/ReportBundle/Model/ReportExportOptions.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Model/ReportExportOptions.php");
    }
}
