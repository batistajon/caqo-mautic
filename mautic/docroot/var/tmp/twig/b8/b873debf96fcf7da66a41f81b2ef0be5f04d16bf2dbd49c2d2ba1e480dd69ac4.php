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

/* @bundles/EmailBundle/Form/Type/EmailOpenType.php */
class __TwigTemplate_b5ab2f33f384efea2dfa89f0594d49dcc30c99c51cb6a654eb0a36b67de84fc4 extends Template
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

namespace Mautic\\EmailBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class EmailOpenType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$defaultOptions = [
            'label'      => 'mautic.email.open.limittoemails',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.email.open.limittoemails_descr',
            ],
            'required'   => false,
            'email_type' => null,
        ];

        if (isset(\$options['list_options'])) {
            if (isset(\$options['list_options']['attr'])) {
                \$defaultOptions['attr'] = array_merge(\$defaultOptions['attr'], \$options['list_options']['attr']);
                unset(\$options['list_options']['attr']);
            }

            \$defaultOptions = array_merge(\$defaultOptions, \$options['list_options']);
        }

        \$builder->add('emails', EmailListType::class, \$defaultOptions);
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefined(['list_options']);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'emailopen_list';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Form/Type/EmailOpenType.php";
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
        return new Source("", "@bundles/EmailBundle/Form/Type/EmailOpenType.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Form/Type/EmailOpenType.php");
    }
}
