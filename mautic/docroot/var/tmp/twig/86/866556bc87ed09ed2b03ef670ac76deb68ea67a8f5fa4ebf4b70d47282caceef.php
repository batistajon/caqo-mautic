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

/* @bundles/CampaignBundle/Executioner/ContactFinder/Limiter/ContactLimiter.php */
class __TwigTemplate_4dcd40434c94cb4160ac135f5e5e000ea2353b9bdc1df2997ffe16be46c8273d extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter;

use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;

/**
 * Class ContactLimiter.
 */
class ContactLimiter
{
    /**
     * @var int|null
     */
    private \$batchLimit;

    /**
     * @var int|null
     */
    private \$contactId;

    /**
     * @var int|null
     */
    private \$minContactId;

    /**
     * @var int|null
     */
    private \$batchMinContactId;

    /**
     * @var int|null
     */
    private \$maxContactId;

    /**
     * @var array
     */
    private \$contactIdList;

    /**
     * @var int|null
     */
    private \$threadId;

    /**
     * @var int|null
     */
    private \$maxThreads;

    /**
     * @var int|null
     */
    private \$campaignLimit;

    /**
     * @var int|null
     */
    private \$campaignLimitUsed;

    /**
     * ContactLimiter constructor.
     *
     * @param int      \$batchLimit
     * @param int|null \$contactId
     * @param int|null \$minContactId
     * @param int|null \$maxContactId
     * @param int|null \$threadId
     * @param int|null \$maxThreads
     * @param int|null \$campaignLimit
     */
    public function __construct(
        \$batchLimit,
        \$contactId = null,
        \$minContactId = null,
        \$maxContactId = null,
        array \$contactIdList = [],
        \$threadId = null,
        \$maxThreads = null,
        \$campaignLimit = null
    ) {
        \$this->batchLimit    = (\$batchLimit) ? (int) \$batchLimit : 100;
        \$this->contactId     = (\$contactId) ? (int) \$contactId : null;
        \$this->minContactId  = (\$minContactId) ? (int) \$minContactId : null;
        \$this->maxContactId  = (\$maxContactId) ? (int) \$maxContactId : null;
        \$this->contactIdList = \$contactIdList;

        if (\$threadId && \$maxThreads) {
            \$this->threadId     = (int) \$threadId;
            \$this->maxThreads   = (int) \$maxThreads;

            if (\$threadId > \$maxThreads) {
                throw new \\InvalidArgumentException('\$threadId cannot be larger than \$maxThreads');
            }
        }

        if (\$campaignLimit) {
            \$this->campaignLimit     = \$campaignLimit;
            \$this->campaignLimitUsed = 0;
        }
    }

    /**
     * @return int
     */
    public function getBatchLimit()
    {
        return \$this->batchLimit;
    }

    /**
     * @return int|null
     */
    public function getContactId()
    {
        return \$this->contactId;
    }

    /**
     * @return int|null
     */
    public function getMinContactId()
    {
        return (\$this->batchMinContactId) ? \$this->batchMinContactId : \$this->minContactId;
    }

    /**
     * @return int|null
     */
    public function getMaxContactId()
    {
        return \$this->maxContactId;
    }

    /**
     * @return array
     */
    public function getContactIdList()
    {
        return \$this->contactIdList;
    }

    /**
     * @param int \$id
     *
     * @return \$this
     *
     * @throws NoContactsFoundException
     */
    public function setBatchMinContactId(\$id)
    {
        // Prevent a never ending loop if the contact ID never changes due to being the last batch of contacts
        if (\$this->minContactId && \$this->minContactId > (int) \$id) {
            throw new NoContactsFoundException();
        }

        // We've surpasssed the max so bai
        if (\$this->maxContactId && \$this->maxContactId < (int) \$id) {
            throw new NoContactsFoundException();
        }

        // The same batch of contacts were somehow processed so let's stop to prevent the loop
        if (\$this->batchMinContactId && \$this->batchMinContactId >= \$id) {
            throw new NoContactsFoundException();
        }

        \$this->batchMinContactId = (int) \$id;

        return \$this;
    }

    /**
     * @return \$this
     */
    public function resetBatchMinContactId()
    {
        \$this->batchMinContactId =  null;

        return \$this;
    }

    /**
     * @return int|null
     */
    public function getMaxThreads()
    {
        return \$this->maxThreads;
    }

    /**
     * @return int|null
     */
    public function getThreadId()
    {
        return \$this->threadId;
    }

    /**
     * @return int|null
     */
    public function getCampaignLimit()
    {
        return \$this->campaignLimit;
    }

    /**
     * @return bool
     */
    public function hasCampaignLimit()
    {
        return null !== \$this->campaignLimit;
    }

    /**
     * @return int
     *
     * @throws \\Exception
     */
    public function getCampaignLimitRemaining()
    {
        if (!\$this->hasCampaignLimit()) {
            throw new \\Exception('Campaign Limit was not set');
        }

        return \$this->campaignLimit - \$this->campaignLimitUsed;
    }

    /**
     * @param \$reduction
     *
     * @return \$this
     *
     * @throws \\Exception
     */
    public function reduceCampaignLimitRemaining(\$reduction)
    {
        if (!\$this->hasCampaignLimit()) {
            throw new \\Exception('Campaign Limit was not set');
        } elseif (\$this->campaignLimit < (\$this->campaignLimitUsed + \$reduction)) {
            throw new \\Exception('Campaign Limit exceeded');
        }
        \$this->campaignLimitUsed += \$reduction;

        return \$this;
    }

    /**
     * @return \$this
     */
    public function resetCampaignLimitRemaining()
    {
        \$this->campaignLimitUsed = 0;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/ContactFinder/Limiter/ContactLimiter.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/ContactFinder/Limiter/ContactLimiter.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Executioner/ContactFinder/Limiter/ContactLimiter.php");
    }
}
