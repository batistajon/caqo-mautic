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

/* @bundles/LeadBundle/Controller/Api/DeviceApiController.php */
class __TwigTemplate_474ae30dee1ce2d67531aa985112b45541637c8af79b7da410b67f8bc59cea67 extends Template
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

namespace Mautic\\LeadBundle\\Controller\\Api;

use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\LeadBundle\\Controller\\LeadAccessTrait;
use Mautic\\LeadBundle\\Entity\\LeadDevice;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

/**
 * Class DeviceApiController.
 */
class DeviceApiController extends CommonApiController
{
    use LeadAccessTrait;

    public function initialize(FilterControllerEvent \$event)
    {
        \$this->model           = \$this->getModel('lead.device');
        \$this->entityClass     = LeadDevice::class;
        \$this->entityNameOne   = 'device';
        \$this->entityNameMulti = 'devices';

        parent::initialize(\$event);
    }

    /**
     * {@inheritdoc}
     *
     * @param \\Mautic\\LeadBundle\\Entity\\LeadDevice &\$entity
     * @param                                      \$parameters
     * @param                                      \$form
     * @param string                               \$action
     */
    protected function preSaveEntity(&\$entity, \$form, \$parameters, \$action = 'edit')
    {
        \$lead = null;
        if (!empty(\$parameters['lead'])) {
            \$lead = \$parameters['lead'];
        } elseif (!empty(\$parameters['contact'])) {
            \$lead = \$parameters['contact'];
        }
        if (\$lead) {
            \$lead = \$this->checkLeadAccess(\$lead, \$action);

            if (\$lead instanceof Response) {
                return \$lead;
            }

            \$entity->setLead(\$lead);
            unset(\$parameters['lead'], \$parameters['contact']);
        } elseif ('new' === \$action) {
            return \$this->returnError('contact ID is mandatory', Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function checkEntityAccess(\$entity, \$action = 'view')
    {
        return parent::checkEntityAccess(\$entity->getLead(), \$action);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Controller/Api/DeviceApiController.php";
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
        return new Source("", "@bundles/LeadBundle/Controller/Api/DeviceApiController.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Controller/Api/DeviceApiController.php");
    }
}
