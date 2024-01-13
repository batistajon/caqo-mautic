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

/* @bundles/CoreBundle/Assets/css/libraries/chosen/bootstrap-chosen-variables.less */
class __TwigTemplate_cf034094b33284882d52f9a6852e542bfbb509bc19214fc7442173cb4d796906 extends Template
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
// bootstrap-chosen-variables.less
//
// An alternate stylesheet for Chosen (http://harvesthq.github.com/chosen/).
// This one is supposed to integrate better with Bootstrap.
//
// Submit bugfixes to: http://github.com/alxlit/bootstrap-chosen
//
@import \"../bootstrap/less/variables\";
@chosen-background: @input-bg;
@chosen-border: 1px solid @input-border;
@chosen-border-radius: @input-border-radius;
@chosen-multi-border-radius: @chosen-border-radius;
@chosen-box-shadow: ~\"inset 0 1px 1px rgba(0, 0, 0, .075)\";
@chosen-drop-border: @input-border;
@chosen-drop-box-shadow: ~\"0 8px 8px rgba(0, 0, 0, .25)\";
@chosen-drop-zindex: 1060;
@chosen-focus-border: 1px solid @input-border-focus;
@chosen-focus-box-shadow: ~\"0 1px 1px rgba(0, 0, 0, .075) inset, 0 0 8px rgba(82, 168, 236, .6)\";
@chosen-focus-transition: ~\"border linear .2s, box-shadow linear .2s\";
@chosen-height: @input-height-base;
@chosen-multi-height: @input-height-base + 6px;
@chosen-sprite-path: \"chosen/chosen-sprite.png\";
@chosen-sprite-retina-path: \"chosen/chosen-sprite@2x.png\";
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/chosen/bootstrap-chosen-variables.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/chosen/bootstrap-chosen-variables.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/chosen/bootstrap-chosen-variables.less");
    }
}
