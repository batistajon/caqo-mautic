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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/quick_insert.min.js */
class __TwigTemplate_3a97288911e723357da989bee13a1681e4aeebfc9b9322c96dc52baf269be35d extends Template
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

!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\"],a):\"object\"==typeof module&&module.exports?module.exports=function(b,c){return void 0===c&&(c=\"undefined\"!=typeof window?require(\"jquery\"):require(\"jquery\")(b)),a(c),c}:a(jQuery)}(function(a){a.extend(a.FE.DEFAULTS,{quickInsertButtons:[\"image\",\"table\",\"ul\",\"ol\",\"hr\"],quickInsertTags:[\"p\",\"div\",\"h1\",\"h2\",\"h3\",\"h4\",\"h5\",\"h6\",\"pre\",\"blockquote\"]}),a.FE.QUICK_INSERT_BUTTONS={image:{icon:\"insertImage\",callback:function(){var b=this;b.shared.\$qi_image_input||(b.shared.\$qi_image_input=a('<input accept=\"image/*\" name=\"quickInsertImage'+this.id+'\" style=\"display: none;\" type=\"file\">'),a(\"body\").append(b.shared.\$qi_image_input),b.events.\$on(b.shared.\$qi_image_input,\"change\",function(){var b=a(this).data(\"inst\");this.files&&(b.quickInsert.hide(),b.image.upload(this.files)),a(this).val(\"\")},!0)),b.\$qi_image_input=b.shared.\$qi_image_input,b.helpers.isMobile()&&b.selection.save(),b.\$qi_image_input.data(\"inst\",b).trigger(\"click\")},requiredPlugin:\"image\",title:\"Insert Image\"},table:{icon:\"insertTable\",callback:function(){this.quickInsert.hide(),this.table.insert(2,2),this.undo.saveStep()},requiredPlugin:\"table\",title:\"Insert Table\"},ol:{icon:\"formatOL\",callback:function(){this.quickInsert.hide(),this.lists.format(\"OL\"),this.undo.saveStep()},requiredPlugin:\"lists\",title:\"Ordered List\"},ul:{icon:\"formatUL\",callback:function(){this.quickInsert.hide(),this.lists.format(\"UL\"),this.undo.saveStep()},requiredPlugin:\"lists\",title:\"Unordered List\"},hr:{icon:\"insertHR\",callback:function(){this.quickInsert.hide(),this.commands.insertHR(),this.undo.saveStep()},title:\"Insert Horizontal Line\"}},a.FE.DefineIcon(\"quickInsert\",{PATH:'<path d=\"M22,16.75 L16.75,16.75 L16.75,22 L15.25,22.000 L15.25,16.75 L10,16.75 L10,15.25 L15.25,15.25 L15.25,10 L16.75,10 L16.75,15.25 L22,15.25 L22,16.75 Z\"/>',template:\"svg\"}),a.FE.RegisterQuickInsertCommand=function(b,c){a.FE.QUICK_INSERT_BUTTONS[b]=c},a.FE.PLUGINS.quickInsert=function(b){function c(a){var c,d,e;c=a.offset().top-b.\$box.offset().top,d=0-k.outerWidth(),e=(k.outerHeight()-a.outerHeight())/2,b.opts.iframe&&(c+=b.\$iframe.offset().top-b.helpers.scrollTop()),k.hasClass(\"fr-on\")&&c>=0&&l.css(\"top\",c-e),c>=0&&c-e<=b.\$box.outerHeight()-a.outerHeight()?(k.hasClass(\"fr-hidden\")&&(k.hasClass(\"fr-on\")&&g(),k.removeClass(\"fr-hidden\")),k.css(\"top\",c-e)):k.hasClass(\"fr-visible\")&&(k.addClass(\"fr-hidden\"),h()),k.css(\"left\",d)}function d(a){k||i(),k.hasClass(\"fr-on\")&&h(),b.\$box.append(k),c(a),k.data(\"tag\",a),k.addClass(\"fr-visible\")}function e(){if(b.core.hasFocus()){var c=b.selection.element();b.node.isBlock(c)||(c=b.node.blockParent(c)),c&&b.node.isEmpty(c)&&b.node.isElement(c.parentNode)?k&&k.data(\"tag\").is(a(c))&&k.hasClass(\"fr-on\")?h():b.selection.isCollapsed()&&d(a(c)):f()}}function f(){k&&(b.html.checkIfEmpty(),k.hasClass(\"fr-on\")&&h(),k.removeClass(\"fr-visible fr-on\"),k.css(\"left\",-9999).css(\"top\",-9999))}function g(c){if(c&&c.preventDefault(),k.hasClass(\"fr-on\")&&!k.hasClass(\"fr-hidden\"))h();else{if(!b.shared.\$qi_helper){for(var d=b.opts.quickInsertButtons,e='<div class=\"fr-qi-helper\">',f=0,g=0;g<d.length;g++){var i=a.FE.QUICK_INSERT_BUTTONS[d[g]];i&&(!i.requiredPlugin||a.FE.PLUGINS[i.requiredPlugin]&&b.opts.pluginsEnabled.indexOf(i.requiredPlugin)>=0)&&(e+='<a class=\"fr-btn fr-floating-btn\" role=\"button\" title=\"'+b.language.translate(i.title)+'\" tabIndex=\"-1\" data-cmd=\"'+d[g]+'\" style=\"transition-delay: '+.025*f++ +'s;\">'+b.icon.create(i.icon)+\"</a>\")}e+=\"</div>\",b.shared.\$qi_helper=a(e),b.tooltip.bind(b.shared.\$qi_helper,\".fr-qi-helper > a.fr-btn\")}l=b.shared.\$qi_helper,l.appendTo(b.\$box),setTimeout(function(){l.css(\"top\",parseFloat(k.css(\"top\"))),l.css(\"left\",parseFloat(k.css(\"left\"))+k.outerWidth()),l.find(\"a\").addClass(\"fr-size-1\"),k.addClass(\"fr-on\")},10)}}function h(){var a=b.\$box.find(\".fr-qi-helper\");a.length&&(a.find(\"a\").removeClass(\"fr-size-1\"),a.css(\"left\",-9999),k.hasClass(\"fr-hidden\")||k.removeClass(\"fr-on\"))}function i(){b.shared.\$quick_insert||(b.shared.\$quick_insert=a('<div class=\"fr-quick-insert\"><a class=\"fr-floating-btn\" role=\"button\" tabIndex=\"-1\" title=\"'+b.language.translate(\"Quick Insert\")+'\">'+b.icon.create(\"quickInsert\")+\"</a></div>\")),k=b.shared.\$quick_insert,b.tooltip.bind(b.\$box,\".fr-quick-insert > a.fr-floating-btn\"),b.events.on(\"destroy\",function(){k.removeClass(\"fr-on\").appendTo(a(\"body\")).css(\"left\",-9999).css(\"top\",-9999),l&&(h(),l.appendTo(a(\"body\")))},!0),b.events.on(\"shared.destroy\",function(){k.html(\"\").removeData().remove(),k=null,l&&(l.html(\"\").removeData().remove(),l=null)},!0),b.events.on(\"commands.before\",f),b.events.on(\"commands.after\",function(){b.popups.areVisible()||e()}),b.events.bindClick(b.\$box,\".fr-quick-insert > a\",g),b.events.bindClick(b.\$box,\".fr-qi-helper > a.fr-btn\",function(c){var d=a(c.currentTarget).data(\"cmd\");a.FE.QUICK_INSERT_BUTTONS[d].callback.apply(b,[c.currentTarget])}),b.events.\$on(b.\$wp,\"scroll\",function(){k.hasClass(\"fr-visible\")&&c(k.data(\"tag\"))})}function j(){return!!b.\$wp&&(b.opts.iframe&&b.\$el.parent(\"html\").find(\"head\").append('<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css\">'),b.popups.onShow(\"image.edit\",f),b.events.on(\"mouseup\",e),b.helpers.isMobile()&&b.events.\$on(a(b.o_doc),\"selectionchange\",e),b.events.on(\"blur\",f),b.events.on(\"keyup\",e),void b.events.on(\"keydown\",function(){setTimeout(function(){e()},0)}))}var k,l;return{_init:j,hide:f}}});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/quick_insert.min.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/quick_insert.min.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/plugins/quick_insert.min.js");
    }
}
