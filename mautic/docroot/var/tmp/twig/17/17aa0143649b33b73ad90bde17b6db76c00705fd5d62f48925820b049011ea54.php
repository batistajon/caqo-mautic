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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ta.js */
class __TwigTemplate_997bd9ee572dc8390a5b8f6dbd2add1c62381aa5ba8c9416f57ba0ef10a19418 extends Template
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
        echo "/* Tamil (UTF-8) initialisation for the jQuery UI date picker plugin. */
/* Written by S A Sureshkumar (saskumar@live.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.ta = {
\tcloseText: \"மூடு\",
\tprevText: \"முன்னையது\",
\tnextText: \"அடுத்தது\",
\tcurrentText: \"இன்று\",
\tmonthNames: [ \"தை\",\"மாசி\",\"பங்குனி\",\"சித்திரை\",\"வைகாசி\",\"ஆனி\",
\t\"ஆடி\",\"ஆவணி\",\"புரட்டாசி\",\"ஐப்பசி\",\"கார்த்திகை\",\"மார்கழி\" ],
\tmonthNamesShort: [ \"தை\",\"மாசி\",\"பங்\",\"சித்\",\"வைகா\",\"ஆனி\",
\t\"ஆடி\",\"ஆவ\",\"புர\",\"ஐப்\",\"கார்\",\"மார்\" ],
\tdayNames: [
\t\t\"ஞாயிற்றுக்கிழமை\",
\t\t\"திங்கட்கிழமை\",
\t\t\"செவ்வாய்க்கிழமை\",
\t\t\"புதன்கிழமை\",
\t\t\"வியாழக்கிழமை\",
\t\t\"வெள்ளிக்கிழமை\",
\t\t\"சனிக்கிழமை\"
\t],
\tdayNamesShort: [
\t\t\"ஞாயிறு\",
\t\t\"திங்கள்\",
\t\t\"செவ்வாய்\",
\t\t\"புதன்\",
\t\t\"வியாழன்\",
\t\t\"வெள்ளி\",
\t\t\"சனி\"
\t],
\tdayNamesMin: [ \"ஞா\",\"தி\",\"செ\",\"பு\",\"வி\",\"வெ\",\"ச\" ],
\tweekHeader: \"Не\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.ta );

return datepicker.regional.ta;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ta.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ta.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ta.js");
    }
}
