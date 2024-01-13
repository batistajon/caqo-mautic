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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-fa.js */
class __TwigTemplate_9dfd0a2fe054547b102f6000f647e2d194fb17af413d859bef6d72478d086ca2 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.fa={closeText:\"بستن\",prevText:\"&#x3C;قبلی\",nextText:\"بعدی&#x3E;\",currentText:\"امروز\",monthNames:[\"ژانویه\",\"فوریه\",\"مارس\",\"آوریل\",\"مه\",\"ژوئن\",\"ژوئیه\",\"اوت\",\"سپتامبر\",\"اکتبر\",\"نوامبر\",\"دسامبر\"],monthNamesShort:[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"],dayNames:[\"يکشنبه\",\"دوشنبه\",\"سه‌شنبه\",\"چهارشنبه\",\"پنجشنبه\",\"جمعه\",\"شنبه\"],dayNamesShort:[\"ی\",\"د\",\"س\",\"چ\",\"پ\",\"ج\",\"ش\"],dayNamesMin:[\"ی\",\"د\",\"س\",\"چ\",\"پ\",\"ج\",\"ش\"],weekHeader:\"هف\",dateFormat:\"yy/mm/dd\",firstDay:6,isRTL:!0,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.fa),a.regional.fa});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-fa.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-fa.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-fa.js");
    }
}
