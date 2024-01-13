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

/* @bundles/NotificationBundle/Views/FormTheme/MobileNotification/mobile_notification_details_widget.html.php */
class __TwigTemplate_a7a8ba28da2df797a77fd22074ed2e2e72c29fe35d06730c96743a5dc5af4c17 extends Template
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
 * @copyright   2017 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<?php if (in_array('ios', \$integrationSettings['platforms'])) : ?>
    <div class=\"tab-pane fade in bdr-w-0\" id=\"ios-notification-container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <?php echo \$view['form']->row(\$form['ios_subtitle']); ?>
                <?php echo \$view['form']->row(\$form['ios_media']); ?>
            </div>
            <div class=\"col-md-6\">
                <div class=\"well\">
                    <h4><?php echo \$view['translator']->trans('Advanced Settings'); ?></h4>
                    <hr />
                    <?php echo \$view['form']->row(\$form['ios_badges']); ?>
                    <?php echo \$view['form']->row(\$form['ios_badgeCount']); ?>
                    <?php echo \$view['form']->row(\$form['ios_sound']); ?>
                    <?php echo \$view['form']->label(\$form['ios_contentAvailable']); ?>
                    <?php echo \$view['form']->row(\$form['ios_contentAvailable']); ?>
                    <?php echo \$view['form']->label(\$form['ios_mutableContent']); ?>
                    <?php echo \$view['form']->row(\$form['ios_mutableContent']); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if (in_array('android', \$integrationSettings['platforms'])) : ?>
    <div class=\"tab-pane fade in bdr-w-0\" id=\"android-notification-container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <?php echo \$view['form']->row(\$form['android_small_icon']); ?>
                <?php echo \$view['form']->row(\$form['android_large_icon']); ?>
                <?php echo \$view['form']->row(\$form['android_big_picture']); ?>
            </div>
            <div class=\"col-md-6\">
                <div class=\"well\">
                    <h4><?php echo \$view['translator']->trans('Advanced Settings'); ?></h4>
                    <hr />
                    <?php echo \$view['form']->row(\$form['android_sound']); ?>
                    <?php echo \$view['form']->row(\$form['android_group_key']); ?>
                    <?php echo \$view['form']->row(\$form['android_led_color']); ?>
                    <?php echo \$view['form']->row(\$form['android_accent_color']); ?>
                    <?php echo \$view['form']->row(\$form['android_lockscreen_visibility']); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Views/FormTheme/MobileNotification/mobile_notification_details_widget.html.php";
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
        return new Source("", "@bundles/NotificationBundle/Views/FormTheme/MobileNotification/mobile_notification_details_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Views/FormTheme/MobileNotification/mobile_notification_details_widget.html.php");
    }
}
