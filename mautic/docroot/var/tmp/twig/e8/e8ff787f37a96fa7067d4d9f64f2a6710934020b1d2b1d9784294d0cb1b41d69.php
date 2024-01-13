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

/* @bundles/ReportBundle/Event/ReportScheduleSendEvent.php */
class __TwigTemplate_31f996346939eae5d5a3cecccc437c234170018da18719b5bf73d0188407f33d extends Template
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

use Mautic\\ReportBundle\\Entity\\Scheduler;
use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class ReportScheduleSendEvent.
 */
class ReportScheduleSendEvent extends Event
{
    /**
     * @var Scheduler
     */
    private \$scheduler;

    /**
     * @var string
     */
    private \$file;

    /**
     * @param string \$file
     */
    public function __construct(Scheduler \$scheduler, \$file)
    {
        \$this->scheduler = \$scheduler;
        \$this->file      = \$file;
    }

    /**
     * @return Scheduler
     */
    public function getScheduler()
    {
        return \$this->scheduler;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return \$this->file;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Event/ReportScheduleSendEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ReportScheduleSendEvent.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Event/ReportScheduleSendEvent.php");
    }
}
