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

/* @bundles/WebhookBundle/Controller/Api/WebhookApiController.php */
class __TwigTemplate_d81ac801d2b94a4443589414a2fbc99db9226ef63b561390e308c132abf7a8da extends Template
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

namespace Mautic\\WebhookBundle\\Controller\\Api;

use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\WebhookBundle\\Entity\\Webhook;
use Symfony\\Component\\HttpKernel\\Event\\FilterControllerEvent;

/**
 * Class WebhookApiController.
 */
class WebhookApiController extends CommonApiController
{
    /**
     * {@inheritdoc}
     */
    public function initialize(FilterControllerEvent \$event)
    {
        \$this->model            = \$this->getModel('webhook');
        \$this->entityClass      = Webhook::class;
        \$this->entityNameOne    = 'hook';
        \$this->entityNameMulti  = 'hooks';
        \$this->serializerGroups = ['hookDetails', 'categoryList', 'publishDetails'];

        parent::initialize(\$event);
    }

    /**
     * Gives child controllers opportunity to analyze and do whatever to an entity before going through serializer.
     *
     * @param string \$action
     *
     * @return mixed
     */
    protected function preSerializeEntity(&\$entity, \$action = 'view')
    {
        // We have to use this hack to have a simple array instead of the one the serializer gives us
        \$entity->buildTriggers();
    }

    protected function preSaveEntity(&\$entity, \$form, \$parameters, \$action = 'edit')
    {
        \$eventsToKeep = [];

        // Build webhook events from the triggers
        if (isset(\$parameters['triggers']) && is_array(\$parameters['triggers'])) {
            \$entity->setTriggers(\$parameters['triggers']);
            \$eventsToKeep = \$parameters['triggers'];
        }

        // Remove events missing in the PUT request
        if ('PUT' === \$this->request->getMethod()) {
            foreach (\$entity->getEvents() as \$event) {
                if (!in_array(\$event->getEventType(), \$eventsToKeep)) {
                    \$entity->removeEvent(\$event);
                }
            }
        }
    }

    public function getTriggersAction()
    {
        return \$this->handleView(
            \$this->view(
                [
                    'triggers' => \$this->model->getEvents(),
                ]
            )
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
        return "@bundles/WebhookBundle/Controller/Api/WebhookApiController.php";
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
        return new Source("", "@bundles/WebhookBundle/Controller/Api/WebhookApiController.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Controller/Api/WebhookApiController.php");
    }
}
