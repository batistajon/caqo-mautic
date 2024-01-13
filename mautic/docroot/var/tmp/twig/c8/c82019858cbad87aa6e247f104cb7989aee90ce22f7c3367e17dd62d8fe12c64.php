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

/* @bundles/CampaignBundle/Controller/SourceController.php */
class __TwigTemplate_c47414cf807aa787079757c1faa33463e00b942f1219992109934fd4eb331ad7 extends Template
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

namespace Mautic\\CampaignBundle\\Controller;

use Mautic\\CampaignBundle\\Form\\Type\\CampaignLeadSourceType;
use Mautic\\CoreBundle\\Controller\\FormController as CommonFormController;
use Symfony\\Component\\HttpFoundation\\JsonResponse;

class SourceController extends CommonFormController
{
    private \$supportedSourceTypes = ['lists', 'forms'];

    /**
     * @param int \$objectId
     *
     * @return JsonResponse
     */
    public function newAction(\$objectId = 0)
    {
        \$success = 0;
        \$valid   = \$cancelled   = false;
        \$method  = \$this->request->getMethod();
        \$session = \$this->get('session');
        if ('POST' == \$method) {
            \$source     = \$this->request->request->get('campaign_leadsource');
            \$sourceType = \$source['sourceType'];
        } else {
            \$sourceType = \$this->request->query->get('sourceType');
            \$source     = [
                'sourceType' => \$sourceType,
            ];
        }

        //set the sourceType key for sources
        if (!in_array(\$sourceType, \$this->supportedSourceTypes)) {
            return \$this->modalAccessDenied();
        }

        //ajax only for form fields
        if (!\$this->request->isXmlHttpRequest()
            || !\$this->get('mautic.security')->isGranted(
                [
                    'campaign:campaigns:edit',
                    'campaign:campaigns:create',
                ],
                'MATCH_ONE'
            )
        ) {
            return \$this->modalAccessDenied();
        }

        \$sourceList = \$this->getModel('campaign')->getSourceLists(\$sourceType);
        \$form       = \$this->get('form.factory')->create(
            CampaignLeadSourceType::class,
            \$source,
            [
                'action'         => \$this->generateUrl('mautic_campaignsource_action', ['objectAction' => 'new', 'objectId' => \$objectId]),
                'source_choices' => \$sourceList,
            ]
        );

        //Check for a submitted form and process it
        if ('POST' == \$method) {
            if (!\$cancelled = \$this->isFormCancelled(\$form)) {
                if (\$valid = \$this->isFormValid(\$form)) {
                    \$success = 1;

                    \$modifiedSources              = \$session->get('mautic.campaign.'.\$objectId.'.leadsources.modified');
                    \$modifiedSources[\$sourceType] = array_flip(\$form[\$sourceType]->getData());
                    \$session->set('mautic.campaign.'.\$objectId.'.leadsources.modified', \$modifiedSources);
                } else {
                    \$success = 0;
                }
            }
        }

        \$passthroughVars = [
            'mauticContent' => 'campaignSource',
            'success'       => \$success,
            'route'         => false,
        ];

        if (\$cancelled || \$valid) {
            if (\$valid) {
                \$passthroughVars['sourceHtml'] = \$this->renderView(
                    'MauticCampaignBundle:Source:index.html.php',
                    [
                        'sourceType' => \$sourceType,
                        'campaignId' => \$objectId,
                        'names'      => implode(', ', array_intersect_key(\$sourceList, \$modifiedSources[\$sourceType])),
                    ]
                );
                \$passthroughVars['sourceType'] = \$sourceType;
            }

            //just close the modal
            \$passthroughVars['closeModal'] = 1;

            return new JsonResponse(\$passthroughVars);
        } else {
            \$viewParams = [
                'sourceType' => \$sourceType,
                'form'       => \$form->createView(),
            ];

            return \$this->ajaxAction(
                [
                    'contentTemplate' => 'MauticCampaignBundle:Source:form.html.php',
                    'viewParameters'  => \$viewParams,
                    'passthroughVars' => \$passthroughVars,
                ]
            );
        }
    }

    /**
     * @param \$objectId
     *
     * @return JsonResponse
     */
    public function editAction(\$objectId)
    {
        \$session         = \$this->get('session');
        \$method          = \$this->request->getMethod();
        \$modifiedSources = \$selectedSources = \$session->get('mautic.campaign.'.\$objectId.'.leadsources.modified', []);
        if ('POST' == \$method) {
            \$source     = \$this->request->request->get('campaign_leadsource');
            \$sourceType = \$source['sourceType'];
        } else {
            \$sourceType = \$this->request->query->get('sourceType');
            \$source     = [
                'sourceType' => \$sourceType,
                \$sourceType  => array_flip(\$selectedSources[\$sourceType]),
            ];
        }

        \$success = 0;
        \$valid   = \$cancelled   = false;

        if (!in_array(\$sourceType, \$this->supportedSourceTypes)) {
            return \$this->modalAccessDenied();
        }

        //ajax only for form fields
        if (!\$this->request->isXmlHttpRequest()
            || !\$this->get('mautic.security')->isGranted(
                [
                    'campaign:campaigns:edit',
                    'campaign:campaigns:create',
                ],
                'MATCH_ONE'
            )
        ) {
            return \$this->modalAccessDenied();
        }

        \$sourceList = \$this->getModel('campaign')->getSourceLists(\$sourceType);
        \$form       = \$this->get('form.factory')->create(
            CampaignLeadSourceType::class,
            \$source,
            [
                'action'         => \$this->generateUrl('mautic_campaignsource_action', ['objectAction' => 'edit', 'objectId' => \$objectId]),
                'source_choices' => \$sourceList,
            ]
        );

        //Check for a submitted form and process it
        if ('POST' == \$method) {
            if (!\$cancelled = \$this->isFormCancelled(\$form)) {
                if (\$valid = \$this->isFormValid(\$form)) {
                    \$success = 1;

                    //save the properties to session
                    \$modifiedSources[\$sourceType] = array_flip(\$form[\$sourceType]->getData());
                    \$session->set('mautic.campaign.'.\$objectId.'.leadsources.modified', \$modifiedSources);
                } else {
                    \$success = 0;
                }
            }
        }

        \$passthroughVars = [
            'mauticContent' => 'campaignSource',
            'success'       => \$success,
            'route'         => false,
        ];

        if (\$cancelled || \$valid) {
            if (\$valid) {
                \$passthroughVars['updateHtml'] = \$this->renderView(
                    'MauticCampaignBundle:Source:index.html.php',
                    [
                        'sourceType' => \$sourceType,
                        'campaignId' => \$objectId,
                        'names'      => implode(', ', array_intersect_key(\$sourceList, \$modifiedSources[\$sourceType])),
                        'update'     => true,
                    ]
                );
                \$passthroughVars['sourceType'] = \$sourceType;
            }

            //just close the modal
            \$passthroughVars['closeModal'] = 1;

            return new JsonResponse(\$passthroughVars);
        } else {
            \$viewParams = [
                'sourceType' => \$sourceType,
                'form'       => \$form->createView(),
            ];

            return \$this->ajaxAction(
                [
                    'contentTemplate' => 'MauticCampaignBundle:Source:form.html.php',
                    'viewParameters'  => \$viewParams,
                    'passthroughVars' => \$passthroughVars,
                ]
            );
        }
    }

    /**
     * Deletes the entity.
     *
     * @param \$objectId
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function deleteAction(\$objectId)
    {
        \$session         = \$this->get('session');
        \$modifiedSources = \$session->get('mautic.campaign.'.\$objectId.'.leadsources.modified', []);
        \$sourceType      = \$this->request->get('sourceType');

        //ajax only for form fields
        if (!\$this->request->isXmlHttpRequest()
            || !\$this->get('mautic.security')->isGranted(
                [
                    'campaign:campaigns:edit',
                    'campaign:campaigns:create',
                ],
                'MATCH_ONE'
            )
        ) {
            return \$this->accessDenied();
        }

        if ('POST' == \$this->request->getMethod()) {
            // Add the field to the delete list
            if (isset(\$modifiedSources[\$sourceType])) {
                unset(\$modifiedSources[\$sourceType]);
                \$session->set('mautic.campaign.'.\$objectId.'.leadsources.modified', \$modifiedSources);
            }

            \$dataArray = [
                'mauticContent' => 'campaignSource',
                'success'       => 1,
                'route'         => false,
                'sourceType'    => \$sourceType,
                'deleted'       => 1,
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
        return "@bundles/CampaignBundle/Controller/SourceController.php";
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
        return new Source("", "@bundles/CampaignBundle/Controller/SourceController.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Controller/SourceController.php");
    }
}