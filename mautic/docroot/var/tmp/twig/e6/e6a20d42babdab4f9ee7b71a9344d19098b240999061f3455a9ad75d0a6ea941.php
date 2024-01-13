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

/* @bundles/ReportBundle/Entity/ReportRepository.php */
class __TwigTemplate_4fdae824abd013f43ae70636cee5b0bca8deefd645be87c891dc55b5023ecaea extends Template
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

namespace Mautic\\ReportBundle\\Entity;

use Doctrine\\ORM\\Tools\\Pagination\\Paginator;
use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * ReportRepository.
 */
class ReportRepository extends CommonRepository
{
    /**
     * Get a list of entities.
     *
     * @return Paginator
     */
    public function getEntities(array \$args = [])
    {
        \$q = \$this
            ->createQueryBuilder('r')
            ->select('r');

        \$args['qb'] = \$q;

        return parent::getEntities(\$args);
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
                'r.name',
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function addSearchCommandWhereClause(\$q, \$filter)
    {
        \$command                 = \$filter->command;
        \$unique                  = \$this->generateRandomParameterName();
        \$returnParameter         = false; //returning a parameter that is not used will lead to a Doctrine error
        list(\$expr, \$parameters) = parent::addSearchCommandWhereClause(\$q, \$filter);

        switch (\$command) {
            case \$this->translator->trans('mautic.core.searchcommand.ispublished'):
            case \$this->translator->trans('mautic.core.searchcommand.ispublished', [], null, 'en_US'):
                \$expr            = \$q->expr()->eq('r.isPublished', \":\$unique\");
                \$forceParameters = [\$unique => true];

                break;
            case \$this->translator->trans('mautic.core.searchcommand.isunpublished'):
            case \$this->translator->trans('mautic.core.searchcommand.isunpublished', [], null, 'en_US'):
                \$expr            = \$q->expr()->eq('r.isPublished', \":\$unique\");
                \$forceParameters = [\$unique => false];

                break;
            case \$this->translator->trans('mautic.core.searchcommand.ismine'):
            case \$this->translator->trans('mautic.core.searchcommand.ismine', [], null, 'en_US'):
                \$expr = \$q->expr()->eq('IDENTITY(r.createdBy)', \$this->currentUser->getId());
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
            'mautic.core.searchcommand.ismine',
        ];

        return array_merge(\$commands, parent::getSearchCommands());
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultOrder()
    {
        return [
            ['r.name', 'ASC'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getTableAlias()
    {
        return 'r';
    }

    public function findReportsWithGraphs(\$ownedBy = null)
    {
        \$qb = \$this->getEntityManager()->getConnection()->createQueryBuilder();

        \$qb->select('r.id, r.name, r.graphs')
            ->from(MAUTIC_TABLE_PREFIX.'reports', 'r')
            ->where(
                \$qb->expr()->andX(
                    \$qb->expr()->isNotNull('r.graphs'),
                    \$qb->expr()->neq('r.graphs', \$qb->expr()->literal('a:0:{}')),
                    \$qb->expr()->eq('r.is_published', ':true')
                )
            );
        \$qb->setParameter('true', true, 'boolean');

        if (\$ownedBy) {
            \$qb->andWhere(
                \$qb->expr()->eq('r.created_by', (int) \$ownedBy)
            );
        }

        \$qb->orderBy('r.name');

        return \$qb->execute()->fetchAll();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Entity/ReportRepository.php";
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
        return new Source("", "@bundles/ReportBundle/Entity/ReportRepository.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Entity/ReportRepository.php");
    }
}
