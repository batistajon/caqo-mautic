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

/* @bundles/AssetBundle/Event/AssetLoadEvent.php */
class __TwigTemplate_52bd03235083988e87fe90427b895457c8bee2419f3abb35fc8c4bd6c76fbe3e extends Template
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

use Mautic\\AssetBundle\\Entity\\Download;
use Mautic\\CoreBundle\\Event\\CommonEvent;

/**
 * Class AssetLoadEvent.
 */
class AssetLoadEvent extends CommonEvent
{
    /**
     * @var bool
     */
    protected \$unique;

    public function __construct(Download \$download, \$isUnique)
    {
        \$this->entity = \$download;
        \$this->unique = \$isUnique;
    }

    /**
     * Returns the Download entity.
     *
     * @return Download
     */
    public function getRecord()
    {
        return \$this->entity;
    }

    /**
     * @return \\Mautic\\AssetBundle\\Entity\\Asset
     */
    public function getAsset()
    {
        return \$this->entity->getAsset();
    }

    /**
     * Returns if this is the first download for the session.
     *
     * @return bool
     */
    public function isUnique()
    {
        return \$this->unique;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Event/AssetLoadEvent.php";
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
        return new Source("", "@bundles/AssetBundle/Event/AssetLoadEvent.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Event/AssetLoadEvent.php");
    }
}
