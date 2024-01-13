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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sr-SR.js */
class __TwigTemplate_770df92298fb98217cbe2d14be89682e68c6e870169cfc412885e680a36508e5 extends Template
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
        echo "/* Serbian i18n for the jQuery UI date picker plugin. */
/* Written by Dejan Dimić. */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional[ \"sr-SR\" ] = {
\tcloseText: \"Zatvori\",
\tprevText: \"&#x3C;\",
\tnextText: \"&#x3E;\",
\tcurrentText: \"Danas\",
\tmonthNames: [ \"Januar\",\"Februar\",\"Mart\",\"April\",\"Maj\",\"Jun\",
\t\"Jul\",\"Avgust\",\"Septembar\",\"Oktobar\",\"Novembar\",\"Decembar\" ],
\tmonthNamesShort: [ \"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Maj\",\"Jun\",
\t\"Jul\",\"Avg\",\"Sep\",\"Okt\",\"Nov\",\"Dec\" ],
\tdayNames: [ \"Nedelja\",\"Ponedeljak\",\"Utorak\",\"Sreda\",\"Četvrtak\",\"Petak\",\"Subota\" ],
\tdayNamesShort: [ \"Ned\",\"Pon\",\"Uto\",\"Sre\",\"Čet\",\"Pet\",\"Sub\" ],
\tdayNamesMin: [ \"Ne\",\"Po\",\"Ut\",\"Sr\",\"Če\",\"Pe\",\"Su\" ],
\tweekHeader: \"Sed\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional[ \"sr-SR\" ] );

return datepicker.regional[ \"sr-SR\" ];

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sr-SR.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sr-SR.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sr-SR.js");
    }
}
