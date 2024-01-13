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

/* @bundles/ApiBundle/Controller/oAuth2/SecurityController.php */
class __TwigTemplate_d9949e987af7834e0e4e3998e6de6b6769591f9505c9d26d75552d2581b1e194 extends Template
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

namespace Mautic\\ApiBundle\\Controller\\oAuth2;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Exception as Exception;
use Symfony\\Component\\Security\\Core\\Security;

class SecurityController extends CommonController
{
    /**
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function loginAction(Request \$request)
    {
        \$session = \$request->getSession();

        //get the login error if there is one
        if (\$request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            \$error = \$request->attributes->get(Security::AUTHENTICATION_ERROR);
        } else {
            \$error = \$session->get(Security::AUTHENTICATION_ERROR);
            \$session->remove(Security::AUTHENTICATION_ERROR);
        }
        if (!empty(\$error)) {
            if ((\$error instanceof Exception\\BadCredentialsException)) {
                \$msg = 'mautic.user.auth.error.invalidlogin';
            } else {
                \$msg = \$error->getMessage();
            }
            \$this->addFlash(\$msg, [], 'error', null, false);
        }

        if (\$session->has('_security.target_path')) {
            if (false !== strpos(\$session->get('_security.target_path'), \$this->generateUrl('fos_oauth_server_authorize'))) {
                \$session->set('_fos_oauth_server.ensure_logout', true);
            }
        }

        return \$this->render(
            'MauticApiBundle:Security:login.html.php',
            [
                'last_username' => \$session->get(Security::LAST_USERNAME),
                'route'         => 'mautic_oauth2_server_auth_login_check',
            ]
        );
    }

    /**
     * @return Response
     */
    public function loginCheckAction()
    {
        return new Response('', 400);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Controller/oAuth2/SecurityController.php";
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
        return new Source("", "@bundles/ApiBundle/Controller/oAuth2/SecurityController.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Controller/oAuth2/SecurityController.php");
    }
}
