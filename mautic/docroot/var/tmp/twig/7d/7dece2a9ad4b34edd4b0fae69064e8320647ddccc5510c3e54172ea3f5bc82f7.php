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

/* @bundles/InstallBundle/Views/Install/final.html.php */
class __TwigTemplate_5e1693615f988e8d773c69078ab43eeedf42f8ade9bc22e43a1c5ab680a64f2e extends Template
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
if ('index' == \$tmpl) {
    \$view->extend('MauticInstallBundle:Install:content.html.php');
}
?>

<div class=\"panel-heading\">
    <h2 class=\"panel-title\">
        <?php echo \$view['translator']->trans('mautic.install.heading.final'); ?>
    </h2>
</div>
<div class=\"panel-body text-center\">
    <div><i class=\"fa fa-check fa-5x mb-20 text-success\"></i></div>
    <h4 class=\"mb-3\"><?php echo \$view['translator']->trans('mautic.install.heading.finished'); ?></h4>
    <h5><?php echo \$view['translator']->trans('mautic.install.heading.configured'); ?></h5>
    <?php if (\$welcome_url) : ?>
        <a href=\"<?php echo \$welcome_url; ?>\" role=\"button\" class=\"btn btn-primary mt-20\">
            <?php echo \$view['translator']->trans('mautic.install.sentence.proceed.to.mautic'); ?>
        </a>
    <?php endif; ?>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Views/Install/final.html.php";
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
        return new Source("", "@bundles/InstallBundle/Views/Install/final.html.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Views/Install/final.html.php");
    }
}
