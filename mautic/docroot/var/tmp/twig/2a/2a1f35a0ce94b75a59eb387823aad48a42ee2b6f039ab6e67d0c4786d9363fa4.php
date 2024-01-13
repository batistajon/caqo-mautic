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

/* @bundles/CampaignBundle/Views/Campaign/builder.html.php */
class __TwigTemplate_99648f3717cd3d574c8933afca771550ae395197bb01379677fa179ddacd8244 extends Template
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
<div class=\"hide builder campaign-builder live\">
    <div class=\"btns-builder\">
        <button type=\"button\" class=\"btn btn-primary btn-apply-builder\" onclick=\"Mautic.saveCampaignFromBuilder();\">
            <?php echo \$view['translator']->trans('mautic.core.form.apply'); ?>
        </button>
        <button type=\"button\" class=\"btn btn-primary btn-close-campaign-builder\"
                onclick=\"Mautic.closeCampaignBuilder();\">
            <?php echo \$view['translator']->trans('mautic.core.close.builder'); ?>
        </button>
    </div>
    <div id=\"builder-errors\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none;\">test</div>
    <div class=\"builder-content\">
        <div id=\"CampaignCanvas\">
            <div id=\"CampaignEvent_newsource<?php if (!empty(\$campaignSources)) {
    echo '_hide';
} ?>\" class=\"text-center list-campaign-source list-campaign-leadsource\">
                <div class=\"campaign-event-content\">
                    <div>
                        <span class=\"campaign-event-name ellipsis\">
                            <i class=\"mr-sm fa fa-users\"></i> <?php echo \$view['translator']->trans('mautic.campaign.add_new_source'); ?>
                        </span>
                    </div>
                </div>
            </div>

            <?php
            foreach (\$campaignSources as \$source):
                echo \$view->render('MauticCampaignBundle:Source:index.html.php', \$source);
            endforeach;

            foreach (\$campaignEvents as \$event):
                \$settings = \$eventSettings[\$event['eventType']][\$event['type']];
                \$template = isset(\$settings['template']) ? \$settings['template'] : 'MauticCampaignBundle:Event:generic.html.php';

                echo \$view->render(\$template,
                    ['event' => \$event, 'campaignId' => \$campaignId]);
            endforeach;

            echo \$view->render('MauticCampaignBundle:Campaign\\Builder:index.html.php',
                [
                    'campaignSources' => \$campaignSources,
                    'eventSettings'   => \$eventSettings,
                    'campaignId'      => \$campaignId,
                ]
            );
            ?>
        </div>
        <div id=\"EventJumpOverlay\"></div>
    </div>
</div>
<!-- dropped coordinates -->
<input type=\"hidden\" value=\"\" id=\"droppedX\"/>
<input type=\"hidden\" value=\"\" id=\"droppedY\"/>
<input type=\"hidden\" value=\"<?php echo \$view->escape(\$campaignId); ?>\" id=\"campaignId\"/>

<?php echo \$view->render(
    'MauticCoreBundle:Helper:modal.html.php',
    [
        'id'            => 'CampaignEventModal',
        'header'        => false,
        'footerButtons' => true,
        'dismissible'   => false,
    ]
);

?>
<script>
    /**
     * We typecast to object here so that an empty value will
     * be encoded to {} instead of []. Adding JSON_FORCE_OBJECT
     * is not an option because it does a deep transform to
     * object, whereas typecasting only does the first level.
     */
    Mautic.campaignBuilderCanvasSettings =
    <?php echo json_encode((object) \$canvasSettings, JSON_PRETTY_PRINT); ?>;
    Mautic.campaignBuilderCanvasSources =
    <?php echo json_encode((object) \$campaignSources, JSON_PRETTY_PRINT); ?>;
    Mautic.campaignBuilderCanvasEvents =
    <?php echo json_encode((object) \$campaignEvents, JSON_PRETTY_PRINT); ?>;

    Mautic.campaignBuilderConnectionRestrictions =
    <?php echo json_encode((object) \$eventSettings['connectionRestrictions'], JSON_PRETTY_PRINT); ?>;
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Views/Campaign/builder.html.php";
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
        return new Source("", "@bundles/CampaignBundle/Views/Campaign/builder.html.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Views/Campaign/builder.html.php");
    }
}
