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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-is.js */
class __TwigTemplate_585bbba9af36242b1327d098ecf889c3c160330bd5a7066571fa6726094cdb47 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.is={closeText:\"Loka\",prevText:\"&#x3C; Fyrri\",nextText:\"Næsti &#x3E;\",currentText:\"Í dag\",monthNames:[\"Janúar\",\"Febrúar\",\"Mars\",\"Apríl\",\"Maí\",\"Júní\",\"Júlí\",\"Ágúst\",\"September\",\"Október\",\"Nóvember\",\"Desember\"],monthNamesShort:[\"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Maí\",\"Jún\",\"Júl\",\"Ágú\",\"Sep\",\"Okt\",\"Nóv\",\"Des\"],dayNames:[\"Sunnudagur\",\"Mánudagur\",\"Þriðjudagur\",\"Miðvikudagur\",\"Fimmtudagur\",\"Föstudagur\",\"Laugardagur\"],dayNamesShort:[\"Sun\",\"Mán\",\"Þri\",\"Mið\",\"Fim\",\"Fös\",\"Lau\"],dayNamesMin:[\"Su\",\"Má\",\"Þr\",\"Mi\",\"Fi\",\"Fö\",\"La\"],weekHeader:\"Vika\",dateFormat:\"dd.mm.yy\",firstDay:0,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.is),a.regional.is});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-is.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-is.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-is.js");
    }
}
