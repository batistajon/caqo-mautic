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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/pt.js */
class __TwigTemplate_1bee54c0dbc1a5b369a1fbe74fa9c3eb63ccafcbada4c6e5b3cd946f218eb8d3 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'pt', {
\tauto: 'Automático',
\tbgColorTitle: 'Cor de fundo',
\tcolors: {
\t\t'000': 'Black',
\t\t'800000': 'Castanho',
\t\t'8B4513': 'Saddle Brown',
\t\t'2F4F4F': 'Cinza lousa escuro',
\t\t'008080': 'Teal',
\t\t'000080': 'Azul naval',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Cinza escuro',
\t\tB22222: 'Vermelho tijolo',
\t\tA52A2A: 'Castanho',
\t\tDAA520: 'Dourado (daa520)',
\t\t'006400': 'Verde escuro (006400)',
\t\t'40E0D0': 'Turquesa',
\t\t'0000CD': 'Azul médio (0000cd)',
\t\t'800080': 'Purple',
\t\t'808080': 'Cinza',
\t\tF00: 'Vermelho',
\t\tFF8C00: 'Laranja escuro',
\t\tFFD700: 'Dourado',
\t\t'008000': 'Verde',
\t\t'0FF': 'Ciano',
\t\t'00F': 'Azul',
\t\tEE82EE: 'Violeta',
\t\tA9A9A9: 'Cinza fosco',
\t\tFFA07A: 'Salmão claro',
\t\tFFA500: 'Laranja',
\t\tFFFF00: 'Amarelo',
\t\t'00FF00': 'Limão (Verde espectro)',
\t\tAFEEEE: 'Turquesa pálida (afeeee)',
\t\tADD8E6: 'Light Blue',
\t\tDDA0DD: 'Ameixa',
\t\tD3D3D3: 'Cinza claro',
\t\tFFF0F5: 'Lavanda avermelhada',
\t\tFAEBD7: 'Branco velho',
\t\tFFFFE0: 'Amarelo claro',
\t\tF0FFF0: 'Maná (f0fff0)',
\t\tF0FFFF: 'Azul celeste',
\t\tF0F8FF: 'Azul Alice (f0f8ff)',
\t\tE6E6FA: 'Lavanda',
\t\tFFF: 'Branco',
\t\t'1ABC9C': 'Ciano forte',
\t\t'2ECC71': 'Esmeralda',
\t\t'3498DB': 'Azul brilhante',
\t\t'9B59B6': 'Amethyst', // MISSING
\t\t'4E5F70': 'Azul acinzentado',
\t\t'F1C40F': 'Amarelo vívido',
\t\t'16A085': 'Ciano escuro',
\t\t'27AE60': 'Esmeralda escuro',
\t\t'2980B9': 'Azul forte',
\t\t'8E44AD': 'Violeta escuro',
\t\t'2C3E50': 'Desaturated Blue', // MISSING
\t\t'F39C12': 'Laranja',
\t\t'E67E22': 'Cenoura',
\t\t'E74C3C': 'Vermelho claro',
\t\t'ECF0F1': 'Prateado brilhante',
\t\t'95A5A6': 'Ciano acinzentado claro',
\t\t'DDD': 'Cinza claro',
\t\t'D35400': 'Abóbora',
\t\t'C0392B': 'Strong Red', // MISSING
\t\t'BDC3C7': 'Prateado',
\t\t'7F8C8D': 'Ciano acinzentado',
\t\t'999': 'Cinza escuro'
\t},
\tmore: 'Mais cores...',
\tpanelTitle: 'Cores',
\ttextColorTitle: 'Cor do texto'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/pt.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/pt.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/pt.js");
    }
}
