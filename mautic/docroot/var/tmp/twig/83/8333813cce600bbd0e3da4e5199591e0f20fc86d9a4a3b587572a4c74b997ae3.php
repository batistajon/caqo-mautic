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

/* @bundles/LeadBundle/Controller/BatchSegmentController.php */
class __TwigTemplate_3042ebb10ce26e3f7788c51ff7e902fa5b21547fafe9035fa7f0ce5b62c2100e extends Template
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

use Mautic\\CoreBundle\\Controller\\AbstractFormController;
use Mautic\\LeadBundle\\Form\\Type\\BatchType;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

class BatchSegmentController extends AbstractFormController
{
    private \$actionModel;

    private \$segmentModel;

    /**
     * Initialize object props here to simulate constructor
     * and make the future controller refactoring easier.
     */
    public function initialize(FilterControllerEvent \$event)
    {
        \$this->actionModel  = \$this->container->get('mautic.lead.model.segment.action');
        \$this->segmentModel = \$this->container->get('mautic.lead.model.list');
    }

    /**
     * API for batch action.
     *
     * @return JsonResponse
     */
    public function setAction()
    {
        \$params = \$this->request->get('lead_batch', []);
        \$ids    = empty(\$params['ids']) ? [] : json_decode(\$params['ids']);

        if (\$ids && is_array(\$ids)) {
            \$segmentsToAdd    = isset(\$params['add']) ? \$params['add'] : [];
            \$segmentsToRemove = isset(\$params['remove']) ? \$params['remove'] : [];
            \$contactIds       = json_decode(\$params['ids']);

            \$this->actionModel->addContacts(\$contactIds, \$segmentsToAdd);
            \$this->actionModel->removeContacts(\$contactIds, \$segmentsToRemove);

            \$this->addFlash('mautic.lead.batch_leads_affected', [
                '%count%'     => count(\$ids),
            ]);
        } else {
            \$this->addFlash('mautic.core.error.ids.missing');
        }

        return new JsonResponse([
            'closeModal' => true,
            'flashes'    => \$this->getFlashContent(),
        ]);
    }

    /**
     * View for batch action.
     *
     * @return JsonResponse|\\Symfony\\Component\\HttpFoundation\\Response
     */
    public function indexAction()
    {
        \$route = \$this->generateUrl('mautic_segment_batch_contact_set');
        \$lists = \$this->segmentModel->getUserLists();
        \$items = [];

        foreach (\$lists as \$list) {
            \$items[\$list['name']] = \$list['id'];
        }

        return \$this->delegateView(
            [
                'viewParameters' => [
                    'form' => \$this->createForm(
                        BatchType::class,
                        [],
                        [
                            'items'  => \$items,
                            'action' => \$route,
                        ]
                    )->createView(),
                ],
                'contentTemplate' => 'MauticLeadBundle:Batch:form.html.php',
                'passthroughVars' => [
                    'activeLink'    => '#mautic_contact_index',
                    'mauticContent' => 'leadBatch',
                    'route'         => \$route,
                ],
            ]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Controller/BatchSegmentController.php";
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
        return new Source("", "@bundles/LeadBundle/Controller/BatchSegmentController.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Controller/BatchSegmentController.php");
    }
}
