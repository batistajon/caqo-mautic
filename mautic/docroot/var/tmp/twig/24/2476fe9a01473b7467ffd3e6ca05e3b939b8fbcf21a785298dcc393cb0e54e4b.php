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

/* @bundles/InstallBundle/Views/Install/base.html.php */
class __TwigTemplate_d84a3f64db56482a924c4c46723292ab1ccf60b32795d3c28e83bca5c00a5132 extends Template
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
\$view['assets']->addScript('app/bundles/InstallBundle/Assets/install/install.js');
?>
<!DOCTYPE html>
<html>
    <?php echo \$view->render('MauticCoreBundle:Default:head.html.php'); ?>
    <body>
        <!-- start: app-wrapper -->
        <section id=\"app-wrapper\">
            <div class=\"container\">
                <div class=\"row mt-20\">
                    <div class=\"text-center\">
                        <img src=\"<?php echo \$view['assets']->getUrl('app/assets/images/mautic_logo_lb200.png'); ?>\" height=\"50px\" />
                        <h5 class=\"semibold text-muted mt-5\"><?php \$view['slots']->output('header', ''); ?></h5>
                    </div>

                    <div class=\"mt-20 col-lg-6 col-lg-offset-3\">
                        <div id=\"app-content\" class=\"panel panel-default\">
                            <?php \$view['slots']->output('_content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ end: app-content -->
    </body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Views/Install/base.html.php";
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
        return new Source("", "@bundles/InstallBundle/Views/Install/base.html.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Views/Install/base.html.php");
    }
}
