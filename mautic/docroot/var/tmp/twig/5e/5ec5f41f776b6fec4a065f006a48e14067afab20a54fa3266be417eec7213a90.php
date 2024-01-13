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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/zh-cn.js */
class __TwigTemplate_0dc37f54e7188b0c426480e7e4a2129a6a98985d3e14e1ccbf8150fd1d7bdd22 extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"zh-cn\",{btnIgnore:\"忽略\",btnIgnoreAll:\"全部忽略\",btnReplace:\"替换\",btnReplaceAll:\"全部替换\",btnUndo:\"撤消\",changeTo:\"更改为\",errorLoading:\"加载应该服务主机时出错: %s.\",ieSpellDownload:\"拼写检查插件还没安装, 您是否想现在就下载?\",manyChanges:\"拼写检查完成: 更改了 %1 个单词\",noChanges:\"拼写检查完成: 没有更改任何单词\",noMispell:\"拼写检查完成: 没有发现拼写错误\",noSuggestions:\"- 没有建议 -\",notAvailable:\"抱歉, 服务目前暂不可用\",notInDic:\"没有在字典里\",oneChange:\"拼写检查完成: 更改了一个单词\",progress:\"正在进行拼写检查...\",title:\"拼写检查\",toolbar:\"拼写检查\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/zh-cn.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/zh-cn.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/zh-cn.js");
    }
}
