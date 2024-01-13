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

/* @bundles/PageBundle/Entity/PageRepository.php */
class __TwigTemplate_807f757534f6e9cc298e39a8bd5e532c5819def52c0d51f451a61cc2257a096e extends Template
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

namespace Mautic\\PageBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * Class PageRepository.
 */
class PageRepository extends CommonRepository
{
    /**
     * {@inheritdoc}
     */
    public function getEntities(array \$args = [])
    {
        //use a subquery to get a count of submissions otherwise doctrine will not pull all of the results
        \$sq = \$this->_em->createQueryBuilder()
            ->select('count(fs.id)')
            ->from('MauticFormBundle:Submission', 'fs')
            ->where('fs.page = p');

        \$q = \$this
            ->createQueryBuilder('p')
            ->select('p, ('.\$sq->getDql().') as submission_count')
            ->leftJoin('p.category', 'c');

        \$args['qb'] = \$q;

        return parent::getEntities(\$args);
    }

    /**
     * @param string \$alias
     * @param Page   \$entity
     *
     * @return mixed
     */
    public function checkPageUniqueAlias(\$alias, \$ignoreIds = [])
    {
        \$q = \$this->createQueryBuilder('e')
            ->select('count(e.id) as alias_count')
            ->where('e.alias = :alias');
        \$q->setParameter('alias', \$alias);

        if (!empty(\$ignoreIds)) {
            \$q->andWhere(
                \$q->expr()->notIn('e.id', ':ignoreIds')
            )
                ->setParameter('ignoreIds', \$ignoreIds);
        }

        \$results = \$q->getQuery()->getSingleResult();

        return \$results['alias_count'];
    }

    /**
     * @param string \$search
     * @param int    \$limit
     * @param int    \$start
     * @param bool   \$viewOther
     * @param bool   \$topLevel
     * @param array  \$ignoreIds
     * @param array  \$extraColumns
     * @param bool   \$publishedOnly
     *
     * @return array
     */
    public function getPageList(\$search = '', \$limit = 10, \$start = 0, \$viewOther = false, \$topLevel = false, \$ignoreIds = [], \$extraColumns = [], \$publishedOnly = false)
    {
        \$q = \$this->createQueryBuilder('p');
        \$q->select(sprintf('partial p.{id, title, language, alias %s}', empty(\$extraColumns) ? '' : ','.implode(',', \$extraColumns)));

        if (!empty(\$search)) {
            \$q->andWhere(\$q->expr()->like('p.title', ':search'))
                ->setParameter('search', \"{\$search}%\");
        }

        if (!\$viewOther) {
            \$q->andWhere(\$q->expr()->eq('p.createdBy', ':id'))
                ->setParameter('id', \$this->currentUser->getId());
        }

        if ('translation' == \$topLevel) {
            //only get top level pages
            \$q->andWhere(\$q->expr()->isNull('p.translationParent'));
        } elseif ('variant' == \$topLevel) {
            \$q->andWhere(\$q->expr()->isNull('p.variantParent'));
        }

        if (!empty(\$ignoreIds)) {
            \$q->andWhere(\$q->expr()->notIn('p.id', ':pageIds'))
                ->setParameter('pageIds', \$ignoreIds);
        }

        if (\$publishedOnly) {
            \$q->andWhere(\$q->expr()->eq('p.isPublished', 1));
        }

        \$q->orderBy('p.title');

        if (!empty(\$limit)) {
            \$q->setFirstResult(\$start)
                ->setMaxResults(\$limit);
        }

        return \$q->getQuery()->getArrayResult();
    }

    /**
     * {@inheritdoc}
     */
    protected function addCatchAllWhereClause(\$q, \$filter)
    {
        return \$this->addStandardCatchAllWhereClause(
            \$q,
            \$filter,
            [
                'p.title',
                'p.alias',
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function addSearchCommandWhereClause(\$q, \$filter)
    {
        list(\$expr, \$parameters) = \$this->addStandardSearchCommandWhereClause(\$q, \$filter);
        if (\$expr) {
            return [\$expr, \$parameters];
        }

        \$command         = \$filter->command;
        \$unique          = \$this->generateRandomParameterName();
        \$returnParameter = false; //returning a parameter that is not used will lead to a Doctrine error

        switch (\$command) {
            case \$this->translator->trans('mautic.core.searchcommand.lang'):
            case \$this->translator->trans('mautic.core.searchcommand.lang', [], null, 'en_US'):
                \$langUnique      = \$this->generateRandomParameterName();
                \$langValue       = \$filter->string.'_%';
                \$forceParameters = [
                    \$langUnique => \$langValue,
                    \$unique     => \$filter->string,
                ];
                \$expr = \$q->expr()->orX(
                    \$q->expr()->eq('p.language', \":\$unique\"),
                    \$q->expr()->like('p.language', \":\$langUnique\")
                );
                \$returnParameter = true;
                break;
            case \$this->translator->trans('mautic.page.searchcommand.isprefcenter'):
            case \$this->translator->trans('mautic.page.searchcommand.isprefcenter', [], null, 'en_US'):
                \$expr            = \$q->expr()->eq('p.isPreferenceCenter', \":\$unique\");
                \$forceParameters = [\$unique => true];
                break;
        }

        if (\$expr && \$filter->not) {
            \$expr = \$q->expr()->not(\$expr);
        }

        if (!empty(\$forceParameters)) {
            \$parameters = \$forceParameters;
        } elseif (\$returnParameter) {
            \$string     = (\$filter->strict) ? \$filter->string : \"%{\$filter->string}%\";
            \$parameters = [\"\$unique\" => \$string];
        }

        return [\$expr, \$parameters];
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchCommands()
    {
        \$commands = [
            'mautic.core.searchcommand.ispublished',
            'mautic.core.searchcommand.isunpublished',
            'mautic.core.searchcommand.isuncategorized',
            'mautic.core.searchcommand.ismine',
            'mautic.core.searchcommand.category',
            'mautic.core.searchcommand.lang',
            'mautic.page.searchcommand.isprefcenter',
        ];

        return array_merge(\$commands, parent::getSearchCommands());
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultOrder()
    {
        return [
            ['p.title', 'ASC'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getTableAlias()
    {
        return 'p';
    }

    /**
     * Resets variant_start_date and variant_hits.
     *
     * @param \$relatedIds
     * @param \$date
     */
    public function resetVariants(\$relatedIds, \$date)
    {
        if (!is_array(\$relatedIds)) {
            \$relatedIds = [(int) \$relatedIds];
        }

        \$qb = \$this->getEntityManager()->getConnection()->createQueryBuilder();
        \$qb->update(MAUTIC_TABLE_PREFIX.'pages')
            ->set('variant_hits', 0)
            ->set('variant_start_date', ':date')
            ->setParameter('date', \$date)
            ->where(
                \$qb->expr()->in('id', \$relatedIds)
            )
            ->execute();
    }

    /**
     * Up the hit count.
     *
     * @param            \$id
     * @param int        \$increaseBy
     * @param bool|false \$unique
     * @param bool|false \$variant
     */
    public function upHitCount(\$id, \$increaseBy = 1, \$unique = false, \$variant = false)
    {
        \$q = \$this->getEntityManager()->getConnection()->createQueryBuilder();

        \$q->update(MAUTIC_TABLE_PREFIX.'pages')
            ->set('hits', 'hits + '.(int) \$increaseBy)
            ->where('id = '.(int) \$id);

        if (\$unique) {
            \$q->set('unique_hits', 'unique_hits + '.(int) \$increaseBy);
        }

        if (\$variant) {
            \$q->set('variant_hits', 'variant_hits + '.(int) \$increaseBy);
        }

        \$q->execute();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Entity/PageRepository.php";
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
        return new Source("", "@bundles/PageBundle/Entity/PageRepository.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Entity/PageRepository.php");
    }
}
