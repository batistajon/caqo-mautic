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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/el.js */
class __TwigTemplate_8ea07237cf8634887cca78ecfdc806c9a4b5a46d620b677ed9d57174fd340d15 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'el', {
\tauto: 'Αυτόματα',
\tbgColorTitle: 'Χρώμα Φόντου',
\tcolors: {
\t\t'000': 'Μαύρο',
\t\t'800000': 'Καστανέρυθρο',
\t\t'8B4513': 'Saddle Brown',
\t\t'2F4F4F': 'Dark Slate Gray',
\t\t'008080': 'Βαθυκύανο',
\t\t'000080': 'Μπλε μαρέν',
\t\t'4B0082': 'Ινδικό',
\t\t'696969': 'Σκούρο Γκρι',
\t\tB22222: 'Ανοικτό Κόκκινο',
\t\tA52A2A: 'Καφέ',
\t\tDAA520: 'Golden Rod',
\t\t'006400': 'Σκούρο Πράσινο',
\t\t'40E0D0': 'Τυρκουάζ',
\t\t'0000CD': 'Medium Blue',
\t\t'800080': 'Μοβ',
\t\t'808080': 'Γκρι',
\t\tF00: 'Κόκκινο',
\t\tFF8C00: 'Σκούρο Πορτοκαλί',
\t\tFFD700: 'Χρυσαφί',
\t\t'008000': 'Πράσινο',
\t\t'0FF': 'Κυανό',
\t\t'00F': 'Μπλε',
\t\tEE82EE: 'Μενεξεδί',
\t\tA9A9A9: 'Ποντικί',
\t\tFFA07A: 'Ανοικτό Σομόν',
\t\tFFA500: 'Πορτοκαλί',
\t\tFFFF00: 'Κίτρινο',
\t\t'00FF00': 'Μοσχολέμονο',
\t\tAFEEEE: 'Pale Turquoise',
\t\tADD8E6: 'Γαλάζιο',
\t\tDDA0DD: 'Δαμασκηνί',
\t\tD3D3D3: 'Ανοικτό Γκρι',
\t\tFFF0F5: 'Lavender Blush',
\t\tFAEBD7: 'Antique White',
\t\tFFFFE0: 'Ανοικτό Κίτρινο',
\t\tF0FFF0: 'Honeydew',
\t\tF0FFFF: 'Γαλανό',
\t\tF0F8FF: 'Alice Blue',
\t\tE6E6FA: 'Ελαφρός Ιώδες',
\t\tFFF: 'Λευκό',
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
\t\t'F39C12': 'Πορτοκαλί',
\t\t'E67E22': 'Καροτί',
\t\t'E74C3C': 'Pale Red', // MISSING
\t\t'ECF0F1': 'Bright Silver', // MISSING
\t\t'95A5A6': 'Light Grayish Cyan', // MISSING
\t\t'DDD': 'Light Gray', // MISSING
\t\t'D35400': 'Pumpkin', // MISSING
\t\t'C0392B': 'Strong Red', // MISSING
\t\t'BDC3C7': 'Αργυρό',
\t\t'7F8C8D': 'Grayish Cyan', // MISSING
\t\t'999': 'Dark Gray' // MISSING
\t},
\tmore: 'Περισσότερα Χρώματα…',
\tpanelTitle: 'Χρώματα',
\ttextColorTitle: 'Χρώμα Κειμένου'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/el.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/el.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/el.js");
    }
}
