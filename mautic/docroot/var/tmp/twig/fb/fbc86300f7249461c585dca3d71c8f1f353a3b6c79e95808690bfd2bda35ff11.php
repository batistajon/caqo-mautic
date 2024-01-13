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

/* @bundles/LeadBundle/Helper/CustomFieldValueHelper.php */
class __TwigTemplate_17fb6c4b19b52e1f627a36cfe1295011bbdd33de5907d3e1465fa984f8b53d2c extends Template
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

use Mautic\\CoreBundle\\Helper\\ArrayHelper;
use Mautic\\CoreBundle\\Helper\\Serializer;

/**
 * Helper class custom field operations.
 */
class CustomFieldValueHelper
{
    const TYPE_BOOLEAN     = 'boolean';

    const TYPE_SELECT      = 'select';

    const TYPE_MULTISELECT = 'multiselect';

    /**
     * @return array
     */
    public static function normalizeValues(array \$customFields)
    {
        if (isset(\$customFields['core'])) {
            foreach (\$customFields as \$group => \$fields) {
                foreach (\$fields as \$alias => \$field) {
                    if (is_array(\$field)) {
                        \$customFields[\$group][\$alias]['normalizedValue'] = self::normalizeValue(\$field);
                    }
                }
            }
        } else {
            foreach (\$customFields as \$alias => &\$field) {
                if (is_array(\$field)) {
                    \$customFields[\$alias]['normalizedValue'] = self::normalizeValue(\$field);
                }
            }
        }

        return \$customFields;
    }

    /**
     * @return mixed
     */
    private static function normalizeValue(array \$field)
    {
        \$value      = ArrayHelper::getValue('value', \$field, '');
        \$type       = ArrayHelper::getValue('type', \$field);
        \$properties = ArrayHelper::getValue('properties', \$field);
        if ('' !== \$value && \$type && \$properties) {
            if (!is_array(\$properties)) {
                \$properties = Serializer::decode(\$properties);
            }
            switch (\$type) {
                case self::TYPE_BOOLEAN:
                    foreach (\$properties as \$key => \$property) {
                        if ('yes' === \$key && !isset(\$properties[1])) {
                            \$properties[1] = \$property;
                        } elseif ('no' === \$key && !isset(\$properties[0])) {
                            \$properties[0] = \$property;
                        }
                    }
                    if (isset(\$properties[\$value])) {
                        \$value = \$properties[\$value];
                    }
                    break;
                case self::TYPE_SELECT:
                    \$value = self::setValueFromPropertiesList(\$properties, \$value);
                    break;
                case self::TYPE_MULTISELECT:
                    \$values = explode('|', \$value);
                    foreach (\$values as &\$val) {
                        \$val = self::setValueFromPropertiesList(\$properties, \$val);
                    }
                    \$value = implode('|', \$values);
                    break;
            }
        }

        return \$value;
    }

    /**
     * @param string \$value
     *
     * @return string
     */
    public static function setValueFromPropertiesList(array \$properties, \$value)
    {
        if (isset(\$properties['list']) && is_array(\$properties['list'])) {
            \$list = \$properties['list'];
            if (!is_array(\$list)) {
                return \$value;
            }
            foreach (\$list as \$property) {
                if (isset(\$property[\$value])) {
                    return \$property[\$value];
                } elseif (isset(\$property['value']) && \$property['value'] == \$value) {
                    return \$property['label'];
                }
            }
        }

        return \$value;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Helper/CustomFieldValueHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/CustomFieldValueHelper.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Helper/CustomFieldValueHelper.php");
    }
}
