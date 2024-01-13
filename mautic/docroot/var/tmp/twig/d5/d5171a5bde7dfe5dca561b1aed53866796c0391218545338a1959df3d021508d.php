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

/* @bundles/PluginBundle/EventListener/CampaignSubscriber.php */
class __TwigTemplate_ed1a749839979d95c5f850aad41d0b6a0d6fd92ed45d1fcadc9955a7a1e0864f extends Template
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

namespace Mautic\\PluginBundle\\EventListener;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent;
use Mautic\\PluginBundle\\Form\\Type\\IntegrationsListType;
use Mautic\\PluginBundle\\PluginEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CampaignSubscriber implements EventSubscriberInterface
{
    use PushToIntegrationTrait;

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            CampaignEvents::CAMPAIGN_ON_BUILD        => ['onCampaignBuild', 0],
            PluginEvents::ON_CAMPAIGN_TRIGGER_ACTION => ['onCampaignTriggerAction', 0],
        ];
    }

    public function onCampaignBuild(CampaignBuilderEvent \$event)
    {
        \$action = [
            'label'       => 'mautic.plugin.actions.push_lead',
            'description' => 'mautic.plugin.actions.tooltip',
            'formType'    => IntegrationsListType::class,
            'formTheme'   => 'MauticPluginBundle:FormTheme\\Integration',
            'eventName'   => PluginEvents::ON_CAMPAIGN_TRIGGER_ACTION,
        ];

        \$event->addAction('plugin.leadpush', \$action);
    }

    public function onCampaignTriggerAction(CampaignExecutionEvent \$event)
    {
        \$config                  = \$event->getConfig();
        \$config['campaignEvent'] = \$event->getEvent();
        \$config['leadEventLog']  = \$event->getLogEntry();
        \$lead                    = \$event->getLead();
        \$errors                  = [];
        \$success                 = \$this->pushToIntegration(\$config, \$lead, \$errors);

        if (count(\$errors)) {
            \$log = \$event->getLogEntry();
            \$log->appendToMetadata(
                [
                    'failed' => 1,
                    'reason' => implode('<br />', \$errors),
                ]
            );
        }

        \$event->setResult(\$success);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/EventListener/CampaignSubscriber.php";
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
        return new Source("", "@bundles/PluginBundle/EventListener/CampaignSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/EventListener/CampaignSubscriber.php");
    }
}
