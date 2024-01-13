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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-he.js */
class __TwigTemplate_feab71c8e3d7a13d91abcf6c83f94c04e37b72a8b52dda41c1d950be21c345da extends Template
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
        echo "/* Hebrew initialisation for the UI Datepicker extension. */
/* Written by Amir Hardon (ahardon at gmail dot com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.he = {
\tcloseText: \"סגור\",
\tprevText: \"&#x3C;הקודם\",
\tnextText: \"הבא&#x3E;\",
\tcurrentText: \"היום\",
\tmonthNames: [ \"ינואר\",\"פברואר\",\"מרץ\",\"אפריל\",\"מאי\",\"יוני\",
\t\"יולי\",\"אוגוסט\",\"ספטמבר\",\"אוקטובר\",\"נובמבר\",\"דצמבר\" ],
\tmonthNamesShort: [ \"ינו\",\"פבר\",\"מרץ\",\"אפר\",\"מאי\",\"יוני\",
\t\"יולי\",\"אוג\",\"ספט\",\"אוק\",\"נוב\",\"דצמ\" ],
\tdayNames: [ \"ראשון\",\"שני\",\"שלישי\",\"רביעי\",\"חמישי\",\"שישי\",\"שבת\" ],
\tdayNamesShort: [ \"א'\",\"ב'\",\"ג'\",\"ד'\",\"ה'\",\"ו'\",\"שבת\" ],
\tdayNamesMin: [ \"א'\",\"ב'\",\"ג'\",\"ד'\",\"ה'\",\"ו'\",\"שבת\" ],
\tweekHeader: \"Wk\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 0,
\tisRTL: true,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.he );

return datepicker.regional.he;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-he.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-he.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-he.js");
    }
}
