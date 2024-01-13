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

/* @bundles/StageBundle/Config/config.php */
class __TwigTemplate_622278af9554235850b0a842300e5832d9426738595363e210e159d3068e00ca extends Template
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

return [
    'routes' => [
        'main' => [
            'mautic_stage_index' => [
                'path'       => '/stages/{page}',
                'controller' => 'MauticStageBundle:Stage:index',
            ],
            'mautic_stage_action' => [
                'path'       => '/stages/{objectAction}/{objectId}',
                'controller' => 'MauticStageBundle:Stage:execute',
            ],
        ],
        'api' => [
            'mautic_api_stagesstandard' => [
                'standard_entity' => true,
                'name'            => 'stages',
                'path'            => '/stages',
                'controller'      => 'MauticStageBundle:Api\\StageApi',
            ],
            'mautic_api_stageddcontact' => [
                'path'       => '/stages/{id}/contact/{contactId}/add',
                'controller' => 'MauticStageBundle:Api\\StageApi:addContact',
                'method'     => 'POST',
            ],
            'mautic_api_stageremovecontact' => [
                'path'       => '/stages/{id}/contact/{contactId}/remove',
                'controller' => 'MauticStageBundle:Api\\StageApi:removeContact',
                'method'     => 'POST',
            ],
        ],
    ],

    'menu' => [
        'main' => [
            'mautic.stages.menu.index' => [
                'route'     => 'mautic_stage_index',
                'iconClass' => 'fa-tachometer',
                'access'    => ['stage:stages:view'],
                'priority'  => 25,
            ],
        ],
    ],

    'categories' => [
        'stage' => null,
    ],

    'services' => [
        'events' => [
            'mautic.stage.campaignbundle.subscriber' => [
                'class'     => \\Mautic\\StageBundle\\EventListener\\CampaignSubscriber::class,
                'arguments' => [
                    'mautic.lead.model.lead',
                    'mautic.stage.model.stage',
                    'translator',
                ],
            ],
            'mautic.stage.subscriber' => [
                'class'     => \\Mautic\\StageBundle\\EventListener\\StageSubscriber::class,
                'arguments' => [
                    'mautic.helper.ip_lookup',
                    'mautic.core.model.auditlog',
                ],
            ],
            'mautic.stage.leadbundle.subscriber' => [
                'class'     => \\Mautic\\StageBundle\\EventListener\\LeadSubscriber::class,
                'arguments' => [
                    'mautic.lead.repository.stages_lead_log',
                    'mautic.stage.repository.lead_stage_log',
                    'translator',
                    'router',
                ],
            ],
            'mautic.stage.search.subscriber' => [
                'class'     => \\Mautic\\StageBundle\\EventListener\\SearchSubscriber::class,
                'arguments' => [
                    'mautic.stage.model.stage',
                    'mautic.security',
                    'mautic.helper.templating',
                ],
            ],
            'mautic.stage.dashboard.subscriber' => [
                'class'     => \\Mautic\\StageBundle\\EventListener\\DashboardSubscriber::class,
                'arguments' => [
                    'mautic.stage.model.stage',
                ],
            ],
            'mautic.stage.stats.subscriber' => [
                'class'     => \\Mautic\\StageBundle\\EventListener\\StatsSubscriber::class,
                'arguments' => [
                    'mautic.security',
                    'doctrine.orm.entity_manager',
                ],
            ],
        ],
        'forms' => [
            'mautic.stage.type.form' => [
                'class'     => \\Mautic\\StageBundle\\Form\\Type\\StageType::class,
                'arguments' => [
                    'mautic.security',
                ],
            ],
            'mautic.stage.type.action' => [
                'class' => 'Mautic\\StageBundle\\Form\\Type\\StageActionType',
            ],
            'mautic.stage.type.action_list' => [
                'class'     => 'Mautic\\StageBundle\\Form\\Type\\StageActionListType',
                'arguments' => [
                    'mautic.stage.model.stage',
                ],
            ],
            'mautic.stage.type.action_change' => [
                'class' => 'Mautic\\StageBundle\\Form\\Type\\StageActionChangeType',
            ],
            'mautic.stage.type.stage_list' => [
                'class'     => 'Mautic\\StageBundle\\Form\\Type\\StageListType',
                'arguments' => [
                    'mautic.stage.model.stage',
                ],
            ],
            'mautic.point.type.genericstage_settings' => [
                'class' => 'Mautic\\StageBundle\\Form\\Type\\GenericStageSettingsType',
            ],
        ],
        'models' => [
            'mautic.stage.model.stage' => [
                'class'     => 'Mautic\\StageBundle\\Model\\StageModel',
                'arguments' => [
                    'mautic.lead.model.lead',
                    'session',
                    'mautic.helper.user',
                ],
            ],
        ],
        'repositories' => [
            'mautic.stage.repository.lead_stage_log' => [
                'class'     => Doctrine\\ORM\\EntityRepository::class,
                'factory'   => ['@doctrine.orm.entity_manager', 'getRepository'],
                'arguments' => [
                    \\Mautic\\StageBundle\\Entity\\LeadStageLog::class,
                ],
            ],
        ],
    ],
];
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StageBundle/Config/config.php";
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
        return new Source("", "@bundles/StageBundle/Config/config.php", "/var/www/html/mautic/docroot/app/bundles/StageBundle/Config/config.php");
    }
}
