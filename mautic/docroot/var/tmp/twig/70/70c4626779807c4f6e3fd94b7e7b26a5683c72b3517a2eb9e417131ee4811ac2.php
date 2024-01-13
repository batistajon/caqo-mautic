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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ro.js */
class __TwigTemplate_f84e99a05d298da59bc1bb39bde7a4c94955deb70e0784244d88608823a0ce4a extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.ro={closeText:\"Închide\",prevText:\"&#xAB; Luna precedentă\",nextText:\"Luna următoare &#xBB;\",currentText:\"Azi\",monthNames:[\"Ianuarie\",\"Februarie\",\"Martie\",\"Aprilie\",\"Mai\",\"Iunie\",\"Iulie\",\"August\",\"Septembrie\",\"Octombrie\",\"Noiembrie\",\"Decembrie\"],monthNamesShort:[\"Ian\",\"Feb\",\"Mar\",\"Apr\",\"Mai\",\"Iun\",\"Iul\",\"Aug\",\"Sep\",\"Oct\",\"Nov\",\"Dec\"],dayNames:[\"Duminică\",\"Luni\",\"Marţi\",\"Miercuri\",\"Joi\",\"Vineri\",\"Sâmbătă\"],dayNamesShort:[\"Dum\",\"Lun\",\"Mar\",\"Mie\",\"Joi\",\"Vin\",\"Sâm\"],dayNamesMin:[\"Du\",\"Lu\",\"Ma\",\"Mi\",\"Jo\",\"Vi\",\"Sâ\"],weekHeader:\"Săpt\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.ro),a.regional.ro});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ro.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ro.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ro.js");
    }
}
