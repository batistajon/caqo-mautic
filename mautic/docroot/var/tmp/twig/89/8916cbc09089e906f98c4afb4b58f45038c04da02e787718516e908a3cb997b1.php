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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ar-DZ.js */
class __TwigTemplate_3cb2d4bfcbe3054fe20a3dc9390916ec5297387fb55b59a65bad803cd63f515e extends Template
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
        echo "/* Algerian Arabic Translation for jQuery UI date picker plugin.
/* Used in most of Maghreb countries, primarily in Algeria, Tunisia, Morocco.
/* Mohamed Cherif BOUCHELAGHEM -- cherifbouchelaghem@yahoo.fr */
/* Mohamed Amine HADDAD -- zatamine@gmail.com */

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional[ \"ar-DZ\" ] = {
\tcloseText: \"إغلاق\",
\tprevText: \"&#x3C;السابق\",
\tnextText: \"التالي&#x3E;\",
\tcurrentText: \"اليوم\",
\tmonthNames: [ \"جانفي\", \"فيفري\", \"مارس\", \"أفريل\", \"ماي\", \"جوان\",
\t\"جويلية\", \"أوت\", \"سبتمبر\",\"أكتوبر\", \"نوفمبر\", \"ديسمبر\" ],
\tmonthNamesShort: [ \"1\", \"2\", \"3\", \"4\", \"5\", \"6\", \"7\", \"8\", \"9\", \"10\", \"11\", \"12\" ],
\tdayNames: [ \"الأحد\", \"الاثنين\", \"الثلاثاء\", \"الأربعاء\", \"الخميس\", \"الجمعة\", \"السبت\" ],
\tdayNamesShort: [ \"الأحد\", \"الاثنين\", \"الثلاثاء\", \"الأربعاء\", \"الخميس\", \"الجمعة\", \"السبت\" ],
\tdayNamesMin: [ \"ح\", \"ن\", \"ث\", \"ر\", \"خ\", \"ج\", \"س\" ],
\tweekHeader: \"أسبوع\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 6,
\t\tisRTL: true,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional[ \"ar-DZ\" ] );

return datepicker.regional[ \"ar-DZ\" ];

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ar-DZ.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ar-DZ.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ar-DZ.js");
    }
}
