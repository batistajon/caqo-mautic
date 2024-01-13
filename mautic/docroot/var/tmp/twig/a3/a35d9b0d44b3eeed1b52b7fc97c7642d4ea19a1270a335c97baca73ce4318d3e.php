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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sq.js */
class __TwigTemplate_4fb0ebef55d7cd5c84f54d5a9cd1545d890c198d6cce29c4e947b7220c6c8bed extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.sq={closeText:\"mbylle\",prevText:\"&#x3C;mbrapa\",nextText:\"Përpara&#x3E;\",currentText:\"sot\",monthNames:[\"Janar\",\"Shkurt\",\"Mars\",\"Prill\",\"Maj\",\"Qershor\",\"Korrik\",\"Gusht\",\"Shtator\",\"Tetor\",\"Nëntor\",\"Dhjetor\"],monthNamesShort:[\"Jan\",\"Shk\",\"Mar\",\"Pri\",\"Maj\",\"Qer\",\"Kor\",\"Gus\",\"Sht\",\"Tet\",\"Nën\",\"Dhj\"],dayNames:[\"E Diel\",\"E Hënë\",\"E Martë\",\"E Mërkurë\",\"E Enjte\",\"E Premte\",\"E Shtune\"],dayNamesShort:[\"Di\",\"Hë\",\"Ma\",\"Më\",\"En\",\"Pr\",\"Sh\"],dayNamesMin:[\"Di\",\"Hë\",\"Ma\",\"Më\",\"En\",\"Pr\",\"Sh\"],weekHeader:\"Ja\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.sq),a.regional.sq});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sq.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sq.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sq.js");
    }
}
