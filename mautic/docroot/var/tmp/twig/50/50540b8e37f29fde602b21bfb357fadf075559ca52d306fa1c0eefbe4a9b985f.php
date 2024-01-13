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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ro.js */
class __TwigTemplate_c897a9463ee0809273f95485df5fa8197fef855da395a7da7df61de2b4adbd5d extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'ro', {
\tauto: 'Automat',
\tbgColorTitle: 'Coloarea fundalului',
\tcolors: {
\t\t'000': 'Negru',
\t\t'800000': 'Maro închis',
\t\t'8B4513': 'Maro închis',
\t\t'2F4F4F': 'Dark Slate Gray',
\t\t'008080': 'Albastru verzui',
\t\t'000080': 'Bleumarin',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Gri închis',
\t\tB22222: 'Cărămiziu (roșiatic)',
\t\tA52A2A: 'Maro',
\t\tDAA520: 'Galben muștar',
\t\t'006400': 'Verde închis',
\t\t'40E0D0': 'Turcoaz',
\t\t'0000CD': 'Albastru mediu',
\t\t'800080': 'Mov',
\t\t'808080': 'Gri',
\t\tF00: 'Roșu',
\t\tFF8C00: 'Portocaliu închis',
\t\tFFD700: 'Auriu',
\t\t'008000': 'Verde',
\t\t'0FF': 'Cyan (albstru-verzui)',
\t\t'00F': 'Albastru',
\t\tEE82EE: 'Violet',
\t\tA9A9A9: 'Gri roșiatic',
\t\tFFA07A: 'Light Salmon',
\t\tFFA500: 'Portocaliu',
\t\tFFFF00: 'Galben',
\t\t'00FF00': 'Verde lime',
\t\tAFEEEE: 'Turcoaz deschis',
\t\tADD8E6: 'Albastru deschis',
\t\tDDA0DD: 'Plum',
\t\tD3D3D3: 'Gri deschis',
\t\tFFF0F5: 'Lavender Blush',
\t\tFAEBD7: 'Alb vechi',
\t\tFFFFE0: 'Galben deschis',
\t\tF0FFF0: 'Honeydew',
\t\tF0FFFF: 'Azuriu',
\t\tF0F8FF: 'Alice Blue',
\t\tE6E6FA: 'Levănțică',
\t\tFFF: 'Alb',
\t\t'1ABC9C': 'Cyan închis',
\t\t'2ECC71': 'Verde deschis',
\t\t'3498DB': 'Albastru deschis',
\t\t'9B59B6': 'Mov roșiatic',
\t\t'4E5F70': 'Albastru gri',
\t\t'F1C40F': 'Galben viu',
\t\t'16A085': 'Cyan închis',
\t\t'27AE60': 'Smarlad închis',
\t\t'2980B9': 'Albastru închis',
\t\t'8E44AD': 'Violet închis',
\t\t'2C3E50': 'Albastru desaturat',
\t\t'F39C12': 'Portocaliu',
\t\t'E67E22': 'Portocaliu morcov',
\t\t'E74C3C': 'Roșu pal',
\t\t'ECF0F1': 'Argintiu strălucitor',
\t\t'95A5A6': 'Cyan gri deschis',
\t\t'DDD': 'Gri deschis',
\t\t'D35400': 'Portocaliu roșcat',
\t\t'C0392B': 'Roșu închis',
\t\t'BDC3C7': 'Argintiu',
\t\t'7F8C8D': 'Cyan gri',
\t\t'999': 'Gri închis'
\t},
\tmore: 'Mai multe culori...',
\tpanelTitle: 'Culori',
\ttextColorTitle: 'Culoarea textului'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ro.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ro.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ro.js");
    }
}
