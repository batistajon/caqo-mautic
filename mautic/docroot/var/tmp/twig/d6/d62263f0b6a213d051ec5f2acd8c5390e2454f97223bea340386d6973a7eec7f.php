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

/* @bundles/CalendarBundle/Controller/AjaxController.php */
class __TwigTemplate_02300b48de6f879430655a5af7442c4fbb285169a66cb14c03b8196190cf070f extends Template
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

namespace Mautic\\CalendarBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

/**
 * Class AjaxController.
 */
class AjaxController extends CommonAjaxController
{
    /**
     * Generates the calendar data.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    public function generateDataAction(Request \$request)
    {
        \$dates = [
            'start_date' => \$request->query->get('start'),
            'end_date'   => \$request->query->get('end'),
        ];

        /* @type \\Mautic\\CalendarBundle\\Model\\CalendarModel \$model */
        \$model  = \$this->getModel('calendar');
        \$events = \$model->getCalendarEvents(\$dates);

        \$this->checkEventPermissions(\$events);

        // Can't use \$this->sendJsonResponse, because it converts arrays to objects and Fullcalendar doesn't render events then.
        \$response = new Response();
        \$response->setContent(json_encode(\$events));
        \$response->headers->set('Content-Type', 'application/json');

        return \$response;
    }

    /**
     * Updates an event on dragging the event around the calendar.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    public function updateEventAction(Request \$request)
    {
        \$entityId  = \$request->request->get('entityId');
        \$source    = \$request->request->get('entityType');
        \$setter    = 'set'.\$request->request->get('setter');
        \$dateValue = new \\DateTime(\$request->request->get('startDate'));
        \$response  = ['success' => false];

        /* @type \\Mautic\\CalendarBundle\\Model\\CalendarModel \$model */
        \$calendarModel = \$this->getModel('calendar');
        \$event         = \$calendarModel->editCalendarEvent(\$source, \$entityId);

        \$model  = \$event->getModel();
        \$entity = \$event->getEntity();

        //not found
        if (null === \$entity) {
            \$this->addFlash('mautic.core.error.notfound', 'error');
        } elseif (!\$event->hasAccess()) {
            \$this->addFlash('mautic.core.error.accessdenied', 'error');
        } elseif (\$model->isLocked(\$entity)) {
            \$this->addFlash(
                'mautic.core.error.locked',
                [
                    '%name%'      => \$entity->getTitle(),
                    '%menu_link%' => 'mautic_'.\$source.'_index',
                    '%url%'       => \$this->generateUrl(
                        'mautic_'.\$source.'_action',
                        [
                            'objectAction' => 'edit',
                            'objectId'     => \$entity->getId(),
                        ]
                    ),
                ]
            );
        } elseif ('POST' == \$this->request->getMethod()) {
            \$entity->\$setter(\$dateValue);
            \$model->saveEntity(\$entity);
            \$response['success'] = true;

            \$this->addFlash(
                'mautic.core.notice.updated',
                [
                    '%name%'      => \$entity->getTitle(),
                    '%menu_link%' => 'mautic_'.\$source.'_index',
                    '%url%'       => \$this->generateUrl(
                        'mautic_'.\$source.'_action',
                        [
                            'objectAction' => 'edit',
                            'objectId'     => \$entity->getId(),
                        ]
                    ),
                ]
            );
        }

        //render flashes
        \$response['flashes'] = \$this->getFlashContent();

        return \$this->sendJsonResponse(\$response);
    }

    /**
     * @param \$events
     */
    public function checkEventPermissions(&\$events)
    {
        \$security     = \$this->get('mautic.security');
        \$modelFactory = \$this->get('mautic.model.factory');

        foreach (\$events as \$key => \$event) {
            //make sure the user has view access to the entities
            foreach (\$event as \$eventKey => \$eventValue) {
                if ('_id' === substr(\$eventKey, -3)) {
                    \$modelName = substr(\$eventKey, 0, -3);
                    if (\$modelFactory->hasModel(\$modelName)) {
                        \$model = \$modelFactory->getModel(\$modelName);
                        \$base  = \$model->getPermissionBase();
                        if (!\$security->isGranted([\$base.':viewown', \$base.':viewother'], 'MATCH_ONE')) {
                            unset(\$events[\$key]);
                        }
                    }

                    break;
                }
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CalendarBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/CalendarBundle/Controller/AjaxController.php", "/var/www/html/mautic/docroot/app/bundles/CalendarBundle/Controller/AjaxController.php");
    }
}
