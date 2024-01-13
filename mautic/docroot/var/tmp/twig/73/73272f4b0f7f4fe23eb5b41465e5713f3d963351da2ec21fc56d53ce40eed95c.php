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

/* @bundles/ReportBundle/Controller/Api/ReportApiController.php */
class __TwigTemplate_4c8c267e2b3785fbbf669dd7ef219c4a2d87d96e9d7ee799d112b8ccac752420 extends Template
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

namespace Mautic\\ReportBundle\\Controller\\Api;

use DateTimeImmutable;
use DateTimeZone;
use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\ReportBundle\\Entity\\Report;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

class ReportApiController extends CommonApiController
{
    /**
     * @var FormFactoryInterface
     */
    private \$formFactory;

    /**
     * {@inheritdoc}
     */
    public function initialize(FilterControllerEvent \$event)
    {
        \$this->model            = \$this->getModel('report');
        \$this->entityClass      = Report::class;
        \$this->entityNameOne    = 'report';
        \$this->entityNameMulti  = 'reports';
        \$this->serializerGroups = ['reportList', 'reportDetails'];
        \$this->formFactory      = \$this->container->get('form.factory');

        parent::initialize(\$event);
    }

    /**
     * Obtains a compiled report.
     *
     * @param int \$id Report ID
     *
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function getReportAction(\$id)
    {
        \$entity = \$this->model->getEntity(\$id);

        if (!\$entity instanceof \$this->entityClass) {
            return \$this->notFound();
        }

        \$reportData = \$this->model->getReportData(\$entity, \$this->formFactory, \$this->getOptionsFromRequest());

        // Unset keys that we don't need to send back
        foreach (['graphs', 'contentTemplate', 'columns'] as \$key) {
            unset(\$reportData[\$key]);
        }

        return \$this->handleView(
            \$this->view(\$reportData, Response::HTTP_OK)
        );
    }

    /**
     * This method is careful to add new options from the request to keep BC.
     * It originally loaded all rows without any filter or pagination applied.
     *
     * @return array
     */
    private function getOptionsFromRequest()
    {
        \$options = ['paginate'=> false, 'ignoreGraphData' => true];

        if (\$this->request->query->has('dateFrom')) {
            \$options['dateFrom'] = new DateTimeImmutable(\$this->request->query->get('dateFrom'), new DateTimeZone('UTC'));
        }

        if (\$this->request->query->has('dateTo')) {
            \$options['dateTo']   = new DateTimeImmutable(\$this->request->query->get('dateTo'), new DateTimeZone('UTC'));
        }

        if (\$this->request->query->has('page')) {
            \$options['page']     = \$this->request->query->getInt('page');
            \$options['paginate'] = true;
        }

        if (\$this->request->query->has('limit')) {
            \$options['limit']    = \$this->request->query->getInt('limit');
            \$options['paginate'] = true;
        }

        return \$options;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Controller/Api/ReportApiController.php";
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
        return new Source("", "@bundles/ReportBundle/Controller/Api/ReportApiController.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Controller/Api/ReportApiController.php");
    }
}
