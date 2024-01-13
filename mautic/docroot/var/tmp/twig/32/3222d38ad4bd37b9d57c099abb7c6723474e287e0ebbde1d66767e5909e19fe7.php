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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-he.js */
class __TwigTemplate_4a01abd06eaf119700d3010c7bf7ec61b9b8591edeb724fde01b1dabeea97c13 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.he={closeText:\"סגור\",prevText:\"&#x3C;הקודם\",nextText:\"הבא&#x3E;\",currentText:\"היום\",monthNames:[\"ינואר\",\"פברואר\",\"מרץ\",\"אפריל\",\"מאי\",\"יוני\",\"יולי\",\"אוגוסט\",\"ספטמבר\",\"אוקטובר\",\"נובמבר\",\"דצמבר\"],monthNamesShort:[\"ינו\",\"פבר\",\"מרץ\",\"אפר\",\"מאי\",\"יוני\",\"יולי\",\"אוג\",\"ספט\",\"אוק\",\"נוב\",\"דצמ\"],dayNames:[\"ראשון\",\"שני\",\"שלישי\",\"רביעי\",\"חמישי\",\"שישי\",\"שבת\"],dayNamesShort:[\"א'\",\"ב'\",\"ג'\",\"ד'\",\"ה'\",\"ו'\",\"שבת\"],dayNamesMin:[\"א'\",\"ב'\",\"ג'\",\"ד'\",\"ה'\",\"ו'\",\"שבת\"],weekHeader:\"Wk\",dateFormat:\"dd/mm/yy\",firstDay:0,isRTL:!0,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.he),a.regional.he});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-he.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-he.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-he.js");
    }
}
