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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/plugin.js */
class __TwigTemplate_abd0d2c62eedd6285269df2c2af3fbb09307b628e6de177ed9032c782b70e89e extends Template
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
        echo "﻿CKEDITOR.plugins.add(\"wsc\",{requires:\"dialog\",lang:\"af,ar,bg,bn,bs,ca,cs,cy,da,de,el,en-au,en-ca,en-gb,en,eo,es,et,eu,fa,fi,fo,fr-ca,fr,gl,gu,he,hi,hr,hu,is,it,ja,ka,km,ko,lt,lv,mk,mn,ms,nb,nl,no,pl,pt-br,pt,ro,ru,sk,sl,sr-latn,sr,sv,th,tr,ug,uk,vi,zh-cn,zh\",icons:\"spellchecker\",hidpi:!0,parseApi:function(a){a.config.wsc_onFinish=\"function\"===typeof a.config.wsc_onFinish?a.config.wsc_onFinish:function(){};a.config.wsc_onClose=\"function\"===typeof a.config.wsc_onClose?a.config.wsc_onClose:function(){}},
parseConfig:function(a){a.config.wsc_customerId=a.config.wsc_customerId||CKEDITOR.config.wsc_customerId||\"1:ua3xw1-2XyGJ3-GWruD3-6OFNT1-oXcuB1-nR6Bp4-hgQHc-EcYng3-sdRXG3-NOfFk\";a.config.wsc_customDictionaryIds=a.config.wsc_customDictionaryIds||CKEDITOR.config.wsc_customDictionaryIds||\"\";a.config.wsc_userDictionaryName=a.config.wsc_userDictionaryName||CKEDITOR.config.wsc_userDictionaryName||\"\";a.config.wsc_customLoaderScript=a.config.wsc_customLoaderScript||CKEDITOR.config.wsc_customLoaderScript;a.config.wsc_interfaceLang=
a.config.wsc_interfaceLang;CKEDITOR.config.wsc_cmd=a.config.wsc_cmd||CKEDITOR.config.wsc_cmd||\"spell\";CKEDITOR.config.wsc_version=\"v4.3.0-master-d769233\";CKEDITOR.config.wsc_removeGlobalVariable=!0},onLoad:function(a){\"moono-lisa\"==(CKEDITOR.skinName||a.config.skin)&&CKEDITOR.document.appendStyleSheet(CKEDITOR.getUrl(this.path+\"skins/\"+CKEDITOR.skin.name+\"/wsc.css\"))},init:function(a){var b=CKEDITOR.env;this.parseConfig(a);this.parseApi(a);a.addCommand(\"checkspell\",new CKEDITOR.dialogCommand(\"checkspell\")).modes=
{wysiwyg:!CKEDITOR.env.opera&&!CKEDITOR.env.air&&document.domain==window.location.hostname&&!(b.ie&&(8>b.version||b.quirks))};\"undefined\"==typeof a.plugins.scayt&&a.ui.addButton&&a.ui.addButton(\"SpellChecker\",{label:a.lang.wsc.toolbar,click:function(a){var b=a.elementMode==CKEDITOR.ELEMENT_MODE_INLINE?a.container.getText():a.document.getBody().getText();(b=b.replace(/\\s/g,\"\"))?a.execCommand(\"checkspell\"):alert(\"Nothing to check!\")},toolbar:\"spellchecker,10\"});CKEDITOR.dialog.add(\"checkspell\",this.path+
(CKEDITOR.env.ie&&7>=CKEDITOR.env.version?\"dialogs/wsc_ie.js\":window.postMessage?\"dialogs/wsc.js\":\"dialogs/wsc_ie.js\"))}});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/plugin.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/plugin.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/plugin.js");
    }
}
