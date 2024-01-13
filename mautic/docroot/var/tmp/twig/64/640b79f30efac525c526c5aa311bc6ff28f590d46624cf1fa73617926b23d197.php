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

/* @bundles/PointBundle/Entity/PointRepository.php */
class __TwigTemplate_4eda85bfc721281135c477b05149ad3fb21bd07bd23f097c41f4177873ca1795 extends Template
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

namespace Mautic\\PointBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

class PointRepository extends CommonRepository
{
    /**
     * {@inheritdoc}
     */
    public function getEntities(array \$args = [])
    {
        \$q = \$this->_em
            ->createQueryBuilder()
            ->select(\$this->getTableAlias().', cat')
            ->from('MauticPointBundle:Point', \$this->getTableAlias())
            ->leftJoin(\$this->getTableAlias().'.category', 'cat');

        \$args['qb'] = \$q;

        return parent::getEntities(\$args);
    }

    /**
     * {@inheritdoc}
     */
    public function getTableAlias()
    {
        return 'p';
    }

    /**
     * Get array of published actions based on type.
     *
     * @param string \$type
     *
     * @return array
     */
    public function getPublishedByType(\$type)
    {
        \$q = \$this->createQueryBuilder('p')
            ->select('partial p.{id, type, name, delta, repeatable, properties}')
            ->setParameter('type', \$type);

        //make sure the published up and down dates are good
        \$expr = \$this->getPublishedByDateExpression(\$q);
        \$expr->add(\$q->expr()->eq('p.type', ':type'));

        \$q->where(\$expr);

        return \$q->getQuery()->getResult();
    }

    /**
     * @param string \$type
     * @param int    \$leadId
     *
     * @return array
     */
    public function getCompletedLeadActions(\$type, \$leadId)
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder()
            ->select('p.*')
            ->from(MAUTIC_TABLE_PREFIX.'point_lead_action_log', 'x')
            ->innerJoin('x', MAUTIC_TABLE_PREFIX.'points', 'p', 'x.point_id = p.id');

        //make sure the published up and down dates are good
        \$q->where(
            \$q->expr()->andX(
                \$q->expr()->eq('p.type', ':type'),
                \$q->expr()->eq('x.lead_id', (int) \$leadId)
            )
        )
            ->setParameter('type', \$type);

        \$results = \$q->execute()->fetchAll();

        \$return = [];

        foreach (\$results as \$r) {
            \$return[\$r['id']] = \$r;
        }

        return \$return;
    }

    /**
     * @param int \$leadId
     *
     * @return array
     */
    public function getCompletedLeadActionsByLeadId(\$leadId)
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder()
            ->select('p.*')
            ->from(MAUTIC_TABLE_PREFIX.'point_lead_action_log', 'x')
            ->innerJoin('x', MAUTIC_TABLE_PREFIX.'points', 'p', 'x.point_id = p.id');

        //make sure the published up and down dates are good
        \$q->where(
            \$q->expr()->andX(
                \$q->expr()->eq('x.lead_id', (int) \$leadId)
            )
        );

        \$results = \$q->execute()->fetchAll();

        \$return = [];

        foreach (\$results as \$r) {
            \$return[\$r['id']] = \$r;
        }

        return \$return;
    }

    /**
     * {@inheritdoc}
     */
    protected function addCatchAllWhereClause(\$q, \$filter)
    {
        return \$this->addStandardCatchAllWhereClause(\$q, \$filter, [
            'p.name',
            'p.description',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function addSearchCommandWhereClause(\$q, \$filter)
    {
        return \$this->addStandardSearchCommandWhereClause(\$q, \$filter);
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchCommands()
    {
        return \$this->getStandardSearchCommands();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Entity/PointRepository.php";
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
        return new Source("", "@bundles/PointBundle/Entity/PointRepository.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Entity/PointRepository.php");
    }
}
