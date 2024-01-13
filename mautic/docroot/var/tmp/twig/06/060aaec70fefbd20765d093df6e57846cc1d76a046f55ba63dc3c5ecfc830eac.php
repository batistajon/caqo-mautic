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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-nl.js */
class __TwigTemplate_a8be12fe7169e104bc201ab9724e834cd1e671dbfaca9a5c9c3c0b0718cf707c extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.nl={closeText:\"Sluiten\",prevText:\"←\",nextText:\"→\",currentText:\"Vandaag\",monthNames:[\"januari\",\"februari\",\"maart\",\"april\",\"mei\",\"juni\",\"juli\",\"augustus\",\"september\",\"oktober\",\"november\",\"december\"],monthNamesShort:[\"jan\",\"feb\",\"mrt\",\"apr\",\"mei\",\"jun\",\"jul\",\"aug\",\"sep\",\"okt\",\"nov\",\"dec\"],dayNames:[\"zondag\",\"maandag\",\"dinsdag\",\"woensdag\",\"donderdag\",\"vrijdag\",\"zaterdag\"],dayNamesShort:[\"zon\",\"maa\",\"din\",\"woe\",\"don\",\"vri\",\"zat\"],dayNamesMin:[\"zo\",\"ma\",\"di\",\"wo\",\"do\",\"vr\",\"za\"],weekHeader:\"Wk\",dateFormat:\"dd-mm-yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.nl),a.regional.nl});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-nl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-nl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-nl.js");
    }
}
