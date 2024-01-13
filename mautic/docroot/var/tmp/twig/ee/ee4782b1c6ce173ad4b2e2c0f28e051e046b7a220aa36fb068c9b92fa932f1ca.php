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

/* @bundles/FormBundle/Form/Type/SubmitActionEmailType.php */
class __TwigTemplate_46b1a396e98b6b8959a960859d08cd760875931d9780a64252015b8985795003 extends Template
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

use Mautic\\CoreBundle\\Form\\ToBcBccFieldsTrait;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\EmailBundle\\Form\\Type\\EmailListType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Translation\\TranslatorInterface;

/**
 * Class SubmitActionEmailType.
 */
class SubmitActionEmailType extends AbstractType
{
    use FormFieldTrait;
    use ToBcBccFieldsTrait;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var CoreParametersHelper
     */
    protected \$coreParametersHelper;

    /**
     * SubmitActionEmailType constructor.
     */
    public function __construct(TranslatorInterface \$translator, CoreParametersHelper \$coreParametersHelper)
    {
        \$this->translator           = \$translator;
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$data = (isset(\$options['data']['subject']))
            ? \$options['data']['subject']
            : \$this->translator->trans(
                'mautic.form.action.sendemail.subject.default'
            );
        \$builder->add(
            'subject',
            TextType::class,
            [
                'label'      => 'mautic.form.action.sendemail.subject',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'required'   => false,
                'data'       => \$data,
            ]
        );

        if (!isset(\$options['data']['message'])) {
            \$fields  = \$this->getFormFields(\$options['attr']['data-formid']);
            \$message = '';

            foreach (\$fields as \$token => \$label) {
                \$message .= \"<strong>\$label</strong>: \$token<br />\";
            }
        } else {
            \$message = \$options['data']['message'];
        }

        \$builder->add(
            'message',
            TextareaType::class,
            [
                'label'      => 'mautic.form.action.sendemail.message',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control editor editor-basic'],
                'required'   => false,
                'data'       => \$message,
            ]
        );

        if ('file' == \$this->coreParametersHelper->get('mailer_spool_type')) {
            \$default = isset(\$options['data']['immediately']) ? \$options['data']['immediately'] : false;
            \$builder->add(
                'immediately',
                YesNoButtonGroupType::class,
                [
                    'label' => 'mautic.form.action.sendemail.immediately',
                    'data'  => \$default,
                    'attr'  => [
                        'tooltip' => 'mautic.form.action.sendemail.immediately.desc',
                    ],
                ]
            );
        } else {
            \$builder->add(
                'immediately',
                HiddenType::class,
                [
                    'data' => false,
                ]
            );
        }

        \$default = isset(\$options['data']['copy_lead']) ? \$options['data']['copy_lead'] : false;
        \$builder->add(
            'copy_lead',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.form.action.sendemail.copytolead',
                'data'  => \$default,
            ]
        );

        \$default = isset(\$options['data']['set_replyto']) ? \$options['data']['set_replyto'] : true;
        \$builder->add(
            'set_replyto',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.form.action.sendemail.setreplyto',
                'data'  => \$default,
                'attr'  => [
                    'tooltip' => 'mautic.form.action.sendemail.setreplyto_tooltip',
                ],
            ]
        );

        \$default = isset(\$options['data']['email_to_owner']) ? \$options['data']['email_to_owner'] : false;
        \$builder->add(
            'email_to_owner',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.form.action.sendemail.emailtoowner',
                'data'  => \$default,
            ]
        );

        \$builder->add(
            'templates',
            EmailListType::class,
            [
                'label'      => 'mautic.lead.email.template',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'    => 'form-control',
                    'onchange' => 'Mautic.getLeadEmailContent(this)',
                ],
                'multiple'   => false,
            ]
        );

        \$this->addToBcBccFields(\$builder);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'form_submitaction_sendemail';
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$view->vars['formFields'] = \$this->getFormFields(\$options['attr']['data-formid']);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Form/Type/SubmitActionEmailType.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/SubmitActionEmailType.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Form/Type/SubmitActionEmailType.php");
    }
}
