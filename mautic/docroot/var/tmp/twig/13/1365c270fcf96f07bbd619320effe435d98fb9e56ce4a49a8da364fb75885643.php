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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sv.js */
class __TwigTemplate_73a280d943fc966dcf564b4a2b2cba867a3273942d4ce48326087e6d943c4fb0 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'sv', {
\tauto: 'Automatisk',
\tbgColorTitle: 'Bakgrundsfärg',
\tcolors: {
\t\t'000': 'Svart',
\t\t'800000': 'Rödbrun',
\t\t'8B4513': 'Mörkbrun',
\t\t'2F4F4F': 'Skiffergrå',
\t\t'008080': 'Kricka',
\t\t'000080': 'Marinblå',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Mörkgrå',
\t\tB22222: 'Tegelsten',
\t\tA52A2A: 'Brun',
\t\tDAA520: 'Mörk guld',
\t\t'006400': 'Mörkgrön',
\t\t'40E0D0': 'Turkos',
\t\t'0000CD': 'Medium blå',
\t\t'800080': 'Lila',
\t\t'808080': 'Grå',
\t\tF00: 'Röd',
\t\tFF8C00: 'Mörkorange',
\t\tFFD700: 'Guld',
\t\t'008000': 'Grön',
\t\t'0FF': 'Turkos',
\t\t'00F': 'Blå',
\t\tEE82EE: 'Violett',
\t\tA9A9A9: 'Matt grå',
\t\tFFA07A: 'Laxrosa',
\t\tFFA500: 'Orange',
\t\tFFFF00: 'Gul',
\t\t'00FF00': 'Lime',
\t\tAFEEEE: 'Ljusturkos',
\t\tADD8E6: 'Ljusblå',
\t\tDDA0DD: 'Plommon',
\t\tD3D3D3: 'Ljusgrå',
\t\tFFF0F5: 'Ljus lavendel',
\t\tFAEBD7: 'Antikvit',
\t\tFFFFE0: 'Ljusgul',
\t\tF0FFF0: 'Honungsdagg',
\t\tF0FFFF: 'Azurblå',
\t\tF0F8FF: 'Aliceblå',
\t\tE6E6FA: 'Lavendel',
\t\tFFF: 'Vit',
\t\t'1ABC9C': 'Stark turkos',
\t\t'2ECC71': 'Smaragd',
\t\t'3498DB': 'Klarblå',
\t\t'9B59B6': 'Ametist',
\t\t'4E5F70': 'Gråblå',
\t\t'F1C40F': 'Klargul',
\t\t'16A085': 'Mörk turkos',
\t\t'27AE60': 'Mörk smaragd',
\t\t'2980B9': 'Stark blå',
\t\t'8E44AD': 'Mörk violett',
\t\t'2C3E50': 'Blek blå',
\t\t'F39C12': 'Orange',
\t\t'E67E22': 'Morot',
\t\t'E74C3C': 'Blekröd',
\t\t'ECF0F1': 'Stark silver',
\t\t'95A5A6': 'Ljus gråaktig turkos',
\t\t'DDD': 'Ljusgrå',
\t\t'D35400': 'Pumpa',
\t\t'C0392B': 'Stark röd',
\t\t'BDC3C7': 'Silver',
\t\t'7F8C8D': 'Gråaktig turkos',
\t\t'999': 'Mörkgrå'
\t},
\tmore: 'Fler färger...',
\tpanelTitle: 'Färger',
\ttextColorTitle: 'Textfärg'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sv.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sv.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sv.js");
    }
}
