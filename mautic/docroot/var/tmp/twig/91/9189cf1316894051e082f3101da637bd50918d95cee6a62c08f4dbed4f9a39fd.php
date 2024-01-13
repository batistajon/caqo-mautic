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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-uk.js */
class __TwigTemplate_494c7080e9cbdebe7750523a6e677c5305b72a07b61e256aa8d343b05faea80d extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.uk={closeText:\"Закрити\",prevText:\"&#x3C;\",nextText:\"&#x3E;\",currentText:\"Сьогодні\",monthNames:[\"Січень\",\"Лютий\",\"Березень\",\"Квітень\",\"Травень\",\"Червень\",\"Липень\",\"Серпень\",\"Вересень\",\"Жовтень\",\"Листопад\",\"Грудень\"],monthNamesShort:[\"Січ\",\"Лют\",\"Бер\",\"Кві\",\"Тра\",\"Чер\",\"Лип\",\"Сер\",\"Вер\",\"Жов\",\"Лис\",\"Гру\"],dayNames:[\"неділя\",\"понеділок\",\"вівторок\",\"середа\",\"четвер\",\"п’ятниця\",\"субота\"],dayNamesShort:[\"нед\",\"пнд\",\"вів\",\"срд\",\"чтв\",\"птн\",\"сбт\"],dayNamesMin:[\"Нд\",\"Пн\",\"Вт\",\"Ср\",\"Чт\",\"Пт\",\"Сб\"],weekHeader:\"Тиж\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.uk),a.regional.uk});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-uk.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-uk.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-uk.js");
    }
}
