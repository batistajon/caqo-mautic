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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hr.js */
class __TwigTemplate_492d88007099dcb84ecf908fa9b9c61dd865592fea4700acaea8c25d9dcdb947 extends Template
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
        echo "/* Croatian i18n for the jQuery UI date picker plugin. */
/* Written by Vjekoslav Nesek. */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.hr = {
\tcloseText: \"Zatvori\",
\tprevText: \"&#x3C;\",
\tnextText: \"&#x3E;\",
\tcurrentText: \"Danas\",
\tmonthNames: [ \"Siječanj\",\"Veljača\",\"Ožujak\",\"Travanj\",\"Svibanj\",\"Lipanj\",
\t\"Srpanj\",\"Kolovoz\",\"Rujan\",\"Listopad\",\"Studeni\",\"Prosinac\" ],
\tmonthNamesShort: [ \"Sij\",\"Velj\",\"Ožu\",\"Tra\",\"Svi\",\"Lip\",
\t\"Srp\",\"Kol\",\"Ruj\",\"Lis\",\"Stu\",\"Pro\" ],
\tdayNames: [ \"Nedjelja\",\"Ponedjeljak\",\"Utorak\",\"Srijeda\",\"Četvrtak\",\"Petak\",\"Subota\" ],
\tdayNamesShort: [ \"Ned\",\"Pon\",\"Uto\",\"Sri\",\"Čet\",\"Pet\",\"Sub\" ],
\tdayNamesMin: [ \"Ne\",\"Po\",\"Ut\",\"Sr\",\"Če\",\"Pe\",\"Su\" ],
\tweekHeader: \"Tje\",
\tdateFormat: \"dd.mm.yy.\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.hr );

return datepicker.regional.hr;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hr.js");
    }
}
