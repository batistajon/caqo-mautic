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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-mk.js */
class __TwigTemplate_194b7fc8f2b9bd4bc910d075ba018ac9dffa4e4b8107f939d714314bdb446c72 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.mk={closeText:\"Затвори\",prevText:\"&#x3C;\",nextText:\"&#x3E;\",currentText:\"Денес\",monthNames:[\"Јануари\",\"Февруари\",\"Март\",\"Април\",\"Мај\",\"Јуни\",\"Јули\",\"Август\",\"Септември\",\"Октомври\",\"Ноември\",\"Декември\"],monthNamesShort:[\"Јан\",\"Фев\",\"Мар\",\"Апр\",\"Мај\",\"Јун\",\"Јул\",\"Авг\",\"Сеп\",\"Окт\",\"Ное\",\"Дек\"],dayNames:[\"Недела\",\"Понеделник\",\"Вторник\",\"Среда\",\"Четврток\",\"Петок\",\"Сабота\"],dayNamesShort:[\"Нед\",\"Пон\",\"Вто\",\"Сре\",\"Чет\",\"Пет\",\"Саб\"],dayNamesMin:[\"Не\",\"По\",\"Вт\",\"Ср\",\"Че\",\"Пе\",\"Са\"],weekHeader:\"Сед\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.mk),a.regional.mk});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-mk.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-mk.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-mk.js");
    }
}
