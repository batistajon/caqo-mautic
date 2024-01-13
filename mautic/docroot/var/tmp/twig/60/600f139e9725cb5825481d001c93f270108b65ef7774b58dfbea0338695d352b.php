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

/* @bundles/DynamicContentBundle/Form/Type/DynamicContentListType.php */
class __TwigTemplate_5a485cb37adc4dc85d87f7e28a8232497dce984e12e57d1b4feebb6b85b0829c extends Template
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

use Mautic\\CoreBundle\\Form\\Type\\EntityLookupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * Class DynamicContentListType.
 */
class DynamicContentListType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(
            [
                'modal_route'         => 'mautic_dynamicContent_action',
                'modal_header'        => 'mautic.dynamicContent.header.new',
                'model'               => 'dynamicContent',
                'model_lookup_method' => 'getLookupResults',
                'lookup_arguments'    => function (Options \$options) {
                    return [
                        'type'    => 'dynamicContent',
                        'filter'  => '\$data',
                        'limit'   => 0,
                        'start'   => 0,
                        'options' => [
                            'top_level'  => \$options['top_level'],
                            'ignore_ids' => \$options['ignore_ids'],
                            'where'      => \$options['where'],
                        ],
                    ];
                },
                'ajax_lookup_action' => function (Options \$options) {
                    \$query = [
                        'top_level'  => \$options['top_level'],
                        'ignore_ids' => \$options['ignore_ids'],
                        'where'      => \$options['where'],
                    ];

                    return 'dynamicContent:getLookupChoiceList&'.http_build_query(\$query);
                },
                'multiple'   => false,
                'required'   => false,
                'top_level'  => 'translation',
                'ignore_ids' => [],
                'where'      => '',
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'dwc_list';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return EntityLookupType::class;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/Form/Type/DynamicContentListType.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Form/Type/DynamicContentListType.php", "/var/www/html/mautic/docroot/app/bundles/DynamicContentBundle/Form/Type/DynamicContentListType.php");
    }
}
