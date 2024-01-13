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

/* @bundles/ReportBundle/Crate/ReportDataResult.php */
class __TwigTemplate_f7d443661615e6046ce3367dc79dea34ecd23e4c586ff6994de403c29b3847fd extends Template
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

namespace Mautic\\ReportBundle\\Crate;

class ReportDataResult
{
    /**
     * @var int
     */
    private \$totalResults;

    /**
     * @var array
     */
    private \$data;

    /**
     * @var array
     */
    private \$headers = [];

    /**
     * @var array
     */
    private \$types = [];

    public function __construct(array \$data)
    {
        if (
            !array_key_exists('data', \$data) ||
            !array_key_exists('dataColumns', \$data) ||
            !array_key_exists('columns', \$data)
        ) {
            throw new \\InvalidArgumentException(\"Keys 'data', 'dataColumns' and 'columns' have to be provided\");
        }

        \$this->totalResults = (int) \$data['totalResults'];
        \$this->data         = \$data['data'];

        \$this->buildHeader(\$data);
        \$this->buildTypes(\$data);
    }

    /**
     * @return int
     */
    public function getTotalResults()
    {
        return \$this->totalResults;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return \$this->data;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return \$this->headers;
    }

    /**
     * @param string \$column
     *
     * @return string
     */
    public function getType(\$column)
    {
        return isset(\$this->types[\$column]) ? \$this->types[\$column] : 'string';
    }

    /**
     * @param array \$data
     */
    private function buildHeader(\$data)
    {
        if (!isset(\$this->data[0])) {
            return;
        }

        \$row = \$this->data[0];
        foreach (\$row as \$k => \$v) {
            \$dataColumn      = \$data['dataColumns'][\$k];
            \$label           = \$data['columns'][\$dataColumn]['label'];

            // Aggregated column
            if (isset(\$data['aggregatorColumns'][\$k])) {
                \$this->headers[] = str_replace(\$dataColumn, \$label, \$k);
            } else {
                \$this->headers[] = \$data['columns'][\$dataColumn]['label'];
            }
        }
    }

    /**
     * @param array \$data
     */
    private function buildTypes(\$data)
    {
        if (!isset(\$this->data[0])) {
            return;
        }

        \$row = \$this->data[0];
        foreach (\$row as \$k => \$v) {
            if (isset(\$data['aggregatorColumns']) && array_key_exists(\$k, \$data['aggregatorColumns'])) {
                \$this->types[\$k] = 'int';
            } else {
                \$dataColumn      = \$data['dataColumns'][\$k];
                \$this->types[\$k] = \$data['columns'][\$dataColumn]['type'];
            }
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
        return "@bundles/ReportBundle/Crate/ReportDataResult.php";
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
        return new Source("", "@bundles/ReportBundle/Crate/ReportDataResult.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Crate/ReportDataResult.php");
    }
}
