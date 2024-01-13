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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/inline_style.min.js */
class __TwigTemplate_d8243168faaf53afd646ae99081862b1563c4ffd33636ede80fa234d6dc9d5d2 extends Template
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
        echo "/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */

!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\"],a):\"object\"==typeof module&&module.exports?module.exports=function(b,c){return void 0===c&&(c=\"undefined\"!=typeof window?require(\"jquery\"):require(\"jquery\")(b)),a(c),c}:a(jQuery)}(function(a){a.extend(a.FE.DEFAULTS,{inlineStyles:{\"Big Red\":\"font-size: 20px; color: red;\",\"Small Blue\":\"font-size: 14px; color: blue;\"}}),a.FE.PLUGINS.inlineStyle=function(b){function c(c){\"\"!==b.selection.text()?b.html.insert(a.FE.START_MARKER+'<span style=\"'+c+'\">'+b.selection.text()+\"</span>\"+a.FE.END_MARKER):b.html.insert('<span style=\"'+c+'\">'+a.FE.INVISIBLE_SPACE+a.FE.MARKERS+\"</span>\")}return{apply:c}},a.FE.RegisterCommand(\"inlineStyle\",{type:\"dropdown\",html:function(){var a='<ul class=\"fr-dropdown-list\" role=\"presentation\">',b=this.opts.inlineStyles;for(var c in b)b.hasOwnProperty(c)&&(a+='<li role=\"presentation\"><span style=\"'+b[c]+'\" role=\"presentation\"><a class=\"fr-command\" tabIndex=\"-1\" role=\"option\" data-cmd=\"inlineStyle\" data-param1=\"'+b[c]+'\" title=\"'+this.language.translate(c)+'\">'+this.language.translate(c)+\"</a></span></li>\");return a+=\"</ul>\"},title:\"Inline Style\",callback:function(a,b){this.inlineStyle.apply(b)},plugin:\"inlineStyle\"}),a.FE.DefineIcon(\"inlineStyle\",{NAME:\"paint-brush\"})});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/inline_style.min.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/inline_style.min.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/plugins/inline_style.min.js");
    }
}
