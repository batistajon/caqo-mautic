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

/* @bundles/LeadBundle/Entity/ImportRepository.php */
class __TwigTemplate_b697c544bc86d1b9eb3c5e2c455f920dcc5d8c3e0a80ef6d1016ed6650326e1c extends Template
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

/**
 * ImportRepository.
 */
class ImportRepository extends CommonRepository
{
    /**
     * Count how many imports with the status is there.
     *
     * @param float \$ghostDelay when is the import ghost? In hours
     * @param int   \$limit
     *
     * @return array
     */
    public function getGhostImports(\$ghostDelay = 2, \$limit = null)
    {
        \$q = \$this->getQueryForStatuses([Import::IN_PROGRESS]);
        \$q->select(\$this->getTableAlias())
            ->andWhere(\$q->expr()->lt(\$this->getTableAlias().'.dateModified', ':delay'))
            ->setParameter('delay', (new \\DateTime())->modify('-'.\$ghostDelay.' hours'));

        if (null !== \$limit) {
            \$q->setFirstResult(0)
                ->setMaxResults(\$limit);
        }

        return \$q->getQuery()->getResult();
    }

    /**
     * Count how many imports with the status is there.
     *
     * @param int \$limit
     *
     * @return array
     */
    public function getImportsWithStatuses(array \$statuses, \$limit = null)
    {
        \$q = \$this->getQueryForStatuses(\$statuses);
        \$q->select(\$this->getTableAlias())
            ->orderBy(\$this->getTableAlias().'.priority', 'ASC')
            ->addOrderBy(\$this->getTableAlias().'.dateAdded', 'DESC');

        if (null !== \$limit) {
            \$q->setFirstResult(0)
                ->setMaxResults(\$limit);
        }

        return \$q->getQuery()->getResult();
    }

    /**
     * Count how many imports with the status is there.
     *
     * @return int
     */
    public function countImportsWithStatuses(array \$statuses)
    {
        \$q = \$this->getQueryForStatuses(\$statuses);
        \$q->select('COUNT(DISTINCT '.\$this->getTableAlias().'.id) as theCount');

        \$results = \$q->getQuery()->getSingleResult();

        if (isset(\$results['theCount'])) {
            return (int) \$results['theCount'];
        }

        return 0;
    }

    /**
     * @return int
     */
    public function countImportsInProgress()
    {
        return \$this->countImportsWithStatuses([Import::IN_PROGRESS]);
    }

    public function getQueryForStatuses(\$statuses)
    {
        \$q = \$this->createQueryBuilder(\$this->getTableAlias());

        return \$q->where(\$q->expr()->in(\$this->getTableAlias().'.status', \$statuses));
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getTableAlias()
    {
        return 'i';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/ImportRepository.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/ImportRepository.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Entity/ImportRepository.php");
    }
}
