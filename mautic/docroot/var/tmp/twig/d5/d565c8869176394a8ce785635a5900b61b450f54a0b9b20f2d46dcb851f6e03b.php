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

/* @bundles/ReportBundle/Form/Type/AggregatorType.php */
class __TwigTemplate_17e8e8a9a7e4bfbc0d5da89ac679bc3ebd1bd50a371913022df16103463035cf extends Template
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

namespace Mautic\\ReportBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Translation\\TranslatorInterface;

class AggregatorType extends AbstractType
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

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
            'function',
            ChoiceType::class,
            [
                'choices'           => [
                    \$this->translator->trans('mautic.report.report.label.aggregators.count') => 'COUNT',
                    \$this->translator->trans('mautic.report.report.label.aggregators.avg')   => 'AVG',
                    \$this->translator->trans('mautic.report.report.label.aggregators.sum')   => 'SUM',
                    \$this->translator->trans('mautic.report.report.label.aggregators.min')   => 'MIN',
                    \$this->translator->trans('mautic.report.report.label.aggregators.max')   => 'MAX',
                ],
                'expanded'    => false,
                'multiple'    => false,
                'label'       => 'mautic.report.function',
                'label_attr'  => ['class' => 'control-label'],
                'placeholder' => false,
                'required'    => false,
                'attr'        => [
                    'class' => 'form-control not-chosen',
                ],
            ]
        );

        // Build a list of columns
        \$builder->add(
            'column',
            ChoiceType::class,
            [
                'choices'           => array_flip(\$options['columnList']),
                'expanded'          => false,
                'multiple'          => false,
                'label'             => 'mautic.report.report.label.filtercolumn',
                'label_attr'        => ['class' => 'control-label'],
                'placeholder'       => false,
                'required'          => false,
                'attr'              => [
                    'class' => 'form-control filter-columns',
                ],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$view->vars = array_replace(\$view->vars, [
            'columnList' => \$options['columnList'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'aggregator';
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'columnList' => [],
        ]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Form/Type/AggregatorType.php";
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
        return new Source("", "@bundles/ReportBundle/Form/Type/AggregatorType.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Form/Type/AggregatorType.php");
    }
}
