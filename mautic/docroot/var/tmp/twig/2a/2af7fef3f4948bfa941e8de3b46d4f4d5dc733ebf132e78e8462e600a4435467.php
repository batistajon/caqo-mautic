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

/* @bundles/EmailBundle/Form/Type/ConfigMonitoredEmailType.php */
class __TwigTemplate_c4a7a52f77888de7436ee35662f4de1010465faacc4376460dd60172f5182b4a extends Template
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

namespace Mautic\\EmailBundle\\Form\\Type;

use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\MonitoredEmailEvent;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;

class ConfigMonitoredEmailType extends AbstractType
{
    /**
     * @var EventDispatcherInterface
     */
    private \$dispatcher;

    public function __construct(EventDispatcherInterface \$dispatcher)
    {
        \$this->dispatcher = \$dispatcher;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        if (function_exists('imap_open')) {
            \$data  = \$options['data'];
            \$event = new MonitoredEmailEvent(\$builder, \$data);

            // Default email bundles
            \$event->addFolder('general', '', 'mautic.email.config.monitored_email.general');

            \$this->dispatcher->dispatch(EmailEvents::MONITORED_EMAIL_CONFIG, \$event);

            \$folderSettings = \$event->getFolders();
            foreach (\$folderSettings as \$key => \$settings) {
                \$folderData = (array_key_exists(\$key, \$data)) ? \$data[\$key] : [];
                \$builder->add(
                    \$key,
                    ConfigMonitoredMailboxesType::class,
                    [
                        'label'            => \$settings['label'],
                        'mailbox'          => \$key,
                        'default_folder'   => \$settings['default'],
                        'data'             => \$folderData,
                        'required'         => false,
                        'general_settings' => (array_key_exists('general', \$data)) ? \$data['general'] : [],
                    ]
                );
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'monitored_email';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Form/Type/ConfigMonitoredEmailType.php";
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
        return new Source("", "@bundles/EmailBundle/Form/Type/ConfigMonitoredEmailType.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Form/Type/ConfigMonitoredEmailType.php");
    }
}
