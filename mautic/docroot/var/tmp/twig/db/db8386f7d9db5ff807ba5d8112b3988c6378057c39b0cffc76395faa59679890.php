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

/* @bundles/SmsBundle/Form/Type/ConfigType.php */
class __TwigTemplate_72df9cef99bb66b2648ef4ced46b49ef99629333e6a811d336694487f78586d6 extends Template
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

namespace Mautic\\SmsBundle\\Form\\Type;

use Mautic\\SmsBundle\\Sms\\TransportChain;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

/**
 * Class ConfigType.
 */
class ConfigType extends AbstractType
{
    /**
     * @var TransportChain
     */
    private \$transportChain;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * ConfigType constructor.
     */
    public function __construct(TransportChain \$transportChain, TranslatorInterface \$translator)
    {
        \$this->transportChain = \$transportChain;
        \$this->translator     = \$translator;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$choices    = [];
        \$transports = \$this->transportChain->getEnabledTransports();
        foreach (\$transports as \$transportServiceId=>\$transport) {
            \$choices[\$this->translator->trans(\$transportServiceId)] = \$transportServiceId;
        }

        \$builder->add('sms_transport', ChoiceType::class, [
            'label'      => 'mautic.sms.config.select_default_transport',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.sms.config.select_default_transport',
            ],
            'choices'           => \$choices,
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'smsconfig';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Form/Type/ConfigType.php";
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
        return new Source("", "@bundles/SmsBundle/Form/Type/ConfigType.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Form/Type/ConfigType.php");
    }
}
