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

/* @bundles/PluginBundle/Helper/Cleaner.php */
class __TwigTemplate_c534be7003dbea913a4d1d7ac89b85f933e1d495b825dad51f772e1b050d3b67 extends Template
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

namespace Mautic\\PluginBundle\\Helper;

class Cleaner
{
    const FIELD_TYPE_STRING   = 'string';
    const FIELD_TYPE_BOOL     = 'boolean';
    const FIELD_TYPE_NUMBER   = 'number';
    const FIELD_TYPE_DATETIME = 'datetime';
    const FIELD_TYPE_DATE     = 'date';

    /**
     * @param \$value
     * @param \$fieldType
     *
     * @return bool|float|string
     */
    public static function clean(\$value, \$fieldType = self::FIELD_TYPE_STRING)
    {
        \$clean = strip_tags(html_entity_decode(\$value, ENT_QUOTES));
        switch (\$fieldType) {
            case self::FIELD_TYPE_BOOL:
                return (bool) \$clean;
            case self::FIELD_TYPE_NUMBER:
                return (float) \$clean;
            case self::FIELD_TYPE_DATETIME:
                \$dateTimeValue = new \\DateTime(\$value);

                return (!empty(\$clean)) ? \$dateTimeValue->format('c') : '';
            case self::FIELD_TYPE_DATE:
                \$dateTimeValue = new \\DateTime(\$value);

                return (!empty(\$clean)) ? \$dateTimeValue->format('Y-m-d') : '';
            default:
                return \$clean;
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Helper/Cleaner.php";
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
        return new Source("", "@bundles/PluginBundle/Helper/Cleaner.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Helper/Cleaner.php");
    }
}
