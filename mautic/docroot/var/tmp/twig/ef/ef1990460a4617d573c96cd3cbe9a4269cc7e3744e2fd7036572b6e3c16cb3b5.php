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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sl.js */
class __TwigTemplate_bf820ed79bc429dbb5f2b33db82c0c03401e231c57cbcde907bba37f870ce6b6 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.sl={closeText:\"Zapri\",prevText:\"&#x3C;Prejšnji\",nextText:\"Naslednji&#x3E;\",currentText:\"Trenutni\",monthNames:[\"Januar\",\"Februar\",\"Marec\",\"April\",\"Maj\",\"Junij\",\"Julij\",\"Avgust\",\"September\",\"Oktober\",\"November\",\"December\"],monthNamesShort:[\"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Maj\",\"Jun\",\"Jul\",\"Avg\",\"Sep\",\"Okt\",\"Nov\",\"Dec\"],dayNames:[\"Nedelja\",\"Ponedeljek\",\"Torek\",\"Sreda\",\"Četrtek\",\"Petek\",\"Sobota\"],dayNamesShort:[\"Ned\",\"Pon\",\"Tor\",\"Sre\",\"Čet\",\"Pet\",\"Sob\"],dayNamesMin:[\"Ne\",\"Po\",\"To\",\"Sr\",\"Če\",\"Pe\",\"So\"],weekHeader:\"Teden\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.sl),a.regional.sl});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-sl.js");
    }
}
