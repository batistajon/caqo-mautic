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

/* @bundles/CampaignBundle/Service/Campaign.php */
class __TwigTemplate_4c76f90f04ee1f42a236fe0bd2f0bb4dfef09111df05891ca69de1cdea650ead extends Template
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

namespace Mautic\\CampaignBundle\\Service;

use Mautic\\CampaignBundle\\Entity\\CampaignRepository;
use Mautic\\EmailBundle\\Entity\\EmailRepository;

class Campaign
{
    /**
     * @var CampaignRepository
     */
    private \$campaignRepository;

    /**
     * @var EmailRepository
     */
    private \$emailRepository;

    public function __construct(CampaignRepository \$campaignRepository, EmailRepository \$emailRepository)
    {
        \$this->campaignRepository = \$campaignRepository;
        \$this->emailRepository    = \$emailRepository;
    }

    /**
     * Has campaign at least one unpublished e-mail?
     *
     * @param int \$id
     *
     * @return bool
     */
    public function hasUnpublishedEmail(\$id)
    {
        \$emailIds = \$this->campaignRepository->fetchEmailIdsById(\$id);

        if (!\$emailIds) {
            return false;
        }

        return \$this->emailRepository->isOneUnpublished(\$emailIds);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Service/Campaign.php";
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
        return new Source("", "@bundles/CampaignBundle/Service/Campaign.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Service/Campaign.php");
    }
}
