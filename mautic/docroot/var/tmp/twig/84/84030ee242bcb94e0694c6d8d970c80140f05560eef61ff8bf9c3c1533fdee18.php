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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ug.js */
class __TwigTemplate_a9236d18295ddcde317246ebcaa3a3b5e6f772cf428ba4bc948e442e63e20939 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'ug', {
\tauto: 'ئۆزلۈكىدىن',
\tbgColorTitle: 'تەگلىك رەڭگى',
\tcolors: {
\t\t'000': 'قارا',
\t\t'800000': 'قىزغۇچ سېرىق',
\t\t'8B4513': 'توق قوڭۇر',
\t\t'2F4F4F': 'قارامتۇل يېشىل',
\t\t'008080': 'كۆكۈش يېشىل',
\t\t'000080': 'قارامتۇل كۆك',
\t\t'4B0082': 'كۆكۈش كۈلرەڭ',
\t\t'696969': 'قارامتۇل كۈلرەڭ',
\t\tB22222: 'خىش قىزىل',
\t\tA52A2A: 'قوڭۇر',
\t\tDAA520: 'ئالتۇن سېرىق',
\t\t'006400': 'توق يېشىل',
\t\t'40E0D0': 'كۆكۈچ يېشىل',
\t\t'0000CD': 'ئوتتۇراھال كۆك',
\t\t'800080': 'بىنەپشە',
\t\t'808080': 'كۈلرەڭ',
\t\tF00: 'قىزىل',
\t\tFF8C00: 'توق قىزغۇچ سېرىق',
\t\tFFD700: 'ئالتۇن',
\t\t'008000': 'يېشىل',
\t\t'0FF': 'يېشىل كۆك',
\t\t'00F': 'كۆك',
\t\tEE82EE: 'قىزغۇچ بىنەپشە',
\t\tA9A9A9: 'توق كۈلرەڭ',
\t\tFFA07A: 'كاۋا چېچىكى سېرىق',
\t\tFFA500: 'قىزغۇچ سېرىق',
\t\tFFFF00: 'سېرىق',
\t\t'00FF00': 'Lime',
\t\tAFEEEE: 'سۇس ھاۋا رەڭ',
\t\tADD8E6: 'ئوچۇق كۆك',
\t\tDDA0DD: 'قىزغۇچ بىنەپشە',
\t\tD3D3D3: 'سۇس كۆكۈچ كۈلرەڭ',
\t\tFFF0F5: 'سۇس قىزغۇچ بىنەپشە',
\t\tFAEBD7: 'Antique White',
\t\tFFFFE0: 'سۇس سېرىق',
\t\tF0FFF0: 'Honeydew',
\t\tF0FFFF: 'ئاسمان كۆكى',
\t\tF0F8FF: 'سۇس كۆك',
\t\tE6E6FA: 'سۇس بىنەپشە',
\t\tFFF: 'ئاق',
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
\tmore: 'باشقا رەڭ',
\tpanelTitle: 'رەڭ',
\ttextColorTitle: 'تېكىست رەڭگى'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ug.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ug.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ug.js");
    }
}
