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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hu.js */
class __TwigTemplate_ed1f0a5cdd7aeb3a6ed23b0c491d249b0720e3591f09ee8eac88690311890e13 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.hu={closeText:\"bezár\",prevText:\"vissza\",nextText:\"előre\",currentText:\"ma\",monthNames:[\"Január\",\"Február\",\"Március\",\"Április\",\"Május\",\"Június\",\"Július\",\"Augusztus\",\"Szeptember\",\"Október\",\"November\",\"December\"],monthNamesShort:[\"Jan\",\"Feb\",\"Már\",\"Ápr\",\"Máj\",\"Jún\",\"Júl\",\"Aug\",\"Szep\",\"Okt\",\"Nov\",\"Dec\"],dayNames:[\"Vasárnap\",\"Hétfő\",\"Kedd\",\"Szerda\",\"Csütörtök\",\"Péntek\",\"Szombat\"],dayNamesShort:[\"Vas\",\"Hét\",\"Ked\",\"Sze\",\"Csü\",\"Pén\",\"Szo\"],dayNamesMin:[\"V\",\"H\",\"K\",\"Sze\",\"Cs\",\"P\",\"Szo\"],weekHeader:\"Hét\",dateFormat:\"yy.mm.dd.\",firstDay:1,isRTL:!1,showMonthAfterYear:!0,yearSuffix:\"\"},a.setDefaults(a.regional.hu),a.regional.hu});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hu.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hu.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hu.js");
    }
}
