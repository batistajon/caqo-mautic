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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/image_manager.min.js */
class __TwigTemplate_2e815654250b3c7217e5e98b726502748b955d8adcd188f5bb23955ce70f0375 extends Template
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

!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\"],a):\"object\"==typeof module&&module.exports?module.exports=function(b,c){return void 0===c&&(c=\"undefined\"!=typeof window?require(\"jquery\"):require(\"jquery\")(b)),a(c),c}:a(jQuery)}(function(a){if(a.extend(a.FE.DEFAULTS,{imageManagerLoadURL:\"https://i.froala.com/load-files\",imageManagerLoadMethod:\"get\",imageManagerLoadParams:{},imageManagerPreloader:\"\",imageManagerDeleteURL:\"\",imageManagerDeleteMethod:\"post\",imageManagerDeleteParams:{},imageManagerPageSize:12,imageManagerScrollOffset:20,imageManagerToggleTags:!0}),a.FE.PLUGINS.imageManager=function(b){function c(){if(!y){var a='<div class=\"fr-modal-head-line\"><i class=\"fa fa-bars fr-modal-more fr-not-available\" id=\"fr-modal-more-'+b.sid+'\" title=\"'+b.language.translate(\"Tags\")+'\"></i><h4 data-text=\"true\">'+b.language.translate(\"Manage Images\")+\"</h4></div>\";a+='<div class=\"fr-modal-tags\" id=\"fr-modal-tags\"></div>';var c='<img class=\"fr-preloader\" id=\"fr-preloader\" alt=\"'+b.language.translate(\"Loading\")+'..\" src=\"'+b.opts.imageManagerPreloader+'\" style=\"display: none;\">';c+='<div class=\"fr-image-list\" id=\"fr-image-list\"></div>';var d=b.modals.create(J,a,c);y=d.\$modal,z=d.\$head,A=d.\$body}y.data(\"current-image\",b.image.get()),b.modals.show(J),B||w(),g()}function d(){b.modals.hide(J)}function e(){var b=a(window).outerWidth();return b<768?2:b<1200?3:4}function f(){C.empty();for(var a=0;a<I;a++)C.append('<div class=\"fr-list-column\"></div>')}function g(){B.show(),C.find(\".fr-list-column\").empty(),b.opts.imageManagerLoadURL?a.ajax({url:b.opts.imageManagerLoadURL,method:b.opts.imageManagerLoadMethod,data:b.opts.imageManagerLoadParams,dataType:\"json\",crossDomain:b.opts.requestWithCORS,xhrFields:{withCredentials:b.opts.requestWithCredentials},headers:b.opts.requestHeaders}).done(function(a,c,d){b.events.trigger(\"imageManager.imagesLoaded\",[a]),h(a,d.response),B.hide()}).fail(function(){var a=this.xhr();r(L,a.response||a.responseText)}):r(M)}function h(a,b){try{C.find(\".fr-list-column\").empty(),F=0,G=0,H=0,E=a,i()}catch(c){r(N,b)}}function i(){if(G<E.length&&(C.outerHeight()<=A.outerHeight()+b.opts.imageManagerScrollOffset||A.scrollTop()+b.opts.imageManagerScrollOffset>C.outerHeight()-A.outerHeight())){F++;for(var a=b.opts.imageManagerPageSize*(F-1);a<Math.min(E.length,b.opts.imageManagerPageSize*F);a++)j(E[a])}}function j(c){var d=new Image,e=a('<div class=\"fr-image-container fr-empty fr-image-'+H++ +'\" data-loading=\"'+b.language.translate(\"Loading\")+'..\" data-deleting=\"'+b.language.translate(\"Deleting\")+'..\">');n(!1),d.onload=function(){e.height(Math.floor(e.width()/d.width*d.height));var f=a(\"<img/>\");if(c.thumb)f.attr(\"src\",c.thumb);else{if(r(O,c),!c.url)return r(P,c),!1;f.attr(\"src\",c.url)}if(c.url&&f.attr(\"data-url\",c.url),c.tag)if(z.find(\".fr-modal-more.fr-not-available\").removeClass(\"fr-not-available\"),z.find(\".fr-modal-tags\").show(),c.tag.indexOf(\",\")>=0){for(var g=c.tag.split(\",\"),h=0;h<g.length;h++)g[h]=g[h].trim(),0===D.find('a[title=\"'+g[h]+'\"]').length&&D.append('<a role=\"button\" title=\"'+g[h]+'\">'+g[h]+\"</a>\");f.attr(\"data-tag\",g.join())}else 0===D.find('a[title=\"'+c.tag.trim()+'\"]').length&&D.append('<a role=\"button\" title=\"'+c.tag.trim()+'\">'+c.tag.trim()+\"</a>\"),f.attr(\"data-tag\",c.tag.trim());c.name&&f.attr(\"alt\",c.name);for(var j in c)c.hasOwnProperty(j)&&\"thumb\"!=j&&\"url\"!=j&&\"tag\"!=j&&f.attr(\"data-\"+j,c[j]);e.append(f).append(a(b.icon.create(\"imageManagerDelete\")).addClass(\"fr-delete-img\").attr(\"title\",b.language.translate(\"Delete\"))).append(a(b.icon.create(\"imageManagerInsert\")).addClass(\"fr-insert-img\").attr(\"title\",b.language.translate(\"Insert\"))),D.find(\".fr-selected-tag\").each(function(a,b){v(f,b.text)||e.hide()}),f.on(\"load\",function(){e.removeClass(\"fr-empty\"),e.height(\"auto\"),G++;var a=l(parseInt(f.parent().attr(\"class\").match(/fr-image-(\\d+)/)[1],10)+1);m(a),n(!1),G%b.opts.imageManagerPageSize===0&&i()}),b.events.trigger(\"imageManager.imageLoaded\",[f])},d.onerror=function(){G++,e.remove();var a=l(parseInt(e.attr(\"class\").match(/fr-image-(\\d+)/)[1],10)+1);m(a),r(K,c),G%b.opts.imageManagerPageSize===0&&i()},d.src=c.thumb||c.url,k().append(e)}function k(){var b,c;return C.find(\".fr-list-column\").each(function(d,e){var f=a(e);0===d?(c=f.outerHeight(),b=f):f.outerHeight()<c&&(c=f.outerHeight(),b=f)}),b}function l(b){void 0===b&&(b=0);for(var c=[],d=H-1;d>=b;d--){var e=C.find(\".fr-image-\"+d);e.length&&(c.push(e),a('<div id=\"fr-image-hidden-container\">').append(e),C.find(\".fr-image-\"+d).remove())}return c}function m(a){for(var b=a.length-1;b>=0;b--)k().append(a[b])}function n(a){if(void 0===a&&(a=!0),!y.is(\":visible\"))return!0;var c=e();if(c!=I){I=c;var d=l();f(),m(d)}b.modals.resize(J),a&&i()}function o(a){var b={},c=a.data();for(var d in c)c.hasOwnProperty(d)&&\"url\"!=d&&\"tag\"!=d&&(b[d]=c[d]);return b}function p(c){var d=a(c.currentTarget).siblings(\"img\"),e=y.data(\"instance\")||b,f=y.data(\"current-image\");if(b.modals.hide(J),e.image.showProgressBar(),f)f.data(\"fr-old-src\",f.attr(\"src\")),f.trigger(\"click\");else{e.events.focus(!0),e.selection.restore();var g=e.position.getBoundingRect(),h=g.left+g.width/2+a(b.doc).scrollLeft(),i=g.top+g.height+a(b.doc).scrollTop();e.popups.setContainer(\"image.insert\",b.\$sc),e.popups.show(\"image.insert\",h,i)}e.image.insert(d.data(\"url\"),!1,o(d),f)}function q(c){var d=a(c.currentTarget).siblings(\"img\"),e=b.language.translate(\"Are you sure? Image will be deleted.\");confirm(e)&&(b.opts.imageManagerDeleteURL?b.events.trigger(\"imageManager.beforeDeleteImage\",[d])!==!1&&(d.parent().addClass(\"fr-image-deleting\"),a.ajax({method:b.opts.imageManagerDeleteMethod,url:b.opts.imageManagerDeleteURL,data:a.extend(a.extend({src:d.attr(\"src\")},o(d)),b.opts.imageManagerDeleteParams),crossDomain:b.opts.requestWithCORS,xhrFields:{withCredentials:b.opts.requestWithCredentials},headers:b.opts.requestHeaders}).done(function(a){b.events.trigger(\"imageManager.imageDeleted\",[a]);var c=l(parseInt(d.parent().attr(\"class\").match(/fr-image-(\\d+)/)[1],10)+1);d.parent().remove(),m(c),n(!0)}).fail(function(){var a=this.xhr();r(Q,a.response||a.responseText)})):r(R))}function r(c,d){10<=c&&c<20?B.hide():20<=c&&c<30&&a(\".fr-image-deleting\").removeClass(\"fr-image-deleting\"),b.events.trigger(\"imageManager.error\",[{code:c,message:S[c]},d])}function s(){var a=z.find(\".fr-modal-head-line\").outerHeight(),b=D.outerHeight();z.toggleClass(\".fr-show-tags\"),z.hasClass(\".fr-show-tags\")?(z.css(\"height\",a+b),D.find(\"a\").css(\"opacity\",1)):(z.css(\"height\",a),D.find(\"a\").css(\"opacity\",0))}function t(){var b=D.find(\".fr-selected-tag\");b.length>0?(C.find(\"img\").parent().show(),b.each(function(b,c){C.find(\"img\").each(function(b,d){var e=a(d);v(e,c.text)||e.parent().hide()})})):C.find(\"img\").parent().show();var c=l();m(c),i()}function u(c){c.preventDefault();var d=a(c.currentTarget);d.toggleClass(\"fr-selected-tag\"),b.opts.imageManagerToggleTags&&d.siblings(\"a\").removeClass(\"fr-selected-tag\"),t()}function v(a,b){for(var c=a.attr(\"data-tag\").split(\",\"),d=0;d<c.length;d++)if(c[d]==b)return!0;return!1}function w(){B=y.find(\"#fr-preloader\"),C=y.find(\"#fr-image-list\"),D=y.find(\"#fr-modal-tags\"),I=e(),f(),z.css(\"height\",z.find(\".fr-modal-head-line\").outerHeight()),b.events.\$on(a(b.o_win),\"resize\",function(){n(E?!0:!1)}),b.helpers.isMobile()&&(b.events.bindClick(C,\"div.fr-image-container\",function(b){y.find(\".fr-mobile-selected\").removeClass(\"fr-mobile-selected\"),a(b.currentTarget).addClass(\"fr-mobile-selected\")}),y.on(b._mousedown,function(){y.find(\".fr-mobile-selected\").removeClass(\"fr-mobile-selected\")})),b.events.bindClick(C,\".fr-insert-img\",p),b.events.bindClick(C,\".fr-delete-img\",q),y.on(b._mousedown+\" \"+b._mouseup,function(a){a.stopPropagation()}),y.on(b._mousedown,\"*\",function(){b.events.disableBlur()}),A.on(\"scroll\",i),b.events.bindClick(y,\"i#fr-modal-more-\"+b.sid,s),b.events.bindClick(D,\"a\",u)}function x(){if(!b.\$wp&&\"IMG\"!=b.el.tagName)return!1}var y,z,A,B,C,D,E,F,G,H,I,J=\"image_manager\",K=10,L=11,M=12,N=13,O=14,P=15,Q=21,R=22,S={};return S[K]=\"Image cannot be loaded from the passed link.\",S[L]=\"Error during load images request.\",S[M]=\"Missing imageManagerLoadURL option.\",S[N]=\"Parsing load response failed.\",S[O]=\"Missing image thumb.\",S[P]=\"Missing image URL.\",S[Q]=\"Error during delete image request.\",S[R]=\"Missing imageManagerDeleteURL option.\",{require:[\"image\"],_init:x,show:c,hide:d}},!a.FE.PLUGINS.image)throw new Error(\"Image manager plugin requires image plugin.\");a.FE.DEFAULTS.imageInsertButtons.push(\"imageManager\"),a.FE.RegisterCommand(\"imageManager\",{title:\"Browse\",undo:!1,focus:!1,modal:!0,callback:function(){this.imageManager.show()},plugin:\"imageManager\"}),a.FE.DefineIcon(\"imageManager\",{NAME:\"folder\"}),a.FE.DefineIcon(\"imageManagerInsert\",{NAME:\"plus\"}),a.FE.DefineIcon(\"imageManagerDelete\",{NAME:\"trash\"})});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/image_manager.min.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/image_manager.min.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/plugins/image_manager.min.js");
    }
}
