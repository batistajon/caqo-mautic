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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/eu.js */
class __TwigTemplate_f992d09713165407111719542a4c56889dd4199447000cc14ce838fc5573309a extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'eu', {
\tauto: 'Automatikoa',
\tbgColorTitle: 'Atzeko planoko kolorea',
\tcolors: {
\t\t'000': 'Beltza',
\t\t'800000': 'Granatea',
\t\t'8B4513': 'Zela marroia',
\t\t'2F4F4F': 'Arbel gris iluna',
\t\t'008080': 'Urdin berdexka',
\t\t'000080': 'Urdin iluna',
\t\t'4B0082': 'Indigoa',
\t\t'696969': 'Gris iluna',
\t\tB22222: 'Adreilu erregogorra',
\t\tA52A2A: 'Marroia',
\t\tDAA520: 'Urrezko makila',
\t\t'006400': 'Berde iluna',
\t\t'40E0D0': 'Turkesa',
\t\t'0000CD': 'Urdin ertaina',
\t\t'800080': 'Morea',
\t\t'808080': 'Grisa',
\t\tF00: 'Gorria',
\t\tFF8C00: 'Laranja iluna',
\t\tFFD700: 'Urrea',
\t\t'008000': 'Berdea',
\t\t'0FF': 'Ziana',
\t\t'00F': 'Urdina',
\t\tEE82EE: 'Bioleta',
\t\tA9A9A9: 'Gris ahula',
\t\tFFA07A: 'Izokin-kolore argia',
\t\tFFA500: 'Laranja',
\t\tFFFF00: 'Horia',
\t\t'00FF00': 'Lima',
\t\tAFEEEE: 'Turkesa argia',
\t\tADD8E6: 'Urdin argia',
\t\tDDA0DD: 'Aran-kolorea',
\t\tD3D3D3: 'Gris argia',
\t\tFFF0F5: 'Izpiliku-gorrixka',
\t\tFAEBD7: 'Zuri zaharra',
\t\tFFFFE0: 'Hori argia',
\t\tF0FFF0: 'Ezti-ihintza',
\t\tF0FFFF: 'Zeru-urdina',
\t\tF0F8FF: 'Alizia urdina',
\t\tE6E6FA: 'Izpilikua',
\t\tFFF: 'Zuria',
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
\t\t'999': 'Gris iluna'
\t},
\tmore: 'Kolore gehiago...',
\tpanelTitle: 'Koloreak',
\ttextColorTitle: 'Testu-kolorea'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/eu.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/eu.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/eu.js");
    }
}
