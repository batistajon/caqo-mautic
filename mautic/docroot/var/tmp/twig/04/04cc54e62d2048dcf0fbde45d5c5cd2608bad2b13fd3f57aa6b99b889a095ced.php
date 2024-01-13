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

/* @bundles/CampaignBundle/Event/ScheduledBatchEvent.php */
class __TwigTemplate_820098b11343859ebb3bc1d12f966c6b0e6c629d576d94aba033e807acd77ca6 extends Template
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

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;

class ScheduledBatchEvent extends AbstractLogCollectionEvent
{
    /**
     * @var bool
     */
    private \$isReschedule;

    /**
     * ScheduledBatchEvent constructor.
     *
     * @param bool \$isReschedule
     */
    public function __construct(AbstractEventAccessor \$config, Event \$event, ArrayCollection \$logs, \$isReschedule = false)
    {
        parent::__construct(\$config, \$event, \$logs);

        \$this->isReschedule = \$isReschedule;
    }

    /**
     * @return ArrayCollection
     */
    public function getScheduled()
    {
        return \$this->logs;
    }

    /**
     * @return bool
     */
    public function isReschedule()
    {
        return \$this->isReschedule;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Event/ScheduledBatchEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/ScheduledBatchEvent.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Event/ScheduledBatchEvent.php");
    }
}
