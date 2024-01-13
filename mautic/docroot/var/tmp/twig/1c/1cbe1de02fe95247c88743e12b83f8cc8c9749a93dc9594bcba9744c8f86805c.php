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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-az.js */
class __TwigTemplate_604cdd8c07e4047abacadebd9476c12bd53244a088980e05872742221918eb6d extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.az={closeText:\"Bağla\",prevText:\"&#x3C;Geri\",nextText:\"İrəli&#x3E;\",currentText:\"Bugün\",monthNames:[\"Yanvar\",\"Fevral\",\"Mart\",\"Aprel\",\"May\",\"İyun\",\"İyul\",\"Avqust\",\"Sentyabr\",\"Oktyabr\",\"Noyabr\",\"Dekabr\"],monthNamesShort:[\"Yan\",\"Fev\",\"Mar\",\"Apr\",\"May\",\"İyun\",\"İyul\",\"Avq\",\"Sen\",\"Okt\",\"Noy\",\"Dek\"],dayNames:[\"Bazar\",\"Bazar ertəsi\",\"Çərşənbə axşamı\",\"Çərşənbə\",\"Cümə axşamı\",\"Cümə\",\"Şənbə\"],dayNamesShort:[\"B\",\"Be\",\"Ça\",\"Ç\",\"Ca\",\"C\",\"Ş\"],dayNamesMin:[\"B\",\"B\",\"Ç\",\"С\",\"Ç\",\"C\",\"Ş\"],weekHeader:\"Hf\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.az),a.regional.az});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-az.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-az.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-az.js");
    }
}
