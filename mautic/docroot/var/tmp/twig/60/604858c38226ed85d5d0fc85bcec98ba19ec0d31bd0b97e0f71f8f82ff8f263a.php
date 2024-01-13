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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ru.js */
class __TwigTemplate_173446caa4b76bf8a584a90e7b8e0307836c41c148281b418197196c9de3443e extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.ru={closeText:\"Закрыть\",prevText:\"&#x3C;Пред\",nextText:\"След&#x3E;\",currentText:\"Сегодня\",monthNames:[\"Январь\",\"Февраль\",\"Март\",\"Апрель\",\"Май\",\"Июнь\",\"Июль\",\"Август\",\"Сентябрь\",\"Октябрь\",\"Ноябрь\",\"Декабрь\"],monthNamesShort:[\"Янв\",\"Фев\",\"Мар\",\"Апр\",\"Май\",\"Июн\",\"Июл\",\"Авг\",\"Сен\",\"Окт\",\"Ноя\",\"Дек\"],dayNames:[\"воскресенье\",\"понедельник\",\"вторник\",\"среда\",\"четверг\",\"пятница\",\"суббота\"],dayNamesShort:[\"вск\",\"пнд\",\"втр\",\"срд\",\"чтв\",\"птн\",\"сбт\"],dayNamesMin:[\"Вс\",\"Пн\",\"Вт\",\"Ср\",\"Чт\",\"Пт\",\"Сб\"],weekHeader:\"Нед\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.ru),a.regional.ru});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ru.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ru.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ru.js");
    }
}
