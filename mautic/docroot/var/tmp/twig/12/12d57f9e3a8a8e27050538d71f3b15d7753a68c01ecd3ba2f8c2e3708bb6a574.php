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

/* @bundles/CampaignBundle/Event/CampaignTriggerEvent.php */
class __TwigTemplate_c9165780c21f53bba4aca31532072eabbb55b7c0d6b00303e9d21cc2ad967719 extends Template
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

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Symfony\\Component\\EventDispatcher\\Event;

class CampaignTriggerEvent extends Event
{
    /**
     * @var Campaign
     */
    protected \$campaign;

    /**
     * @var bool
     */
    protected \$triggerCampaign = true;

    public function __construct(Campaign \$campaign)
    {
        \$this->campaign = \$campaign;
    }

    /**
     * Returns the Campaign entity.
     *
     * @return Campaign
     */
    public function getCampaign()
    {
        return \$this->campaign;
    }

    /**
     * @return bool
     */
    public function shouldTrigger()
    {
        return \$this->triggerCampaign;
    }

    /**
     * Do not trigger this campaign.
     */
    public function doNotTrigger()
    {
        \$this->triggerCampaign = false;

        \$this->stopPropagation();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Event/CampaignTriggerEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/CampaignTriggerEvent.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Event/CampaignTriggerEvent.php");
    }
}
