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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ar.js */
class __TwigTemplate_8db6d78c206714490ee774d4b332a0ea28a6777ec55f3e01c5d5827f9607e2f6 extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'ar', {
\tauto: 'تلقائي',
\tbgColorTitle: 'لون الخلفية',
\tcolors: {
\t\t'000': 'أسود',
\t\t'800000': 'كستنائي',
\t\t'8B4513': 'بني فاتح',
\t\t'2F4F4F': 'رمادي أردوازي غامق',
\t\t'008080': 'أزرق مخضر',
\t\t'000080': 'أزرق داكن',
\t\t'4B0082': 'كحلي',
\t\t'696969': 'رمادي داكن',
\t\tB22222: 'طوبي',
\t\tA52A2A: 'بني',
\t\tDAA520: 'ذهبي داكن',
\t\t'006400': 'أخضر داكن',
\t\t'40E0D0': 'فيروزي',
\t\t'0000CD': 'أزرق متوسط',
\t\t'800080': 'بنفسجي غامق',
\t\t'808080': 'رمادي',
\t\tF00: 'أحمر',
\t\tFF8C00: 'برتقالي داكن',
\t\tFFD700: 'ذهبي',
\t\t'008000': 'أخضر',
\t\t'0FF': 'تركواز',
\t\t'00F': 'أزرق',
\t\tEE82EE: 'بنفسجي',
\t\tA9A9A9: 'رمادي شاحب',
\t\tFFA07A: 'برتقالي وردي',
\t\tFFA500: 'برتقالي',
\t\tFFFF00: 'أصفر',
\t\t'00FF00': 'ليموني',
\t\tAFEEEE: 'فيروزي شاحب',
\t\tADD8E6: 'أزرق فاتح',
\t\tDDA0DD: 'بنفسجي فاتح',
\t\tD3D3D3: 'رمادي فاتح',
\t\tFFF0F5: 'وردي فاتح',
\t\tFAEBD7: 'أبيض عتيق',
\t\tFFFFE0: 'أصفر فاتح',
\t\tF0FFF0: 'أبيض مائل للأخضر',
\t\tF0FFFF: 'سماوي',
\t\tF0F8FF: 'لبني',
\t\tE6E6FA: 'أرجواني',
\t\tFFF: 'أبيض',
\t\t'1ABC9C': 'Strong Cyan', // MISSING
\t\t'2ECC71': 'Emerald', // MISSING
\t\t'3498DB': 'Bright Blue', // MISSING
\t\t'9B59B6': 'Amethyst', // MISSING
\t\t'4E5F70': 'Grayish Blue', // MISSING
\t\t'F1C40F': 'Vivid Yellow', // MISSING
\t\t'16A085': 'Dark Cyan', // MISSING
\t\t'27AE60': 'Dark Emerald', // MISSING
\t\t'2980B9': 'Strong Blue', // MISSING
\t\t'8E44AD': 'بنفسجي غامق',
\t\t'2C3E50': 'Desaturated Blue', // MISSING
\t\t'F39C12': 'برتقالي',
\t\t'E67E22': 'Carrot', // MISSING
\t\t'E74C3C': 'Pale Red', // MISSING
\t\t'ECF0F1': 'Bright Silver', // MISSING
\t\t'95A5A6': 'Light Grayish Cyan', // MISSING
\t\t'DDD': 'رمادي فاتح',
\t\t'D35400': 'Pumpkin', // MISSING
\t\t'C0392B': 'Strong Red', // MISSING
\t\t'BDC3C7': 'فضي',
\t\t'7F8C8D': 'Grayish Cyan', // MISSING
\t\t'999': 'رمادي غامق'
\t},
\tmore: 'ألوان إضافية...',
\tpanelTitle: 'Colors',
\ttextColorTitle: 'لون النص'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ar.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ar.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/ar.js");
    }
}
