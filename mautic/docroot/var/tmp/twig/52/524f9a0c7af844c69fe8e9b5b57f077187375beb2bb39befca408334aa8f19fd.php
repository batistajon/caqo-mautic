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

/* @bundles/CampaignBundle/Helper/RemovedContactTracker.php */
class __TwigTemplate_45a85bed38720fdf19f9aba89c0bb3080e64cc0314f6d9a6af3062b800f20dd6 extends Template
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

namespace Mautic\\CampaignBundle\\Helper;

class RemovedContactTracker
{
    /**
     * @var array
     */
    private \$removedContacts = [];

    /**
     * @param int \$campaignId
     * @param int \$contactId
     */
    public function addRemovedContact(\$campaignId, \$contactId)
    {
        if (!isset(\$this->removedContacts[\$campaignId])) {
            \$this->removedContacts[\$campaignId] = [];
        }

        \$this->removedContacts[\$campaignId][\$contactId] = \$contactId;
    }

    /**
     * @param int   \$campaignId
     * @param array \$contacts
     */
    public function addRemovedContacts(\$campaignId, array \$contactIds)
    {
        foreach (\$contactIds as \$contactId) {
            \$this->addRemovedContact(\$campaignId, \$contactId);
        }
    }

    /**
     * @param int \$campaignId
     */
    public function clearRemovedContact(\$campaignId, \$contactId)
    {
        unset(\$this->removedContacts[\$campaignId][\$contactId]);
    }

    /**
     * @param int \$campaignId
     */
    public function wasContactRemoved(\$campaignId, \$contactId)
    {
        return !empty(\$this->removedContacts[\$campaignId][\$contactId]);
    }

    /**
     * @return array
     */
    public function getRemovedContacts()
    {
        return \$this->removedContacts;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Helper/RemovedContactTracker.php";
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
        return new Source("", "@bundles/CampaignBundle/Helper/RemovedContactTracker.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Helper/RemovedContactTracker.php");
    }
}
