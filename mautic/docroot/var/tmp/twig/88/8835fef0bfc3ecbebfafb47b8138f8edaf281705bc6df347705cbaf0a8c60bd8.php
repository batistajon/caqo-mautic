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

/* @bundles/CoreBundle/Views/Notification/notification_messages.html.php */
class __TwigTemplate_218a5ba6e42674c687a71b49ddc1a4b6dfebeba828770f7bea9a152bddd53165 extends Template
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

<?php if (!empty(\$updateMessage['message'])) : ?>
<div class=\"media pt-sm pb-sm pr-md pl-md nm bdr-b alert-mautic mautic-update\">
    <h4 class=\"pull-left\"><?php echo \$updateMessage['message']; ?></h4>
    <div class=\"pull-right\">
        <a class=\"btn btn-danger\" href=\"<?php echo \$view['router']->path('mautic_core_update'); ?>\" data-toggle=\"ajax\"><?php echo \$view['translator']->trans('mautic.core.update.now'); ?></a>
    </div>
    <div class=\"clearfix\"></div>
</div>
<?php endif; ?>
<?php foreach (\$notifications as \$n): ?>
    <?php echo \$view->render('MauticCoreBundle:Notification:notification.html.php', ['n' => \$n]); ?>
<?php endforeach; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Notification/notification_messages.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Notification/notification_messages.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Notification/notification_messages.html.php");
    }
}
