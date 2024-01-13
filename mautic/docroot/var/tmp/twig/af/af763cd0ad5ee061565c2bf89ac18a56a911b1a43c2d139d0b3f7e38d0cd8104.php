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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-eu.js */
class __TwigTemplate_a76b839eab8cabce5b26d719a8f5f6f77359ef0463b04ae62f79068e3cb750a8 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.eu={closeText:\"Egina\",prevText:\"&#x3C;Aur\",nextText:\"Hur&#x3E;\",currentText:\"Gaur\",monthNames:[\"urtarrila\",\"otsaila\",\"martxoa\",\"apirila\",\"maiatza\",\"ekaina\",\"uztaila\",\"abuztua\",\"iraila\",\"urria\",\"azaroa\",\"abendua\"],monthNamesShort:[\"urt.\",\"ots.\",\"mar.\",\"api.\",\"mai.\",\"eka.\",\"uzt.\",\"abu.\",\"ira.\",\"urr.\",\"aza.\",\"abe.\"],dayNames:[\"igandea\",\"astelehena\",\"asteartea\",\"asteazkena\",\"osteguna\",\"ostirala\",\"larunbata\"],dayNamesShort:[\"ig.\",\"al.\",\"ar.\",\"az.\",\"og.\",\"ol.\",\"lr.\"],dayNamesMin:[\"ig\",\"al\",\"ar\",\"az\",\"og\",\"ol\",\"lr\"],weekHeader:\"As\",dateFormat:\"yy-mm-dd\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.eu),a.regional.eu});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-eu.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-eu.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-eu.js");
    }
}
