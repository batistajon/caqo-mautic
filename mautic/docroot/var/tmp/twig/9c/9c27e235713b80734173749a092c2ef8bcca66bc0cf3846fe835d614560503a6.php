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

/* @bundles/ApiBundle/Form/Type/ClientType.php */
class __TwigTemplate_54e5c518a4617877c377cdcec45f96e9d1749da181b800594526b4ac2d401d3f extends Template
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

namespace Mautic\\ApiBundle\\Form\\Type;

use Mautic\\ApiBundle\\Form\\Validator\\Constraints\\OAuthCallback;
use Mautic\\CoreBundle\\Form\\DataTransformer as Transformers;
use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\EventListener\\FormExitSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

class ClientType extends AbstractType
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var ValidatorInterface
     */
    private \$validator;

    /**
     * @var RouterInterface
     */
    private \$router;

    /**
     * @var RequestStack
     */
    private \$requestStack;

    /**
     * @var Session
     */
    private \$session;

    public function __construct(
        RequestStack \$requestStack,
        TranslatorInterface \$translator,
        ValidatorInterface \$validator,
        Session \$session,
        RouterInterface \$router
    ) {
        \$this->translator   = \$translator;
        \$this->validator    = \$validator;
        \$this->requestStack = \$requestStack;
        \$this->session      = \$session;
        \$this->router       = \$router;
    }

    /**
     * @return bool|mixed
     */
    private function getApiMode()
    {
        return \$this->requestStack->getCurrentRequest()->get(
            'api_mode',
            \$this->session->get('mautic.client.filter.api_mode', 'oauth2')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$apiMode = \$this->getApiMode();
        \$builder->addEventSubscriber(new CleanFormSubscriber([]));
        \$builder->addEventSubscriber(new FormExitSubscriber('api.client', \$options));

        if (!\$options['data']->getId()) {
            \$builder->add(
                'api_mode',
                ChoiceType::class,
                [
                    'mapped'     => false,
                    'label'      => 'mautic.api.client.form.auth_protocol',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'    => 'form-control',
                        'onchange' => 'Mautic.refreshApiClientForm(\\''.\$this->router->generate('mautic_client_action', ['objectAction' => 'new']).'\\', this)',
                    ],
                    'choices' => [
                        'OAuth 2'    => 'oauth2',
                    ],
                    'required'          => false,
                    'placeholder'       => false,
                    'data'              => \$apiMode,
                ]
            );
        }

        \$builder->add(
            'name',
            TextType::class,
            [
                'label'      => 'mautic.core.name',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
            ]
        );

        \$arrayStringTransformer = new Transformers\\ArrayStringTransformer();
        \$builder->add(
            \$builder->create(
                'redirectUris',
                TextType::class,
                [
                    'label'      => 'mautic.api.client.redirecturis',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'   => 'form-control',
                        'tooltip' => 'mautic.api.client.form.help.requesturis',
                    ],
                ]
            )
                ->addViewTransformer(\$arrayStringTransformer)
        );

        \$builder->add(
            'publicId',
            TextType::class,
            [
                'label'      => 'mautic.api.client.form.clientid',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'disabled'   => true,
                'required'   => false,
                'mapped'     => false,
                'data'       => \$options['data']->getPublicId(),
            ]
        );

        \$builder->add(
            'secret',
            TextType::class,
            [
                'label'      => 'mautic.api.client.form.clientsecret',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'disabled'   => true,
                'required'   => false,
            ]
        );

        \$builder->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent \$event) {
                \$form = \$event->getForm();
                \$data = \$event->getData();

                if (\$form->has('redirectUris')) {
                    foreach (\$data->getRedirectUris() as \$uri) {
                        \$urlConstraint = new OAuthCallback();
                        \$urlConstraint->message = \$this->translator->trans(
                            'mautic.api.client.redirecturl.invalid',
                            ['%url%' => \$uri],
                            'validators'
                        );

                        \$errors = \$this->validator->validate(\$uri, \$urlConstraint);

                        if (!empty(\$errors)) {
                            foreach (\$errors as \$error) {
                                \$form['redirectUris']->addError(new FormError(\$error->getMessage()));
                            }
                        }
                    }
                }
            }
        );

        \$builder->add('buttons', FormButtonsType::class);

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$dataClass = 'Mautic\\ApiBundle\\Entity\\oAuth2\\Client';
        \$resolver->setDefaults(
            [
                'data_class' => \$dataClass,
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'client';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Form/Type/ClientType.php";
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
        return new Source("", "@bundles/ApiBundle/Form/Type/ClientType.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Form/Type/ClientType.php");
    }
}
