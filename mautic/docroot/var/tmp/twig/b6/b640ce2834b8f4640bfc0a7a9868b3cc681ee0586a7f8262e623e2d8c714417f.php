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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ka.js */
class __TwigTemplate_5da12025f3b4b77424c86345958479c2b2db1e72e6bfe83135d92984bc6de689 extends Template
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
        echo "/* Georgian (UTF-8) initialisation for the jQuery UI date picker plugin. */
/* Written by Lado Lomidze (lado.lomidze@gmail.com). */
( function( factory ) {
\tif ( typeof define === \"function\" && define.amd ) {

\t\t// AMD. Register as an anonymous module.
\t\tdefine( [ \"../widgets/datepicker\" ], factory );
\t} else {

\t\t// Browser globals
\t\tfactory( jQuery.datepicker );
\t}
}( function( datepicker ) {

datepicker.regional.ka = {
\tcloseText: \"დახურვა\",
\tprevText: \"&#x3c; წინა\",
\tnextText: \"შემდეგი &#x3e;\",
\tcurrentText: \"დღეს\",
\tmonthNames: [
\t\t\"იანვარი\",
\t\t\"თებერვალი\",
\t\t\"მარტი\",
\t\t\"აპრილი\",
\t\t\"მაისი\",
\t\t\"ივნისი\",
\t\t\"ივლისი\",
\t\t\"აგვისტო\",
\t\t\"სექტემბერი\",
\t\t\"ოქტომბერი\",
\t\t\"ნოემბერი\",
\t\t\"დეკემბერი\"
\t],
\tmonthNamesShort: [ \"იან\",\"თებ\",\"მარ\",\"აპრ\",\"მაი\",\"ივნ\", \"ივლ\",\"აგვ\",\"სექ\",\"ოქტ\",\"ნოე\",\"დეკ\" ],
\tdayNames: [ \"კვირა\",\"ორშაბათი\",\"სამშაბათი\",\"ოთხშაბათი\",\"ხუთშაბათი\",\"პარასკევი\",\"შაბათი\" ],
\tdayNamesShort: [ \"კვ\",\"ორშ\",\"სამ\",\"ოთხ\",\"ხუთ\",\"პარ\",\"შაბ\" ],
\tdayNamesMin: [ \"კვ\",\"ორშ\",\"სამ\",\"ოთხ\",\"ხუთ\",\"პარ\",\"შაბ\" ],
\tweekHeader: \"კვირა\",
\tdateFormat: \"dd-mm-yy\",
\tfirstDay: 1,
\tisRTL: false,
\tshowMonthAfterYear: false,
\tyearSuffix: \"\" };
datepicker.setDefaults( datepicker.regional.ka );

return datepicker.regional.ka;

} ) );
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ka.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ka.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/i18n/datepicker-ka.js");
    }
}
