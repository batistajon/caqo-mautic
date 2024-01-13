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

/* @bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsType.php */
class __TwigTemplate_8a0f1bce7f0762a999cb2bf97d2da12d5d4eecffedccf1e06ed1ad17557f7f23 extends Template
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

use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormSyncInterface;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\IntegrationInterface;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class IntegrationSyncSettingsType extends AbstractType
{
    /**
     * @throws IntegrationNotFoundException
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$integrationObject = \$options['integrationObject'];
        if (!\$integrationObject instanceof IntegrationInterface || !\$integrationObject instanceof ConfigFormSyncInterface) {
            throw new IntegrationNotFoundException(\"{\$options['integrationObject']} is not recognized\");
        }

        // Build field mapping
        \$objects = \$integrationObject->getSyncConfigObjects();

        \$builder->add(
            'objects',
            ChoiceType::class,
            [
                'choices'     => array_flip(\$objects),
                'expanded'    => true,
                'multiple'    => true,
                'label'       => 'mautic.integration.sync_objects',
                'label_attr'  => ['class' => 'control-label'],
                'placeholder' => [],
                'required'    => false,
            ]
        );

        // @todo
        /*
        \$builder->add(
            'updateBlanks',
            YesNoButtonGroupType::class,
            [
                'label'       => 'mautic.integration.sync.update_blanks',
                'label_attr'  => ['class' => 'control-label'],
                'placeholder' => false,
                'required'    => false,
                'data'        => !empty(\$options['data']['updateBlanks'])
            ]
        );
        */

        \$builder->add(
            'fieldMappings',
            IntegrationSyncSettingsFieldMappingsType::class,
            [
                'label'             => false,
                'integrationObject' => \$integrationObject,
                'objects'           => \$objects,
            ]
        );

        if (\$customSettings = \$integrationObject->getSyncConfigFormName()) {
            \$builder->add(
                'integration',
                \$customSettings,
                [
                    'label' => false,
                ]
            );
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setRequired(
            [
                'integrationObject',
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
        return "@bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsType.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsType.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsType.php");
    }
}
