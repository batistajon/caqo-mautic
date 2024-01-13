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

/* @bundles/FormBundle/Entity/FormRepository.php */
class __TwigTemplate_eb0c2e5c9c71705066a5e97db7433b6e393a6697492bdee06cd79a54e34da3d0 extends Template
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

namespace Mautic\\FormBundle\\Entity;

use Doctrine\\ORM\\Query\\Expr\\Join;
use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * FormRepository.
 */
class FormRepository extends CommonRepository
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
            ->where('fs.form = f');

        \$q = \$this->createQueryBuilder('f');
        \$q->select('f, ('.\$sq->getDql().') as submission_count');
        \$q->leftJoin('f.category', 'c');

        \$args['qb'] = \$q;

        return parent::getEntities(\$args);
    }

    /**
     * @param string \$search
     * @param int    \$limit
     * @param int    \$start
     * @param bool   \$viewOther
     * @param null   \$formType
     *
     * @return array
     */
    public function getFormList(\$search = '', \$limit = 10, \$start = 0, \$viewOther = false, \$formType = null)
    {
        \$q = \$this->createQueryBuilder('f');
        \$q->select('partial f.{id, name, alias}');

        if (!empty(\$search)) {
            \$q->andWhere(\$q->expr()->like('f.name', ':search'))
                ->setParameter('search', \"{\$search}%\");
        }

        if (!\$viewOther) {
            \$q->andWhere(\$q->expr()->eq('f.createdBy', ':id'))
                ->setParameter('id', \$this->currentUser->getId());
        }

        if (!empty(\$formType)) {
            \$q->andWhere(
                \$q->expr()->eq('f.formType', ':type')
            )->setParameter('type', \$formType);
        }

        \$q->orderBy('f.name');

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
        return \$this->addStandardCatchAllWhereClause(\$q, \$filter, [
            'f.name',
            'f.description',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function addSearchCommandWhereClause(\$q, \$filter)
    {
        list(\$expr, \$standardSearchParameters) = \$this->addStandardSearchCommandWhereClause(\$q, \$filter);
        if (\$expr) {
            return [\$expr, \$standardSearchParameters];
        }

        \$command         = \$filter->command;
        \$unique          = \$this->generateRandomParameterName();
        \$parameters      = [];
        \$returnParameter = false; //returning a parameter that is not used will lead to a Doctrine error

        switch (\$command) {
            case \$this->translator->trans('mautic.form.form.searchcommand.isexpired'):
            case \$this->translator->trans('mautic.form.form.searchcommand.isexpired', [], null, 'en_US'):
                \$expr = \$q->expr()->andX(
                    \$q->expr()->eq('f.isPublished', \":\$unique\"),
                    \$q->expr()->isNotNull('f.publishDown'),
                    \$q->expr()->neq('f.publishDown', \$q->expr()->literal('')),
                    \$q->expr()->lt('f.publishDown', 'CURRENT_TIMESTAMP()')
                );
                \$forceParameters = [\$unique => true];
                break;
            case \$this->translator->trans('mautic.form.form.searchcommand.ispending'):
            case \$this->translator->trans('mautic.form.form.searchcommand.ispending', [], null, 'en_US'):
                \$expr = \$q->expr()->andX(
                    \$q->expr()->eq('f.isPublished', \":\$unique\"),
                    \$q->expr()->isNotNull('f.publishUp'),
                    \$q->expr()->neq('f.publishUp', \$q->expr()->literal('')),
                    \$q->expr()->gt('f.publishUp', 'CURRENT_TIMESTAMP()')
                );
                \$forceParameters = [\$unique => true];
                break;
            case \$this->translator->trans('mautic.form.form.searchcommand.hasresults'):
            case \$this->translator->trans('mautic.form.form.searchcommand.hasresults', [], null, 'en_US'):
                \$sq       = \$this->getEntityManager()->createQueryBuilder();
                \$subquery = \$sq->select('count(s.id)')
                    ->from('MauticFormBundle:Submission', 's')
                    ->leftJoin('MauticFormBundle:Form', 'f2',
                        Join::WITH,
                        \$sq->expr()->eq('s.form', 'f2')
                    )
                    ->where(
                        \$q->expr()->eq('s.form', 'f')
                    )
                    ->getDql();
                \$expr = \$q->expr()->gt(sprintf('(%s)', \$subquery), 1);
                break;
            case \$this->translator->trans('mautic.core.searchcommand.name'):
            case \$this->translator->trans('mautic.core.searchcommand.name', [], null, 'en_US'):
                \$expr            = \$q->expr()->like('f.name', ':'.\$unique);
                \$returnParameter = true;
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

        return [
            \$expr,
            \$parameters,
        ];
    }

    /**
     * Fetch the form results.
     *
     * @return array
     *
     * @throws \\Doctrine\\ORM\\NoResultException
     * @throws \\Doctrine\\ORM\\NonUniqueResultException
     */
    public function getFormResults(Form \$form, array \$options = [])
    {
        \$query = \$this->_em->getConnection()->createQueryBuilder();

        \$query->from(MAUTIC_TABLE_PREFIX.'form_submissions', 'fs')
            ->select('fr.*')
            ->leftJoin('fs', \$this->getResultsTableName(\$form->getId(), \$form->getAlias()), 'fr', 'fr.submission_id = fs.id')
            ->where('fs.form_id = :formId')
            ->setParameter('formId', \$form->getId());

        if (!empty(\$options['leadId'])) {
            \$query->andWhere('fs.lead_id = '.(int) \$options['leadId']);
        }

        if (!empty(\$options['formId'])) {
            \$query->andWhere(\$query->expr()->eq('fs.form_id', ':id'))
            ->setParameter('id', \$options['formId']);
        }

        if (!empty(\$options['limit'])) {
            \$query->setMaxResults((int) \$options['limit']);
        }

        return \$query->execute()->fetchAll();
    }

    /**
     * Compile and return the form result table name.
     *
     * @param int    \$formId
     * @param string \$formAlias
     *
     * @return string
     */
    public function getResultsTableName(\$formId, \$formAlias)
    {
        return MAUTIC_TABLE_PREFIX.'form_results_'.\$formId.'_'.\$formAlias;
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
            'mautic.form.form.searchcommand.isexpired',
            'mautic.form.form.searchcommand.ispending',
            'mautic.form.form.searchcommand.hasresults',
            'mautic.core.searchcommand.category',
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
            ['f.name', 'ASC'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getTableAlias()
    {
        return 'f';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Entity/FormRepository.php";
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
        return new Source("", "@bundles/FormBundle/Entity/FormRepository.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Entity/FormRepository.php");
    }
}