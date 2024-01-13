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

/* @bundles/CampaignBundle/Membership/Action/Remover.php */
class __TwigTemplate_e71594ff34286679eb1481c957e1f242d9c13f32e38e75689aa394004b4e3cf4 extends Template
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

use Mautic\\CampaignBundle\\Entity\\Lead as CampaignMember;
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CampaignBundle\\Entity\\LeadRepository;
use Mautic\\CampaignBundle\\Membership\\Exception\\ContactAlreadyRemovedFromCampaignException;
use Mautic\\CoreBundle\\Templating\\Helper\\DateHelper;
use Symfony\\Component\\Translation\\TranslatorInterface;

class Remover
{
    const NAME = 'removed';

    /**
     * @var LeadRepository
     */
    private \$leadRepository;

    /**
     * @var LeadEventLogRepository
     */
    private \$leadEventLogRepository;

    /**
     * @var string
     */
    private \$unscheduledMessage;

    /**
     * Remover constructor.
     */
    public function __construct(
        LeadRepository \$leadRepository,
        LeadEventLogRepository \$leadEventLogRepository,
        TranslatorInterface \$translator,
        DateHelper \$dateHelper
    ) {
        \$this->leadRepository         = \$leadRepository;
        \$this->leadEventLogRepository = \$leadEventLogRepository;

        \$dateRemoved              = \$dateHelper->toFull(new \\DateTime());
        \$this->unscheduledMessage = \$translator->trans('mautic.campaign.member.removed', ['%date%' => \$dateRemoved]);
    }

    /**
     * @param bool \$isExit
     *
     * @throws ContactAlreadyRemovedFromCampaignException
     */
    public function updateExistingMembership(CampaignMember \$campaignMember, \$isExit)
    {
        if (\$isExit) {
            // Contact was removed by the change campaign action or a segment
            \$campaignMember->setDateLastExited(new \\DateTime());
        } else {
            \$campaignMember->setDateLastExited(null);
        }

        if (\$campaignMember->wasManuallyRemoved()) {
            \$this->saveCampaignMember(\$campaignMember);

            // Contact was already removed from this campaign
            throw new ContactAlreadyRemovedFromCampaignException();
        }

        // Unschedule any scheduled events
        \$this->leadEventLogRepository->unscheduleEvents(\$campaignMember, \$this->unscheduledMessage);

        // Remove this contact from the campaign
        \$campaignMember->setManuallyRemoved(true);
        \$campaignMember->setManuallyAdded(false);

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
        return "@bundles/CampaignBundle/Membership/Action/Remover.php";
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
        return new Source("", "@bundles/CampaignBundle/Membership/Action/Remover.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Membership/Action/Remover.php");
    }
}
