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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/zh-cn.js */
class __TwigTemplate_8719e6889df13ebe7c7b68ab54e2050add4aeaa8778409c25a47da1904f442e7 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'zh-cn', {
\tauto: '自动',
\tbgColorTitle: '背景颜色',
\tcolors: {
\t\t'000': '黑色',
\t\t'800000': '栗色',
\t\t'8B4513': '鞍褐色',
\t\t'2F4F4F': '深岩灰色',
\t\t'008080': '凫绿色',
\t\t'000080': '海军蓝色',
\t\t'4B0082': '靛色',
\t\t'696969': '深灰色',
\t\tB22222: '火砖红色',
\t\tA52A2A: '褐色',
\t\tDAA520: '金菊色',
\t\t'006400': '深绿色',
\t\t'40E0D0': '绿松石色',
\t\t'0000CD': '中蓝色',
\t\t'800080': '紫色',
\t\t'808080': '灰色',
\t\tF00: '红色',
\t\tFF8C00: '深橙色',
\t\tFFD700: '金色',
\t\t'008000': '绿色',
\t\t'0FF': '青色',
\t\t'00F': '蓝色',
\t\tEE82EE: '紫罗兰色',
\t\tA9A9A9: '暗灰色',
\t\tFFA07A: '浅鲑红色',
\t\tFFA500: '橙色',
\t\tFFFF00: '黄色',
\t\t'00FF00': '鲜绿色',
\t\tAFEEEE: '灰绿松石色',
\t\tADD8E6: '浅蓝色',
\t\tDDA0DD: '梅红色',
\t\tD3D3D3: '浅灰色',
\t\tFFF0F5: '薰衣草紫红色',
\t\tFAEBD7: '古董白色',
\t\tFFFFE0: '浅黄色',
\t\tF0FFF0: '蜜瓜绿色',
\t\tF0FFFF: '浅蓝色',
\t\tF0F8FF: '爱丽丝蓝色',
\t\tE6E6FA: '薰衣草紫色',
\t\tFFF: '白色',
\t\t'1ABC9C': '浓青色',
\t\t'2ECC71': '碧绿色',
\t\t'3498DB': '亮蓝色',
\t\t'9B59B6': '紫水晶色',
\t\t'4E5F70': '灰蓝色',
\t\t'F1C40F': '鲜黄色',
\t\t'16A085': '深青色',
\t\t'27AE60': '深碧绿色',
\t\t'2980B9': '浓蓝色',
\t\t'8E44AD': '深紫罗兰色',
\t\t'2C3E50': '不饱和蓝色',
\t\t'F39C12': '橙色',
\t\t'E67E22': '红萝卜红色',
\t\t'E74C3C': '灰红色',
\t\t'ECF0F1': '亮银色',
\t\t'95A5A6': '浅灰青色',
\t\t'DDD': '浅灰色',
\t\t'D35400': '南瓜黄色',
\t\t'C0392B': '浓红色',
\t\t'BDC3C7': '银色',
\t\t'7F8C8D': '灰青色',
\t\t'999': '深灰色'
\t},
\tmore: '其它颜色...',
\tpanelTitle: '颜色',
\ttextColorTitle: '文本颜色'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/zh-cn.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/zh-cn.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/zh-cn.js");
    }
}
