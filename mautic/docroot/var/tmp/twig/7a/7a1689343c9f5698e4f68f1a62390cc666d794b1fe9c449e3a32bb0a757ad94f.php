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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/it.js */
class __TwigTemplate_e3e1a3d68f6a2797bf24fb24ad7ff4a8bf1bf844333a73fc7ac454353146142b extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'it', {
\tauto: 'Automatico',
\tbgColorTitle: 'Colore sfondo',
\tcolors: {
\t\t'000': 'Nero',
\t\t'800000': 'Marrone Castagna',
\t\t'8B4513': 'Marrone Cuoio',
\t\t'2F4F4F': 'Grigio Fumo di Londra',
\t\t'008080': 'Acquamarina',
\t\t'000080': 'Blu Oceano',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Grigio Scuro',
\t\tB22222: 'Giallo Fiamma',
\t\tA52A2A: 'Marrone',
\t\tDAA520: 'Giallo Mimosa',
\t\t'006400': 'Verde Scuro',
\t\t'40E0D0': 'Turchese',
\t\t'0000CD': 'Blue Scuro',
\t\t'800080': 'Viola',
\t\t'808080': 'Grigio',
\t\tF00: 'Rosso',
\t\tFF8C00: 'Arancio Scuro',
\t\tFFD700: 'Oro',
\t\t'008000': 'Verde',
\t\t'0FF': 'Ciano',
\t\t'00F': 'Blu',
\t\tEE82EE: 'Violetto',
\t\tA9A9A9: 'Grigio Scuro',
\t\tFFA07A: 'Salmone',
\t\tFFA500: 'Arancio',
\t\tFFFF00: 'Giallo',
\t\t'00FF00': 'Lime',
\t\tAFEEEE: 'Turchese Chiaro',
\t\tADD8E6: 'Blu Chiaro',
\t\tDDA0DD: 'Rosso Ciliegia',
\t\tD3D3D3: 'Grigio Chiaro',
\t\tFFF0F5: 'Lavanda Chiara',
\t\tFAEBD7: 'Bianco Antico',
\t\tFFFFE0: 'Giallo Chiaro',
\t\tF0FFF0: 'Verde Mela',
\t\tF0FFFF: 'Azzurro',
\t\tF0F8FF: 'Celeste',
\t\tE6E6FA: 'Lavanda',
\t\tFFF: 'Bianco',
\t\t'1ABC9C': 'Ciano intenso',
\t\t'2ECC71': 'Smeraldo',
\t\t'3498DB': 'Blu luminoso',
\t\t'9B59B6': 'Ametista',
\t\t'4E5F70': 'Blu grigiastro',
\t\t'F1C40F': 'Giallo vivido',
\t\t'16A085': 'Ciano scuro',
\t\t'27AE60': 'Smeraldo scuro',
\t\t'2980B9': 'Blu intenso',
\t\t'8E44AD': 'Viola scuro',
\t\t'2C3E50': 'Blu desaturato',
\t\t'F39C12': 'Arancio',
\t\t'E67E22': 'Carota',
\t\t'E74C3C': 'Rosso pallido',
\t\t'ECF0F1': 'Argento luminoso',
\t\t'95A5A6': 'Ciano grigiastro chiaro',
\t\t'DDD': 'Grigio chiaro',
\t\t'D35400': 'Zucca',
\t\t'C0392B': 'Rosso intenso',
\t\t'BDC3C7': 'Argento',
\t\t'7F8C8D': 'Ciano grigiastro',
\t\t'999': 'Grigio scuro'
\t},
\tmore: 'Altri colori...',
\tpanelTitle: 'Colori',
\ttextColorTitle: 'Colore testo'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/it.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/it.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/it.js");
    }
}
