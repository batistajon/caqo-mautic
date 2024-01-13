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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fa.js */
class __TwigTemplate_941980cb8ba8adda98e0d7e6eef8697b8c5c570e329667380e96c3ac5cb3876a extends Template
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
CKEDITOR.plugins.setLang( 'colorbutton', 'fa', {
\tauto: 'خودکار',
\tbgColorTitle: 'رنگ پس​زمینه',
\tcolors: {
\t\t'000': 'سیاه',
\t\t'800000': 'خرمایی',
\t\t'8B4513': 'قهوه​ای شکلاتی',
\t\t'2F4F4F': 'ارغوانی مایل به خاکستری',
\t\t'008080': 'آبی مایل به خاکستری',
\t\t'000080': 'آبی سیر',
\t\t'4B0082': 'نیلی',
\t\t'696969': 'خاکستری تیره',
\t\tB22222: 'آتش آجری',
\t\tA52A2A: 'قهوه​ای',
\t\tDAA520: 'میله​ی طلایی',
\t\t'006400': 'سبز تیره',
\t\t'40E0D0': 'فیروزه​ای',
\t\t'0000CD': 'آبی روشن',
\t\t'800080': 'ارغوانی',
\t\t'808080': 'خاکستری',
\t\tF00: 'قرمز',
\t\tFF8C00: 'نارنجی پررنگ',
\t\tFFD700: 'طلایی',
\t\t'008000': 'سبز',
\t\t'0FF': 'آبی مایل به سبز',
\t\t'00F': 'آبی',
\t\tEE82EE: 'بنفش',
\t\tA9A9A9: 'خاکستری مات',
\t\tFFA07A: 'صورتی کدر روشن',
\t\tFFA500: 'نارنجی',
\t\tFFFF00: 'زرد',
\t\t'00FF00': 'فسفری',
\t\tAFEEEE: 'فیروزه​ای رنگ پریده',
\t\tADD8E6: 'آبی کمرنگ',
\t\tDDA0DD: 'آلویی',
\t\tD3D3D3: 'خاکستری روشن',
\t\tFFF0F5: 'بنفش کمرنگ',
\t\tFAEBD7: 'عتیقه سفید',
\t\tFFFFE0: 'زرد روشن',
\t\tF0FFF0: 'عسلی',
\t\tF0FFFF: 'لاجوردی',
\t\tF0F8FF: 'آبی براق',
\t\tE6E6FA: 'بنفش کمرنگ',
\t\tFFF: 'سفید',
\t\t'1ABC9C': 'فیروزه ای پررنگ',
\t\t'2ECC71': 'سبز زمردی',
\t\t'3498DB': 'آبی روشن',
\t\t'9B59B6': 'ارغوانی',
\t\t'4E5F70': 'آبی خاکستری',
\t\t'F1C40F': 'زرد تازه',
\t\t'16A085': 'فیروزه ای تیره',
\t\t'27AE60': 'سبز زمردی تیره',
\t\t'2980B9': 'آبی پر رنگ',
\t\t'8E44AD': 'بنفش تیره',
\t\t'2C3E50': 'آبی اشباع شده',
\t\t'F39C12': 'نارنجی',
\t\t'E67E22': 'هویجی',
\t\t'E74C3C': 'قرمز روشن',
\t\t'ECF0F1': 'نقره ای روشن',
\t\t'95A5A6': 'آبی خاکستری روشن',
\t\t'DDD': 'خاکستری روشن',
\t\t'D35400': 'کدو حلوایی',
\t\t'C0392B': 'قرمز پررنگ',
\t\t'BDC3C7': 'نقره ای',
\t\t'7F8C8D': 'فیروزه ای خاکستری',
\t\t'999': 'خاکستری تیره'
\t},
\tmore: 'رنگ​های بیشتر...',
\tpanelTitle: 'رنگها',
\ttextColorTitle: 'رنگ متن'
} );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fa.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fa.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/colorbutton/lang/fa.js");
    }
}
