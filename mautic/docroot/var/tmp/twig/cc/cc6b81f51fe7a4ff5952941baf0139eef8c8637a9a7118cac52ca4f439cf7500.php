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

/* @bundles/LeadBundle/Helper/CustomFieldHelper.php */
class __TwigTemplate_c29b80a905dd10d4d24588115db0b662250e1af74abd5ea4d96a9495b0f72ee9 extends Template
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

namespace Mautic\\LeadBundle\\Helper;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;

/**
 * Helper class custom field operations.
 */
class CustomFieldHelper
{
    const TYPE_BOOLEAN = 'boolean';
    const TYPE_NUMBER  = 'number';
    const TYPE_SELECT  = 'select';

    /**
     * Fixes value type for specific field types.
     *
     * @param string \$type
     * @param mixed  \$value
     *
     * @return mixed
     */
    public static function fixValueType(\$type, \$value)
    {
        if (null === \$value) {
            // do not transform null values
            return null;
        }

        switch (\$type) {
            case self::TYPE_NUMBER:
                \$value = (float) \$value;
                break;
            case self::TYPE_BOOLEAN:
                \$value = (bool) \$value;
                break;
            case self::TYPE_SELECT:
                \$value = (string) \$value;
                break;
        }

        return \$value;
    }

    /**
     * @param mixed \$value This value can be at least array, string, null and maybe others
     *
     * @return mixed|string|null
     */
    public static function fieldValueTransfomer(array \$field, \$value)
    {
        if (null === \$value) {
            // do not transform null values
            return null;
        }

        \$type = \$field['type'];
        switch (\$type) {
            case 'datetime':
            case 'date':
            case 'time':
                // Not sure if this happens anywhere but just in case do not transform empty strings
                if ('' === \$value) {
                    return null;
                }

                \$dtHelper = new DateTimeHelper(\$value, null, 'local');
                switch (\$type) {
                    case 'datetime':
                        \$value = \$dtHelper->toLocalString('Y-m-d H:i:s');
                        break;
                    case 'date':
                        \$value = \$dtHelper->toLocalString('Y-m-d');
                        break;
                    case 'time':
                        \$value = \$dtHelper->toLocalString('H:i:s');
                        break;
                }
                break;
        }

        return \$value;
    }

    /**
     * Transform all fields values.
     */
    public static function fieldsValuesTransformer(array \$fields, array \$values)
    {
        foreach (\$values as \$alias => &\$value) {
            if (!empty(\$fields[\$alias])) {
                \$value = self::fieldValueTransfomer(\$fields[\$alias], \$value);
            }
        }

        return \$values;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Helper/CustomFieldHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/CustomFieldHelper.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Helper/CustomFieldHelper.php");
    }
}
