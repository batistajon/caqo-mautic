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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-zh-TW.js */
class __TwigTemplate_75dbe51df5ee5aee4354ab5e2266ce62fd055eba73bdfa3fe6bb3ec318c8ebd3 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional[\"zh-TW\"]={closeText:\"關閉\",prevText:\"&#x3C;上月\",nextText:\"下月&#x3E;\",currentText:\"今天\",monthNames:[\"一月\",\"二月\",\"三月\",\"四月\",\"五月\",\"六月\",\"七月\",\"八月\",\"九月\",\"十月\",\"十一月\",\"十二月\"],monthNamesShort:[\"一月\",\"二月\",\"三月\",\"四月\",\"五月\",\"六月\",\"七月\",\"八月\",\"九月\",\"十月\",\"十一月\",\"十二月\"],dayNames:[\"星期日\",\"星期一\",\"星期二\",\"星期三\",\"星期四\",\"星期五\",\"星期六\"],dayNamesShort:[\"周日\",\"周一\",\"周二\",\"周三\",\"周四\",\"周五\",\"周六\"],dayNamesMin:[\"日\",\"一\",\"二\",\"三\",\"四\",\"五\",\"六\"],weekHeader:\"周\",dateFormat:\"yy/mm/dd\",firstDay:1,isRTL:!1,showMonthAfterYear:!0,yearSuffix:\"年\"},a.setDefaults(a.regional[\"zh-TW\"]),a.regional[\"zh-TW\"]});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-zh-TW.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-zh-TW.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-zh-TW.js");
    }
}