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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hy.js */
class __TwigTemplate_4b938b85024963135124e340c18df06e95843c662cbac0cb9cd131227c4d9798 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.hy={closeText:\"Փակել\",prevText:\"&#x3C;Նախ.\",nextText:\"Հաջ.&#x3E;\",currentText:\"Այսօր\",monthNames:[\"Հունվար\",\"Փետրվար\",\"Մարտ\",\"Ապրիլ\",\"Մայիս\",\"Հունիս\",\"Հուլիս\",\"Օգոստոս\",\"Սեպտեմբեր\",\"Հոկտեմբեր\",\"Նոյեմբեր\",\"Դեկտեմբեր\"],monthNamesShort:[\"Հունվ\",\"Փետր\",\"Մարտ\",\"Ապր\",\"Մայիս\",\"Հունիս\",\"Հուլ\",\"Օգս\",\"Սեպ\",\"Հոկ\",\"Նոյ\",\"Դեկ\"],dayNames:[\"կիրակի\",\"եկուշաբթի\",\"երեքշաբթի\",\"չորեքշաբթի\",\"հինգշաբթի\",\"ուրբաթ\",\"շաբաթ\"],dayNamesShort:[\"կիր\",\"երկ\",\"երք\",\"չրք\",\"հնգ\",\"ուրբ\",\"շբթ\"],dayNamesMin:[\"կիր\",\"երկ\",\"երք\",\"չրք\",\"հնգ\",\"ուրբ\",\"շբթ\"],weekHeader:\"ՇԲՏ\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.hy),a.regional.hy});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hy.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hy.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-hy.js");
    }
}
