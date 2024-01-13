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

/* @bundles/CampaignBundle/Membership/Action/Adder.php */
class __TwigTemplate_575ea0fc3de67f0db59ea51060cf87571f894b4f45b558816bb57f61cd9e6b1e extends Template
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

namespace Mautic\\CampaignBundle\\Membership\\Action;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Lead as CampaignMember;
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CampaignBundle\\Entity\\LeadRepository;
use Mautic\\CampaignBundle\\Membership\\Exception\\ContactCannotBeAddedToCampaignException;
use Mautic\\LeadBundle\\Entity\\Lead;

class Adder
{
    const NAME = 'added';

    /**
     * @var LeadRepository
     */
    private \$leadRepository;

    /**
     * @var LeadEventLogRepository
     */
    private \$leadEventLogRepository;

    /**
     * Adder constructor.
     */
    public function __construct(LeadRepository \$leadRepository, LeadEventLogRepository \$leadEventLogRepository)
    {
        \$this->leadRepository         = \$leadRepository;
        \$this->leadEventLogRepository = \$leadEventLogRepository;
    }

    /**
     * @param \$isManualAction
     *
     * @return CampaignMember
     */
    public function createNewMembership(Lead \$contact, Campaign \$campaign, \$isManualAction)
    {
        // BC support for prior to 2.14.
        // If the contact was in the campaign to start with then removed, their logs remained but the original membership was removed
        // Start the new rotation at 2
        \$rotation = 1;
        if (\$this->leadEventLogRepository->hasBeenInCampaignRotation(\$contact->getId(), \$campaign->getId(), 1)) {
            \$rotation = 2;
        }

        \$campaignMember = new CampaignMember();
        \$campaignMember->setLead(\$contact);
        \$campaignMember->setCampaign(\$campaign);
        \$campaignMember->setManuallyAdded(\$isManualAction);
        \$campaignMember->setDateAdded(new \\DateTime());
        \$campaignMember->setRotation(\$rotation);
        \$this->saveCampaignMember(\$campaignMember);

        return \$campaignMember;
    }

    /**
     * @param bool \$isManualAction
     *
     * @throws ContactCannotBeAddedToCampaignException
     */
    public function updateExistingMembership(CampaignMember \$campaignMember, \$isManualAction)
    {
        \$wasRemoved = \$campaignMember->wasManuallyRemoved();
        if (!(\$wasRemoved && \$isManualAction) && !\$campaignMember->getCampaign()->allowRestart()) {
            // A contact cannot restart this campaign

            throw new ContactCannotBeAddedToCampaignException();
        }

        if (\$wasRemoved && !\$isManualAction && null === \$campaignMember->getDateLastExited()) {
            // Prevent contacts from being added back if they were manually removed but automatically added back

            throw new ContactCannotBeAddedToCampaignException();
        }

        if (\$wasRemoved && \$isManualAction) {
            // If they were manually removed and manually added back, mark it as so
            \$campaignMember->setManuallyAdded(\$isManualAction);
        }

        // Contact exited but has been added back to the campaign
        \$campaignMember->setManuallyRemoved(false);
        \$campaignMember->setDateLastExited(null);
        \$campaignMember->startNewRotation();

        \$this->saveCampaignMember(\$campaignMember);
    }

    /**
     * @param \$campaignMember
     */
    private function saveCampaignMember(\$campaignMember)
    {
        \$this->leadRepository->saveEntity(\$campaignMember);
        \$this->leadRepository->detachEntity(\$campaignMember);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Membership/Action/Adder.php";
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
        return new Source("", "@bundles/CampaignBundle/Membership/Action/Adder.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Membership/Action/Adder.php");
    }
}
