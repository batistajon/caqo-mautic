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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-rm.js */
class __TwigTemplate_1abbe86cc4fda557e1e6b77d2058fab7dc81256d475df8c4aad25dc90b1fddbb extends Template
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
        echo "/* Romansh initialisation for the jQuery UI date picker plugin. */
/* Written by Yvonne Gienal (yvonne.gienal@educa.ch). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.rm = {
\tcloseText: \"Serrar\",
\tprevText: \"&#x3C;Suandant\",
\tnextText: \"Precedent&#x3E;\",
\tcurrentText: \"Actual\",
\tmonthNames: [
\t\t\"Schaner\",
\t\t\"Favrer\",
\t\t\"Mars\",
\t\t\"Avrigl\",
\t\t\"Matg\",
\t\t\"Zercladur\",
\t\t\"Fanadur\",
\t\t\"Avust\",
\t\t\"Settember\",
\t\t\"October\",
\t\t\"November\",
\t\t\"December\"
\t],
\tmonthNamesShort: [
\t\t\"Scha\",
\t\t\"Fev\",
\t\t\"Mar\",
\t\t\"Avr\",
\t\t\"Matg\",
\t\t\"Zer\",
\t\t\"Fan\",
\t\t\"Avu\",
\t\t\"Sett\",
\t\t\"Oct\",
\t\t\"Nov\",
\t\t\"Dec\"
\t],
\tdayNames: [ \"Dumengia\",\"Glindesdi\",\"Mardi\",\"Mesemna\",\"Gievgia\",\"Venderdi\",\"Sonda\" ],
\tdayNamesShort: [ \"Dum\",\"Gli\",\"Mar\",\"Mes\",\"Gie\",\"Ven\",\"Som\" ],
\tdayNamesMin: [ \"Du\",\"Gl\",\"Ma\",\"Me\",\"Gi\",\"Ve\",\"So\" ],
\tweekHeader: \"emna\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.rm );

return datepicker.regional.rm;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-rm.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-rm.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-rm.js");
    }
}
