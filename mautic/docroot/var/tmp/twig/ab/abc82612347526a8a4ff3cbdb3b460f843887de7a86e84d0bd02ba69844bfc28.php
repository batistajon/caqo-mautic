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

/* @bundles/CampaignBundle/Views/Campaign/Builder/source_list.html.php */
class __TwigTemplate_1135f86b9f0faa70d818beb54034c4da3dbf34b466d5ab4ea2e688196ae9ca15 extends Template
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

<div id=\"SourceGroupList\" class=\"hide\">
    <h4 class=\"mb-xs\">
        <span><?php echo \$view['translator']->trans('mautic.campaign.leadsource.header'); ?></span>
    </h4>
    <select id=\"SourceList\" class=\"campaign-event-selector\">
        <option value=\"\"></option>
        <?php foreach (['lists', 'forms'] as \$option): ?>

            <option id=\"campaignLeadSource_<?php echo \$option; ?>\"
                    class=\"option_campaignLeadSource_<?php echo \$option; ?>\"
                    data-href=\"<?php echo \$view['router']->path(
                        'mautic_campaignsource_action',
                        ['objectAction' => 'new', 'objectId' => \$campaignId, 'sourceType' => \$option]
                    ); ?>\"
                    data-target=\"#CampaignEventModal\"
                    title=\"<?php echo \$view->escape(\$view['translator']->trans('mautic.campaign.leadsource.'.\$option.'.tooltip')); ?>\"
                    value=\"<?php echo \$view->escape(\$option); ?>\"
                <?php if (!empty(\$campaignSources[\$option])) {
                        echo 'disabled';
                    } ?>>
                <span><?php echo \$view['translator']->trans('mautic.campaign.leadsource.'.\$option); ?></span>
            </option>
        <?php endforeach; ?>
    </select>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Views/Campaign/Builder/source_list.html.php";
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
        return new Source("", "@bundles/CampaignBundle/Views/Campaign/Builder/source_list.html.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Views/Campaign/Builder/source_list.html.php");
    }
}
