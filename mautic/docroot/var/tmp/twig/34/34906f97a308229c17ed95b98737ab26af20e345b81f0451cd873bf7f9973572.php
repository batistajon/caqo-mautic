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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-en-NZ.js */
class __TwigTemplate_7554ad9d4ca4b804537135a0007750eec8aced7ca3c449e0795b62f92818f931 extends Template
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
        echo "/* English/New Zealand initialisation for the jQuery UI date picker plugin. */
/* Based on the en-GB initialisation. */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional[ \"en-NZ\" ] = {
\tcloseText: \"Done\",
\tprevText: \"Prev\",
\tnextText: \"Next\",
\tcurrentText: \"Today\",
\tmonthNames: [ \"January\",\"February\",\"March\",\"April\",\"May\",\"June\",
\t\"July\",\"August\",\"September\",\"October\",\"November\",\"December\" ],
\tmonthNamesShort: [ \"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\",
\t\"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\" ],
\tdayNames: [ \"Sunday\", \"Monday\", \"Tuesday\", \"Wednesday\", \"Thursday\", \"Friday\", \"Saturday\" ],
\tdayNamesShort: [ \"Sun\", \"Mon\", \"Tue\", \"Wed\", \"Thu\", \"Fri\", \"Sat\" ],
\tdayNamesMin: [ \"Su\",\"Mo\",\"Tu\",\"We\",\"Th\",\"Fr\",\"Sa\" ],
\tweekHeader: \"Wk\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional[ \"en-NZ\" ] );

return datepicker.regional[ \"en-NZ\" ];

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-en-NZ.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-en-NZ.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-en-NZ.js");
    }
}
