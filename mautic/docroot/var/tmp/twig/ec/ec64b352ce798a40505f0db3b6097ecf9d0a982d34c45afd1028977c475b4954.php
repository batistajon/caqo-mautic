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

/* @bundles/CoreBundle/Views/Slots/imagecard.html.php */
class __TwigTemplate_12a925ae3a8678062c0a1aa35a7c7455ddbd3abd7d97c6da7b59f0648effae8c extends Template
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

<table class=\"imagecard\" align=\"center\" style=\"background-color: #ddd;\">
    <tr><td class=\"imagecard-image\" align=\"center\"><img width=\"100%\" src=\"<?php echo \$view['assets']->getUrl('themes/blank-big.png', null, null, true); ?>\" alt=\"An image\"/></td></tr>
    <tr><td class=\"imagecard-caption\" style=\"line-height:16px;padding: 5px;background-color: #bbb;font-size:16px;color:#000\" align=\"center\">Your image caption goes here. You can change the position of the caption and style in the customize slot tab.</td></tr>
</table>
<div style=\"clear:both\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Slots/imagecard.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Slots/imagecard.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Slots/imagecard.html.php");
    }
}
