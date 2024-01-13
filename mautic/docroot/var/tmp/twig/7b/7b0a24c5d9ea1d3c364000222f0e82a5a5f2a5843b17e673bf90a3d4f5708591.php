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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-da.js */
class __TwigTemplate_6baa4338bf98783dff10de1508acff431401429b74cf3064a6dad7684892b7a0 extends Template
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
        echo "/* Danish initialisation for the jQuery UI date picker plugin. */
/* Written by Jan Christensen ( deletestuff@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.da = {
\tcloseText: \"Luk\",
\tprevText: \"&#x3C;Forrige\",
\tnextText: \"Næste&#x3E;\",
\tcurrentText: \"Idag\",
\tmonthNames: [ \"Januar\",\"Februar\",\"Marts\",\"April\",\"Maj\",\"Juni\",
\t\"Juli\",\"August\",\"September\",\"Oktober\",\"November\",\"December\" ],
\tmonthNamesShort: [ \"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Maj\",\"Jun\",
\t\"Jul\",\"Aug\",\"Sep\",\"Okt\",\"Nov\",\"Dec\" ],
\tdayNames: [ \"Søndag\",\"Mandag\",\"Tirsdag\",\"Onsdag\",\"Torsdag\",\"Fredag\",\"Lørdag\" ],
\tdayNamesShort: [ \"Søn\",\"Man\",\"Tir\",\"Ons\",\"Tor\",\"Fre\",\"Lør\" ],
\tdayNamesMin: [ \"Sø\",\"Ma\",\"Ti\",\"On\",\"To\",\"Fr\",\"Lø\" ],
\tweekHeader: \"Uge\",
\tdateFormat: \"dd-mm-yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.da );

return datepicker.regional.da;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-da.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-da.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-da.js");
    }
}
