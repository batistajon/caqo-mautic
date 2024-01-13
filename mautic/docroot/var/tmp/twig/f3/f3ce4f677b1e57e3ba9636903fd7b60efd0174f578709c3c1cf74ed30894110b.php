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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-lb.js */
class __TwigTemplate_efd9a0f92c404caad9e527613f5cada4644fb2dc6051387d529fc595643f8a03 extends Template
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
        echo "/* Luxembourgish initialisation for the jQuery UI date picker plugin. */
/* Written by Michel Weimerskirch <michel@weimerskirch.net> */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.lb = {
\tcloseText: \"Fäerdeg\",
\tprevText: \"Zréck\",
\tnextText: \"Weider\",
\tcurrentText: \"Haut\",
\tmonthNames: [ \"Januar\",\"Februar\",\"Mäerz\",\"Abrëll\",\"Mee\",\"Juni\",
\t\"Juli\",\"August\",\"September\",\"Oktober\",\"November\",\"Dezember\" ],
\tmonthNamesShort: [ \"Jan\", \"Feb\", \"Mäe\", \"Abr\", \"Mee\", \"Jun\",
\t\"Jul\", \"Aug\", \"Sep\", \"Okt\", \"Nov\", \"Dez\" ],
\tdayNames: [
\t\t\"Sonndeg\",
\t\t\"Méindeg\",
\t\t\"Dënschdeg\",
\t\t\"Mëttwoch\",
\t\t\"Donneschdeg\",
\t\t\"Freideg\",
\t\t\"Samschdeg\"
\t],
\tdayNamesShort: [ \"Son\", \"Méi\", \"Dën\", \"Mët\", \"Don\", \"Fre\", \"Sam\" ],
\tdayNamesMin: [ \"So\",\"Mé\",\"Dë\",\"Më\",\"Do\",\"Fr\",\"Sa\" ],
\tweekHeader: \"W\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.lb );

return datepicker.regional.lb;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-lb.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-lb.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-lb.js");
    }
}
