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

/* @bundles/CoreBundle/Views/Menu/profile.html.php */
class __TwigTemplate_094a34892f9644e0dcd59dcc1a553dc908f3264bad3424f2ad46fc281fb89cfb extends Template
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

/** @var \\Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables \$app */
\$inline = \$view['menu']->render('profile');
?>
<li class=\"dropdown\">
    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <span class=\"img-wrapper img-rounded\" style=\"width:32px;\"><img src=\"<?php echo \$view['gravatar']->getImage(\$app->getUser()->getEmail()); ?>\"></span>
        <span class=\"text fw-sb ml-xs hidden-xs\"><?php echo \$app->getUser()->getName(); ?></span>
        <span class=\"caret ml-xs\"></span>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-right\">
        <li>
            <a href=\"<?php echo \$view['router']->path('mautic_user_account'); ?>\" data-toggle=\"ajax\">
                <i class=\"fa fa-user fs-14\"></i><span><?php echo \$view['translator']->trans('mautic.user.account.settings'); ?></span>
            </a>
        </li>
        <li>
            <a href=\"<?php echo \$view['router']->path('mautic_user_logout'); ?>\">
                <i class=\"fa fa-sign-out fs-14\"></i><span><?php echo \$view['translator']->trans('mautic.user.auth.logout'); ?></span>
            </a>
        </li>

        <?php if (!empty(\$inline)): ?>
        <li role=\"separator\" class=\"divider\"></li>
        <?php echo \$inline; ?>
        <?php endif; ?>
    </ul>
</li>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Menu/profile.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Menu/profile.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Menu/profile.html.php");
    }
}
