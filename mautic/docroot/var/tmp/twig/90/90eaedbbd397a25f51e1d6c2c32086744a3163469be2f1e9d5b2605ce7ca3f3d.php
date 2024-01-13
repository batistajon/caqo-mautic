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

/* @bundles/AssetBundle/Event/RemoteAssetBrowseEvent.php */
class __TwigTemplate_a288c1c1f271b9c98cb179c4a2e66c0aa31596cef5e3e7d98d06239d8764b933 extends Template
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

namespace Mautic\\AssetBundle\\Event;

use Gaufrette\\Adapter;
use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\PluginBundle\\Integration\\AbstractIntegration;
use Mautic\\PluginBundle\\Integration\\UnifiedIntegrationInterface;

/**
 * Class RemoteAssetBrowseEvent.
 */
class RemoteAssetBrowseEvent extends CommonEvent
{
    /**
     * @var Adapter
     */
    private \$adapter;

    /**
     * @var AbstractIntegration
     */
    private \$integration;

    public function __construct(UnifiedIntegrationInterface \$integration)
    {
        \$this->integration = \$integration;
    }

    /**
     * @return Adapter
     */
    public function getAdapter()
    {
        return \$this->adapter;
    }

    /**
     * @return AbstractIntegration
     */
    public function getIntegration()
    {
        return \$this->integration;
    }

    /**
     * @return \$this
     */
    public function setAdapter(Adapter \$adapter)
    {
        \$this->adapter = \$adapter;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Event/RemoteAssetBrowseEvent.php";
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
        return new Source("", "@bundles/AssetBundle/Event/RemoteAssetBrowseEvent.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Event/RemoteAssetBrowseEvent.php");
    }
}
