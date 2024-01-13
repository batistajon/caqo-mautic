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

/* @bundles/NotificationBundle/Views/MobileNotification/form.html.php */
class __TwigTemplate_3fc8a29aa12067a0216a07366e6a8065c1d050e4f2d1b3e271cf91e2e2f0bfb1 extends Template
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
\$view->extend('MauticCoreBundle:Default:content.html.php');
\$view['slots']->set('mauticContent', 'mobile_notification');

\$header = (\$notification->getId()) ?
    \$view['translator']->trans('mautic.notification.mobile.header.edit',
        ['%name%' => \$notification->getName()]) :
    \$view['translator']->trans('mautic.notification.mobile.header.new');

\$view['slots']->set('headerTitle', \$header);

/** @var \\Mautic\\NotificationBundle\\Integration\\OneSignalIntegration \$integration */
\$integrationSettings = \$integration->getIntegrationSettings()->getFeatureSettings();
?>

<?php echo \$view['form']->start(\$form); ?>
<div class=\"box-layout\">
    <div class=\"col-md-9 height-auto bg-white\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <!-- tabs controls -->
                <ul class=\"bg-auto nav nav-tabs pr-md pl-md\">
                    <li class=\"active\">
                        <a href=\"#notification-container\" role=\"tab\" data-toggle=\"tab\">
                            <?php echo \$view['translator']->trans('mautic.core.details'); ?>
                        </a>
                    </li>
                    <li>
                        <a href=\"#data-notification-container\" role=\"tab\" data-toggle=\"tab\">
                            <?php echo \$view['translator']->trans('mautic.notification.tab.data'); ?>
                        </a>
                    </li>
                    <?php if (in_array('ios', \$integrationSettings['platforms'])) : ?>
                        <li>
                            <a href=\"#ios-notification-container\" role=\"tab\" data-toggle=\"tab\">
                                <?php echo \$view['translator']->trans('mautic.notification.tab.ios'); ?>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (in_array('android', \$integrationSettings['platforms'])) : ?>
                        <li>
                            <a href=\"#android-notification-container\" role=\"tab\" data-toggle=\"tab\">
                                <?php echo \$view['translator']->trans('mautic.notification.tab.android'); ?>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
                <!--/ tabs controls -->
                <div class=\"tab-content pa-md\">
                    <div class=\"tab-pane fade in active bdr-w-0\" id=\"notification-container\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <?php echo \$view['form']->row(\$form['name']); ?>
                                <?php echo \$view['form']->row(\$form['heading']); ?>
                                <?php echo \$view['form']->row(\$form['url']); ?>
                            </div>
                            <div class=\"col-md-6\">
                                <?php echo \$view['form']->row(\$form['message']); ?>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade in bdr-w-0\" id=\"data-notification-container\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <?php echo \$view['form']->row(\$form['mobileSettings']['additional_data']); ?>
                            </div>
                        </div>
                    </div>
                    <?php echo \$view['form']->widget(\$form['mobileSettings'], ['integrationSettings' => \$integrationSettings]); ?>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-3 bg-white height-auto bdr-l\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            <?php echo \$view['form']->row(\$form['category']); ?>
            <?php echo \$view['form']->row(\$form['language']); ?>

            <hr />
            <h5><?php echo \$view['translator']->trans('mautic.email.utm_tags'); ?></h5>
            <br />
            <?php
            foreach (\$form['utmTags'] as \$i => \$utmTag):
                echo \$view['form']->row(\$utmTag);
            endforeach;
            ?>
            <div class=\"hide\">
                <?php echo \$view['form']->row(\$form['isPublished']); ?>
                <?php echo \$view['form']->row(\$form['publishUp']); ?>
                <?php echo \$view['form']->row(\$form['publishDown']); ?>
                <?php echo \$view['form']->rest(\$form); ?>
            </div>
        </div>
    </div>
</div>
<?php echo \$view['form']->end(\$form); ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Views/MobileNotification/form.html.php";
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
        return new Source("", "@bundles/NotificationBundle/Views/MobileNotification/form.html.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Views/MobileNotification/form.html.php");
    }
}
