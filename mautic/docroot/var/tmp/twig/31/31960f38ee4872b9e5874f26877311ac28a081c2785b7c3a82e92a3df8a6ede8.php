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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap.less */
class __TwigTemplate_75ce8e2f8010351faa827b5f2185a86b0d57919047620e5dd536d2613831a741 extends Template
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
        echo "// Core variables and mixins
@import \"less/variables\";
@import \"bootstrap-mautic-custom-variables\";
@import \"less/mixins\";

// Reset and dependencies
@import \"less/normalize\";
@import \"less/print\";
@import \"less/glyphicons\";

// Core CSS
@import \"less/scaffolding\";
@import \"less/type\";
@import \"less/code\";
@import \"less/grid\";
@import \"less/tables\";
@import \"less/forms\";
@import \"less/buttons\";

// Components
@import \"less/component-animations\";
@import \"less/dropdowns\";
@import \"less/button-groups\";
@import \"less/input-groups\";
@import \"less/navs\";
@import \"less/navbar\";
@import \"less/breadcrumbs\";
@import \"less/pagination\";
@import \"less/pager\";
@import \"less/labels\";
@import \"less/badges\";
@import \"less/jumbotron\";
@import \"less/thumbnails\";
@import \"less/alerts\";
@import \"less/progress-bars\";
@import \"less/media\";
@import \"less/list-group\";
@import \"less/panels\";
@import \"less/responsive-embed\";
@import \"less/wells\";
@import \"less/close\";

// Components w/ JavaScript
@import \"less/modals\";
@import \"less/tooltip\";
@import \"less/popovers\";
@import \"less/carousel\";

// Utility classes
@import \"less/utilities\";
@import \"less/responsive-utilities\";";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap.less");
    }
}
