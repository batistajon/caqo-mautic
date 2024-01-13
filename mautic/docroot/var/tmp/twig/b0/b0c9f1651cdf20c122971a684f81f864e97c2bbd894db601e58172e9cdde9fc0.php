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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ka.js */
class __TwigTemplate_67840810af254519c45206f614a5318db2a8233e1b6a7382c2b5b5237d4122fb extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'ka', {
\tauto: 'ავტომატური',
\tbgColorTitle: 'ფონის ფერი',
\tcolors: {
\t\t'000': 'შავი',
\t\t'800000': 'მუქი შინდისფერი',
\t\t'8B4513': 'ყავისფერი',
\t\t'2F4F4F': 'მოლურჯო ნაცრისფერი',
\t\t'008080': 'ჩამქრალი ლურჯი',
\t\t'000080': 'მუქი ლურჯი',
\t\t'4B0082': 'იასამნისფერი',
\t\t'696969': 'მუქი ნაცრისფერი',
\t\tB22222: 'აგურისფერი',
\t\tA52A2A: 'მუქი ყავისფერი',
\t\tDAA520: 'მოყვითალო',
\t\t'006400': 'მუქი მწვანე',
\t\t'40E0D0': 'ცისფერი',
\t\t'0000CD': 'ზომიერად ლურჯი',
\t\t'800080': 'იისფერი',
\t\t'808080': 'ნაცრისფერი',
\t\tF00: 'წითელი',
\t\tFF8C00: 'მუქი სტაფილოსფერი',
\t\tFFD700: 'ოქროსფერი',
\t\t'008000': 'მწვანე',
\t\t'0FF': 'ღია ცისფერი',
\t\t'00F': 'ლურჯი',
\t\tEE82EE: 'იისფერი',
\t\tA9A9A9: 'ბაცი ნაცრისფერი',
\t\tFFA07A: 'ჩამქრალი ვარდისფერი',
\t\tFFA500: 'სტაფილოსფერი',
\t\tFFFF00: 'ყვითელი',
\t\t'00FF00': 'ლურჯი',
\t\tAFEEEE: 'ცისფერი',
\t\tADD8E6: 'ღია ლურჯი',
\t\tDDA0DD: 'ღია იისფერი',
\t\tD3D3D3: 'ღია ნაცრისფერი',
\t\tFFF0F5: 'ღია ვარდისფერი',
\t\tFAEBD7: 'ღია ყავისფერი',
\t\tFFFFE0: 'ნათელი ყვითელი',
\t\tF0FFF0: 'ღია მწვანე',
\t\tF0FFFF: 'ღია ცისფერი 2',
\t\tF0F8FF: 'ღია ცისფერი 3',
\t\tE6E6FA: 'ღია იისფერი 2',
\t\tFFF: 'თეთრი',
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
\tmore: 'მეტი ფერი...',
\tpanelTitle: 'ფერები',
\ttextColorTitle: 'ტექსტის ფერი'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ka.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ka.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ka.js");
    }
}
