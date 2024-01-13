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

/* @bundles/LeadBundle/Views/Lead/dnc_small.html.php */
class __TwigTemplate_92ec78407435e891f1d55f6900867167c286489ea4b8ef6cdc370b04e947083d extends Template
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
 * @copyright   2010 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<?php foreach (\$dncList as \$channnel => \$reason):
    \$dncTitle = \$view['translator']->trans('mautic.lead.event.donotcontact_channel', ['%channel%' => \$channnel]);
    ?>
    <span class=\"label label-danger\">
    <i title=\"<?php echo \$dncTitle; ?>\" class=\"fa fa-ban ico-<?php echo \$channnel; ?>\"> </i>
   </span>
<?php endforeach; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Lead/dnc_small.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Lead/dnc_small.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Lead/dnc_small.html.php");
    }
}
