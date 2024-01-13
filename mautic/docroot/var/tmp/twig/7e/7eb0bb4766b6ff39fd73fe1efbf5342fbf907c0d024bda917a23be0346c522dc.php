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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hr.js */
class __TwigTemplate_bd13ee6c8a235699016fde17e2bcf9275ba4d6f0a97f246cd64e2b5a5d91c059 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.hr={closeText:\"Zatvori\",prevText:\"&#x3C;\",nextText:\"&#x3E;\",currentText:\"Danas\",monthNames:[\"Siječanj\",\"Veljača\",\"Ožujak\",\"Travanj\",\"Svibanj\",\"Lipanj\",\"Srpanj\",\"Kolovoz\",\"Rujan\",\"Listopad\",\"Studeni\",\"Prosinac\"],monthNamesShort:[\"Sij\",\"Velj\",\"Ožu\",\"Tra\",\"Svi\",\"Lip\",\"Srp\",\"Kol\",\"Ruj\",\"Lis\",\"Stu\",\"Pro\"],dayNames:[\"Nedjelja\",\"Ponedjeljak\",\"Utorak\",\"Srijeda\",\"Četvrtak\",\"Petak\",\"Subota\"],dayNamesShort:[\"Ned\",\"Pon\",\"Uto\",\"Sri\",\"Čet\",\"Pet\",\"Sub\"],dayNamesMin:[\"Ne\",\"Po\",\"Ut\",\"Sr\",\"Če\",\"Pe\",\"Su\"],weekHeader:\"Tje\",dateFormat:\"dd.mm.yy.\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.hr),a.regional.hr});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hr.js");
    }
}
