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

/* @bundles/PluginBundle/Tests/Helper/PluginBundleBaseStub.php */
class __TwigTemplate_4addb5a8348ade445c3ed6c3db9fc3455d4b7163c7b22e369fb6b723f8e0b321 extends Template
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

namespace Mautic\\PluginBundle\\Tests\\Helper;

use Doctrine\\DBAL\\Schema\\Schema;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\PluginBundle\\Entity\\Plugin;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

/**
 * A stub Base Bundle class which implements stub methods for testing purposes.
 */
abstract class PluginBundleBaseStub extends Bundle
{
    /**
     * @param null \$metadata
     * @param null \$installedSchema
     *
     * @throws \\Exception
     */
    public static function onPluginInstall(Plugin \$plugin, MauticFactory \$factory, \$metadata = null, \$installedSchema = null)
    {
    }

    /**
     * Called by PluginController::reloadAction when the addon version does not match what's installed.
     *
     * @param null   \$metadata
     * @param Schema \$installedSchema
     *
     * @throws \\Exception
     */
    public static function onPluginUpdate(Plugin \$plugin, MauticFactory \$factory, \$metadata = null, Schema \$installedSchema = null)
    {
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Tests/Helper/PluginBundleBaseStub.php";
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
        return new Source("", "@bundles/PluginBundle/Tests/Helper/PluginBundleBaseStub.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Tests/Helper/PluginBundleBaseStub.php");
    }
}
