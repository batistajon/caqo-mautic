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

/* @bundles/CoreBundle/Views/RightPanel/main.html.php */
class __TwigTemplate_3f7d01d4ce374a116dae51ac1842f32007917b6ba04ed44d6a6984eb3c59e77b extends Template
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

<div class=\"offcanvas-main\" id=\"OffCanvasMain\">
    <?php if (\$canvasContent): ?>
    <?php echo \$view->render('MauticCoreBundle:RightPanel:content.html.php', ['canvasContent' => \$canvasContent, 'canvas' => 'Main', 'hasLeft' => \$hasLeft, 'hasRight' => \$hasRight]); ?>
    <?php endif; ?>
</div>
<!--/ Offcanvas Main -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/RightPanel/main.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/RightPanel/main.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/RightPanel/main.html.php");
    }
}
