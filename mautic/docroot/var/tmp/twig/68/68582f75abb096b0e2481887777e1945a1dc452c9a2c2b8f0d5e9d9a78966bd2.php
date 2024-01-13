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

/* @bundles/NotificationBundle/Integration/OneSignalIntegration.php */
class __TwigTemplate_f740fb2c1a91a89675424a2c1c3e02cef845c89dd0a897eb97990dab49c54c22 extends Template
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

namespace Mautic\\NotificationBundle\\Integration;

use Mautic\\PluginBundle\\Integration\\AbstractIntegration;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilder;

/**
 * Class OneSignalIntegration.
 */
class OneSignalIntegration extends AbstractIntegration
{
    protected bool \$coreIntegration = true;

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getName()
    {
        return 'OneSignal';
    }

    public function getIcon()
    {
        return 'app/bundles/NotificationBundle/Assets/img/OneSignal.png';
    }

    public function getSupportedFeatures()
    {
        return [
            'mobile',
            'landing_page_enabled',
            'welcome_notification_enabled',
            'tracking_page_enabled',
        ];
    }

    public function getSupportedFeatureTooltips()
    {
        return [
            'landing_page_enabled'  => 'mautic.integration.form.features.landing_page_enabled.tooltip',
            'tracking_page_enabled' => 'mautic.integration.form.features.tracking_page_enabled.tooltip',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function getRequiredKeyFields()
    {
        return [
            'app_id'        => 'mautic.notification.config.form.notification.app_id',
            'safari_web_id' => 'mautic.notification.config.form.notification.safari_web_id',
            'rest_api_key'  => 'mautic.notification.config.form.notification.rest_api_key',
            'gcm_sender_id' => 'mautic.notification.config.form.notification.gcm_sender_id',
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getAuthenticationType()
    {
        return 'none';
    }

    /**
     * @param \\Mautic\\PluginBundle\\Integration\\Form|FormBuilder \$builder
     * @param array                                             \$data
     * @param string                                            \$formArea
     */
    public function appendToForm(&\$builder, \$data, \$formArea)
    {
        if ('features' == \$formArea) {
            /* @var FormBuilder \$builder */
            \$builder->add(
                'subdomain_name',
                TextType::class,
                [
                    'label'    => 'mautic.notification.form.subdomain_name.label',
                    'required' => false,
                    'attr'     => [
                        'class' => 'form-control',
                    ],
                ]
            );

            \$builder->add(
                'platforms',
                ChoiceType::class,
                [
                    'choices' => [
                        'mautic.integration.form.platforms.ios'     => 'ios',
                        'mautic.integration.form.platforms.android' => 'android',
                    ],
                    'attr'              => [
                        'tooltip'      => 'mautic.integration.form.platforms.tooltip',
                        'data-show-on' => '{\"integration_details_supportedFeatures_0\":\"checked\"}',
                    ],
                    'expanded'    => true,
                    'multiple'    => true,
                    'label'       => 'mautic.integration.form.platforms',
                    'placeholder' => false,
                    'required'    => false,
                ]
            );
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
        return "@bundles/NotificationBundle/Integration/OneSignalIntegration.php";
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
        return new Source("", "@bundles/NotificationBundle/Integration/OneSignalIntegration.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Integration/OneSignalIntegration.php");
    }
}
