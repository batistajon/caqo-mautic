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

/* @bundles/IntegrationsBundle/Form/Type/IntegrationConfigType.php */
class __TwigTemplate_520b31bdba25c5c32d6bb9f85b46db81bf5a61919d4ac0027ac3a74fcb2fe386 extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Helper\\ConfigIntegrationsHelper;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormAuthInterface;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormFeaturesInterface;
use Mautic\\PluginBundle\\Entity\\Integration;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class IntegrationConfigType extends AbstractType
{
    /**
     * @var ConfigIntegrationsHelper
     */
    private \$integrationsHelper;

    /**
     * IntegrationConfigType constructor.
     */
    public function __construct(ConfigIntegrationsHelper \$integrationsHelper)
    {
        \$this->integrationsHelper = \$integrationsHelper;
    }

    /**
     * @throws IntegrationNotFoundException
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$integrationObject = \$this->integrationsHelper->getIntegration(\$options['integration']);

        // isPublished
        \$builder->add(
            'isPublished',
            YesNoButtonGroupType::class,
            [
                'label'      => 'mautic.integration.enabled',
                'label_attr' => ['class' => 'control-label'],
            ]
        );

        // apiKeys
        if (\$integrationObject instanceof ConfigFormAuthInterface) {
            \$builder->add(
                'apiKeys',
                \$integrationObject->getAuthConfigFormName(),
                [
                    'label'       => false,
                    'integration' => \$integrationObject,
                ]
            );
        }

        // supportedFeatures
        if (\$integrationObject instanceof ConfigFormFeaturesInterface) {
            // @todo add tooltip support
            \$builder->add(
                'supportedFeatures',
                ChoiceType::class,
                [
                    'label'      => 'mautic.integration.features',
                    'label_attr' => ['class' => 'control-label'],
                    'choices'    => array_flip(\$integrationObject->getSupportedFeatures()),
                    'expanded'   => true,
                    'multiple'   => true,
                    'required'   => false,
                ]
            );
        }

        // featureSettings
        \$builder->add(
            'featureSettings',
            IntegrationFeatureSettingsType::class,
            [
                'label'             => false,
                'integrationObject' => \$integrationObject,
            ]
        );

        \$builder->add('buttons', FormButtonsType::class);

        \$builder->setAction(\$options['action']);
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setRequired(
            [
                'integration',
            ]
        );

        \$resolver->setDefined(
            [
                'data_class'  => Integration::class,
            ]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Form/Type/IntegrationConfigType.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Form/Type/IntegrationConfigType.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Form/Type/IntegrationConfigType.php");
    }
}
