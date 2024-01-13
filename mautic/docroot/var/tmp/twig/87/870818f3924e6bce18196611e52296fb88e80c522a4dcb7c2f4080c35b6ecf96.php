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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fr-CA.js */
class __TwigTemplate_dd75bdc4ea55ad71cf0d4999069d98d00de110c0ffb5bb6417e325ca12cd5223 extends Template
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
        echo "/* Canadian-French initialisation for the jQuery UI date picker plugin. */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional[ \"fr-CA\" ] = {
\tcloseText: \"Fermer\",
\tprevText: \"Précédent\",
\tnextText: \"Suivant\",
\tcurrentText: \"Aujourd'hui\",
\tmonthNames: [ \"janvier\", \"février\", \"mars\", \"avril\", \"mai\", \"juin\",
\t\t\"juillet\", \"août\", \"septembre\", \"octobre\", \"novembre\", \"décembre\" ],
\tmonthNamesShort: [ \"janv.\", \"févr.\", \"mars\", \"avril\", \"mai\", \"juin\",
\t\t\"juil.\", \"août\", \"sept.\", \"oct.\", \"nov.\", \"déc.\" ],
\tdayNames: [ \"dimanche\", \"lundi\", \"mardi\", \"mercredi\", \"jeudi\", \"vendredi\", \"samedi\" ],
\tdayNamesShort: [ \"dim.\", \"lun.\", \"mar.\", \"mer.\", \"jeu.\", \"ven.\", \"sam.\" ],
\tdayNamesMin: [ \"D\", \"L\", \"M\", \"M\", \"J\", \"V\", \"S\" ],
\tweekHeader: \"Sem.\",
\tdateFormat: \"yy-mm-dd\",
\tfirstDay: 0,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\"
};
datepicker.setDefaults( datepicker.regional[ \"fr-CA\" ] );

return datepicker.regional[ \"fr-CA\" ];

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fr-CA.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fr-CA.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fr-CA.js");
    }
}
