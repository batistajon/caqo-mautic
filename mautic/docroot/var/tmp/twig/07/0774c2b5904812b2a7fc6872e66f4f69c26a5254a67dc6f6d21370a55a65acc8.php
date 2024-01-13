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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-af.js */
class __TwigTemplate_93acfeb5272845f9ba34c9e2f60199d98f65a91aa95343d6b68896ac4aa30827 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.af={closeText:\"Selekteer\",prevText:\"Vorige\",nextText:\"Volgende\",currentText:\"Vandag\",monthNames:[\"Januarie\",\"Februarie\",\"Maart\",\"April\",\"Mei\",\"Junie\",\"Julie\",\"Augustus\",\"September\",\"Oktober\",\"November\",\"Desember\"],monthNamesShort:[\"Jan\",\"Feb\",\"Mrt\",\"Apr\",\"Mei\",\"Jun\",\"Jul\",\"Aug\",\"Sep\",\"Okt\",\"Nov\",\"Des\"],dayNames:[\"Sondag\",\"Maandag\",\"Dinsdag\",\"Woensdag\",\"Donderdag\",\"Vrydag\",\"Saterdag\"],dayNamesShort:[\"Son\",\"Maa\",\"Din\",\"Woe\",\"Don\",\"Vry\",\"Sat\"],dayNamesMin:[\"So\",\"Ma\",\"Di\",\"Wo\",\"Do\",\"Vr\",\"Sa\"],weekHeader:\"Wk\",dateFormat:\"dd/mm/yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.af),a.regional.af});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-af.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-af.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-af.js");
    }
}
