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

/* @bundles/CategoryBundle/Form/Type/CategoryType.php */
class __TwigTemplate_d50a33d60db951268bde583098faf8a6266e434a33b7cdaca28a745a22b87016 extends Template
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

namespace Mautic\\CategoryBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\EventListener\\FormExitSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class CategoryType extends AbstractType
{
    /**
     * @var Session
     */
    private \$session;

    public function __construct(Session \$session)
    {
        \$this->session = \$session;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->addEventSubscriber(new CleanFormSubscriber([]));
        \$builder->addEventSubscriber(new FormExitSubscriber('category.category', \$options));

        if (!\$options['data']->getId()) {
            // Do not allow custom bundle
            if (true == \$options['show_bundle_select']) {
                // Create new category from category bundle - let user select the bundle
                \$selected = \$this->session->get('mautic.category.type', 'category');
                \$builder->add(
                    'bundle',
                    CategoryBundlesType::class,
                    [
                        'label'      => 'mautic.core.type',
                        'label_attr' => ['class' => 'control-label'],
                        'attr'       => ['class' => 'form-control'],
                        'required'   => true,
                        'data'       => \$selected,
                    ]
                );
            } else {
                // Create new category directly from another bundle - preset bundle
                \$builder->add(
                    'bundle',
                    HiddenType::class,
                    [
                        'data' => \$options['bundle'],
                    ]
                );
            }
        }

        \$builder->add(
            'title',
            TextType::class,
            [
                'label'      => 'mautic.core.title',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
            ]
        );

        \$builder->add(
            'description',
            TextType::class,
            [
                'label'      => 'mautic.core.description',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'required'   => false,
            ]
        );

        \$builder->add(
            'alias',
            TextType::class,
            [
                'label'      => 'mautic.core.alias',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.category.form.alias.help',
                ],
                'required' => false,
            ]
        );

        \$builder->add(
            'color',
            TextType::class,
            [
                'label'      => 'mautic.core.color',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'       => 'form-control',
                    'data-toggle' => 'color',
                ],
                'required' => false,
            ]
        );

        \$builder->add('isPublished', YesNoButtonGroupType::class);

        \$builder->add(
            'inForm',
            HiddenType::class,
            [
                'mapped' => false,
            ]
        );

        \$builder->add('buttons', FormButtonsType::class);

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(
            [
                'data_class'         => 'Mautic\\CategoryBundle\\Entity\\Category',
                'show_bundle_select' => false,
                'bundle'             => function (Options \$options) {
                    if (!\$bundle = \$options['data']->getBundle()) {
                        \$bundle = 'category';
                    }

                    return \$bundle;
                },
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'category_form';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Form/Type/CategoryType.php";
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
        return new Source("", "@bundles/CategoryBundle/Form/Type/CategoryType.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/Form/Type/CategoryType.php");
    }
}
