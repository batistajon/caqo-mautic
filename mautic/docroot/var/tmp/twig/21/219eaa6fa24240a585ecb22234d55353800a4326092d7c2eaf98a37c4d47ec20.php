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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hi.js */
class __TwigTemplate_237aa1596e3cf4bd35ae441966aef51d29b0a62b3d460e5339d8a50144079c20 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.hi={closeText:\"बंद\",prevText:\"पिछला\",nextText:\"अगला\",currentText:\"आज\",monthNames:[\"जनवरी \",\"फरवरी\",\"मार्च\",\"अप्रेल\",\"मई\",\"जून\",\"जूलाई\",\"अगस्त \",\"सितम्बर\",\"अक्टूबर\",\"नवम्बर\",\"दिसम्बर\"],monthNamesShort:[\"जन\",\"फर\",\"मार्च\",\"अप्रेल\",\"मई\",\"जून\",\"जूलाई\",\"अग\",\"सित\",\"अक्ट\",\"नव\",\"दि\"],dayNames:[\"रविवार\",\"सोमवार\",\"मंगलवार\",\"बुधवार\",\"गुरुवार\",\"शुक्रवार\",\"शनिवार\"],dayNamesShort:[\"रवि\",\"सोम\",\"मंगल\",\"बुध\",\"गुरु\",\"शुक्र\",\"शनि\"],dayNamesMin:[\"रवि\",\"सोम\",\"मंगल\",\"बुध\",\"गुरु\",\"शुक्र\",\"शनि\"],weekHeader:\"हफ्ता\",dateFormat:\"dd/mm/yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.hi),a.regional.hi});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hi.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hi.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hi.js");
    }
}
