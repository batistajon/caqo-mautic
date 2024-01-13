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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-lt.js */
class __TwigTemplate_4d0415c4372d6efa2c4bfbaf47147d2d22adfe67b58e2a046e98e0ca09dee71f extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.lt={closeText:\"Uždaryti\",prevText:\"&#x3C;Atgal\",nextText:\"Pirmyn&#x3E;\",currentText:\"Šiandien\",monthNames:[\"Sausis\",\"Vasaris\",\"Kovas\",\"Balandis\",\"Gegužė\",\"Birželis\",\"Liepa\",\"Rugpjūtis\",\"Rugsėjis\",\"Spalis\",\"Lapkritis\",\"Gruodis\"],monthNamesShort:[\"Sau\",\"Vas\",\"Kov\",\"Bal\",\"Geg\",\"Bir\",\"Lie\",\"Rugp\",\"Rugs\",\"Spa\",\"Lap\",\"Gru\"],dayNames:[\"sekmadienis\",\"pirmadienis\",\"antradienis\",\"trečiadienis\",\"ketvirtadienis\",\"penktadienis\",\"šeštadienis\"],dayNamesShort:[\"sek\",\"pir\",\"ant\",\"tre\",\"ket\",\"pen\",\"šeš\"],dayNamesMin:[\"Se\",\"Pr\",\"An\",\"Tr\",\"Ke\",\"Pe\",\"Še\"],weekHeader:\"SAV\",dateFormat:\"yy-mm-dd\",firstDay:1,isRTL:!1,showMonthAfterYear:!0,yearSuffix:\"\"},a.setDefaults(a.regional.lt),a.regional.lt});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-lt.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-lt.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-lt.js");
    }
}
