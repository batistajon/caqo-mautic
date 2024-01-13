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

/* @bundles/CampaignBundle/Controller/Api/EventApiController.php */
class __TwigTemplate_cbcebc96556bd02e2f26cc6e66bc4b60d5b2d4a9f38b191cd1ab53ae536d22f0 extends Template
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

namespace Mautic\\CampaignBundle\\Controller\\Api;

use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\ApiBundle\\Serializer\\Exclusion\\FieldExclusionStrategy;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\LeadBundle\\Controller\\LeadAccessTrait;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

/**
 * Class EventApiController.
 */
class EventApiController extends CommonApiController
{
    use LeadAccessTrait;

    public function initialize(FilterControllerEvent \$event)
    {
        \$this->model                    = \$this->getModel('campaign.event');
        \$this->entityClass              = 'Mautic\\CampaignBundle\\Entity\\Event';
        \$this->entityNameOne            = 'event';
        \$this->entityNameMulti          = 'events';
        \$this->serializerGroups         = ['campaignEventStandaloneDetails', 'campaignList'];
        \$this->parentChildrenLevelDepth = 1;

        // Don't include campaign in children/parent arrays
        \$this->addExclusionStrategy(new FieldExclusionStrategy(['campaign'], 1));

        parent::initialize(\$event);
    }

    /**
     * @param Event  \$entity
     * @param string \$action
     *
     * @return bool|mixed
     */
    protected function checkEntityAccess(\$entity, \$action = 'view')
    {
        // Use the campaign for permission checks
        return parent::checkEntityAccess(\$entity->getCampaign(), \$action);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Controller/Api/EventApiController.php";
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
        return new Source("", "@bundles/CampaignBundle/Controller/Api/EventApiController.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Controller/Api/EventApiController.php");
    }
}
