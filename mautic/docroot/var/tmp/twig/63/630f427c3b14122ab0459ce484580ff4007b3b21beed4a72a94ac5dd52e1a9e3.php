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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/zh.js */
class __TwigTemplate_5f89d006390ad1f65856ca89f4145e3aa1892a38219de3340de2287ea609482c extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'zh', {
\tauto: '自動',
\tbgColorTitle: '背景顏色',
\tcolors: {
\t\t'000': '黑色',
\t\t'800000': '栗色',
\t\t'8B4513': '鞍褐色',
\t\t'2F4F4F': '暗瓦灰色',
\t\t'008080': '水壓色',
\t\t'000080': '丈青澀',
\t\t'4B0082': '靛青',
\t\t'696969': '深灰色',
\t\tB22222: '磚紅色',
\t\tA52A2A: '褐色',
\t\tDAA520: '金黃色',
\t\t'006400': '深綠色',
\t\t'40E0D0': '青綠色',
\t\t'0000CD': '藍色',
\t\t'800080': '紫色',
\t\t'808080': '灰色',
\t\tF00: '紅色',
\t\tFF8C00: '深橘色',
\t\tFFD700: '金色',
\t\t'008000': '綠色',
\t\t'0FF': '青色',
\t\t'00F': '藍色',
\t\tEE82EE: '紫色',
\t\tA9A9A9: '暗灰色',
\t\tFFA07A: '亮鮭紅',
\t\tFFA500: '橘色',
\t\tFFFF00: '黃色',
\t\t'00FF00': '鮮綠色',
\t\tAFEEEE: '綠松色',
\t\tADD8E6: '淺藍色',
\t\tDDA0DD: '枚紅色',
\t\tD3D3D3: '淺灰色',
\t\tFFF0F5: '淺紫色',
\t\tFAEBD7: '骨董白',
\t\tFFFFE0: '淺黃色',
\t\tF0FFF0: '蜜瓜綠',
\t\tF0FFFF: '天藍色',
\t\tF0F8FF: '愛麗斯蘭',
\t\tE6E6FA: '淺紫色',
\t\tFFF: '白色',
\t\t'1ABC9C': '深青色',
\t\t'2ECC71': '翠綠色',
\t\t'3498DB': '亮藍色',
\t\t'9B59B6': '紫色',
\t\t'4E5F70': '藍灰色',
\t\t'F1C40F': '鮮黃色',
\t\t'16A085': '暗青色',
\t\t'27AE60': '暗綠色',
\t\t'2980B9': '深藍色',
\t\t'8E44AD': '暗紫色',
\t\t'2C3E50': '不飽和藍色',
\t\t'F39C12': '橘色',
\t\t'E67E22': '胡蘿蔔色',
\t\t'E74C3C': '淡紅色',
\t\t'ECF0F1': '亮銀色',
\t\t'95A5A6': '淺灰青色',
\t\t'DDD': '淺灰色',
\t\t'D35400': '南瓜色',
\t\t'C0392B': '深紅色',
\t\t'BDC3C7': '銀色',
\t\t'7F8C8D': '灰青色',
\t\t'999': '深灰色'
\t},
\tmore: '更多顏色',
\tpanelTitle: '顏色',
\ttextColorTitle: '文字顏色'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/zh.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/zh.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/zh.js");
    }
}
