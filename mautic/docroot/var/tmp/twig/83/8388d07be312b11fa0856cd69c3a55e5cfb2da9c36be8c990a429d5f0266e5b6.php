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

/* @bundles/CoreBundle/Event/StatsEvent.php */
class __TwigTemplate_9b749716ae1e30b84daddb7e748b877c238bc5b6de86e36277205c4acd9deb22 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Doctrine\\ORM\\EntityRepository;
use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\UserBundle\\Entity\\User;
use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class StatsEvent.
 * Used to get statistical data from subscribed tables.
 */
class StatsEvent extends Event
{
    /**
     * Database table containing statistical data available to get the results from.
     *
     * @var string
     */
    protected \$table;

    /**
     * Array of columns to fetch.
     *
     * @var array|null
     */
    protected \$select;

    /**
     * The page where to start with.
     *
     * @var int
     */
    protected \$start;

    /**
     * The rows per page limit.
     *
     * @var int
     */
    protected \$limit;

    /**
     * Database tables which the subscribers already asked for.
     *
     * @var array
     */
    protected \$tables = [];

    /**
     * @var array
     */
    protected \$tableColumns = [];

    /**
     * Array of order by statements.
     *
     * @var array
     */
    protected \$order = [];

    /**
     * Array of where filters.
     *
     * @var array
     */
    protected \$where = [];

    /**
     * Array of the result data.
     *
     * @var array
     */
    protected \$results = [];

    /**
     * Flag if some results were set.
     *
     * @var bool
     */
    protected \$hasResults = false;

    /**
     * Source repository to fetch the results from.
     *
     * @var CommonRepository
     */
    protected \$repository;

    /**
     * @var User
     */
    protected \$user;

    /**
     * StatsEvent constructor.
     *
     * @param     \$table
     * @param int \$start
     * @param int \$limit
     */
    public function __construct(\$table, \$start, \$limit, array \$order, array \$where, User \$user)
    {
        \$this->table = strtolower(trim(str_replace(MAUTIC_TABLE_PREFIX, '', strip_tags(\$table))));
        \$this->start = (int) \$start;
        \$this->limit = (int) \$limit;
        \$this->order = \$order;
        \$this->where = \$where;
        \$this->user  = \$user;
    }

    /**
     * Returns if event is for this table.
     *
     * @param                       \$table
     * @param EntityRepository|null \$repository
     *
     * @return bool
     */
    public function isLookingForTable(\$table, CommonRepository \$repository = null)
    {
        \$this->tables[] = \$table = str_replace(MAUTIC_TABLE_PREFIX, '', \$table);
        if (\$repository) {
            \$this->tableColumns[\$table] = \$repository->getTableColumns();
        }

        return \$this->table === \$table;
    }

    /**
     * Set the source repository to fetch the results from.
     *
     * @return string
     */
    public function setRepository(CommonRepository \$repository, array \$permissions = [])
    {
        \$this->repository = \$repository;
        \$this->setResults(
            \$this->repository->getRows(
                \$this->getStart(),
                \$this->getLimit(),
                \$this->getOrder(),
                \$this->getWhere(),
                \$this->getSelect(),
                \$permissions
            )
        );

        return \$this;
    }

    /**
     * @return array
     */
    public function getSelect()
    {
        return \$this->select;
    }

    /**
     * @return \$this
     */
    public function setSelect(array \$select = null)
    {
        \$this->select = \$select;

        return \$this;
    }

    /**
     * Returns the start.
     *
     * @return int
     */
    public function getStart()
    {
        return \$this->start;
    }

    /**
     * Returns the limit.
     *
     * @return int
     */
    public function getLimit()
    {
        return \$this->limit;
    }

    /**
     * Returns the order.
     *
     * @return array
     */
    public function getOrder()
    {
        return \$this->order;
    }

    /**
     * Returns the where.
     *
     * @return array
     */
    public function getWhere()
    {
        return \$this->where;
    }

    /**
     * @return \$this
     */
    public function addWhere(array \$where)
    {
        \$this->where[] = \$where;

        return \$this;
    }

    /**
     * Add an array of results and if so, stop propagation.
     */
    public function setResults(array \$results)
    {
        \$this->results    = \$results;
        \$this->hasResults = true;

        \$this->stopPropagation();
    }

    /**
     * Returns the results.
     *
     * @return array
     */
    public function getResults()
    {
        return \$this->results;
    }

    /**
     * Returns the subscribed tables untill the match was found.
     *
     * @return array
     */
    public function getTables()
    {
        sort(\$this->tables);

        return \$this->tables;
    }

    /**
     * @param null \$table
     *
     * @return mixed
     */
    public function getTableColumns(\$table = null)
    {
        ksort(\$this->tableColumns);

        return (\$table) ? \$this->tableColumns[\$table] : \$this->tableColumns;
    }

    /**
     * Returns boolean if the results were set or not.
     *
     * @return bool
     */
    public function hasResults()
    {
        return \$this->hasResults;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return \$this->user;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/StatsEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/StatsEvent.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Event/StatsEvent.php");
    }
}