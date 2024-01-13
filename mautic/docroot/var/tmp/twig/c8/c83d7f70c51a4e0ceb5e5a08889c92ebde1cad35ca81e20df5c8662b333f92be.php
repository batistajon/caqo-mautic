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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/pt-br.js */
class __TwigTemplate_c3633ec6b303df27e70420c941685dab17c9a83c2dc64ce71762d334663d31d8 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'pt-br', {
\tauto: 'Automático',
\tbgColorTitle: 'Cor do Plano de Fundo',
\tcolors: {
\t\t'000': 'Preto',
\t\t'800000': 'Foquete',
\t\t'8B4513': 'Marrom 1',
\t\t'2F4F4F': 'Cinza 1',
\t\t'008080': 'Cerceta',
\t\t'000080': 'Azul Marinho',
\t\t'4B0082': 'Índigo',
\t\t'696969': 'Cinza 2',
\t\tB22222: 'Tijolo de Fogo',
\t\tA52A2A: 'Marrom 2',
\t\tDAA520: 'Vara Dourada',
\t\t'006400': 'Verde Escuro',
\t\t'40E0D0': 'Turquesa',
\t\t'0000CD': 'Azul Médio',
\t\t'800080': 'Roxo',
\t\t'808080': 'Cinza 3',
\t\tF00: 'Vermelho',
\t\tFF8C00: 'Laranja Escuro',
\t\tFFD700: 'Dourado',
\t\t'008000': 'Verde',
\t\t'0FF': 'Ciano',
\t\t'00F': 'Azul',
\t\tEE82EE: 'Violeta',
\t\tA9A9A9: 'Cinza Escuro',
\t\tFFA07A: 'Salmão Claro',
\t\tFFA500: 'Laranja',
\t\tFFFF00: 'Amarelo',
\t\t'00FF00': 'Lima',
\t\tAFEEEE: 'Turquesa Pálido',
\t\tADD8E6: 'Azul Claro',
\t\tDDA0DD: 'Ameixa',
\t\tD3D3D3: 'Cinza Claro',
\t\tFFF0F5: 'Lavanda 1',
\t\tFAEBD7: 'Branco Antiguidade',
\t\tFFFFE0: 'Amarelo Claro',
\t\tF0FFF0: 'Orvalho',
\t\tF0FFFF: 'Azure',
\t\tF0F8FF: 'Azul Alice',
\t\tE6E6FA: 'Lavanda 2',
\t\tFFF: 'Branco',
\t\t'1ABC9C': 'Ciano Forte',
\t\t'2ECC71': 'Esmeralda',
\t\t'3498DB': 'Azul Brilhante',
\t\t'9B59B6': 'Ametista',
\t\t'4E5F70': 'Azul acinzentado',
\t\t'F1C40F': 'Amarelo Vívido',
\t\t'16A085': 'Ciano Escuro',
\t\t'27AE60': 'Esmeralda Escura',
\t\t'2980B9': 'Azul Forte',
\t\t'8E44AD': 'Violeta Escura',
\t\t'2C3E50': 'Azul Dessaturado',
\t\t'F39C12': 'Laranja',
\t\t'E67E22': 'Laranja Cenoura',
\t\t'E74C3C': 'Vermelho Pálido',
\t\t'ECF0F1': 'Prata Brilhante',
\t\t'95A5A6': 'Ciano Acinzentado Claro ',
\t\t'DDD': 'Cinza Claro',
\t\t'D35400': 'Abóbora',
\t\t'C0392B': 'Vermelho Forte',
\t\t'BDC3C7': 'Prata',
\t\t'7F8C8D': 'Ciano Acinzentado',
\t\t'999': 'Cinza Escuro'
\t},
\tmore: 'Mais Cores...',
\tpanelTitle: 'Cores',
\ttextColorTitle: 'Cor do Texto'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/pt-br.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/pt-br.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/pt-br.js");
    }
}
