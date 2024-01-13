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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-tj.js */
class __TwigTemplate_4767775f004189d4569b729edfb80518eb2da766ae83ba691d341f9a00a2c7cd extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.tj={closeText:\"Идома\",prevText:\"&#x3c;Қафо\",nextText:\"Пеш&#x3e;\",currentText:\"Имрӯз\",monthNames:[\"Январ\",\"Феврал\",\"Март\",\"Апрел\",\"Май\",\"Июн\",\"Июл\",\"Август\",\"Сентябр\",\"Октябр\",\"Ноябр\",\"Декабр\"],monthNamesShort:[\"Янв\",\"Фев\",\"Мар\",\"Апр\",\"Май\",\"Июн\",\"Июл\",\"Авг\",\"Сен\",\"Окт\",\"Ноя\",\"Дек\"],dayNames:[\"якшанбе\",\"душанбе\",\"сешанбе\",\"чоршанбе\",\"панҷшанбе\",\"ҷумъа\",\"шанбе\"],dayNamesShort:[\"якш\",\"душ\",\"сеш\",\"чор\",\"пан\",\"ҷум\",\"шан\"],dayNamesMin:[\"Як\",\"Дш\",\"Сш\",\"Чш\",\"Пш\",\"Ҷм\",\"Шн\"],weekHeader:\"Хф\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.tj),a.regional.tj});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-tj.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-tj.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-tj.js");
    }
}
