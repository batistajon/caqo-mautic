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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sk.js */
class __TwigTemplate_2c17db3f0417766e4935ff55fcc61755d189aed85820c9182751bc721a60ddee extends Template
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
        echo "/* Slovak initialisation for the jQuery UI date picker plugin. */
/* Written by Vojtech Rinik (vojto@hmm.sk). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.sk = {
\tcloseText: \"Zavrieť\",
\tprevText: \"&#x3C;Predchádzajúci\",
\tnextText: \"Nasledujúci&#x3E;\",
\tcurrentText: \"Dnes\",
\tmonthNames: [ \"január\",\"február\",\"marec\",\"apríl\",\"máj\",\"jún\",
\t\"júl\",\"august\",\"september\",\"október\",\"november\",\"december\" ],
\tmonthNamesShort: [ \"Jan\",\"Feb\",\"Mar\",\"Apr\",\"Máj\",\"Jún\",
\t\"Júl\",\"Aug\",\"Sep\",\"Okt\",\"Nov\",\"Dec\" ],
\tdayNames: [ \"nedeľa\",\"pondelok\",\"utorok\",\"streda\",\"štvrtok\",\"piatok\",\"sobota\" ],
\tdayNamesShort: [ \"Ned\",\"Pon\",\"Uto\",\"Str\",\"Štv\",\"Pia\",\"Sob\" ],
\tdayNamesMin: [ \"Ne\",\"Po\",\"Ut\",\"St\",\"Št\",\"Pia\",\"So\" ],
\tweekHeader: \"Ty\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.sk );

return datepicker.regional.sk;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sk.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sk.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-sk.js");
    }
}
