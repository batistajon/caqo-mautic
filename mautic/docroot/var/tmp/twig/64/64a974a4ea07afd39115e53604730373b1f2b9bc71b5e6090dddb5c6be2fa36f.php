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

/* @bundles/StageBundle/Model/StageModel.php */
class __TwigTemplate_7f141f419a8a0ded3857c0ab677aff757f94a0854b1dd47432afb297f9f6c421 extends Template
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

namespace Mautic\\StageBundle\\Model;

use Mautic\\CoreBundle\\Helper\\Chart\\ChartQuery;
use Mautic\\CoreBundle\\Helper\\Chart\\LineChart;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Model\\FormModel as CommonFormModel;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\StageBundle\\Entity\\Stage;
use Mautic\\StageBundle\\Event\\StageBuilderEvent;
use Mautic\\StageBundle\\Event\\StageEvent;
use Mautic\\StageBundle\\Form\\Type\\StageType;
use Mautic\\StageBundle\\StageEvents;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;

/**
 * Class StageModel.
 */
class StageModel extends CommonFormModel
{
    /**
     * @var Session
     */
    protected \$session;

    /**
     * @var LeadModel
     */
    protected \$leadModel;

    /**
     * @var UserHelper
     */
    protected \$userHelper;

    public function __construct(LeadModel \$leadModel, Session \$session, UserHelper \$userHelper)
    {
        \$this->session    = \$session;
        \$this->leadModel  = \$leadModel;
        \$this->userHelper = \$userHelper;
    }

    /**
     * {@inheritdoc}
     *
     * @return \\Mautic\\StageBundle\\Entity\\StageRepository
     */
    public function getRepository()
    {
        return \$this->em->getRepository('MauticStageBundle:Stage');
    }

    /**
     * {@inheritdoc}
     */
    public function getPermissionBase()
    {
        return 'stage:stages';
    }

    /**
     * {@inheritdoc}
     *
     * @throws MethodNotAllowedHttpException
     */
    public function createForm(\$entity, \$formFactory, \$action = null, \$options = [])
    {
        if (!\$entity instanceof Stage) {
            throw new MethodNotAllowedHttpException(['Stage']);
        }
        if (!empty(\$action)) {
            \$options['action'] = \$action;
        }

        return \$formFactory->create(StageType::class, \$entity, \$options);
    }

    /**
     * {@inheritdoc}
     *
     * @return Stage|null
     */
    public function getEntity(\$id = null)
    {
        if (null === \$id) {
            return new Stage();
        }

        return parent::getEntity(\$id);
    }

    /**
     * {@inheritdoc}
     *
     * @throws MethodNotAllowedHttpException
     */
    protected function dispatchEvent(\$action, &\$entity, \$isNew = false, Event \$event = null)
    {
        if (!\$entity instanceof Stage) {
            throw new MethodNotAllowedHttpException(['Stage']);
        }

        switch (\$action) {
            case 'pre_save':
                \$name = StageEvents::STAGE_PRE_SAVE;
                break;
            case 'post_save':
                \$name = StageEvents::STAGE_POST_SAVE;
                break;
            case 'pre_delete':
                \$name = StageEvents::STAGE_PRE_DELETE;
                break;
            case 'post_delete':
                \$name = StageEvents::STAGE_POST_DELETE;
                break;
            default:
                return null;
        }

        if (\$this->dispatcher->hasListeners(\$name)) {
            if (empty(\$event)) {
                \$event = new StageEvent(\$entity, \$isNew);
                \$event->setEntityManager(\$this->em);
            }

            \$this->dispatcher->dispatch(\$name, \$event);

            return \$event;
        }

        return null;
    }

    /**
     * Gets array of custom actions from bundles subscribed StageEvents::STAGE_ON_BUILD.
     *
     * @return mixed
     */
    public function getStageActions()
    {
        static \$actions;

        if (empty(\$actions)) {
            //build them
            \$actions = [];
            \$event   = new StageBuilderEvent(\$this->translator);
            \$this->dispatcher->dispatch(StageEvents::STAGE_ON_BUILD, \$event);
            \$actions['actions'] = \$event->getActions();
            \$actions['list']    = \$event->getActionList();
            \$actions['choices'] = \$event->getActionChoices();
        }

        return \$actions;
    }

    /**
     * Get line chart data of stages.
     *
     * @param char     \$unit          {@link php.net/manual/en/function.date.php#refsect1-function.date-parameters}
     * @param DateTime \$dateFrom
     * @param DateTime \$dateTo
     * @param string   \$dateFormat
     * @param array    \$filter
     * @param bool     \$canViewOthers
     *
     * @return array
     */
    public function getStageLineChartData(\$unit, \\DateTime \$dateFrom, \\DateTime \$dateTo, \$dateFormat = null, \$filter = [], \$canViewOthers = true)
    {
        \$chart = new LineChart(\$unit, \$dateFrom, \$dateTo, \$dateFormat);
        \$query = new ChartQuery(\$this->em->getConnection(), \$dateFrom, \$dateTo);
        \$q     = \$query->prepareTimeDataQuery('lead_stages_change_log', 'date_added', \$filter);

        if (!\$canViewOthers) {
            \$q->join('t', MAUTIC_TABLE_PREFIX.'leads', 'l', 'l.id = t.lead_id')
                ->andWhere('l.owner_id = :userId')
                ->setParameter('userId', \$this->userHelper->getUser()->getId());
        }

        \$data = \$query->loadAndBuildTimeData(\$q);
        \$chart->setDataset(\$this->translator->trans('mautic.stage.changes'), \$data);

        return \$chart->render();
    }

    /**
     * @return array
     */
    public function getUserStages()
    {
        \$user = (!\$this->security->isGranted('stage:stages:viewother')) ?
            \$this->userHelper->getUser() : false;

        return \$this->getRepository()->getStages(\$user);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StageBundle/Model/StageModel.php";
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
        return new Source("", "@bundles/StageBundle/Model/StageModel.php", "/var/www/html/mautic/docroot/app/bundles/StageBundle/Model/StageModel.php");
    }
}
