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

/* @bundles/CoreBundle/Helper/CsvHelper.php */
class __TwigTemplate_5d5f2466396433e95084af983418cda6d9c9a80ef8a07f20c9dd365adde98a7d extends Template
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

/**
 * Class CsvHelper.
 */
class CsvHelper
{
    /**
     * @param string \$filename
     * @param string \$delimiter
     *
     * @return array
     */
    public static function csv_to_array(\$filename = '', \$delimiter = ',')
    {
        if (!file_exists(\$filename) || !is_readable(\$filename)) {
            return false;
        }

        \$header = null;
        \$data   = [];
        if (false !== (\$handle = fopen(\$filename, 'r'))) {
            while (false !== (\$row = fgetcsv(\$handle, 1000, \$delimiter))) {
                if (!\$header) {
                    \$header = \$row;
                } else {
                    \$data[] = array_combine(\$header, \$row);
                }
            }
            fclose(\$handle);
        }

        return \$data;
    }

    /**
     * @return array
     */
    public static function sanitizeHeaders(array \$headers)
    {
        return array_map('trim', \$headers);
    }

    /**
     * @return array
     */
    public static function convertHeadersIntoFields(array \$headers)
    {
        sort(\$headers);

        \$importedFields = [];

        foreach (\$headers as \$header) {
            \$fieldName = strtolower(InputHelper::alphanum(\$header, false, '_'));

            // Skip columns with empty names as they cannot be mapped.
            if (!empty(\$fieldName)) {
                \$importedFields[\$fieldName] = \$header;
            }
        }

        return \$importedFields;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/CsvHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/CsvHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/CsvHelper.php");
    }
}
