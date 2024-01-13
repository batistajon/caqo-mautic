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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-cs.js */
class __TwigTemplate_42acbc83c865473d2ad24170a9386e4f5277cbad7d542427f0c84b8ce58ef4c8 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.cs={closeText:\"Zavřít\",prevText:\"&#x3C;Dříve\",nextText:\"Později&#x3E;\",currentText:\"Nyní\",monthNames:[\"leden\",\"únor\",\"březen\",\"duben\",\"květen\",\"červen\",\"červenec\",\"srpen\",\"září\",\"říjen\",\"listopad\",\"prosinec\"],monthNamesShort:[\"led\",\"úno\",\"bře\",\"dub\",\"kvě\",\"čer\",\"čvc\",\"srp\",\"zář\",\"říj\",\"lis\",\"pro\"],dayNames:[\"neděle\",\"pondělí\",\"úterý\",\"středa\",\"čtvrtek\",\"pátek\",\"sobota\"],dayNamesShort:[\"ne\",\"po\",\"út\",\"st\",\"čt\",\"pá\",\"so\"],dayNamesMin:[\"ne\",\"po\",\"út\",\"st\",\"čt\",\"pá\",\"so\"],weekHeader:\"Týd\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.cs),a.regional.cs});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-cs.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-cs.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-cs.js");
    }
}
