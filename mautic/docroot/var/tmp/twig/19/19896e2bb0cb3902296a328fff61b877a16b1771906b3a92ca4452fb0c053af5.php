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

/* @bundles/WebhookBundle/Controller/WebhookController.php */
class __TwigTemplate_9e8b8c6434c08b2158692d049079d48a8d378d29862e40048bd5cb09b8fb692a extends Template
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

namespace Mautic\\WebhookBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\FormController;

/**
 * Class WebhookController.
 */
class WebhookController extends FormController
{
    public function __construct()
    {
        \$this->setStandardParameters(
            'webhook.webhook', // model name
            'webhook:webhooks', // permission base
            'mautic_webhook', // route base
            'mautic_webhook', // session base
            'mautic.webhook', // lang string base
            'MauticWebhookBundle:Webhook', // template base
            'mautic_webhook', // activeLink
            'mauticWebhook' // mauticContent
        );
    }

    /**
     * @param int \$page
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function indexAction(\$page = 1)
    {
        return parent::indexStandard(\$page);
    }

    /**
     * Generates new form and processes post data.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    public function newAction()
    {
        return parent::newStandard();
    }

    /**
     * Generates edit form and processes post data.
     *
     * @param int  \$objectId
     * @param bool \$ignorePost
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    public function editAction(\$objectId, \$ignorePost = false)
    {
        return parent::editStandard(\$objectId, \$ignorePost);
    }

    /**
     * Displays details on a Focus.
     *
     * @param \$objectId
     *
     * @return array|\\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function viewAction(\$objectId)
    {
        return parent::viewStandard(\$objectId, 'webhook', 'webhook');
    }

    /**
     * Clone an entity.
     *
     * @param int \$objectId
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function cloneAction(\$objectId)
    {
        return parent::cloneStandard(\$objectId);
    }

    /**
     * Deletes the entity.
     *
     * @param int \$objectId
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function deleteAction(\$objectId)
    {
        return parent::deleteStandard(\$objectId);
    }

    /**
     * Deletes a group of entities.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function batchDeleteAction()
    {
        return parent::batchDeleteStandard();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Controller/WebhookController.php";
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
        return new Source("", "@bundles/WebhookBundle/Controller/WebhookController.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Controller/WebhookController.php");
    }
}
