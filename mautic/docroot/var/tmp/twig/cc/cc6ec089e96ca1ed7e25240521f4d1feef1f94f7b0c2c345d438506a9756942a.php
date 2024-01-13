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

/* @bundles/CoreBundle/Form/Type/DynamicListType.php */
class __TwigTemplate_5037978ae597380c29c556a8a947d4336e88a96f8f100892fde95ad65df81a6e extends Template
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

namespace Mautic\\CoreBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\Count;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

class DynamicListType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            function (FormEvent \$event) {
                \$data = \$event->getData();

                // Reorder list in case keys were dynamically removed.
                if (is_array(\$data)) {
                    \$data = array_values(\$data);
                    \$event->setData(\$data);
                }
            }
        );
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$view->vars['isSortable'] = (!empty(\$options['sortable']));
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(
            [
                'remove_onclick'  => 'Mautic.removeFormListOption(this);',
                'option_required' => true,
                'option_notblank' => true,
                'remove_icon'     => 'fa fa-times',
                'sortable'        => 'fa fa-ellipsis-v handle',
                'label'           => false,
                'entry_options'   => [
                    'label'    => false,
                    'required' => false,
                    'attr'     => [
                        'class'         => 'form-control',
                        'preaddon'      => function (Options \$options) {
                            return \$options['remove_icon'];
                        },
                        'preaddon_attr' => function (Options \$options) {
                            return [
                                'onclick' => \$options['remove_onclick'],
                            ];
                        },
                        'postaddon'     => function (Options \$options) {
                            return \$options['sortable'];
                        },
                    ],

                    'constraints'    => function (Options \$options) {
                        return (\$options['option_notblank']) ? [
                            new NotBlank(
                                ['message' => 'mautic.form.lists.notblank']
                            ),
                        ] : [];
                    },
                    'error_bubbling' => true,
                ],
                'allow_add'       => true,
                'allow_delete'    => true,
                'prototype'       => true,
                'constraints'     => function (Options \$options) {
                    return (\$options['option_required']) ? [
                        new Count(
                            [
                                'minMessage' => 'mautic.form.lists.count',
                                'min'        => 1,
                            ]
                        ),
                    ] : [];
                },
                'error_bubbling'  => false,
            ]
        );

        \$resolver->setDefined(
            [
                'sortable',
                'remove_onclick',
                'option_required',
                'option_notblank',
                'remove_icon',
            ]
        );
    }

    public function getBlockPrefix()
    {
        return 'dynamiclist';
    }

    public function getParent()
    {
        return CollectionType::class;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/Type/DynamicListType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/DynamicListType.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/Type/DynamicListType.php");
    }
}
