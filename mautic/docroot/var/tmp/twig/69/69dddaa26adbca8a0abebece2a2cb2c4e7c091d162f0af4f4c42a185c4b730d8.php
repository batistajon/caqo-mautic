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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/id.js */
class __TwigTemplate_20421bced98272004fb880f9822013fbb42810983a5dfcacf54bfcbcfed1d678 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'id', {
\tauto: 'Automatic', // MISSING
\tbgColorTitle: 'Warna Latar Belakang',
\tcolors: {
\t\t'000': 'Hitam',
\t\t'800000': 'Merah Tua',
\t\t'8B4513': 'Saddle Brown', // MISSING
\t\t'2F4F4F': 'Dark Slate Gray', // MISSING
\t\t'008080': 'Teal', // MISSING
\t\t'000080': 'Navy', // MISSING
\t\t'4B0082': 'Indigo', // MISSING
\t\t'696969': 'Abu-abu Gelap',
\t\tB22222: 'Merah Bata',
\t\tA52A2A: 'Coklat',
\t\tDAA520: 'Golden Rod', // MISSING
\t\t'006400': 'Hijau Gelap',
\t\t'40E0D0': 'Turquoise', // MISSING
\t\t'0000CD': 'Biru Sedang',
\t\t'800080': 'Ungu',
\t\t'808080': 'Abu-abu',
\t\tF00: 'Merah',
\t\tFF8C00: 'Jingga Gelap',
\t\tFFD700: 'Emas',
\t\t'008000': 'Hijau',
\t\t'0FF': 'Cyan', // MISSING
\t\t'00F': 'Biru',
\t\tEE82EE: 'Violet', // MISSING
\t\tA9A9A9: 'Abu-abu Redup',
\t\tFFA07A: 'Salmon Cerah',
\t\tFFA500: 'Jingga',
\t\tFFFF00: 'Kuning',
\t\t'00FF00': 'Jeruk Lemon',
\t\tAFEEEE: 'Biru Hijau Pucat',
\t\tADD8E6: 'Biru Cerah',
\t\tDDA0DD: 'Plum', // MISSING
\t\tD3D3D3: 'Abu-abu Cerah',
\t\tFFF0F5: 'Lavender Blush', // MISSING
\t\tFAEBD7: 'Antique White', // MISSING
\t\tFFFFE0: 'Kuning Cerah',
\t\tF0FFF0: 'Honeydew', // MISSING
\t\tF0FFFF: 'Azure', // MISSING
\t\tF0F8FF: 'Alice Blue', // MISSING
\t\tE6E6FA: 'Lavender', // MISSING
\t\tFFF: 'Putih',
\t\t'1ABC9C': 'Strong Cyan', // MISSING
\t\t'2ECC71': 'Emerald', // MISSING
\t\t'3498DB': 'Bright Blue', // MISSING
\t\t'9B59B6': 'Amethyst', // MISSING
\t\t'4E5F70': 'Grayish Blue', // MISSING
\t\t'F1C40F': 'Vivid Yellow', // MISSING
\t\t'16A085': 'Dark Cyan', // MISSING
\t\t'27AE60': 'Dark Emerald', // MISSING
\t\t'2980B9': 'Strong Blue', // MISSING
\t\t'8E44AD': 'Dark Violet', // MISSING
\t\t'2C3E50': 'Desaturated Blue', // MISSING
\t\t'F39C12': 'Orange', // MISSING
\t\t'E67E22': 'Carrot', // MISSING
\t\t'E74C3C': 'Pale Red', // MISSING
\t\t'ECF0F1': 'Bright Silver', // MISSING
\t\t'95A5A6': 'Light Grayish Cyan', // MISSING
\t\t'DDD': 'Light Gray', // MISSING
\t\t'D35400': 'Pumpkin', // MISSING
\t\t'C0392B': 'Strong Red', // MISSING
\t\t'BDC3C7': 'Silver', // MISSING
\t\t'7F8C8D': 'Grayish Cyan', // MISSING
\t\t'999': 'Dark Gray' // MISSING
\t},
\tmore: 'Warna lainnya...',
\tpanelTitle: 'Warna',
\ttextColorTitle: 'Warna Teks'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/id.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/id.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/id.js");
    }
}
