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

/* @bundles/LeadBundle/Form/Type/FormSubmitActionPointsChangeType.php */
class __TwigTemplate_ca2c530fb328130dd12eca33ca84153819f2aec3430d2257a948d23e7f790952 extends Template
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

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;

class FormSubmitActionPointsChangeType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add(
            'operator',
            ChoiceType::class,
            [
                'label'             => 'mautic.lead.lead.submitaction.operator',
                'attr'              => ['class' => 'form-control'],
                'label_attr'        => ['class' => 'control-label'],
                'choices'           => [
                    'mautic.lead.lead.submitaction.operator_plus'   => 'plus',
                    'mautic.lead.lead.submitaction.operator_minus'  => 'minus',
                    'mautic.lead.lead.submitaction.operator_times'  => 'times',
                    'mautic.lead.lead.submitaction.operator_divide' => 'divide',
                ],
            ]
        );

        \$default = (empty(\$options['data']['points'])) ? 0 : (int) \$options['data']['points'];
        \$builder->add(
            'points',
            NumberType::class,
            [
                'label'      => 'mautic.lead.lead.submitaction.points',
                'attr'       => ['class' => 'form-control'],
                'label_attr' => ['class' => 'control-label'],
                'scale'      => 0,
                'data'       => \$default,
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'lead_submitaction_pointschange';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/FormSubmitActionPointsChangeType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/FormSubmitActionPointsChangeType.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Type/FormSubmitActionPointsChangeType.php");
    }
}
