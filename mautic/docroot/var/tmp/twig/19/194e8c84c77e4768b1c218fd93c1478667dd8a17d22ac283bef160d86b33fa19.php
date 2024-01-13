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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fr-CH.js */
class __TwigTemplate_b0c7426a9e2c2299959c332176990a69c4fc783c8d54df2ee90a43db400e98e0 extends Template
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
        echo "/* Swiss-French initialisation for the jQuery UI date picker plugin. */
/* Written Martin Voelkle (martin.voelkle@e-tc.ch). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional[ \"fr-CH\" ] = {
\tcloseText: \"Fermer\",
\tprevText: \"&#x3C;Préc\",
\tnextText: \"Suiv&#x3E;\",
\tcurrentText: \"Courant\",
\tmonthNames: [ \"janvier\", \"février\", \"mars\", \"avril\", \"mai\", \"juin\",
\t\t\"juillet\", \"août\", \"septembre\", \"octobre\", \"novembre\", \"décembre\" ],
\tmonthNamesShort: [ \"janv.\", \"févr.\", \"mars\", \"avril\", \"mai\", \"juin\",
\t\t\"juil.\", \"août\", \"sept.\", \"oct.\", \"nov.\", \"déc.\" ],
\tdayNames: [ \"dimanche\", \"lundi\", \"mardi\", \"mercredi\", \"jeudi\", \"vendredi\", \"samedi\" ],
\tdayNamesShort: [ \"dim.\", \"lun.\", \"mar.\", \"mer.\", \"jeu.\", \"ven.\", \"sam.\" ],
\tdayNamesMin: [ \"D\", \"L\", \"M\", \"M\", \"J\", \"V\", \"S\" ],
\tweekHeader: \"Sm\",
\tdateFormat: \"dd.mm.yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional[ \"fr-CH\" ] );

return datepicker.regional[ \"fr-CH\" ];

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fr-CH.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fr-CH.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fr-CH.js");
    }
}
