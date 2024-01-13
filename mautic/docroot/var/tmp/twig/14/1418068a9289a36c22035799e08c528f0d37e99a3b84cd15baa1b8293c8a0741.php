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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-nn.js */
class __TwigTemplate_3fb25cba4c5414f3dce3e5d5aa5a49503c4438aa8bfcd8c9b6519a81c59aa51a extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.nn={closeText:\"Lukk\",prevText:\"&#xAB;Førre\",nextText:\"Neste&#xBB;\",currentText:\"I dag\",monthNames:[\"januar\",\"februar\",\"mars\",\"april\",\"mai\",\"juni\",\"juli\",\"august\",\"september\",\"oktober\",\"november\",\"desember\"],monthNamesShort:[\"jan\",\"feb\",\"mar\",\"apr\",\"mai\",\"jun\",\"jul\",\"aug\",\"sep\",\"okt\",\"nov\",\"des\"],dayNamesShort:[\"sun\",\"mån\",\"tys\",\"ons\",\"tor\",\"fre\",\"lau\"],dayNames:[\"sundag\",\"måndag\",\"tysdag\",\"onsdag\",\"torsdag\",\"fredag\",\"laurdag\"],dayNamesMin:[\"su\",\"må\",\"ty\",\"on\",\"to\",\"fr\",\"la\"],weekHeader:\"Veke\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.nn),a.regional.nn});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-nn.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-nn.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-nn.js");
    }
}
