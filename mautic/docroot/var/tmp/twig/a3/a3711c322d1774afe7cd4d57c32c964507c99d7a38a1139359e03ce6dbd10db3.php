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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/az.js */
class __TwigTemplate_b41e0de80ad3c5cd64ea3f9e66ce9e486d33014a257d3d514ae5174b3ea3a7c9 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'az', {
\tauto: 'Avtomatik',
\tbgColorTitle: 'Doldurma rəngi',
\tcolors: {
\t\t'000': 'Qara',
\t\t'800000': 'Şabalıdı',
\t\t'8B4513': 'Açıq şabalı',
\t\t'2F4F4F': 'Açıq boz',
\t\t'008080': 'Firuzəyi göy',
\t\t'000080': 'Tünd göy',
\t\t'4B0082': 'İndigo',
\t\t'696969': 'Tünd boz',
\t\tB22222: 'Kərpiç',
\t\tA52A2A: 'Şabalıdı',
\t\tDAA520: 'Qızıl ağcaqayın',
\t\t'006400': 'Tünd yaşıl',
\t\t'40E0D0': 'Firuzəyi',
\t\t'0000CD': 'Göy',
\t\t'800080': 'Bənövşəyi',
\t\t'808080': 'Boz',
\t\tF00: 'Qırmızı',
\t\tFF8C00: 'Tünd narıncı',
\t\tFFD700: 'Qızılı',
\t\t'008000': 'Yaşıl',
\t\t'0FF': 'Mavi',
\t\t'00F': 'Göy',
\t\tEE82EE: 'Açıq bənövşəyi',
\t\tA9A9A9: 'Asfalt rəngi',
\t\tFFA07A: 'Qızılbalıq',
\t\tFFA500: 'Narıncı',
\t\tFFFF00: 'Sarı',
\t\t'00FF00': 'Laym',
\t\tAFEEEE: 'Acıq firuzəyi',
\t\tADD8E6: 'Acıq göy',
\t\tDDA0DD: 'Gavalı',
\t\tD3D3D3: 'Acıq boz',
\t\tFFF0F5: 'Yasəmən',
\t\tFAEBD7: 'Kağız',
\t\tFFFFE0: 'Acıq sarı',
\t\tF0FFF0: 'Yemişi',
\t\tF0FFFF: 'Gömgöy',
\t\tF0F8FF: 'Solğun göy',
\t\tE6E6FA: 'Lavanda',
\t\tFFF: 'Ağ',
\t\t'1ABC9C': 'Güclü mavi',
\t\t'2ECC71': 'Zümrüd',
\t\t'3498DB': 'Parlaq göy',
\t\t'9B59B6': 'Ametist',
\t\t'4E5F70': 'Bozlu göy',
\t\t'F1C40F': 'Sapsarı',
\t\t'16A085': 'Tünd mavi',
\t\t'27AE60': 'Tünd zümrüd',
\t\t'2980B9': 'Güclü göy',
\t\t'8E44AD': 'Tünd bənövşəyi',
\t\t'2C3E50': 'Rəngsiz göy',
\t\t'F39C12': 'Narıncı',
\t\t'E67E22': 'Yerkökülü',
\t\t'E74C3C': 'Solğun qırmızı',
\t\t'ECF0F1': 'Parlaq gümüşü',
\t\t'95A5A6': 'Acıq bozlu mavi',
\t\t'DDD': 'Acıq boz',
\t\t'D35400': 'Balqabaqlı',
\t\t'C0392B': 'Güclü qırmızı',
\t\t'BDC3C7': 'Gümüşü',
\t\t'7F8C8D': 'Bozlu mavi',
\t\t'999': 'Tünd boz'
\t},
\tmore: 'Digər rənglər...',
\tpanelTitle: 'Rənglər',
\ttextColorTitle: 'Mətnin rəngi'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/az.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/az.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/az.js");
    }
}
