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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ky.js */
class __TwigTemplate_98d74fb9ebccca888fc36f05e7c25a6ccdc03d2c62d31f908ac70a31045b77c5 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.ky={closeText:\"Жабуу\",prevText:\"&#x3c;Мур\",nextText:\"Кий&#x3e;\",currentText:\"Бүгүн\",monthNames:[\"Январь\",\"Февраль\",\"Март\",\"Апрель\",\"Май\",\"Июнь\",\"Июль\",\"Август\",\"Сентябрь\",\"Октябрь\",\"Ноябрь\",\"Декабрь\"],monthNamesShort:[\"Янв\",\"Фев\",\"Мар\",\"Апр\",\"Май\",\"Июн\",\"Июл\",\"Авг\",\"Сен\",\"Окт\",\"Ноя\",\"Дек\"],dayNames:[\"жекшемби\",\"дүйшөмбү\",\"шейшемби\",\"шаршемби\",\"бейшемби\",\"жума\",\"ишемби\"],dayNamesShort:[\"жек\",\"дүй\",\"шей\",\"шар\",\"бей\",\"жум\",\"ише\"],dayNamesMin:[\"Жк\",\"Дш\",\"Шш\",\"Шр\",\"Бш\",\"Жм\",\"Иш\"],weekHeader:\"Жум\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.ky),a.regional.ky});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ky.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ky.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ky.js");
    }
}
