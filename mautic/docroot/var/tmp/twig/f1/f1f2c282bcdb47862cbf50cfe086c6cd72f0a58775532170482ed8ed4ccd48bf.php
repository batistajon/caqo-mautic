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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fo.js */
class __TwigTemplate_cea48c1690b81202565e61e377e3968384fadee2b7c65dc7ee4811bc01d0a91c extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'fo', {
\tauto: 'Automatiskt',
\tbgColorTitle: 'Bakgrundslitur',
\tcolors: {
\t\t'000': 'Svart',
\t\t'800000': 'Maroon',
\t\t'8B4513': 'Saðilsbrúnt',
\t\t'2F4F4F': 'Dark Slate Gray',
\t\t'008080': 'Teal',
\t\t'000080': 'Navy',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Myrkagrátt',
\t\tB22222: 'Fire Brick',
\t\tA52A2A: 'Brúnt',
\t\tDAA520: 'Gullstavur',
\t\t'006400': 'Myrkagrønt',
\t\t'40E0D0': 'Turquoise',
\t\t'0000CD': 'Meðal blátt',
\t\t'800080': 'Purple',
\t\t'808080': 'Grátt',
\t\tF00: 'Reytt',
\t\tFF8C00: 'Myrkt appelsingult',
\t\tFFD700: 'Gull',
\t\t'008000': 'Grønt',
\t\t'0FF': 'Cyan',
\t\t'00F': 'Blátt',
\t\tEE82EE: 'Violet',
\t\tA9A9A9: 'Døkt grátt',
\t\tFFA07A: 'Ljósur laksur',
\t\tFFA500: 'Appelsingult',
\t\tFFFF00: 'Gult',
\t\t'00FF00': 'Lime',
\t\tAFEEEE: 'Pale Turquoise',
\t\tADD8E6: 'Ljósablátt',
\t\tDDA0DD: 'Plum',
\t\tD3D3D3: 'Ljósagrátt',
\t\tFFF0F5: 'Lavender Blush',
\t\tFAEBD7: 'Klassiskt hvítt',
\t\tFFFFE0: 'Ljósagult',
\t\tF0FFF0: 'Hunangsdøggur',
\t\tF0FFFF: 'Azure',
\t\tF0F8FF: 'Alice Blátt',
\t\tE6E6FA: 'Lavender',
\t\tFFF: 'Hvítt',
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
\tmore: 'Fleiri litir...',
\tpanelTitle: 'Litir',
\ttextColorTitle: 'Tekstlitur'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fo.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fo.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fo.js");
    }
}
