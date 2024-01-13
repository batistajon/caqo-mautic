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

/* @bundles/PointBundle/Entity/TriggerEventRepository.php */
class __TwigTemplate_b215002680e32327a5bcbffac382db9b14b5c3903a0dce4bcbd188cb5442faf5 extends Template
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

class TriggerEventRepository extends CommonRepository
{
    /**
     * Get array of published triggers based on point total.
     *
     * @param int \$points
     *
     * @return array
     */
    public function getPublishedByPointTotal(\$points)
    {
        \$q = \$this->createQueryBuilder('a')
            ->select('partial a.{id, type, name, properties}, partial r.{id, name, points, color}')
            ->leftJoin('a.trigger', 'r')
            ->orderBy('a.order');

        //make sure the published up and down dates are good
        \$expr = \$this->getPublishedByDateExpression(\$q, 'r');

        \$expr->add(
            \$q->expr()->lte('r.points', (int) \$points)
        );

        \$q->where(\$expr);

        return \$q->getQuery()->getArrayResult();
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
        \$q = \$this->createQueryBuilder('e')
            ->select('partial e.{id, type, name, properties}, partial t.{id, name, points, color}')
            ->join('e.trigger', 't')
            ->orderBy('e.order');

        //make sure the published up and down dates are good
        \$expr = \$this->getPublishedByDateExpression(\$q);
        \$expr->add(
            \$q->expr()->eq('e.type', ':type')
        );
        \$q->where(\$expr)
            ->setParameter('type', \$type);

        return \$q->getQuery()->getResult();
    }

    /**
     * @param int \$leadId
     *
     * @return array
     */
    public function getLeadTriggeredEvents(\$leadId)
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder()
            ->select('e.*')
            ->from(MAUTIC_TABLE_PREFIX.'point_lead_event_log', 'x')
            ->innerJoin('x', MAUTIC_TABLE_PREFIX.'point_trigger_events', 'e', 'x.event_id = e.id')
            ->innerJoin('e', MAUTIC_TABLE_PREFIX.'point_triggers', 't', 'e.trigger_id = t.id');

        //make sure the published up and down dates are good
        \$q->where(\$q->expr()->eq('x.lead_id', (int) \$leadId));

        \$results = \$q->execute()->fetchAll();

        \$return = [];

        foreach (\$results as \$r) {
            \$return[\$r['id']] = \$r;
        }

        return \$return;
    }

    /**
     * @param int \$eventId
     *
     * @return array
     */
    public function getLeadsForEvent(\$eventId)
    {
        \$results = \$this->_em->getConnection()->createQueryBuilder()
            ->select('e.lead_id')
            ->from(MAUTIC_TABLE_PREFIX.'point_lead_event_log', 'e')
            ->where('e.event_id = '.(int) \$eventId)
            ->execute()
            ->fetchAll();

        \$return = [];

        foreach (\$results as \$r) {
            \$return[] = \$r['lead_id'];
        }

        return \$return;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Entity/TriggerEventRepository.php";
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
        return new Source("", "@bundles/PointBundle/Entity/TriggerEventRepository.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Entity/TriggerEventRepository.php");
    }
}
