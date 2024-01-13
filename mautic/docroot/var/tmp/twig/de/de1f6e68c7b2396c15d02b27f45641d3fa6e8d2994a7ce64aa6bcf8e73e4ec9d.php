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

/* @bundles/CampaignBundle/Tests/Event/CampaignBuilderEventTest.php */
class __TwigTemplate_105dd5e9172257012d51cb8a49a167d3f346a400fff8976debf45feb86ae2d0e extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Event;

use Mautic\\AssetBundle\\Form\\Type\\PointActionAssetDownloadType;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\Tests\\CampaignTestAbstract;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\FormBundle\\Form\\Type\\CampaignEventFormFieldValueType;

class CampaignBuilderEventTest extends CampaignTestAbstract
{
    public function testAddGetDecision()
    {
        \$decisionKey = 'email.open';
        \$decision    = [
            'label'                  => 'mautic.email.campaign.event.open',
            'description'            => 'mautic.email.campaign.event.open_descr',
            'eventName'              => 'mautic.email.on_campaign_trigger_decision',
            'connectionRestrictions' => [
                'source' => [
                    'action' => [
                        'email.send',
                    ],
                ],
            ],
        ];
        \$event = \$this->initEvent();
        \$event->addDecision(
            \$decisionKey,
            \$decision
        );

        \$decisions = \$event->getDecisions();
        \$this->assertSame([\$decisionKey => \$decision], \$decisions);
    }

    public function testEventDecisionSort()
    {
        \$decision = [
            'label'                  => 'mautic.email.campaign.event.open',
            'description'            => 'mautic.email.campaign.event.open_descr',
            'eventName'              => 'mautic.email.on_campaign_trigger_decision',
            'connectionRestrictions' => [
                'source' => [
                    'action' => [
                        'email.send',
                    ],
                ],
            ],
        ];
        \$event = \$this->initEvent();

        // add 3 unsorted decisions
        \$event->addDecision('email.open1', \$decision);
        \$decision['label'] = 'mautic.email.campaign.event.open.3';
        \$event->addDecision('email.open3', \$decision);
        \$decision['label'] = 'mautic.email.campaign.event.open.2';
        \$event->addDecision('email.open2', \$decision);

        \$decisions = \$event->getDecisions();

        \$this->assertCount(3, \$decisions);

        \$shouldBe = 1;
        foreach (\$decisions as \$key => \$resultDecision) {
            \$this->assertSame('email.open'.\$shouldBe, \$key);
            ++\$shouldBe;
        }
    }

    public function testEventConditionSort()
    {
        \$condition = [
            'label'       => 'mautic.form.campaign.event.field_value',
            'description' => 'mautic.form.campaign.event.field_value_descr',
            'formType'    => CampaignEventFormFieldValueType::class,
            'formTheme'   => 'MauticFormBundle:FormTheme\\FieldValueCondition',
            'eventName'   => 'mautic.form.on_campaign_trigger_condition',
        ];
        \$event = \$this->initEvent();

        // add 3 unsorted conditions
        \$event->addCondition('form.field_value1', \$condition);
        \$condition['label'] = 'mautic.form.campaign.event.field_value.3';
        \$event->addCondition('form.field_value3', \$condition);
        \$condition['label'] = 'mautic.form.campaign.event.field_value.2';
        \$event->addCondition('form.field_value2', \$condition);

        \$conditions = \$event->getConditions();

        \$this->assertCount(3, \$conditions);

        \$shouldBe = 1;
        foreach (\$conditions as \$key => \$resultCondition) {
            \$this->assertSame('form.field_value'.\$shouldBe, \$key);
            ++\$shouldBe;
        }
    }

    public function testEventActionSort()
    {
        \$action = [
            'group'       => 'mautic.asset.actions',
            'label'       => 'mautic.asset.point.action.download',
            'description' => 'mautic.asset.point.action.download_descr',
            'callback'    => ['\\\\Mautic\\\\AssetBundle\\\\Helper\\\\PointActionHelper', 'validateAssetDownload'],
            'formType'    => PointActionAssetDownloadType::class,
        ];
        \$event = \$this->initEvent();

        // add 3 unsorted actions
        \$event->addAction('asset.download1', \$action);
        \$action['label'] = 'mautic.asset.point.action.download.3';
        \$event->addAction('asset.download3', \$action);
        \$action['label'] = 'mautic.asset.point.action.download.2';
        \$event->addAction('asset.download2', \$action);

        \$actions = \$event->getActions();

        \$this->assertCount(3, \$actions);

        \$shouldBe = 1;
        foreach (\$actions as \$key => \$resultAction) {
            \$this->assertSame('asset.download'.\$shouldBe, \$key);
            ++\$shouldBe;
        }
    }

    protected function initEvent()
    {
        \$translator = \$this->getMockBuilder(Translator::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$translator->expects(\$this->any())
            ->method('trans')
            ->will(\$this->returnCallback(function () {
                \$args = func_get_args();

                return \$args[0];
            }));

        return new CampaignBuilderEvent(\$translator);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Event/CampaignBuilderEventTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Event/CampaignBuilderEventTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Event/CampaignBuilderEventTest.php");
    }
}
