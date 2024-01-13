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

/* @bundles/LeadBundle/Segment/Query/Filter/SessionsFilterQueryBuilder.php */
class __TwigTemplate_69e7994bf05b5dcf93f5161045239bb5ccc1d2c8e70e0f7db4e3bf6f8d28c4cf extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Query\\Filter;

use Mautic\\LeadBundle\\Segment\\ContactSegmentFilter;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;

class SessionsFilterQueryBuilder extends BaseFilterQueryBuilder
{
    public static function getServiceId()
    {
        return 'mautic.lead.query.builder.special.sessions';
    }

    public function applyQuery(QueryBuilder \$queryBuilder, ContactSegmentFilter \$filter)
    {
        \$leadsTableAlias      = \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.'leads');
        \$pageHitsAlias        = \$this->generateRandomParameterName();
        \$exclusionAlias       = \$this->generateRandomParameterName();
        \$expressionValueAlias = \$this->generateRandomParameterName();

        \$expressionOperator = \$filter->getOperator();
        \$expression         = \$queryBuilder->expr()->\$expressionOperator('count(id)',
            \$filter->getParameterHolder(\$expressionValueAlias));

        \$queryBuilder->setParameter(\$expressionValueAlias, (int) \$filter->getParameterValue());

        \$exclusionQueryBuilder = \$queryBuilder->getConnection()->createQueryBuilder();
        \$exclusionQueryBuilder
            ->select(\$exclusionAlias.'.id')
            ->from(MAUTIC_TABLE_PREFIX.'page_hits', \$exclusionAlias)
            ->where(
                \$queryBuilder->expr()->andX(
                    \$queryBuilder->expr()->eq(\$leadsTableAlias.'.id', \$exclusionAlias.'.lead_id'),
                    \$queryBuilder->expr()->gt(
                        \$exclusionAlias.'.date_hit',
                        \$pageHitsAlias.'.date_hit - INTERVAL 30 MINUTE'
                    ),
                    \$queryBuilder->expr()->lt(\$exclusionAlias.'.date_hit', \$pageHitsAlias.'.date_hit')
                )
            );

        \$sessionQueryBuilder = \$queryBuilder->getConnection()->createQueryBuilder();
        \$sessionQueryBuilder
            ->select('count(id)')
            ->from(MAUTIC_TABLE_PREFIX.'page_hits', \$pageHitsAlias)
            ->where(
                \$queryBuilder->expr()->andX(
                    \$queryBuilder->expr()->eq(\$leadsTableAlias.'.id', \$pageHitsAlias.'.lead_id'),
                    \$queryBuilder->expr()->isNull(\$pageHitsAlias.'.email_id'),
                    \$queryBuilder->expr()->isNull(\$pageHitsAlias.'.redirect_id'),
                    \$queryBuilder->expr()->notExists(
                        \$exclusionQueryBuilder->getSQL()
                    )
                )
            )
            ->having(\$expression);

        \$glue = \$filter->getGlue().'Where';
        \$queryBuilder->\$glue(\$queryBuilder->expr()->exists(\$sessionQueryBuilder->getSQL()));

        return \$queryBuilder;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Query/Filter/SessionsFilterQueryBuilder.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/Filter/SessionsFilterQueryBuilder.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Query/Filter/SessionsFilterQueryBuilder.php");
    }
}
