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

/* @bundles/DashboardBundle/Dashboard/Widget.php */
class __TwigTemplate_6d6ac61456703fe9faef8ff1b167abf59d57bd3a358fe99455fc45712117202a extends Template
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

namespace Mautic\\DashboardBundle\\Dashboard;

use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\DashboardBundle\\Model\\DashboardModel;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;

class Widget
{
    public const FORMAT_HUMAN = 'M j, Y';
    public const FORMAT_MYSQL = 'Y-m-d';

    /**
     * @var DashboardModel
     */
    private \$dashboardModel;

    /**
     * @var UserHelper
     */
    private \$userHelper;

    /**
     * @var Session
     */
    private \$session;

    public function __construct(DashboardModel \$dashboardModel, UserHelper \$userHelper, Session \$session)
    {
        \$this->dashboardModel = \$dashboardModel;
        \$this->userHelper     = \$userHelper;
        \$this->session        = \$session;
    }

    /**
     * Get ready widget to populate in template.
     *
     * @return bool|\\Mautic\\DashboardBundle\\Entity\\Widget
     */
    public function get(int \$widgetId)
    {
        /** @var \\Mautic\\DashboardBundle\\Entity\\Widget \$widget */
        \$widget = \$this->dashboardModel->getEntity(\$widgetId);

        if (null === \$widget || !\$widget->getId()) {
            throw new NotFoundHttpException('Not found.');
        }

        if (\$widget->getCreatedBy() !== \$this->userHelper->getUser()->getId()) {
            // Unauthorized access
            throw new AccessDeniedException();
        }

        \$filter = \$this->dashboardModel->getDefaultFilter();

        \$this->dashboardModel->populateWidgetContent(\$widget, \$filter);

        return \$widget;
    }

    /**
     * Set filter from POST to session.
     *
     * @throws \\Exception
     */
    public function setFilter(Request \$request)
    {
        if (!\$request->isMethod(Request::METHOD_POST)) {
            return;
        }

        \$dateRangeFilter = \$request->get('daterange', []);

        if (!empty(\$dateRangeFilter['date_from'])) {
            \$from = new \\DateTime(\$dateRangeFilter['date_from']);
            \$this->session->set('mautic.daterange.form.from', \$from->format(self::FORMAT_MYSQL));
        }

        if (!empty(\$dateRangeFilter['date_to'])) {
            \$to = new \\DateTime(\$dateRangeFilter['date_to']);
            \$this->session->set('mautic.daterange.form.to', \$to->format(self::FORMAT_MYSQL));
        }

        \$this->dashboardModel->clearDashboardCache();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Dashboard/Widget.php";
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
        return new Source("", "@bundles/DashboardBundle/Dashboard/Widget.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Dashboard/Widget.php");
    }
}
