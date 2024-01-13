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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/es-mx.js */
class __TwigTemplate_df51550b9309ea25c8c056c878a555808cafe62b54cec2058a89ff77c3bd16e9 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'es-mx', {
\tauto: 'Automático',
\tbgColorTitle: 'Color de fondo',
\tcolors: {
\t\t'000': 'Negro',
\t\t'800000': 'Marrón',
\t\t'8B4513': 'Café sucio',
\t\t'2F4F4F': 'Gris pizarra oscuro',
\t\t'008080': 'Teal',
\t\t'000080': 'Armada',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Gris oscuro',
\t\tB22222: 'Ladrillo de fuego',
\t\tA52A2A: 'Café',
\t\tDAA520: 'Barra de oro',
\t\t'006400': 'Verde oscuro',
\t\t'40E0D0': 'Turquesa',
\t\t'0000CD': 'Azul medio',
\t\t'800080': 'Morado',
\t\t'808080': 'Gris',
\t\tF00: 'Rojo',
\t\tFF8C00: 'Naranja oscuro',
\t\tFFD700: 'Oro',
\t\t'008000': 'Verde',
\t\t'0FF': 'Cian',
\t\t'00F': 'Azul',
\t\tEE82EE: 'Violeta',
\t\tA9A9A9: 'Gris oscuro',
\t\tFFA07A: 'Salmón claro',
\t\tFFA500: 'Naranja',
\t\tFFFF00: 'Amarillo',
\t\t'00FF00': 'Lima',
\t\tAFEEEE: 'Turquesa pálido',
\t\tADD8E6: 'Azul claro',
\t\tDDA0DD: 'Ciruela',
\t\tD3D3D3: 'Gris claro',
\t\tFFF0F5: 'Rubor de lavanda',
\t\tFAEBD7: 'Blanco antiguo',
\t\tFFFFE0: 'Amarillo claro',
\t\tF0FFF0: 'Gotas de miel',
\t\tF0FFFF: 'Azul celeste',
\t\tF0F8FF: 'Azul Alicia',
\t\tE6E6FA: 'Lavanda',
\t\tFFF: 'Blanco',
\t\t'1ABC9C': 'Cian fuerte',
\t\t'2ECC71': 'Esmeralda',
\t\t'3498DB': 'Azul brillante',
\t\t'9B59B6': 'Amatista',
\t\t'4E5F70': 'Azul grisáceo',
\t\t'F1C40F': 'Amarillo vívido',
\t\t'16A085': 'Cian oscuro',
\t\t'27AE60': 'Esmeralda oscuro',
\t\t'2980B9': 'Azul fuerte',
\t\t'8E44AD': 'Violeta oscuro',
\t\t'2C3E50': 'Azul Desaturado',
\t\t'F39C12': 'Naranja',
\t\t'E67E22': 'Zanahoria',
\t\t'E74C3C': 'Rojo pálido',
\t\t'ECF0F1': 'Plata brillante',
\t\t'95A5A6': 'Cian grisáceo claro',
\t\t'DDD': 'Gris claro',
\t\t'D35400': 'Calabaza',
\t\t'C0392B': 'Rojo fuerte',
\t\t'BDC3C7': 'Plata',
\t\t'7F8C8D': 'Cian grisáceo',
\t\t'999': 'Gris oscuro'
\t},
\tmore: 'Más colores...',
\tpanelTitle: 'Colores',
\ttextColorTitle: 'Color de texto'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/es-mx.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/es-mx.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/es-mx.js");
    }
}
