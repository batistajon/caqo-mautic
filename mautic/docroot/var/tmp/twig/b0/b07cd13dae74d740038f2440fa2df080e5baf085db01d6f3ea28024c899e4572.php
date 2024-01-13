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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/cs.js */
class __TwigTemplate_d39d80edcc84888fd104f3bdc536ea112a19327b6f8fc81e3d456dafeb0eb82e extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'cs', {
\tauto: 'Automaticky',
\tbgColorTitle: 'Barva pozadí',
\tcolors: {
\t\t'000': 'Černá',
\t\t'800000': 'Kaštanová',
\t\t'8B4513': 'Sedlová hněď',
\t\t'2F4F4F': 'Tmavě bledě šedá',
\t\t'008080': 'Čírka',
\t\t'000080': 'Námořnická modř',
\t\t'4B0082': 'Inkoustová',
\t\t'696969': 'Tmavě šedá',
\t\tB22222: 'Pálená cihla',
\t\tA52A2A: 'Hnědá',
\t\tDAA520: 'Zlatý prut',
\t\t'006400': 'Tmavě zelená',
\t\t'40E0D0': 'Tyrkisová',
\t\t'0000CD': 'Středně modrá',
\t\t'800080': 'Purpurová',
\t\t'808080': 'Šedá',
\t\tF00: 'Červená',
\t\tFF8C00: 'Tmavě oranžová',
\t\tFFD700: 'Zlatá',
\t\t'008000': 'Zelená',
\t\t'0FF': 'Azurová',
\t\t'00F': 'Modrá',
\t\tEE82EE: 'Fialová',
\t\tA9A9A9: 'Kalně šedá',
\t\tFFA07A: 'Světle lososová',
\t\tFFA500: 'Oranžová',
\t\tFFFF00: 'Žlutá',
\t\t'00FF00': 'Limetková',
\t\tAFEEEE: 'Bledě tyrkisová',
\t\tADD8E6: 'Světle modrá',
\t\tDDA0DD: 'Švestková',
\t\tD3D3D3: 'Světle šedá',
\t\tFFF0F5: 'Levandulově ruměnná',
\t\tFAEBD7: 'Antická bílá',
\t\tFFFFE0: 'Světle žlutá',
\t\tF0FFF0: 'Medová rosa',
\t\tF0FFFF: 'Azurová',
\t\tF0F8FF: 'Alenčina modrá',
\t\tE6E6FA: 'Levandulová',
\t\tFFF: 'Bílá',
\t\t'1ABC9C': 'Silná azurová',
\t\t'2ECC71': 'Emeraldová',
\t\t'3498DB': 'Jasně modrá',
\t\t'9B59B6': 'Ametystová',
\t\t'4E5F70': 'Šedomodrá',
\t\t'F1C40F': 'Sytá žlutá',
\t\t'16A085': 'Tmavě azurová',
\t\t'27AE60': 'Tmavě emeraldová',
\t\t'2980B9': 'Silná modrá',
\t\t'8E44AD': 'Tmavě fialová',
\t\t'2C3E50': 'Odsycená modrá',
\t\t'F39C12': 'Oranžová',
\t\t'E67E22': 'Mrkvová',
\t\t'E74C3C': 'Bledě červená',
\t\t'ECF0F1': 'Světle stříbrná',
\t\t'95A5A6': 'Světlě šedoazurová',
\t\t'DDD': 'Světle šedá',
\t\t'D35400': 'Dýňová',
\t\t'C0392B': 'Silná červená',
\t\t'BDC3C7': 'Stříbrná',
\t\t'7F8C8D': 'Šedoazurová',
\t\t'999': 'Tmavošedá'
\t},
\tmore: 'Více barev...',
\tpanelTitle: 'Barvy',
\ttextColorTitle: 'Barva textu'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/cs.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/cs.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/cs.js");
    }
}
