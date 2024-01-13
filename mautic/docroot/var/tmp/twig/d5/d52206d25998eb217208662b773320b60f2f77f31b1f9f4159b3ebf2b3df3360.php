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

/* @bundles/UserBundle/Views/Security/resetconfirm.html.php */
class __TwigTemplate_7da4a56a63243f3cc512eda973fbc0e305e11a10e275f390bd3f422d6d62e299 extends Template
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
if (!\$app->getRequest()->isXmlHttpRequest()) {
    \$view->extend('MauticUserBundle:Security:base.html.php');
} else {
    \$view->extend('MauticUserBundle:Security:ajax.html.php');
}
?>

<div class=\"alert alert-warning\"><?php echo \$view['translator']->trans('mautic.user.user.passwordresetconfirm.info'); ?></div>
<?php
echo \$view['form']->start(\$form);
echo \$view['form']->row(\$form['identifier']);
echo \$view['form']->row(\$form['plainPassword']['password']);
echo \$view['form']->row(\$form['plainPassword']['confirm']);
echo \$view['form']->widget(\$form['submit']);
echo \$view['form']->end(\$form);
?>

<div class=\"mt-sm\">
    <a href=\"<?php echo \$view['router']->path('login'); ?>\"><?php echo \$view['translator']->trans('mautic.user.user.passwordreset.back'); ?></a>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Views/Security/resetconfirm.html.php";
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
        return new Source("", "@bundles/UserBundle/Views/Security/resetconfirm.html.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Views/Security/resetconfirm.html.php");
    }
}
