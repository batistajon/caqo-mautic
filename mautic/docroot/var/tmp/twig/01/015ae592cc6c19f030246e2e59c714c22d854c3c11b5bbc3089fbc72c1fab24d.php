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

/* @bundles/CoreBundle/Form/Type/DynamicContentFilterEntryFiltersType.php */
class __TwigTemplate_22eb59a1981bee7a2ce3b66986c7edd9713ecd6d39e9f312d2ddabb47ddf3815 extends Template
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

namespace Mautic\\CoreBundle\\Form\\Type;

use Mautic\\LeadBundle\\Form\\Type\\FilterTrait;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Translation\\TranslatorInterface;

/**
 * Class DynamicContentFilterEntryFiltersType.
 */
class DynamicContentFilterEntryFiltersType extends AbstractType
{
    use FilterTrait;

    private \$translator;

    /**
     * DynamicContentFilterEntryFiltersType constructor.
     */
    public function __construct(TranslatorInterface \$translator)
    {
        \$this->translator = \$translator;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add(
            'glue',
            ChoiceType::class,
            [
                'label'             => false,
                'choices'           => [
                    'mautic.lead.list.form.glue.and' => 'and',
                    'mautic.lead.list.form.glue.or'  => 'or',
                ],
                'attr'              => [
                    'class'    => 'form-control not-chosen glue-select',
                    'onchange' => 'Mautic.updateFilterPositioning(this)',
                ],
            ]
        );

        \$formModifier = function (FormEvent \$event, \$eventName) {
            \$this->buildFiltersForm(\$eventName, \$event, \$this->translator);
        };

        \$builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent \$event) use (\$formModifier) {
                \$formModifier(\$event, FormEvents::PRE_SET_DATA);
            }
        );

        \$builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            function (FormEvent \$event) use (\$formModifier) {
                \$formModifier(\$event, FormEvents::PRE_SUBMIT);
            }
        );

        \$builder->add('field', HiddenType::class);
        \$builder->add('object', HiddenType::class);
        \$builder->add('type', HiddenType::class);
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setRequired(
            [
                'countries',
                'regions',
                'timezones',
                'stages',
                'locales',
                'fields',
            ]
        );

        \$resolver->setDefaults(
            [
                'label'          => false,
                'error_bubbling' => false,
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'dynamic_content_filter_entry_filters';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/Type/DynamicContentFilterEntryFiltersType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/DynamicContentFilterEntryFiltersType.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/Type/DynamicContentFilterEntryFiltersType.php");
    }
}
