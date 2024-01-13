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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/gu.js */
class __TwigTemplate_802aae02f943aa18f5962820b490aea9f91429c3be56a8351e07143a5ff79cf1 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'gu', {
\tauto: 'સ્વચાલિત',
\tbgColorTitle: 'બૅકગ્રાઉન્ડ રંગ,',
\tcolors: {
\t\t'000': 'કાળો',
\t\t'800000': 'મરુન',
\t\t'8B4513': 'છીક',
\t\t'2F4F4F': 'ડાર્ક સ્લેટ ગ્રે ',
\t\t'008080': 'ટીલ',
\t\t'000080': 'નેવી',
\t\t'4B0082': 'જામલી',
\t\t'696969': 'ડાર્ક ગ્રે',
\t\tB22222: 'ઈટ',
\t\tA52A2A: 'બ્રાઉન',
\t\tDAA520: 'ગોલ્ડન રોડ',
\t\t'006400': 'ડાર્ક લીલો',
\t\t'40E0D0': 'ટ્રકોઈસ',
\t\t'0000CD': 'મધ્યમ વાદળી',
\t\t'800080': 'પર્પલ',
\t\t'808080': 'ગ્રે',
\t\tF00: 'લાલ',
\t\tFF8C00: 'ડાર્ક ઓરંજ',
\t\tFFD700: 'ગોલ્ડ',
\t\t'008000': 'ગ્રીન',
\t\t'0FF': 'સાયન',
\t\t'00F': 'વાદળી',
\t\tEE82EE: 'વાયોલેટ',
\t\tA9A9A9: 'ડીમ ',
\t\tFFA07A: 'લાઈટ સાલમન',
\t\tFFA500: 'ઓરંજ',
\t\tFFFF00: 'પીળો',
\t\t'00FF00': 'લાઈમ',
\t\tAFEEEE: 'પેલ કોઈસ',
\t\tADD8E6: 'લાઈટ બ્લુ',
\t\tDDA0DD: 'પલ્મ',
\t\tD3D3D3: 'લાઈટ ગ્રે',
\t\tFFF0F5: 'લવંડર ',
\t\tFAEBD7: 'એન્ટીક સફેદ',
\t\tFFFFE0: 'લાઈટ પીળો',
\t\tF0FFF0: 'હનીડઉય',
\t\tF0FFFF: 'અઝુરે',
\t\tF0F8FF: 'એલીસ બ્લુ',
\t\tE6E6FA: 'લવંડર',
\t\tFFF: 'સફેદ',
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
\tmore: 'ઔર રંગ...',
\tpanelTitle: 'રંગ',
\ttextColorTitle: 'શબ્દનો રંગ'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/gu.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/gu.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/gu.js");
    }
}
