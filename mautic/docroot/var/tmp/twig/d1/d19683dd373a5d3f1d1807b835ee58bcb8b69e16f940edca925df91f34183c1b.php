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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/iframe/dialogs/iframe.js */
class __TwigTemplate_7628b7dc0efca3696cb1d73d1fbf8d279f94bd49ff76f82490788f1adf9de2cf extends Template
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
(function(){function d(c){var e=this instanceof CKEDITOR.ui.dialog.checkbox;c.hasAttribute(this.id)&&(c=c.getAttribute(this.id),e?this.setValue(g[this.id][\"true\"]==c.toLowerCase()):this.setValue(c))}function f(c){var e=this.getValue(),a=this.att||this.id,d=this instanceof CKEDITOR.ui.dialog.checkbox?g[this.id][e]:e;\"\"===e||\"tabindex\"===a&&!1===e?c.removeAttribute(a):c.setAttribute(a,d)}var g={scrolling:{\"true\":\"yes\",\"false\":\"no\"},frameborder:{\"true\":\"1\",\"false\":\"0\"},tabindex:{\"true\":\"-1\",\"false\":!1}};
CKEDITOR.dialog.add(\"iframe\",function(c){var e=c.lang.iframe,a=c.lang.common,g=c.plugins.dialogadvtab;return{title:e.title,minWidth:350,minHeight:260,getModel:function(b){return(b=b.getSelection().getSelectedElement())&&\"iframe\"===b.data(\"cke-real-element-type\")?b:null},onShow:function(){this.fakeImage=this.iframeNode=null;var b=this.getSelectedElement();b&&b.data(\"cke-real-element-type\")&&\"iframe\"==b.data(\"cke-real-element-type\")&&(this.fakeImage=b,this.iframeNode=b=c.restoreRealElement(b),this.setupContent(b))},
onOk:function(){var b;b=this.fakeImage?this.iframeNode:new CKEDITOR.dom.element(\"iframe\");var a={},d={};this.commitContent(b,a,d);b=c.createFakeElement(b,\"cke_iframe\",\"iframe\",!0);b.setAttributes(d);b.setStyles(a);this.fakeImage?(b.replace(this.fakeImage),c.getSelection().selectElement(b)):c.insertElement(b)},contents:[{id:\"info\",label:a.generalTab,accessKey:\"I\",elements:[{type:\"vbox\",padding:0,children:[{id:\"src\",type:\"text\",label:a.url,required:!0,validate:CKEDITOR.dialog.validate.notEmpty(e.noUrl),
setup:d,commit:f}]},{type:\"hbox\",children:[{id:\"width\",type:\"text\",requiredContent:\"iframe[width]\",style:\"width:100%\",labelLayout:\"vertical\",label:a.width,validate:CKEDITOR.dialog.validate.htmlLength(a.invalidHtmlLength.replace(\"%1\",a.width)),setup:d,commit:f},{id:\"height\",type:\"text\",requiredContent:\"iframe[height]\",style:\"width:100%\",labelLayout:\"vertical\",label:a.height,validate:CKEDITOR.dialog.validate.htmlLength(a.invalidHtmlLength.replace(\"%1\",a.height)),setup:d,commit:f},{id:\"align\",type:\"select\",
requiredContent:\"iframe[align]\",\"default\":\"\",items:[[a.notSet,\"\"],[a.left,\"left\"],[a.right,\"right\"],[a.alignTop,\"top\"],[a.alignMiddle,\"middle\"],[a.alignBottom,\"bottom\"]],style:\"width:100%\",labelLayout:\"vertical\",label:a.align,setup:function(a,c){d.apply(this,arguments);if(c){var e=c.getAttribute(\"align\");this.setValue(e&&e.toLowerCase()||\"\")}},commit:function(a,c,d){f.apply(this,arguments);this.getValue()&&(d.align=this.getValue())}}]},{type:\"hbox\",widths:[\"33%\",\"33%\",\"33%\"],children:[{id:\"scrolling\",
type:\"checkbox\",requiredContent:\"iframe[scrolling]\",label:e.scrolling,setup:d,commit:f},{id:\"frameborder\",type:\"checkbox\",requiredContent:\"iframe[frameborder]\",label:e.border,setup:d,commit:f},{id:\"tabindex\",type:\"checkbox\",requiredContent:\"iframe[tabindex]\",label:e.tabindex,setup:d,commit:f}]},{type:\"hbox\",widths:[\"50%\",\"50%\"],children:[{id:\"name\",type:\"text\",requiredContent:\"iframe[name]\",label:a.name,setup:d,commit:f},{id:\"title\",type:\"text\",requiredContent:\"iframe[title]\",label:a.advisoryTitle,
setup:d,commit:f}]},{id:\"longdesc\",type:\"text\",requiredContent:\"iframe[longdesc]\",label:a.longDescr,setup:d,commit:f}]},g&&g.createAdvancedTab(c,{id:1,classes:1,styles:1},\"iframe\")]}})})();";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/iframe/dialogs/iframe.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/iframe/dialogs/iframe.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/iframe/dialogs/iframe.js");
    }
}