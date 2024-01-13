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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-af.js */
class __TwigTemplate_81ffba7391562c5b669c5c062e1877ebd8696e095949216924c1f3e2d4896781 extends Template
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
        echo "/* Afrikaans initialisation for the jQuery UI date picker plugin. */
/* Written by Renier Pretorius. */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.af = {
\tcloseText: \"Selekteer\",
\tprevText: \"Vorige\",
\tnextText: \"Volgende\",
\tcurrentText: \"Vandag\",
\tmonthNames: [ \"Januarie\",\"Februarie\",\"Maart\",\"April\",\"Mei\",\"Junie\",
\t\"Julie\",\"Augustus\",\"September\",\"Oktober\",\"November\",\"Desember\" ],
\tmonthNamesShort: [ \"Jan\", \"Feb\", \"Mrt\", \"Apr\", \"Mei\", \"Jun\",
\t\"Jul\", \"Aug\", \"Sep\", \"Okt\", \"Nov\", \"Des\" ],
\tdayNames: [ \"Sondag\", \"Maandag\", \"Dinsdag\", \"Woensdag\", \"Donderdag\", \"Vrydag\", \"Saterdag\" ],
\tdayNamesShort: [ \"Son\", \"Maa\", \"Din\", \"Woe\", \"Don\", \"Vry\", \"Sat\" ],
\tdayNamesMin: [ \"So\",\"Ma\",\"Di\",\"Wo\",\"Do\",\"Vr\",\"Sa\" ],
\tweekHeader: \"Wk\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.af );

return datepicker.regional.af;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-af.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-af.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-af.js");
    }
}
