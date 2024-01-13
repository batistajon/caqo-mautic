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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fr-ca.js */
class __TwigTemplate_c701340528d59d164348c6db09c7e53d8b32a1c4cec549287a42111071df65f0 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'fr-ca', {
\tauto: 'Automatique',
\tbgColorTitle: 'Couleur de fond',
\tcolors: {
\t\t'000': 'Noir',
\t\t'800000': 'Marron',
\t\t'8B4513': 'Brun foncé',
\t\t'2F4F4F': 'Gris ardoise foncé',
\t\t'008080': 'Sarcelle',
\t\t'000080': 'Marine',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Gris foncé',
\t\tB22222: 'Rouge brique',
\t\tA52A2A: 'Brun',
\t\tDAA520: 'Doré',
\t\t'006400': 'Vert foncé',
\t\t'40E0D0': 'Turquoise',
\t\t'0000CD': 'Bleu',
\t\t'800080': 'Mauve',
\t\t'808080': 'Gris',
\t\tF00: 'Rouge',
\t\tFF8C00: 'Orange foncé',
\t\tFFD700: 'Or',
\t\t'008000': 'Vert',
\t\t'0FF': 'Cyan',
\t\t'00F': 'Bleu',
\t\tEE82EE: 'Violet',
\t\tA9A9A9: 'Gris pâle',
\t\tFFA07A: 'Saumon clair',
\t\tFFA500: 'Orange',
\t\tFFFF00: 'Jaune',
\t\t'00FF00': 'Vert lime',
\t\tAFEEEE: 'Turquoise pâle',
\t\tADD8E6: 'Bleu pâle',
\t\tDDA0DD: 'Prune',
\t\tD3D3D3: 'Gris pâle',
\t\tFFF0F5: 'Bleu lavande',
\t\tFAEBD7: 'Blanc antique',
\t\tFFFFE0: 'Jaune pâle',
\t\tF0FFF0: 'Miel doré',
\t\tF0FFFF: 'Azure',
\t\tF0F8FF: 'Bleu alice',
\t\tE6E6FA: 'Lavande',
\t\tFFF: 'Blanc',
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
\tmore: 'Plus de couleurs...',
\tpanelTitle: 'Couleurs',
\ttextColorTitle: 'Couleur de texte'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fr-ca.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fr-ca.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fr-ca.js");
    }
}
