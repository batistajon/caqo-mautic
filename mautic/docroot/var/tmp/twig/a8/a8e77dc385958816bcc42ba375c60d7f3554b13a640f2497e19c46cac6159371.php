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

/* @bundles/LeadBundle/Form/Type/PreferenceChannelsType.php */
class __TwigTemplate_e80f7a38de5a3f7d833f45189d7d742f24f706dc20bc4adc2058286ccab4143d extends Template
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

use Mautic\\LeadBundle\\Model\\LeadModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class PreferenceChannelsType extends AbstractType
{
    /**
     * @var LeadModel
     */
    private \$leadModel;

    public function __construct(LeadModel \$leadModel)
    {
        \$this->leadModel = \$leadModel;
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$model = \$this->leadModel;

        \$resolver->setDefaults(
            [
                'choices'     => function (Options \$options) use (\$model) {
                    return \$model->getPreferenceChannels();
                },
                'placeholder' => '',
                'attr'        => ['class' => 'form-control'],
                'label_attr'  => ['class' => 'control-label'],
                'multiple'    => false,
                'expanded'    => false,
                'required'    => false,
            ]
        );
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/PreferenceChannelsType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/PreferenceChannelsType.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Form/Type/PreferenceChannelsType.php");
    }
}
