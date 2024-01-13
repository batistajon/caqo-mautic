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

/* @bundles/CampaignBundle/Views/Campaign/Builder/event_list.html.php */
class __TwigTemplate_246a8d99845919cca64c3b3f3510e30802f7396914a407fbe210403e099eeda0 extends Template
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
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>
<?php foreach (['action' => 'primary', 'decision' => 'success', 'condition' => 'danger'] as \$eventGroup => \$color): ?>
    <div id=\"<?php echo ucfirst(\$eventGroup); ?>GroupList\" class=\"hide\">
        <h4 class=\"mb-xs\">
            <span><?php echo \$view['translator']->trans('mautic.campaign.event.'.\$eventGroup.'s.header'); ?></span>
            <button class=\"pull-right btn btn-xs btn-nospin btn-<?php echo \$color; ?> \">
                <i class=\"fa fa-fw fa-level-up\"></i>
            </button>
        </h4>
        <select id=\"<?php echo ucfirst(\$eventGroup); ?>List\" class=\"campaign-event-selector\">
            <option value=\"\"></option>
            <?php foreach (\$eventSettings[\$eventGroup] as \$k => \$e): ?>

                <option id=\"campaignEvent_<?php echo str_replace('.', '', \$k); ?>\"
                        class=\"option_campaignEvent_<?php echo str_replace('.', '', \$k); ?>\"
                        data-href=\"<?php echo \$view['router']->path(
                            'mautic_campaignevent_action',
                            [
                                    'objectAction' => 'new',
                                    'type'         => \$k,
                                    'eventType'    => \$eventGroup,
                                    'campaignId'   => \$campaignId,
                                    'anchor'       => '',
                            ]
                        ); ?>\"
                        data-target=\"#CampaignEventModal\"
                        title=\"<?php echo \$view->escape(\$e['description']); ?>\"
                        value=\"<?php echo \$view->escape(\$k); ?>\">
                    <span><?php echo \$e['label']; ?></span>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
<?php endforeach; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Views/Campaign/Builder/event_list.html.php";
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
        return new Source("", "@bundles/CampaignBundle/Views/Campaign/Builder/event_list.html.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Views/Campaign/Builder/event_list.html.php");
    }
}
