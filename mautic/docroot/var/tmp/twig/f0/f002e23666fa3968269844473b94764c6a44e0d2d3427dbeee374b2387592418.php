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

/* @bundles/PluginBundle/Controller/AuthController.php */
class __TwigTemplate_b6f588e9a00a3bfe3f26a1adef6a5fe7e810107fd49a9e0837f43297b3c2dc85 extends Template
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

namespace Mautic\\PluginBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\FormController;
use Mautic\\PluginBundle\\Event\\PluginIntegrationAuthRedirectEvent;
use Mautic\\PluginBundle\\PluginEvents;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;

/**
 * Class AuthController.
 */
class AuthController extends FormController
{
    /**
     * @param string \$integration
     *
     * @return JsonResponse
     */
    public function authCallbackAction(\$integration)
    {
        \$isAjax  = \$this->request->isXmlHttpRequest();
        \$session = \$this->get('session');

        /** @var \\Mautic\\PluginBundle\\Helper\\IntegrationHelper \$integrationHelper */
        \$integrationHelper = \$this->factory->getHelper('integration');
        \$integrationObject = \$integrationHelper->getIntegrationObject(\$integration);

        //check to see if the service exists
        if (!\$integrationObject) {
            \$session->set('mautic.integration.postauth.message', ['mautic.integration.notfound', ['%name%' => \$integration], 'error']);
            if (\$isAjax) {
                return new JsonResponse(['url' => \$this->generateUrl('mautic_integration_auth_postauth', ['integration' => \$integration])]);
            } else {
                return new RedirectResponse(\$this->generateUrl('mautic_integration_auth_postauth', ['integration' => \$integration]));
            }
        }

        try {
            \$error = \$integrationObject->authCallback();
        } catch (\\InvalidArgumentException \$e) {
            \$session->set('mautic.integration.postauth.message', [\$e->getMessage(), [], 'error']);
            \$redirectUrl = \$this->generateUrl('mautic_integration_auth_postauth', ['integration' => \$integration]);
            if (\$isAjax) {
                return new JsonResponse(['url' => \$redirectUrl]);
            } else {
                return new RedirectResponse(\$redirectUrl);
            }
        }

        //check for error
        if (\$error) {
            \$type    = 'error';
            \$message = 'mautic.integration.error.oauthfail';
            \$params  = ['%error%' => \$error];
        } else {
            \$type    = 'notice';
            \$message = 'mautic.integration.notice.oauthsuccess';
            \$params  = [];
        }

        \$session->set('mautic.integration.postauth.message', [\$message, \$params, \$type]);

        \$identifier[\$integration] = null;
        \$socialCache              = [];
        \$userData                 = \$integrationObject->getUserData(\$identifier, \$socialCache);

        \$session->set('mautic.integration.'.\$integration.'.userdata', \$userData);

        return new RedirectResponse(\$this->generateUrl('mautic_integration_auth_postauth', ['integration' => \$integration]));
    }

    /**
     * @param \$integration
     *
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function authStatusAction(\$integration)
    {
        \$postAuthTemplate = 'MauticPluginBundle:Auth:postauth.html.php';

        \$session     = \$this->get('session');
        \$postMessage = \$session->get('mautic.integration.postauth.message');
        \$userData    = [];

        if (isset(\$integration)) {
            \$userData = \$session->get('mautic.integration.'.\$integration.'.userdata');
        }

        \$message = \$type = '';
        \$alert   = 'success';
        if (!empty(\$postMessage)) {
            \$message = \$this->translator->trans(\$postMessage[0], \$postMessage[1], 'flashes');
            \$session->remove('mautic.integration.postauth.message');
            \$type = \$postMessage[2];
            if ('error' == \$type) {
                \$alert = 'danger';
            }
        }

        return \$this->render(\$postAuthTemplate, ['message' => \$message, 'alert' => \$alert, 'data' => \$userData]);
    }

    /**
     * @param \$integration
     *
     * @return RedirectResponse
     */
    public function authUserAction(\$integration)
    {
        /** @var \\Mautic\\PluginBundle\\Helper\\IntegrationHelper \$integrationHelper */
        \$integrationHelper = \$this->factory->getHelper('integration');
        \$integrationObject = \$integrationHelper->getIntegrationObject(\$integration);

        \$settings['method']      = 'GET';
        \$settings['integration'] = \$integrationObject->getName();

        /** @var \\Mautic\\PluginBundle\\Integration\\AbstractIntegration \$integrationObject */
        \$event = \$this->dispatcher->dispatch(
            PluginEvents::PLUGIN_ON_INTEGRATION_AUTH_REDIRECT,
            new PluginIntegrationAuthRedirectEvent(
                \$integrationObject,
                \$integrationObject->getAuthLoginUrl()
            )
        );
        \$oauthUrl = \$event->getAuthUrl();

        return new RedirectResponse(\$oauthUrl);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Controller/AuthController.php";
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
        return new Source("", "@bundles/PluginBundle/Controller/AuthController.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Controller/AuthController.php");
    }
}
