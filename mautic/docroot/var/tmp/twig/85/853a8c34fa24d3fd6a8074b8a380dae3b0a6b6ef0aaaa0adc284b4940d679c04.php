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

/* @bundles/ReportBundle/Scheduler/Option/ExportOption.php */
class __TwigTemplate_aafe9191f7fa9d746dd0163f330eee9eb664d906d36789ccd357082c6f7112d5 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Option;

class ExportOption
{
    /**
     * @var int
     */
    private \$reportId;

    /**
     * @param int|null \$reportId
     */
    public function __construct(\$reportId)
    {
        if (!is_null(\$reportId) && !is_numeric(\$reportId)) {
            throw new \\InvalidArgumentException();
        }

        \$this->reportId = (int) \$reportId;
    }

    /**
     * @return int
     */
    public function getReportId()
    {
        return \$this->reportId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/Option/ExportOption.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Option/ExportOption.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Scheduler/Option/ExportOption.php");
    }
}
