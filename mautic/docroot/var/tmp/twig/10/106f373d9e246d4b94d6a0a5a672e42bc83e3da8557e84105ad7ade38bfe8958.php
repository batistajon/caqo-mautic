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

/* @bundles/LeadBundle/Entity/ListLeadRepository.php */
class __TwigTemplate_d81187d4362ad038ad9002f2e46ca14ea846a102ee4c7c8b09a51d77911ee6f6 extends Template
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

use Mautic\\CoreBundle\\Entity\\CommonRepository;

class ListLeadRepository extends CommonRepository
{
    /**
     * Updates lead ID (e.g. after a lead merge).
     *
     * @param \$fromLeadId
     * @param \$toLeadId
     */
    public function updateLead(\$fromLeadId, \$toLeadId)
    {
        // First check to ensure the \$toLead doesn't already exist
        \$results = \$this->_em->getConnection()->createQueryBuilder()
            ->select('l.leadlist_id')
            ->from(MAUTIC_TABLE_PREFIX.'lead_lists_leads', 'l')
            ->where('l.lead_id = '.\$toLeadId)
            ->execute()
            ->fetchAll();
        \$lists = [];
        foreach (\$results as \$r) {
            \$lists[] = \$r['leadlist_id'];
        }

        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->update(MAUTIC_TABLE_PREFIX.'lead_lists_leads')
            ->set('lead_id', (int) \$toLeadId)
            ->where('lead_id = '.(int) \$fromLeadId);

        if (!empty(\$lists)) {
            \$q->andWhere(
                \$q->expr()->notIn('leadlist_id', \$lists)
            )->execute();

            // Delete remaining leads as the new lead already belongs
            \$this->_em->getConnection()->createQueryBuilder()
                ->delete(MAUTIC_TABLE_PREFIX.'lead_lists_leads')
                ->where('lead_id = '.(int) \$fromLeadId)
                ->execute();
        } else {
            \$q->execute();
        }
    }

    /**
     * @param mixed[] \$filters
     */
    public function getContactsCountBySegment(int \$segmentId, array \$filters = []): int
    {
        \$qb = \$this->createQueryBuilder('ll');
        \$qb->select('count(ll.list) as count')
            ->where('ll.list = :segmentId')
            ->setParameter('segmentId', \$segmentId);

        if (!empty(\$filters)) {
            foreach (\$filters as \$colName => \$val) {
                \$entityFieldName = lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', \$colName))));
                \$qb->andWhere(sprintf('ll.%s=:%s', \$entityFieldName, \$entityFieldName));
                \$qb->setParameter(\$entityFieldName, \$val);
            }
        }

        return (int) \$qb->getQuery()->getSingleScalarResult();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/ListLeadRepository.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/ListLeadRepository.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Entity/ListLeadRepository.php");
    }
}
