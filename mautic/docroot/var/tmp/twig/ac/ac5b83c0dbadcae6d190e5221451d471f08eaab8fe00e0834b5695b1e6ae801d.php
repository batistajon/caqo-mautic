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

/* @bundles/UserBundle/Views/SubscribedEvents/Search/global_user.html.php */
class __TwigTemplate_8f2b24ae3401ab9fee9fefa26ffafc96e6d3274148e059f27278a8025a8bf94f extends Template
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

<?php if (!empty(\$showMore)): ?>
<a href=\"<?php echo \$view['router']->url('mautic_user_index', ['filter-user' => \$searchString]); ?>\" data-toggle=\"ajax\">
    <span><?php echo \$view['translator']->trans('mautic.core.search.more', ['%count%' => \$remaining]); ?></span>
</a>
<?php else: ?>
<div>
    <span class=\"pull-left pr-xs pt-xs\" style=\"width:36px\">
        <span class=\"img-wrapper img-rounded\"><img src=\"<?php echo \$view['gravatar']->getImage(\$user->getEmail(), '100'); ?>\" /></span>
    </span>
    <?php if (\$canEdit): ?>
    <a href=\"<?php echo \$view['router']->url('mautic_user_action', ['objectAction' => 'edit', 'objectId' => \$user->getId()]); ?>\" data-toggle=\"ajax\">
        <?php echo \$user->getName(true); ?>
    </a>
    <?php else: ?>
        <?php echo \$user->getName(true); ?>
    <?php endif; ?>

    <div><small><?php echo \$user->getPosition(); ?></small></div>
    <div class=\"clearfix\"></div>
</div>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Views/SubscribedEvents/Search/global_user.html.php";
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
        return new Source("", "@bundles/UserBundle/Views/SubscribedEvents/Search/global_user.html.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Views/SubscribedEvents/Search/global_user.html.php");
    }
}
