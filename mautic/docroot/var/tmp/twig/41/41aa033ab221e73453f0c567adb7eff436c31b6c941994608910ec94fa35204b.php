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

/* @bundles/FormBundle/Form/Type/SubmitActionRepostType.php */
class __TwigTemplate_d983b1873f54a588902b9c8417fbc5d2a70b5226cae6197157a9f8374acc7355 extends Template
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

namespace Mautic\\FormBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints\\Email;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Constraints\\Url;

/**
 * Class SubmitActionEmailType.
 */
class SubmitActionRepostType extends AbstractType
{
    use FormFieldTrait;

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add(
            'post_url',
            UrlType::class,
            [
                'label'      => 'mautic.form.action.repost.post_url',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                    'preaddon' => 'fa fa-globe',
                ],
                'constraints' => [
                    new NotBlank(
                        [
                            'message' => 'mautic.core.value.required',
                        ]
                    ),
                    new Url(
                        [
                            'message' => 'mautic.core.valid_url_required',
                        ]
                    ),
                ],
            ]
        );

        \$builder->add(
            'authorization_header',
            TextType::class,
            [
                'label'      => 'mautic.form.action.repost.authorization_header',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                    'tooltip'  => 'mautic.form.action.repost.authorization_header.tooltip',
                    'preaddon' => 'fa fa-lock',
                ],
                'required' => false,
            ]
        );

        \$builder->add(
            'failure_email',
            EmailType::class,
            [
                'label'      => 'mautic.form.action.repost.failure_email',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                    'tooltip'  => 'mautic.form.action.repost.failure_email.tooltip',
                    'preaddon' => 'fa fa-envelope',
                ],
                'required'    => false,
                'constraints' => new Email(
                    [
                        'message' => 'mautic.core.email.required',
                    ]
                ),
            ]
        );

        \$fields = \$this->getFormFields(\$options['attr']['data-formid'], false);

        foreach (\$fields as \$alias => \$label) {
            \$builder->add(
                \$alias,
                TextType::class,
                [
                    'label'      => \$label.\" (\$alias)\",
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class' => 'form-control',
                    ],
                    'required' => false,
                ]
            );
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Form/Type/SubmitActionRepostType.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/SubmitActionRepostType.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Form/Type/SubmitActionRepostType.php");
    }
}
