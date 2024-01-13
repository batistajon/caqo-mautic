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

/* @bundles/LeadBundle/Segment/Query/Filter/DoNotContactFilterQueryBuilder.php */
class __TwigTemplate_2dac4ed1542c2d593db94f7e3c873161404460372824d17b8bfd24c75f90e8fa extends Template
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
use Mautic\\LeadBundle\\Segment\\Query\\QueryException;

class DoNotContactFilterQueryBuilder extends BaseFilterQueryBuilder
{
    public static function getServiceId(): string
    {
        return 'mautic.lead.query.builder.special.dnc';
    }

    /**
     * @throws QueryException
     */
    public function applyQuery(QueryBuilder \$queryBuilder, ContactSegmentFilter \$filter): QueryBuilder
    {
        \$leadsTableAlias   = \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.'leads');
        \$doNotContactParts = \$filter->getDoNotContactParts();
        \$expr              = \$queryBuilder->expr();
        \$queryAlias        = \$this->generateRandomParameterName();
        \$reasonParameter   = \":{\$queryAlias}reason\";
        \$channelParameter  = \":{\$queryAlias}channel\";

        \$queryBuilder->setParameter(\$reasonParameter, \$doNotContactParts->getParameterType());
        \$queryBuilder->setParameter(\$channelParameter, \$doNotContactParts->getChannel());

        \$filterQueryBuilder = \$queryBuilder->createQueryBuilder()
            ->select(\$queryAlias.'.lead_id')
            ->from(MAUTIC_TABLE_PREFIX.'lead_donotcontact', \$queryAlias)
            ->andWhere(\$expr->eq(\$queryAlias.'.reason', \$reasonParameter))
            ->andWhere(\$expr->eq(\$queryAlias.'.channel', \$channelParameter));

        if ('eq' === \$filter->getOperator() xor !\$filter->getParameterValue()) {
            \$expression = \$expr->in(\$leadsTableAlias.'.id', \$filterQueryBuilder->getSQL());
        } else {
            \$expression = \$expr->notIn(\$leadsTableAlias.'.id', \$filterQueryBuilder->getSQL());
        }

        \$queryBuilder->addLogic(\$expression, \$filter->getGlue());

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
        return "@bundles/LeadBundle/Segment/Query/Filter/DoNotContactFilterQueryBuilder.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/Filter/DoNotContactFilterQueryBuilder.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Query/Filter/DoNotContactFilterQueryBuilder.php");
    }
}
