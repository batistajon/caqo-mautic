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

/* @bundles/LeadBundle/Field/FieldsWithUniqueIdentifier.php */
class __TwigTemplate_86db6d8eb92ec95d88aee340333470ecab1d8c72b4939d1bb16e4e69eaf79c03 extends Template
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

class FieldsWithUniqueIdentifier
{
    /**
     * @var array
     */
    private \$uniqueIdentifierFields = [];

    /**
     * @var FieldList
     */
    private \$fieldList;

    public function __construct(FieldList \$fieldList)
    {
        \$this->fieldList = \$fieldList;
    }

    /**
     * Retrieves a list of published fields that are unique identifiers.
     *
     * @return mixed
     */
    public function getFieldsWithUniqueIdentifier(array \$filters = [])
    {
        \$filters['isPublished']       = isset(\$filters['isPublished']) ? \$filters['isPublished'] : true;
        \$filters['isUniqueIdentifer'] = isset(\$filters['isUniqueIdentifer']) ? \$filters['isUniqueIdentifer'] : true;
        \$filters['object']            = isset(\$filters['object']) ? \$filters['object'] : 'lead';

        \$key = base64_encode(json_encode(\$filters));
        if (!isset(\$this->uniqueIdentifierFields[\$key])) {
            \$this->uniqueIdentifierFields[\$key] = \$this->fieldList->getFieldList(false, true, \$filters);
        }

        return \$this->uniqueIdentifierFields[\$key];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/FieldsWithUniqueIdentifier.php";
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
        return new Source("", "@bundles/LeadBundle/Field/FieldsWithUniqueIdentifier.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Field/FieldsWithUniqueIdentifier.php");
    }
}
