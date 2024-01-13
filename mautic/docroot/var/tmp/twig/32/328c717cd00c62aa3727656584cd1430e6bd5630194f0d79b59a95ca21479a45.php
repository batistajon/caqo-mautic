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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sq.js */
class __TwigTemplate_4c343a77a235f9fb15bc87b64c30fe991eb1dff8bf26a8c83896e99e39ee0cc3 extends Template
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
        echo "/* Albanian initialisation for the jQuery UI date picker plugin. */
/* Written by Flakron Bytyqi (flakron@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.sq = {
\tcloseText: \"mbylle\",
\tprevText: \"&#x3C;mbrapa\",
\tnextText: \"Përpara&#x3E;\",
\tcurrentText: \"sot\",
\tmonthNames: [ \"Janar\",\"Shkurt\",\"Mars\",\"Prill\",\"Maj\",\"Qershor\",
\t\"Korrik\",\"Gusht\",\"Shtator\",\"Tetor\",\"Nëntor\",\"Dhjetor\" ],
\tmonthNamesShort: [ \"Jan\",\"Shk\",\"Mar\",\"Pri\",\"Maj\",\"Qer\",
\t\"Kor\",\"Gus\",\"Sht\",\"Tet\",\"Nën\",\"Dhj\" ],
\tdayNames: [ \"E Diel\",\"E Hënë\",\"E Martë\",\"E Mërkurë\",\"E Enjte\",\"E Premte\",\"E Shtune\" ],
\tdayNamesShort: [ \"Di\",\"Hë\",\"Ma\",\"Më\",\"En\",\"Pr\",\"Sh\" ],
\tdayNamesMin: [ \"Di\",\"Hë\",\"Ma\",\"Më\",\"En\",\"Pr\",\"Sh\" ],
\tweekHeader: \"Ja\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.sq );

return datepicker.regional.sq;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sq.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sq.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sq.js");
    }
}
