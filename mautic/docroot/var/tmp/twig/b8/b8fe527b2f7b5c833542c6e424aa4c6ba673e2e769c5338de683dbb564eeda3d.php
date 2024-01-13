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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/zh.js */
class __TwigTemplate_88892ad22c7456bd7620bfdc6771051755130bf5c94434a6eab687b380c4e0f7 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"zh\",{btnIgnore:\"忽略\",btnIgnoreAll:\"全部忽略\",btnReplace:\"取代\",btnReplaceAll:\"全部取代\",btnUndo:\"復原\",changeTo:\"更改為\",errorLoading:\"無法聯系侍服器: %s.\",ieSpellDownload:\"尚未安裝拼字檢查元件。您是否想要現在下載？\",manyChanges:\"拼字檢查完成：更改了 %1 個單字\",noChanges:\"拼字檢查完成：未更改任何單字\",noMispell:\"拼字檢查完成：未發現拼字錯誤\",noSuggestions:\"- 無建議值 -\",notAvailable:\"抱歉，服務目前暫不可用\",notInDic:\"不在字典中\",oneChange:\"拼字檢查完成：更改了 1 個單字\",progress:\"進行拼字檢查中…\",title:\"拼字檢查\",toolbar:\"拼字檢查\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/zh.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/zh.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/zh.js");
    }
}
