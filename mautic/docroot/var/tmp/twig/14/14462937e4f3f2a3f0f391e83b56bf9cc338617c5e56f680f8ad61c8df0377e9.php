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

/* @bundles/UserBundle/Form/Type/PasswordResetConfirmType.php */
class __TwigTemplate_92541dce79c67475bbf97358f31466538652e528cc4c8d30013d138cfaee5af0 extends Template
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

use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;

class PasswordResetConfirmType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->addEventSubscriber(new CleanFormSubscriber([]));

        \$builder->add(
            'identifier',
            TextType::class,
            [
                'label'      => 'mautic.user.auth.form.loginusername',
                'label_attr' => ['class' => 'sr-only'],
                'attr'       => [
                    'class'       => 'form-control',
                    'preaddon'    => 'fa fa-user',
                    'placeholder' => 'mautic.user.auth.form.loginusername',
                ],
                'required'    => true,
                'constraints' => [
                    new Assert\\NotBlank(['message' => 'mautic.user.user.passwordreset.notblank']),
                ],
            ]
        );

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
                        'placeholder'  => 'mautic.user.user.passwordreset.password.placeholder',
                        'tooltip'      => 'mautic.user.user.form.help.passwordrequirements',
                        'preaddon'     => 'fa fa-lock',
                        'autocomplete' => 'off',
                    ],
                    'required'       => true,
                    'error_bubbling' => false,
                    'constraints'    => [
                        new Assert\\NotBlank(['message' => 'mautic.user.user.passwordreset.notblank']),
                        new Assert\\Length([
                            'min'        => 6,
                            'minMessage' => 'mautic.user.user.password.minlength',
                        ]),
                    ],
                ],
                'second_name'    => 'confirm',
                'second_options' => [
                    'label'      => 'mautic.user.user.form.passwordconfirm',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'        => 'form-control',
                        'placeholder'  => 'mautic.user.user.passwordreset.confirm.placeholder',
                        'tooltip'      => 'mautic.user.user.form.help.passwordrequirements',
                        'preaddon'     => 'fa fa-lock',
                        'autocomplete' => 'off',
                    ],
                    'required'       => true,
                    'error_bubbling' => false,
                    'constraints'    => [
                        new Assert\\NotBlank(['message' => 'mautic.user.user.passwordreset.notblank']),
                    ],
                ],
                'type'            => PasswordType::class,
                'invalid_message' => 'mautic.user.user.password.mismatch',
                'required'        => true,
                'error_bubbling'  => false,
            ]
        );

        \$builder->add(
            'submit',
            SubmitType::class,
            [
                'attr' => [
                    'class' => 'btn btn-lg btn-primary btn-block',
                ],
                'label' => 'mautic.user.user.passwordreset.reset',
            ]
        );

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'passwordresetconfirm';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Form/Type/PasswordResetConfirmType.php";
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
        return new Source("", "@bundles/UserBundle/Form/Type/PasswordResetConfirmType.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Form/Type/PasswordResetConfirmType.php");
    }
}
