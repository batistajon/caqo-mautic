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

/* @bundles/IntegrationsBundle/Auth/Support/Oauth2/ConfigAccess/ConfigTokenPersistenceInterface.php */
class __TwigTemplate_0ea28e4691e977705c91ea24c6f90dd2cc1d2d801e904f5527b5fe233bae0202 extends Template
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

namespace Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\ConfigAccess;

use kamermans\\OAuth2\\Persistence\\TokenPersistenceInterface as KamermansTokenPersistenceInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthConfigInterface;

interface ConfigTokenPersistenceInterface extends AuthConfigInterface
{
    public function getTokenPersistence(): KamermansTokenPersistenceInterface;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Auth/Support/Oauth2/ConfigAccess/ConfigTokenPersistenceInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Support/Oauth2/ConfigAccess/ConfigTokenPersistenceInterface.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Auth/Support/Oauth2/ConfigAccess/ConfigTokenPersistenceInterface.php");
    }
}
