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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ca.js */
class __TwigTemplate_5aed949d68700f60857d228bb14b00450265daad28256a0b9110bcfe5588cd38 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'ca', {
\tauto: 'Automàtic',
\tbgColorTitle: 'Color de Fons',
\tcolors: {
\t\t'000': 'Negre',
\t\t'800000': 'Grana',
\t\t'8B4513': 'Marró sella',
\t\t'2F4F4F': 'Gris pissarra fosca',
\t\t'008080': 'Blau xarxet',
\t\t'000080': 'Blau marí',
\t\t'4B0082': 'Indi',
\t\t'696969': 'Gris Fosc',
\t\tB22222: 'Foc Maó',
\t\tA52A2A: 'Marró',
\t\tDAA520: 'Solidago',
\t\t'006400': 'Verd Fosc',
\t\t'40E0D0': 'Turquesa',
\t\t'0000CD': 'Blau 1/2',
\t\t'800080': 'Lila',
\t\t'808080': 'Gris',
\t\tF00: 'Vermell',
\t\tFF8C00: 'Taronja Fosc',
\t\tFFD700: 'Or',
\t\t'008000': 'Verd',
\t\t'0FF': 'Cian',
\t\t'00F': 'Blau',
\t\tEE82EE: 'Violat',
\t\tA9A9A9: 'Gris clar',
\t\tFFA07A: 'Salmó clar',
\t\tFFA500: 'Taronja',
\t\tFFFF00: 'Groc',
\t\t'00FF00': 'Verd Llima',
\t\tAFEEEE: 'Turquesa Pàl·lid',
\t\tADD8E6: 'Blau Clar',
\t\tDDA0DD: 'Pruna',
\t\tD3D3D3: 'Gris Clar',
\t\tFFF0F5: 'Lavanda rosat',
\t\tFAEBD7: 'Blanc Antic',
\t\tFFFFE0: 'Groc Clar',
\t\tF0FFF0: 'Verd Pàl·lid',
\t\tF0FFFF: 'Atzur',
\t\tF0F8FF: 'Cian pàlid',
\t\tE6E6FA: 'Lavanda',
\t\tFFF: 'Blanc',
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
\tmore: 'Més Colors...',
\tpanelTitle: 'Colors',
\ttextColorTitle: 'Color del Text'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ca.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ca.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ca.js");
    }
}
