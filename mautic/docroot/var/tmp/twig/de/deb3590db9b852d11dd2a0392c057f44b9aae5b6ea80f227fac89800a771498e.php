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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-cy-GB.js */
class __TwigTemplate_608f40b69fe1396f1658ab75f73a5e96cfef76b18cc91b02865ced175b06190a extends Template
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
        echo "/* Welsh/UK initialisation for the jQuery UI date picker plugin. */
/* Written by William Griffiths. */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional[ \"cy-GB\" ] = {
\tcloseText: \"Done\",
\tprevText: \"Prev\",
\tnextText: \"Next\",
\tcurrentText: \"Today\",
\tmonthNames: [ \"Ionawr\",\"Chwefror\",\"Mawrth\",\"Ebrill\",\"Mai\",\"Mehefin\",
\t\"Gorffennaf\",\"Awst\",\"Medi\",\"Hydref\",\"Tachwedd\",\"Rhagfyr\" ],
\tmonthNamesShort: [ \"Ion\", \"Chw\", \"Maw\", \"Ebr\", \"Mai\", \"Meh\",
\t\"Gor\", \"Aws\", \"Med\", \"Hyd\", \"Tac\", \"Rha\" ],
\tdayNames: [
\t\t\"Dydd Sul\",
\t\t\"Dydd Llun\",
\t\t\"Dydd Mawrth\",
\t\t\"Dydd Mercher\",
\t\t\"Dydd Iau\",
\t\t\"Dydd Gwener\",
\t\t\"Dydd Sadwrn\"
\t],
\tdayNamesShort: [ \"Sul\", \"Llu\", \"Maw\", \"Mer\", \"Iau\", \"Gwe\", \"Sad\" ],
\tdayNamesMin: [ \"Su\",\"Ll\",\"Ma\",\"Me\",\"Ia\",\"Gw\",\"Sa\" ],
\tweekHeader: \"Wy\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional[ \"cy-GB\" ] );

return datepicker.regional[ \"cy-GB\" ];

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-cy-GB.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-cy-GB.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-cy-GB.js");
    }
}
