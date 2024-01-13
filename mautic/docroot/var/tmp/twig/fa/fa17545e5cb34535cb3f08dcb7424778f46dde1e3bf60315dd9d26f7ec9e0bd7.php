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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ta.js */
class __TwigTemplate_83ef434f4180eb4d1ec5ef480aaab45fbcbcb139dd96a03a8543a24e09ef3cd8 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.ta={closeText:\"மூடு\",prevText:\"முன்னையது\",nextText:\"அடுத்தது\",currentText:\"இன்று\",monthNames:[\"தை\",\"மாசி\",\"பங்குனி\",\"சித்திரை\",\"வைகாசி\",\"ஆனி\",\"ஆடி\",\"ஆவணி\",\"புரட்டாசி\",\"ஐப்பசி\",\"கார்த்திகை\",\"மார்கழி\"],monthNamesShort:[\"தை\",\"மாசி\",\"பங்\",\"சித்\",\"வைகா\",\"ஆனி\",\"ஆடி\",\"ஆவ\",\"புர\",\"ஐப்\",\"கார்\",\"மார்\"],dayNames:[\"ஞாயிற்றுக்கிழமை\",\"திங்கட்கிழமை\",\"செவ்வாய்க்கிழமை\",\"புதன்கிழமை\",\"வியாழக்கிழமை\",\"வெள்ளிக்கிழமை\",\"சனிக்கிழமை\"],dayNamesShort:[\"ஞாயிறு\",\"திங்கள்\",\"செவ்வாய்\",\"புதன்\",\"வியாழன்\",\"வெள்ளி\",\"சனி\"],dayNamesMin:[\"ஞா\",\"தி\",\"செ\",\"பு\",\"வி\",\"வெ\",\"ச\"],weekHeader:\"Не\",dateFormat:\"dd/mm/yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.ta),a.regional.ta});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ta.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ta.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ta.js");
    }
}
