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

/* @bundles/LeadBundle/Form/Type/CampaignEventLeadCampaignsType.php */
class __TwigTemplate_c47e57f3f67d19a0483b87c56f5ad0eb74c4945aa729457ce524de32c1e1eb89 extends Template
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

use Mautic\\CampaignBundle\\Form\\Type\\CampaignListType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\LeadBundle\\Model\\ListModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;

class CampaignEventLeadCampaignsType extends AbstractType
{
    /**
     * @var ListModel
     */
    protected \$listModel;

    public function __construct(ListModel \$listModel)
    {
        \$this->listModel = \$listModel;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add('campaigns',
            CampaignListType::class, [
            'label'      => 'mautic.lead.lead.events.campaigns.membership',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => [
                'class' => 'form-control',
            ],
            'required' => true,
        ]);

        \$builder->add(
            'dataAddedLimit',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.lead.lead.events.campaigns.date.added.filter',
                'data'  => (isset(\$options['data']['dataAddedLimit'])) ? \$options['data']['dataAddedLimit'] : false,
            ]
        );

        \$builder->add(
            'expr',
            ChoiceType::class,
            [
                'label'             => 'mautic.lead.lead.events.campaigns.expression',
                'multiple'          => false,
                'choices'           => \$this->listModel->getOperatorsForFieldType([
                    'include' => [
                        'gt',
                        'lt',
                    ],
                ]),
                'required'   => false,
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'        => 'form-control',
                    'data-show-on' => '{\"campaignevent_properties_dataAddedLimit_1\":\"checked\"}',
                ],
            ]
        );

        \$builder->add(
            'dateAdded',
            TextType::class,
            [
                'label'      => 'mautic.lead.lead.events.campaigns.date',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'        => 'form-control',
                    'data-toggle'  => 'datetime',
                    'data-show-on' => '{\"campaignevent_properties_dataAddedLimit_1\":\"checked\"}',
                ],
                'required' => false,
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'campaignevent_lead_campaigns';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/CampaignEventLeadCampaignsType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/CampaignEventLeadCampaignsType.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Type/CampaignEventLeadCampaignsType.php");
    }
}
