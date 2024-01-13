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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fr.js */
class __TwigTemplate_51e208ac2c46ddeeba006f95323779c74606f5fa1c5fdec009867baa8cc3a429 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'fr', {
\tauto: 'Automatique',
\tbgColorTitle: 'Couleur d\\'arrière-plan',
\tcolors: {
\t\t'000': 'Noir',
\t\t'800000': 'Marron',
\t\t'8B4513': 'Brun de selle',
\t\t'2F4F4F': 'Gris sombre d\\'ardoise',
\t\t'008080': 'Canard',
\t\t'000080': 'Bleu marine',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Gris foncé',
\t\tB22222: 'Rouge brique',
\t\tA52A2A: 'Brun',
\t\tDAA520: 'Or terni',
\t\t'006400': 'Vert foncé',
\t\t'40E0D0': 'Turquoise',
\t\t'0000CD': 'Bleu royal',
\t\t'800080': 'Violet',
\t\t'808080': 'Gris',
\t\tF00: 'Rouge',
\t\tFF8C00: 'Orange foncé',
\t\tFFD700: 'Or',
\t\t'008000': 'Vert',
\t\t'0FF': 'Cyan',
\t\t'00F': 'Bleu',
\t\tEE82EE: 'Violet',
\t\tA9A9A9: 'Gris tamisé',
\t\tFFA07A: 'Saumon clair',
\t\tFFA500: 'Orange',
\t\tFFFF00: 'Jaune',
\t\t'00FF00': 'Lime',
\t\tAFEEEE: 'Turquoise clair',
\t\tADD8E6: 'Bleu clair',
\t\tDDA0DD: 'Prune',
\t\tD3D3D3: 'Gris clair',
\t\tFFF0F5: 'Fard lavande',
\t\tFAEBD7: 'Blanc antique',
\t\tFFFFE0: 'Jaune clair',
\t\tF0FFF0: 'Vert rosée',
\t\tF0FFFF: 'Azur',
\t\tF0F8FF: 'Bleu Alice',
\t\tE6E6FA: 'Lavande',
\t\tFFF: 'Blanc',
\t\t'1ABC9C': 'Cyan dur',
\t\t'2ECC71': 'Émeraude',
\t\t'3498DB': 'Bleu brillant',
\t\t'9B59B6': 'Améthyste',
\t\t'4E5F70': 'Bleu-gris',
\t\t'F1C40F': 'Jaune vif',
\t\t'16A085': 'Cyan foncé',
\t\t'27AE60': 'Émeraude foncée',
\t\t'2980B9': 'Bleu dur',
\t\t'8E44AD': 'Violet foncé',
\t\t'2C3E50': 'Bleu désaturé',
\t\t'F39C12': 'Orange',
\t\t'E67E22': 'Carotte',
\t\t'E74C3C': 'Rouge pâle',
\t\t'ECF0F1': 'Argent brillant',
\t\t'95A5A6': 'Cyan-gris clair',
\t\t'DDD': 'Gris clair',
\t\t'D35400': 'Citrouille',
\t\t'C0392B': 'Rouge dur',
\t\t'BDC3C7': 'Argent',
\t\t'7F8C8D': 'Cyan-gris',
\t\t'999': 'Gris foncé'
\t},
\tmore: 'Plus de couleurs...',
\tpanelTitle: 'Couleurs',
\ttextColorTitle: 'Couleur du texte'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fr.js");
    }
}
