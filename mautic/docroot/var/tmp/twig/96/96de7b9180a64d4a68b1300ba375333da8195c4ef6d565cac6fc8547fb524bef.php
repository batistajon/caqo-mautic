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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sk.js */
class __TwigTemplate_44b54cc4633322c19f786bd60797309b609d8cfa37e8b81c263e9291aef4fadd extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.sk={closeText:\"Zavrieť\",prevText:\"&#x3C;Predchádzajúci\",nextText:\"Nasledujúci&#x3E;\",currentText:\"Dnes\",monthNames:[\"január\",\"február\",\"marec\",\"apríl\",\"máj\",\"jún\",\"júl\",\"august\",\"september\",\"október\",\"november\",\"december\"],monthNamesShort:[\"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Máj\",\"Jún\",\"Júl\",\"Aug\",\"Sep\",\"Okt\",\"Nov\",\"Dec\"],dayNames:[\"nedeľa\",\"pondelok\",\"utorok\",\"streda\",\"štvrtok\",\"piatok\",\"sobota\"],dayNamesShort:[\"Ned\",\"Pon\",\"Uto\",\"Str\",\"Štv\",\"Pia\",\"Sob\"],dayNamesMin:[\"Ne\",\"Po\",\"Ut\",\"St\",\"Št\",\"Pia\",\"So\"],weekHeader:\"Ty\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.sk),a.regional.sk});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sk.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sk.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sk.js");
    }
}
