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

/* @bundles/CampaignBundle/Executioner/ContactFinder/KickoffContactFinder.php */
class __TwigTemplate_627e7d7adf07f75f55c3abf1928a04671f5c2ca88a55c479d4250611242a3ee1 extends Template
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
use Mautic\\CampaignBundle\\Entity\\CampaignRepository;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Psr\\Log\\LoggerInterface;

class KickoffContactFinder
{
    /**
     * @var LeadRepository
     */
    private \$leadRepository;

    /**
     * @var CampaignRepository
     */
    private \$campaignRepository;

    /**
     * @var LoggerInterface
     */
    private \$logger;

    /**
     * KickoffContactFinder constructor.
     */
    public function __construct(LeadRepository \$leadRepository, CampaignRepository \$campaignRepository, LoggerInterface \$logger)
    {
        \$this->leadRepository     = \$leadRepository;
        \$this->campaignRepository = \$campaignRepository;
        \$this->logger             = \$logger;
    }

    /**
     * @param int \$campaignId
     *
     * @return ArrayCollection
     *
     * @throws NoContactsFoundException
     */
    public function getContacts(\$campaignId, ContactLimiter \$limiter)
    {
        // Get list of all campaign leads; start is always zero in practice because of \$pendingOnly
        \$campaignContacts = \$this->campaignRepository->getPendingContactIds(\$campaignId, \$limiter);

        if (empty(\$campaignContacts)) {
            // No new contacts found in the campaign

            throw new NoContactsFoundException();
        }

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
     * @param int \$campaignId
     *
     * @return int
     */
    public function getContactCount(\$campaignId, array \$eventIds, ContactLimiter \$limiter)
    {
        \$countResult = \$this->campaignRepository->getCountsForPendingContacts(\$campaignId, \$eventIds, \$limiter);

        return \$countResult->getCount();
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
        return "@bundles/CampaignBundle/Executioner/ContactFinder/KickoffContactFinder.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/ContactFinder/KickoffContactFinder.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Executioner/ContactFinder/KickoffContactFinder.php");
    }
}
