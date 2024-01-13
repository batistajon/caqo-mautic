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

/* @bundles/CoreBundle/Views/RightPanel/left.html.php */
class __TwigTemplate_f91b0069beff39e82d6eec5470ce2a852276862a81f5abc2c23978c22d76a524 extends Template
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

<div class=\"offcanvas-left\" id=\"OffCanvasLeft\">
    <?php if (\$canvasContent): ?>
        <?php echo \$view->render('MauticCoreBundle:RightPanel:content.html.php', ['canvasContent' => \$canvasContent, 'canvas' => 'Left']); ?>
    <?php endif; ?>
</div>
<!--/ Offcanvas Left -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/RightPanel/left.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/RightPanel/left.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/RightPanel/left.html.php");
    }
}
