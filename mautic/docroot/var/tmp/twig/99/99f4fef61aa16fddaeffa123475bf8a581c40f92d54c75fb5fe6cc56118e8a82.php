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

/* @bundles/CampaignBundle/Executioner/ContactFinder/InactiveContactFinder.php */
class __TwigTemplate_42fb16a3148fa5d5614bfe0a7a361965d6d71e94ac9a93dd7cfe10addd466d66 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\ContactFinder;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadRepository as CampaignLeadRepository;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Psr\\Log\\LoggerInterface;

class InactiveContactFinder
{
    /**
     * @var LeadRepository
     */
    private \$leadRepository;

    /**
     * @var CampaignLeadRepository
     */
    private \$campaignLeadRepository;

    /**
     * @var LoggerInterface
     */
    private \$logger;

    /**
     * @var ArrayCollection
     */
    private \$campaignMemberDatesAdded;

    public function __construct(
        LeadRepository \$leadRepository,
        CampaignLeadRepository \$campaignLeadRepository,
        LoggerInterface \$logger
    ) {
        \$this->leadRepository         = \$leadRepository;
        \$this->campaignLeadRepository = \$campaignLeadRepository;
        \$this->logger                 = \$logger;
    }

    /**
     * @param int \$campaignId
     *
     * @return ArrayCollection
     *
     * @throws NoContactsFoundException
     */
    public function getContacts(\$campaignId, Event \$decisionEvent, ContactLimiter \$limiter)
    {
        if (\$limiter->hasCampaignLimit() && 0 === \$limiter->getCampaignLimitRemaining()) {
            // Limit was reached but do not trigger the NoContactsFoundException
            return new ArrayCollection();
        }

        // Get list of all campaign leads
        \$decisionParentEvent            = \$decisionEvent->getParent();
        \$this->campaignMemberDatesAdded = \$this->campaignLeadRepository->getInactiveContacts(
            \$campaignId,
            \$decisionEvent->getId(),
            (\$decisionParentEvent) ? \$decisionParentEvent->getId() : null,
            \$limiter
        );

        if (empty(\$this->campaignMemberDatesAdded)) {
            // No new contacts found in the campaign
            throw new NoContactsFoundException();
        }

        \$campaignContacts = array_keys(\$this->campaignMemberDatesAdded);
        \$this->logger->debug('CAMPAIGN: Processing the following contacts: '.implode(', ', \$campaignContacts));

        // Fetch entity objects for the found contacts
        \$contacts = \$this->leadRepository->getContactCollection(\$campaignContacts);

        if (!count(\$contacts)) {
            // Just a precaution in case non-existent contacts are lingering in the campaign leads table
            \$this->logger->debug('CAMPAIGN: No contact entities found.');

            throw new NoContactsFoundException();
        }

        return \$contacts;
    }

    /**
     * @return ArrayCollection
     */
    public function getDatesAdded()
    {
        return \$this->campaignMemberDatesAdded;
    }

    /**
     * @param int \$campaignId
     *
     * @return int
     */
    public function getContactCount(\$campaignId, array \$decisionEvents, ContactLimiter \$limiter)
    {
        return \$this->campaignLeadRepository->getInactiveContactCount(\$campaignId, \$decisionEvents, \$limiter);
    }

    /**
     * Clear Lead entities from memory.
     */
    public function clear()
    {
        \$this->leadRepository->clear();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/ContactFinder/InactiveContactFinder.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/ContactFinder/InactiveContactFinder.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Executioner/ContactFinder/InactiveContactFinder.php");
    }
}
