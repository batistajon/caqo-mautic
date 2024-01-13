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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/tr.js */
class __TwigTemplate_57ff731781664354ad934a9d293a8c866e30d8f428a35345a24cca66ee570f36 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'tr', {
\tauto: 'Otomatik',
\tbgColorTitle: 'Arka Renk',
\tcolors: {
\t\t'000': 'Siyah',
\t\t'800000': 'Kestane',
\t\t'8B4513': 'Koyu Kahverengi',
\t\t'2F4F4F': 'Koyu Kurşuni Gri',
\t\t'008080': 'Teal',
\t\t'000080': 'Mavi',
\t\t'4B0082': 'Çivit Mavisi',
\t\t'696969': 'Silik Gri',
\t\tB22222: 'Ateş Tuğlası',
\t\tA52A2A: 'Kahverengi',
\t\tDAA520: 'Altun Sırık',
\t\t'006400': 'Koyu Yeşil',
\t\t'40E0D0': 'Turkuaz',
\t\t'0000CD': 'Orta Mavi',
\t\t'800080': 'Pembe',
\t\t'808080': 'Gri',
\t\tF00: 'Kırmızı',
\t\tFF8C00: 'Koyu Portakal',
\t\tFFD700: 'Altın',
\t\t'008000': 'Yeşil',
\t\t'0FF': 'Ciyan',
\t\t'00F': 'Mavi',
\t\tEE82EE: 'Menekşe',
\t\tA9A9A9: 'Loş Gri',
\t\tFFA07A: 'Açık Sarımsı',
\t\tFFA500: 'Portakal',
\t\tFFFF00: 'Sarı',
\t\t'00FF00': 'Açık Yeşil',
\t\tAFEEEE: 'Sönük Turkuaz',
\t\tADD8E6: 'Açık Mavi',
\t\tDDA0DD: 'Mor',
\t\tD3D3D3: 'Açık Gri',
\t\tFFF0F5: 'Eflatun Pembe',
\t\tFAEBD7: 'Antik Beyaz',
\t\tFFFFE0: 'Açık Sarı',
\t\tF0FFF0: 'Balsarısı',
\t\tF0FFFF: 'Gök Mavisi',
\t\tF0F8FF: 'Reha Mavi',
\t\tE6E6FA: 'Eflatun',
\t\tFFF: 'Beyaz',
\t\t'1ABC9C': 'Koyu Camgöbeği',
\t\t'2ECC71': 'Zümrüt Yeşili',
\t\t'3498DB': 'Parlak Mavi',
\t\t'9B59B6': 'Ametist Moru',
\t\t'4E5F70': 'Kirli Gri Mavi',
\t\t'F1C40F': 'Canlı Sarı',
\t\t'16A085': 'Koyu Camgöbeği',
\t\t'27AE60': 'Koyu Zümrüt Yeşili',
\t\t'2980B9': 'Koyu Mavi',
\t\t'8E44AD': 'Koyu Menekşe',
\t\t'2C3E50': 'Koyu Lacivert',
\t\t'F39C12': 'Turuncu',
\t\t'E67E22': 'Havuç Turuncusu',
\t\t'E74C3C': 'Soluk Kırmızı',
\t\t'ECF0F1': 'Parlak Gümüş',
\t\t'95A5A6': 'Açık Kirli Gri Camgöbeği',
\t\t'DDD': 'Açık Gri',
\t\t'D35400': 'Balkabağı Turuncusu',
\t\t'C0392B': 'Kan Kırmızı',
\t\t'BDC3C7': 'Gümüş',
\t\t'7F8C8D': 'Kirli Gri Camgöbeği',
\t\t'999': 'Koyu Gri'
\t},
\tmore: 'Diğer renkler...',
\tpanelTitle: 'Renkler',
\ttextColorTitle: 'Yazı Rengi'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/tr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/tr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/tr.js");
    }
}
