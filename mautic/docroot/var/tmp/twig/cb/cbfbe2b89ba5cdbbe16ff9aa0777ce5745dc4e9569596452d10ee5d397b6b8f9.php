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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-be.js */
class __TwigTemplate_da3b4574460ed094a7ed393efd3cffd2de794235d3a5be497cfd8a3b833b1dcf extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.be={closeText:\"Зачыніць\",prevText:\"&larr;Папяр.\",nextText:\"Наст.&rarr;\",currentText:\"Сёньня\",monthNames:[\"Студзень\",\"Люты\",\"Сакавік\",\"Красавік\",\"Травень\",\"Чэрвень\",\"Ліпень\",\"Жнівень\",\"Верасень\",\"Кастрычнік\",\"Лістапад\",\"Сьнежань\"],monthNamesShort:[\"Сту\",\"Лют\",\"Сак\",\"Кра\",\"Тра\",\"Чэр\",\"Ліп\",\"Жні\",\"Вер\",\"Кас\",\"Ліс\",\"Сьн\"],dayNames:[\"нядзеля\",\"панядзелак\",\"аўторак\",\"серада\",\"чацьвер\",\"пятніца\",\"субота\"],dayNamesShort:[\"ндз\",\"пнд\",\"аўт\",\"срд\",\"чцв\",\"птн\",\"сбт\"],dayNamesMin:[\"Нд\",\"Пн\",\"Аў\",\"Ср\",\"Чц\",\"Пт\",\"Сб\"],weekHeader:\"Тд\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.be),a.regional.be});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-be.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-be.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-be.js");
    }
}
