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

/* @bundles/FormBundle/Tests/Form/Type/FormFieldConditionTypeTest.php */
class __TwigTemplate_8d4849184cce74e8c39b3d893dfeb95e8dc9fb7caff8709dfd41d4d32b6ec1d4 extends Template
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

namespace Mautic\\FormBundle\\Tests\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\FormBundle\\Form\\Type\\FormFieldConditionType;
use Mautic\\FormBundle\\Helper\\PropertiesAccessor;
use Mautic\\FormBundle\\Model\\FieldModel;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;

final class FormFieldConditionTypeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|FieldModel
     */
    private \$fieldModel;

    /**
     * @var MockObject|PropertiesAccessor
     */
    private \$propertiesAccessor;

    /**
     * @var MockObject&FormBuilderInterface<string|FormBuilderInterface>
     */
    private \$formBuilder;

    /**
     * @var FormFieldConditionType
     */
    private \$form;

    protected function setUp(): void
    {
        \$this->fieldModel         = \$this->createMock(FieldModel::class);
        \$this->propertiesAccessor = \$this->createMock(PropertiesAccessor::class);
        \$this->formBuilder        = \$this->createMock(FormBuilderInterface::class);
        \$this->form               = new FormFieldConditionType(
            \$this->fieldModel,
            \$this->propertiesAccessor
        );
    }

    public function testBuildFormIfParentIsEmpty(): void
    {
        \$options = [];

        \$this->fieldModel->expects(\$this->never())
            ->method('getSessionFields');

        \$this->propertiesAccessor->expects(\$this->never())
            ->method('getChoices');

        \$this->formBuilder->expects(\$this->exactly(3))
            ->method('add')
            ->withConsecutive(
                [
                    'values',
                    ChoiceType::class,
                    [
                        'choices'  => [],
                        'multiple' => true,
                        'label'    => false,
                        'attr'     => [
                            'class'        => 'form-control',
                            'data-show-on' => '{\"formfield_conditions_any_0\": \"checked\",\"formfield_conditions_expr\": \"notIn\"}',
                        ],
                        'required' => false,
                    ],
                    ],
                    [
                        'any',
                        YesNoButtonGroupType::class,
                        [
                            'label' => 'mautic.form.field.form.condition.any_value',
                            'attr'  => [
                                'data-show-on' => '{\"formfield_conditions_expr\": \"in\"}',
                            ],
                            'data' => isset(\$options['data']['any']) ? \$options['data']['any'] : false,
                        ],
                    ],
                    [
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
                        ],
                    ]
                );

        \$this->form->buildForm(\$this->formBuilder, \$options);
    }

    public function testBuildFormIfParentExists(): void
    {
        \$options = [
            'parent' => 'parent_field_id',
            'formId' => 'form_id',
        ];

        \$this->fieldModel->expects(\$this->once())
            ->method('getSessionFields')
            ->with('form_id')
            ->willReturn(['parent_field_id' => ['some_field_props_here']]);

        \$this->propertiesAccessor->expects(\$this->once())
            ->method('getProperties')
            ->with(['some_field_props_here'])
            ->willReturn(['some_choice_here' => 'Some choice here']);

        \$this->propertiesAccessor->expects(\$this->once())
            ->method('getChoices')
            ->with(['some_choice_here' => 'Some choice here'])
            ->willReturn(['some_choice_here' => 'Some choice here']);

        \$this->formBuilder->method('add')
            ->withConsecutive(
                [
                    'values',
                    ChoiceType::class,
                    [
                        'choices'  => ['some_choice_here' => 'Some choice here'],
                        'multiple' => true,
                        'label'    => false,
                        'attr'     => [
                            'class'        => 'form-control',
                            'data-show-on' => '{\"formfield_conditions_any_0\": \"checked\",\"formfield_conditions_expr\": \"notIn\"}',
                        ],
                        'required' => false,
                    ],
                ]
            );

        \$this->form->buildForm(\$this->formBuilder, \$options);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Tests/Form/Type/FormFieldConditionTypeTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Form/Type/FormFieldConditionTypeTest.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Tests/Form/Type/FormFieldConditionTypeTest.php");
    }
}
