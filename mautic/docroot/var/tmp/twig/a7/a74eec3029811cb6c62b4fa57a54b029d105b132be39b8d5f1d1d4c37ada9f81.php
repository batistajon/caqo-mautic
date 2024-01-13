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

/* @bundles/LeadBundle/Field/SchemaDefinition.php */
class __TwigTemplate_01b41545575472fb7f04cca2cad0cb692553fbd9533e5e06e4a59507ca5484bc extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Field;

class SchemaDefinition
{
    /**
     * Get the MySQL database type based on the field type
     * Use a static function so that it's accessible from DoctrineSubscriber
     * without causing a circular service injection error.
     */
    public static function getSchemaDefinition(string \$alias, string \$type, bool \$isUnique = false): array
    {
        // Unique is always a string in order to control index length
        if (\$isUnique) {
            return [
                'name'    => \$alias,
                'type'    => 'string',
                'options' => [
                    'notnull' => false,
                ],
            ];
        }
        \$schemaLength = null;
        switch (\$type) {
            case 'datetime':
            case 'date':
            case 'time':
            case 'boolean':
                \$schemaType = \$type;
                break;
            case 'number':
                \$schemaType = 'float';
                break;
            case 'timezone':
            case 'locale':
            case 'country':
            case 'email':
            case 'lookup':
            case 'select':
            case 'multiselect':
            case 'region':
            case 'tel':
            case 'url':
                \$schemaType = 'string';
                break;
            case 'text':
                \$schemaType = (false !== strpos(\$alias, 'description')) ? 'text' : 'string';
                break;
            default:
                \$schemaType = 'text';
        }

        if ('string' === \$schemaType) {
            \$schemaLength = 191;
        }

        return [
            'name'    => \$alias,
            'type'    => \$schemaType,
            'options' => ['notnull' => false, 'length' => \$schemaLength],
        ];
    }

    /**
     * Get the MySQL database type based on the field type.
     */
    public function getSchemaDefinitionNonStatic(string \$alias, string \$type, bool \$isUnique = false): array
    {
        return self::getSchemaDefinition(\$alias, \$type, \$isUnique);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/SchemaDefinition.php";
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
        return new Source("", "@bundles/LeadBundle/Field/SchemaDefinition.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Field/SchemaDefinition.php");
    }
}
