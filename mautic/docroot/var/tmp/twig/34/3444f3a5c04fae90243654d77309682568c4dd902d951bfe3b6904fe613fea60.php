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

/* @bundles/LeadBundle/Controller/TimelineController.php */
class __TwigTemplate_80fe055cf8b1a04e9f1b145b1ff21470ca037cea77f6c1678a061bfe38dbb936 extends Template
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

class TimelineController extends CommonController
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
            \$session->set('mautic.lead.'.\$leadId.'.timeline.filters', \$filters);
        } else {
            \$filters = null;
        }

        \$order = [
            \$session->get('mautic.lead.'.\$leadId.'.timeline.orderby'),
            \$session->get('mautic.lead.'.\$leadId.'.timeline.orderbydir'),
        ];

        \$events = \$this->getEngagements(\$lead, \$filters, \$order, \$page);

        return \$this->delegateView(
            [
                'viewParameters' => [
                    'lead'   => \$lead,
                    'page'   => \$page,
                    'events' => \$events,
                ],
                'passthroughVars' => [
                    'route'         => false,
                    'mauticContent' => 'leadTimeline',
                    'timelineCount' => \$events['total'],
                ],
                'contentTemplate' => 'MauticLeadBundle:Timeline:list.html.php',
            ]
        );
    }

    public function pluginIndexAction(Request \$request, \$integration, \$page = 1)
    {
        \$limit = 25;
        \$leads = \$this->checkAllAccess('view', \$limit);

        if (\$leads instanceof Response) {
            return \$leads;
        }

        \$this->setListFilters();

        \$session = \$this->get('session');
        if ('POST' === \$request->getMethod() && \$request->request->has('search')) {
            \$filters = [
                'search'        => InputHelper::clean(\$request->request->get('search')),
                'includeEvents' => InputHelper::clean(\$request->request->get('includeEvents', [])),
                'excludeEvents' => InputHelper::clean(\$request->request->get('excludeEvents', [])),
            ];
            \$session->set('mautic.plugin.timeline.filters', \$filters);
        } else {
            \$filters = null;
        }

        \$order = [
            \$session->get('mautic.plugin.timeline.orderby'),
            \$session->get('mautic.plugin.timeline.orderbydir'),
        ];

        // get all events grouped by lead
        \$events = \$this->getAllEngagements(\$leads, \$filters, \$order, \$page, \$limit);

        \$str = \$this->request->server->get('QUERY_STRING');
        parse_str(\$str, \$query);

        \$tmpl = 'table';
        if (array_key_exists('from', \$query) && 'iframe' === \$query['from']) {
            \$tmpl = 'list';
        }
        if (array_key_exists('tmpl', \$query)) {
            \$tmpl = \$query['tmpl'];
        }

        return \$this->delegateView(
            [
                'viewParameters' => [
                    'leads'       => \$leads,
                    'page'        => \$page,
                    'events'      => \$events,
                    'integration' => \$integration,
                    'tmpl'        => (!\$this->request->isXmlHttpRequest()) ? 'index' : '',
                    'newCount'    => (array_key_exists('count', \$query) && \$query['count']) ? \$query['count'] : 0,
                ],
                'passthroughVars' => [
                    'route'         => false,
                    'mauticContent' => 'pluginTimeline',
                    'timelineCount' => \$events['total'],
                ],
                'contentTemplate' => sprintf('MauticLeadBundle:Timeline:plugin_%s.html.php', \$tmpl),
            ]
        );
    }

    public function pluginViewAction(Request \$request, \$integration, \$leadId, \$page = 1)
    {
        if (empty(\$leadId)) {
            return \$this->notFound();
        }

        \$lead = \$this->checkLeadAccess(\$leadId, 'view', true, \$integration);
        if (\$lead instanceof Response) {
            return \$lead;
        }

        \$this->setListFilters();

        \$session = \$this->get('session');
        if ('POST' === \$request->getMethod() && \$request->request->has('search')) {
            \$filters = [
                'search'        => InputHelper::clean(\$request->request->get('search')),
                'includeEvents' => InputHelper::clean(\$request->request->get('includeEvents', [])),
                'excludeEvents' => InputHelper::clean(\$request->request->get('excludeEvents', [])),
            ];
            \$session->set('mautic.plugin.timeline.'.\$leadId.'.filters', \$filters);
        } else {
            \$filters = null;
        }

        \$order = [
            \$session->get('mautic.plugin.timeline.'.\$leadId.'.orderby'),
            \$session->get('mautic.plugin.timeline.'.\$leadId.'.orderbydir'),
        ];

        \$events = \$this->getEngagements(\$lead, \$filters, \$order, \$page);

        \$str = \$this->request->server->get('QUERY_STRING');
        parse_str(\$str, \$query);

        \$tmpl = 'table';
        if (array_key_exists('from', \$query) && 'iframe' === \$query['from']) {
            \$tmpl = 'list';
        }
        if (array_key_exists('tmpl', \$query)) {
            \$tmpl = \$query['tmpl'];
        }

        return \$this->delegateView(
            [
                'viewParameters' => [
                    'lead'        => \$lead,
                    'page'        => \$page,
                    'integration' => \$integration,
                    'events'      => \$events,
                    'newCount'    => (array_key_exists('count', \$query) && \$query['count']) ? \$query['count'] : 0,
                ],
                'passthroughVars' => [
                    'route'         => false,
                    'mauticContent' => 'pluginTimeline',
                    'timelineCount' => \$events['total'],
                ],
                'contentTemplate' => sprintf('MauticLeadBundle:Timeline:plugin_%s.html.php', \$tmpl),
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
            \$session->set('mautic.lead.'.\$leadId.'.timeline.filters', \$filters);
        } else {
            \$filters = null;
        }

        \$order = [
            \$session->get('mautic.lead.'.\$leadId.'.timeline.orderby'),
            \$session->get('mautic.lead.'.\$leadId.'.timeline.orderbydir'),
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

        \$results    = \$this->getEngagements(\$lead, \$filters, \$order, 1, 200);
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

            \$items = \$this->getEngagements(\$lead, \$filters, \$order, \$loop + 1, 200);

            \$this->getDoctrine()->getManager()->clear();

            ++\$loop;
        }

        return \$this->exportResultsAs(\$toExport, \$dataType, 'contact_timeline');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Controller/TimelineController.php";
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
        return new Source("", "@bundles/LeadBundle/Controller/TimelineController.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Controller/TimelineController.php");
    }
}
