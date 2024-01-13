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

/* @bundles/CampaignBundle/Views/Campaign/preview.html.php */
class __TwigTemplate_68a8fd3368aa430c872eae03e9377a1989cb9524a0570aae1a226addac7c31e1 extends Template
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
<div class=\"builder campaign-builder preview\">
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
            /** @var \\Mautic\\CampaignBundle\\Entity\\Campaign \$campaign */
            if (count(\$campaign->getForms())) {
                \$sources = [
                    'sourceType' => 'forms',
                    'campaignId' => \$campaignId,
                    'names'      => implode(
                        ', ',
                        array_map(
                            function (Mautic\\FormBundle\\Entity\\Form \$f) {
                                return \$f->getName();
                            },
                            \$campaign->getForms()
                                     ->toArray()
                        )
                    ),
                ];
                echo \$view->render('MauticCampaignBundle:Source:index.html.php', \$sources);
            }

            if (count(\$campaign->getLists())) {
                \$sources = [
                    'sourceType' => 'lists',
                    'campaignId' => \$campaignId,
                    'names'      => implode(
                        ', ',
                        array_map(
                            function (Mautic\\LeadBundle\\Entity\\LeadList \$f) {
                                return \$f->getName();
                            },
                            \$campaign->getLists()
                                     ->toArray()
                        )
                    ),
                ];
                echo \$view->render('MauticCampaignBundle:Source:index.html.php', \$sources);
            }

            foreach (\$campaignEvents as \$event):
                echo \$view->render('MauticCampaignBundle:Event:preview.html.php', ['event' => \$event, 'campaignId' => \$campaignId]);
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
        return "@bundles/CampaignBundle/Views/Campaign/preview.html.php";
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
        return new Source("", "@bundles/CampaignBundle/Views/Campaign/preview.html.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Views/Campaign/preview.html.php");
    }
}
