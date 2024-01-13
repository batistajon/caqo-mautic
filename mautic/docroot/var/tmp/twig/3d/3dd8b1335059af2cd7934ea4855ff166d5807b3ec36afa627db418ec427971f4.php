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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-bg.js */
class __TwigTemplate_64e8167dffc5c3c1f2f52433045845bdc14ef77aa67f54a03cb2c943a8c1a551 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.bg={closeText:\"затвори\",prevText:\"&#x3C;назад\",nextText:\"напред&#x3E;\",nextBigText:\"&#x3E;&#x3E;\",currentText:\"днес\",monthNames:[\"Януари\",\"Февруари\",\"Март\",\"Април\",\"Май\",\"Юни\",\"Юли\",\"Август\",\"Септември\",\"Октомври\",\"Ноември\",\"Декември\"],monthNamesShort:[\"Яну\",\"Фев\",\"Мар\",\"Апр\",\"Май\",\"Юни\",\"Юли\",\"Авг\",\"Сеп\",\"Окт\",\"Нов\",\"Дек\"],dayNames:[\"Неделя\",\"Понеделник\",\"Вторник\",\"Сряда\",\"Четвъртък\",\"Петък\",\"Събота\"],dayNamesShort:[\"Нед\",\"Пон\",\"Вто\",\"Сря\",\"Чет\",\"Пет\",\"Съб\"],dayNamesMin:[\"Не\",\"По\",\"Вт\",\"Ср\",\"Че\",\"Пе\",\"Съ\"],weekHeader:\"Wk\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.bg),a.regional.bg});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-bg.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-bg.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-bg.js");
    }
}
