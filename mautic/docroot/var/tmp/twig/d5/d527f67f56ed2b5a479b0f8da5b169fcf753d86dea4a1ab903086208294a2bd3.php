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

/* @bundles/CampaignBundle/Views/Campaign/form.html.php */
class __TwigTemplate_aa741612ca43ca0df306698479c61010fdea423af9079bf7c3d0525a0926dbb5 extends Template
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

\$header = (\$entity->getId()) ?
    \$view['translator']->trans('mautic.campaign.menu.edit',
        ['%name%' => \$view['translator']->trans(\$entity->getName())]) :
    \$view['translator']->trans('mautic.campaign.menu.new');
\$view['slots']->set('headerTitle', \$header);
?>

<?php echo \$view['form']->start(\$form); ?>
<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- container -->
    <div class=\"col-md-9 bg-auto height-auto bdr-r\">
        <div class=\"pa-md\">
            <?php if (\$entity->getId() && \$entity->isPublished()): ?>
                <div class=\"alert alert-danger\"><p><?php echo \$view['translator']->trans('mautic.campaign.modify.warning'); ?></p></div>
            <?php endif; ?>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <?php echo \$view['form']->row(\$form['name']); ?>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <?php echo \$view['form']->row(\$form['description']); ?>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-3 bg-white height-auto\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            <?php
            echo \$view['form']->row(\$form['category']);
            echo \$view['form']->row(\$form['allowRestart']);
            echo \$view['form']->row(\$form['isPublished']);
            echo \$view['form']->row(\$form['publishUp']);
            echo \$view['form']->row(\$form['publishDown']);
            ?>
        </div>
    </div>
</div>

<?php echo \$view['form']->end(\$form); ?>
<?php echo \$view->render('MauticCampaignBundle:Campaign:builder.html.php', [
    'campaignId'      => \$form['sessionId']->vars['data'],
    'campaignEvents'  => \$campaignEvents,
    'campaignSources' => \$campaignSources,
    'eventSettings'   => \$eventSettings,
    'canvasSettings'  => \$entity->getCanvasSettings(),
]);

?>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Views/Campaign/form.html.php";
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
        return new Source("", "@bundles/CampaignBundle/Views/Campaign/form.html.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Views/Campaign/form.html.php");
    }
}
