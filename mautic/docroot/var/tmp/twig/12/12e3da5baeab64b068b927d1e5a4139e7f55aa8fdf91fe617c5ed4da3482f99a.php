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

/* @bundles/IntegrationsBundle/Helper/FieldFilterHelper.php */
class __TwigTemplate_8217ac6d57fb181996b0130447a2fe9f4e1d7b353c294fc0cbf4d524e7df7f86 extends Template
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

namespace Mautic\\IntegrationsBundle\\Helper;

use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormSyncInterface;
use Mautic\\IntegrationsBundle\\Mapping\\MappedFieldInfoInterface;

class FieldFilterHelper
{
    /**
     * @var int
     */
    private \$totalFieldCount = 0;

    /**
     * @var MappedFieldInfoInterface[]
     */
    private \$filteredFields = [];

    /**
     * @var ConfigFormSyncInterface
     */
    private \$integrationObject;

    public function __construct(ConfigFormSyncInterface \$integrationObject)
    {
        \$this->integrationObject = \$integrationObject;
    }

    public function filterFieldsByPage(string \$objectName, int \$page, int \$limit = 15): void
    {
        \$allFields             = \$this->integrationObject->getAllFieldsForMapping(\$objectName);
        \$this->filteredFields  = \$this->getPageOfFields(\$allFields, \$page, \$limit);
        \$this->totalFieldCount = count(\$allFields);
    }

    public function filterFieldsByKeyword(string \$objectName, string \$keyword, int \$page, int \$limit = 15): void
    {
        \$allFields            = \$this->integrationObject->getAllFieldsForMapping(\$objectName);
        \$this->filteredFields = \$this->getFieldsByKeyword(\$allFields, \$keyword);

        // Paginate filtered fields
        \$this->totalFieldCount = count(\$this->filteredFields);
        \$this->filteredFields  = \$this->getPageOfFields(\$this->filteredFields, \$page, \$limit);
    }

    public function getTotalFieldCount(): int
    {
        return \$this->totalFieldCount;
    }

    /**
     * @return MappedFieldInfoInterface[]
     */
    public function getFilteredFields(): array
    {
        return \$this->filteredFields;
    }

    /**
     * @return MappedFieldInfoInterface[]
     */
    private function getPageOfFields(array \$fields, int \$page, int \$limit): array
    {
        \$offset = (\$page - 1) * \$limit;

        return array_slice(\$fields, \$offset, \$limit, true);
    }

    /**
     * @return MappedFieldInfoInterface[]
     */
    private function getFieldsByKeyword(array \$fields, string \$keyword): array
    {
        \$found = [];

        foreach (\$fields as \$name => \$field) {
            if (!stristr(\$field->getName(), \$keyword)) {
                continue;
            }

            \$found[\$name] = \$field;
        }

        return \$found;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Helper/FieldFilterHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Helper/FieldFilterHelper.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Helper/FieldFilterHelper.php");
    }
}
