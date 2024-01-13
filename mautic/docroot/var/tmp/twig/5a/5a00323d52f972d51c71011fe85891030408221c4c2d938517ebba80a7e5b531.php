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

/* @bundles/LeadBundle/Form/Type/CampaignEventLeadDeviceType.php */
class __TwigTemplate_e84b5d93c96c5e0f37b7e883d3470c7b0ce262e10ab87d451b08a783a6582fca extends Template
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

use DeviceDetector\\Parser\\Device\\AbstractDeviceParser as DeviceParser;
use DeviceDetector\\Parser\\OperatingSystem;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;

class CampaignEventLeadDeviceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add(
            'device_type',
            ChoiceType::class,
            [
                'label'             => 'mautic.lead.campaign.event.device_type',
                'label_attr'        => ['class' => 'control-label'],
                'multiple'          => true,
                'choices'           => array_combine((DeviceParser::getAvailableDeviceTypeNames()), (DeviceParser::getAvailableDeviceTypeNames())),
                'attr'              => ['class' => 'form-control'],
                'required'          => false,
            ]
        );

        \$builder->add(
            'device_brand',
            ChoiceType::class,
            [
                'label'             => 'mautic.lead.campaign.event.device_brand',
                'label_attr'        => ['class' => 'control-label'],
                'multiple'          => true,
                'choices'           => array_flip(DeviceParser::\$deviceBrands),
                'attr'              => ['class' => 'form-control'],
                'required'          => false,
            ]
        );

        \$builder->add(
            'device_os',
            ChoiceType::class,
            [
                'label'             => 'mautic.lead.campaign.event.device_os',
                'label_attr'        => ['class' => 'control-label'],
                'multiple'          => true,
                'choices'           => array_combine((array_keys(OperatingSystem::getAvailableOperatingSystemFamilies())), array_keys(OperatingSystem::getAvailableOperatingSystemFamilies())),
                'attr'              => ['class' => 'form-control'],
                'required'          => false,
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'campaignevent_lead_device';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/CampaignEventLeadDeviceType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/CampaignEventLeadDeviceType.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Type/CampaignEventLeadDeviceType.php");
    }
}
