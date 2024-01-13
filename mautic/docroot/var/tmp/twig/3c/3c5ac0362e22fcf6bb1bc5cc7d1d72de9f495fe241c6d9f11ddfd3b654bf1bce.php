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

/* @bundles/CampaignBundle/Tests/Helper/CampaignEventHelperTest.php */
class __TwigTemplate_076c66843ad74a26a4ade77f5d91b31f4681b5d10e7a142381aba8877637c735 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Helper;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Event\\CampaignLeadChangeEvent;
use Mautic\\CampaignBundle\\Helper\\CampaignEventHelper;
use Mautic\\CampaignBundle\\Tests\\CampaignTestAbstract;

class CampaignEventHelperTest extends CampaignTestAbstract
{
    public function testValidateLeadChangeTriggerWithEmptyCampaigns()
    {
        \$eventDetails = new CampaignLeadChangeEvent(new Campaign(), [], 'badaction');
        \$event        = [
            'properties' => [
                'campaigns' => [],
                'action'    => 'added',
            ],
            'campaign' => [
                'id' => null,
            ],
        ];
        \$result = CampaignEventHelper::validateLeadChangeTrigger(\$eventDetails, \$event);
        \$this->assertFalse(\$result);
    }

    public function testValidateLeadChangeTriggerWithUnmatchingCampaignsAndInvalidAction()
    {
        \$eventDetails = new CampaignLeadChangeEvent(new Campaign(), [], 'badaction');
        \$event        = [
            'properties' => [
                'campaigns' => [3],
                'action'    => 'added',
            ],
            'campaign' => [
                'id' => 4,
            ],
        ];
        \$result = CampaignEventHelper::validateLeadChangeTrigger(\$eventDetails, \$event);
        \$this->assertFalse(\$result);
    }

    public function testValidateLeadChangeTriggerWithMatchingCampaignsAndInvalidAction()
    {
        \$eventDetails = new CampaignLeadChangeEvent(new Campaign(), [], 'removed');
        \$event        = [
            'properties' => [
                'campaigns' => [3],
                'action'    => 'added',
            ],
            'campaign' => [
                'id' => 3,
            ],
        ];
        \$result = CampaignEventHelper::validateLeadChangeTrigger(\$eventDetails, \$event);
        \$this->assertFalse(\$result);
    }

    public function testValidateLeadChangeTriggerWithMatchingCampaignsAndVariousActions()
    {
        \$actions = [
            'added'   => true,
            'removed' => true,
            'invalid' => false,
        ];

        foreach (\$actions as \$action => \$expectedResult) {
            \$campaignId   = 3;
            \$eventDetails = new CampaignLeadChangeEvent(new Campaign(), [], \$action);
            \$event        = [
                'properties' => [
                    'campaigns' => [\$campaignId, 8],
                    'action'    => \$action,
                ],
                'campaign' => [
                    'id' => \$campaignId,
                ],
            ];
            \$result = CampaignEventHelper::validateLeadChangeTrigger(\$eventDetails, \$event);
            \$this->assertSame(\$expectedResult, \$result);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Helper/CampaignEventHelperTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Helper/CampaignEventHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Helper/CampaignEventHelperTest.php");
    }
}
