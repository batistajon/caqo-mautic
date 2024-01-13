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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-cs.js */
class __TwigTemplate_b47672e6170b3dfee9164d54ef1c7f4dc371a8234b7c5a45af00686df07b3283 extends Template
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
        echo "/* Czech initialisation for the jQuery UI date picker plugin. */
/* Written by Tomas Muller (tomas@tomas-muller.net). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.cs = {
\tcloseText: \"Zavřít\",
\tprevText: \"&#x3C;Dříve\",
\tnextText: \"Později&#x3E;\",
\tcurrentText: \"Nyní\",
\tmonthNames: [ \"leden\",\"únor\",\"březen\",\"duben\",\"květen\",\"červen\",
\t\"červenec\",\"srpen\",\"září\",\"říjen\",\"listopad\",\"prosinec\" ],
\tmonthNamesShort: [ \"led\",\"úno\",\"bře\",\"dub\",\"kvě\",\"čer\",
\t\"čvc\",\"srp\",\"zář\",\"říj\",\"lis\",\"pro\" ],
\tdayNames: [ \"neděle\", \"pondělí\", \"úterý\", \"středa\", \"čtvrtek\", \"pátek\", \"sobota\" ],
\tdayNamesShort: [ \"ne\", \"po\", \"út\", \"st\", \"čt\", \"pá\", \"so\" ],
\tdayNamesMin: [ \"ne\",\"po\",\"út\",\"st\",\"čt\",\"pá\",\"so\" ],
\tweekHeader: \"Týd\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.cs );

return datepicker.regional.cs;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-cs.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-cs.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-cs.js");
    }
}
