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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/checkbox.js */
class __TwigTemplate_7b1c727861a1c8a8cf8df0d53adf3593972ac15cc857264ea0087b0d01cbf177 extends Template
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
CKEDITOR.dialog.add(\"checkbox\",function(d){return{title:d.lang.forms.checkboxAndRadio.checkboxTitle,minWidth:350,minHeight:140,getModel:function(a){return(a=a.getSelection().getSelectedElement())&&\"checkbox\"==a.getAttribute(\"type\")?a:null},onShow:function(){var a=this.getModel(this.getParentEditor());a&&this.setupContent(a)},onOk:function(){var a=this.getParentEditor(),b=this.getModel(a);b||(b=a.document.createElement(\"input\"),b.setAttribute(\"type\",\"checkbox\"),a.insertElement(b));this.commitContent({element:b})},
contents:[{id:\"info\",label:d.lang.forms.checkboxAndRadio.checkboxTitle,title:d.lang.forms.checkboxAndRadio.checkboxTitle,startupFocus:\"txtName\",elements:[{id:\"txtName\",type:\"text\",label:d.lang.common.name,\"default\":\"\",accessKey:\"N\",setup:function(a){this.setValue(a.data(\"cke-saved-name\")||a.getAttribute(\"name\")||\"\")},commit:function(a){a=a.element;this.getValue()?a.data(\"cke-saved-name\",this.getValue()):(a.data(\"cke-saved-name\",!1),a.removeAttribute(\"name\"))}},{id:\"txtValue\",type:\"text\",label:d.lang.forms.checkboxAndRadio.value,
\"default\":\"\",accessKey:\"V\",setup:function(a){a=a.getAttribute(\"value\");this.setValue(CKEDITOR.env.ie&&\"on\"==a?\"\":a)},commit:function(a){var b=a.element,c=this.getValue();!c||CKEDITOR.env.ie&&\"on\"==c?CKEDITOR.env.ie?(c=new CKEDITOR.dom.element(\"input\",b.getDocument()),b.copyAttributes(c,{value:1}),c.replace(b),d.getSelection().selectElement(c),a.element=c):b.removeAttribute(\"value\"):b.setAttribute(\"value\",c)}},{id:\"cmbSelected\",type:\"checkbox\",label:d.lang.forms.checkboxAndRadio.selected,\"default\":\"\",
accessKey:\"S\",value:\"checked\",setup:function(a){this.setValue(a.getAttribute(\"checked\"))},commit:function(a){var b=a.element;if(CKEDITOR.env.ie){var c=!!b.getAttribute(\"checked\"),e=!!this.getValue();c!=e&&(c=CKEDITOR.dom.element.createFromHtml('\\x3cinput type\\x3d\"checkbox\"'+(e?' checked\\x3d\"checked\"':\"\")+\"/\\x3e\",d.document),b.copyAttributes(c,{type:1,checked:1}),c.replace(b),d.getSelection().selectElement(c),a.element=c)}else a=this.getValue(),CKEDITOR.env.webkit&&(b.\$.checked=a),a?b.setAttribute(\"checked\",
\"checked\"):b.removeAttribute(\"checked\")}},{id:\"required\",type:\"checkbox\",label:d.lang.forms.checkboxAndRadio.required,\"default\":\"\",accessKey:\"Q\",value:\"required\",setup:CKEDITOR.plugins.forms._setupRequiredAttribute,commit:function(a){a=a.element;this.getValue()?a.setAttribute(\"required\",\"required\"):a.removeAttribute(\"required\")}}]}]}});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/checkbox.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/checkbox.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/checkbox.js");
    }
}
