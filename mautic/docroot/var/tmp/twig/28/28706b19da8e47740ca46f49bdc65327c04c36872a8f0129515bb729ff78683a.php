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

/* @bundles/IntegrationsBundle/Event/MappedIntegrationObjectTokenEvent.php */
class __TwigTemplate_732bac61db6b463d2d9637b6114c5a09f792127b23c3dd035cfa240a7b3e31e0 extends Template
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

namespace Mautic\\IntegrationsBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;

/**
 * This event is dispatched to allow plugins to provide tokens which create links
 * to any synced integration objects they may provide.
 *
 * Class MappedIntegrationObjectTokenEvent
 */
class MappedIntegrationObjectTokenEvent extends CommonEvent
{
    /**
     * @var array
     */
    private \$tokens = [];

    /**
     * Add a new mapped integration object token.
     *
     * @param string \$integrationName - The name of the integration
     * @param \$objectName - The name of the object in sync_object_mapping table
     * @param \$objectLink - The base_url to direct users to the object on the integration site
     * @param string \$title    - The title of the token in the token select dropdown
     * @param string \$linkText - The link text used for the url provided in \$objectLink
     * @param string \$default  - The default value to show when the token value isnt found
     */
    public function addToken(
        \$integrationName,
        \$objectName,
        \$objectLink,
        \$title = '',
        \$linkText = 'Link Text',
        \$default = 'Default Value'
    ): void {
        \$this->tokens[\$integrationName][\$objectName] = [
            'base_url'    => \$objectLink,
            'token_title' => \$title,
            'link_text'   => \$linkText,
            'default'     => \$default,
        ];
    }

    /**
     * @return array
     */
    public function getTokens()
    {
        return \$this->tokens;
    }

    /**
     * Get only the tokens provided by a particular integration.
     *
     * @param string \$integrationName
     *
     * @return array
     */
    public function getTokensByIntegration(\$integrationName)
    {
        return \$this->tokens[\$integrationName] ?? [];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Event/MappedIntegrationObjectTokenEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/MappedIntegrationObjectTokenEvent.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Event/MappedIntegrationObjectTokenEvent.php");
    }
}
