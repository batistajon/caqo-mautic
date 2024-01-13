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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/he.js */
class __TwigTemplate_48a819760fc3483ea6427a2f6a4a14f9756ab155be9c109dccfab4fddb88496b extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'he', {
\tauto: 'אוטומטי',
\tbgColorTitle: 'צבע רקע',
\tcolors: {
\t\t'000': 'שחור',
\t\t'800000': 'סגול כהה',
\t\t'8B4513': 'חום בהיר',
\t\t'2F4F4F': 'אפור צפחה',
\t\t'008080': 'כחול-ירוק',
\t\t'000080': 'כחול-סגול',
\t\t'4B0082': 'אינדיגו',
\t\t'696969': 'אפור מעומעם',
\t\tB22222: 'אדום-חום',
\t\tA52A2A: 'חום',
\t\tDAA520: 'כתום זהב',
\t\t'006400': 'ירוק כהה',
\t\t'40E0D0': 'טורקיז',
\t\t'0000CD': 'כחול בינוני',
\t\t'800080': 'סגול',
\t\t'808080': 'אפור',
\t\tF00: 'אדום',
\t\tFF8C00: 'כתום כהה',
\t\tFFD700: 'זהב',
\t\t'008000': 'ירוק',
\t\t'0FF': 'ציאן',
\t\t'00F': 'כחול',
\t\tEE82EE: 'סגלגל',
\t\tA9A9A9: 'אפור כהה',
\t\tFFA07A: 'כתום-וורוד',
\t\tFFA500: 'כתום',
\t\tFFFF00: 'צהוב',
\t\t'00FF00': 'ליים',
\t\tAFEEEE: 'טורקיז בהיר',
\t\tADD8E6: 'כחול בהיר',
\t\tDDA0DD: 'שזיף',
\t\tD3D3D3: 'אפור בהיר',
\t\tFFF0F5: 'לבנדר מסמיק',
\t\tFAEBD7: 'לבן עתיק',
\t\tFFFFE0: 'צהוב בהיר',
\t\tF0FFF0: 'טל דבש',
\t\tF0FFFF: 'תכלת',
\t\tF0F8FF: 'כחול טיפת מים',
\t\tE6E6FA: 'לבנדר',
\t\tFFF: 'לבן',
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
\tmore: 'צבעים נוספים...',
\tpanelTitle: 'צבעים',
\ttextColorTitle: 'צבע טקסט'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/he.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/he.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/he.js");
    }
}
