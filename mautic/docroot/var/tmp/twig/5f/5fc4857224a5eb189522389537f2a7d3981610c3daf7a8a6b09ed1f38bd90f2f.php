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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/nl.js */
class __TwigTemplate_ba3b7ca7b540552fdebf9e82d3ec12e3feac2b912864ebccd8656abbd8e5a8e2 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'nl', {
\tauto: 'Automatisch',
\tbgColorTitle: 'Achtergrondkleur',
\tcolors: {
\t\t'000': 'Zwart',
\t\t'800000': 'Kastanjebruin',
\t\t'8B4513': 'Chocoladebruin',
\t\t'2F4F4F': 'Donkerleigrijs',
\t\t'008080': 'Blauwgroen',
\t\t'000080': 'Marine',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Donkergrijs',
\t\tB22222: 'Baksteen',
\t\tA52A2A: 'Bruin',
\t\tDAA520: 'Donkergeel',
\t\t'006400': 'Donkergroen',
\t\t'40E0D0': 'Turquoise',
\t\t'0000CD': 'Middenblauw',
\t\t'800080': 'Paars',
\t\t'808080': 'Grijs',
\t\tF00: 'Rood',
\t\tFF8C00: 'Donkeroranje',
\t\tFFD700: 'Goud',
\t\t'008000': 'Groen',
\t\t'0FF': 'Cyaan',
\t\t'00F': 'Blauw',
\t\tEE82EE: 'Violet',
\t\tA9A9A9: 'Donkergrijs',
\t\tFFA07A: 'Lichtzalm',
\t\tFFA500: 'Oranje',
\t\tFFFF00: 'Geel',
\t\t'00FF00': 'Felgroen',
\t\tAFEEEE: 'Lichtturquoise',
\t\tADD8E6: 'Lichtblauw',
\t\tDDA0DD: 'Pruim',
\t\tD3D3D3: 'Lichtgrijs',
\t\tFFF0F5: 'Linnen',
\t\tFAEBD7: 'Ivoor',
\t\tFFFFE0: 'Lichtgeel',
\t\tF0FFF0: 'Honingdauw',
\t\tF0FFFF: 'Azuur',
\t\tF0F8FF: 'Licht hemelsblauw',
\t\tE6E6FA: 'Lavendel',
\t\tFFF: 'Wit',
\t\t'1ABC9C': 'Strong Cyan', // MISSING
\t\t'2ECC71': 'Smaragdgroen',
\t\t'3498DB': 'Helderblauw',
\t\t'9B59B6': 'Amethyst', // MISSING
\t\t'4E5F70': 'Grayish Blue', // MISSING
\t\t'F1C40F': 'Vivid Yellow', // MISSING
\t\t'16A085': 'Dark Cyan', // MISSING
\t\t'27AE60': 'Dark Emerald', // MISSING
\t\t'2980B9': 'Strong Blue', // MISSING
\t\t'8E44AD': 'Dark Violet', // MISSING
\t\t'2C3E50': 'Desaturated Blue', // MISSING
\t\t'F39C12': 'Oranje',
\t\t'E67E22': 'Wortel',
\t\t'E74C3C': 'Pale Red', // MISSING
\t\t'ECF0F1': 'Bright Silver', // MISSING
\t\t'95A5A6': 'Light Grayish Cyan', // MISSING
\t\t'DDD': 'Light Gray', // MISSING
\t\t'D35400': 'Pompoen',
\t\t'C0392B': 'Strong Red', // MISSING
\t\t'BDC3C7': 'Zilver',
\t\t'7F8C8D': 'Grayish Cyan', // MISSING
\t\t'999': 'Donkergrijs'
\t},
\tmore: 'Meer kleuren...',
\tpanelTitle: 'Kleuren',
\ttextColorTitle: 'Tekstkleur'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/nl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/nl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/nl.js");
    }
}
