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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ml.js */
class __TwigTemplate_217c6f6fb8f635df3411ce359384ee3bb898aa31724007954bfc1357667ea977 extends Template
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
        echo "/* Malayalam (UTF-8) initialisation for the jQuery UI date picker plugin. */
/* Written by Saji Nediyanchath (saji89@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.ml = {
\tcloseText: \"ശരി\",
\tprevText: \"മുന്നത്തെ\",
\tnextText: \"അടുത്തത് \",
\tcurrentText: \"ഇന്ന്\",
\tmonthNames: [ \"ജനുവരി\",\"ഫെബ്രുവരി\",\"മാര്‍ച്ച്\",\"ഏപ്രില്‍\",\"മേയ്\",\"ജൂണ്‍\",
\t\"ജൂലൈ\",\"ആഗസ്റ്റ്\",\"സെപ്റ്റംബര്‍\",\"ഒക്ടോബര്‍\",\"നവംബര്‍\",\"ഡിസംബര്‍\" ],
\tmonthNamesShort: [ \"ജനു\", \"ഫെബ്\", \"മാര്‍\", \"ഏപ്രി\", \"മേയ്\", \"ജൂണ്‍\",
\t\"ജൂലാ\", \"ആഗ\", \"സെപ്\", \"ഒക്ടോ\", \"നവം\", \"ഡിസ\" ],
\tdayNames: [ \"ഞായര്‍\", \"തിങ്കള്‍\", \"ചൊവ്വ\", \"ബുധന്‍\", \"വ്യാഴം\", \"വെള്ളി\", \"ശനി\" ],
\tdayNamesShort: [ \"ഞായ\", \"തിങ്ക\", \"ചൊവ്വ\", \"ബുധ\", \"വ്യാഴം\", \"വെള്ളി\", \"ശനി\" ],
\tdayNamesMin: [ \"ഞാ\",\"തി\",\"ചൊ\",\"ബു\",\"വ്യാ\",\"വെ\",\"ശ\" ],
\tweekHeader: \"ആ\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.ml );

return datepicker.regional.ml;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ml.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ml.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ml.js");
    }
}
