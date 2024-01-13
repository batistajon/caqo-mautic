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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-bs.js */
class __TwigTemplate_03b8198fafde8061e372447d5c1189b2a20725f40f1ee319e1f68084cab04ceb extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.bs={closeText:\"Zatvori\",prevText:\"&#x3C;\",nextText:\"&#x3E;\",currentText:\"Danas\",monthNames:[\"Januar\",\"Februar\",\"Mart\",\"April\",\"Maj\",\"Juni\",\"Juli\",\"August\",\"Septembar\",\"Oktobar\",\"Novembar\",\"Decembar\"],monthNamesShort:[\"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Maj\",\"Jun\",\"Jul\",\"Aug\",\"Sep\",\"Okt\",\"Nov\",\"Dec\"],dayNames:[\"Nedelja\",\"Ponedeljak\",\"Utorak\",\"Srijeda\",\"Četvrtak\",\"Petak\",\"Subota\"],dayNamesShort:[\"Ned\",\"Pon\",\"Uto\",\"Sri\",\"Čet\",\"Pet\",\"Sub\"],dayNamesMin:[\"Ne\",\"Po\",\"Ut\",\"Sr\",\"Če\",\"Pe\",\"Su\"],weekHeader:\"Wk\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.bs),a.regional.bs});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-bs.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-bs.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-bs.js");
    }
}
