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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fr.js */
class __TwigTemplate_7e37ccbc2a234c3d71ff0c1bdfe93d13382b8cee8894d213985cb4da7b26fcd6 extends Template
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
        echo "/* French initialisation for the jQuery UI date picker plugin. */
/* Written by Keith Wood (kbwood{at}iinet.com.au),
\t\t\t  Stéphane Nahmani (sholby@sholby.net),
\t\t\t  Stéphane Raimbault <stephane.raimbault@gmail.com> */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.fr = {
\tcloseText: \"Fermer\",
\tprevText: \"Précédent\",
\tnextText: \"Suivant\",
\tcurrentText: \"Aujourd'hui\",
\tmonthNames: [ \"janvier\", \"février\", \"mars\", \"avril\", \"mai\", \"juin\",
\t\t\"juillet\", \"août\", \"septembre\", \"octobre\", \"novembre\", \"décembre\" ],
\tmonthNamesShort: [ \"janv.\", \"févr.\", \"mars\", \"avr.\", \"mai\", \"juin\",
\t\t\"juil.\", \"août\", \"sept.\", \"oct.\", \"nov.\", \"déc.\" ],
\tdayNames: [ \"dimanche\", \"lundi\", \"mardi\", \"mercredi\", \"jeudi\", \"vendredi\", \"samedi\" ],
\tdayNamesShort: [ \"dim.\", \"lun.\", \"mar.\", \"mer.\", \"jeu.\", \"ven.\", \"sam.\" ],
\tdayNamesMin: [ \"D\",\"L\",\"M\",\"M\",\"J\",\"V\",\"S\" ],
\tweekHeader: \"Sem.\",
\tdateFormat: \"dd/mm/yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.fr );

return datepicker.regional.fr;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fr.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fr.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-fr.js");
    }
}
