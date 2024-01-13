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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-km.js */
class __TwigTemplate_0bec75545d67186ebd6395ca71b26d027c32bcd176e7a151a65f8499f9c9b5f7 extends Template
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
        echo "/* Khmer initialisation for the jQuery calendar extension. */
/* Written by Chandara Om (chandara.teacher@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.km = {
\tcloseText: \"ធ្វើ​រួច\",
\tprevText: \"មុន\",
\tnextText: \"បន្ទាប់\",
\tcurrentText: \"ថ្ងៃ​នេះ\",
\tmonthNames: [ \"មករា\",\"កុម្ភៈ\",\"មីនា\",\"មេសា\",\"ឧសភា\",\"មិថុនា\",
\t\"កក្កដា\",\"សីហា\",\"កញ្ញា\",\"តុលា\",\"វិច្ឆិកា\",\"ធ្នូ\" ],
\tmonthNamesShort: [ \"មករា\",\"កុម្ភៈ\",\"មីនា\",\"មេសា\",\"ឧសភា\",\"មិថុនា\",
\t\"កក្កដា\",\"សីហា\",\"កញ្ញា\",\"តុលា\",\"វិច្ឆិកា\",\"ធ្នូ\" ],
\tdayNames: [ \"អាទិត្យ\", \"ចន្ទ\", \"អង្គារ\", \"ពុធ\", \"ព្រហស្បតិ៍\", \"សុក្រ\", \"សៅរ៍\" ],
\tdayNamesShort: [ \"អា\", \"ច\", \"អ\", \"ពុ\", \"ព្រហ\", \"សុ\", \"សៅ\" ],
\tdayNamesMin: [ \"អា\", \"ច\", \"អ\", \"ពុ\", \"ព្រហ\", \"សុ\", \"សៅ\" ],
\tweekHeader: \"សប្ដាហ៍\",
\tdateFormat: \"dd-mm-yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.km );

return datepicker.regional.km;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-km.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-km.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-km.js");
    }
}
