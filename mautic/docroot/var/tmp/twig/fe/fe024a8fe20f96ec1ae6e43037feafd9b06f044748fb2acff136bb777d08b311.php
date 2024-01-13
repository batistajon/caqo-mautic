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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/cy.js */
class __TwigTemplate_2f2139e253c70c2a68459960ad0da477a98cb09b474712658358476a41fa24a4 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'cy', {
\tauto: 'Awtomatig',
\tbgColorTitle: 'Lliw Cefndir',
\tcolors: {
\t\t'000': 'Du',
\t\t'800000': 'Marwn',
\t\t'8B4513': 'Brown Cyfrwy',
\t\t'2F4F4F': 'Llechen Tywyll',
\t\t'008080': 'Corhwyad',
\t\t'000080': 'Nefi',
\t\t'4B0082': 'Indigo',
\t\t'696969': 'Llwyd Tywyll',
\t\tB22222: 'Bric Tân',
\t\tA52A2A: 'Brown',
\t\tDAA520: 'Rhoden Aur',
\t\t'006400': 'Gwyrdd Tywyll',
\t\t'40E0D0': 'Gwyrddlas',
\t\t'0000CD': 'Glas Canolig',
\t\t'800080': 'Porffor',
\t\t'808080': 'Llwyd',
\t\tF00: 'Coch',
\t\tFF8C00: 'Oren Tywyll',
\t\tFFD700: 'Aur',
\t\t'008000': 'Gwyrdd',
\t\t'0FF': 'Cyan',
\t\t'00F': 'Glas',
\t\tEE82EE: 'Fioled',
\t\tA9A9A9: 'Llwyd Pwl',
\t\tFFA07A: 'Samwn Golau',
\t\tFFA500: 'Oren',
\t\tFFFF00: 'Melyn',
\t\t'00FF00': 'Leim',
\t\tAFEEEE: 'Gwyrddlas Golau',
\t\tADD8E6: 'Glas Golau',
\t\tDDA0DD: 'Eirinen',
\t\tD3D3D3: 'Llwyd Golau',
\t\tFFF0F5: 'Gwrid Lafant',
\t\tFAEBD7: 'Gwyn Hynafol',
\t\tFFFFE0: 'Melyn Golau',
\t\tF0FFF0: 'Melwn Gwyrdd Golau',
\t\tF0FFFF: 'Aswr',
\t\tF0F8FF: 'Glas Alys',
\t\tE6E6FA: 'Lafant',
\t\tFFF: 'Gwyn',
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
\tmore: 'Mwy o Liwiau...',
\tpanelTitle: 'Lliwiau',
\ttextColorTitle: 'Lliw Testun'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/cy.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/cy.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/cy.js");
    }
}
