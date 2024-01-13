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

/* @bundles/CoreBundle/Doctrine/Type/ArrayType.php */
class __TwigTemplate_9bfa88dd5ae5cf662a05283f64eaf54d94a86046bcfc367795a05b24f9553c25 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Type;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Types\\ConversionException;
use Mautic\\CoreBundle\\Helper\\UTF8Helper;

/**
 * Type that maps a PHP array to a clob SQL type.
 *
 * @since 2.0
 */
class ArrayType extends \\Doctrine\\DBAL\\Types\\ArrayType
{
    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (!is_array(\$value)) {
            return (null === \$value) ? 'N;' : 'a:0:{}';
        }

        // MySQL will crap out on corrupt UTF8 leading to broken serialized strings
        array_walk(
            \$value,
            function (&\$entry) {
                \$entry = UTF8Helper::toUTF8(\$entry);
            }
        );

        \$serialized = serialize(\$value);

        if (false !== strpos(\$serialized, chr(0))) {
            \$serialized = str_replace(\"\\0\", '__NULL_BYTE__', \$serialized);
            throw new ConversionException('Serialized array includes null-byte. This cannot be saved as a text. Please check if you not provided object with protected or private members. Serialized Array: '.\$serialized);
        }

        return \$serialized;
    }

    /**
     * @param mixed \$value
     *
     * @return array
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        try {
            \$value = parent::convertToPHPValue(\$value, \$platform);
            if (!is_array(\$value) || (1 > count(\$value))) {
                return \$value;
            }

            foreach (\$value as \$key => \$element) {
                if (!is_object(\$element)) {
                    continue;
                }

                \$reflectionObject     = new \\ReflectionObject(\$element);
                \$reflectionProperties = \$reflectionObject->getProperties(\\ReflectionProperty::IS_PROTECTED | \\ReflectionProperty::IS_PRIVATE);

                // Let's check if \$value contains objects with private or protected members.
                // If it contains such objects we have to remove them from \$array.
                // This will \"heal\" the database. There must be no null bytes.
                if (0 < count(\$reflectionProperties)) {
                    unset(\$value[\$key]);
                }
            }

            return \$value;
        } catch (ConversionException \$exception) {
            return [];
        } catch (\\ErrorException \$exeption) {
            return [];
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
        return "@bundles/CoreBundle/Doctrine/Type/ArrayType.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Type/ArrayType.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Doctrine/Type/ArrayType.php");
    }
}
