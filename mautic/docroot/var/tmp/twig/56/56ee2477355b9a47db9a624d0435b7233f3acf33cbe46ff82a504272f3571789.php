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

/* @bundles/LeadBundle/Controller/AuditlogController.php */
class __TwigTemplate_c903c80939df0410bedd31e3a0272eede7a138b8b05d7ed847bd436f24164813 extends Template
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

namespace Mautic\\LeadBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class AuditlogController extends CommonController
{
    use LeadAccessTrait;
    use LeadDetailsTrait;

    public function indexAction(Request \$request, \$leadId, \$page = 1)
    {
        if (empty(\$leadId)) {
            return \$this->accessDenied();
        }

        \$lead = \$this->checkLeadAccess(\$leadId, 'view');
        if (\$lead instanceof Response) {
            return \$lead;
        }

        \$this->setListFilters();

        \$session = \$this->get('session');
        if ('POST' == \$request->getMethod() && \$request->request->has('search')) {
            \$filters = [
                'search'        => InputHelper::clean(\$request->request->get('search')),
                'includeEvents' => InputHelper::clean(\$request->request->get('includeEvents', [])),
                'excludeEvents' => InputHelper::clean(\$request->request->get('excludeEvents', [])),
            ];
            \$session->set('mautic.lead.'.\$leadId.'.auditlog.filters', \$filters);
        } else {
            \$filters = null;
        }

        \$order = [
            \$session->get('mautic.lead.'.\$leadId.'.auditlog.orderby'),
            \$session->get('mautic.lead.'.\$leadId.'.auditlog.orderbydir'),
        ];

        \$events = \$this->getAuditlogs(\$lead, \$filters, \$order, \$page);

        return \$this->delegateView(
            [
                'viewParameters' => [
                    'lead'   => \$lead,
                    'page'   => \$page,
                    'events' => \$events,
                ],
                'passthroughVars' => [
                    'route'         => false,
                    'mauticContent' => 'leadAuditlog',
                    'auditLogCount' => \$events['total'],
                ],
                'contentTemplate' => 'MauticLeadBundle:Auditlog:list.html.php',
            ]
        );
    }

    /**
     * @return array|\\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse|\\Symfony\\Component\\HttpFoundation\\StreamedResponse
     */
    public function batchExportAction(Request \$request, \$leadId)
    {
        if (empty(\$leadId)) {
            return \$this->accessDenied();
        }

        \$lead = \$this->checkLeadAccess(\$leadId, 'view');
        if (\$lead instanceof Response) {
            return \$lead;
        }

        \$this->setListFilters();

        \$session = \$this->get('session');
        if ('POST' == \$request->getMethod() && \$request->request->has('search')) {
            \$filters = [
                'search'        => InputHelper::clean(\$request->request->get('search')),
                'includeEvents' => InputHelper::clean(\$request->request->get('includeEvents', [])),
                'excludeEvents' => InputHelper::clean(\$request->request->get('excludeEvents', [])),
            ];
            \$session->set('mautic.lead.'.\$leadId.'.auditlog.filters', \$filters);
        } else {
            \$filters = null;
        }

        \$order = [
            \$session->get('mautic.lead.'.\$leadId.'.auditlog.orderby'),
            \$session->get('mautic.lead.'.\$leadId.'.auditlog.orderbydir'),
        ];

        \$dataType = \$this->request->get('filetype', 'csv');

        \$resultsCallback = function (\$event) {
            \$eventLabel = (isset(\$event['eventLabel'])) ? \$event['eventLabel'] : \$event['eventType'];
            if (is_array(\$eventLabel)) {
                \$eventLabel = \$eventLabel['label'];
            }

            return [
                'eventName'      => \$eventLabel,
                'eventType'      => isset(\$event['eventType']) ? \$event['eventType'] : '',
                'eventTimestamp' => \$this->get('mautic.helper.template.date')->toText(\$event['timestamp'], 'local', 'Y-m-d H:i:s', true),
            ];
        };

        \$results    = \$this->getAuditlogs(\$lead, \$filters, \$order, 1, 200);
        \$count      = \$results['total'];
        \$items      = \$results['events'];
        \$iterations = ceil(\$count / 200);
        \$loop       = 1;

        // Max of 50 iterations for 10K result export
        if (\$iterations > 50) {
            \$iterations = 50;
        }

        \$toExport = [];

        while (\$loop <= \$iterations) {
            if (is_callable(\$resultsCallback)) {
                foreach (\$items as \$item) {
                    \$toExport[] = \$resultsCallback(\$item);
                }
            } else {
                foreach (\$items as \$item) {
                    \$toExport[] = (array) \$item;
                }
            }

            \$items = \$this->getAuditlogs(\$lead, \$filters, \$order, \$loop + 1, 200);

            \$this->getDoctrine()->getManager()->clear();

            ++\$loop;
        }

        return \$this->exportResultsAs(\$toExport, \$dataType, 'contact_auditlog');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Controller/AuditlogController.php";
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
        return new Source("", "@bundles/LeadBundle/Controller/AuditlogController.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Controller/AuditlogController.php");
    }
}
