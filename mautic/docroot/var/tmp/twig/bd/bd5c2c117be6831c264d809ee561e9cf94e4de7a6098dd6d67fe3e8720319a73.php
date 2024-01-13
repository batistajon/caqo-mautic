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

/* @bundles/DashboardBundle/Controller/AjaxController.php */
class __TwigTemplate_0ad04525024c0481048129698185c1a29dbd77821676af66c1d7554f9c0846c7 extends Template
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

namespace Mautic\\DashboardBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\DashboardBundle\\Entity\\Widget;
use Mautic\\DashboardBundle\\Form\\Type\\WidgetType;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Class AjaxController.
 */
class AjaxController extends CommonAjaxController
{
    /**
     * Count how many visitors are currently viewing a page.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function viewingVisitorsAction(Request \$request)
    {
        \$dataArray = ['success' => 0];

        /** @var \\Mautic\\PageBundle\\Entity\\PageRepository \$pageRepository */
        \$pageRepository               = \$this->get('doctrine.orm.entity_manager')->getRepository('MauticPageBundle:Hit');
        \$dataArray['viewingVisitors'] = \$pageRepository->countVisitors(60, true);

        \$dataArray['success'] = 1;

        return \$this->sendJsonResponse(\$dataArray);
    }

    /**
     * Returns HTML of a new widget based on its values.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function updateWidgetFormAction(Request \$request)
    {
        \$data      = \$request->request->get('widget');
        \$dataArray = ['success' => 0];

        // Clear params if type is not selected
        if (empty(\$data['type'])) {
            unset(\$data['params']);
        }

        \$widget   = new Widget();
        \$form     = \$this->get('form.factory')->create(WidgetType::class, \$widget);
        \$formHtml = \$this->render('MauticDashboardBundle::Widget\\\\form.html.php',
            ['form' => \$form->submit(\$data)->createView()]
        )->getContent();

        \$dataArray['formHtml'] = \$formHtml;
        \$dataArray['success']  = 1;

        return \$this->sendJsonResponse(\$dataArray);
    }

    /**
     * Saves the new ordering of dashboard widgets.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    protected function updateWidgetOrderingAction(Request \$request)
    {
        \$data = \$request->request->get('ordering');
        \$repo = \$this->getModel('dashboard')->getRepository();
        \$repo->updateOrdering(array_flip(\$data), \$this->user->getId());
        \$dataArray = ['success' => 1];

        return \$this->sendJsonResponse(\$dataArray);
    }

    /**
     * Deletes the entity.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function deleteAction(Request \$request)
    {
        \$objectId  = \$request->request->get('widget');
        \$dataArray = ['success' => 0];

        // @todo: build permissions
        // if (!\$this->get('mautic.security')->isGranted('dashobard:widgets:delete')) {
        //     return \$this->accessDenied();
        // }

        /** @var \\Mautic\\DashboardBundle\\Model\\DashboardModel \$model */
        \$model  = \$this->getModel('dashboard');
        \$entity = \$model->getEntity(\$objectId);
        if (\$entity) {
            \$model->deleteEntity(\$entity);
            \$name                 = \$entity->getName();
            \$dataArray['success'] = 1;
        }

        return \$this->sendJsonResponse(\$dataArray);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/DashboardBundle/Controller/AjaxController.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Controller/AjaxController.php");
    }
}
