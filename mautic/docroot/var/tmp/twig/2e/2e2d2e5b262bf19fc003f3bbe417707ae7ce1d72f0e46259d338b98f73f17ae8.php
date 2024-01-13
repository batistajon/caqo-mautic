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

/* @bundles/CampaignBundle/Executioner/Dispatcher/Exception/LogPassedAndFailedException.php */
class __TwigTemplate_723f1b77e429fa2880ae372e1f1bf46370b200cbe3c77351f9edb84bd8fc32b3 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Dispatcher\\Exception;

use Mautic\\CampaignBundle\\Entity\\LeadEventLog;

class LogPassedAndFailedException extends \\Exception
{
    /**
     * LogNotProcessedException constructor.
     */
    public function __construct(LeadEventLog \$log)
    {
        parent::__construct(\"LeadEventLog ID # {\$log->getId()} was passed to both pass() or fail(). Pass or fail the log, not both.\", 0, null);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/Dispatcher/Exception/LogPassedAndFailedException.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Dispatcher/Exception/LogPassedAndFailedException.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Executioner/Dispatcher/Exception/LogPassedAndFailedException.php");
    }
}
