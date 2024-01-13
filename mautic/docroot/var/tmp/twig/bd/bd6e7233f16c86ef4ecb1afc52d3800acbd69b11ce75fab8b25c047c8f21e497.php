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

/* @bundles/ChannelBundle/PreferenceBuilder/ChannelPreferences.php */
class __TwigTemplate_267ecc668a40baec082fdc66dbf63e37047ba35e99f01bdcc69916bcfce140ee extends Template
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

namespace Mautic\\ChannelBundle\\PreferenceBuilder;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;

class ChannelPreferences
{
    /**
     * @var Event
     */
    private \$event;

    /**
     * @var ArrayCollection[]
     */
    private \$organizedByPriority = [];

    public function __construct(Event \$event)
    {
        \$this->event   = \$event;
    }

    /**
     * @param int \$priority
     *
     * @return \$this
     */
    public function addPriority(\$priority)
    {
        \$priority = (int) \$priority;

        if (!isset(\$this->organizedByPriority[\$priority])) {
            \$this->organizedByPriority[\$priority] = new ArrayCollection();
        }

        return \$this;
    }

    /**
     * @param int \$priority
     *
     * @return \$this
     */
    public function addLog(LeadEventLog \$log, \$priority)
    {
        \$priority = (int) \$priority;

        \$this->addPriority(\$priority);

        // We have to clone the log to not affect the original assocaited with the MM event itself

        // Clone to remove from Doctrine's ORM memory since we're having to apply a pseudo event
        \$log = clone \$log;
        \$log->setEvent(\$this->event);

        \$this->organizedByPriority[\$priority]->set(\$log->getId(), \$log);

        return \$this;
    }

    /**
     * Removes a log from all prioritized groups.
     *
     * @return \$this
     */
    public function removeLog(LeadEventLog \$log)
    {
        /**
         * @var int
         * @var ArrayCollection|LeadEventLog[] \$logs
         */
        foreach (\$this->organizedByPriority as \$logs) {
            \$logs->remove(\$log->getId());
        }

        return \$this;
    }

    /**
     * @param int \$priority
     *
     * @return ArrayCollection|LeadEventLog[]
     */
    public function getLogsByPriority(\$priority)
    {
        \$priority = (int) \$priority;

        return isset(\$this->organizedByPriority[\$priority]) ? \$this->organizedByPriority[\$priority] : new ArrayCollection();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/PreferenceBuilder/ChannelPreferences.php";
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
        return new Source("", "@bundles/ChannelBundle/PreferenceBuilder/ChannelPreferences.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/PreferenceBuilder/ChannelPreferences.php");
    }
}
