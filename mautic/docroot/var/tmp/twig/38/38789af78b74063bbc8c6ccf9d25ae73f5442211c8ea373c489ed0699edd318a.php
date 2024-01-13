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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-eo.js */
class __TwigTemplate_37109f6861d6b06eefd0f777a9f8aa327be9abf8d276d3f7c161066d871fd813 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.eo={closeText:\"Fermi\",prevText:\"&#x3C;Anta\",nextText:\"Sekv&#x3E;\",currentText:\"Nuna\",monthNames:[\"Januaro\",\"Februaro\",\"Marto\",\"Aprilo\",\"Majo\",\"Junio\",\"Julio\",\"Aŭgusto\",\"Septembro\",\"Oktobro\",\"Novembro\",\"Decembro\"],monthNamesShort:[\"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Maj\",\"Jun\",\"Jul\",\"Aŭg\",\"Sep\",\"Okt\",\"Nov\",\"Dec\"],dayNames:[\"Dimanĉo\",\"Lundo\",\"Mardo\",\"Merkredo\",\"Ĵaŭdo\",\"Vendredo\",\"Sabato\"],dayNamesShort:[\"Dim\",\"Lun\",\"Mar\",\"Mer\",\"Ĵaŭ\",\"Ven\",\"Sab\"],dayNamesMin:[\"Di\",\"Lu\",\"Ma\",\"Me\",\"Ĵa\",\"Ve\",\"Sa\"],weekHeader:\"Sb\",dateFormat:\"dd/mm/yy\",firstDay:0,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.eo),a.regional.eo});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-eo.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-eo.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-eo.js");
    }
}
