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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-et.js */
class __TwigTemplate_f4b86b4c1e94ebc7a221185aa17175b726cd169f8a2c6bbc046ea02c995513ac extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.et={closeText:\"Sulge\",prevText:\"Eelnev\",nextText:\"Järgnev\",currentText:\"Täna\",monthNames:[\"Jaanuar\",\"Veebruar\",\"Märts\",\"Aprill\",\"Mai\",\"Juuni\",\"Juuli\",\"August\",\"September\",\"Oktoober\",\"November\",\"Detsember\"],monthNamesShort:[\"Jaan\",\"Veebr\",\"Märts\",\"Apr\",\"Mai\",\"Juuni\",\"Juuli\",\"Aug\",\"Sept\",\"Okt\",\"Nov\",\"Dets\"],dayNames:[\"Pühapäev\",\"Esmaspäev\",\"Teisipäev\",\"Kolmapäev\",\"Neljapäev\",\"Reede\",\"Laupäev\"],dayNamesShort:[\"Pühap\",\"Esmasp\",\"Teisip\",\"Kolmap\",\"Neljap\",\"Reede\",\"Laup\"],dayNamesMin:[\"P\",\"E\",\"T\",\"K\",\"N\",\"R\",\"L\"],weekHeader:\"näd\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.et),a.regional.et});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-et.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-et.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-et.js");
    }
}
