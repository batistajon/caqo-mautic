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

/* @bundles/CoreBundle/Views/Slots/imagecaption.html.php */
class __TwigTemplate_dad6944b7392b88e950c813c55d1e088140a3e8d20b786437cd4c82cc7069f16 extends Template
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
<figure style=\"text-align:center;\">
    <img src=\"<?php echo \$view['assets']->getUrl('themes/blank.png', null, null, true); ?>\" alt=\"An image\"/>
    <figcaption style=\"line-height:16px;padding: 5px;color:#000;font-size:16px;text-align: left;\">Your image caption goes here. You can change the position of the caption and style in the customize slot tab.</figcaption>
</figure>
<div style=\"clear:both\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Slots/imagecaption.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Slots/imagecaption.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Slots/imagecaption.html.php");
    }
}
