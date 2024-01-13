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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sl.js */
class __TwigTemplate_90cb0371f81fc7b473a1f3c9bef5761ebcbed2d2df58b2fd1dcf3a0ae4fdd836 extends Template
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
        echo "/* Slovenian initialisation for the jQuery UI date picker plugin. */
/* Written by Jaka Jancar (jaka@kubje.org). */
/* c = č, s = š z = ž C = Č S = Š Z = Ž */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.sl = {
\tcloseText: \"Zapri\",
\tprevText: \"&#x3C;Prejšnji\",
\tnextText: \"Naslednji&#x3E;\",
\tcurrentText: \"Trenutni\",
\tmonthNames: [ \"Januar\",\"Februar\",\"Marec\",\"April\",\"Maj\",\"Junij\",
\t\"Julij\",\"Avgust\",\"September\",\"Oktober\",\"November\",\"December\" ],
\tmonthNamesShort: [ \"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Maj\",\"Jun\",
\t\"Jul\",\"Avg\",\"Sep\",\"Okt\",\"Nov\",\"Dec\" ],
\tdayNames: [ \"Nedelja\",\"Ponedeljek\",\"Torek\",\"Sreda\",\"Četrtek\",\"Petek\",\"Sobota\" ],
\tdayNamesShort: [ \"Ned\",\"Pon\",\"Tor\",\"Sre\",\"Čet\",\"Pet\",\"Sob\" ],
\tdayNamesMin: [ \"Ne\",\"Po\",\"To\",\"Sr\",\"Če\",\"Pe\",\"So\" ],
\tweekHeader: \"Teden\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.sl );

return datepicker.regional.sl;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sl.js");
    }
}
