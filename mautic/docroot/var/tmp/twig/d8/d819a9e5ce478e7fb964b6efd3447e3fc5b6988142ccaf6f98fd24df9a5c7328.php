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

/* @bundles/LeadBundle/Segment/Query/Filter/ChannelClickQueryBuilder.php */
class __TwigTemplate_52f7ed9b2a3033c41b29b2e39e4938a90d8552978f96485a6d3078f0d785dc53 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Query\\Filter;

use Mautic\\LeadBundle\\Segment\\ContactSegmentFilter;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;

class ChannelClickQueryBuilder extends BaseFilterQueryBuilder
{
    public static function getServiceId()
    {
        return 'mautic.lead.query.builder.channel_click.value';
    }

    public function applyQuery(QueryBuilder \$queryBuilder, ContactSegmentFilter \$filter)
    {
        \$leadsTableAlias  = \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.'leads');
        \$filterOperator   = \$filter->getOperator();
        \$filterChannel    = \$this->getChannel(\$filter->getField());
        \$filterParameters = \$filter->getParameterValue();

        if (is_array(\$filterParameters)) {
            \$parameters = [];
            foreach (\$filterParameters as \$filterParameter) {
                \$parameters[] = \$this->generateRandomParameterName();
            }
        } else {
            \$parameters = \$this->generateRandomParameterName();
        }

        \$tableAlias = \$this->generateRandomParameterName();

        \$subQb = \$queryBuilder->createQueryBuilder(\$queryBuilder->getConnection());
        \$expr  = \$subQb->expr()->andX(
            \$subQb->expr()->isNotNull(\$tableAlias.'.redirect_id'),
            \$subQb->expr()->isNotNull(\$tableAlias.'.lead_id'),
            \$subQb->expr()->eq(\$tableAlias.'.source', \$subQb->expr()->literal(\$filterChannel))
        );

        if (\$this->isDateBased(\$filter->getField())) {
            \$expr->add(
                \$subQb->expr()->\$filterOperator(\$tableAlias.'.date_hit', \$filter->getParameterHolder(\$parameters))
            );
        }

        \$subQb->select(\$tableAlias.'.lead_id')
            ->from(MAUTIC_TABLE_PREFIX.'page_hits', \$tableAlias)
            ->where(\$expr);

        if ('empty' === \$filterOperator && !\$this->isDateBased(\$filter->getField())) {
            \$queryBuilder->addLogic(\$queryBuilder->expr()->notIn(\$leadsTableAlias.'.id', \$subQb->getSQL()), \$filter->getGlue());
        } else {
            \$queryBuilder->addLogic(\$queryBuilder->expr()->in(\$leadsTableAlias.'.id', \$subQb->getSQL()), \$filter->getGlue());
        }

        \$queryBuilder->setParametersPairs(\$parameters, \$filterParameters);

        return \$queryBuilder;
    }

    private function getChannel(string \$name): string
    {
        if ('email_id' === \$name) {
            // BC for existing filter
            return 'email';
        }

        return str_replace(['_clicked_link', '_date'], '', \$name);
    }

    private function isDateBased(string \$name): bool
    {
        return false !== strpos(\$name, '_date');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Query/Filter/ChannelClickQueryBuilder.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/Filter/ChannelClickQueryBuilder.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Query/Filter/ChannelClickQueryBuilder.php");
    }
}
