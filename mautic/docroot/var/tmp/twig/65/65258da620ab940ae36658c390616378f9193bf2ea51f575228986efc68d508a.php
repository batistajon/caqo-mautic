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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-fi.js */
class __TwigTemplate_029fecec6b22fac082c652d245aabf413f5c9bf4384f35a845cae553a36045c0 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.fi={closeText:\"Sulje\",prevText:\"&#xAB;Edellinen\",nextText:\"Seuraava&#xBB;\",currentText:\"Tänään\",monthNames:[\"Tammikuu\",\"Helmikuu\",\"Maaliskuu\",\"Huhtikuu\",\"Toukokuu\",\"Kesäkuu\",\"Heinäkuu\",\"Elokuu\",\"Syyskuu\",\"Lokakuu\",\"Marraskuu\",\"Joulukuu\"],monthNamesShort:[\"Tammi\",\"Helmi\",\"Maalis\",\"Huhti\",\"Touko\",\"Kesä\",\"Heinä\",\"Elo\",\"Syys\",\"Loka\",\"Marras\",\"Joulu\"],dayNamesShort:[\"Su\",\"Ma\",\"Ti\",\"Ke\",\"To\",\"Pe\",\"La\"],dayNames:[\"Sunnuntai\",\"Maanantai\",\"Tiistai\",\"Keskiviikko\",\"Torstai\",\"Perjantai\",\"Lauantai\"],dayNamesMin:[\"Su\",\"Ma\",\"Ti\",\"Ke\",\"To\",\"Pe\",\"La\"],weekHeader:\"Vk\",dateFormat:\"d.m.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.fi),a.regional.fi});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-fi.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-fi.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-fi.js");
    }
}
