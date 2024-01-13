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

/* @bundles/CategoryBundle/Controller/BatchContactController.php */
class __TwigTemplate_0566d8c6a149560eee8a55647c3b06df7079c51c57c3e5f4a36d67e9374f60c7 extends Template
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

namespace Mautic\\CategoryBundle\\Controller;

use Mautic\\CategoryBundle\\Model\\CategoryModel;
use Mautic\\CategoryBundle\\Model\\ContactActionModel;
use Mautic\\CoreBundle\\Controller\\AbstractFormController;
use Mautic\\LeadBundle\\Form\\Type\\BatchType;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

class BatchContactController extends AbstractFormController
{
    /**
     * @var ContactActionModel
     */
    private \$actionModel;

    /**
     * @var CategoryModel
     */
    private \$categoryModel;

    /**
     * Initialize object props here to simulate constructor
     * and make the future controller refactoring easier.
     */
    public function initialize(FilterControllerEvent \$event)
    {
        \$this->actionModel   = \$this->container->get('mautic.category.model.contact.action');
        \$this->categoryModel = \$this->container->get('mautic.category.model.category');
    }

    /**
     * Adds or removes categories to multiple contacts defined by contact ID.
     *
     * @return JsonResponse
     */
    public function execAction()
    {
        \$params = \$this->request->get('lead_batch');
        \$ids    = empty(\$params['ids']) ? [] : json_decode(\$params['ids']);

        if (\$ids && is_array(\$ids)) {
            \$categoriesToAdd    = isset(\$params['add']) ? \$params['add'] : [];
            \$categoriesToRemove = isset(\$params['remove']) ? \$params['remove'] : [];
            \$contactIds         = json_decode(\$params['ids']);

            \$this->actionModel->addContactsToCategories(\$contactIds, \$categoriesToAdd);
            \$this->actionModel->removeContactsFromCategories(\$contactIds, \$categoriesToRemove);

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
     * View the modal form for adding contacts into categories in batches.
     *
     * @return JsonResponse|\\Symfony\\Component\\HttpFoundation\\Response
     */
    public function indexAction()
    {
        \$route = \$this->generateUrl('mautic_category_batch_contact_set');
        \$rows  = \$this->categoryModel->getLookupResults('global', '', 300);
        \$items = [];

        foreach (\$rows as \$category) {
            \$items[\$category['title']] = \$category['id'];
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
        return "@bundles/CategoryBundle/Controller/BatchContactController.php";
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
        return new Source("", "@bundles/CategoryBundle/Controller/BatchContactController.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/Controller/BatchContactController.php");
    }
}
