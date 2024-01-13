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

/* @bundles/CampaignBundle/Event/PendingEvent.php */
class __TwigTemplate_979297fed57697a0d8dbd6e2fb10e4936dd02a5783a875078b92dbdeae3a6eb9 extends Template
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
use Mautic\\CampaignBundle\\Entity\\FailedLeadEventLog;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;

class PendingEvent extends AbstractLogCollectionEvent
{
    use ContextTrait;

    /**
     * @var ArrayCollection
     */
    private \$failures;

    /**
     * @var ArrayCollection
     */
    private \$successful;

    /**
     * @var string|null
     */
    private \$channel;

    /**
     * @var int|null
     */
    private \$channelId;

    /**
     * @var \\DateTime
     */
    private \$now;

    /**
     * @throws \\Exception
     */
    public function __construct(AbstractEventAccessor \$config, Event \$event, ArrayCollection \$logs)
    {
        \$this->failures   = new ArrayCollection();
        \$this->successful = new ArrayCollection();
        \$this->now        = new \\DateTime();

        parent::__construct(\$config, \$event, \$logs);
    }

    /**
     * @return LeadEventLog[]|ArrayCollection
     */
    public function getPending()
    {
        return \$this->logs;
    }

    /**
     * @param string \$reason
     */
    public function fail(LeadEventLog \$log, \$reason, \\DateInterval \$rescheduleInterval = null)
    {
        if (!\$failedLog = \$log->getFailedLog()) {
            \$failedLog = new FailedLeadEventLog();
        }

        \$log->setRescheduleInterval(\$rescheduleInterval);

        \$failedLog->setLog(\$log)
            ->setDateAdded(new \\DateTime())
            ->setReason(\$reason);

        // Used by the UI
        \$metadata = \$log->getMetadata();
        \$metadata = array_merge(
            \$metadata,
            [
                'failed' => 1,
                'reason' => \$reason,
            ]
        );
        \$log->setMetadata(\$metadata);

        \$this->logChannel(\$log);

        \$this->failures->set(\$log->getId(), \$log);
    }

    /**
     * @param string \$reason
     */
    public function failAll(\$reason)
    {
        foreach (\$this->logs as \$log) {
            \$this->fail(\$log, \$reason);
        }
    }

    /**
     * Fail all that have not passed yet.
     *
     * @param string \$reason
     */
    public function failRemaining(\$reason)
    {
        foreach (\$this->logs as \$log) {
            if (!\$this->successful->contains(\$log)) {
                \$this->fail(\$log, \$reason);
            }
        }
    }

    /**
     * @param LeadEventLog[]|ArrayCollection \$logs
     * @param string                         \$reason
     */
    public function failLogs(ArrayCollection \$logs, \$reason)
    {
        foreach (\$logs as \$log) {
            \$this->fail(\$log, \$reason);
        }
    }

    public function pass(LeadEventLog \$log)
    {
        \$metadata = \$log->getMetadata();
        unset(\$metadata['errors']);
        if (isset(\$metadata['failed'])) {
            unset(\$metadata['failed'], \$metadata['reason']);
        }
        \$log->setMetadata(\$metadata);

        \$this->passLog(\$log);
    }

    /**
     * @param string \$error
     */
    public function passWithError(LeadEventLog \$log, \$error)
    {
        \$log->appendToMetadata(
            [
                'failed' => 1,
                'reason' => \$error,
            ]
        );

        \$this->passLog(\$log);
    }

    /**
     * @param string \$error
     */
    public function passAllWithError(\$error)
    {
        /** @var LeadEventLog \$log */
        foreach (\$this->logs as \$log) {
            \$this->passWithError(\$log, \$error);
        }
    }

    /**
     * Pass all remainging logs that have not failed failed nor suceeded yet.
     */
    public function passRemainingWithError(string \$error)
    {
        foreach (\$this->logs as \$log) {
            if (!\$this->failures->contains(\$log) && !\$this->successful->contains(\$log)) {
                \$this->passWithError(\$log, \$error);
            }
        }
    }

    /**
     * Pass all pending.
     */
    public function passAll()
    {
        /** @var LeadEventLog \$log */
        foreach (\$this->logs as \$log) {
            \$this->pass(\$log);
        }
    }

    /**
     * @param LeadEventLog[]|ArrayCollection \$logs
     */
    public function passLogs(ArrayCollection \$logs)
    {
        foreach (\$logs as \$log) {
            \$this->pass(\$log);
        }
    }

    /**
     * Pass all that have not failed yet.
     */
    public function passRemaining()
    {
        foreach (\$this->logs as \$log) {
            if (!\$this->failures->contains(\$log)) {
                \$this->pass(\$log);
            }
        }
    }

    /**
     * @return LeadEventLog[]|ArrayCollection
     */
    public function getFailures()
    {
        return \$this->failures;
    }

    /**
     * @return LeadEventLog[]|ArrayCollection
     */
    public function getSuccessful()
    {
        return \$this->successful;
    }

    /**
     * @param string   \$channel
     * @param int|null \$channelId
     */
    public function setChannel(\$channel, \$channelId = null)
    {
        \$this->channel   = \$channel;
        \$this->channelId = \$channelId;
    }

    private function passLog(LeadEventLog \$log)
    {
        if (\$failedLog = \$log->getFailedLog()) {
            // Delete existing entries
            \$failedLog->setLog(null);
            \$log->setFailedLog(null);
        }
        \$this->logChannel(\$log);
        \$log->setIsScheduled(false)
            ->setDateTriggered(\$this->now);

        \$this->successful->set(\$log->getId(), \$log);
    }

    private function logChannel(LeadEventLog \$log)
    {
        if (\$this->channel) {
            \$log->setChannel(\$this->channel)
                ->setChannelId(\$this->channelId);
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
        return "@bundles/CampaignBundle/Event/PendingEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/PendingEvent.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Event/PendingEvent.php");
    }
}
