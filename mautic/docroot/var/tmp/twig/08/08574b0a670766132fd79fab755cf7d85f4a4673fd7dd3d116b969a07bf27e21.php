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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ml.js */
class __TwigTemplate_501f660b23ac0f601b7cab03b131718250b6429b7c3d6040af2b710fb3221489 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.ml={closeText:\"ശരി\",prevText:\"മുന്നത്തെ\",nextText:\"അടുത്തത് \",currentText:\"ഇന്ന്\",monthNames:[\"ജനുവരി\",\"ഫെബ്രുവരി\",\"മാര്‍ച്ച്\",\"ഏപ്രില്‍\",\"മേയ്\",\"ജൂണ്‍\",\"ജൂലൈ\",\"ആഗസ്റ്റ്\",\"സെപ്റ്റംബര്‍\",\"ഒക്ടോബര്‍\",\"നവംബര്‍\",\"ഡിസംബര്‍\"],monthNamesShort:[\"ജനു\",\"ഫെബ്\",\"മാര്‍\",\"ഏപ്രി\",\"മേയ്\",\"ജൂണ്‍\",\"ജൂലാ\",\"ആഗ\",\"സെപ്\",\"ഒക്ടോ\",\"നവം\",\"ഡിസ\"],dayNames:[\"ഞായര്‍\",\"തിങ്കള്‍\",\"ചൊവ്വ\",\"ബുധന്‍\",\"വ്യാഴം\",\"വെള്ളി\",\"ശനി\"],dayNamesShort:[\"ഞായ\",\"തിങ്ക\",\"ചൊവ്വ\",\"ബുധ\",\"വ്യാഴം\",\"വെള്ളി\",\"ശനി\"],dayNamesMin:[\"ഞാ\",\"തി\",\"ചൊ\",\"ബു\",\"വ്യാ\",\"വെ\",\"ശ\"],weekHeader:\"ആ\",dateFormat:\"dd/mm/yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.ml),a.regional.ml});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ml.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ml.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ml.js");
    }
}
