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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ar.js */
class __TwigTemplate_d6fbeb7b4d7fb0e5e33babd79a04f27c63e32f667c44a430f849df11aec2f8f1 extends Template
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
        echo "/*! jQuery UI - v1.12.1 - 2016-09-15
* http://jqueryui.com
* Copyright jQuery Foundation and other contributors; Licensed  */
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.ar={closeText:\"إغلاق\",prevText:\"&#x3C;السابق\",nextText:\"التالي&#x3E;\",currentText:\"اليوم\",monthNames:[\"يناير\",\"فبراير\",\"مارس\",\"أبريل\",\"مايو\",\"يونيو\",\"يوليو\",\"أغسطس\",\"سبتمبر\",\"أكتوبر\",\"نوفمبر\",\"ديسمبر\"],monthNamesShort:[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"],dayNames:[\"الأحد\",\"الاثنين\",\"الثلاثاء\",\"الأربعاء\",\"الخميس\",\"الجمعة\",\"السبت\"],dayNamesShort:[\"أحد\",\"اثنين\",\"ثلاثاء\",\"أربعاء\",\"خميس\",\"جمعة\",\"سبت\"],dayNamesMin:[\"ح\",\"ن\",\"ث\",\"ر\",\"خ\",\"ج\",\"س\"],weekHeader:\"أسبوع\",dateFormat:\"dd/mm/yy\",firstDay:0,isRTL:!0,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.ar),a.regional.ar});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ar.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ar.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ar.js");
    }
}
