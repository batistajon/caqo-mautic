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

/* @bundles/PluginBundle/Form/Type/IntegrationsListType.php */
class __TwigTemplate_4e1da091c0a060ee248903c37502c4126c6aca5c6a8a9feabbd176d22d3724e6 extends Template
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

use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class IntegrationsListType extends AbstractType
{
    /**
     * @var IntegrationHelper
     */
    private \$integrationHelper;

    public function __construct(IntegrationHelper \$integrationHelper)
    {
        \$this->integrationHelper = \$integrationHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$integrationObjects = \$this->integrationHelper->getIntegrationObjects(null, \$options['supported_features'], true);
        \$integrations       = ['' => ''];

        foreach (\$integrationObjects as \$object) {
            \$settings = \$object->getIntegrationSettings();

            if (\$settings->isPublished()) {
                \$pluginName = \$settings->getPlugin()->getName();
                if (!isset(\$integrations[\$pluginName])) {
                    \$integrations[\$pluginName] = [];
                }
                \$integrations[\$pluginName][\$object->getDisplayName()] = \$object->getName();
            }
        }

        \$builder->add(
            'integration',
            ChoiceType::class,
            [
                'choices'    => \$integrations,
                'expanded'   => false,
                'label_attr' => ['class' => 'control-label'],
                'multiple'   => false,
                'label'      => 'mautic.integration.integration',
                'attr'       => [
                    'class'    => 'form-control',
                    'tooltip'  => 'mautic.integration.integration.tooltip',
                    'onchange' => 'Mautic.getIntegrationConfig(this);',
                ],
                'required'    => true,
                'constraints' => [
                    new NotBlank(
                        ['message' => 'mautic.core.value.required']
                    ),
                ],
            ]
        );

        \$formModifier = function (FormEvent \$event) use (\$integrationObjects) {
            \$data            = \$event->getData();
            \$form            = \$event->getForm();
            \$statusChoices   = [];
            \$campaignChoices = [];

            if (isset(\$data['integration'])) {
                \$integrationObject = \$this->integrationHelper->getIntegrationObject(\$data['integration']);
                if (method_exists(\$integrationObject, 'getCampaigns')) {
                    \$campaigns = \$integrationObject->getCampaigns();

                    if (isset(\$campaigns['records']) && !empty(\$campaigns['records'])) {
                        foreach (\$campaigns['records'] as \$campaign) {
                            \$campaignChoices[\$campaign['Id']] = \$campaign['Name'];
                        }
                    }
                }
                if (method_exists(\$integrationObject, 'getCampaignMemberStatus') && isset(\$data['config']['campaigns'])) {
                    \$campaignStatus = \$integrationObject->getCampaignMemberStatus(\$data['config']['campaigns']);

                    if (isset(\$campaignStatus['records']) && !empty(\$campaignStatus['records'])) {
                        foreach (\$campaignStatus['records'] as \$campaignS) {
                            \$statusChoices[\$campaignS['Label']] = \$campaignS['Label'];
                        }
                    }
                }
            }
            \$form->add(
                'config',
                IntegrationConfigType::class,
                [
                    'label' => false,
                    'attr'  => [
                        'class' => 'integration-config-container',
                    ],
                    'integration' => isset(\$data['integration'], \$integrationObjects[\$data['integration']]) ? \$integrationObjects[\$data['integration']] : null,
                    'campaigns'   => \$campaignChoices,
                    'data'        => (isset(\$data['config'])) ? \$data['config'] : [],
                ]
            );

            \$hideClass = (isset(\$data['campaign_member_status']) && !empty(\$data['campaign_member_status']['campaign_member_status'])) ? '' : ' hide';
            \$form->add(
                'campaign_member_status',
                IntegrationCampaignsType::class,
                [
                    'label' => false,
                    'attr'  => [
                        'class' => 'integration-campaigns-status'.\$hideClass,
                    ],
                    'campaignContactStatus' => \$statusChoices,
                    'data'                  => (isset(\$data['campaign_member_status'])) ? \$data['campaign_member_status'] : [],
                ]
            );
        };

        \$builder->addEventListener(FormEvents::PRE_SET_DATA, \$formModifier);

        \$builder->addEventListener(FormEvents::PRE_SUBMIT, \$formModifier);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefined(['supported_features']);
        \$resolver->setDefaults(
            [
                'supported_features' => 'push_lead',
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'integration_list';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Form/Type/IntegrationsListType.php";
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
        return new Source("", "@bundles/PluginBundle/Form/Type/IntegrationsListType.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Form/Type/IntegrationsListType.php");
    }
}
