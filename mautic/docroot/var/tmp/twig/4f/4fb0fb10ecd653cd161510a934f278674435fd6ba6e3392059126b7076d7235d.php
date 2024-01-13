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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sr-latn.js */
class __TwigTemplate_68c6de05ed5517e75bd09f955404e424e78e28c610c9e0aa7ec5be76a4575f21 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'sr-latn', {
\tauto: 'Automatski',
\tbgColorTitle: 'Boja pozadine',
\tcolors: {
\t\t'000': 'Crno',
\t\t'800000': 'Bordo',
\t\t'8B4513': 'Braon',
\t\t'2F4F4F': 'Tamno tirkizno',
\t\t'008080': 'Tirkizno',
\t\t'000080': 'Kraljevsko plavo',
\t\t'4B0082': 'Indigo plavo',
\t\t'696969': 'Sivo',
\t\tB22222: 'Cigla crveno',
\t\tA52A2A: 'Bakarno',
\t\tDAA520: 'Zlatno žuto',
\t\t'006400': 'Tamno zeleno',
\t\t'40E0D0': 'Tirkizno',
\t\t'0000CD': 'Plavo',
\t\t'800080': 'Ljubičasto',
\t\t'808080': 'Sivo',
\t\tF00: 'Crveno',
\t\tFF8C00: 'Tamno narandžasto',
\t\tFFD700: 'Zlatno',
\t\t'008000': 'Zeleno',
\t\t'0FF': 'Cian',
\t\t'00F': 'Plavo',
\t\tEE82EE: 'Roze',
\t\tA9A9A9: 'Tamno sivo',
\t\tFFA07A: 'Losos',
\t\tFFA500: 'Narandžasto',
\t\tFFFF00: 'Žuto',
\t\t'00FF00': 'Neon zeleno',
\t\tAFEEEE: 'Svetlo tirkizno',
\t\tADD8E6: 'Svetlo plavo',
\t\tDDA0DD: 'Svetlo ljubičasto',
\t\tD3D3D3: 'Svetlo sivo',
\t\tFFF0F5: 'Lavande',
\t\tFAEBD7: 'Prljavo belo',
\t\tFFFFE0: 'Svetlo žuto',
\t\tF0FFF0: 'Мentа',
\t\tF0FFFF: 'Azurno plavo',
\t\tF0F8FF: 'Svetlo plavo',
\t\tE6E6FA: 'Lavanda',
\t\tFFF: 'Belo',
\t\t'1ABC9C': 'Tamno cian',
\t\t'2ECC71': 'Smaragdno',
\t\t'3498DB': 'Sjajno plavo',
\t\t'9B59B6': 'Аmetist',
\t\t'4E5F70': 'Sivkasto plavo',
\t\t'F1C40F': 'Svetlo žuto',
\t\t'16A085': 'Tamno cian',
\t\t'27AE60': 'Tamno smaragdno',
\t\t'2980B9': 'Tamno plavo',
\t\t'8E44AD': 'Tamno ljubočasto',
\t\t'2C3E50': 'Svetlo plavo',
\t\t'F39C12': 'Narandžasto',
\t\t'E67E22': 'Šargarepa',
\t\t'E74C3C': 'Svetlo bakarno',
\t\t'ECF0F1': 'Sjajno strebrno',
\t\t'95A5A6': 'Svetlo sivkasto cian',
\t\t'DDD': 'Svetlo sivo',
\t\t'D35400': 'Bundeva',
\t\t'C0392B': 'Tamno crveno',
\t\t'BDC3C7': 'Srebrno',
\t\t'7F8C8D': 'Sivkasto cian',
\t\t'999': 'Tamno siv'
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
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sr-latn.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sr-latn.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/sr-latn.js");
    }
}
