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

/* @bundles/StageBundle/Controller/Api/StageApiController.php */
class __TwigTemplate_d8328198fc4a949977a8d42f99f90315537de2f559ac0237f87bd53188fdaae0 extends Template
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

namespace Mautic\\StageBundle\\Controller\\Api;

use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\LeadBundle\\Controller\\LeadAccessTrait;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

/**
 * Class PointApiController.
 */
class StageApiController extends CommonApiController
{
    use LeadAccessTrait;

    /**
     * {@inheritdoc}
     */
    public function initialize(FilterControllerEvent \$event)
    {
        \$this->model            = \$this->getModel('stage');
        \$this->entityClass      = 'Mautic\\StageBundle\\Entity\\Stage';
        \$this->entityNameOne    = 'stage';
        \$this->entityNameMulti  = 'stages';
        \$this->serializerGroups = ['stageDetails', 'categoryList', 'publishDetails'];

        parent::initialize(\$event);
    }

    /**
     * Adds a contact to a list.
     *
     * @param int \$id        Stage ID
     * @param int \$contactId Lead ID
     *
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     *
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
     */
    public function addContactAction(\$id, \$contactId)
    {
        \$stage = \$this->model->getEntity(\$id);

        if (null === \$stage) {
            return \$this->notFound();
        }

        \$contact = \$this->checkLeadAccess(\$contactId, 'edit');

        if (\$contact instanceof Response) {
            return \$contact;
        }

        if (!\$this->security->isGranted('stage:stages:view')) {
            return \$this->accessDenied();
        }

        \$this->getModel('lead')->addToStages(\$contact, \$stage)->saveEntity(\$contact);

        return \$this->handleView(\$this->view(['success' => 1], Response::HTTP_OK));
    }

    /**
     * Removes given contact from a list.
     *
     * @param int \$id        Stage ID
     * @param int \$contactId Lead ID
     *
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     *
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
     */
    public function removeContactAction(\$id, \$contactId)
    {
        \$stage = \$this->model->getEntity(\$id);

        if (null === \$stage) {
            return \$this->notFound();
        }

        \$contact = \$this->checkLeadAccess(\$contactId, 'edit');

        if (\$contact instanceof Response) {
            return \$contact;
        }

        if (!\$this->security->isGranted('stage:stages:view')) {
            return \$this->accessDenied();
        }

        \$this->getModel('lead')->removeFromStages(\$contact, \$stage)->saveEntity(\$contact);

        return \$this->handleView(\$this->view(['success' => 1], Response::HTTP_OK));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StageBundle/Controller/Api/StageApiController.php";
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
        return new Source("", "@bundles/StageBundle/Controller/Api/StageApiController.php", "/var/www/html/mautic/docroot/app/bundles/StageBundle/Controller/Api/StageApiController.php");
    }
}
