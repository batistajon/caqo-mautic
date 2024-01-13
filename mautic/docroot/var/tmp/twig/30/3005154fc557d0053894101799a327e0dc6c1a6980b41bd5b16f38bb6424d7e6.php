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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/gl.js */
class __TwigTemplate_1c6cb7fd661eba5ecd2825a9a6b4d795a239d62327bfa27515a14e2226086710 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'gl', {
\tauto: 'Automático',
\tbgColorTitle: 'Cor do fondo',
\tcolors: {
\t\t'000': 'Negro',
\t\t'800000': 'Marrón escuro',
\t\t'8B4513': 'Ocre',
\t\t'2F4F4F': 'Pizarra escuro',
\t\t'008080': 'Verde azulado',
\t\t'000080': 'Azul mariño',
\t\t'4B0082': 'Índigo',
\t\t'696969': 'Gris escuro',
\t\tB22222: 'Ladrillo',
\t\tA52A2A: 'Marrón',
\t\tDAA520: 'Dourado escuro',
\t\t'006400': 'Verde escuro',
\t\t'40E0D0': 'Turquesa',
\t\t'0000CD': 'Azul medio',
\t\t'800080': 'Púrpura',
\t\t'808080': 'Gris',
\t\tF00: 'Vermello',
\t\tFF8C00: 'Laranxa escuro',
\t\tFFD700: 'Dourado',
\t\t'008000': 'Verde',
\t\t'0FF': 'Cian',
\t\t'00F': 'Azul',
\t\tEE82EE: 'Violeta',
\t\tA9A9A9: 'Gris medio',
\t\tFFA07A: 'Salmón claro',
\t\tFFA500: 'Laranxa',
\t\tFFFF00: 'Amarelo',
\t\t'00FF00': 'Lima',
\t\tAFEEEE: 'Turquesa pálido',
\t\tADD8E6: 'Azul claro',
\t\tDDA0DD: 'Violeta pálido',
\t\tD3D3D3: 'Verde claro',
\t\tFFF0F5: 'Lavanda vermello',
\t\tFAEBD7: 'Branco antigo',
\t\tFFFFE0: 'Amarelo claro',
\t\tF0FFF0: 'Mel',
\t\tF0FFFF: 'Azul celeste',
\t\tF0F8FF: 'Azul pálido',
\t\tE6E6FA: 'Lavanda',
\t\tFFF: 'Branco',
\t\t'1ABC9C': 'Cian forte',
\t\t'2ECC71': 'Esmeralda',
\t\t'3498DB': 'Azul brillante',
\t\t'9B59B6': 'Amatista',
\t\t'4E5F70': 'Azul agrisado',
\t\t'F1C40F': 'Amarelo vívido',
\t\t'16A085': 'Cian escuro',
\t\t'27AE60': 'Esmeralda escuro',
\t\t'2980B9': 'Azul forte',
\t\t'8E44AD': 'Violeta escuro',
\t\t'2C3E50': 'Azul desaturado',
\t\t'F39C12': 'Laranxa',
\t\t'E67E22': 'Cenoria',
\t\t'E74C3C': 'Vermello pálido',
\t\t'ECF0F1': 'Plata brillante',
\t\t'95A5A6': 'Cian agrisado claro',
\t\t'DDD': 'Gris claro',
\t\t'D35400': 'Cabaza',
\t\t'C0392B': 'Vermello forte',
\t\t'BDC3C7': 'Plata',
\t\t'7F8C8D': 'Cian agrisado',
\t\t'999': 'Gris escuro'
\t},
\tmore: 'Máis cores...',
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
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/gl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/gl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/gl.js");
    }
}
