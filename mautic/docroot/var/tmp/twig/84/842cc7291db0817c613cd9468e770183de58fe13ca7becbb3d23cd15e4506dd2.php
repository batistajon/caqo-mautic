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

/* @bundles/ChannelBundle/Config/config.php */
class __TwigTemplate_ccac3606a7e20adfc835a6f8bfb5e55d5c5e4e374c7920b9aac801ec9f74b63a extends Template
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
            'mautic_message_index' => [
                'path'       => '/messages/{page}',
                'controller' => 'MauticChannelBundle:Message:index',
            ],
            'mautic_message_contacts' => [
                'path'       => '/messages/contacts/{objectId}/{channel}/{page}',
                'controller' => 'MauticChannelBundle:Message:contacts',
            ],
            'mautic_message_action' => [
                'path'       => '/messages/{objectAction}/{objectId}',
                'controller' => 'MauticChannelBundle:Message:execute',
            ],
            'mautic_channel_batch_contact_set' => [
                'path'       => '/channels/batch/contact/set',
                'controller' => 'MauticChannelBundle:BatchContact:set',
            ],
            'mautic_channel_batch_contact_view' => [
                'path'       => '/channels/batch/contact/view',
                'controller' => 'MauticChannelBundle:BatchContact:index',
            ],
        ],
        'api' => [
            'mautic_api_messagetandard' => [
                'standard_entity' => true,
                'name'            => 'messages',
                'path'            => '/messages',
                'controller'      => 'MauticChannelBundle:Api\\MessageApi',
            ],
        ],
        'public' => [
        ],
    ],

    'menu' => [
        'main' => [
            'mautic.channel.messages' => [
                'route'    => 'mautic_message_index',
                'access'   => ['channel:messages:viewown', 'channel:messages:viewother'],
                'parent'   => 'mautic.core.channels',
                'priority' => 110,
            ],
        ],
        'admin' => [
        ],
        'profile' => [
        ],
        'extra' => [
        ],
    ],

    'categories' => [
        'messages' => null,
    ],

    'services' => [
        'events' => [
            'mautic.channel.campaignbundle.subscriber' => [
                'class'     => Mautic\\ChannelBundle\\EventListener\\CampaignSubscriber::class,
                'arguments' => [
                    'mautic.channel.model.message',
                    'mautic.campaign.dispatcher.action',
                    'mautic.campaign.event_collector',
                    'monolog.logger.mautic',
                    'translator',
                ],
            ],
            'mautic.channel.channelbundle.subscriber' => [
                'class'     => \\Mautic\\ChannelBundle\\EventListener\\MessageSubscriber::class,
                'arguments' => [
                    'mautic.core.model.auditlog',
                ],
            ],
            'mautic.channel.channelbundle.lead.subscriber' => [
                'class'     => Mautic\\ChannelBundle\\EventListener\\LeadSubscriber::class,
                'arguments' => [
                    'translator',
                    'router',
                    'mautic.channel.repository.message_queue',
                ],
            ],
            'mautic.channel.reportbundle.subscriber' => [
                'class'     => Mautic\\ChannelBundle\\EventListener\\ReportSubscriber::class,
                'arguments' => [
                    'mautic.lead.model.company_report_data',
                    'router',
                ],
            ],
            'mautic.channel.button.subscriber' => [
                'class'     => \\Mautic\\ChannelBundle\\EventListener\\ButtonSubscriber::class,
                'arguments' => [
                    'router',
                    'translator',
                ],
            ],
        ],
        'forms' => [
            \\Mautic\\ChannelBundle\\Form\\Type\\MessageType::class => [
                'class'       => \\Mautic\\ChannelBundle\\Form\\Type\\MessageType::class,
                'methodCalls' => [
                    'setSecurity' => ['mautic.security'],
                ],
                'arguments' => [
                    'mautic.channel.model.message',
                ],
            ],
            'mautic.form.type.message_list' => [
                'class' => \\Mautic\\ChannelBundle\\Form\\Type\\MessageListType::class,
            ],
            'mautic.form.type.message_send' => [
                'class'     => \\Mautic\\ChannelBundle\\Form\\Type\\MessageSendType::class,
                'arguments' => ['router', 'mautic.channel.model.message'],
            ],
        ],
        'helpers' => [
            'mautic.channel.helper.channel_list' => [
                'class'     => \\Mautic\\ChannelBundle\\Helper\\ChannelListHelper::class,
                'arguments' => [
                    'event_dispatcher',
                    'translator',
                ],
                'alias' => 'channel',
            ],
        ],
        'models' => [
            'mautic.channel.model.message' => [
                'class'     => \\Mautic\\ChannelBundle\\Model\\MessageModel::class,
                'arguments' => [
                    'mautic.channel.helper.channel_list',
                    'mautic.campaign.model.campaign',
                ],
            ],
            'mautic.channel.model.queue' => [
                'class'     => 'Mautic\\ChannelBundle\\Model\\MessageQueueModel',
                'arguments' => [
                    'mautic.lead.model.lead',
                    'mautic.lead.model.company',
                    'mautic.helper.core_parameters',
                ],
            ],
            'mautic.channel.model.channel.action' => [
                'class'     => \\Mautic\\ChannelBundle\\Model\\ChannelActionModel::class,
                'arguments' => [
                    'mautic.lead.model.lead',
                    'mautic.lead.model.dnc',
                    'translator',
                ],
            ],
            'mautic.channel.model.frequency.action' => [
                'class'     => \\Mautic\\ChannelBundle\\Model\\FrequencyActionModel::class,
                'arguments' => [
                    'mautic.lead.model.lead',
                    'mautic.lead.repository.frequency_rule',
                ],
            ],
        ],
        'repositories' => [
            'mautic.channel.repository.message_queue' => [
                'class'     => Doctrine\\ORM\\EntityRepository::class,
                'factory'   => ['@doctrine.orm.entity_manager', 'getRepository'],
                'arguments' => \\Mautic\\ChannelBundle\\Entity\\MessageQueue::class,
            ],
        ],
    ],

    'parameters' => [
    ],
];
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Config/config.php";
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
        return new Source("", "@bundles/ChannelBundle/Config/config.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Config/config.php");
    }
}
