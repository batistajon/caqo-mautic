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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hy.js */
class __TwigTemplate_a853a63f643555f5866d59df613291bd3c26b719bbad698abd623f37b0f15b49 extends Template
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
        echo "/* Armenian(UTF-8) initialisation for the jQuery UI date picker plugin. */
/* Written by Levon Zakaryan (levon.zakaryan@gmail.com)*/
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.hy = {
\tcloseText: \"Փակել\",
\tprevText: \"&#x3C;Նախ.\",
\tnextText: \"Հաջ.&#x3E;\",
\tcurrentText: \"Այսօր\",
\tmonthNames: [ \"Հունվար\",\"Փետրվար\",\"Մարտ\",\"Ապրիլ\",\"Մայիս\",\"Հունիս\",
\t\"Հուլիս\",\"Օգոստոս\",\"Սեպտեմբեր\",\"Հոկտեմբեր\",\"Նոյեմբեր\",\"Դեկտեմբեր\" ],
\tmonthNamesShort: [ \"Հունվ\",\"Փետր\",\"Մարտ\",\"Ապր\",\"Մայիս\",\"Հունիս\",
\t\"Հուլ\",\"Օգս\",\"Սեպ\",\"Հոկ\",\"Նոյ\",\"Դեկ\" ],
\tdayNames: [ \"կիրակի\",\"եկուշաբթի\",\"երեքշաբթի\",\"չորեքշաբթի\",\"հինգշաբթի\",\"ուրբաթ\",\"շաբաթ\" ],
\tdayNamesShort: [ \"կիր\",\"երկ\",\"երք\",\"չրք\",\"հնգ\",\"ուրբ\",\"շբթ\" ],
\tdayNamesMin: [ \"կիր\",\"երկ\",\"երք\",\"չրք\",\"հնգ\",\"ուրբ\",\"շբթ\" ],
\tweekHeader: \"ՇԲՏ\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.hy );

return datepicker.regional.hy;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hy.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hy.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-hy.js");
    }
}
