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

/* @bundles/LeadBundle/Segment/TableSchemaColumnsCache.php */
class __TwigTemplate_d63af06bc1d3470ada5cbf754b3db82a0389fc62fd64065b1738cd6b1baf54a4 extends Template
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

namespace Mautic\\LeadBundle\\Segment;

use Doctrine\\ORM\\EntityManager;

/**
 * Class TableSchemaColumnsCache.
 */
class TableSchemaColumnsCache
{
    /**
     * @var EntityManager
     */
    private \$entityManager;

    /**
     * @var array
     */
    private \$cache;

    /**
     * TableSchemaColumnsCache constructor.
     */
    public function __construct(EntityManager \$entityManager)
    {
        \$this->entityManager = \$entityManager;
        \$this->cache         = [];
    }

    /**
     * @param \$tableName
     *
     * @return array|false
     */
    public function getColumns(\$tableName)
    {
        if (!isset(\$this->cache[\$tableName])) {
            \$columns                 = \$this->entityManager->getConnection()->getSchemaManager()->listTableColumns(\$tableName);
            \$this->cache[\$tableName] = \$columns ?: [];
        }

        return \$this->cache[\$tableName];
    }

    /**
     * @return \$this
     */
    public function clear()
    {
        \$this->cache = [];

        return \$this;
    }

    /**
     * @return string
     */
    public function getCurrentDatabaseName()
    {
        return \$this->entityManager->getConnection()->getDatabase();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/TableSchemaColumnsCache.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/TableSchemaColumnsCache.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/TableSchemaColumnsCache.php");
    }
}
