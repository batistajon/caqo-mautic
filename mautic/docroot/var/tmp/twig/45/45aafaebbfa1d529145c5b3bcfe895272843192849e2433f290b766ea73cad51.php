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

/* @bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/TokenPersistenceFactory.php */
class __TwigTemplate_9a6d2e281ee2c81b8843e119d2fb607a2b13f2400fe6ea10e6ad422291abfe14 extends Template
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

namespace Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\Token;

use kamermans\\OAuth2\\Token\\RawToken;
use Mautic\\IntegrationsBundle\\Helper\\IntegrationsHelper;
use Mautic\\PluginBundle\\Entity\\Integration;

class TokenPersistenceFactory
{
    /**
     * @var IntegrationsHelper
     */
    private \$integrationsHelper;

    public function __construct(IntegrationsHelper \$integrationsHelper)
    {
        \$this->integrationsHelper = \$integrationsHelper;
    }

    public function create(Integration \$integration): TokenPersistence
    {
        \$tokenPersistence = new TokenPersistence(\$this->integrationsHelper);

        \$tokenPersistence->setIntegration(\$integration);

        \$apiKeys = \$integration->getApiKeys();

        \$token = new RawToken(
            \$apiKeys['access_token'] ?? null,
            \$apiKeys['refresh_token'] ?? null,
            \$apiKeys['expires_at'] ?? null
        );

        \$tokenPersistence->restoreToken(\$token);

        return \$tokenPersistence;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/TokenPersistenceFactory.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/TokenPersistenceFactory.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/TokenPersistenceFactory.php");
    }
}
