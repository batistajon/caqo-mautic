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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-eu.js */
class __TwigTemplate_2a000acea2b575c6ccfa28cebe488d7a6ff6aab0d00c6667e557f27337c02036 extends Template
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
        echo "/* Karrikas-ek itzulia (karrikas@karrikas.com) */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.eu = {
\tcloseText: \"Egina\",
\tprevText: \"&#x3C;Aur\",
\tnextText: \"Hur&#x3E;\",
\tcurrentText: \"Gaur\",
\tmonthNames: [ \"urtarrila\",\"otsaila\",\"martxoa\",\"apirila\",\"maiatza\",\"ekaina\",
\t\t\"uztaila\",\"abuztua\",\"iraila\",\"urria\",\"azaroa\",\"abendua\" ],
\tmonthNamesShort: [ \"urt.\",\"ots.\",\"mar.\",\"api.\",\"mai.\",\"eka.\",
\t\t\"uzt.\",\"abu.\",\"ira.\",\"urr.\",\"aza.\",\"abe.\" ],
\tdayNames: [ \"igandea\",\"astelehena\",\"asteartea\",\"asteazkena\",\"osteguna\",\"ostirala\",\"larunbata\" ],
\tdayNamesShort: [ \"ig.\",\"al.\",\"ar.\",\"az.\",\"og.\",\"ol.\",\"lr.\" ],
\tdayNamesMin: [ \"ig\",\"al\",\"ar\",\"az\",\"og\",\"ol\",\"lr\" ],
\tweekHeader: \"As\",
\tdateFormat: \"yy-mm-dd\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.eu );

return datepicker.regional.eu;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-eu.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-eu.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-eu.js");
    }
}
