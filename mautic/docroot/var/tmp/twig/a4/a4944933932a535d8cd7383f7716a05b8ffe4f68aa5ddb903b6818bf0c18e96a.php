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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-eo.js */
class __TwigTemplate_c02bc9835e10e2b39b34148d23b787fa48a48f8647480f8bfd4e709b0045cda4 extends Template
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
        echo "/* Esperanto initialisation for the jQuery UI date picker plugin. */
/* Written by Olivier M. (olivierweb@ifrance.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.eo = {
\tcloseText: \"Fermi\",
\tprevText: \"&#x3C;Anta\",
\tnextText: \"Sekv&#x3E;\",
\tcurrentText: \"Nuna\",
\tmonthNames: [ \"Januaro\",\"Februaro\",\"Marto\",\"Aprilo\",\"Majo\",\"Junio\",
\t\"Julio\",\"Aŭgusto\",\"Septembro\",\"Oktobro\",\"Novembro\",\"Decembro\" ],
\tmonthNamesShort: [ \"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Maj\",\"Jun\",
\t\"Jul\",\"Aŭg\",\"Sep\",\"Okt\",\"Nov\",\"Dec\" ],
\tdayNames: [ \"Dimanĉo\",\"Lundo\",\"Mardo\",\"Merkredo\",\"Ĵaŭdo\",\"Vendredo\",\"Sabato\" ],
\tdayNamesShort: [ \"Dim\",\"Lun\",\"Mar\",\"Mer\",\"Ĵaŭ\",\"Ven\",\"Sab\" ],
\tdayNamesMin: [ \"Di\",\"Lu\",\"Ma\",\"Me\",\"Ĵa\",\"Ve\",\"Sa\" ],
\tweekHeader: \"Sb\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 0,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.eo );

return datepicker.regional.eo;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-eo.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-eo.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-eo.js");
    }
}
