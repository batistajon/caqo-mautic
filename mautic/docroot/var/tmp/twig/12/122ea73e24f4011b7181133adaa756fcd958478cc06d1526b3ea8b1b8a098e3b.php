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

/* @bundles/PageBundle/Views/FormTheme/Config/_config_trackingconfig_widget.html.php */
class __TwigTemplate_bb6b22dd050efa466ec615dfd1c601eec3dc95be51810437310b1d0b47b8f40d extends Template
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

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><?php echo \$view['translator']->trans('mautic.config.tab.pagetracking'); ?></h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"form-group\">
            <p><?php echo \$view['translator']->trans('mautic.config.tab.pagetracking.info'); ?></p>
            <pre>&lt;script&gt;
    (function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
        w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
        m=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
    })(window,document,'script','<?php echo \$view['router']->url('mautic_js'); ?>','mt');

    mt('send', 'pageview');
&lt;/script&gt;</pre>
        </div>
        <div class=\"row\">
            <?php foreach (\$form->children as \$name => \$f): ?>
                <?php if (in_array(\$name, ['anonymize_ip', 'track_contact_by_ip', 'track_by_tracking_url', 'do_not_track_404_anonymous'])) : ?>
                        <div class=\"col-md-6\">
                            <?php echo \$view['form']->row(\$f); ?>
                        </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><?php echo \$view['translator']->trans('mautic.config.tab.tracking.facebook.pixel'); ?></h3>
    </div>
    <div class=\"panel-body\">
        <?php echo \$view['form']->row(\$form['facebook_pixel_id']); ?>
        <div class=\"row\">
            <?php foreach (\$form->children as \$name => \$f): ?>
                <?php if (in_array(\$name, ['facebook_pixel_trackingpage_enabled', 'facebook_pixel_landingpage_enabled'])) : ?>
                    <div class=\"col-md-6\">
                        <?php echo \$view['form']->row(\$f); ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><?php echo \$view['translator']->trans('mautic.config.tab.tracking.google.analytics'); ?></h3>
    </div>
    <div class=\"panel-body\">
        <?php echo \$view['form']->row(\$form['google_analytics_id']); ?>
        <div class=\"row\">
            <?php foreach (\$form->children as \$name => \$f): ?>
                <?php if (in_array(\$name, ['google_analytics_trackingpage_enabled', 'google_analytics_landingpage_enabled', 'google_analytics_anonymize_ip'])) : ?>
                    <div class=\"col-md-6\">
                        <?php echo \$view['form']->row(\$f); ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
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
        return "@bundles/PageBundle/Views/FormTheme/Config/_config_trackingconfig_widget.html.php";
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
        return new Source("", "@bundles/PageBundle/Views/FormTheme/Config/_config_trackingconfig_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Views/FormTheme/Config/_config_trackingconfig_widget.html.php");
    }
}
