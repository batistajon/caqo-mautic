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

/* @bundles/CampaignBundle/Executioner/ContactFinder/ScheduledContactFinder.php */
class __TwigTemplate_0d48685a8b72bb0ded3b7b2207cc8048e8819eef2887ecc9ba4d9e22d3c6ccba extends Template
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
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Psr\\Log\\LoggerInterface;

class ScheduledContactFinder
{
    /**
     * @var LeadRepository
     */
    private \$leadRepository;

    /**
     * @var LoggerInterface
     */
    private \$logger;

    /**
     * ScheduledContactFinder constructor.
     */
    public function __construct(LeadRepository \$leadRepository, LoggerInterface \$logger)
    {
        \$this->leadRepository = \$leadRepository;
        \$this->logger         = \$logger;
    }

    /**
     * Hydrate contacts with custom field value, companies, etc.
     */
    public function hydrateContacts(ArrayCollection \$logs)
    {
        \$contactIds = [];
        /** @var LeadEventLog \$log */
        foreach (\$logs as \$log) {
            \$contactIds[] = \$log->getLead()->getId();
        }

        if (!count(\$contactIds)) {
            // Just a precaution in case non-existent contacts are lingering in the campaign leads table
            \$this->logger->debug('CAMPAIGN: No contact entities found.');

            throw new NoContactsFoundException();
        }

        \$contacts = \$this->leadRepository->getContactCollection(\$contactIds);

        foreach (\$logs as \$key => \$log) {
            \$contactId = \$log->getLead()->getId();
            if (!\$contact = \$contacts->get(\$contactId)) {
                // the contact must have been deleted mid execution so remove this log from memory
                \$logs->remove(\$key);

                continue;
            }

            \$log->setLead(\$contact);
        }
    }

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
        return "@bundles/CampaignBundle/Executioner/ContactFinder/ScheduledContactFinder.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/ContactFinder/ScheduledContactFinder.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Executioner/ContactFinder/ScheduledContactFinder.php");
    }
}
