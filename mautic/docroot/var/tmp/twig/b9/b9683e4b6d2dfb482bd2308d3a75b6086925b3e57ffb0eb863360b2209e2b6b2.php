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

/* @bundles/UserBundle/Form/Type/UserType.php */
class __TwigTemplate_55623f1a25b83c5c5081d2ba683ded5079977bb433ac5c6c7c707b7f3387c858 extends Template
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

namespace Mautic\\UserBundle\\Form\\Type;

use Doctrine\\ORM\\EntityRepository;
use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\EventListener\\FormExitSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\CoreBundle\\Helper\\LanguageHelper;
use Mautic\\UserBundle\\Entity\\Role;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Model\\UserModel;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Translation\\TranslatorInterface;

class UserType extends AbstractType
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var UserModel
     */
    private \$model;

    /**
     * @var LanguageHelper
     */
    private \$languageHelper;

    public function __construct(
        TranslatorInterface \$translator,
        UserModel \$model,
        LanguageHelper \$languageHelper
    ) {
        \$this->translator       = \$translator;
        \$this->model            = \$model;
        \$this->languageHelper   = \$languageHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->addEventSubscriber(new CleanFormSubscriber(['signature' => 'html', 'email' => 'email']));
        \$builder->addEventSubscriber(new FormExitSubscriber('user.user', \$options));

        \$builder->add(
            'username',
            TextType::class,
            [
                'label'      => 'mautic.core.username',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'        => 'form-control',
                    'preaddon'     => 'fa fa-user',
                    'autocomplete' => 'off',
                ],
            ]
        );

        \$builder->add(
            'firstName',
            TextType::class,
            [
                'label'      => 'mautic.core.firstname',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
            ]
        );

        \$builder->add(
            'lastName',
            TextType::class,
            [
                'label'      => 'mautic.core.lastname',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
            ]
        );

        \$positions = \$this->model->getLookupResults('position', null, 0, true);
        \$builder->add(
            'position',
            TextType::class,
            [
                'label'      => 'mautic.core.position',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'        => 'form-control',
                    'data-options' => json_encode(\$positions),
                ],
                'required' => false,
            ]
        );

        \$builder->add(
            'email',
            EmailType::class,
            [
                'label'      => 'mautic.core.type.email',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                    'preaddon' => 'fa fa-envelope',
                ],
            ]
        );

        \$existing    = (!empty(\$options['data']) && \$options['data']->getId());
        \$placeholder = (\$existing) ?
            \$this->translator->trans('mautic.user.user.form.passwordplaceholder') : '';
        \$required = (\$existing) ? false : true;
        \$builder->add(
            'plainPassword',
            RepeatedType::class,
            [
                'first_name'    => 'password',
                'first_options' => [
                    'label'      => 'mautic.core.password',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'        => 'form-control',
                        'placeholder'  => \$placeholder,
                        'tooltip'      => 'mautic.user.user.form.help.passwordrequirements',
                        'preaddon'     => 'fa fa-lock',
                        'autocomplete' => 'off',
                    ],
                    'required'       => \$required,
                    'error_bubbling' => false,
                ],
                'second_name'    => 'confirm',
                'second_options' => [
                    'label'      => 'mautic.user.user.form.passwordconfirm',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'        => 'form-control',
                        'placeholder'  => \$placeholder,
                        'tooltip'      => 'mautic.user.user.form.help.passwordrequirements',
                        'preaddon'     => 'fa fa-lock',
                        'autocomplete' => 'off',
                    ],
                    'required'       => \$required,
                    'error_bubbling' => false,
                ],
                'type'            => PasswordType::class,
                'invalid_message' => 'mautic.user.user.password.mismatch',
                'required'        => \$required,
                'error_bubbling'  => false,
            ]
        );

        \$builder->add(
            'timezone',
            TimezoneType::class,
            [
                'label'      => 'mautic.core.timezone',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class' => 'form-control',
                ],
                'multiple'    => false,
                'placeholder' => 'mautic.user.user.form.defaulttimezone',
            ]
        );

        \$builder->add(
            'locale',
            ChoiceType::class,
            [
                'choices'           => \$this->getSupportedLanguageChoices(),
                'label'             => 'mautic.core.language',
                'label_attr'        => ['class' => 'control-label'],
                'attr'              => [
                    'class' => 'form-control',
                ],
                'multiple'    => false,
                'placeholder' => 'mautic.user.user.form.defaultlocale',
            ]
        );

        \$defaultSignature = '';
        if (isset(\$options['data']) && null === \$options['data']->getSignature()) {
            \$defaultSignature = \$this->translator->trans('mautic.email.default.signature', ['%from_name%' => '|FROM_NAME|']);
        } elseif (isset(\$options['data'])) {
            \$defaultSignature = \$options['data']->getSignature();
        }

        \$builder->add(
            'signature',
            TextareaType::class,
            [
                'label'      => 'mautic.email.token.signature',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class' => 'form-control',
                ],
                'data' => \$defaultSignature,
            ]
        );

        if (empty(\$options['in_profile'])) {
            \$builder->add(
                \$builder->create(
                    'role',
                    EntityType::class,
                    [
                        'label'      => 'mautic.user.role',
                        'label_attr' => ['class' => 'control-label'],
                        'attr'       => [
                            'class' => 'form-control',
                        ],
                        'class'         => Role::class,
                        'choice_label'  => 'name',
                        'query_builder' => function (EntityRepository \$er) {
                            return \$er->createQueryBuilder('r')
                                ->where('r.isPublished = true')
                                ->orderBy('r.name', 'ASC');
                        },
                    ]
                )
            );

            \$builder->add('isPublished', YesNoButtonGroupType::class);

            \$builder->add('buttons', FormButtonsType::class);
        } else {
            \$builder->add(
                'buttons',
                FormButtonsType::class,
                [
                    'save_text'  => 'mautic.core.form.apply',
                    'apply_text' => false,
                ]
            );
        }

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(
            [
                'data_class'        => User::class,
                'validation_groups' => [
                    User::class,
                    'determineValidationGroups',
                ],
                'ignore_formexit' => false,
                'in_profile'      => false,
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'user';
    }

    /**
     * @return array
     */
    private function getSupportedLanguageChoices()
    {
        // Get the list of available languages
        \$languages = \$this->languageHelper->fetchLanguages(false, false);
        \$choices   = [];

        foreach (\$languages as \$code => \$langData) {
            \$choices[\$langData['name']] = \$code;
        }
        \$choices = array_merge(\$choices, array_flip(\$this->languageHelper->getSupportedLanguages()));

        // Alpha sort the languages by name
        ksort(\$choices);

        return \$choices;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Form/Type/UserType.php";
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
        return new Source("", "@bundles/UserBundle/Form/Type/UserType.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Form/Type/UserType.php");
    }
}
