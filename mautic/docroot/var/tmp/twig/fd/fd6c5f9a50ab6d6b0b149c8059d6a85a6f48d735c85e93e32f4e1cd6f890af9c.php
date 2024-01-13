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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/form.js */
class __TwigTemplate_3a7970ee1dae95e3e151f46aef522e80e096e09f218a7696d7ba83af356c8d31 extends Template
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
CKEDITOR.dialog.add(\"form\",function(a){var d={action:1,id:1,method:1,enctype:1,target:1};return{title:a.lang.forms.form.title,minWidth:350,minHeight:200,getModel:function(b){return b.elementPath().contains(\"form\",1)||null},onShow:function(){var b=this.getModel(this.getParentEditor());b&&this.setupContent(b)},onOk:function(){var b=this.getParentEditor(),a=this.getModel(b);a||(a=b.document.createElement(\"form\"),a.appendBogus(),b.insertElement(a));this.commitContent(a)},onLoad:function(){function a(b){this.setValue(b.getAttribute(this.id)||
\"\")}function e(a){this.getValue()?a.setAttribute(this.id,this.getValue()):a.removeAttribute(this.id)}this.foreach(function(c){d[c.id]&&(c.setup=a,c.commit=e)})},contents:[{id:\"info\",label:a.lang.forms.form.title,title:a.lang.forms.form.title,elements:[{id:\"txtName\",bidi:!0,type:\"text\",label:a.lang.common.name,\"default\":\"\",accessKey:\"N\",setup:function(a){this.setValue(a.data(\"cke-saved-name\")||a.getAttribute(\"name\")||\"\")},commit:function(a){this.getValue()?a.data(\"cke-saved-name\",this.getValue()):
(a.data(\"cke-saved-name\",!1),a.removeAttribute(\"name\"))}},{id:\"action\",type:\"text\",label:a.lang.forms.form.action,\"default\":\"\",accessKey:\"T\"},{type:\"hbox\",widths:[\"45%\",\"55%\"],children:[{id:\"id\",type:\"text\",label:a.lang.common.id,\"default\":\"\",accessKey:\"I\"},{id:\"enctype\",type:\"select\",label:a.lang.forms.form.encoding,style:\"width:100%\",accessKey:\"E\",\"default\":\"\",items:[[\"\"],[\"text/plain\"],[\"multipart/form-data\"],[\"application/x-www-form-urlencoded\"]]}]},{type:\"hbox\",widths:[\"45%\",\"55%\"],children:[{id:\"target\",
type:\"select\",label:a.lang.common.target,style:\"width:100%\",accessKey:\"M\",\"default\":\"\",items:[[a.lang.common.notSet,\"\"],[a.lang.common.targetNew,\"_blank\"],[a.lang.common.targetTop,\"_top\"],[a.lang.common.targetSelf,\"_self\"],[a.lang.common.targetParent,\"_parent\"]]},{id:\"method\",type:\"select\",label:a.lang.forms.form.method,accessKey:\"M\",\"default\":\"GET\",items:[[\"GET\",\"get\"],[\"POST\",\"post\"]]}]}]}]}});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/form.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/form.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/forms/dialogs/form.js");
    }
}
