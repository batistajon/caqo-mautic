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

/* @bundles/CoreBundle/Views/Sections/three-column.html.php */
class __TwigTemplate_bb6dbd87fb61305927ece7bdf217b0a063463438e980023b40acec14d6d441af extends Template
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
        echo "<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>
<div data-section-wrapper=\"1\">
    <center>
        <table data-section=\"1\" style=\"margin: 0 auto;border-collapse: collapse !important;width: 600px;\" class=\"w320\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\">
            <tr>
                <td align=\"center\" valign=\"top\">
                    <table align=\"left\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"200\" class=\"mobile-block\">
                        <tr>
                            <td data-slot-container=\"1\" valign=\"top\" style=\"padding-left: 5px; padding-right: 5px;\">
                                <div data-slot=\"text\">
                                    <p>Lorem ipsum dolor sit amet, alterum definitiones eu est. Eos no scripta voluptatum necessitatibus, ea his case movet. Porro vivendo delicatissimi ea qui, in usu aliquam consulatu conclusionemque. Eu vel mazim periculis consequat, quo fastidii salutandi eu, et sed nibh exerci consequuntur. Cu diam efficiendi eum, pri eu delenit insolens. Usu nihil oporteat an, et stet mucius vix, ex nostro assueverit mel.</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table align=\"left\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"200\" class=\"mobile-block\">
                        <tr>
                            <td data-slot-container=\"1\" valign=\"top\" style=\"padding-left: 5px; padding-right: 5px;\">
                                <div data-slot=\"text\">
                                    <p>Lorem ipsum dolor sit amet, alterum definitiones eu est. Eos no scripta voluptatum necessitatibus, ea his case movet. Porro vivendo delicatissimi ea qui, in usu aliquam consulatu conclusionemque. Eu vel mazim periculis consequat, quo fastidii salutandi eu, et sed nibh exerci consequuntur. Cu diam efficiendi eum, pri eu delenit insolens. Usu nihil oporteat an, et stet mucius vix, ex nostro assueverit mel.</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table align=\"right\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"200\" class=\"mobile-block\">
                        <tr>
                            <td data-slot-container=\"1\" valign=\"top\" style=\"padding-left: 5px; padding-right: 5px;\">
                                <div data-slot=\"text\">
                                    <p>Lorem ipsum dolor sit amet, alterum definitiones eu est. Eos no scripta voluptatum necessitatibus, ea his case movet. Porro vivendo delicatissimi ea qui, in usu aliquam consulatu conclusionemque. Eu vel mazim periculis consequat, quo fastidii salutandi eu, et sed nibh exerci consequuntur. Cu diam efficiendi eum, pri eu delenit insolens. Usu nihil oporteat an, et stet mucius vix, ex nostro assueverit mel.</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </center>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Sections/three-column.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Sections/three-column.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Sections/three-column.html.php");
    }
}
