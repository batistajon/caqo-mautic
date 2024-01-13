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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ms.js */
class __TwigTemplate_1d0c7b189e224602de2c0fb9d4845ccf73b46119218df52f0b3552a8c9c56455 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.ms={closeText:\"Tutup\",prevText:\"&#x3C;Sebelum\",nextText:\"Selepas&#x3E;\",currentText:\"hari ini\",monthNames:[\"Januari\",\"Februari\",\"Mac\",\"April\",\"Mei\",\"Jun\",\"Julai\",\"Ogos\",\"September\",\"Oktober\",\"November\",\"Disember\"],monthNamesShort:[\"Jan\",\"Feb\",\"Mac\",\"Apr\",\"Mei\",\"Jun\",\"Jul\",\"Ogo\",\"Sep\",\"Okt\",\"Nov\",\"Dis\"],dayNames:[\"Ahad\",\"Isnin\",\"Selasa\",\"Rabu\",\"Khamis\",\"Jumaat\",\"Sabtu\"],dayNamesShort:[\"Aha\",\"Isn\",\"Sel\",\"Rab\",\"kha\",\"Jum\",\"Sab\"],dayNamesMin:[\"Ah\",\"Is\",\"Se\",\"Ra\",\"Kh\",\"Ju\",\"Sa\"],weekHeader:\"Mg\",dateFormat:\"dd/mm/yy\",firstDay:0,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.ms),a.regional.ms});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ms.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ms.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ms.js");
    }
}
