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

/* @bundles/ApiBundle/Form/Type/ConfigType.php */
class __TwigTemplate_66f9006765cb82311137f580518fd34472162c90b5c38ddbbe0428753ca04f8e extends Template
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

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * Class ConfigType.
 */
class ConfigType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add(
            'api_enabled',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.api.config.form.api.enabled',
                'data'  => isset(\$options['data']['api_enabled']) ? (bool) \$options['data']['api_enabled'] : false,
                'attr'  => [
                    'tooltip' => 'mautic.api.config.form.api.enabled.tooltip',
                ],
            ]
        );

        \$builder->add(
            'api_enable_basic_auth',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.api.config.form.api.basic_auth_enabled',
                'data'  => isset(\$options['data']['api_enable_basic_auth']) ? (bool) \$options['data']['api_enable_basic_auth'] : false,
                'attr'  => [
                    'tooltip' => 'mautic.api.config.form.api.basic_auth.tooltip',
                ],
            ]
        );

        \$builder->add(
            'api_oauth2_access_token_lifetime',
            NumberType::class,
            [
                'label' => 'mautic.api.config.form.api.oauth2_access_token_lifetime',
                'attr'  => [
                    'tooltip'      => 'mautic.api.config.form.api.oauth2_access_token_lifetime.tooltip',
                    'class'        => 'form-control',
                    'data-show-on' => '{\"config_apiconfig_api_enabled_1\":\"checked\"}',
                ],
                'constraints' => [
                    new NotBlank(
                        [
                            'message' => 'mautic.core.value.required',
                        ]
                    ),
                ],
            ]
        );

        \$builder->add(
            'api_oauth2_refresh_token_lifetime',
            NumberType::class,
            [
                'label' => 'mautic.api.config.form.api.oauth2_refresh_token_lifetime',
                'attr'  => [
                    'tooltip'      => 'mautic.api.config.form.api.oauth2_refresh_token_lifetime.tooltip',
                    'class'        => 'form-control',
                    'data-show-on' => '{\"config_apiconfig_api_enabled_1\":\"checked\"}',
                ],
                'constraints' => [
                    new NotBlank(
                        [
                            'message' => 'mautic.core.value.required',
                        ]
                    ),
                ],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'apiconfig';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Form/Type/ConfigType.php";
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
        return new Source("", "@bundles/ApiBundle/Form/Type/ConfigType.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Form/Type/ConfigType.php");
    }
}
