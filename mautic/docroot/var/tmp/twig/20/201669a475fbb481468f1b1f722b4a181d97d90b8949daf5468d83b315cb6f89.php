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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/es.js */
class __TwigTemplate_3314dc7d4048684756a180c9cdb67a186463c44296490b5a3e5004270d13fbe8 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'es', {
\tauto: 'Automático',
\tbgColorTitle: 'Color de Fondo',
\tcolors: {
\t\t'000': 'Negro',
\t\t'800000': 'Marrón oscuro',
\t\t'8B4513': 'Marrón tierra',
\t\t'2F4F4F': 'Pizarra Oscuro',
\t\t'008080': 'Azul verdoso',
\t\t'000080': 'Azul marino',
\t\t'4B0082': 'Añil',
\t\t'696969': 'Gris oscuro',
\t\tB22222: 'Ladrillo',
\t\tA52A2A: 'Marrón',
\t\tDAA520: 'Oro oscuro',
\t\t'006400': 'Verde oscuro',
\t\t'40E0D0': 'Turquesa',
\t\t'0000CD': 'Azul medio-oscuro',
\t\t'800080': 'Púrpura',
\t\t'808080': 'Gris',
\t\tF00: 'Rojo',
\t\tFF8C00: 'Naranja oscuro',
\t\tFFD700: 'Oro',
\t\t'008000': 'Verde',
\t\t'0FF': 'Cian',
\t\t'00F': 'Azul',
\t\tEE82EE: 'Violeta',
\t\tA9A9A9: 'Gris medio',
\t\tFFA07A: 'Salmón claro',
\t\tFFA500: 'Naranja',
\t\tFFFF00: 'Amarillo',
\t\t'00FF00': 'Lima',
\t\tAFEEEE: 'Turquesa claro',
\t\tADD8E6: 'Azul claro',
\t\tDDA0DD: 'Violeta claro',
\t\tD3D3D3: 'Gris claro',
\t\tFFF0F5: 'Lavanda rojizo',
\t\tFAEBD7: 'Blanco antiguo',
\t\tFFFFE0: 'Amarillo claro',
\t\tF0FFF0: 'Miel',
\t\tF0FFFF: 'Azul celeste',
\t\tF0F8FF: 'Azul pálido',
\t\tE6E6FA: 'Lavanda',
\t\tFFF: 'Blanco',
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
\tmore: 'Más Colores...',
\tpanelTitle: 'Colores',
\ttextColorTitle: 'Color de Texto'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/es.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/es.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/es.js");
    }
}
