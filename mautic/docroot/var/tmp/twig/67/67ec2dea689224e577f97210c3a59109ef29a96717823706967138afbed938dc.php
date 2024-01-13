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

/* @bundles/PluginBundle/Form/Type/DetailsType.php */
class __TwigTemplate_30d7d291b4e45c36b12882cc663edaa9b19fabdb6284c01ae78c6177e68ec1c9 extends Template
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

namespace Mautic\\PluginBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Form\\Type\\StandAloneButtonType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\PluginBundle\\Entity\\Integration;
use Mautic\\PluginBundle\\Integration\\AbstractIntegration;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * Class DetailsType.
 */
class DetailsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add('isPublished', YesNoButtonGroupType::class);

        /** @var AbstractIntegration \$integrationObject */
        \$integrationObject = \$options['integration_object'];
        /** @var Integration \$integration */
        \$integration   = \$options['data'];
        \$formSettings  = \$integrationObject->getFormDisplaySettings();
        \$decryptedKeys = \$integrationObject->decryptApiKeys(\$integration->getApiKeys());
        \$keys          = \$integrationObject->getRequiredKeyFields();

        if (!empty(\$formSettings['hide_keys'])) {
            foreach (\$formSettings['hide_keys'] as \$key) {
                unset(\$keys[\$key]);
            }
        }

        \$builder->add(
                'apiKeys',
                KeysType::class,
                [
                    'label'              => false,
                    'integration_keys'   => \$keys,
                    'data'               => \$decryptedKeys,
                    'integration_object' => \$integrationObject,
                ]
            );

        \$builder->addEventListener(
                FormEvents::PRE_SUBMIT,
                function (FormEvent \$event) use (\$keys, \$decryptedKeys, \$options) {
                    \$data = \$event->getData();
                    \$form = \$event->getForm();

                    \$form->add(
                        'apiKeys',
                        KeysType::class,
                        [
                            'label'              => false,
                            'integration_keys'   => \$keys,
                            'data'               => \$decryptedKeys,
                            'integration_object' => \$options['integration_object'],
                            'is_published'       => (int) \$data['isPublished'],
                        ]
                    );
                }
            );

        if (!empty(\$formSettings['requires_authorization'])) {
            \$label = (\$integrationObject->isAuthorized()) ? 'reauthorize' : 'authorize';

            \$builder->add(
                    'authButton',
                    StandAloneButtonType::class,
                    [
                        'attr'     => [
                            'class'   => 'btn btn-success btn-lg',
                            'onclick' => 'Mautic.initiateIntegrationAuthorization()',
                            'icon'    => 'fa fa-key',
                        ],
                        'label'    => 'mautic.integration.form.'.\$label,
                        'disabled' => false,
                    ]
                );
        }

        \$features = \$integrationObject->getSupportedFeatures();
        \$tooltips = \$integrationObject->getSupportedFeatureTooltips();
        if (!empty(\$features)) {
            // Check to see if the integration is a new entry and thus not configured
            \$configured      = null !== \$integration->getId();
            \$enabledFeatures = \$integration->getSupportedFeatures();
            \$data            = (\$configured) ? \$enabledFeatures : \$features;

            \$choices = [];
            foreach (\$features as \$f) {
                \$choices['mautic.integration.form.feature.'.\$f] = \$f;
            }

            \$builder->add(
                'supportedFeatures',
                ChoiceType::class,
                [
                    'choices'     => \$choices,
                    'expanded'    => true,
                    'label_attr'  => ['class' => 'control-label'],
                    'multiple'    => true,
                    'label'       => 'mautic.integration.form.features',
                    'required'    => false,
                    'data'        => \$data,
                    'choice_attr' => function (\$val) use (\$tooltips) {
                        if (array_key_exists(\$val, \$tooltips)) {
                            return [
                                'data-toggle' => 'tooltip',
                                'title'       => \$tooltips[\$val],
                            ];
                        }

                        return [];
                    },
                ]
            );
        }

        \$builder->add(
            'featureSettings',
            FeatureSettingsType::class,
            [
                'label'              => 'mautic.integration.form.feature.settings',
                'required'           => true,
                'data'               => \$integration->getFeatureSettings(),
                'label_attr'         => ['class' => 'control-label'],
                'integration'        => \$options['integration'],
                'integration_object' => \$integrationObject,
                'lead_fields'        => \$options['lead_fields'],
                'company_fields'     => \$options['company_fields'],
            ]
        );

        \$builder->add('name', HiddenType::class, ['data' => \$options['integration']]);

        \$builder->add('in_auth', HiddenType::class, ['mapped' => false]);

        \$builder->add('buttons', FormButtonsType::class);

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }

        \$integrationObject->modifyForm(\$builder, \$options);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(
            [
                'data_class' => Integration::class,
            ]
        );

        \$resolver->setRequired(['integration', 'integration_object', 'lead_fields', 'company_fields']);
        \$resolver->setAllowedTypes('integration_object', [AbstractIntegration::class]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'integration_details';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Form/Type/DetailsType.php";
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
        return new Source("", "@bundles/PluginBundle/Form/Type/DetailsType.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Form/Type/DetailsType.php");
    }
}
