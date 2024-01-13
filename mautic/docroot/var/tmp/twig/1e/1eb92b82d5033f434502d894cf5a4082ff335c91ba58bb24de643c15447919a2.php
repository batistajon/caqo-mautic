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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-cy-GB.js */
class __TwigTemplate_b965db4df8aa1389871c7a54adf0cf9774179a4232bf0b5c2cc516b0b2d920d7 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional[\"cy-GB\"]={closeText:\"Done\",prevText:\"Prev\",nextText:\"Next\",currentText:\"Today\",monthNames:[\"Ionawr\",\"Chwefror\",\"Mawrth\",\"Ebrill\",\"Mai\",\"Mehefin\",\"Gorffennaf\",\"Awst\",\"Medi\",\"Hydref\",\"Tachwedd\",\"Rhagfyr\"],monthNamesShort:[\"Ion\",\"Chw\",\"Maw\",\"Ebr\",\"Mai\",\"Meh\",\"Gor\",\"Aws\",\"Med\",\"Hyd\",\"Tac\",\"Rha\"],dayNames:[\"Dydd Sul\",\"Dydd Llun\",\"Dydd Mawrth\",\"Dydd Mercher\",\"Dydd Iau\",\"Dydd Gwener\",\"Dydd Sadwrn\"],dayNamesShort:[\"Sul\",\"Llu\",\"Maw\",\"Mer\",\"Iau\",\"Gwe\",\"Sad\"],dayNamesMin:[\"Su\",\"Ll\",\"Ma\",\"Me\",\"Ia\",\"Gw\",\"Sa\"],weekHeader:\"Wy\",dateFormat:\"dd/mm/yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional[\"cy-GB\"]),a.regional[\"cy-GB\"]});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-cy-GB.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-cy-GB.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-cy-GB.js");
    }
}
