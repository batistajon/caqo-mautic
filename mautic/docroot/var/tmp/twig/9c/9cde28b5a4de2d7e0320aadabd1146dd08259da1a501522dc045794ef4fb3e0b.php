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

/* @bundles/LeadBundle/Segment/Query/Filter/IntegrationCampaignFilterQueryBuilder.php */
class __TwigTemplate_204753ed4c1fe19ce643d4832456be14917b0a03619ca086597e2f6faba78c2f extends Template
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

class IntegrationCampaignFilterQueryBuilder extends BaseFilterQueryBuilder
{
    public static function getServiceId()
    {
        return 'mautic.lead.query.builder.special.integration';
    }

    /**
     * @throws QueryException
     */
    public function applyQuery(QueryBuilder \$queryBuilder, ContactSegmentFilter \$filter)
    {
        \$leadsTableAlias          = \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.'leads');
        \$integrationCampaignParts = \$filter->getIntegrationCampaignParts();

        \$integrationNameParameter    = \$this->generateRandomParameterName();
        \$campaignIdParameter         = \$this->generateRandomParameterName();

        \$tableAlias = \$this->generateRandomParameterName();

        \$queryBuilder->leftJoin(
            \$leadsTableAlias,
            MAUTIC_TABLE_PREFIX.'integration_entity',
            \$tableAlias,
            \$tableAlias.'.integration_entity = \"CampaignMember\" AND '.
            \$tableAlias.\".internal_entity = 'lead' AND \".
            \$tableAlias.'.internal_entity_id = '.\$leadsTableAlias.'.id'
        );

        \$expression = \$queryBuilder->expr()->andX(
            \$queryBuilder->expr()->eq(\$tableAlias.'.integration', \":\$integrationNameParameter\"),
            \$queryBuilder->expr()->eq(\$tableAlias.'.integration_entity_id', \":\$campaignIdParameter\")
        );

        \$queryBuilder->addJoinCondition(\$tableAlias, \$expression);

        if ('eq' === \$filter->getOperator()) {
            \$queryType = \$filter->getParameterValue() ? 'isNotNull' : 'isNull';
        } else {
            \$queryType = \$filter->getParameterValue() ? 'isNull' : 'isNotNull';
        }

        \$queryBuilder->addLogic(\$queryBuilder->expr()->\$queryType(\$tableAlias.'.id'), \$filter->getGlue());

        \$queryBuilder->setParameter(\$integrationNameParameter, \$integrationCampaignParts->getIntegrationName());
        \$queryBuilder->setParameter(\$campaignIdParameter, \$integrationCampaignParts->getCampaignId());

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
        return "@bundles/LeadBundle/Segment/Query/Filter/IntegrationCampaignFilterQueryBuilder.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/Filter/IntegrationCampaignFilterQueryBuilder.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Query/Filter/IntegrationCampaignFilterQueryBuilder.php");
    }
}
