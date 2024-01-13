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

/* @bundles/ApiBundle/Views/Security/login.html.php */
class __TwigTemplate_c970d4dc90b2a3e26ecd5ced6f9f37afab3b2064a8127180a784c1d36f9c9b39 extends Template
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
\$view->extend('MauticUserBundle:Security:base.html.php');
\$view['slots']->set('header', \$view['translator']->trans('mautic.api.oauth.header'));
?>

<form class=\"form-group login-form\" name=\"login\" data-toggle=\"ajax\" role=\"form\" action=\"<?php echo \$view['router']->path(\$route); ?>\" method=\"post\">
    <div class=\"input-group mb-md\">

        <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
        <label for=\"username\" class=\"sr-only\"><?php echo \$view['translator']->trans('mautic.user.auth.form.loginusername'); ?></label>
        <input type=\"text\" id=\"username\" name=\"_username\"
               class=\"form-control input-lg\" value=\"<?php echo \$view->escape(\$last_username); ?>\" required autofocus
               placeholder=\"<?php echo \$view['translator']->trans('mautic.user.auth.form.loginusername'); ?>\" />
    </div>
    <div class=\"input-group mb-md\">
        <span class=\"input-group-addon\"><i class=\"fa fa-key\"></i></span>
        <label for=\"password\" class=\"sr-only\"><?php echo \$view['translator']->trans('mautic.core.password'); ?>:</label>
        <input type=\"password\" id=\"password\" name=\"_password\"
               class=\"form-control input-lg\" required
               placeholder=\"<?php echo \$view['translator']->trans('mautic.core.password'); ?>\" />
    </div>

    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\"><?php echo \$view['translator']->trans('mautic.user.auth.form.loginbtn'); ?></button>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Views/Security/login.html.php";
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
        return new Source("", "@bundles/ApiBundle/Views/Security/login.html.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Views/Security/login.html.php");
    }
}
