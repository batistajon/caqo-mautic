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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-rm.js */
class __TwigTemplate_6af161240efa0c6f3ca02fe3f03c2d2d3c615450c7e2b06b40777782da12dc2d extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.rm={closeText:\"Serrar\",prevText:\"&#x3C;Suandant\",nextText:\"Precedent&#x3E;\",currentText:\"Actual\",monthNames:[\"Schaner\",\"Favrer\",\"Mars\",\"Avrigl\",\"Matg\",\"Zercladur\",\"Fanadur\",\"Avust\",\"Settember\",\"October\",\"November\",\"December\"],monthNamesShort:[\"Scha\",\"Fev\",\"Mar\",\"Avr\",\"Matg\",\"Zer\",\"Fan\",\"Avu\",\"Sett\",\"Oct\",\"Nov\",\"Dec\"],dayNames:[\"Dumengia\",\"Glindesdi\",\"Mardi\",\"Mesemna\",\"Gievgia\",\"Venderdi\",\"Sonda\"],dayNamesShort:[\"Dum\",\"Gli\",\"Mar\",\"Mes\",\"Gie\",\"Ven\",\"Som\"],dayNamesMin:[\"Du\",\"Gl\",\"Ma\",\"Me\",\"Gi\",\"Ve\",\"So\"],weekHeader:\"emna\",dateFormat:\"dd/mm/yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.rm),a.regional.rm});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-rm.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-rm.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-rm.js");
    }
}
