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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fi.js */
class __TwigTemplate_aec723d612d66feca4d6a81cb9f723de04438fc30a1d3240a84ee6bf8e3f02d3 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'fi', {
\tauto: 'Automaattinen',
\tbgColorTitle: 'Taustaväri',
\tcolors: {
\t\t'000': 'Musta',
\t\t'800000': 'Kastanjanruskea',
\t\t'8B4513': 'Satulanruskea',
\t\t'2F4F4F': 'Tumma liuskekivenharmaa',
\t\t'008080': 'Sinivihreä',
\t\t'000080': 'Laivastonsininen',
\t\t'4B0082': 'Indigonsininen',
\t\t'696969': 'Tummanharmaa',
\t\tB22222: 'Tiili',
\t\tA52A2A: 'Ruskea',
\t\tDAA520: 'Kultapiisku',
\t\t'006400': 'Tummanvihreä',
\t\t'40E0D0': 'Turkoosi',
\t\t'0000CD': 'Keskisininen',
\t\t'800080': 'Purppura',
\t\t'808080': 'Harmaa',
\t\tF00: 'Punainen',
\t\tFF8C00: 'Tumma oranssi',
\t\tFFD700: 'Kulta',
\t\t'008000': 'Vihreä',
\t\t'0FF': 'Syaani',
\t\t'00F': 'Sininen',
\t\tEE82EE: 'Violetti',
\t\tA9A9A9: 'Tummanharmaa',
\t\tFFA07A: 'Vaaleanlohenpunainen',
\t\tFFA500: 'Oranssi',
\t\tFFFF00: 'Keltainen',
\t\t'00FF00': 'Limetin vihreä',
\t\tAFEEEE: 'Haalea turkoosi',
\t\tADD8E6: 'Vaaleansininen',
\t\tDDA0DD: 'Luumu',
\t\tD3D3D3: 'Vaaleanharmaa',
\t\tFFF0F5: 'Laventelinpunainen',
\t\tFAEBD7: 'Antiikinvalkoinen',
\t\tFFFFE0: 'Vaaleankeltainen',
\t\tF0FFF0: 'Hunajameloni',
\t\tF0FFFF: 'Asurinsininen',
\t\tF0F8FF: 'Alice Blue -sininen',
\t\tE6E6FA: 'Lavanteli',
\t\tFFF: 'Valkoinen',
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
\tmore: 'Lisää värejä...',
\tpanelTitle: 'Värit',
\ttextColorTitle: 'Tekstiväri'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fi.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fi.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fi.js");
    }
}
