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

/* @bundles/CoreBundle/Views/Default/slim.html.php */
class __TwigTemplate_2d6b5e1f13f8183e936454b900d3c87236f215d35683a6b006f3168c552b5285 extends Template
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
<!DOCTYPE html>
<html>
    <?php echo \$view->render('MauticCoreBundle:Default:head.html.php'); ?>
    <body>
        <?php \$view['assets']->outputScripts('bodyOpen'); ?>
        <section id=\"app-content\" class=\"container content-only\">
            <?php echo \$view->render('MauticCoreBundle:Notification:flashes.html.php', ['alertType' => 'standard']); ?>
            <?php \$view['slots']->output('_content'); ?>
        </section>
        <?php echo \$view->render('MauticCoreBundle:Helper:modal.html.php', [
            'id'            => 'MauticSharedModal',
            'footerButtons' => true,
        ]); ?>
        <?php \$view['assets']->outputScripts('bodyClose'); ?>
        <script>
            Mautic.onPageLoad('body');
        </script>
    </body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Default/slim.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Default/slim.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Default/slim.html.php");
    }
}
