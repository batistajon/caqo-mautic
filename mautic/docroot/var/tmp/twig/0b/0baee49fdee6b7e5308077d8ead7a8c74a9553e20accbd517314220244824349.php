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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-nl-BE.js */
class __TwigTemplate_06182673bc547a197e924c88db0f56f50afa72a991737b25111867c5628c3aad extends Template
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
        echo "/* Dutch (Belgium) initialisation for the jQuery UI date picker plugin. */
/* David De Sloovere @DavidDeSloovere */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional[ \"nl-BE\" ] = {
\tcloseText: \"Sluiten\",
\tprevText: \"←\",
\tnextText: \"→\",
\tcurrentText: \"Vandaag\",
\tmonthNames: [ \"januari\", \"februari\", \"maart\", \"april\", \"mei\", \"juni\",
\t\"juli\", \"augustus\", \"september\", \"oktober\", \"november\", \"december\" ],
\tmonthNamesShort: [ \"jan\", \"feb\", \"mrt\", \"apr\", \"mei\", \"jun\",
\t\"jul\", \"aug\", \"sep\", \"okt\", \"nov\", \"dec\" ],
\tdayNames: [ \"zondag\", \"maandag\", \"dinsdag\", \"woensdag\", \"donderdag\", \"vrijdag\", \"zaterdag\" ],
\tdayNamesShort: [ \"zon\", \"maa\", \"din\", \"woe\", \"don\", \"vri\", \"zat\" ],
\tdayNamesMin: [ \"zo\", \"ma\", \"di\", \"wo\", \"do\", \"vr\", \"za\" ],
\tweekHeader: \"Wk\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional[ \"nl-BE\" ] );

return datepicker.regional[ \"nl-BE\" ];

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-nl-BE.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-nl-BE.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-nl-BE.js");
    }
}
