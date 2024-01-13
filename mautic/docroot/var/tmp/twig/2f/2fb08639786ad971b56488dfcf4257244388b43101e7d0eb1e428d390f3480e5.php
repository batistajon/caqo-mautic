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

/* @bundles/NotificationBundle/Controller/Api/NotificationApiController.php */
class __TwigTemplate_3dc5fd9946ce4f78ae0b1beb2810c2d70d3b3a23e73b1b0fbfcb64bf3461e96d extends Template
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

namespace Mautic\\NotificationBundle\\Controller\\Api;

use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

/**
 * Class NotificationApiController.
 */
class NotificationApiController extends CommonApiController
{
    /**
     * @var ContactTracker
     */
    protected \$contactTracker;

    /**
     * {@inheritdoc}
     */
    public function initialize(FilterControllerEvent \$event)
    {
        \$this->contactTracker  = \$this->container->get('mautic.tracker.contact');
        \$this->model           = \$this->getModel('notification');
        \$this->entityClass     = 'Mautic\\NotificationBundle\\Entity\\Notification';
        \$this->entityNameOne   = 'notification';
        \$this->entityNameMulti = 'notifications';

        parent::initialize(\$event);
    }

    /**
     * Receive Web Push subscription request.
     *
     * @return JsonResponse
     */
    public function subscribeAction()
    {
        \$osid = \$this->request->get('osid');
        if (\$osid) {
            /** @var \\Mautic\\LeadBundle\\Model\\LeadModel \$leadModel */
            \$leadModel = \$this->getModel('lead');

            if (\$currentLead = \$this->contactTracker->getContact()) {
                \$currentLead->addPushIDEntry(\$osid);
                \$leadModel->saveEntity(\$currentLead);
            }

            return new JsonResponse(['success' => true, 'osid' => \$osid], 200, ['Access-Control-Allow-Origin' => '*']);
        }

        return new JsonResponse(['success' => 'false'], 200, ['Access-Control-Allow-Origin' => '*']);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Controller/Api/NotificationApiController.php";
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
        return new Source("", "@bundles/NotificationBundle/Controller/Api/NotificationApiController.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Controller/Api/NotificationApiController.php");
    }
}
