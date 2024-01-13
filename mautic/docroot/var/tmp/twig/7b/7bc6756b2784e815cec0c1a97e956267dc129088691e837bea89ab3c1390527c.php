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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-lv.js */
class __TwigTemplate_1fe9f01e6eec86a5475a81f20adeb9cc3b29e4c871342c57bef89d15d7218a90 extends Template
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
!function(a){\"function\"==typeof define&&define.amd?define([\"../widgets/datepicker\"],a):a(jQuery.datepicker)}(function(a){return a.regional.lv={closeText:\"Aizvērt\",prevText:\"Iepr.\",nextText:\"Nāk.\",currentText:\"Šodien\",monthNames:[\"Janvāris\",\"Februāris\",\"Marts\",\"Aprīlis\",\"Maijs\",\"Jūnijs\",\"Jūlijs\",\"Augusts\",\"Septembris\",\"Oktobris\",\"Novembris\",\"Decembris\"],monthNamesShort:[\"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Mai\",\"Jūn\",\"Jūl\",\"Aug\",\"Sep\",\"Okt\",\"Nov\",\"Dec\"],dayNames:[\"svētdiena\",\"pirmdiena\",\"otrdiena\",\"trešdiena\",\"ceturtdiena\",\"piektdiena\",\"sestdiena\"],dayNamesShort:[\"svt\",\"prm\",\"otr\",\"tre\",\"ctr\",\"pkt\",\"sst\"],dayNamesMin:[\"Sv\",\"Pr\",\"Ot\",\"Tr\",\"Ct\",\"Pk\",\"Ss\"],weekHeader:\"Ned.\",dateFormat:\"dd.mm.yy\",firstDay:1,isRTL:!1,showMonthAfterYear:!1,yearSuffix:\"\"},a.setDefaults(a.regional.lv),a.regional.lv});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-lv.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-lv.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/i18n/datepicker-lv.js");
    }
}
