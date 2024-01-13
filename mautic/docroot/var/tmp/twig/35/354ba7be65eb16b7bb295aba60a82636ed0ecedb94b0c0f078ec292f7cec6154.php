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

/* @bundles/CampaignBundle/Form/Type/CampaignEventJumpToEventType.php */
class __TwigTemplate_c0a7a641330e7fab56c7fcaa5d50d3cf6f2f5606f51b381214f9c3e208f3bdb2 extends Template
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

namespace Mautic\\CampaignBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * Class CampaignEventJumpToEventType.
 */
class CampaignEventJumpToEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$jumpProps = \$builder->getData();
        \$selected  = isset(\$jumpProps['jumpToEvent']) ? \$jumpProps['jumpToEvent'] : null;

        \$builder->add(
            'jumpToEvent',
            ChoiceType::class,
            [
                'choices'    => [],
                'multiple'   => false,
                'label'      => 'mautic.campaign.form.jump_to_event',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'                => 'form-control',
                    'data-onload-callback' => 'updateJumpToEventOptions',
                    'data-selected'        => \$selected,
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

        // Allows additional values (new events) to be selected before persisting
        \$builder->get('jumpToEvent')->resetViewTransformers();
    }

    public function getBlockPrefix()
    {
        return 'campaignevent_jump_to_event';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Form/Type/CampaignEventJumpToEventType.php";
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
        return new Source("", "@bundles/CampaignBundle/Form/Type/CampaignEventJumpToEventType.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Form/Type/CampaignEventJumpToEventType.php");
    }
}
