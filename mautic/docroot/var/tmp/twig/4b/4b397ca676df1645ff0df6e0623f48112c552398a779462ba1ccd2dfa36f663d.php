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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/url.min.js */
class __TwigTemplate_f2045627245c644ad83d8e3d8bf933cb79fb5ff96fab12ca0f8e3323beb3c1a1 extends Template
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

!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\"],a):\"object\"==typeof module&&module.exports?module.exports=function(b,c){return void 0===c&&(c=\"undefined\"!=typeof window?require(\"jquery\"):require(\"jquery\")(b)),a(c),c}:a(jQuery)}(function(a){a.extend(a.FE.DEFAULTS,{}),a.FE.URLRegEx=/(\\s|^|>)((http|https|ftp|ftps)\\:\\/\\/[a-zA-Z0-9\\-\\.]+(\\.[a-zA-Z]{2,3})?(:\\d*)?(\\/[^\\s<]*)?)(\\s|\$|<)/gi,a.FE.PLUGINS.url=function(b){function c(a){for(;a.parentNode;)if(a=a.parentNode,[\"A\",\"BUTTON\",\"TEXTAREA\"].indexOf(a.tagName)>=0)return!0;return!1}function d(){for(var d=b.doc.createTreeWalker(b.el,NodeFilter.SHOW_TEXT,b.node.filter(function(b){return a.FE.URLRegEx.test(b.textContent.replace(/&nbsp;/gi,\"\"))&&!c(b)}),!1);d.nextNode();){var e=d.currentNode,f=null;b.opts.linkAlwaysNoFollow&&(f=\"nofollow\"),b.opts.linkAlwaysBlank&&(f?f+=\" noopener noreferrer\":f=\"noopener noreferrer\"),a(e).before(e.textContent.replace(a.FE.URLRegEx,\"\$1<a\"+(b.opts.linkAlwaysBlank?' target=\"_blank\"':\"\")+(f?' rel=\"'+f+'\"':\"\")+' href=\"\$2\">\$2</a>\$7')),e.parentNode.removeChild(e)}}function e(){b.events.on(\"paste.afterCleanup\",function(c){if(a.FE.URLRegEx.test(c))return c.replace(a.FE.URLRegEx,\"\$1<a\"+(b.opts.linkAlwaysBlank?' target=\"_blank\"':\"\")+(b.opts.linkAlwaysNoFollow?' rel=\"nofollow\"':\"\")+' href=\"\$2\">\$2</a>\$7')}),b.events.on(\"keyup\",function(c){var e=c.which;e!=a.FE.KEYCODE.ENTER&&e!=a.FE.KEYCODE.SPACE||d(b.node.contents(b.el))}),b.events.on(\"keydown\",function(c){var d=c.which;if(d==a.FE.KEYCODE.ENTER){var e=b.selection.element();if((\"A\"==e.tagName||a(e).parents(\"a\").length)&&b.selection.info(e).atEnd)return c.stopImmediatePropagation(),\"A\"!==e.tagName&&(e=a(e).parents(\"a\")[0]),a(e).after(\"&nbsp;\"+a.FE.MARKERS),b.selection.restore(),!1}})}return{_init:e}}});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/url.min.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/url.min.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/plugins/url.min.js");
    }
}
