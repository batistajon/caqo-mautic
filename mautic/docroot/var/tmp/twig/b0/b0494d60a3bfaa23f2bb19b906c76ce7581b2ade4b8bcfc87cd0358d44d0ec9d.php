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

/* @bundles/CoreBundle/Form/Type/EntityLookupType.php */
class __TwigTemplate_138bf574e15d2319ae9a090556ae7fa58bde02effd8413e2d3ea17b222123525 extends Template
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

use Doctrine\\DBAL\\Connection;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Form\\ChoiceLoader\\EntityLookupChoiceLoader;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Routing\\Router;
use Symfony\\Component\\Translation\\TranslatorInterface;

/**
 * Class EntityLookupType.
 */
class EntityLookupType extends AbstractType
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var Router
     */
    private \$router;

    /**
     * @var ModelFactory
     */
    private \$modelFactory;

    /**
     * @var Connection
     */
    private \$connection;

    /**
     * @var EntityLookupChoiceLoader[]
     */
    private \$choiceLoaders;

    /**
     * EntityLookupType constructor.
     */
    public function __construct(ModelFactory \$modelFactory, TranslatorInterface \$translator, Connection \$connection, Router \$router)
    {
        \$this->translator   = \$translator;
        \$this->router       = \$router;
        \$this->connection   = \$connection;
        \$this->modelFactory = \$modelFactory;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        // Let the form builder notify us about initial/submitted choices
        \$formModifier = function (FormEvent \$event) {
            \$options = \$event->getForm()->getConfig()->getOptions();
            \$this->choiceLoaders[\$options['model']]->setOptions(\$options);
            \$this->choiceLoaders[\$options['model']]->onFormPostSetData(\$event);
        };

        \$builder->addEventListener(
            FormEvents::POST_SET_DATA,
            \$formModifier
        );

        \$builder->addEventListener(
            FormEvents::POST_SUBMIT,
            \$formModifier
        );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setRequired(['model', 'ajax_lookup_action']);
        \$resolver->setDefined(['model_lookup_method', 'repo_lookup_method', 'lookup_arguments']);
        \$resolver->setDefaults(
            [
                'modal_route'            => false,
                'modal_route_parameters' => ['objectAction' => 'new'],
                'modal_header'           => '',
                'force_popup'            => false,
                'entity_label_column'    => 'name',
                'entity_id_column'       => 'id',
                'choice_loader'          => function (Options \$options) {
                    // This class is defined as a service therefore the choice loader has to be unique per field that inherits this class as a parent
                    \$this->choiceLoaders[\$options['model']] = new EntityLookupChoiceLoader(
                            \$this->modelFactory,
                            \$this->translator,
                            \$this->connection,
                            \$options
                        );

                    return \$this->choiceLoaders[\$options['model']];
                },
                'choice_translation_domain' => false,
                'expanded'                  => false,
                'multiple'                  => false,
                'required'                  => false,
                'placeholder'               => '',
            ]
        );
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return ChoiceType::class;
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$attr =
            [
                'class'              => \"form-control {\$options['model']}-select\",
                'data-chosen-lookup' => \$options['ajax_lookup_action'],
                'data-model'         => \$options['model'],
            ];

        if (!empty(\$options['modal_route'])) {
            \$attr = array_merge(
                \$attr,
                [
                    'data-new-route'          => \$this->router->generate(\$options['modal_route'], \$options['modal_route_parameters']),
                    'data-header'             => \$options['modal_header'] ? \$this->translator->trans(\$options['modal_header']) : 'false',
                    'data-chosen-placeholder' => \$this->translator->trans('mautic.core.lookup.search_options', [], 'javascript'),
                ]
            );
        }

        if (\$options['force_popup']) {
            \$attr['data-popup'] = 'true';
        }

        \$view->vars['attr'] = array_merge(\$view->vars['attr'], \$attr);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/Type/EntityLookupType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/EntityLookupType.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/Type/EntityLookupType.php");
    }
}
