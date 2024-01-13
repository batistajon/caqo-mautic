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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-pl.js */
class __TwigTemplate_2e117644ef474ad4adedc347e749cca2fe03fa60a89c1d1964180bf37f408bab extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.pl={closeText:\"Zamknij\",prevText:\"&#x3C;Poprzedni\",nextText:\"Następny&#x3E;\",currentText:\"Dziś\",monthNames:[\"Styczeń\",\"Luty\",\"Marzec\",\"Kwiecień\",\"Maj\",\"Czerwiec\",\"Lipiec\",\"Sierpień\",\"Wrzesień\",\"Październik\",\"Listopad\",\"Grudzień\"],monthNamesShort:[\"Sty\",\"Lu\",\"Mar\",\"Kw\",\"Maj\",\"Cze\",\"Lip\",\"Sie\",\"Wrz\",\"Pa\",\"Lis\",\"Gru\"],dayNames:[\"Niedziela\",\"Poniedziałek\",\"Wtorek\",\"Środa\",\"Czwartek\",\"Piątek\",\"Sobota\"],dayNamesShort:[\"Nie\",\"Pn\",\"Wt\",\"Śr\",\"Czw\",\"Pt\",\"So\"],dayNamesMin:[\"N\",\"Pn\",\"Wt\",\"Śr\",\"Cz\",\"Pt\",\"So\"],weekHeader:\"Tydz\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.pl),a.regional.pl});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-pl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-pl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-pl.js");
    }
}
