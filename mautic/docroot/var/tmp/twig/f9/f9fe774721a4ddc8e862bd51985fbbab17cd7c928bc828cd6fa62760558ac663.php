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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hi.js */
class __TwigTemplate_057be2b5feb13d991bbe64c6ba60287217ab393bb507e21194f5df5778d10924 extends Template
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
        echo "/* Hindi initialisation for the jQuery UI date picker plugin. */
/* Written by Michael Dawart. */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.hi = {
\tcloseText: \"बंद\",
\tprevText: \"पिछला\",
\tnextText: \"अगला\",
\tcurrentText: \"आज\",
\tmonthNames: [ \"जनवरी \",\"फरवरी\",\"मार्च\",\"अप्रेल\",\"मई\",\"जून\",
\t\"जूलाई\",\"अगस्त \",\"सितम्बर\",\"अक्टूबर\",\"नवम्बर\",\"दिसम्बर\" ],
\tmonthNamesShort: [ \"जन\", \"फर\", \"मार्च\", \"अप्रेल\", \"मई\", \"जून\",
\t\"जूलाई\", \"अग\", \"सित\", \"अक्ट\", \"नव\", \"दि\" ],
\tdayNames: [ \"रविवार\", \"सोमवार\", \"मंगलवार\", \"बुधवार\", \"गुरुवार\", \"शुक्रवार\", \"शनिवार\" ],
\tdayNamesShort: [ \"रवि\", \"सोम\", \"मंगल\", \"बुध\", \"गुरु\", \"शुक्र\", \"शनि\" ],
\tdayNamesMin: [ \"रवि\", \"सोम\", \"मंगल\", \"बुध\", \"गुरु\", \"शुक्र\", \"शनि\" ],
\tweekHeader: \"हफ्ता\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.hi );

return datepicker.regional.hi;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hi.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hi.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hi.js");
    }
}
