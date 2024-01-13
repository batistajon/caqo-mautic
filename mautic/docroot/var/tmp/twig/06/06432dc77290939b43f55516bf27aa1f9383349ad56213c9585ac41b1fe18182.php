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

/* @bundles/LeadBundle/Entity/CustomFieldRepositoryInterface.php */
class __TwigTemplate_245ee0e220a2ab280ce62686230d1d395914cac0b4adfecf6afe31e801b92208 extends Template
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

namespace Mautic\\LeadBundle\\Entity;

use Doctrine\\DBAL\\Query\\QueryBuilder as DbalQueryBuilder;
use Doctrine\\ORM\\QueryBuilder as OrmQueryBuilder;

/**
 * Interface CustomFieldRepositoryInterface.
 */
interface CustomFieldRepositoryInterface
{
    /**
     * Return an array of groups supported by the custom fields for this entity.
     *
     * @return array
     */
    public function getFieldGroups();

    /**
     * Get the base DBAL query builder for entities.
     *
     * @return DbalQueryBuilder
     */
    public function getEntitiesDbalQueryBuilder();

    /**
     * Get the base DBAL query builder for entities.
     *
     * @param \$order
     *
     * @return OrmQueryBuilder
     */
    public function getEntitiesOrmQueryBuilder(\$order);

    /**
     * Requires table alias.
     *
     * @return mixed
     */
    public function getTableAlias();
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/CustomFieldRepositoryInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/CustomFieldRepositoryInterface.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Entity/CustomFieldRepositoryInterface.php");
    }
}
