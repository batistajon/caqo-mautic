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

/* @bundles/ReportBundle/Event/AbstractReportEvent.php */
class __TwigTemplate_6cb7f25b745098a5c791579760a13dcdc7df3081f0c8b5f6e5c92b6428a8f289 extends Template
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

namespace Mautic\\ReportBundle\\Event;

use Mautic\\ReportBundle\\Entity\\Report;
use Symfony\\Component\\EventDispatcher\\Event;

class AbstractReportEvent extends Event
{
    /**
     * @var string
     */
    protected \$context = '';

    /**
     * Report entity.
     *
     * @var Report
     */
    protected \$report;

    /**
     * @return Report
     */
    public function getReport()
    {
        return \$this->report;
    }

    /**
     * Get the context.
     *
     * @return string
     */
    public function getContext()
    {
        return \$this->context;
    }

    /**
     * @param \$context
     *
     * @return bool
     */
    public function checkContext(\$context)
    {
        if (empty(\$this->context)) {
            return true;
        }

        if (is_array(\$context)) {
            return in_array(\$this->context, \$context);
        } elseif (\$this->context == \$context) {
            return true;
        } else {
            return false;
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
        return "@bundles/ReportBundle/Event/AbstractReportEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/AbstractReportEvent.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Event/AbstractReportEvent.php");
    }
}
