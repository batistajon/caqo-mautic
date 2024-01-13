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

/* @bundles/PageBundle/Form/Type/VariantType.php */
class __TwigTemplate_0b0a9f3e2b8796b4859cda8aadbb5efcbe6f4f8a4970ee7a54e2e3c1f9ce9e24 extends Template
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

namespace Mautic\\PageBundle\\Form\\Type;

use Mautic\\PageBundle\\Model\\PageModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * Class VariantType.
 */
class VariantType extends AbstractType
{
    /**
     * @var PageModel
     */
    private \$pageModel;

    public function __construct(PageModel \$pageModel)
    {
        \$this->pageModel = \$pageModel;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add(
            'weight',
            IntegerType::class, [
                'label'      => 'mautic.core.ab_test.form.traffic_weight',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.core.ab_test.form.traffic_weight.help',
                ],
                'constraints' => [
                    new NotBlank(
                        ['message' => 'mautic.page.variant.weight.notblank']
                    ),
                ],
            ]
        );

        \$abTestWinnerCriteria = \$this->pageModel->getBuilderComponents(null, 'abTestWinnerCriteria');

        if (!empty(\$abTestWinnerCriteria)) {
            \$criteria = \$abTestWinnerCriteria['criteria'];
            \$choices  = \$abTestWinnerCriteria['choices'];

            \$builder->add(
                'winnerCriteria',
                ChoiceType::class, [
                    'label'      => 'mautic.core.ab_test.form.winner',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'    => 'form-control',
                        'onchange' => 'Mautic.getAbTestWinnerForm(\\'page\\', \\'page\\', this);',
                    ],
                    'expanded'    => false,
                    'multiple'    => false,
                    'choices'     => \$choices,
                    'placeholder' => 'mautic.core.form.chooseone',
                    'constraints' => [
                        new NotBlank(
                            ['message' => 'mautic.core.ab_test.winner_criteria.not_blank']
                        ),
                    ],
                    ]
            );

            \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) use (\$criteria) {
                \$form = \$event->getForm();
                \$data = \$event->getData();
                if (isset(\$data['winnerCriteria'])) {
                    if (!empty(\$criteria[\$data['winnerCriteria']]['formType'])) {
                        \$formTypeOptions = [
                            'required' => false,
                            'label'    => false,
                        ];
                        if (!empty(\$criteria[\$data]['formTypeOptions'])) {
                            \$formTypeOptions = array_merge(\$formTypeOptions, \$criteria[\$data]['formTypeOptions']);
                        }
                        \$form->add('properties', \$criteria[\$data]['formType'], \$formTypeOptions);
                    }
                }
            });
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pagevariant';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Form/Type/VariantType.php";
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
        return new Source("", "@bundles/PageBundle/Form/Type/VariantType.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Form/Type/VariantType.php");
    }
}
