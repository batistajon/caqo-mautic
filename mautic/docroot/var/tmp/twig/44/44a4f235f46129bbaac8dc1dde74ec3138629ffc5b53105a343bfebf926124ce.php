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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/hu.js */
class __TwigTemplate_4374a599899adf00f38707739e093e561be491e386ac5941acff84d70680e752 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'hu', {
\tauto: 'Automatikus',
\tbgColorTitle: 'Háttérszín',
\tcolors: {
\t\t'000': 'Fekete',
\t\t'800000': 'Bordó',
\t\t'8B4513': 'Barna',
\t\t'2F4F4F': 'Sötét türkiz',
\t\t'008080': 'Türkiz',
\t\t'000080': 'Király kék',
\t\t'4B0082': 'Indigó kék',
\t\t'696969': 'Szürke',
\t\tB22222: 'Tégla vörös',
\t\tA52A2A: 'Vörös',
\t\tDAA520: 'Arany sárga',
\t\t'006400': 'Sötét zöld',
\t\t'40E0D0': 'Türkiz',
\t\t'0000CD': 'Kék',
\t\t'800080': 'Lila',
\t\t'808080': 'Szürke',
\t\tF00: 'Piros',
\t\tFF8C00: 'Sötét narancs',
\t\tFFD700: 'Arany',
\t\t'008000': 'Zöld',
\t\t'0FF': 'Türkiz',
\t\t'00F': 'Kék',
\t\tEE82EE: 'Rózsaszín',
\t\tA9A9A9: 'Sötét szürke',
\t\tFFA07A: 'Lazac',
\t\tFFA500: 'Narancs',
\t\tFFFF00: 'Citromsárga',
\t\t'00FF00': 'Neon zöld',
\t\tAFEEEE: 'Világos türkiz',
\t\tADD8E6: 'Világos kék',
\t\tDDA0DD: 'Világos lila',
\t\tD3D3D3: 'Világos szürke',
\t\tFFF0F5: 'Lavender Blush',
\t\tFAEBD7: 'Törtfehér',
\t\tFFFFE0: 'Világos sárga',
\t\tF0FFF0: 'Menta',
\t\tF0FFFF: 'Azúr kék',
\t\tF0F8FF: 'Halvány kék',
\t\tE6E6FA: 'Lavender',
\t\tFFF: 'Fehér',
\t\t'1ABC9C': 'Erős cián',
\t\t'2ECC71': 'Smaragd',
\t\t'3498DB': 'Fényes kék',
\t\t'9B59B6': 'Ametiszt',
\t\t'4E5F70': 'Szürkéskék',
\t\t'F1C40F': 'Világossárga',
\t\t'16A085': 'Sötét cián',
\t\t'27AE60': 'Sötét smaragd',
\t\t'2980B9': 'Erős kék',
\t\t'8E44AD': 'Sötétlila',
\t\t'2C3E50': 'Világoskék',
\t\t'F39C12': 'Narancs',
\t\t'E67E22': 'Répa',
\t\t'E74C3C': 'Sápadt vörös',
\t\t'ECF0F1': 'Fényes ezüst',
\t\t'95A5A6': 'Világos szürkés cián',
\t\t'DDD': 'Világosszürke',
\t\t'D35400': 'Tök',
\t\t'C0392B': 'Erős vörös',
\t\t'BDC3C7': 'Ezüst',
\t\t'7F8C8D': 'Szürkés cián',
\t\t'999': 'Sötétszürke'
\t},
\tmore: 'További színek...',
\tpanelTitle: 'Színek',
\ttextColorTitle: 'Betűszín'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/hu.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/hu.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/hu.js");
    }
}
