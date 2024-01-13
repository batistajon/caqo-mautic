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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/da.js */
class __TwigTemplate_45d3e640b37eac3230eb70a0684d33417af4df034981543c709a0ba5f84e56fc extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'da', {
\tauto: 'Automatisk',
\tbgColorTitle: 'Baggrundsfarve',
\tcolors: {
\t\t'000': 'Sort',
\t\t'800000': 'Mørkerød',
\t\t'8B4513': 'Mørk orange',
\t\t'2F4F4F': 'Mørk skifer grå',
\t\t'008080': 'Turkis',
\t\t'000080': 'Marine',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Mørkegrå',
\t\tB22222: 'Scarlet / Rød',
\t\tA52A2A: 'Brun',
\t\tDAA520: 'Guld',
\t\t'006400': 'Mørkegrøn',
\t\t'40E0D0': 'Turkis',
\t\t'0000CD': 'Mellemblå',
\t\t'800080': 'Lilla',
\t\t'808080': 'Grå',
\t\tF00: 'Rød',
\t\tFF8C00: 'Mørk orange',
\t\tFFD700: 'Guld',
\t\t'008000': 'Grøn',
\t\t'0FF': 'Cyan',
\t\t'00F': 'Blå',
\t\tEE82EE: 'Violet',
\t\tA9A9A9: 'Matgrå',
\t\tFFA07A: 'Laksefarve',
\t\tFFA500: 'Orange',
\t\tFFFF00: 'Gul',
\t\t'00FF00': 'Lime',
\t\tAFEEEE: 'Mat turkis',
\t\tADD8E6: 'Lyseblå',
\t\tDDA0DD: 'Mørkerød',
\t\tD3D3D3: 'Lysegrå',
\t\tFFF0F5: 'Lavendelrød',
\t\tFAEBD7: 'Antikhvid',
\t\tFFFFE0: 'Lysegul',
\t\tF0FFF0: 'Gul / Beige',
\t\tF0FFFF: 'Himmeblå',
\t\tF0F8FF: 'Alice blue',
\t\tE6E6FA: 'Lavendel',
\t\tFFF: 'Hvid',
\t\t'1ABC9C': 'Stærk cyan',
\t\t'2ECC71': 'Smaragd',
\t\t'3498DB': 'Klar blå',
\t\t'9B59B6': 'Ametyst',
\t\t'4E5F70': 'Glålig blå',
\t\t'F1C40F': 'Klar gul',
\t\t'16A085': 'Mørk cyan',
\t\t'27AE60': 'Mørk smaragd',
\t\t'2980B9': 'Stærk blå',
\t\t'8E44AD': 'Mørk violet',
\t\t'2C3E50': 'Mat blå',
\t\t'F39C12': 'Orange',
\t\t'E67E22': 'Gulerod',
\t\t'E74C3C': 'Bleg rød',
\t\t'ECF0F1': 'Klar sølv',
\t\t'95A5A6': 'Lys grålig cyan',
\t\t'DDD': 'Lys grå',
\t\t'D35400': 'Græskar',
\t\t'C0392B': 'Stærk rød',
\t\t'BDC3C7': 'Sølv',
\t\t'7F8C8D': 'Glålig cyan',
\t\t'999': 'Mørk grå'
\t},
\tmore: 'Flere farver...',
\tpanelTitle: 'Farver',
\ttextColorTitle: 'Tekstfarve'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/da.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/da.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/da.js");
    }
}
