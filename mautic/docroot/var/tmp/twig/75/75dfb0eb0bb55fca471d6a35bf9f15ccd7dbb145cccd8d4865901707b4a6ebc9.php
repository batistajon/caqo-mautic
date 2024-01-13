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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-lb.js */
class __TwigTemplate_4cfd9f36809fd51e0c6dc9b23db7428aecb98c8fbe3dbf0f182529dadd2edc76 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.lb={closeText:\"Fäerdeg\",prevText:\"Zréck\",nextText:\"Weider\",currentText:\"Haut\",monthNames:[\"Januar\",\"Februar\",\"Mäerz\",\"Abrëll\",\"Mee\",\"Juni\",\"Juli\",\"August\",\"September\",\"Oktober\",\"November\",\"Dezember\"],monthNamesShort:[\"Jan\",\"Feb\",\"Mäe\",\"Abr\",\"Mee\",\"Jun\",\"Jul\",\"Aug\",\"Sep\",\"Okt\",\"Nov\",\"Dez\"],dayNames:[\"Sonndeg\",\"Méindeg\",\"Dënschdeg\",\"Mëttwoch\",\"Donneschdeg\",\"Freideg\",\"Samschdeg\"],dayNamesShort:[\"Son\",\"Méi\",\"Dën\",\"Mët\",\"Don\",\"Fre\",\"Sam\"],dayNamesMin:[\"So\",\"Mé\",\"Dë\",\"Më\",\"Do\",\"Fr\",\"Sa\"],weekHeader:\"W\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.lb),a.regional.lb});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-lb.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-lb.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-lb.js");
    }
}
