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

/* @bundles/FormBundle/Form/Type/FormFieldConditionType.php */
class __TwigTemplate_7218a1dd83fc4fe4ed8f5aa167619ac0834a89618dfbf605e9ac0df23e29252e extends Template
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

namespace Mautic\\FormBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\FormBundle\\Helper\\PropertiesAccessor;
use Mautic\\FormBundle\\Model\\FieldModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class FormFieldConditionType extends AbstractType
{
    /**
     * @var FieldModel
     */
    private \$fieldModel;

    /**
     * @var PropertiesAccessor
     */
    private \$propertiesAccessor;

    public function __construct(FieldModel \$fieldModel, PropertiesAccessor \$propertiesAccessor)
    {
        \$this->fieldModel          = \$fieldModel;
        \$this->propertiesAccessor  = \$propertiesAccessor;
    }

    /**
     * @param FormBuilderInterface<string|FormBuilderInterface> \$builder
     * @param mixed[]                                           \$options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->addEventSubscriber(new CleanFormSubscriber(['values' => 'clean']));

        \$choices = [];
        if (!empty(\$options['parent'])) {
            \$fields = \$this->fieldModel->getSessionFields(\$options['formId']);
            if (isset(\$fields[\$options['parent']])) {
                \$choices = \$this->propertiesAccessor->getChoices(
                    \$this->propertiesAccessor->getProperties(\$fields[\$options['parent']])
                );
            }
        }

        \$builder->add(
            'values',
            ChoiceType::class,
            [
                'choices'  => \$choices,
                'multiple' => true,
                'label'    => false,
                'attr'     => [
                    'class'        => 'form-control',
                    'data-show-on' => '{\"formfield_conditions_any_0\": \"checked\",\"formfield_conditions_expr\": \"notIn\"}',
                ],
                'required' => false,
            ]
        );

        \$builder->add(
            'any',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.form.field.form.condition.any_value',
                'attr'  => [
                    'data-show-on' => '{\"formfield_conditions_expr\": \"in\"}',
                ],
                'data' => \$options['data']['any'] ?? false,
            ]
        );

        \$builder->add(
            'expr',
            ChoiceType::class,
            [
                'choices'  => [
                    'mautic.core.operator.in'    => 'in',
                    'mautic.core.operator.notin' => 'notIn',
                ],
                'label'       => false,
                'placeholder' => false,
                'attr'        => [
                    'class' => 'form-control',
                ],
                'required' => false,
            ]
        );
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'formId' => null,
                'parent' => null,
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
        return "@bundles/FormBundle/Form/Type/FormFieldConditionType.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/FormFieldConditionType.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Form/Type/FormFieldConditionType.php");
    }
}
