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

/* @bundles/CampaignBundle/EventCollector/Accessor/Event/ConditionAccessor.php */
class __TwigTemplate_ac603c3628955880bb2dbc9125036d9b112ddcd7130a5d490bba62a2cc824fae extends Template
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

namespace Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event;

/**
 * Class ConditionAccessor.
 */
class ConditionAccessor extends AbstractEventAccessor
{
    /**
     * ConditionAccessor constructor.
     */
    public function __construct(array \$config)
    {
        \$this->systemProperties[] = 'eventName';

        parent::__construct(\$config);
    }

    /**
     * @return string
     */
    public function getEventName()
    {
        return \$this->getProperty('eventName');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/EventCollector/Accessor/Event/ConditionAccessor.php";
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
        return new Source("", "@bundles/CampaignBundle/EventCollector/Accessor/Event/ConditionAccessor.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/EventCollector/Accessor/Event/ConditionAccessor.php");
    }
}
