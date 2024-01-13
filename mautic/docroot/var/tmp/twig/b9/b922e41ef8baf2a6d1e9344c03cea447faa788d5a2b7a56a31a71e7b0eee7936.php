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

/* @bundles/ConfigBundle/Form/Type/ConfigType.php */
class __TwigTemplate_5765641b60a5a3e8cd32ad3f1e55ba81e4c5b2294d4e9f8f2708e56bd3514190 extends Template
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

namespace Mautic\\ConfigBundle\\Form\\Type;

use Mautic\\ConfigBundle\\Form\\Helper\\RestrictionHelper;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class ConfigType extends AbstractType
{
    /**
     * @var RestrictionHelper
     */
    private \$restrictionHelper;

    /**
     * @var EscapeTransformer
     */
    private \$escapeTransformer;

    public function __construct(RestrictionHelper \$restrictionHelper, EscapeTransformer \$escapeTransformer)
    {
        \$this->restrictionHelper = \$restrictionHelper;
        \$this->escapeTransformer = \$escapeTransformer;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        // TODO very dirty quick fix for https://github.com/mautic/mautic/issues/8854
        if (isset(\$options['data']['apiconfig']['parameters']['api_oauth2_access_token_lifetime'])
            && 3600 === \$options['data']['apiconfig']['parameters']['api_oauth2_access_token_lifetime']
        ) {
            \$options['data']['apiconfig']['parameters']['api_oauth2_access_token_lifetime'] = 60;
        }

        if (isset(\$options['data']['apiconfig']['parameters']['api_oauth2_refresh_token_lifetime'])
            && 1209600 === \$options['data']['apiconfig']['parameters']['api_oauth2_refresh_token_lifetime']
        ) {
            \$options['data']['apiconfig']['parameters']['api_oauth2_refresh_token_lifetime'] = 14;
        }

        foreach (\$options['data'] as \$config) {
            if (isset(\$config['formAlias']) && !empty(\$config['parameters'])) {
                \$checkThese = array_intersect(array_keys(\$config['parameters']), \$options['fileFields']);
                foreach (\$checkThese as \$checkMe) {
                    // Unset base64 encoded values
                    unset(\$config['parameters'][\$checkMe]);
                }
                \$builder->add(
                    \$config['formAlias'],
                    \$config['formType'],
                    [
                        'data' => \$config['parameters'],
                    ]
                );

                \$this->addTransformers(\$builder->get(\$config['formAlias']));
            }
        }

        \$builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent \$event) {
                \$form = \$event->getForm();

                foreach (\$form as \$configForm) {
                    foreach (\$configForm as \$child) {
                        \$this->restrictionHelper->applyRestrictions(\$child, \$configForm);
                    }
                }
            }
        );

        \$builder->add(
            'buttons',
            FormButtonsType::class,
            [
                'apply_onclick' => 'Mautic.activateBackdrop()',
                'save_onclick'  => 'Mautic.activateBackdrop()',
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
        return 'config';
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults(
            [
                'fileFields' => [],
            ]
        );
    }

    private function addTransformers(FormBuilderInterface \$builder): void
    {
        if (0 === \$builder->count()) {
            \$builder->addModelTransformer(\$this->escapeTransformer);

            return;
        }

        foreach (\$builder as \$childBuilder) {
            \$this->addTransformers(\$childBuilder);
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
        return "@bundles/ConfigBundle/Form/Type/ConfigType.php";
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
        return new Source("", "@bundles/ConfigBundle/Form/Type/ConfigType.php", "/var/www/html/mautic/docroot/app/bundles/ConfigBundle/Form/Type/ConfigType.php");
    }
}
