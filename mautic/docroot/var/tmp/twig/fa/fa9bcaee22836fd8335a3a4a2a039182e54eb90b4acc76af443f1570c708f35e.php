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

/* @bundles/IntegrationsBundle/DTO/IntegrationObjectToken.php */
class __TwigTemplate_24ef93f8e6600c3738fa8ea39430c72dc7e2308d5e70bd4a0f5690e102c353ba extends Template
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

namespace Mautic\\IntegrationsBundle\\DTO;

/**
 * This class represents tokens which provide links to objects which have been
 * synced from integrations into Mautic.
 */
class IntegrationObjectToken
{
    /**
     * @var string
     */
    private \$token;

    /**
     * @var string
     */
    private \$objectName;

    /**
     * @var string
     */
    private \$integration;

    /**
     * @var string
     */
    private \$defaultValue = '';

    /**
     * @var string
     */
    private \$linkText;

    /**
     * @var string
     */
    private \$baseURL;

    /**
     * IntegrationObjectToken constructor.
     */
    public function __construct(string \$token)
    {
        \$this->token = \$token;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return \$this->token;
    }

    /**
     * @param string \$objectName
     */
    public function setObjectName(\$objectName): void
    {
        \$this->objectName = \$objectName;
    }

    /**
     * @return string
     */
    public function getObjectName()
    {
        return \$this->objectName;
    }

    /**
     * @param string \$integration
     */
    public function setIntegration(\$integration): void
    {
        \$this->integration = \$integration;
    }

    /**
     * @return string
     */
    public function getIntegration()
    {
        return \$this->integration;
    }

    /**
     * @param string \$defaultValue
     */
    public function setDefaultValue(\$defaultValue): void
    {
        \$this->defaultValue = \$defaultValue;
    }

    /**
     * @return string
     */
    public function getDefaultValue()
    {
        return \$this->defaultValue;
    }

    /**
     * @param string \$linkText
     */
    public function setLinkText(\$linkText): void
    {
        \$this->linkText = \$linkText;
    }

    /**
     * @return string
     */
    public function getLinkText()
    {
        return \$this->linkText;
    }

    /**
     * @param string \$baseURL
     */
    public function setBaseURL(\$baseURL): void
    {
        \$this->baseURL = \$baseURL;
    }

    /**
     * @return string
     */
    public function getBaseURL()
    {
        return \$this->baseURL;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/DTO/IntegrationObjectToken.php";
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
        return new Source("", "@bundles/IntegrationsBundle/DTO/IntegrationObjectToken.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/DTO/IntegrationObjectToken.php");
    }
}
