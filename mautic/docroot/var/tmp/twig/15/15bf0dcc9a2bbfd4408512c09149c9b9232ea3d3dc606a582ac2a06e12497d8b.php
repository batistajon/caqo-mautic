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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/si.js */
class __TwigTemplate_c68efa03cc3a350d65be130b3c977d327bebebfe5c2aa70e17579f6664311195 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'si', {
\tauto: 'Automatic', // MISSING
\tbgColorTitle: 'පසුබිම් වර්ණය',
\tcolors: {
\t\t'000': 'Black', // MISSING
\t\t'800000': 'Maroon', // MISSING
\t\t'8B4513': 'Saddle Brown', // MISSING
\t\t'2F4F4F': 'Dark Slate Gray', // MISSING
\t\t'008080': 'Teal', // MISSING
\t\t'000080': 'Navy', // MISSING
\t\t'4B0082': 'Indigo', // MISSING
\t\t'696969': 'Dark Gray', // MISSING
\t\tB22222: 'Fire Brick', // MISSING
\t\tA52A2A: 'Brown', // MISSING
\t\tDAA520: 'Golden Rod', // MISSING
\t\t'006400': 'Dark Green', // MISSING
\t\t'40E0D0': 'Turquoise', // MISSING
\t\t'0000CD': 'Medium Blue', // MISSING
\t\t'800080': 'Purple', // MISSING
\t\t'808080': 'Gray', // MISSING
\t\tF00: 'Red', // MISSING
\t\tFF8C00: 'Dark Orange', // MISSING
\t\tFFD700: 'Gold', // MISSING
\t\t'008000': 'Green', // MISSING
\t\t'0FF': 'Cyan', // MISSING
\t\t'00F': 'Blue', // MISSING
\t\tEE82EE: 'Violet', // MISSING
\t\tA9A9A9: 'Dim Gray', // MISSING
\t\tFFA07A: 'Light Salmon', // MISSING
\t\tFFA500: 'Orange', // MISSING
\t\tFFFF00: 'Yellow', // MISSING
\t\t'00FF00': 'Lime', // MISSING
\t\tAFEEEE: 'Pale Turquoise', // MISSING
\t\tADD8E6: 'Light Blue', // MISSING
\t\tDDA0DD: 'Plum', // MISSING
\t\tD3D3D3: 'Light Grey', // MISSING
\t\tFFF0F5: 'Lavender Blush', // MISSING
\t\tFAEBD7: 'Antique White', // MISSING
\t\tFFFFE0: 'Light Yellow', // MISSING
\t\tF0FFF0: 'Honeydew', // MISSING
\t\tF0FFFF: 'Azure', // MISSING
\t\tF0F8FF: 'Alice Blue', // MISSING
\t\tE6E6FA: 'Lavender', // MISSING
\t\tFFF: 'White', // MISSING
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
\tmore: 'More Colors...', // MISSING
\tpanelTitle: 'වර්ණය',
\ttextColorTitle: 'අක්ෂර වර්ණ'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/si.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/si.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/si.js");
    }
}
