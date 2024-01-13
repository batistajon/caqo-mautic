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

/* @bundles/UserBundle/Entity/RoleRepository.php */
class __TwigTemplate_5ecab7b2932be8244f87a91ccb29f159048dba93b827c359d7901b8af9ae51d1 extends Template
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

namespace Mautic\\UserBundle\\Entity;

use Doctrine\\ORM\\Tools\\Pagination\\Paginator;
use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * RoleRepository.
 */
class RoleRepository extends CommonRepository
{
    /**
     * Get a list of roles.
     *
     * @return Paginator
     */
    public function getEntities(array \$args = [])
    {
        \$q = \$this->createQueryBuilder('r');

        \$args['qb'] = \$q;

        return parent::getEntities(\$args);
    }

    /**
     * Get a list of roles.
     *
     * @param string \$search
     * @param int    \$limit
     * @param int    \$start
     *
     * @return array
     */
    public function getRoleList(\$search = '', \$limit = 10, \$start = 0)
    {
        \$q = \$this->_em->createQueryBuilder();

        \$q->select('partial r.{id, name}')
            ->from('MauticUserBundle:Role', 'r');

        if (!empty(\$search)) {
            \$q->where('r.name LIKE :search')
                ->setParameter('search', \"{\$search}%\");
        }

        \$q->orderBy('r.name');

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
                'r.name',
                'r.description',
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
            case \$this->translator->trans('mautic.user.user.searchcommand.isadmin'):
            case \$this->translator->trans('mautic.user.user.searchcommand.isadmin', [], null, 'en_US'):
                \$expr = \$q->expr()->eq('r.isAdmin', 1);
                break;
            case \$this->translator->trans('mautic.core.searchcommand.name'):
            case \$this->translator->trans('mautic.core.searchcommand.name', [], null, 'en_US'):
                \$expr            = \$q->expr()->like('r.name', ':'.\$unique);
                \$returnParameter = true;
                break;
        }

        if (\$filter->not) {
            \$expr = \$q->expr()->not(\$expr);
        }

        if (\$returnParameter) {
            \$string     = (\$filter->strict) ? \$filter->string : \"%{\$filter->string}%\";
            \$parameters = [\"\$unique\" => \$string];
        }

        return [
            \$expr,
            \$parameters,
        ];
    }

    /**
     * Get a count of users that belong to the role.
     *
     * @param \$roleIds
     *
     * @return array
     */
    public function getUserCount(\$roleIds)
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();

        \$q->select('count(u.id) as thecount, u.role_id')
            ->from(MAUTIC_TABLE_PREFIX.'users', 'u');

        \$returnArray = (is_array(\$roleIds));

        if (!\$returnArray) {
            \$roleIds = [\$roleIds];
        }

        \$q->where(
            \$q->expr()->in('u.role_id', \$roleIds)
        )
            ->groupBy('u.role_id');

        \$result = \$q->execute()->fetchAll();

        \$return = [];
        foreach (\$result as \$r) {
            \$return[\$r['role_id']] = \$r['thecount'];
        }

        // Ensure lists without leads have a value
        foreach (\$roleIds as \$r) {
            if (!isset(\$return[\$r])) {
                \$return[\$r] = 0;
            }
        }

        return (\$returnArray) ? \$return : \$return[\$roleIds[0]];
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchCommands()
    {
        \$commands = [
            'mautic.user.user.searchcommand.isadmin',
            'mautic.core.searchcommand.name',
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
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Entity/RoleRepository.php";
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
        return new Source("", "@bundles/UserBundle/Entity/RoleRepository.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Entity/RoleRepository.php");
    }
}
