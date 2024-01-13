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

/* @bundles/FormBundle/Form/Type/FormFieldPageBreakType.php */
class __TwigTemplate_58ec31f466c08ebc5de630d54f51527ddb7538f8ac1c644910adb780502656db extends Template
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

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * Class FormFieldPageBreakType.
 */
class FormFieldPageBreakType extends AbstractType
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * FormFieldPageBreakType constructor.
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
            'next_page_label',
            TextType::class,
            [
                'label'      => 'mautic.form.field.form.property_pagebreak_nextpage_label',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class' => 'form-control',
                ],
                'required'    => true,
                'constraints' => [
                    new NotBlank(
                        ['message' => 'mautic.core.value.required']
                    ),
                ],
                'empty_data' => \$this->translator->trans('mautic.core.continue'),
            ]
        );

        \$builder->add(
            'prev_page_label',
            TextType::class,
            [
                'label'      => 'mautic.form.field.form.property_pagebreak_prevpage_label',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'       => 'form-control',
                    'placeholder' => 'mautic.form.field.form.property_pagebreak_prevpage_placeholder',
                ],
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
        return "@bundles/FormBundle/Form/Type/FormFieldPageBreakType.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/FormFieldPageBreakType.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Form/Type/FormFieldPageBreakType.php");
    }
}
