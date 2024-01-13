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

/* @bundles/FormBundle/Form/Type/FormFieldEmailType.php */
class __TwigTemplate_f06cf325b458e872957e88052064a974356d49e3f15c7eda95d96b33580ac091 extends Template
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

namespace Mautic\\FormBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class FormFieldEmailType extends AbstractType
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * FormFieldTelType constructor.
     */
    public function __construct(TranslatorInterface \$translator)
    {
        \$this->translator = \$translator;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add(
            'donotsubmit',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.form.field.type.donotsubmit',
                'data'  => isset(\$options['data']['donotsubmit']) ? \$options['data']['donotsubmit'] : false,
            ]
        );

        \$builder->add(
            'donotsubmit_validationmsg',
            TextType::class,
            [
                'label'      => 'mautic.form.field.form.validationmsg',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'        => 'form-control',
                    'data-show-on' => '{\"formfield_validation_donotsubmit_1\": \"checked\"}',
                ],
                'data'     => isset(\$options['data']['donotsubmit_validationmsg']) ? \$options['data']['donotsubmit_validationmsg'] : \$this->translator->trans('mautic.form.submission.email.donotsubmit.invalid', [], 'validators'),
                'required' => false,
            ]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Form/Type/FormFieldEmailType.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/FormFieldEmailType.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Form/Type/FormFieldEmailType.php");
    }
}
