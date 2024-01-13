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

/* @bundles/NotificationBundle/Views/Notification/form.html.php */
class __TwigTemplate_cc112f1d87dae574ad1cac4391f41bf544902f5e97a214b15aa12a1f1d0ff344 extends Template
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
\$view['slots']->set('mauticContent', 'notification');

\$header = (\$notification->getId()) ?
    \$view['translator']->trans('mautic.notification.header.edit',
        ['%name%' => \$notification->getName()]) :
    \$view['translator']->trans('mautic.notification.header.new');

\$view['slots']->set('headerTitle', \$header);

?>

<?php echo \$view['form']->start(\$form); ?>
<div class=\"box-layout\">
    <div class=\"col-md-9 height-auto bg-white\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <!-- tabs controls -->
                <!--/ tabs controls -->
                <div class=\"tab-content pa-md\">
                    <div class=\"tab-pane fade in active bdr-w-0\" id=\"notification-container\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <?php echo \$view['form']->row(\$form['name']); ?>
                                <?php echo \$view['form']->row(\$form['heading']); ?>
                                <?php echo \$view['form']->row(\$form['message']); ?>
                                <?php echo \$view['form']->row(\$form['url']); ?>
                                <?php echo \$view['form']->row(\$form['button']); ?>
                            </div>
                            <div class=\"col-md-6\">
                                <?php include 'preview.html.php'; ?>
                            </div>
                        </div>
                    </div>
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
        return "@bundles/NotificationBundle/Views/Notification/form.html.php";
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
        return new Source("", "@bundles/NotificationBundle/Views/Notification/form.html.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Views/Notification/form.html.php");
    }
}
