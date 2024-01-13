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

/* @bundles/LeadBundle/Entity/TimelineTrait.php */
class __TwigTemplate_471be799afaf4362f430dfd2535770722039fa7da6c2b5c6747d46b42533503b extends Template
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

use Doctrine\\DBAL\\Query\\QueryBuilder;
use Mautic\\CoreBundle\\Helper\\Chart\\ChartQuery;
use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\CoreBundle\\Helper\\Serializer;

trait TimelineTrait
{
    /**
     * @param QueryBuilder \$query                 DBAL QueryBuilder
     * @param array        \$options               Query optons from LeadTimelineEvent
     * @param string       \$eventNameColumn       Name of column to sort event name by
     * @param string       \$timestampColumn       Name of column to sort timestamp by
     * @param array        \$serializedColumns     Array of columns to unserialize
     * @param array        \$dateTimeColumns       Array of columns to be converted to \\DateTime
     * @param null         \$resultsParserCallback Callback to custom parse results
     *
     * @return array
     */
    private function getTimelineResults(
        QueryBuilder \$query,
        array \$options,
        \$eventNameColumn,
        \$timestampColumn,
        \$serializedColumns = [],
        \$dateTimeColumns = [],
        \$resultsParserCallback = null
    ) {
        if (!empty(\$options['unitCounts'])) {
            list(\$tablePrefix, \$column) = explode('.', \$timestampColumn);

            // Get counts grouped by unit based on date range
            /** @var ChartQuery \$cq */
            \$cq = \$options['chartQuery'];
            \$cq->modifyTimeDataQuery(\$query, \$column, \$tablePrefix);
            \$cq->applyDateFilters(\$query, \$column, \$tablePrefix);

            \$data = \$query->execute()->fetchAll();

            return \$cq->completeTimeData(\$data);
        }

        if (!empty(\$options['fromDate']) && !empty(\$options['toDate'])) {
            \$query->andWhere(\$timestampColumn.' BETWEEN :dateFrom AND :dateTo')
                ->setParameter('dateFrom', \$options['fromDate']->format('Y-m-d H:i:s'))
                ->setParameter('dateTo', \$options['toDate']->format('Y-m-d H:i:s'));
        } elseif (!empty(\$options['fromDate'])) {
            \$query->andWhere(\$query->expr()->gte(\$timestampColumn, ':dateFrom'))
                ->setParameter('dateFrom', \$options['fromDate']->format('Y-m-d H:i:s'));
        } elseif (!empty(\$options['toDate'])) {
            \$query->andWhere(\$query->expr()->lte(\$timestampColumn, ':dateTo'))
                ->setParameter('dateTo', \$options['toDate']->format('Y-m-d H:i:s'));
        }

        if (isset(\$options['leadIds'])) {
            \$leadColumn = \$this->getTableAlias().'.lead_id';
            \$query->addSelect(\$leadColumn);
            \$query->andWhere(
                \$query->expr()->in(\$leadColumn, \$options['leadIds'])
            );
        }

        if (isset(\$options['order'])) {
            list(\$orderBy, \$orderByDir) = \$options['order'];

            switch (\$orderBy) {
                case 'eventLabel':
                    \$orderBy = \$eventNameColumn;
                    break;
                case 'timestamp':
                default:
                    \$orderBy = \$timestampColumn;
                    break;
            }

            \$query->orderBy(\$orderBy, \$orderByDir);
        }

        if (!empty(\$options['limit'])) {
            \$query->setMaxResults(\$options['limit']);
            if (!empty(\$options['start'])) {
                \$query->setFirstResult(\$options['start']);
            }
        }

        \$results = \$query->execute()->fetchAll();

        if (!empty(\$serializedColumns) || !empty(\$dateTimeColumns) || is_callable(\$resultsParserCallback)) {
            // Convert to array or \\DateTime since we're using DBAL here
            foreach (\$results as &\$result) {
                foreach (\$serializedColumns as \$col) {
                    if (isset(\$result[\$col])) {
                        \$result[\$col] = (null == \$result[\$col]) ? [] : Serializer::decode(\$result[\$col]);
                    }
                }

                foreach (\$dateTimeColumns as \$col) {
                    if (isset(\$result[\$col]) && !empty(\$result[\$col])) {
                        \$dt           = new DateTimeHelper(\$result[\$col], 'Y-m-d H:i:s', 'UTC');
                        \$result[\$col] = \$dt->getLocalDateTime();
                        unset(\$dt);
                    }
                }

                if (is_callable(\$resultsParserCallback)) {
                    \$resultsParserCallback(\$result);
                }
            }
        }

        if (!empty(\$options['paginated'])) {
            // Get a total count along with results
            \$query->resetQueryParts(['select', 'orderBy'])
                ->setFirstResult(null)
                ->setMaxResults(null)
                ->select('count(*)');

            \$total = \$query->execute()->fetchColumn();

            return [
                'total'   => \$total,
                'results' => \$results,
            ];
        }

        return \$results;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/TimelineTrait.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/TimelineTrait.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Entity/TimelineTrait.php");
    }
}
