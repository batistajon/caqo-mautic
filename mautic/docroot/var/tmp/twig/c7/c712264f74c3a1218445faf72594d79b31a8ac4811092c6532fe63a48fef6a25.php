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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hu.js */
class __TwigTemplate_1ba66cc78b73306544bcd62bc7af99d5d36c9758639f02cf8cadba2781342cb0 extends Template
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
        echo "/* Hungarian initialisation for the jQuery UI date picker plugin. */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.hu = {
\tcloseText: \"bezár\",
\tprevText: \"vissza\",
\tnextText: \"előre\",
\tcurrentText: \"ma\",
\tmonthNames: [ \"Január\", \"Február\", \"Március\", \"Április\", \"Május\", \"Június\",
\t\"Július\", \"Augusztus\", \"Szeptember\", \"Október\", \"November\", \"December\" ],
\tmonthNamesShort: [ \"Jan\", \"Feb\", \"Már\", \"Ápr\", \"Máj\", \"Jún\",
\t\"Júl\", \"Aug\", \"Szep\", \"Okt\", \"Nov\", \"Dec\" ],
\tdayNames: [ \"Vasárnap\", \"Hétfő\", \"Kedd\", \"Szerda\", \"Csütörtök\", \"Péntek\", \"Szombat\" ],
\tdayNamesShort: [ \"Vas\", \"Hét\", \"Ked\", \"Sze\", \"Csü\", \"Pén\", \"Szo\" ],
\tdayNamesMin: [ \"V\", \"H\", \"K\", \"Sze\", \"Cs\", \"P\", \"Szo\" ],
\tweekHeader: \"Hét\",
\tdateFormat: \"yy.mm.dd.\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: true,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.hu );

return datepicker.regional.hu;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hu.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hu.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hu.js");
    }
}
