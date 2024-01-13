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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/et.js */
class __TwigTemplate_459439bac170769d740f4b1310ff9138f8738757f8ac72cafc58ec2ca960173d extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'et', {
\tauto: 'Automaatne',
\tbgColorTitle: 'Tausta värv',
\tcolors: {
\t\t'000': 'Must',
\t\t'800000': 'Kastanpruun',
\t\t'8B4513': 'Sadulapruun',
\t\t'2F4F4F': 'Tume paehall',
\t\t'008080': 'Sinakasroheline',
\t\t'000080': 'Meresinine',
\t\t'4B0082': 'Indigosinine',
\t\t'696969': 'Tumehall',
\t\tB22222: 'Šamottkivi',
\t\tA52A2A: 'Pruun',
\t\tDAA520: 'Kuldkollane',
\t\t'006400': 'Tumeroheline',
\t\t'40E0D0': 'Türkiissinine',
\t\t'0000CD': 'Keskmine sinine',
\t\t'800080': 'Lilla',
\t\t'808080': 'Hall',
\t\tF00: 'Punanae',
\t\tFF8C00: 'Tumeoranž',
\t\tFFD700: 'Kuldne',
\t\t'008000': 'Roheline',
\t\t'0FF': 'Tsüaniidsinine',
\t\t'00F': 'Sinine',
\t\tEE82EE: 'Violetne',
\t\tA9A9A9: 'Tumehall',
\t\tFFA07A: 'Hele lõhe',
\t\tFFA500: 'Oranž',
\t\tFFFF00: 'Kollane',
\t\t'00FF00': 'Lubja hall',
\t\tAFEEEE: 'Kahvatu türkiis',
\t\tADD8E6: 'Helesinine',
\t\tDDA0DD: 'Ploomililla',
\t\tD3D3D3: 'Helehall',
\t\tFFF0F5: 'Lavendlipunane',
\t\tFAEBD7: 'Antiikvalge',
\t\tFFFFE0: 'Helekollane',
\t\tF0FFF0: 'Meloniroheline',
\t\tF0FFFF: 'Taevasinine',
\t\tF0F8FF: 'Beebisinine',
\t\tE6E6FA: 'Lavendel',
\t\tFFF: 'Valge',
\t\t'1ABC9C': 'Tugev taevasinine',
\t\t'2ECC71': 'Smaragdroheline',
\t\t'3498DB': 'Kirgas sinine',
\t\t'9B59B6': 'Ametüst',
\t\t'4E5F70': 'Hallikassinine',
\t\t'F1C40F': 'Erkkollane',
\t\t'16A085': 'Tume taevasinine',
\t\t'27AE60': 'Tumeroheline',
\t\t'2980B9': 'Tugev sinine',
\t\t'8E44AD': 'Tumevioletne',
\t\t'2C3E50': 'Hallikassinine',
\t\t'F39C12': 'Oraanž',
\t\t'E67E22': 'Porgand',
\t\t'E74C3C': 'Kahvatu punane',
\t\t'ECF0F1': 'Kirgas hõbedane',
\t\t'95A5A6': 'Hele hallikas taevasinine',
\t\t'DDD': 'Helehall',
\t\t'D35400': 'Kõrvitsavärv',
\t\t'C0392B': 'Tugev punane',
\t\t'BDC3C7': 'Hõbedane',
\t\t'7F8C8D': 'Hallikas taevasinine',
\t\t'999': 'Tume hall'
\t},
\tmore: 'Rohkem värve...',
\tpanelTitle: 'Värvid',
\ttextColorTitle: 'Teksti värv'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/et.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/et.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/et.js");
    }
}
