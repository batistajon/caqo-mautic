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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/hr.js */
class __TwigTemplate_96f4a0c0bbd6d14a6e664264f6473c01bf7f9e7eeac918564946e9cc7442c81b extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'hr', {
\tauto: 'Automatski',
\tbgColorTitle: 'Boja pozadine',
\tcolors: {
\t\t'000': 'Crna',
\t\t'800000': 'Kesten',
\t\t'8B4513': 'Smeđa',
\t\t'2F4F4F': 'Tamno siva',
\t\t'008080': 'Teal',
\t\t'000080': 'Mornarska',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Tamno siva',
\t\tB22222: 'Vatrena cigla',
\t\tA52A2A: 'Smeđa',
\t\tDAA520: 'Zlatna',
\t\t'006400': 'Tamno zelena',
\t\t'40E0D0': 'Tirkizna',
\t\t'0000CD': 'Srednje plava',
\t\t'800080': 'Ljubičasta',
\t\t'808080': 'Siva',
\t\tF00: 'Crvena',
\t\tFF8C00: 'Tamno naranđasta',
\t\tFFD700: 'Zlatna',
\t\t'008000': 'Zelena',
\t\t'0FF': 'Cijan',
\t\t'00F': 'Plava',
\t\tEE82EE: 'Ljubičasta',
\t\tA9A9A9: 'Mutno siva',
\t\tFFA07A: 'Svijetli losos',
\t\tFFA500: 'Naranđasto',
\t\tFFFF00: 'Žuto',
\t\t'00FF00': 'Limun',
\t\tAFEEEE: 'Blijedo tirkizna',
\t\tADD8E6: 'Svijetlo plava',
\t\tDDA0DD: 'Šljiva',
\t\tD3D3D3: 'Svijetlo siva',
\t\tFFF0F5: 'Lavanda rumeno',
\t\tFAEBD7: 'Antikno bijela',
\t\tFFFFE0: 'Svijetlo žuta',
\t\tF0FFF0: 'Med',
\t\tF0FFFF: 'Azurna',
\t\tF0F8FF: 'Alice plava',
\t\tE6E6FA: 'Lavanda',
\t\tFFF: 'Bijela',
\t\t'1ABC9C': 'Jaka cijan',
\t\t'2ECC71': 'Emerald',
\t\t'3498DB': 'Svijetlo plava',
\t\t'9B59B6': 'Ametist',
\t\t'4E5F70': 'Sivkasto plava',
\t\t'F1C40F': 'Žarka žuta',
\t\t'16A085': 'Tamna cijan',
\t\t'27AE60': 'Tamna emerald',
\t\t'2980B9': 'Jaka plava',
\t\t'8E44AD': 'Tamno ljubičasta',
\t\t'2C3E50': 'Desatuirarana plava',
\t\t'F39C12': 'Narančasta',
\t\t'E67E22': 'Mrkva',
\t\t'E74C3C': 'Blijedo crvena',
\t\t'ECF0F1': 'Sjana srebrna',
\t\t'95A5A6': 'Svijetlo sivkasta cijan',
\t\t'DDD': 'Svijetlo siva',
\t\t'D35400': 'Tikva',
\t\t'C0392B': 'Jaka crvena',
\t\t'BDC3C7': 'Srebrna',
\t\t'7F8C8D': 'Sivkasto cijan',
\t\t'999': 'Tamno siva'
\t},
\tmore: 'Više boja...',
\tpanelTitle: 'Boje',
\ttextColorTitle: 'Boja teksta'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/hr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/hr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/hr.js");
    }
}
