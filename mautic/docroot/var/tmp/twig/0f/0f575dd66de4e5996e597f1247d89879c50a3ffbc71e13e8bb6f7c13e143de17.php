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

/* @bundles/IntegrationsBundle/Event/KeysEncryptionEvent.php */
class __TwigTemplate_976dfae7e23bb53a4446db571975bd50b26df8d54fd62889deee007df35cd375 extends Template
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

use Mautic\\PluginBundle\\Entity\\Integration;
use Symfony\\Component\\EventDispatcher\\Event;

class KeysEncryptionEvent extends Event
{
    /**
     * @var Integration
     */
    private \$integrationConfiguration;

    /**
     * @var array
     */
    private \$keys;

    /**
     * KeysEncryptionEvent constructor.
     */
    public function __construct(Integration \$integrationConfiguration, array \$keys)
    {
        \$this->integrationConfiguration = \$integrationConfiguration;
        \$this->keys                     = \$keys;
    }

    public function getIntegrationConfiguration(): Integration
    {
        return \$this->integrationConfiguration;
    }

    public function getKeys(): array
    {
        return \$this->keys;
    }

    public function setKeys(array \$keys): void
    {
        \$this->keys = \$keys;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Event/KeysEncryptionEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/KeysEncryptionEvent.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Event/KeysEncryptionEvent.php");
    }
}
