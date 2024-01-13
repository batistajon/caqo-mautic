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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ka.js */
class __TwigTemplate_4ea2339158a50c708c2922f358f629a1780180989382a64434050c002400b369 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.ka={closeText:\"დახურვა\",prevText:\"&#x3c; წინა\",nextText:\"შემდეგი &#x3e;\",currentText:\"დღეს\",monthNames:[\"იანვარი\",\"თებერვალი\",\"მარტი\",\"აპრილი\",\"მაისი\",\"ივნისი\",\"ივლისი\",\"აგვისტო\",\"სექტემბერი\",\"ოქტომბერი\",\"ნოემბერი\",\"დეკემბერი\"],monthNamesShort:[\"იან\",\"თებ\",\"მარ\",\"აპრ\",\"მაი\",\"ივნ\",\"ივლ\",\"აგვ\",\"სექ\",\"ოქტ\",\"ნოე\",\"დეკ\"],dayNames:[\"კვირა\",\"ორშაბათი\",\"სამშაბათი\",\"ოთხშაბათი\",\"ხუთშაბათი\",\"პარასკევი\",\"შაბათი\"],dayNamesShort:[\"კვ\",\"ორშ\",\"სამ\",\"ოთხ\",\"ხუთ\",\"პარ\",\"შაბ\"],dayNamesMin:[\"კვ\",\"ორშ\",\"სამ\",\"ოთხ\",\"ხუთ\",\"პარ\",\"შაბ\"],weekHeader:\"კვირა\",dateFormat:\"dd-mm-yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.ka),a.regional.ka});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ka.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ka.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-ka.js");
    }
}
