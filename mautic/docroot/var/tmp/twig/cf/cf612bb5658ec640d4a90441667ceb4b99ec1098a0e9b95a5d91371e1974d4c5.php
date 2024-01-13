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

/* @bundles/LeadBundle/Form/Type/CompanyType.php */
class __TwigTemplate_b474f9cfe079a5f8a2d189a901c1de28cf263e80e7ff03d5fb28a98da839ca9a extends Template
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

namespace Mautic\\LeadBundle\\Form\\Type;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Form\\DataTransformer\\IdToEntityModelTransformer;
use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Form\\Type\\UserListType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class CompanyType extends AbstractType
{
    use EntityFieldsBuildFormTrait;

    /**
     * @var EntityManager
     */
    private \$em;

    /**
     * @var RouterInterface
     */
    protected \$router;

    /**
     * @var TranslatorInterface
     */
    protected \$translator;

    public function __construct(EntityManager \$entityManager, RouterInterface \$router, TranslatorInterface \$translator)
    {
        \$this->em         = \$entityManager;
        \$this->router     = \$router;
        \$this->translator = \$translator;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$cleaningRules                 = \$this->getFormFields(\$builder, \$options, 'company');
        \$cleaningRules['companyemail'] = 'email';

        \$transformer = new IdToEntityModelTransformer(\$this->em, User::class);

        \$builder->add(
            \$builder->create(
                'owner',
                UserListType::class,
                [
                    'label'      => 'mautic.lead.company.field.owner',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class' => 'form-control',
                    ],
                    'required' => false,
                    'multiple' => false,
                ]
            )
                ->addModelTransformer(\$transformer)
        );

        \$builder->add(
            'score',
            NumberType::class,
            [
                'label'      => 'mautic.company.score',
                'attr'       => ['class' => 'form-control'],
                'label_attr' => ['class' => 'control-label'],
                'scale'      => 0,
                'required'   => false,
            ]
        );

        if (!empty(\$options['update_select'])) {
            \$builder->add(
                'buttons',
                FormButtonsType::class,
                [
                    'apply_text' => false,
                ]
            );

            \$builder->add(
                'updateSelect',
                HiddenType::class,
                [
                    'data'   => \$options['update_select'],
                    'mapped' => false,
                ]
            );
        } else {
            \$builder->add(
                'buttons',
                FormButtonsType::class
            );
        }
        \$builder->add(
            'buttons',
            FormButtonsType::class,
            [
                'post_extra_buttons' => [
                    [
                        'name'  => 'merge',
                        'label' => 'mautic.lead.merge',
                        'attr'  => [
                            'class'       => 'btn btn-default btn-dnd',
                            'icon'        => 'fa fa-building',
                            'data-toggle' => 'ajaxmodal',
                            'data-target' => '#MauticSharedModal',
                            'data-header' => \$this->translator->trans('mautic.lead.company.header.merge'),
                            'href'        => \$this->router->generate(
                                'mautic_company_action',
                                [
                                    'objectId'     => \$options['data']->getId(),
                                    'objectAction' => 'merge',
                                ]
                            ),
                        ],
                    ],
                ],
            ]
        );

        \$builder->addEventSubscriber(new CleanFormSubscriber(\$cleaningRules));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(
            [
                'data_class'    => Company::class,
                'isShortForm'   => false,
                'update_select' => false,
            ]
        );

        \$resolver->setRequired(['fields']);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'company';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/CompanyType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/CompanyType.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Type/CompanyType.php");
    }
}
