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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-pl.js */
class __TwigTemplate_218daeac1290dba320b5b88b0ddd6fd687598b38322c7a5d0046e0e762741064 extends Template
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
        echo "/* Polish initialisation for the jQuery UI date picker plugin. */
/* Written by Jacek Wysocki (jacek.wysocki@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.pl = {
\tcloseText: \"Zamknij\",
\tprevText: \"&#x3C;Poprzedni\",
\tnextText: \"Następny&#x3E;\",
\tcurrentText: \"Dziś\",
\tmonthNames: [ \"Styczeń\",\"Luty\",\"Marzec\",\"Kwiecień\",\"Maj\",\"Czerwiec\",
\t\"Lipiec\",\"Sierpień\",\"Wrzesień\",\"Październik\",\"Listopad\",\"Grudzień\" ],
\tmonthNamesShort: [ \"Sty\",\"Lu\",\"Mar\",\"Kw\",\"Maj\",\"Cze\",
\t\"Lip\",\"Sie\",\"Wrz\",\"Pa\",\"Lis\",\"Gru\" ],
\tdayNames: [ \"Niedziela\",\"Poniedziałek\",\"Wtorek\",\"Środa\",\"Czwartek\",\"Piątek\",\"Sobota\" ],
\tdayNamesShort: [ \"Nie\",\"Pn\",\"Wt\",\"Śr\",\"Czw\",\"Pt\",\"So\" ],
\tdayNamesMin: [ \"N\",\"Pn\",\"Wt\",\"Śr\",\"Cz\",\"Pt\",\"So\" ],
\tweekHeader: \"Tydz\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.pl );

return datepicker.regional.pl;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-pl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-pl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-pl.js");
    }
}
