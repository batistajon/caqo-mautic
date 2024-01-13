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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-nn.js */
class __TwigTemplate_ec943d602235e1f7d0f189c26453b84cc09785a5261255d883a3b8eddeeeda10 extends Template
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
        echo "/* Norwegian Nynorsk initialisation for the jQuery UI date picker plugin. */
/* Written by Bjørn Johansen (post@bjornjohansen.no). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.nn = {
\tcloseText: \"Lukk\",
\tprevText: \"&#xAB;Førre\",
\tnextText: \"Neste&#xBB;\",
\tcurrentText: \"I dag\",
\tmonthNames: [
\t\t\"januar\",
\t\t\"februar\",
\t\t\"mars\",
\t\t\"april\",
\t\t\"mai\",
\t\t\"juni\",
\t\t\"juli\",
\t\t\"august\",
\t\t\"september\",
\t\t\"oktober\",
\t\t\"november\",
\t\t\"desember\"
\t],
\tmonthNamesShort: [ \"jan\",\"feb\",\"mar\",\"apr\",\"mai\",\"jun\",\"jul\",\"aug\",\"sep\",\"okt\",\"nov\",\"des\" ],
\tdayNamesShort: [ \"sun\",\"mån\",\"tys\",\"ons\",\"tor\",\"fre\",\"lau\" ],
\tdayNames: [ \"sundag\",\"måndag\",\"tysdag\",\"onsdag\",\"torsdag\",\"fredag\",\"laurdag\" ],
\tdayNamesMin: [ \"su\",\"må\",\"ty\",\"on\",\"to\",\"fr\",\"la\" ],
\tweekHeader: \"Veke\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\"
};
datepicker.setDefaults( datepicker.regional.nn );

return datepicker.regional.nn;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-nn.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-nn.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-nn.js");
    }
}
