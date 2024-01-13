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

/* @bundles/DynamicContentBundle/Form/Type/DynamicContentSendType.php */
class __TwigTemplate_49f88add0ce2ce19d65ab9248abb870c190cbd50263e4a93ed3cb897d37f2941 extends Template
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

namespace Mautic\\DynamicContentBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * Class DynamicContentSendType.
 */
class DynamicContentSendType extends AbstractType
{
    /**
     * @var RouterInterface
     */
    protected \$router;

    /**
     * DynamicContentSendType constructor.
     */
    public function __construct(RouterInterface \$router)
    {
        \$this->router = \$router;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add(
            'dynamicContent',
            DynamicContentListType::class,
            [
                'label'      => 'mautic.dynamicContent.send.selectDynamicContents',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                    'tooltip'  => 'mautic.dynamicContent.choose.dynamicContents',
                    'onchange' => 'Mautic.disabledDynamicContentAction()',
                ],
                'where'       => 'e.isCampaignBased = 1', // do not show dwc with filters
                'multiple'    => false,
                'required'    => true,
                'constraints' => [
                    new NotBlank(['message' => 'mautic.core.value.required']),
                ],
            ]
        );

        if (!empty(\$options['update_select'])) {
            \$windowUrl = \$this->router->generate(
                'mautic_dynamicContent_action',
                [
                    'objectAction' => 'new',
                    'contentOnly'  => 1,
                    'updateSelect' => \$options['update_select'],
                ]
            );

            \$builder->add(
                'newDynamicContentButton',
                ButtonType::class,
                [
                    'label' => 'mautic.dynamicContent.send.new.dynamicContent',
                    'attr'  => [
                        'class'   => 'btn btn-primary btn-nospin',
                        'onclick' => 'Mautic.loadNewWindow({
                            \"windowUrl\": \"'.\$windowUrl.'\"
                        })',
                        'icon' => 'fa fa-plus',
                    ],
                ]
            );

            \$dynamicContent = is_array(\$options['data']) && array_key_exists('dynamicContent', \$options['data']) ? \$options['data']['dynamicContent']
                : null;

            // create button edit notification
            \$windowUrlEdit = \$this->router->generate(
                'mautic_dynamicContent_action',
                [
                    'objectAction' => 'edit',
                    'objectId'     => 'dynamicContentId',
                    'contentOnly'  => 1,
                    'updateSelect' => \$options['update_select'],
                ]
            );

            \$builder->add(
                'editDynamicContentButton',
                ButtonType::class,
                [
                    'label' => 'mautic.dynamicContent.send.edit.dynamicContent',
                    'attr'  => [
                        'class'    => 'btn btn-primary btn-nospin',
                        'onclick'  => 'Mautic.loadNewWindow(Mautic.standardDynamicContentUrl({\"windowUrl\": \"'.\$windowUrlEdit.'\"}))',
                        'disabled' => !isset(\$dynamicContent),
                        'icon'     => 'fa fa-edit',
                    ],
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
        return 'dwcsend_list';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/Form/Type/DynamicContentSendType.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Form/Type/DynamicContentSendType.php", "/var/www/html/mautic/docroot/app/bundles/DynamicContentBundle/Form/Type/DynamicContentSendType.php");
    }
}
