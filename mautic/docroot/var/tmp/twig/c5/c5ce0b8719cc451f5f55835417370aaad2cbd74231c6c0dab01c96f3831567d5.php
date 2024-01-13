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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/nb.js */
class __TwigTemplate_b8f49984f9b8cad5dd4d3008798eda252de6b99e0c3a948c711b96ee3946c9ac extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'nb', {
\tauto: 'Automatisk',
\tbgColorTitle: 'Bakgrunnsfarge',
\tcolors: {
\t\t'000': 'Svart',
\t\t'800000': 'Rødbrun',
\t\t'8B4513': 'Salbrun',
\t\t'2F4F4F': 'Grønnsvart',
\t\t'008080': 'Blågrønn',
\t\t'000080': 'Marineblå',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Mørk grå',
\t\tB22222: 'Mørkerød',
\t\tA52A2A: 'Brun',
\t\tDAA520: 'Lys brun',
\t\t'006400': 'Mørk grønn',
\t\t'40E0D0': 'Turkis',
\t\t'0000CD': 'Medium blå',
\t\t'800080': 'Purpur',
\t\t'808080': 'Grå',
\t\tF00: 'Rød',
\t\tFF8C00: 'Mørk oransje',
\t\tFFD700: 'Gull',
\t\t'008000': 'Grønn',
\t\t'0FF': 'Cyan',
\t\t'00F': 'Blå',
\t\tEE82EE: 'Fiolett',
\t\tA9A9A9: 'Svak grå',
\t\tFFA07A: 'Rosa-oransje',
\t\tFFA500: 'Oransje',
\t\tFFFF00: 'Gul',
\t\t'00FF00': 'Lime',
\t\tAFEEEE: 'Svak turkis',
\t\tADD8E6: 'Lys blå',
\t\tDDA0DD: 'Plomme',
\t\tD3D3D3: 'Lys grå',
\t\tFFF0F5: 'Svak lavendelrosa',
\t\tFAEBD7: 'Antikk-hvit',
\t\tFFFFE0: 'Lys gul',
\t\tF0FFF0: 'Honningmelon',
\t\tF0FFFF: 'Svak asurblå',
\t\tF0F8FF: 'Svak cyan',
\t\tE6E6FA: 'Lavendel',
\t\tFFF: 'Hvit',
\t\t'1ABC9C': 'Sterk cyan',
\t\t'2ECC71': 'Smaragd',
\t\t'3498DB': 'Lys blå',
\t\t'9B59B6': 'Ametyst',
\t\t'4E5F70': 'Gråaktig blå',
\t\t'F1C40F': 'Livaktig gul',
\t\t'16A085': 'Mørk cyan',
\t\t'27AE60': 'Mørk smaragd',
\t\t'2980B9': 'Sterk blå',
\t\t'8E44AD': 'Mørk fiolett',
\t\t'2C3E50': 'Desaturert blå',
\t\t'F39C12': 'Oransje',
\t\t'E67E22': 'Gulrot',
\t\t'E74C3C': 'Blek rød',
\t\t'ECF0F1': 'Klar sølv',
\t\t'95A5A6': 'Lys gråaktig cyan',
\t\t'DDD': 'Lys grå',
\t\t'D35400': 'Gresskar',
\t\t'C0392B': 'Sterk rød',
\t\t'BDC3C7': 'Sølv',
\t\t'7F8C8D': 'Gråaktig cyan',
\t\t'999': 'Mørk grå'
\t},
\tmore: 'Flere farger...',
\tpanelTitle: 'Farger',
\ttextColorTitle: 'Tekstfarge'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/nb.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/nb.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/nb.js");
    }
}
