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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-fo.js */
class __TwigTemplate_fe5cf33c3033b5c9c100c4e60e7017c39867b405fda1d3cabdcb8c295123d9bd extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.fo={closeText:\"Lat aftur\",prevText:\"&#x3C;Fyrra\",nextText:\"Næsta&#x3E;\",currentText:\"Í dag\",monthNames:[\"Januar\",\"Februar\",\"Mars\",\"Apríl\",\"Mei\",\"Juni\",\"Juli\",\"August\",\"September\",\"Oktober\",\"November\",\"Desember\"],monthNamesShort:[\"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Mei\",\"Jun\",\"Jul\",\"Aug\",\"Sep\",\"Okt\",\"Nov\",\"Des\"],dayNames:[\"Sunnudagur\",\"Mánadagur\",\"Týsdagur\",\"Mikudagur\",\"Hósdagur\",\"Fríggjadagur\",\"Leyardagur\"],dayNamesShort:[\"Sun\",\"Mán\",\"Týs\",\"Mik\",\"Hós\",\"Frí\",\"Ley\"],dayNamesMin:[\"Su\",\"Má\",\"Tý\",\"Mi\",\"Hó\",\"Fr\",\"Le\"],weekHeader:\"Vk\",dateFormat:\"dd-mm-yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.fo),a.regional.fo});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-fo.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-fo.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-fo.js");
    }
}
