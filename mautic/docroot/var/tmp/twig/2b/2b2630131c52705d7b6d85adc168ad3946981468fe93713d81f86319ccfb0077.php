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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ja.js */
class __TwigTemplate_ff177345a6243862e5f1de0771eba4b8ea201e002a34280fa771abec05354d8a extends Template
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
        echo "﻿CKEDITOR.plugins.setLang(\"wsc\",\"ja\",{btnIgnore:\"無視\",btnIgnoreAll:\"すべて無視\",btnReplace:\"置換\",btnReplaceAll:\"すべて置換\",btnUndo:\"やり直し\",changeTo:\"変更\",errorLoading:\"アプリケーションサービスホスト読込みエラー: %s.\",ieSpellDownload:\"スペルチェッカーがインストールされていません。今すぐダウンロードしますか?\",manyChanges:\"スペルチェック完了: %1 語句変更されました\",noChanges:\"スペルチェック完了: 語句は変更されませんでした\",noMispell:\"スペルチェック完了: スペルの誤りはありませんでした\",noSuggestions:\"- 該当なし -\",notAvailable:\"申し訳ありません、現在サービスを利用することができません\",notInDic:\"辞書にありません\",oneChange:\"スペルチェック完了: １語句変更されました\",progress:\"スペルチェック処理中...\",title:\"スペルチェック\",
toolbar:\"スペルチェック\"});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ja.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ja.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/wsc/lang/ja.js");
    }
}
