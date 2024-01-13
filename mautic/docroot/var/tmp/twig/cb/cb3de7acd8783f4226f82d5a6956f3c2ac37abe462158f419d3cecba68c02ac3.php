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

/* @bundles/FormBundle/Form/Type/ActionType.php */
class __TwigTemplate_40036cebec2b8d82b80c5fd54c7fc5ad943ba6453fd37f12bb802decf6c0430b extends Template
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

namespace Mautic\\FormBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * Class ActionType.
 */
class ActionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$masks = ['description' => 'html'];

        \$builder->add(
            'name',
            TextType::class,
            [
                'label'      => 'mautic.core.name',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'required'   => false,
            ]
        );

        \$builder->add(
            'description',
            TextareaType::class,
            [
                'label'      => 'mautic.core.description',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control editor'],
                'required'   => false,
            ]
        );

        \$properties      = (!empty(\$options['data']['properties'])) ? \$options['data']['properties'] : null;
        \$formType        = \$options['settings']['formType'];
        \$formTypeOptions = [
            'label' => false,
            'data'  => \$properties,
            'attr'  => [
                'data-formid' => \$options['formId'], //sneaky way of feeding the formId without requiring the option
            ],
        ];
        if (isset(\$options['settings']['formTypeCleanMasks'])) {
            \$masks['properties'] = \$options['settings']['formTypeCleanMasks'];
        }
        if (!empty(\$options['settings']['formTypeOptions'])) {
            // Ensure that attr is not overwritten
            if (isset(\$options['settings']['formTypeOptions']['attr'])) {
                \$options['settings']['formTypeOptions']['attr']['data-formid'] = \$options['formId'];
            }
            \$formTypeOptions = array_merge(\$formTypeOptions, \$options['settings']['formTypeOptions']);
        }
        \$builder->add('properties', \$formType, \$formTypeOptions);

        \$builder->add('type', HiddenType::class);

        \$update = !empty(\$properties);
        if (!empty(\$update)) {
            \$btnValue = 'mautic.core.form.update';
            \$btnIcon  = 'fa fa-pencil';
        } else {
            \$btnValue = 'mautic.core.form.add';
            \$btnIcon  = 'fa fa-plus';
        }

        \$builder->add(
            'buttons',
            FormButtonsType::class,
            [
                'save_text'       => \$btnValue,
                'save_icon'       => \$btnIcon,
                'apply_text'      => false,
                'container_class' => 'bottom-form-buttons',
            ]
        );

        \$builder->add(
            'formId',
            HiddenType::class,
            [
                'mapped' => false,
            ]
        );

        \$builder->addEventSubscriber(new CleanFormSubscriber(\$masks));

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setRequired(['settings', 'formId']);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'formaction';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Form/Type/ActionType.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/ActionType.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Form/Type/ActionType.php");
    }
}
