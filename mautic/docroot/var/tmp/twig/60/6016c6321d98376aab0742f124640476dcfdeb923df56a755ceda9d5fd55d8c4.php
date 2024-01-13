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

/* @bundles/CampaignBundle/Event/ExecutedEvent.php */
class __TwigTemplate_ab022562241a36822de600ad16b49f89e34638281e95ff4b5267384c8ae94404 extends Template
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

namespace Mautic\\CampaignBundle\\Event;

use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;

class ExecutedEvent extends \\Symfony\\Component\\EventDispatcher\\Event
{
    /**
     * @var AbstractEventAccessor
     */
    private \$config;

    /**
     * @var LeadEventLog
     */
    private \$log;

    /**
     * ExecutedEvent constructor.
     */
    public function __construct(AbstractEventAccessor \$config, LeadEventLog \$log)
    {
        \$this->config = \$config;
        \$this->log    = \$log;
    }

    /**
     * @return AbstractEventAccessor
     */
    public function getConfig()
    {
        return \$this->config;
    }

    /**
     * @return LeadEventLog
     */
    public function getLog()
    {
        return \$this->log;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Event/ExecutedEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/ExecutedEvent.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Event/ExecutedEvent.php");
    }
}
