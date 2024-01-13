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

/* @bundles/FormBundle/Model/ActionModel.php */
class __TwigTemplate_b0f88237793a2d5f51680df264b38db6166094c4bc3b378f255db6b7fe27136b extends Template
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

namespace Mautic\\FormBundle\\Model;

use Mautic\\CoreBundle\\Model\\FormModel as CommonFormModel;
use Mautic\\FormBundle\\Entity\\Action;
use Mautic\\FormBundle\\Form\\Type\\ActionType;

/**
 * Class ActionModel.
 */
class ActionModel extends CommonFormModel
{
    /**
     * {@inheritdoc}
     *
     * @return \\Mautic\\FormBundle\\Entity\\ActionRepository
     */
    public function getRepository()
    {
        return \$this->em->getRepository('MauticFormBundle:Action');
    }

    /**
     * {@inheritdoc}
     */
    public function getPermissionBase()
    {
        return 'form:forms';
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity(\$id = null)
    {
        if (null === \$id) {
            return new Action();
        }

        return parent::getEntity(\$id);
    }

    /**
     * @param object                              \$entity
     * @param \\Symfony\\Component\\Form\\FormFactory \$formFactory
     * @param null                                \$action
     * @param array                               \$options
     */
    public function createForm(\$entity, \$formFactory, \$action = null, \$options = [])
    {
        if (!\$entity instanceof Action) {
            throw new \\InvalidArgumentException('Entity must be of class Action');
        }

        if (\$action) {
            \$options['action'] = \$action;
        }

        if (empty(\$options['formId']) && null !== \$entity->getForm()) {
            \$options['formId'] = \$entity->getForm()->getId();
        }

        return \$formFactory->create(ActionType::class, \$entity->convertToArray(), \$options);
    }

    /**
     * Get segments which are dependent on given segment.
     *
     * @param int \$segmentId
     *
     * @return array
     */
    public function getFormsIdsWithDependenciesOnSegment(\$segmentId)
    {
        \$filter = [
            'force'  => [
                ['column' => 'e.type', 'expr' => 'LIKE', 'value'=>'lead.changelist'],
            ],
        ];
        \$entities = \$this->getEntities(
            [
                'filter'     => \$filter,
            ]
        );
        \$dependents = [];
        foreach (\$entities as \$entity) {
            \$properties = \$entity->getProperties();
            foreach (\$properties as \$property) {
                if (in_array(\$segmentId, \$property)) {
                    \$dependents[] = \$entity->getForm()->getId();
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
        return "@bundles/FormBundle/Model/ActionModel.php";
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
        return new Source("", "@bundles/FormBundle/Model/ActionModel.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Model/ActionModel.php");
    }
}
