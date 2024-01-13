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

/* @bundles/PointBundle/Model/TriggerEventModel.php */
class __TwigTemplate_6ee1300104bcccbc29b33f69b5346ebb9b8fa2eca5b704e92a8471fea3cf54f1 extends Template
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

namespace Mautic\\PointBundle\\Model;

use Mautic\\CoreBundle\\Model\\FormModel as CommonFormModel;
use Mautic\\PointBundle\\Entity\\TriggerEvent;
use Mautic\\PointBundle\\Entity\\TriggerEventRepository;
use Mautic\\PointBundle\\Form\\Type\\TriggerEventType;
use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;

class TriggerEventModel extends CommonFormModel
{
    /**
     * {@inheritdoc}
     *
     * @return TriggerEventRepository
     */
    public function getRepository()
    {
        return \$this->em->getRepository('MauticPointBundle:TriggerEvent');
    }

    /**
     * {@inheritdoc}
     */
    public function getPermissionBase()
    {
        return 'point:triggers';
    }

    /**
     * {@inheritdoc}
     *
     * @return TriggerEvent|null
     */
    public function getEntity(\$id = null)
    {
        if (null === \$id) {
            return new TriggerEvent();
        }

        return parent::getEntity(\$id);
    }

    /**
     * {@inheritdoc}
     *
     * @throws MethodNotAllowedHttpException
     */
    public function createForm(\$entity, \$formFactory, \$action = null, \$options = [])
    {
        if (!\$entity instanceof TriggerEvent) {
            throw new MethodNotAllowedHttpException(['Trigger']);
        }

        if (!empty(\$action)) {
            \$options['action'] = \$action;
        }

        return \$formFactory->create(TriggerEventType::class, \$entity, \$options);
    }

    /**
     * Get segments which are dependent on given segment.
     *
     * @param int \$segmentId
     *
     * @return array
     */
    public function getReportIdsWithDependenciesOnSegment(\$segmentId)
    {
        \$filter = [
            'force'  => [
                ['column' => 'e.type', 'expr' => 'eq', 'value'=>'lead.changelists'],
            ],
        ];
        \$entities = \$this->getEntities(
            [
                'filter'     => \$filter,
            ]
        );
        \$dependents = [];
        foreach (\$entities as \$entity) {
            \$retrFilters = \$entity->getProperties();
            foreach (\$retrFilters as \$eachFilter) {
                if (in_array(\$segmentId, \$eachFilter)) {
                    \$dependents[] = \$entity->getTrigger()->getId();
                }
            }
        }

        return \$dependents;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Model/TriggerEventModel.php";
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
        return new Source("", "@bundles/PointBundle/Model/TriggerEventModel.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Model/TriggerEventModel.php");
    }
}
