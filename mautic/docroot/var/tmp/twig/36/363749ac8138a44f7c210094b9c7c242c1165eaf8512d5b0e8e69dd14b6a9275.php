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

/* @bundles/CoreBundle/Views/RightPanel/index.html.php */
class __TwigTemplate_9c2db301b980a858944b8c944710fab9a03657b88c86742418f32f2e585bd2bf extends Template
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

\$view['canvas']->renderCanvasContent(\$view);
\$canvasContent = \$view['canvas']->getContent();
?>

<div class=\"offcanvas-container\" data-toggle=\"offcanvas\" data-options='{\"openerClass\":\"offcanvas-opener\", \"closerClass\":\"offcanvas-closer\"}'>
    <!-- START Wrapper -->
    <div class=\"offcanvas-wrapper\">
        <?php echo \$view->render('MauticCoreBundle:RightPanel:left.html.php', ['canvasContent' => \$canvasContent['left']]); ?>
        <?php echo \$view->render('MauticCoreBundle:RightPanel:main.html.php', [
            'canvasContent' => \$canvasContent['main'],
            'hasRight'      => !empty(\$canvasContent['right']),
            'hasLeft'       => !empty(\$canvasContent['left']),
        ]); ?>
        <?php echo \$view->render('MauticCoreBundle:RightPanel:right.html.php', ['canvasContent' => \$canvasContent['right']]); ?>
    </div>
    <!--/ END Wrapper -->
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/RightPanel/index.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/RightPanel/index.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/RightPanel/index.html.php");
    }
}
