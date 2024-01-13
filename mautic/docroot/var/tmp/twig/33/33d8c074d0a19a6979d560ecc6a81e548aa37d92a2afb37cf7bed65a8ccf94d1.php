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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/af.js */
class __TwigTemplate_7ec0e1e45a7ac73b67631c6959ab4c90ceeca3e393f305a70de84eb282f4a29e extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'af', {
\tauto: 'Outomaties',
\tbgColorTitle: 'Agtergrondkleur',
\tcolors: {
\t\t'000': 'Swart',
\t\t'800000': 'Meroen',
\t\t'8B4513': 'Sjokoladebruin',
\t\t'2F4F4F': 'Donkerleisteengrys',
\t\t'008080': 'Blougroen',
\t\t'000080': 'Vlootblou',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Donkergrys',
\t\tB22222: 'Rooibaksteen',
\t\tA52A2A: 'Bruin',
\t\tDAA520: 'Donkergeel',
\t\t'006400': 'Donkergroen',
\t\t'40E0D0': 'Turkoois',
\t\t'0000CD': 'Middelblou',
\t\t'800080': 'Pers',
\t\t'808080': 'Grys',
\t\tF00: 'Rooi',
\t\tFF8C00: 'Donkeroranje',
\t\tFFD700: 'Goud',
\t\t'008000': 'Groen',
\t\t'0FF': 'Siaan',
\t\t'00F': 'Blou',
\t\tEE82EE: 'Viooltjieblou',
\t\tA9A9A9: 'Donkergrys',
\t\tFFA07A: 'Ligsalm',
\t\tFFA500: 'Oranje',
\t\tFFFF00: 'Geel',
\t\t'00FF00': 'Lemmetjie',
\t\tAFEEEE: 'Ligturkoois',
\t\tADD8E6: 'Ligblou',
\t\tDDA0DD: 'Pruim',
\t\tD3D3D3: 'Liggrys',
\t\tFFF0F5: 'Linne',
\t\tFAEBD7: 'Ivoor',
\t\tFFFFE0: 'Liggeel',
\t\tF0FFF0: 'Heuningdou',
\t\tF0FFFF: 'Asuur',
\t\tF0F8FF: 'Ligte hemelsblou',
\t\tE6E6FA: 'Laventel',
\t\tFFF: 'Wit',
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
\tmore: 'Meer Kleure...',
\tpanelTitle: 'Kleure',
\ttextColorTitle: 'Tekskleur'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/af.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/af.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/af.js");
    }
}
