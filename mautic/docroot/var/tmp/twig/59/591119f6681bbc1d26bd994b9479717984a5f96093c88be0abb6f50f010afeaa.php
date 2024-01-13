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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/de.js */
class __TwigTemplate_5df220dd344952642842c5e2b22f20f22829e6fab11204c330f6d4b4f253bc9d extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'de', {
\tauto: 'Automatisch',
\tbgColorTitle: 'Hintergrundfarbe',
\tcolors: {
\t\t'000': 'Schwarz',
\t\t'800000': 'Kastanienbraun',
\t\t'8B4513': 'Braun',
\t\t'2F4F4F': 'Dunkles Schiefergrau',
\t\t'008080': 'Blaugrün',
\t\t'000080': 'Marineblau',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Dunkelgrau',
\t\tB22222: 'Ziegelrot',
\t\tA52A2A: 'Braun',
\t\tDAA520: 'Goldgelb',
\t\t'006400': 'Dunkelgrün',
\t\t'40E0D0': 'Türkis',
\t\t'0000CD': 'Mittelblau',
\t\t'800080': 'Lila',
\t\t'808080': 'Grau',
\t\tF00: 'Rot',
\t\tFF8C00: 'Dunkelorange',
\t\tFFD700: 'Gold',
\t\t'008000': 'Grün',
\t\t'0FF': 'Cyan',
\t\t'00F': 'Blau',
\t\tEE82EE: 'Violett',
\t\tA9A9A9: 'Dunkelgrau',
\t\tFFA07A: 'Helles Lachsrosa',
\t\tFFA500: 'Orange',
\t\tFFFF00: 'Gelb',
\t\t'00FF00': 'Lime',
\t\tAFEEEE: 'Blasstürkis',
\t\tADD8E6: 'Hellblau',
\t\tDDA0DD: 'Pflaumenblau',
\t\tD3D3D3: 'Hellgrau',
\t\tFFF0F5: 'Lavendel',
\t\tFAEBD7: 'Antik Weiß',
\t\tFFFFE0: 'Hellgelb',
\t\tF0FFF0: 'Honigtau',
\t\tF0FFFF: 'Azurblau',
\t\tF0F8FF: 'Alice Blau',
\t\tE6E6FA: 'Lavendel',
\t\tFFF: 'Weiß',
\t\t'1ABC9C': 'Kräftiges Cyan',
\t\t'2ECC71': 'Smaragdgrün',
\t\t'3498DB': 'Helles Blau',
\t\t'9B59B6': 'Amethystblau',
\t\t'4E5F70': 'Graublau',
\t\t'F1C40F': 'Lebhaftes Gelb',
\t\t'16A085': 'Dunkelcyan',
\t\t'27AE60': 'Dunkelsmaragdgrün',
\t\t'2980B9': 'Kräftiges Blau',
\t\t'8E44AD': 'Dunkelviolett',
\t\t'2C3E50': 'Entsättigtes blau',
\t\t'F39C12': 'Orange',
\t\t'E67E22': 'Möhrenfarben',
\t\t'E74C3C': 'Blassrot',
\t\t'ECF0F1': 'Glänzendes Silber',
\t\t'95A5A6': 'Helles Graublau',
\t\t'DDD': 'Hellgrau',
\t\t'D35400': 'Kürbisfarben',
\t\t'C0392B': 'Kräftiges Rot',
\t\t'BDC3C7': 'Silber',
\t\t'7F8C8D': 'Graucyan',
\t\t'999': 'Dunkelgrau'
\t},
\tmore: 'Weitere Farben...',
\tpanelTitle: 'Farben',
\ttextColorTitle: 'Textfarbe'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/de.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/de.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/de.js");
    }
}
