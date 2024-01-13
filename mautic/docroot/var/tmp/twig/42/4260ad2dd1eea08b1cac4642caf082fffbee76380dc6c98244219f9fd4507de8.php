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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-km.js */
class __TwigTemplate_72a91e86ccc6c406d38932dd5b99983bcdd85e5abd2600a4ce1816e98b80e471 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.km={closeText:\"ធ្វើ​រួច\",prevText:\"មុន\",nextText:\"បន្ទាប់\",currentText:\"ថ្ងៃ​នេះ\",monthNames:[\"មករា\",\"កុម្ភៈ\",\"មីនា\",\"មេសា\",\"ឧសភា\",\"មិថុនា\",\"កក្កដា\",\"សីហា\",\"កញ្ញា\",\"តុលា\",\"វិច្ឆិកា\",\"ធ្នូ\"],monthNamesShort:[\"មករា\",\"កុម្ភៈ\",\"មីនា\",\"មេសា\",\"ឧសភា\",\"មិថុនា\",\"កក្កដា\",\"សីហា\",\"កញ្ញា\",\"តុលា\",\"វិច្ឆិកា\",\"ធ្នូ\"],dayNames:[\"អាទិត្យ\",\"ចន្ទ\",\"អង្គារ\",\"ពុធ\",\"ព្រហស្បតិ៍\",\"សុក្រ\",\"សៅរ៍\"],dayNamesShort:[\"អា\",\"ច\",\"អ\",\"ពុ\",\"ព្រហ\",\"សុ\",\"សៅ\"],dayNamesMin:[\"អា\",\"ច\",\"អ\",\"ពុ\",\"ព្រហ\",\"សុ\",\"សៅ\"],weekHeader:\"សប្ដាហ៍\",dateFormat:\"dd-mm-yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.km),a.regional.km});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-km.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-km.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-km.js");
    }
}
