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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-no.js */
class __TwigTemplate_7efa6458b6d069903cda4eb3fa963bba302d42e2786dc88a852937e3cf6138c1 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.no={closeText:\"Lukk\",prevText:\"&#xAB;Forrige\",nextText:\"Neste&#xBB;\",currentText:\"I dag\",monthNames:[\"januar\",\"februar\",\"mars\",\"april\",\"mai\",\"juni\",\"juli\",\"august\",\"september\",\"oktober\",\"november\",\"desember\"],monthNamesShort:[\"jan\",\"feb\",\"mar\",\"apr\",\"mai\",\"jun\",\"jul\",\"aug\",\"sep\",\"okt\",\"nov\",\"des\"],dayNamesShort:[\"søn\",\"man\",\"tir\",\"ons\",\"tor\",\"fre\",\"lør\"],dayNames:[\"søndag\",\"mandag\",\"tirsdag\",\"onsdag\",\"torsdag\",\"fredag\",\"lørdag\"],dayNamesMin:[\"sø\",\"ma\",\"ti\",\"on\",\"to\",\"fr\",\"lø\"],weekHeader:\"Uke\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.no),a.regional.no});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-no.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-no.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-no.js");
    }
}
