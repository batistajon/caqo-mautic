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

/* @bundles/AssetBundle/Event/AssetEvent.php */
class __TwigTemplate_99b64da92c5d24765761e61a8d3f89fd407bd8211a8f8fe60d6b7b6a74c0be51 extends Template
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

use Mautic\\AssetBundle\\Entity\\Asset;
use Mautic\\CoreBundle\\Event\\CommonEvent;

/**
 * Class AssetEvent.
 */
class AssetEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Asset \$asset, \$isNew = false)
    {
        \$this->entity = \$asset;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Asset entity.
     *
     * @return Asset
     */
    public function getAsset()
    {
        return \$this->entity;
    }

    /**
     * Sets the Asset entity.
     */
    public function setAsset(Asset \$asset)
    {
        \$this->entity = \$asset;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Event/AssetEvent.php";
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
        return new Source("", "@bundles/AssetBundle/Event/AssetEvent.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Event/AssetEvent.php");
    }
}
