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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-gl.js */
class __TwigTemplate_343c80b69a350b82050924f8fb65224a0be87f292583612d019e3e01f2fc0102 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.gl={closeText:\"Pechar\",prevText:\"&#x3C;Ant\",nextText:\"Seg&#x3E;\",currentText:\"Hoxe\",monthNames:[\"Xaneiro\",\"Febreiro\",\"Marzo\",\"Abril\",\"Maio\",\"Xuño\",\"Xullo\",\"Agosto\",\"Setembro\",\"Outubro\",\"Novembro\",\"Decembro\"],monthNamesShort:[\"Xan\",\"Feb\",\"Mar\",\"Abr\",\"Mai\",\"Xuñ\",\"Xul\",\"Ago\",\"Set\",\"Out\",\"Nov\",\"Dec\"],dayNames:[\"Domingo\",\"Luns\",\"Martes\",\"Mércores\",\"Xoves\",\"Venres\",\"Sábado\"],dayNamesShort:[\"Dom\",\"Lun\",\"Mar\",\"Mér\",\"Xov\",\"Ven\",\"Sáb\"],dayNamesMin:[\"Do\",\"Lu\",\"Ma\",\"Mé\",\"Xo\",\"Ve\",\"Sá\"],weekHeader:\"Sm\",dateFormat:\"dd/mm/yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.gl),a.regional.gl});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-gl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-gl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-gl.js");
    }
}
