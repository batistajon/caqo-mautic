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

/* @bundles/EmailBundle/EventListener/ConfigSubscriber.php */
class __TwigTemplate_b78c2cb00cebcd0cff2a7aea09bc7e2ce753886901104e811ca5e5e79fe63024 extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Mautic\\ConfigBundle\\ConfigEvents;
use Mautic\\ConfigBundle\\Event\\ConfigBuilderEvent;
use Mautic\\ConfigBundle\\Event\\ConfigEvent;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\EmailBundle\\Form\\Type\\ConfigType;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ConfigSubscriber implements EventSubscriberInterface
{
    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    public function __construct(CoreParametersHelper \$coreParametersHelper)
    {
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            ConfigEvents::CONFIG_ON_GENERATE => ['onConfigGenerate', 0],
            ConfigEvents::CONFIG_PRE_SAVE    => ['onConfigBeforeSave', 0],
        ];
    }

    public function onConfigGenerate(ConfigBuilderEvent \$event)
    {
        \$event->addForm([
            'bundle'     => 'EmailBundle',
            'formType'   => ConfigType::class,
            'formAlias'  => 'emailconfig',
            'formTheme'  => 'MauticEmailBundle:FormTheme\\Config',
            'parameters' => \$event->getParametersFromConfig('MauticEmailBundle'),
        ]);
    }

    public function onConfigBeforeSave(ConfigEvent \$event)
    {
        \$event->unsetIfEmpty(
            [
                'mailer_password',
                'mailer_api_key',
            ]
        );

        \$data = \$event->getConfig('emailconfig');

        // Get the original data so that passwords aren't lost
        \$monitoredEmail = \$this->coreParametersHelper->get('monitored_email');
        if (isset(\$data['monitored_email'])) {
            foreach (\$data['monitored_email'] as \$key => \$monitor) {
                if (empty(\$monitor['password']) && !empty(\$monitoredEmail[\$key]['password'])) {
                    \$data['monitored_email'][\$key]['password'] = \$monitoredEmail[\$key]['password'];
                }

                if ('general' != \$key) {
                    if (empty(\$monitor['host']) || empty(\$monitor['address']) || empty(\$monitor['folder'])) {
                        // Reset to defaults
                        \$data['monitored_email'][\$key]['override_settings'] = 0;
                        \$data['monitored_email'][\$key]['address']           = null;
                        \$data['monitored_email'][\$key]['host']              = null;
                        \$data['monitored_email'][\$key]['user']              = null;
                        \$data['monitored_email'][\$key]['password']          = null;
                        \$data['monitored_email'][\$key]['encryption']        = '/ssl';
                        \$data['monitored_email'][\$key]['port']              = '993';
                    }
                }
            }
        }

        \$event->setConfig(\$data, 'emailconfig');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/EventListener/ConfigSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/ConfigSubscriber.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/EventListener/ConfigSubscriber.php");
    }
}
