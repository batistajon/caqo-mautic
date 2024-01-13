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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sl.js */
class __TwigTemplate_e0b38b2460de3603cfa22d8fb745a0bf626d63a9701568a16c94782614cebf09 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'sl', {
\tauto: 'Samodejno',
\tbgColorTitle: 'Barva ozadja',
\tcolors: {
\t\t'000': 'Črna',
\t\t'800000': 'Maroon',
\t\t'8B4513': 'Saddle Brown',
\t\t'2F4F4F': 'Dark Slate Gray',
\t\t'008080': 'Teal',
\t\t'000080': 'Navy',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Dark Gray',
\t\tB22222: 'Fire Brick',
\t\tA52A2A: 'Rjava',
\t\tDAA520: 'Golden Rod',
\t\t'006400': 'Temno zelena',
\t\t'40E0D0': 'Turkizna',
\t\t'0000CD': 'Srednje modra',
\t\t'800080': 'Škrlatna',
\t\t'808080': 'Siva',
\t\tF00: 'Rdeča',
\t\tFF8C00: 'Temno oranžna',
\t\tFFD700: 'Zlata',
\t\t'008000': 'Zelena',
\t\t'0FF': 'Sinja',
\t\t'00F': 'Modra',
\t\tEE82EE: 'Vijolična',
\t\tA9A9A9: 'Dim Gray',
\t\tFFA07A: 'Light Salmon',
\t\tFFA500: 'Oranžna',
\t\tFFFF00: 'Rumena',
\t\t'00FF00': 'Lime',
\t\tAFEEEE: 'Pale Turquoise',
\t\tADD8E6: 'Svetlo modra',
\t\tDDA0DD: 'Plum',
\t\tD3D3D3: 'Svetlo siva',
\t\tFFF0F5: 'Lavender Blush',
\t\tFAEBD7: 'Antique White',
\t\tFFFFE0: 'Svetlo rumena',
\t\tF0FFF0: 'Honeydew',
\t\tF0FFFF: 'Azure',
\t\tF0F8FF: 'Alice Blue',
\t\tE6E6FA: 'Lavender',
\t\tFFF: 'Bela',
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
\tmore: 'Več barv ...',
\tpanelTitle: 'Barve',
\ttextColorTitle: 'Barva besedila'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sl.js");
    }
}
