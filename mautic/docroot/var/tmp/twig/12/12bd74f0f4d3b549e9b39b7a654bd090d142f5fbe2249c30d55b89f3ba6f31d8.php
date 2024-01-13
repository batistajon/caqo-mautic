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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/pastefromgdocs/filter/default.js */
class __TwigTemplate_930a9d4260e5869cf9f65e644b659755441a9887f66e08ce83afe4831a55cdc9 extends Template
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
        echo "﻿/*
 Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/
(function(){function g(b){return\"\"===b?!1:b}function h(b){if(!/(o|u)l/i.test(b.parent.name))return b;d.elements.replaceWithChildren(b);return!1}function k(b){function d(a,f){var b,c;if(a&&\"tr\"===a.name){b=a.children;for(c=0;c<f.length&&b[c];c++)b[c].attributes.width=f[c];d(a.next,f)}}var c=b.parent;b=function(a){return CKEDITOR.tools.array.map(a,function(a){return Number(a.attributes.width)})}(b.children);var a=function(a){return CKEDITOR.tools.array.reduce(a,function(a,b){return a+b},0)}(b);c.attributes.width=
a;d(function(a){return(a=CKEDITOR.tools.array.find(a.children,function(a){return a.name&&(\"tr\"===a.name||\"tbody\"===a.name)}))&&a.name&&\"tbody\"===a.name?a.children[0]:a}(c),b)}var e=CKEDITOR.plugins.pastetools,d=e.filters.common,c=d.styles;CKEDITOR.plugins.pastetools.filters.gdocs={rules:function(b,e,l){return{elementNames:[[/^meta/,\"\"]],comment:function(){return!1},attributes:{id:function(a){return!/^docs\\-internal\\-guid\\-/.test(a)},dir:function(a){return\"ltr\"===a?!1:a},style:function(a,b){return g(c.normalizedStyles(b,
e))},\"class\":function(a){return g(a.replace(/kix-line-break/ig,\"\"))}},elements:{div:function(a){var b=1===a.children.length,c=\"table\"===a.children[0].name;\"div\"===a.name&&b&&c&&delete a.attributes.align},colgroup:k,span:function(a){c.createStyleStack(a,l,e,/vertical-align|white-space|font-variant/);var b=/vertical-align:\\s*sub/,d=a.attributes.style;/vertical-align:\\s*super/.test(d)?a.name=\"sup\":b.test(d)&&(a.name=\"sub\");a.attributes.style=d.replace(/vertical-align\\s*.+?;?/,\"\")},b:function(a){d.elements.replaceWithChildren(a);
return!1},p:function(a){if(a.parent&&\"li\"===a.parent.name)return d.elements.replaceWithChildren(a),!1},ul:function(a){c.pushStylesLower(a);return h(a)},ol:function(a){c.pushStylesLower(a);return h(a)},li:function(a){c.pushStylesLower(a);var b=a.children,e=/(o|u)l/i;1===b.length&&e.test(b[0].name)&&(d.elements.replaceWithChildren(a),a=!1);return a}}}}};CKEDITOR.pasteFilters.gdocs=e.createFilter({rules:[d.rules,CKEDITOR.plugins.pastetools.filters.gdocs.rules]})})();";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/pastefromgdocs/filter/default.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/pastefromgdocs/filter/default.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/pastefromgdocs/filter/default.js");
    }
}
