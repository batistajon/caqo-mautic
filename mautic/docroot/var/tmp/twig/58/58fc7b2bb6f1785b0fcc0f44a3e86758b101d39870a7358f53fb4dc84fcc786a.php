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

/* @bundles/CoreBundle/Helper/DataExporterHelper.php */
class __TwigTemplate_3308b83c7390eb39a66f9d65559b42c330e2f3e52925f3548a400e9ef531e942 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Mautic\\CoreBundle\\Model\\AbstractCommonModel;

class DataExporterHelper
{
    /**
     * Standard function to generate an array of data via any model's \"getEntities\" method.
     *
     * Overwrite in your controller if required.
     *
     * @param int|null \$start
     *
     * @return array
     */
    public function getDataForExport(\$start, AbstractCommonModel \$model, array \$args, callable \$resultsCallback = null)
    {
        \$args['limit'] = \$args['limit'] < 200 ? 200 : \$args['limit'];
        \$args['start'] = \$start;

        \$results = \$model->getEntities(\$args);
        \$items   = \$results['results'];
        if (0 === count(\$items)) {
            return null;
        }
        unset(\$results);

        \$toExport = [];

        unset(\$args['withTotalCount']);

        if (is_callable(\$resultsCallback)) {
            foreach (\$items as \$item) {
                \$row = array_map(function (\$itemEncode) {
                    return html_entity_decode(\$itemEncode, ENT_QUOTES);
                }, \$resultsCallback(\$item));

                \$toExport[] = \$this->secureAgainstCsvInjection(\$row);
            }
        } else {
            foreach (\$items as \$item) {
                \$toExport[] = \$this->secureAgainstCsvInjection((array) \$item);
            }
        }

        \$model->getRepository()->clear();

        return \$toExport;
    }

    /**
     * @return array
     */
    private function secureAgainstCsvInjection(array \$row)
    {
        foreach (\$row as \$colNum => \$colVal) {
            if (\$colVal && in_array(substr(\$colVal, 0, 1), ['+', '-', '=', '@'])) {
                \$row[\$colNum] = ' '.\$colVal;
            }
        }

        return \$row;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/DataExporterHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/DataExporterHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/DataExporterHelper.php");
    }
}
