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

/* @bundles/CoreBundle/Assets/css/app.less */
class __TwigTemplate_07a8b19c071af30176e090c65a8f158df9c6565bb4c0a45ad579931c1f5e8705 extends Template
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
        echo "//
// Application
// --------------------------------------------------
// load google font
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700);
// Core variables and mixins
@import \"app/less/variables\";
@import \"app/less/mixins\";
@import \"app/less/lesshat\";
@import \"libraries/bootstrap/less/variables\";
@import \"libraries/bootstrap/less/mixins\";
@import \"libraries/bootstrap/bootstrap-mautic-custom-variables\";
// Layouts
@import \"app/less/layouts/base\";
@import \"app/less/layouts/header\";
@import \"app/less/layouts/sidebar\";
@import \"app/less/layouts/content\";
@import \"app/less/layouts/footer\";
// Components
@import \"app/less/components/scaffolding\";
@import \"app/less/components/type\";
@import \"app/less/components/scrollbar\";
@import \"app/less/components/buttons\";
@import \"app/less/components/button-groups\";
@import \"app/less/components/alerts\";
@import \"app/less/components/calendar\";
@import \"app/less/components/editor\";
@import \"app/less/components/media\";
@import \"app/less/components/menu\";
@import \"app/less/components/list-group\";
@import \"app/less/components/dropdowns\";
@import \"app/less/components/navs\";
@import \"app/less/components/notes\";
@import \"app/less/components/bullet\";
@import \"app/less/components/labels\";
@import \"app/less/components/badges\";
@import \"app/less/components/brand\";
@import \"app/less/components/forms\";
@import \"app/less/components/graphs\";
@import \"app/less/components/input-groups\";
@import \"app/less/components/image\";
@import \"app/less/components/table\";
@import \"app/less/components/progress-bars\";
@import \"app/less/components/panels\";
@import \"app/less/components/box\";
@import \"app/less/components/switch\";
@import \"app/less/components/steps\";
@import \"app/less/components/colors\";
@import \"app/less/components/pagination\";
@import \"app/less/components/loading-bar\";
@import \"app/less/components/offcanvas\";
@import \"app/less/components/timeline\";
@import \"app/less/components/utilities\";
@import \"app/less/components/builder\";
@import \"app/less/components/sortable-panels\";
@import \"app/less/custom\";";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app.less");
    }
}
