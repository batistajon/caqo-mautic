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

/* @bundles/ReportBundle/Form/Type/ReportSettingsType.php */
class __TwigTemplate_217cb11022f49e89ad108be26a360dadd8dd7b34f8a4f056dc874151b0eb1d7a extends Template
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

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;

class ReportSettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->add(
            'showGraphsAboveTable',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.report.report.form.display.graphs.above.table',
                'attr'  => [
                    'class' => 'filter-value',
                ],
                'data' => !empty(\$options['data']['showGraphsAboveTable']) ? \$options['data']['showGraphsAboveTable'] : false,
            ]
        );

        \$builder->add(
            'showDynamicFilters',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.report.report.form.display.show.dynamic.filters',
                'attr'  => [
                    'class' => 'filter-value',
                ],
                'data' => !empty(\$options['data']['showDynamicFilters']) ? \$options['data']['showDynamicFilters'] : false,
            ]
        );

        \$builder->add(
            'hideDateRangeFilter',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.report.report.form.display.hide.date.ranges',
                'attr'  => [
                    'class' => 'filter-value',
                ],
                'data' => !empty(\$options['data']['hideDateRangeFilter']) ? \$options['data']['hideDateRangeFilter'] : false,
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'report_settings';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Form/Type/ReportSettingsType.php";
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
        return new Source("", "@bundles/ReportBundle/Form/Type/ReportSettingsType.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Form/Type/ReportSettingsType.php");
    }
}
