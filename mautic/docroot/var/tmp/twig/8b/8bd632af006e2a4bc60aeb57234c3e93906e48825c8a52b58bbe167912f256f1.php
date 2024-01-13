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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-kk.js */
class __TwigTemplate_a8855336e7df4463b94f446a28a3b631c9c8290206052f223579b749e5e97640 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.kk={closeText:\"Жабу\",prevText:\"&#x3C;Алдыңғы\",nextText:\"Келесі&#x3E;\",currentText:\"Бүгін\",monthNames:[\"Қаңтар\",\"Ақпан\",\"Наурыз\",\"Сәуір\",\"Мамыр\",\"Маусым\",\"Шілде\",\"Тамыз\",\"Қыркүйек\",\"Қазан\",\"Қараша\",\"Желтоқсан\"],monthNamesShort:[\"Қаң\",\"Ақп\",\"Нау\",\"Сәу\",\"Мам\",\"Мау\",\"Шіл\",\"Там\",\"Қыр\",\"Қаз\",\"Қар\",\"Жел\"],dayNames:[\"Жексенбі\",\"Дүйсенбі\",\"Сейсенбі\",\"Сәрсенбі\",\"Бейсенбі\",\"Жұма\",\"Сенбі\"],dayNamesShort:[\"жкс\",\"дсн\",\"ссн\",\"срс\",\"бсн\",\"жма\",\"снб\"],dayNamesMin:[\"Жк\",\"Дс\",\"Сс\",\"Ср\",\"Бс\",\"Жм\",\"Сн\"],weekHeader:\"Не\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.kk),a.regional.kk});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-kk.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-kk.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-kk.js");
    }
}
