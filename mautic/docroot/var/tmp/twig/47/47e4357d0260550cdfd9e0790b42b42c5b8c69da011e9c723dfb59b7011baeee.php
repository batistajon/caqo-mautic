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

/* @bundles/CampaignBundle/Executioner/Dispatcher/Exception/LogNotProcessedException.php */
class __TwigTemplate_e44b8751fe2bffc2bc434a782fdd4035e022b7e73df2b5855f92edf1af3b6fc1 extends Template
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

class LogNotProcessedException extends \\Exception
{
    /**
     * LogNotProcessedException constructor.
     */
    public function __construct(LeadEventLog \$log)
    {
        parent::__construct(\"LeadEventLog ID # {\$log->getId()} must be passed to either pass() or fail()\", 0, null);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/Dispatcher/Exception/LogNotProcessedException.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Dispatcher/Exception/LogNotProcessedException.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Executioner/Dispatcher/Exception/LogNotProcessedException.php");
    }
}
