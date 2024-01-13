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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/km.js */
class __TwigTemplate_370c18e5dd01fb21ecd144905c7a4913c214bc47d58f9296a4ec848d25d6e576 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'km', {
\tauto: 'ស្វ័យប្រវត្តិ',
\tbgColorTitle: 'ពណ៌ផ្ទៃខាងក្រោយ',
\tcolors: {
\t\t'000': 'ខ្មៅ',
\t\t'800000': 'ត្នោត​ចាស់',
\t\t'8B4513': 'Saddle Brown',
\t\t'2F4F4F': 'Dark Slate Gray',
\t\t'008080': 'Teal',
\t\t'000080': 'ខៀវ​ចាស់',
\t\t'4B0082': 'ធ្លះ',
\t\t'696969': 'ប្រផេះ​ក្រាស់',
\t\tB22222: 'Fire Brick',
\t\tA52A2A: 'ត្នោត',
\t\tDAA520: 'Golden Rod',
\t\t'006400': 'បៃតង​ចាស់',
\t\t'40E0D0': 'Turquoise',
\t\t'0000CD': 'Medium Blue',
\t\t'800080': 'Purple',
\t\t'808080': 'ប្រផេះ',
\t\tF00: 'ក្រហម',
\t\tFF8C00: 'ទឹក​ក្រូច​ចាស់',
\t\tFFD700: 'មាស',
\t\t'008000': 'បៃតង',
\t\t'0FF': 'Cyan',
\t\t'00F': 'ខៀវ',
\t\tEE82EE: 'ស្វាយ',
\t\tA9A9A9: 'Dim Gray',
\t\tFFA07A: 'Light Salmon',
\t\tFFA500: 'ទឹក​ក្រូច',
\t\tFFFF00: 'លឿង',
\t\t'00FF00': 'ក្រូច​ឆ្មារ',
\t\tAFEEEE: 'Pale Turquoise',
\t\tADD8E6: 'Light Blue',
\t\tDDA0DD: 'Plum',
\t\tD3D3D3: 'Light Grey',
\t\tFFF0F5: 'Lavender Blush',
\t\tFAEBD7: 'Antique White',
\t\tFFFFE0: 'លឿង​ស្ដើង',
\t\tF0FFF0: 'Honeydew',
\t\tF0FFFF: 'ផ្ទៃមេឃ',
\t\tF0F8FF: 'Alice Blue',
\t\tE6E6FA: 'ឡាវិនដឺ',
\t\tFFF: 'ស',
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
\tmore: 'ពណ៌​ផ្សេង​ទៀត..',
\tpanelTitle: 'ពណ៌',
\ttextColorTitle: 'ពណ៌អក្សរ'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/km.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/km.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/km.js");
    }
}
