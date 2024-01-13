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

/* @bundles/CampaignBundle/Event/CampaignEvent.php */
class __TwigTemplate_1390c2605776b6ac75c60ffb7b360247f375b315f57fcd5908d540037d5f58c8 extends Template
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
use Mautic\\CoreBundle\\Event\\CommonEvent;

/**
 * Class CampaignEvent.
 */
class CampaignEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Campaign &\$campaign, \$isNew = false)
    {
        \$this->entity = &\$campaign;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Campaign entity.
     *
     * @return Campaign
     */
    public function getCampaign()
    {
        return \$this->entity;
    }

    /**
     * Sets the Campaign entity.
     */
    public function setCampaign(Campaign \$campaign)
    {
        \$this->entity = \$campaign;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Event/CampaignEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/CampaignEvent.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Event/CampaignEvent.php");
    }
}
