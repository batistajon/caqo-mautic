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

/* @bundles/ApiBundle/Helper/EntityResultHelper.php */
class __TwigTemplate_033f3f92679da5052c22d38901ffa8f6f8b1b258dc05ebde73c476996d5f74fe extends Template
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

namespace Mautic\\ApiBundle\\Helper;

use Doctrine\\ORM\\Tools\\Pagination\\Paginator;

class EntityResultHelper
{
    /**
     * @param array<mixed>|Paginator<mixed> \$results
     * @param callable|null                 \$callback
     *
     * @return array<mixed>|\\ArrayObject<int,mixed>
     */
    public function getArray(\$results, \$callback = null)
    {
        \$entities = [];

        // we have to convert them from paginated proxy functions to entities in order for them to be
        // returned by the serializer/rest bundle
        foreach (\$results as \$key => \$entityRow) {
            \$entities[\$key] = \$this->getEntityData(\$entityRow);

            if (is_callable(\$callback)) {
                \$callback(\$entities[\$key]);
            }
        }

        // solving array/object discrepancy for empty values
        if (\$this->isKeyedById(\$results) && empty(\$entities)) {
            \$entities = new \\ArrayObject();
        }

        return \$entities;
    }

    /**
     * @param mixed \$entityRow
     *
     * @return mixed
     */
    private function getEntityData(\$entityRow)
    {
        if (is_array(\$entityRow) && isset(\$entityRow[0])) {
            return \$this->getDataForArray(\$entityRow);
        }

        return \$entityRow;
    }

    /**
     * @param array \$array
     *
     * @return mixed
     */
    private function getDataForArray(\$array)
    {
        if (is_object(\$array[0])) {
            return \$this->getDataForObject(\$array);
        }

        return \$array[0];
    }

    /**
     * @param object \$object
     *
     * @return mixed
     */
    private function getDataForObject(\$object)
    {
        foreach (\$object as \$key => \$value) {
            if (0 === \$key) {
                continue;
            }

            \$object[0]->\$key = \$value;
        }

        return \$object[0];
    }

    /**
     * @param array<mixed>|Paginator<mixed> \$results
     *
     * @return bool
     */
    private function isKeyedById(\$results)
    {
        return !\$results instanceof Paginator;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Helper/EntityResultHelper.php";
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
        return new Source("", "@bundles/ApiBundle/Helper/EntityResultHelper.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Helper/EntityResultHelper.php");
    }
}
