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

/* @bundles/StageBundle/Entity/StageRepository.php */
class __TwigTemplate_4245346382f596f3c6415aad9a1a5a4ec01d974571bb5ae667242c5aa4a0a62d extends Template
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

namespace Mautic\\StageBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * Class StageRepository.
 */
class StageRepository extends CommonRepository
{
    /**
     * {@inheritdoc}
     */
    public function getEntities(array \$args = [])
    {
        \$q = \$this
            ->createQueryBuilder(\$this->getTableAlias())
            ->leftJoin(\$this->getTableAlias().'.category', 'c');

        \$args['qb'] = \$q;

        return parent::getEntities(\$args);
    }

    /**
     * {@inheritdoc}
     */
    public function getTableAlias()
    {
        return 's';
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
        \$q = \$this->createQueryBuilder('s')
            ->select('partial s.{id, name}')
            ->setParameter('type', \$type);

        //make sure the published up and down dates are good
        \$expr = \$this->getPublishedByDateExpression(\$q);

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
            ->select('s.*')
            ->from(MAUTIC_TABLE_PREFIX.'stage_lead_action_log', 'x')
            ->innerJoin('x', MAUTIC_TABLE_PREFIX.'stages', 's', 'x.stage_id = s.id');

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
            's.name',
            's.description',
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

    /**
     * Get a list of lists.
     *
     * @param bool   \$user
     * @param string \$alias
     * @param string \$id
     *
     * @return array
     */
    public function getStages(\$user = false, \$id = '')
    {
        static \$stages = [];

        if (is_object(\$user)) {
            \$user = \$user->getId();
        }

        \$key = (int) \$user.\$id;
        if (isset(\$stages[\$key])) {
            return \$stages[\$key];
        }

        \$q = \$this->_em->createQueryBuilder()
            ->from('MauticStageBundle:Stage', 's', 's.id');

        \$q->select('partial s.{id, name}')
            ->andWhere(\$q->expr()->eq('s.isPublished', ':true'))
            ->setParameter('true', true, 'boolean');

        if (!empty(\$user)) {
            \$q->orWhere('s.createdBy = :user');
            \$q->setParameter('user', \$user);
        }

        if (!empty(\$id)) {
            \$q->andWhere(
                \$q->expr()->neq('s.id', \$id)
            );
        }

        \$q->orderBy('s.name');

        \$results = \$q->getQuery()->getArrayResult();

        \$stages[\$key] = \$results;

        return \$results;
    }

    /**
     * Get a list of stages.
     *
     * @param string \$name
     *
     * @return array
     */
    public function getStageByName(\$stageName)
    {
        if (!\$stageName) {
            return false;
        }

        \$q = \$this->_em->createQueryBuilder()
            ->from('MauticStageBundle:Stage', 's', 's.id');

        \$q->select('partial s.{id, name}')
            ->andWhere(\$q->expr()->eq('s.isPublished', ':true'))
            ->setParameter('true', true, 'boolean');
        \$q->andWhere('s.name = :stage')
            ->setParameter('stage', \$stageName);

        \$result = \$q->getQuery()->getResult();

        if (\$result) {
            \$key = array_keys(\$result);

            return \$result[\$key[0]];
        }

        return null;
    }

    /**
     * @param string|int \$value
     *
     * @return array
     */
    public function findByIdOrName(\$value)
    {
        \$qb = \$this->_em->createQueryBuilder()
            ->select('s')
            ->from(Stage::class, 's');

        if (is_numeric(\$value)) {
            // This is numeric value so check id and name
            \$qb->where('s.id = :value');
        } else {
            // This is string, no need to check IDs
            \$qb->where('s.name = :value');
        }

        return \$qb
            ->setParameter('value', \$value)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StageBundle/Entity/StageRepository.php";
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
        return new Source("", "@bundles/StageBundle/Entity/StageRepository.php", "/var/www/html/mautic/docroot/app/bundles/StageBundle/Entity/StageRepository.php");
    }
}
