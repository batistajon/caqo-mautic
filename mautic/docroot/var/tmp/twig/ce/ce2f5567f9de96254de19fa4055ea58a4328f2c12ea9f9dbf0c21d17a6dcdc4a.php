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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/oc.js */
class __TwigTemplate_72e6d6b203910cb7ebe6232dcf834fcb77a7f5a41c392f7ad5753f76fa0b99d0 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'oc', {
\tauto: 'Automatic',
\tbgColorTitle: 'Color de rèireplan',
\tcolors: {
\t\t'000': 'Negre',
\t\t'800000': 'Marron',
\t\t'8B4513': 'Brun de sèla',
\t\t'2F4F4F': 'Gris escur de lausa',
\t\t'008080': 'Guit',
\t\t'000080': 'Blau marina',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Gris escur',
\t\tB22222: 'Roge teula',
\t\tA52A2A: 'Brun',
\t\tDAA520: 'Aur ternit',
\t\t'006400': 'Verd escur',
\t\t'40E0D0': 'Turquesa',
\t\t'0000CD': 'Blau reial',
\t\t'800080': 'Violet',
\t\t'808080': 'Gris',
\t\tF00: 'Roge',
\t\tFF8C00: 'Irange escur',
\t\tFFD700: 'Aur',
\t\t'008000': 'Verd',
\t\t'0FF': 'Cian',
\t\t'00F': 'Blau',
\t\tEE82EE: 'Violet',
\t\tA9A9A9: 'Gris tamisat',
\t\tFFA07A: 'Salmon clar',
\t\tFFA500: 'Irange',
\t\tFFFF00: 'Jaune',
\t\t'00FF00': 'Lima',
\t\tAFEEEE: 'Turquesa clar',
\t\tADD8E6: 'Blau clar',
\t\tDDA0DD: 'Pruna',
\t\tD3D3D3: 'Gris clar',
\t\tFFF0F5: 'Fard lavanda',
\t\tFAEBD7: 'Blanc antic',
\t\tFFFFE0: 'Jaune clar',
\t\tF0FFF0: 'Verd rosada',
\t\tF0FFFF: 'Azur',
\t\tF0F8FF: 'Blau Alícia',
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
\tmore: 'Mai de colors...',
\tpanelTitle: 'Colors',
\ttextColorTitle: 'Color del tèxte'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/oc.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/oc.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/oc.js");
    }
}
