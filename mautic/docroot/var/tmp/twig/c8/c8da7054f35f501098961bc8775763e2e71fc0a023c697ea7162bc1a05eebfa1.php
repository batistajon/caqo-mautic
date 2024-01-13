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

/* @bundles/CoreBundle/Controller/Api/StatsApiController.php */
class __TwigTemplate_95140c2ae274a02da4fbc243df819b1a09351b12c7af97a35dab776f0dd1af5d extends Template
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

namespace Mautic\\CoreBundle\\Controller\\Api;

use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\StatsEvent;
use Mautic\\CoreBundle\\Helper\\InputHelper;

/**
 * Class StatsApiController.
 */
class StatsApiController extends CommonApiController
{
    /**
     * Lists stats for a database table.
     *
     * @param string \$table
     * @param string \$itemsName
     * @param array  \$order
     * @param array  \$where
     *
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function listAction(\$table = null, \$itemsName = 'stats', \$order = [], \$where = [], \$start = 0, \$limit = 100)
    {
        \$response = [];
        \$where    = InputHelper::cleanArray(empty(\$where) ? \$this->request->query->get('where', []) : \$where);
        \$order    = InputHelper::cleanArray(empty(\$order) ? \$this->request->query->get('order', []) : \$order);
        \$start    = (int) \$this->request->query->get('start', \$start);
        \$limit    = (int) \$this->request->query->get('limit', \$limit);

        // Ensure internal flag is not spoofed
        \$this->sanitizeWhereClauseArrayFromRequest(\$where);

        try {
            \$event = new StatsEvent(\$table, \$start, \$limit, \$order, \$where, \$this->get('mautic.helper.user')->getUser());
            \$this->get('event_dispatcher')->dispatch(CoreEvents::LIST_STATS, \$event);

            // Return available tables if no result was set
            if (!\$event->hasResults()) {
                \$response['availableTables'] = \$event->getTables();
                \$response['tableColumns']    = \$event->getTableColumns();
            } else {
                \$results              = \$event->getResults();
                \$response['total']    = \$results['total'];
                \$response[\$itemsName] = \$results['results'];
            }
        } catch (\\Exception \$e) {
            \$response['errors'] = [
                [
                    'message' => \$e->getMessage(),
                    'code'    => \$e->getCode(),
                ],
            ];
        }

        \$view = \$this->view(\$response);

        return \$this->handleView(\$view);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Controller/Api/StatsApiController.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/Api/StatsApiController.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Controller/Api/StatsApiController.php");
    }
}
