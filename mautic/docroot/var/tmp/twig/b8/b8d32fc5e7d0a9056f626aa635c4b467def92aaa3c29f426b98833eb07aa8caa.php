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

/* @bundles/PointBundle/Controller/TriggerEventController.php */
class __TwigTemplate_74d3a5066072fddf163ffebd6f5f617d2cca6eadaecc19166395cfe51128f417 extends Template
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

namespace Mautic\\PointBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\FormController as CommonFormController;
use Mautic\\PointBundle\\Entity\\TriggerEvent;
use Mautic\\PointBundle\\Form\\Type\\TriggerEventType;
use Symfony\\Component\\HttpFoundation\\JsonResponse;

/**
 * Class TriggerEventController.
 */
class TriggerEventController extends CommonFormController
{
    /**
     * Generates new form and processes post data.
     *
     * @return JsonResponse
     */
    public function newAction()
    {
        \$success = 0;
        \$valid   = \$cancelled   = false;
        \$method  = \$this->request->getMethod();
        \$session = \$this->get('session');

        if ('POST' == \$method) {
            \$triggerEvent = \$this->request->request->get('pointtriggerevent');
            \$eventType    = \$triggerEvent['type'];
            \$triggerId    = \$triggerEvent['triggerId'];
        } else {
            \$eventType = \$this->request->query->get('type');
            \$triggerId = \$this->request->query->get('triggerId');

            \$triggerEvent = [
                'type'      => \$eventType,
                'triggerId' => \$triggerId,
            ];
        }

        //ajax only for form fields
        if (!\$eventType ||
            !\$this->request->isXmlHttpRequest() ||
            !\$this->get('mautic.security')->isGranted([
                'point:triggers:edit',
                'point:triggers:create',
            ], 'MATCH_ONE')
        ) {
            return \$this->modalAccessDenied();
        }

        //fire the builder event
        \$events = \$this->getModel('point.trigger')->getEvents();
        \$form   = \$this->get('form.factory')->create(TriggerEventType::class, \$triggerEvent, [
            'action'   => \$this->generateUrl('mautic_pointtriggerevent_action', ['objectAction' => 'new']),
            'settings' => \$events[\$eventType],
        ]);
        \$form->get('triggerId')->setData(\$triggerId);
        \$triggerEvent['settings'] = \$events[\$eventType];

        //Check for a submitted form and process it
        if ('POST' == \$method) {
            if (!\$cancelled = \$this->isFormCancelled(\$form)) {
                if (\$valid = \$this->isFormValid(\$form)) {
                    \$success = 1;

                    //form is valid so process the data
                    \$keyId = 'new'.hash('sha1', uniqid(mt_rand()));

                    //save the properties to session
                    \$actions            = \$session->get('mautic.point.'.\$triggerId.'.triggerevents.modified');
                    \$formData           = \$form->getData();
                    \$triggerEvent       = array_merge(\$triggerEvent, \$formData);
                    \$triggerEvent['id'] = \$keyId;
                    if (empty(\$triggerEvent['name'])) {
                        //set it to the event default
                        \$triggerEvent['name'] = \$this->get('translator')->trans(\$triggerEvent['settings']['label']);
                    }
                    \$actions[\$keyId] = \$triggerEvent;
                    \$session->set('mautic.point.'.\$triggerId.'.triggerevents.modified', \$actions);
                }
            }
        }

        \$viewParams = ['type' => \$eventType];
        if (\$cancelled || \$valid) {
            \$closeModal = true;
        } else {
            \$form = (isset(\$triggerEvent['settings']['formTheme'])) ?
                \$this->setFormTheme(\$form, 'MauticPointBundle:Event:form.html.php', \$triggerEvent['settings']['formTheme']) :
                \$form->createView();

            \$closeModal                = false;
            \$viewParams['form']        = \$form;
            \$header                    = \$triggerEvent['settings']['label'];
            \$viewParams['eventHeader'] = \$this->get('translator')->trans(\$header);
        }

        \$passthroughVars = [
            'mauticContent' => 'pointTriggerEvent',
            'success'       => \$success,
            'route'         => false,
        ];

        if (!empty(\$keyId)) {
            //prevent undefined errors
            \$entity       = new TriggerEvent();
            \$blank        = \$entity->convertToArray();
            \$triggerEvent = array_merge(\$blank, \$triggerEvent);

            \$template = (empty(\$triggerEvent['settings']['template'])) ? 'MauticPointBundle:Event:generic.html.php'
                : \$triggerEvent['settings']['template'];

            \$passthroughVars['eventId']   = \$keyId;
            \$passthroughVars['eventHtml'] = \$this->renderView(\$template, [
                'event'     => \$triggerEvent,
                'id'        => \$keyId,
                'sessionId' => \$triggerId,
            ]);
        }

        if (\$closeModal) {
            //just close the modal
            \$passthroughVars['closeModal'] = 1;

            return new JsonResponse(\$passthroughVars);
        }

        return \$this->ajaxAction([
            'contentTemplate' => 'MauticPointBundle:Event:form.html.php',
            'viewParameters'  => \$viewParams,
            'passthroughVars' => \$passthroughVars,
        ]);
    }

    /**
     * Generates edit form and processes post data.
     *
     * @param int \$objectId
     *
     * @return JsonResponse
     */
    public function editAction(\$objectId)
    {
        \$session      = \$this->get('session');
        \$method       = \$this->request->getMethod();
        \$triggerEvent = \$this->request->request->get('pointtriggerevent', []);
        \$triggerId    = 'POST' === \$method ? (\$triggerEvent['triggerId'] ?? '') : \$this->request->query->get('triggerId');
        \$events       = \$session->get('mautic.point.'.\$triggerId.'.triggerevents.modified', []);
        \$success      = 0;
        \$valid        = \$cancelled = false;
        \$triggerEvent = array_key_exists(\$objectId, \$events) ? \$events[\$objectId] : null;

        if (null !== \$triggerEvent) {
            \$eventType                = \$triggerEvent['type'];
            \$events                   = \$this->getModel('point.trigger')->getEvents();
            \$triggerEvent['settings'] = \$events[\$eventType];

            //ajax only for form fields
            if (!\$eventType ||
                !\$this->request->isXmlHttpRequest() ||
                !\$this->get('mautic.security')->isGranted([
                    'point:triggers:edit',
                    'point:triggers:create',
                ], 'MATCH_ONE')
            ) {
                return \$this->modalAccessDenied();
            }

            \$form = \$this->get('form.factory')->create(TriggerEventType::class, \$triggerEvent, [
                'action'   => \$this->generateUrl('mautic_pointtriggerevent_action', ['objectAction' => 'edit', 'objectId' => \$objectId]),
                'settings' => \$triggerEvent['settings'],
            ]);
            \$form->get('triggerId')->setData(\$triggerId);
            //Check for a submitted form and process it
            if ('POST' == \$method) {
                if (!\$cancelled = \$this->isFormCancelled(\$form)) {
                    if (\$valid = \$this->isFormValid(\$form)) {
                        \$success = 1;

                        //form is valid so process the data

                        //save the properties to session
                        \$session  = \$this->get('session');
                        \$events   = \$session->get('mautic.point.'.\$triggerId.'.triggerevents.modified');
                        \$formData = \$form->getData();
                        //overwrite with updated data
                        \$triggerEvent = array_merge(\$events[\$objectId], \$formData);
                        if (empty(\$triggerEvent['name'])) {
                            //set it to the event default
                            \$triggerEvent['name'] = \$this->get('translator')->trans(\$triggerEvent['settings']['label']);
                        }
                        \$events[\$objectId] = \$triggerEvent;
                        \$session->set('mautic.point.'.\$triggerId.'.triggerevents.modified', \$events);

                        //generate HTML for the field
                        \$keyId = \$objectId;
                    }
                }
            }

            \$viewParams = ['type' => \$eventType];
            if (\$cancelled || \$valid) {
                \$closeModal = true;
            } else {
                \$form = (isset(\$triggerEvent['settings']['formTheme'])) ?
                    \$this->setFormTheme(\$form, 'MauticPointBundle:Event:form.html.php', \$triggerEvent['settings']['formTheme']) :
                    \$form->createView();

                \$closeModal                = false;
                \$viewParams['form']        = \$form;
                \$viewParams['eventHeader'] = \$this->get('translator')->trans(\$triggerEvent['settings']['label']);
            }

            \$passthroughVars = [
                'mauticContent' => 'pointTriggerEvent',
                'success'       => \$success,
                'route'         => false,
            ];

            if (!empty(\$keyId)) {
                \$passthroughVars['eventId'] = \$keyId;

                //prevent undefined errors
                \$entity       = new TriggerEvent();
                \$blank        = \$entity->convertToArray();
                \$triggerEvent = array_merge(\$blank, \$triggerEvent);
                \$template     = (empty(\$triggerEvent['settings']['template'])) ? 'MauticPointBundle:Event:generic.html.php'
                    : \$triggerEvent['settings']['template'];

                \$passthroughVars['eventId']   = \$keyId;
                \$passthroughVars['eventHtml'] = \$this->renderView(\$template, [
                    'event'     => \$triggerEvent,
                    'id'        => \$keyId,
                    'sessionId' => \$triggerId,
                ]);
            }

            if (\$closeModal) {
                //just close the modal
                \$passthroughVars['closeModal'] = 1;

                return new JsonResponse(\$passthroughVars);
            }

            return \$this->ajaxAction([
                'contentTemplate' => 'MauticPointBundle:Event:form.html.php',
                'viewParameters'  => \$viewParams,
                'passthroughVars' => \$passthroughVars,
            ]);
        }

        return new JsonResponse(['success' => 0]);
    }

    /**
     * Deletes the entity.
     *
     * @param int \$objectId
     *
     * @return JsonResponse
     */
    public function deleteAction(\$objectId)
    {
        \$session   = \$this->get('session');
        \$triggerId = \$this->request->get('triggerId');
        \$events    = \$session->get('mautic.point.'.\$triggerId.'.triggerevents.modified', []);
        \$delete    = \$session->get('mautic.point.'.\$triggerId.'.triggerevents.deleted', []);

        //ajax only for form fields
        if (!\$this->request->isXmlHttpRequest() ||
            !\$this->get('mautic.security')->isGranted([
                'point:triggers:edit',
                'point:triggers:create',
            ], 'MATCH_ONE')
        ) {
            return \$this->accessDenied();
        }

        \$triggerEvent = (array_key_exists(\$objectId, \$events)) ? \$events[\$objectId] : null;

        if ('POST' == \$this->request->getMethod() && null !== \$triggerEvent) {
            //add the field to the delete list
            if (!in_array(\$objectId, \$delete)) {
                \$delete[] = \$objectId;
                \$session->set('mautic.point.'.\$triggerId.'.triggerevents.deleted', \$delete);
            }

            \$template = (empty(\$triggerEvent['settings']['template'])) ? 'MauticPointBundle:Event:generic.html.php'
                : \$triggerEvent['settings']['template'];

            //prevent undefined errors
            \$entity       = new TriggerEvent();
            \$blank        = \$entity->convertToArray();
            \$triggerEvent = array_merge(\$blank, \$triggerEvent);

            \$dataArray = [
                'mauticContent' => 'pointTriggerEvent',
                'success'       => 1,
                'target'        => '#triggerEvent'.\$objectId,
                'route'         => false,
                'eventId'       => \$objectId,
                'eventHtml'     => \$this->renderView(\$template, [
                    'event'     => \$triggerEvent,
                    'id'        => \$objectId,
                    'deleted'   => true,
                    'sessionId' => \$triggerId,
                ]),
            ];
        } else {
            \$dataArray = ['success' => 0];
        }

        return new JsonResponse(\$dataArray);
    }

    /**
     * Undeletes the entity.
     *
     * @param int \$objectId
     *
     * @return JsonResponse
     */
    public function undeleteAction(\$objectId)
    {
        \$session   = \$this->get('session');
        \$triggerId = \$this->request->get('triggerId');
        \$events    = \$session->get('mautic.point.'.\$triggerId.'.triggerevents.modified', []);
        \$delete    = \$session->get('mautic.point.'.\$triggerId.'.triggerevents.deleted', []);

        //ajax only for form fields
        if (!\$this->request->isXmlHttpRequest() ||
            !\$this->get('mautic.security')->isGranted([
                'point:triggers:edit',
                'point:triggers:create',
            ], 'MATCH_ONE')
        ) {
            return \$this->accessDenied();
        }

        \$triggerEvent = (array_key_exists(\$objectId, \$events)) ? \$events[\$objectId] : null;

        if ('POST' == \$this->request->getMethod() && null !== \$triggerEvent) {
            //add the field to the delete list
            if (in_array(\$objectId, \$delete)) {
                \$key = array_search(\$objectId, \$delete);
                unset(\$delete[\$key]);
                \$session->set('mautic.point.'.\$triggerId.'.triggerevents.deleted', \$delete);
            }

            \$template = (empty(\$triggerEvent['settings']['template'])) ? 'MauticPointBundle:Event:generic.html.php'
                : \$triggerEvent['settings']['template'];

            //prevent undefined errors
            \$entity       = new TriggerEvent();
            \$blank        = \$entity->convertToArray();
            \$triggerEvent = array_merge(\$blank, \$triggerEvent);

            \$dataArray = [
                'mauticContent' => 'pointTriggerEvent',
                'success'       => 1,
                'target'        => '#triggerEvent'.\$objectId,
                'route'         => false,
                'eventId'       => \$objectId,
                'eventHtml'     => \$this->renderView(\$template, [
                    'event'     => \$triggerEvent,
                    'id'        => \$objectId,
                    'deleted'   => false,
                    'triggerId' => \$triggerId,
                ]),
            ];
        } else {
            \$dataArray = ['success' => 0];
        }

        return new JsonResponse(\$dataArray);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Controller/TriggerEventController.php";
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
        return new Source("", "@bundles/PointBundle/Controller/TriggerEventController.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Controller/TriggerEventController.php");
    }
}
