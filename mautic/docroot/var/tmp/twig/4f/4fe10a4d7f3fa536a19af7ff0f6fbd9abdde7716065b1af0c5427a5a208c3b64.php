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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fa.js */
class __TwigTemplate_9bafcf5431775dab40594ec8cbfd744c5c50236bd522e4f3dd8867fa50b6afe5 extends Template
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
        echo "/* Persian (Farsi) Translation for the jQuery UI date picker plugin. */
/* Javad Mowlanezhad -- jmowla@gmail.com */
/* Jalali calendar should supported soon! (Its implemented but I have to test it) */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.fa = {
\tcloseText: \"بستن\",
\tprevText: \"&#x3C;قبلی\",
\tnextText: \"بعدی&#x3E;\",
\tcurrentText: \"امروز\",
\tmonthNames: [
\t\t\"ژانویه\",
\t\t\"فوریه\",
\t\t\"مارس\",
\t\t\"آوریل\",
\t\t\"مه\",
\t\t\"ژوئن\",
\t\t\"ژوئیه\",
\t\t\"اوت\",
\t\t\"سپتامبر\",
\t\t\"اکتبر\",
\t\t\"نوامبر\",
\t\t\"دسامبر\"
\t],
\tmonthNamesShort: [ \"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\" ],
\tdayNames: [
\t\t\"يکشنبه\",
\t\t\"دوشنبه\",
\t\t\"سه‌شنبه\",
\t\t\"چهارشنبه\",
\t\t\"پنجشنبه\",
\t\t\"جمعه\",
\t\t\"شنبه\"
\t],
\tdayNamesShort: [
\t\t\"ی\",
\t\t\"د\",
\t\t\"س\",
\t\t\"چ\",
\t\t\"پ\",
\t\t\"ج\",
\t\t\"ش\"
\t],
\tdayNamesMin: [
\t\t\"ی\",
\t\t\"د\",
\t\t\"س\",
\t\t\"چ\",
\t\t\"پ\",
\t\t\"ج\",
\t\t\"ش\"
\t],
\tweekHeader: \"هف\",
\tdateFormat: \"yy/mm/dd\",
\tfirstDay: 6,
\tisRTL: true,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.fa );

return datepicker.regional.fa;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fa.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fa.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fa.js");
    }
}
