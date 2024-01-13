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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/en.js */
class __TwigTemplate_49fff3dcbf4ceab2280dd802600c70299e734226eb59150a0d3d70f8963339e9 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'en', {
\tauto: 'Automatic',
\tbgColorTitle: 'Background Color',
\tcolors: {
\t\t'000': 'Black',
\t\t'800000': 'Maroon',
\t\t'8B4513': 'Saddle Brown',
\t\t'2F4F4F': 'Dark Slate Gray',
\t\t'008080': 'Teal',
\t\t'000080': 'Navy',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Dark Gray',
\t\tB22222: 'Fire Brick',
\t\tA52A2A: 'Brown',
\t\tDAA520: 'Golden Rod',
\t\t'006400': 'Dark Green',
\t\t'40E0D0': 'Turquoise',
\t\t'0000CD': 'Medium Blue',
\t\t'800080': 'Purple',
\t\t'808080': 'Gray',
\t\tF00: 'Red',
\t\tFF8C00: 'Dark Orange',
\t\tFFD700: 'Gold',
\t\t'008000': 'Green',
\t\t'0FF': 'Cyan',
\t\t'00F': 'Blue',
\t\tEE82EE: 'Violet',
\t\tA9A9A9: 'Dim Gray',
\t\tFFA07A: 'Light Salmon',
\t\tFFA500: 'Orange',
\t\tFFFF00: 'Yellow',
\t\t'00FF00': 'Lime',
\t\tAFEEEE: 'Pale Turquoise',
\t\tADD8E6: 'Light Blue',
\t\tDDA0DD: 'Plum',
\t\tD3D3D3: 'Light Grey',
\t\tFFF0F5: 'Lavender Blush',
\t\tFAEBD7: 'Antique White',
\t\tFFFFE0: 'Light Yellow',
\t\tF0FFF0: 'Honeydew',
\t\tF0FFFF: 'Azure',
\t\tF0F8FF: 'Alice Blue',
\t\tE6E6FA: 'Lavender',
\t\tFFF: 'White',
\t\t'1ABC9C': 'Strong Cyan',
\t\t'2ECC71': 'Emerald',
\t\t'3498DB': 'Bright Blue',
\t\t'9B59B6': 'Amethyst',
\t\t'4E5F70': 'Grayish Blue',
\t\t'F1C40F': 'Vivid Yellow',
\t\t'16A085': 'Dark Cyan',
\t\t'27AE60': 'Dark Emerald',
\t\t'2980B9': 'Strong Blue',
\t\t'8E44AD': 'Dark Violet',
\t\t'2C3E50': 'Desaturated Blue',
\t\t'F39C12': 'Orange',
\t\t'E67E22': 'Carrot',
\t\t'E74C3C': 'Pale Red',
\t\t'ECF0F1': 'Bright Silver',
\t\t'95A5A6': 'Light Grayish Cyan',
\t\t'DDD': 'Light Gray',
\t\t'D35400': 'Pumpkin',
\t\t'C0392B': 'Strong Red',
\t\t'BDC3C7': 'Silver',
\t\t'7F8C8D': 'Grayish Cyan',
\t\t'999': 'Dark Gray'
\t},
\tmore: 'More Colors...',
\tpanelTitle: 'Colors',
\ttextColorTitle: 'Text Color'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/en.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/en.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/en.js");
    }
}
