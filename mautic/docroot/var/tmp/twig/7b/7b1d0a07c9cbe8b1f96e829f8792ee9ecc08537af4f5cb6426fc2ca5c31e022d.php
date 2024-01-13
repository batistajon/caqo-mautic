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

/* @bundles/CoreBundle/Helper/ArrayHelper.php */
class __TwigTemplate_135de71cb84724638e414e90991ace537ac6271e7ecf4136d2e7b9a319451627 extends Template
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
 * Helper functions for simpler operations with arrays.
 */
class ArrayHelper
{
    /**
     * If the \$key exists in the \$origin array then it will return its value.
     *
     * @param mixed \$key
     * @param mixed \$defaultValue
     *
     * @return mixed
     */
    public static function getValue(\$key, array \$origin, \$defaultValue = null)
    {
        return array_key_exists(\$key, \$origin) ? \$origin[\$key] : \$defaultValue;
    }

    /**
     * If the \$key exists in the \$origin array then it will return its value
     * and unsets the \$key from the \$array.
     *
     * @param mixed \$key
     * @param mixed \$defaultValue
     *
     * @return mixed
     */
    public static function pickValue(\$key, array &\$origin, \$defaultValue = null)
    {
        \$value = self::getValue(\$key, \$origin, \$defaultValue);

        unset(\$origin[\$key]);

        return \$value;
    }

    /**
     * Selects keys defined in the \$keys array and returns array that contains only those.
     *
     * @return array
     */
    public static function select(array \$keys, array \$origin)
    {
        return array_filter(\$origin, function (\$value, \$key) use (\$keys) {
            return in_array(\$key, \$keys, true);
        }, ARRAY_FILTER_USE_BOTH);
    }

    /**
     * Sum between two array.
     */
    public static function sum(array \$a1, array \$b2)
    {
        return self::sumOrSub(\$a1, \$b2);
    }

    /**
     * SUBSTRACT between two array.
     *
     * @return array
     */
    public static function sub(array \$a1, array \$b2)
    {
        return self::sumOrSub(\$a1, \$b2, true);
    }

    /**
     * Removes null and empty string values from the array.
     *
     * @param mixed[] \$array
     *
     * @return mixed[]
     */
    public static function removeEmptyValues(array \$array): array
    {
        return array_filter(
            \$array,
            function (\$value) {
                return !is_null(\$value) && '' !== \$value;
            }
        );
    }

    /**
     * Flip array or sub arrays.
     *
     * @param array<int|string|array<int|string>> \$masterArrays
     *
     * @return array<int|string|array<int|string>>
     */
    public static function flipArray(array \$masterArrays): array
    {
        if (!is_array(end(\$masterArrays))) {
            return array_flip(\$masterArrays);
        }

        return array_map(
            fn (array \$subArray) => array_flip(\$subArray),
            \$masterArrays
        );
    }

    /**
     *  SUM/SUBSTRACT between two arrays.
     *
     * @param bool \$subtracted
     *
     * @return array
     */
    private static function sumOrSub(array \$a1, array \$b2, \$subtracted = false)
    {
        return array_map(function (\$x, \$y) use (\$subtracted) {
            if (\$subtracted) {
                return \$x - \$y;
            } else {
                return \$x + \$y;
            }
        }, \$a1, \$b2);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/ArrayHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ArrayHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/ArrayHelper.php");
    }
}
