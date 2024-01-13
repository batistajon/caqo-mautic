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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/ja.html.js */
class __TwigTemplate_9084de69f5485f6cdf21dcd15a7876bdb599a516feb8c4c21b3ace285f45be87 extends Template
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
        echo "<h2>操作のヒント</h2>
<p>UIの操作は、オペレーティングシステムの標準ファイルマネージャにほぼ準拠しています。ただし、モバイルブラウザではドラッグ＆ドロップはできません。</p>
<ul>
\t<li>右クリックまたはロングタップでコンテキストメニューを表示します。</li>
\t<li>アイテムを移動/コピーするには、フォルダツリーまたはワークスペースにドラッグ＆ドロップします。</li>
\t<li>ワークスペース内のアイテムの選択は、ShiftキーまたはAltキー(Optionキー)で選択範囲を拡張できます。</li>
\t<li>コピー先のフォルダまたはワークスペースにドラッグアンドドロップして、ファイルとフォルダをアップロードします。</li>
\t<li>アップロードダイアログでは、クリップボードのデータやURLリストのペースト/ドロップ、他のブラウザやファイルマネージャからのドラッグ＆ドロップなどを受け入れることができます。</li>
\t<li>Altキー(Optionキー)を押しながらドラッグすると、ブラウザの外にドラッグできます。Google Chromeでダウンロード操作になります。</li>
</ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/ja.html.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/ja.html.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/ja.html.js");
    }
}
