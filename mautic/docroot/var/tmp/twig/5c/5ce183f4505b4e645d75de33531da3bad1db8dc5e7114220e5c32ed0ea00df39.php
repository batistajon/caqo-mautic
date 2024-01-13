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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sr.js */
class __TwigTemplate_3f560784c9f3d6549525004e8ced6504fddfa5ee397c297efbcfab364c7253ee extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.sr={closeText:\"Затвори\",prevText:\"&#x3C;\",nextText:\"&#x3E;\",currentText:\"Данас\",monthNames:[\"Јануар\",\"Фебруар\",\"Март\",\"Април\",\"Мај\",\"Јун\",\"Јул\",\"Август\",\"Септембар\",\"Октобар\",\"Новембар\",\"Децембар\"],monthNamesShort:[\"Јан\",\"Феб\",\"Мар\",\"Апр\",\"Мај\",\"Јун\",\"Јул\",\"Авг\",\"Сеп\",\"Окт\",\"Нов\",\"Дец\"],dayNames:[\"Недеља\",\"Понедељак\",\"Уторак\",\"Среда\",\"Четвртак\",\"Петак\",\"Субота\"],dayNamesShort:[\"Нед\",\"Пон\",\"Уто\",\"Сре\",\"Чет\",\"Пет\",\"Суб\"],dayNamesMin:[\"Не\",\"По\",\"Ут\",\"Ср\",\"Че\",\"Пе\",\"Су\"],weekHeader:\"Сед\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.sr),a.regional.sr});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sr.js");
    }
}
