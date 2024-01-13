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

/* @bundles/SmsBundle/Form/Type/SmsSendType.php */
class __TwigTemplate_c4fe030b77c64a969f8ed44267677b27ba359043b6de0b644a1935526b1a3d19 extends Template
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

namespace Mautic\\SmsBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * Class SmsSendType.
 */
class SmsSendType extends AbstractType
{
    /**
     * @var RouterInterface
     */
    protected \$router;

    public function __construct(RouterInterface \$router)
    {
        \$this->router = \$router;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add(
            'sms',
            SmsListType::class,
            [
                'label'      => 'mautic.sms.send.selectsmss',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                    'tooltip'  => 'mautic.sms.choose.smss',
                    'onchange' => 'Mautic.disabledSmsAction()',
                ],
                'multiple'    => false,
                'required'    => true,
                'constraints' => [
                    new NotBlank(
                        ['message' => 'mautic.sms.choosesms.notblank']
                    ),
                ],
            ]
        );

        if (!empty(\$options['update_select'])) {
            \$windowUrl = \$this->router->generate(
                'mautic_sms_action',
                [
                    'objectAction' => 'new',
                    'contentOnly'  => 1,
                    'updateSelect' => \$options['update_select'],
                ]
            );

            \$builder->add(
                'newSmsButton',
                ButtonType::class,
                [
                    'attr' => [
                        'class'   => 'btn btn-primary btn-nospin',
                        'onclick' => 'Mautic.loadNewWindow({
                        \"windowUrl\": \"'.\$windowUrl.'\"
                    })',
                        'icon' => 'fa fa-plus',
                    ],
                    'label' => 'mautic.sms.send.new.sms',
                ]
            );

            \$sms = \$options['data']['sms'];

            // create button edit sms
            \$windowUrlEdit = \$this->router->generate(
                'mautic_sms_action',
                [
                    'objectAction' => 'edit',
                    'objectId'     => 'smsId',
                    'contentOnly'  => 1,
                    'updateSelect' => \$options['update_select'],
                ]
            );

            \$builder->add(
                'editSmsButton',
                ButtonType::class,
                [
                    'attr' => [
                        'class'    => 'btn btn-primary btn-nospin',
                        'onclick'  => 'Mautic.loadNewWindow(Mautic.standardSmsUrl({\"windowUrl\": \"'.\$windowUrlEdit.'\"}))',
                        'disabled' => !isset(\$sms),
                        'icon'     => 'fa fa-edit',
                    ],
                    'label' => 'mautic.sms.send.edit.sms',
                ]
            );
        }
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefined(['update_select']);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'smssend_list';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Form/Type/SmsSendType.php";
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
        return new Source("", "@bundles/SmsBundle/Form/Type/SmsSendType.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Form/Type/SmsSendType.php");
    }
}
