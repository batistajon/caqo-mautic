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

/* @bundles/ChannelBundle/Event/ChannelBroadcastEvent.php */
class __TwigTemplate_ca37df4b45d9089d2c41c75d6d396023a325631f24373230b7a7832951e2a464 extends Template
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

namespace Mautic\\ChannelBundle\\Event;

use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class ChannelBroadcastEvent.
 */
class ChannelBroadcastEvent extends Event
{
    /**
     * Specific channel.
     *
     * @var null
     */
    protected \$channel;

    /**
     * Specific ID of a specific channel.
     *
     * @var null
     */
    protected \$id;

    /**
     * Number of contacts successfully processed and/or failed per channel.
     *
     * @var array
     */
    protected \$results = [];

    /**
     * @var OutputInterface
     */
    protected \$output;

    /**
     * Min contact ID filter can be used for process parallelization.
     *
     * @var int
     */
    private \$minContactIdFilter;

    /**
     * Max contact ID filter can be used for process parallelization.
     *
     * @var int
     */
    private \$maxContactIdFilter;

    /**
     * How many contacts to load from the database.
     *
     * @var int
     */
    private \$limit = 100;

    /**
     * How big batches to use to actually send.
     *
     * @var int
     */
    private \$batch = 50;

    /**
     * MaintenanceEvent constructor.
     */
    public function __construct(\$channel, \$channelId, OutputInterface \$output)
    {
        \$this->channel = \$channel;
        \$this->id      = \$channelId;
        \$this->output  = \$output;
    }

    /**
     * @return mixed
     */
    public function getChannel()
    {
        return \$this->channel;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @param string \$channelLabel
     * @param int    \$successCount
     * @param int    \$failedCount
     */
    public function setResults(\$channelLabel, \$successCount, \$failedCount = 0, array \$failedRecipientsByList = [])
    {
        \$this->results[\$channelLabel] = [
            'success'                => (int) \$successCount,
            'failed'                 => (int) \$failedCount,
            'failedRecipientsByList' => \$failedRecipientsByList,
        ];
    }

    /**
     * @return array
     */
    public function getResults()
    {
        return \$this->results;
    }

    /**
     * @param \$channel
     *
     * @return bool
     */
    public function checkContext(\$channel)
    {
        if (\$this->channel && \$this->channel !== \$channel) {
            return false;
        }

        return true;
    }

    /**
     * @return OutputInterface
     */
    public function getOutput()
    {
        return \$this->output;
    }

    /**
     * @param int \$minContactIdFilter
     */
    public function setMinContactIdFilter(\$minContactIdFilter)
    {
        \$this->minContactIdFilter = \$minContactIdFilter;
    }

    /**
     * @return int|null
     */
    public function getMinContactIdFilter()
    {
        return \$this->minContactIdFilter;
    }

    /**
     * @param int \$maxContactIdFilter
     */
    public function setMaxContactIdFilter(\$maxContactIdFilter)
    {
        \$this->maxContactIdFilter = \$maxContactIdFilter;
    }

    /**
     * @return int|null
     */
    public function getMaxContactIdFilter()
    {
        return \$this->maxContactIdFilter;
    }

    /**
     * @param int \$limit
     */
    public function setLimit(\$limit)
    {
        \$this->limit = \$limit;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return \$this->limit;
    }

    /**
     * @param int \$batch
     */
    public function setBatch(\$batch)
    {
        \$this->batch = \$batch;
    }

    /**
     * @return int
     */
    public function getBatch()
    {
        return \$this->batch;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Event/ChannelBroadcastEvent.php";
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
        return new Source("", "@bundles/ChannelBundle/Event/ChannelBroadcastEvent.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Event/ChannelBroadcastEvent.php");
    }
}
