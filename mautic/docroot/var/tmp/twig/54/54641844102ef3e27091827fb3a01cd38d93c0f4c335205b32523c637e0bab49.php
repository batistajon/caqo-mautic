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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/textarea.js */
class __TwigTemplate_5d469bf8a997ec18d7b7ac1d85dcbe332fab4e8691a2db3c8883b17f836221f9 extends Template
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
CKEDITOR.dialog.add(\"textarea\",function(b){return{title:b.lang.forms.textarea.title,minWidth:350,minHeight:220,getModel:function(a){return(a=a.getSelection().getSelectedElement())&&\"textarea\"==a.getName()?a:null},onShow:function(){var a=this.getModel(this.getParentEditor());a&&this.setupContent(a)},onOk:function(){var a=this.getParentEditor(),b=this.getModel(a),c=this.getMode(a)==CKEDITOR.dialog.CREATION_MODE;c&&(b=a.document.createElement(\"textarea\"));this.commitContent(b);c&&a.insertElement(b)},
contents:[{id:\"info\",label:b.lang.forms.textarea.title,title:b.lang.forms.textarea.title,elements:[{id:\"_cke_saved_name\",type:\"text\",label:b.lang.common.name,\"default\":\"\",accessKey:\"N\",setup:function(a){this.setValue(a.data(\"cke-saved-name\")||a.getAttribute(\"name\")||\"\")},commit:function(a){this.getValue()?a.data(\"cke-saved-name\",this.getValue()):(a.data(\"cke-saved-name\",!1),a.removeAttribute(\"name\"))}},{type:\"hbox\",widths:[\"50%\",\"50%\"],children:[{id:\"cols\",type:\"text\",label:b.lang.forms.textarea.cols,
\"default\":\"\",accessKey:\"C\",style:\"width:50px\",validate:CKEDITOR.dialog.validate.integer(b.lang.common.validateNumberFailed),setup:function(a){a=a.hasAttribute(\"cols\")&&a.getAttribute(\"cols\");this.setValue(a||\"\")},commit:function(a){this.getValue()?a.setAttribute(\"cols\",this.getValue()):a.removeAttribute(\"cols\")}},{id:\"rows\",type:\"text\",label:b.lang.forms.textarea.rows,\"default\":\"\",accessKey:\"R\",style:\"width:50px\",validate:CKEDITOR.dialog.validate.integer(b.lang.common.validateNumberFailed),setup:function(a){a=
a.hasAttribute(\"rows\")&&a.getAttribute(\"rows\");this.setValue(a||\"\")},commit:function(a){this.getValue()?a.setAttribute(\"rows\",this.getValue()):a.removeAttribute(\"rows\")}}]},{id:\"value\",type:\"textarea\",label:b.lang.forms.textfield.value,\"default\":\"\",setup:function(a){this.setValue(a.\$.defaultValue)},commit:function(a){a.\$.value=a.\$.defaultValue=this.getValue()}},{id:\"required\",type:\"checkbox\",label:b.lang.forms.textfield.required,\"default\":\"\",accessKey:\"Q\",value:\"required\",setup:CKEDITOR.plugins.forms._setupRequiredAttribute,
commit:function(a){this.getValue()?a.setAttribute(\"required\",\"required\"):a.removeAttribute(\"required\")}}]}]}});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/textarea.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/textarea.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/textarea.js");
    }
}
