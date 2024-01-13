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

/* @bundles/NotificationBundle/Views/FormTheme/Config/_config_notification_config_widget.html.php */
class __TwigTemplate_bbbf617542659592816217351573e30f21bf23940471c0e6b2f8777dd892c0d3 extends Template
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

declare(strict_types=1);

/*
 * @copyright   2021 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><?php echo \$view['translator']->trans('mautic.config.tab.campaign_notification_config'); ?></h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <?php echo \$view['form']->row(\$form['campaign_send_notification_to_author']); ?>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <?php echo \$view['form']->row(\$form['campaign_notification_email_addresses']); ?>
            </div>
        </div>
    </div>

    <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><?php echo \$view['translator']->trans('mautic.config.tab.webhook_notification_config'); ?></h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <?php echo \$view['form']->row(\$form['webhook_send_notification_to_author']); ?>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <?php echo \$view['form']->row(\$form['webhook_notification_email_addresses']); ?>
            </div>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Views/FormTheme/Config/_config_notification_config_widget.html.php";
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
        return new Source("", "@bundles/NotificationBundle/Views/FormTheme/Config/_config_notification_config_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Views/FormTheme/Config/_config_notification_config_widget.html.php");
    }
}
