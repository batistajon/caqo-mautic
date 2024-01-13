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

/* @bundles/NotificationBundle/Controller/JsController.php */
class __TwigTemplate_d41095bb80da45677ccd7c5d1f042042b94ae883c7bf7f22decb3c046d112d8d extends Template
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

namespace Mautic\\NotificationBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Symfony\\Component\\HttpFoundation\\Response;

class JsController extends CommonController
{
    /**
     * We can't user JsonResponse here, because
     * it improperly encodes the data array.
     *
     * @return Response
     */
    public function manifestAction()
    {
        \$gcmSenderId = \$this->get('mautic.helper.core_parameters')->get('gcm_sender_id', '446150739532');
        \$data        = [
            'start_url'             => '/',
            'gcm_sender_id'         => \$gcmSenderId,
            'gcm_user_visible_only' => true,
        ];

        return new Response(
            json_encode(\$data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES),
            200,
            [
                'Content-Type' => 'application/json',
            ]
        );
    }

    /**
     * @return Response
     */
    public function workerAction()
    {
        return new Response(
            \"importScripts('https://cdn.onesignal.com/sdks/OneSignalSDK.js');\",
            200,
            [
                'Service-Worker-Allowed' => '/',
                'Content-Type'           => 'application/javascript',
            ]
        );
    }

    /**
     * @return Response
     */
    public function updaterAction()
    {
        return new Response(
            \"importScripts('https://cdn.onesignal.com/sdks/OneSignalSDK.js');\",
            200,
            [
                'Service-Worker-Allowed' => '/',
                'Content-Type'           => 'application/javascript',
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
        return "@bundles/NotificationBundle/Controller/JsController.php";
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
        return new Source("", "@bundles/NotificationBundle/Controller/JsController.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Controller/JsController.php");
    }
}
