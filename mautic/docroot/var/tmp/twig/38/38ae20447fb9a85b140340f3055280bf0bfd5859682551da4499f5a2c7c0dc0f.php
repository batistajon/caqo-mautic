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

/* @bundles/InstallBundle/Configurator/Form/UserStepType.php */
class __TwigTemplate_799f72ac7d053138399189a49ab9121bad8bf5d90e40f56a919493010a241026 extends Template
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

namespace Mautic\\InstallBundle\\Configurator\\Form;

use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\Validator\\Constraints as Assert;

class UserStepType extends AbstractType
{
    /**
     * @var Session
     */
    private \$session;

    public function __construct(Session \$session)
    {
        \$this->session = \$session;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$storedData = \$this->session->get('mautic.installer.user', new \\stdClass());

        \$builder->add(
            'firstname',
            TextType::class,
            [
                'label'       => 'mautic.core.firstname',
                'label_attr'  => ['class' => 'control-label'],
                'attr'        => ['class' => 'form-control'],
                'required'    => true,
                'data'        => (!empty(\$storedData->firstname)) ? \$storedData->firstname : '',
                'constraints' => [
                    new Assert\\NotBlank(
                        [
                            'message' => 'mautic.core.value.required',
                        ]
                    ),
                ],
            ]
        );

        \$builder->add(
            'lastname',
            TextType::class,
            [
                'label'       => 'mautic.core.lastname',
                'label_attr'  => ['class' => 'control-label'],
                'attr'        => ['class' => 'form-control'],
                'required'    => true,
                'data'        => (!empty(\$storedData->lastname)) ? \$storedData->lastname : '',
                'constraints' => [
                    new Assert\\NotBlank(
                        [
                            'message' => 'mautic.core.value.required',
                        ]
                    ),
                ],
            ]
        );

        \$builder->add(
            'email',
            EmailType::class,
            [
                'label'      => 'mautic.install.form.user.email',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                    'preaddon' => 'fa fa-envelope',
                ],
                'required'    => true,
                'data'        => (!empty(\$storedData->email)) ? \$storedData->email : '',
                'constraints' => [
                    new Assert\\NotBlank(
                        [
                            'message' => 'mautic.core.value.required',
                        ]
                    ),
                    new Assert\\Email(
                        [
                            'message' => 'mautic.core.email.required',
                        ]
                    ),
                ],
            ]
        );

        \$builder->add(
            'username',
            TextType::class,
            [
                'label'      => 'mautic.install.form.user.username',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class' => 'form-control',
                ],
                'required'    => true,
                'data'        => (!empty(\$storedData->username)) ? \$storedData->username : '',
                'constraints' => [
                    new Assert\\NotBlank(
                        [
                            'message' => 'mautic.core.value.required',
                        ]
                    ),
                ],
            ]
        );

        \$builder->add(
            'password',
            PasswordType::class,
            [
                'label'      => 'mautic.install.form.user.password',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                    'tooltip'  => 'mautic.user.user.form.help.passwordrequirements',
                    'preaddon' => 'fa fa-lock',
                ],
                'required'    => true,
                'constraints' => [
                    new Assert\\NotBlank(
                        [
                            'message' => 'mautic.core.value.required',
                        ]
                    ),
                    new Assert\\Length(
                        [
                            'min'        => 6,
                            'minMessage' => 'mautic.install.password.minlength',
                        ]
                    ),
                ],
            ]
        );

        \$builder->add(
            'buttons',
            FormButtonsType::class,
            [
                'pre_extra_buttons' => [
                    [
                        'name'  => 'next',
                        'label' => 'mautic.install.next.step',
                        'type'  => 'submit',
                        'attr'  => [
                            'class'   => 'btn btn-success pull-right btn-next',
                            'icon'    => 'fa fa-arrow-circle-right',
                            'onclick' => 'MauticInstaller.showWaitMessage(event);',
                        ],
                    ],
                ],
                'apply_text'  => '',
                'save_text'   => '',
                'cancel_text' => '',
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
        return 'install_user_step';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Configurator/Form/UserStepType.php";
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
        return new Source("", "@bundles/InstallBundle/Configurator/Form/UserStepType.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Configurator/Form/UserStepType.php");
    }
}
