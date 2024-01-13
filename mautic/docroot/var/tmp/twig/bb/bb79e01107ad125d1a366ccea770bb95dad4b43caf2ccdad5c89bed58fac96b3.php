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

/* @bundles/LeadBundle/Form/Type/ContactFrequencyType.php */
class __TwigTemplate_4e09983c0d2b05fe26de8e9afb245d27f42860f91a5ecaec94f806c8d5f3d3e5 extends Template
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

namespace Mautic\\LeadBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class ContactFrequencyType extends AbstractType
{
    /**
     * @var CoreParametersHelper
     */
    protected \$coreParametersHelper;

    public function __construct(CoreParametersHelper \$coreParametersHelper)
    {
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$showContactCategories = \$this->coreParametersHelper->get('show_contact_categories');
        \$showContactSegments   = \$this->coreParametersHelper->get('show_contact_segments');

        if (!empty(\$options['channels'])) {
            \$builder->add(
                'lead_channels',
                ContactChannelsType::class,
                [
                    'label'       => false,
                    'channels'    => \$options['channels'],
                    'data'        => \$options['data']['lead_channels'],
                    'public_view' => \$options['public_view'],
                ]
            );
        }

        if (!\$options['public_view']) {
            \$builder->add(
                'lead_lists',
                LeadListType::class,
                [
                    'label'      => 'mautic.lead.form.list',
                    'label_attr' => ['class' => 'control-label'],
                    'multiple'   => true,
                    'expanded'   => \$options['public_view'],
                    'required'   => false,
                ]
            );
        } elseif (\$showContactSegments) {
            \$builder->add(
                'lead_lists',
                LeadListType::class,
                [
                    'preference_center_only' => \$options['preference_center_only'],
                    'label'                  => 'mautic.lead.form.list',
                    'label_attr'             => ['class' => 'control-label'],
                    'multiple'               => true,
                    'expanded'               => true,
                    'required'               => false,
                ]
            );
        }

        if (!\$options['public_view'] || \$showContactCategories) {
            \$builder->add(
                'global_categories',
                LeadCategoryType::class,
                [
                    'label'      => 'mautic.lead.form.categories',
                    'label_attr' => ['class' => 'control-label'],
                    'multiple'   => true,
                    'expanded'   => \$options['public_view'],
                    'required'   => false,
                ]
            );
        }

        \$builder->add(
            'buttons',
            FormButtonsType::class,
            [
                'apply_text'     => false,
                'save_text'      => 'mautic.core.form.save',
                'cancel_onclick' => 'javascript:void(0);',
                'cancel_attr'    => [
                    'data-dismiss' => 'modal',
                ],
            ]
        );

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setRequired(['channels']);
        \$resolver->setDefaults(
            [
                'public_view'               => false,
                'preference_center_only'    => false,
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'lead_contact_frequency_rules';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/ContactFrequencyType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/ContactFrequencyType.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Type/ContactFrequencyType.php");
    }
}
