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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ar.js */
class __TwigTemplate_6e322aa05d6f75b01fbb469c324d58cb8b4b42c37c480b62998d5ca4a46add6f extends Template
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
        echo "/* Arabic Translation for jQuery UI date picker plugin. */
/* Used in most of Arab countries, primarily in Bahrain, */
/* Kuwait, Oman, Qatar, Saudi Arabia and the United Arab Emirates, Egypt, Sudan and Yemen. */
/* Written by Mohammed Alshehri -- m@dralshehri.com */

( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.ar = {
\tcloseText: \"إغلاق\",
\tprevText: \"&#x3C;السابق\",
\tnextText: \"التالي&#x3E;\",
\tcurrentText: \"اليوم\",
\tmonthNames: [ \"يناير\", \"فبراير\", \"مارس\", \"أبريل\", \"مايو\", \"يونيو\",
\t\"يوليو\", \"أغسطس\", \"سبتمبر\", \"أكتوبر\", \"نوفمبر\", \"ديسمبر\" ],
\tmonthNamesShort: [ \"1\", \"2\", \"3\", \"4\", \"5\", \"6\", \"7\", \"8\", \"9\", \"10\", \"11\", \"12\" ],
\tdayNames: [ \"الأحد\", \"الاثنين\", \"الثلاثاء\", \"الأربعاء\", \"الخميس\", \"الجمعة\", \"السبت\" ],
\tdayNamesShort: [ \"أحد\", \"اثنين\", \"ثلاثاء\", \"أربعاء\", \"خميس\", \"جمعة\", \"سبت\" ],
\tdayNamesMin: [ \"ح\", \"ن\", \"ث\", \"ر\", \"خ\", \"ج\", \"س\" ],
\tweekHeader: \"أسبوع\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 0,
\t\tisRTL: true,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.ar );

return datepicker.regional.ar;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ar.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ar.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ar.js");
    }
}
