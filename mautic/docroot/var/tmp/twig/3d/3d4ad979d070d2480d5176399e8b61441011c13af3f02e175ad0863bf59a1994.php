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

/* @bundles/CategoryBundle/Entity/CategoryRepository.php */
class __TwigTemplate_9053b1a0086144ae03f234249e7979b13c58fa7f676c00274a0a740c8c83ddac extends Template
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

namespace Mautic\\CategoryBundle\\Entity;

use Doctrine\\ORM\\Tools\\Pagination\\Paginator;
use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * Class CategoryRepository.
 */
class CategoryRepository extends CommonRepository
{
    /**
     * Get a list of entities.
     *
     * @return Paginator
     */
    public function getEntities(array \$args = [])
    {
        \$q = \$this
            ->createQueryBuilder('c')
            ->select('c');

        \$args['qb'] = \$q;

        return parent::getEntities(\$args);
    }

    /**
     * @param        \$bundle
     * @param string \$search
     * @param int    \$limit
     * @param int    \$start
     *
     * @return array
     */
    public function getCategoryList(\$bundle, \$search = '', \$limit = 10, \$start = 0, \$includeGlobal = true)
    {
        \$q = \$this->createQueryBuilder('c');
        \$q->select('partial c.{id, title, alias, color, bundle}');

        \$q->where('c.isPublished = :true')
            ->setParameter('true', true, 'boolean');

        \$expr = \$q->expr()->orX(
            \$q->expr()->eq('c.bundle', ':bundle')
        );

        if (\$includeGlobal && 'global' !== \$bundle) {
            \$expr->add(
                \$q->expr()->eq('c.bundle', \$q->expr()->literal('global'))
            );
        }

        \$q->andWhere(\$expr)
          ->setParameter('bundle', \$bundle);

        if (!empty(\$search)) {
            \$q->andWhere(\$q->expr()->like('c.title', ':search'))
                ->setParameter('search', \"{\$search}%\");
        }

        \$q->orderBy('c.title');

        if (!empty(\$limit)) {
            \$q->setFirstResult(\$start)
                ->setMaxResults(\$limit);
        }

        return \$q->getQuery()->getArrayResult();
    }

    /**
     * @param \\Doctrine\\ORM\\QueryBuilder|\\Doctrine\\DBAL\\Query\\QueryBuilder \$q
     * @param                                                              \$filter
     *
     * @return array
     */
    protected function addCatchAllWhereClause(\$q, \$filter)
    {
        return \$this->addStandardCatchAllWhereClause(\$q, \$filter, [
            'c.title',
            'c.description',
        ]);
    }

    /**
     * @param \\Doctrine\\ORM\\QueryBuilder|\\Doctrine\\DBAL\\Query\\QueryBuilder \$q
     * @param                                                              \$filter
     *
     * @return array
     */
    protected function addSearchCommandWhereClause(\$q, \$filter)
    {
        \$command                 = \$field                 = \$filter->command;
        \$unique                  = \$this->generateRandomParameterName();
        list(\$expr, \$parameters) = parent::addSearchCommandWhereClause(\$q, \$filter);

        switch (\$command) {
            case \$this->translator->trans('mautic.core.searchcommand.ispublished'):
            case \$this->translator->trans('mautic.core.searchcommand.ispublished', [], null, 'en_US'):
                \$expr                = \$q->expr()->eq('c.isPublished', \":\$unique\");
                \$parameters[\$unique] = true;
                break;
            case \$this->translator->trans('mautic.core.searchcommand.isunpublished'):
            case \$this->translator->trans('mautic.core.searchcommand.isunpublished', [], null, 'en_US'):
                \$expr                = \$q->expr()->eq('c.isPublished', \":\$unique\");
                \$parameters[\$unique] = false;
                break;
        }

        if (\$expr && \$filter->not) {
            \$expr = \$q->expr()->not(\$expr);
        }

        return [
            \$expr,
            \$parameters,
        ];
    }

    /**
     * @return array
     */
    public function getSearchCommands()
    {
        \$commands = [
            'mautic.core.searchcommand.ispublished',
            'mautic.core.searchcommand.isunpublished',
        ];

        return array_merge(\$commands, parent::getSearchCommands());
    }

    /**
     * @return string
     */
    protected function getDefaultOrder()
    {
        return [
            ['c.title', 'ASC'],
        ];
    }

    /**
     * @param string \$bundle
     * @param string \$alias
     * @param object \$entity
     *
     * @return mixed
     */
    public function checkUniqueCategoryAlias(\$bundle, \$alias, \$entity = null)
    {
        \$q = \$this->createQueryBuilder('e')
            ->select('count(e.id) as aliascount')
            ->where('e.alias = :alias')
            ->andWhere('e.bundle = :bundle')
            ->setParameter('alias', \$alias)
            ->setParameter('bundle', \$bundle);

        if (!empty(\$entity) && \$entity->getId()) {
            \$q->andWhere('e.id != :id');
            \$q->setParameter('id', \$entity->getId());
        }

        \$results = \$q->getQuery()->getSingleResult();

        return \$results['aliascount'];
    }

    /**
     * {@inheritdoc}
     */
    public function getTableAlias()
    {
        return 'c';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Entity/CategoryRepository.php";
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
        return new Source("", "@bundles/CategoryBundle/Entity/CategoryRepository.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/Entity/CategoryRepository.php");
    }
}
