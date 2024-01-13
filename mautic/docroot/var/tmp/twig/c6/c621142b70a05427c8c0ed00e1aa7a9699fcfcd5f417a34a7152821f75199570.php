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

/* @bundles/PointBundle/Entity/TriggerRepository.php */
class __TwigTemplate_6485c7b44ead0061c3ec1ac04d926e336db5a0c0f0b512f48ac2e6d59e541feb extends Template
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

class TriggerRepository extends CommonRepository
{
    /**
     * {@inheritdoc}
     */
    public function getEntities(array \$args = [])
    {
        \$q = \$this->_em
            ->createQueryBuilder()
            ->select(\$this->getTableAlias().', cat')
            ->from('MauticPointBundle:Trigger', \$this->getTableAlias())
            ->leftJoin(\$this->getTableAlias().'.category', 'cat');

        \$args['qb'] = \$q;

        return parent::getEntities(\$args);
    }

    /**
     * Get a list of published triggers with color and points.
     *
     * @return array
     */
    public function getTriggerColors()
    {
        \$q = \$this->_em->createQueryBuilder()
            ->select('partial t.{id, color, points}')
            ->from('MauticPointBundle:Trigger', 't', 't.id');

        \$q->where(\$this->getPublishedByDateExpression(\$q));

        \$q->orderBy('t.points', 'ASC');

        return \$q->getQuery()->getArrayResult();
    }

    /**
     * {@inheritdoc}
     */
    public function getTableAlias()
    {
        return 't';
    }

    /**
     * {@inheritdoc}
     */
    protected function addCatchAllWhereClause(\$q, \$filter)
    {
        return \$this->addStandardCatchAllWhereClause(\$q, \$filter, [
            't.name',
            't.description',
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
        return "@bundles/PointBundle/Entity/TriggerRepository.php";
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
        return new Source("", "@bundles/PointBundle/Entity/TriggerRepository.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Entity/TriggerRepository.php");
    }
}
