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

/* @bundles/IntegrationsBundle/Controller/AuthController.php */
class __TwigTemplate_b8d5555704c8669e3badc2e19ae9558fe6bdc8eaebfd36167b60fcaf06f2c1fb extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Exception\\UnauthorizedException;
use Mautic\\IntegrationsBundle\\Helper\\AuthIntegrationsHelper;
use Symfony\\Component\\HttpFoundation\\Request;

class AuthController extends CommonController
{
    public function callbackAction(string \$integration, Request \$request)
    {
        /** @var AuthIntegrationsHelper \$authIntegrationsHelper */
        \$authIntegrationsHelper = \$this->get('mautic.integrations.helper.auth_integrations');
        \$authenticationError    = false;

        try {
            \$authIntegration = \$authIntegrationsHelper->getIntegration(\$integration);
            \$message         = \$authIntegration->authenticateIntegration(\$request);
        } catch (UnauthorizedException \$exception) {
            \$message             = \$exception->getMessage();
            \$authenticationError = true;
        } catch (IntegrationNotFoundException \$exception) {
            return \$this->notFound();
        }

        return \$this->render(
            'IntegrationsBundle:Auth:authenticated.html.php',
            [
                'message'             => \$message,
                'authenticationError' => \$authenticationError,
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
        return "@bundles/IntegrationsBundle/Controller/AuthController.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Controller/AuthController.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Controller/AuthController.php");
    }
}
