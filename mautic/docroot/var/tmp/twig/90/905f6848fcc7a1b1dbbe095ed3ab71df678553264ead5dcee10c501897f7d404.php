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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ca.js */
class __TwigTemplate_90d3fd2a973c7865a945e094367ce0fb3eef2a6e33e001cad029d3edf8ed1ee8 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.ca={closeText:\"Tanca\",prevText:\"Anterior\",nextText:\"Següent\",currentText:\"Avui\",monthNames:[\"gener\",\"febrer\",\"març\",\"abril\",\"maig\",\"juny\",\"juliol\",\"agost\",\"setembre\",\"octubre\",\"novembre\",\"desembre\"],monthNamesShort:[\"gen\",\"feb\",\"març\",\"abr\",\"maig\",\"juny\",\"jul\",\"ag\",\"set\",\"oct\",\"nov\",\"des\"],dayNames:[\"diumenge\",\"dilluns\",\"dimarts\",\"dimecres\",\"dijous\",\"divendres\",\"dissabte\"],dayNamesShort:[\"dg\",\"dl\",\"dt\",\"dc\",\"dj\",\"dv\",\"ds\"],dayNamesMin:[\"dg\",\"dl\",\"dt\",\"dc\",\"dj\",\"dv\",\"ds\"],weekHeader:\"Set\",dateFormat:\"dd/mm/yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.ca),a.regional.ca});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ca.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ca.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ca.js");
    }
}
