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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/eo.js */
class __TwigTemplate_bb6f69d1c2c5ab4afd980a028b07e31c6bbc4008084e22fc21e804c4f605d18a extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'eo', {
\tauto: 'Aŭtomata',
\tbgColorTitle: 'Fona Koloro',
\tcolors: {
\t\t'000': 'Nigra',
\t\t'800000': 'Kaŝtankolora',
\t\t'8B4513': 'Mezbruna',
\t\t'2F4F4F': 'Ardezgriza',
\t\t'008080': 'Marĉanaskolora',
\t\t'000080': 'Maristblua',
\t\t'4B0082': 'Indigokolora',
\t\t'696969': 'Malhelgriza',
\t\tB22222: 'Brikruĝa',
\t\tA52A2A: 'Bruna',
\t\tDAA520: 'Senbrilorkolora',
\t\t'006400': 'Malhelverda',
\t\t'40E0D0': 'Turkisblua',
\t\t'0000CD': 'Reĝblua',
\t\t'800080': 'Purpura',
\t\t'808080': 'Griza',
\t\tF00: 'Ruĝa',
\t\tFF8C00: 'Malheloranĝkolora',
\t\tFFD700: 'Orkolora',
\t\t'008000': 'Verda',
\t\t'0FF': 'Verdblua',
\t\t'00F': 'Blua',
\t\tEE82EE: 'Viola',
\t\tA9A9A9: 'Mezgriza',
\t\tFFA07A: 'Salmokolora',
\t\tFFA500: 'Oranĝkolora',
\t\tFFFF00: 'Flava',
\t\t'00FF00': 'Limetkolora',
\t\tAFEEEE: 'Helturkiskolora',
\t\tADD8E6: 'Helblua',
\t\tDDA0DD: 'Prunkolora',
\t\tD3D3D3: 'Helgriza',
\t\tFFF0F5: 'Lavendkolora vangoŝminko',
\t\tFAEBD7: 'Antikvablanka',
\t\tFFFFE0: 'Helflava',
\t\tF0FFF0: 'Vintromelonkolora',
\t\tF0FFFF: 'Lazura',
\t\tF0F8FF: 'Aliceblua',
\t\tE6E6FA: 'Lavendkolora',
\t\tFFF: 'Blanka',
\t\t'1ABC9C': 'Fortverdblua',
\t\t'2ECC71': 'Smeraldkolora',
\t\t'3498DB': 'Brilblua',
\t\t'9B59B6': 'Ametistkolora',
\t\t'4E5F70': 'Grizblua',
\t\t'F1C40F': 'Brilflava',
\t\t'16A085': 'Malhelverdblua',
\t\t'27AE60': 'Malhelsmeraldkolora',
\t\t'2980B9': 'Fortblua',
\t\t'8E44AD': 'Malhelviola',
\t\t'2C3E50': 'Malsaturita Bluo',
\t\t'F39C12': 'Oranĝkolora',
\t\t'E67E22': 'Karotkolora',
\t\t'E74C3C': 'Pale Ruĝa',
\t\t'ECF0F1': 'Brile Arĝenta',
\t\t'95A5A6': 'Helgrizverdblua',
\t\t'DDD': 'Helgriza',
\t\t'D35400': 'Kukurbokolora',
\t\t'C0392B': 'Forte ruĝa',
\t\t'BDC3C7': 'Arĝenta',
\t\t'7F8C8D': 'Grizverdblua',
\t\t'999': 'Malhelgriza'
\t},
\tmore: 'Pli da Koloroj...',
\tpanelTitle: 'Koloroj',
\ttextColorTitle: 'Teksta Koloro'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/eo.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/eo.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/eo.js");
    }
}
