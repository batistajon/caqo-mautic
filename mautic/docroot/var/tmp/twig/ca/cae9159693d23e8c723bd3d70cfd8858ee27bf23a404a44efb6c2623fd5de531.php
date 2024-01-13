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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/align.min.js */
class __TwigTemplate_f5527548fc9961e0a51cfc0916943eedcdfc93f82de86e099c455e3d4baf50d7 extends Template
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

!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\"],a):\"object\"==typeof module&&module.exports?module.exports=function(b,c){return void 0===c&&(c=\"undefined\"!=typeof window?require(\"jquery\"):require(\"jquery\")(b)),a(c),c}:a(jQuery)}(function(a){a.FE.PLUGINS.align=function(b){function c(c){b.selection.save(),b.html.wrap(!0,!0,!0,!0),b.selection.restore();for(var d=b.selection.blocks(),e=0;e<d.length;e++)b.helpers.getAlignment(a(d[e].parentNode))==c?a(d[e]).css(\"text-align\",\"\").removeClass(\"fr-temp-div\"):a(d[e]).css(\"text-align\",c).removeClass(\"fr-temp-div\"),\"\"===a(d[e]).attr(\"class\")&&a(d[e]).removeAttr(\"class\"),\"\"===a(d[e]).attr(\"style\")&&a(d[e]).removeAttr(\"style\");b.selection.save(),b.html.unwrap(),b.selection.restore()}function d(c){var d=b.selection.blocks();if(d.length){var e=b.helpers.getAlignment(a(d[0]));c.find(\"> *:first\").replaceWith(b.icon.create(\"align-\"+e))}}function e(c,d){var e=b.selection.blocks();if(e.length){var f=b.helpers.getAlignment(a(e[0]));d.find('a.fr-command[data-param1=\"'+f+'\"]').addClass(\"fr-active\").attr(\"aria-selected\",!0)}}return{apply:c,refresh:d,refreshOnShow:e}},a.FE.DefineIcon(\"align\",{NAME:\"align-left\"}),a.FE.DefineIcon(\"align-left\",{NAME:\"align-left\"}),a.FE.DefineIcon(\"align-right\",{NAME:\"align-right\"}),a.FE.DefineIcon(\"align-center\",{NAME:\"align-center\"}),a.FE.DefineIcon(\"align-justify\",{NAME:\"align-justify\"}),a.FE.RegisterCommand(\"align\",{type:\"dropdown\",title:\"Align\",options:{left:\"Align Left\",center:\"Align Center\",right:\"Align Right\",justify:\"Align Justify\"},html:function(){var b='<ul class=\"fr-dropdown-list\" role=\"presentation\">',c=a.FE.COMMANDS.align.options;for(var d in c)c.hasOwnProperty(d)&&(b+='<li role=\"presentation\"><a class=\"fr-command fr-title\" tabIndex=\"-1\" role=\"option\" data-cmd=\"align\" data-param1=\"'+d+'\" title=\"'+this.language.translate(c[d])+'\">'+this.icon.create(\"align-\"+d)+'<span class=\"fr-sr-only\">'+this.language.translate(c[d])+\"</span></a></li>\");return b+=\"</ul>\"},callback:function(a,b){this.align.apply(b)},refresh:function(a){this.align.refresh(a)},refreshOnShow:function(a,b){this.align.refreshOnShow(a,b)},plugin:\"align\"})});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/align.min.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/align.min.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/plugins/align.min.js");
    }
}
