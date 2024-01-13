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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ku.js */
class __TwigTemplate_27dcf1d078b58a86842a9a950a184962e008bf368103eecc904125f289812251 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'ku', {
\tauto: 'خۆکار',
\tbgColorTitle: 'ڕەنگی پاشبنەما',
\tcolors: {
\t\t'000': 'ڕەش',
\t\t'800000': 'سۆرو ماڕوونی',
\t\t'8B4513': 'ماڕوونی',
\t\t'2F4F4F': 'سەوزی تاریك',
\t\t'008080': 'سەوز و شین',
\t\t'000080': 'شینی تۆخ',
\t\t'4B0082': 'مۆری تۆخ',
\t\t'696969': 'ڕەساسی تۆخ',
\t\tB22222: 'سۆری تۆخ',
\t\tA52A2A: 'قاوەیی',
\t\tDAA520: 'قاوەیی بریسکەدار',
\t\t'006400': 'سەوزی تۆخ',
\t\t'40E0D0': 'شینی ناتۆخی بریسکەدار',
\t\t'0000CD': 'شینی مامناوەند',
\t\t'800080': 'پەمبەیی',
\t\t'808080': 'ڕەساسی',
\t\tF00: 'سۆر',
\t\tFF8C00: 'نارەنجی تۆخ',
\t\tFFD700: 'زەرد',
\t\t'008000': 'سەوز',
\t\t'0FF': 'شینی ئاسمانی',
\t\t'00F': 'شین',
\t\tEE82EE: 'پەمەیی',
\t\tA9A9A9: 'ڕەساسی تاریک',
\t\tFFA07A: 'نارەنجی ناتۆخ',
\t\tFFA500: 'نارەنجی',
\t\tFFFF00: 'زەرد',
\t\t'00FF00': 'سەوز',
\t\tAFEEEE: 'شینی ناتۆخ',
\t\tADD8E6: 'شینی زۆر ناتۆخ',
\t\tDDA0DD: 'پەمەیی ناتۆخ',
\t\tD3D3D3: 'ڕەساسی بریسکەدار',
\t\tFFF0F5: 'جەرگی زۆر ناتۆخ',
\t\tFAEBD7: 'جەرگی ناتۆخ',
\t\tFFFFE0: 'سپی ناتۆخ',
\t\tF0FFF0: 'هەنگوینی ناتۆخ',
\t\tF0FFFF: 'شینێکی زۆر ناتۆخ',
\t\tF0F8FF: 'شینێکی ئاسمانی زۆر ناتۆخ',
\t\tE6E6FA: 'شیری',
\t\tFFF: 'سپی',
\t\t'1ABC9C': 'شینی ئاسمانی بەهیز',
\t\t'2ECC71': 'زەمروتی سەوز',
\t\t'3498DB': 'شینی ناتۆخ',
\t\t'9B59B6': 'ئەرخەوانی، وەنەوشەیی',
\t\t'4E5F70': 'شینی ڕه‌ساسی',
\t\t'F1C40F': 'زەردی زیندوو',
\t\t'16A085': 'شینی ئاسمانی تاریک',
\t\t'27AE60': 'زەمروتی سەوزی تاریک',
\t\t'2980B9': 'شینی تۆخ',
\t\t'8E44AD': 'پەمەیی تاریک',
\t\t'2C3E50': 'شینی ڕەشوسپی',
\t\t'F39C12': 'نارنجی',
\t\t'E67E22': 'گێزەر',
\t\t'E74C3C': 'سوری زەرد هەڵگەڕاو',
\t\t'ECF0F1': 'زیوی ڕووناک',
\t\t'95A5A6': 'شینی ئاسمانی ڕه‌ساسی بریسکه‌دار',
\t\t'DDD': 'ڕەساسی بریسکەدار',
\t\t'D35400': 'کولەکەی شیرین',
\t\t'C0392B': 'سوری بەهێز',
\t\t'BDC3C7': 'زیوی',
\t\t'7F8C8D': 'شینی ئاسمانی ڕه‌ساسی',
\t\t'999': 'ڕەساسی تۆخ'
\t},
\tmore: 'ڕەنگی زیاتر...',
\tpanelTitle: 'ڕەنگەکان',
\ttextColorTitle: 'ڕەنگی دەق'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ku.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ku.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ku.js");
    }
}
