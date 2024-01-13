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

/* @bundles/CampaignBundle/Views/Event/generic.html.php */
class __TwigTemplate_6b2acb9ce7aa713c8fdc969f219dcd111fac77b7b9278eef12c427bc6c521773 extends Template
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
if (empty(\$route)) {
    \$route = 'mautic_campaignevent_action';
}

?>
<?php if (empty(\$update)): ?>
<div id=\"CampaignEvent_<?php echo \$event['id']; ?>\" data-type=\"<?php echo \$event['eventType']; ?>\" class=\"draggable list-campaign-event list-campaign-<?php echo \$event['eventType']; ?>\" data-event=\"<?php echo \$event['type']; ?>\" data-event-id=\"<?php echo \$event['id']; ?>\">
<?php endif; ?>
    <div class=\"campaign-event-content\">
        <div><span class=\"campaign-event-name ellipsis\"><?php if ('dev' === MAUTIC_ENV):?><small><?php echo \$event['id']; ?></small> <?php endif; ?><?php echo \$event['name']; ?></span></div>
    </div>
<?php if (empty(\$update)): ?>
    <div class=\"campaign-event-buttons hide\">
        <a data-toggle=\"ajaxmodal\" data-prevent-dismiss=\"true\" data-target=\"#CampaignEventModal\" href=\"<?php echo \$view['router']->path(\$route, ['objectAction' => 'edit', 'objectId' => \$event['id'], 'campaignId' => \$campaignId]); ?>\" class=\"btn btn-primary btn-xs btn-edit\">
            <i class=\"fa fa-pencil\"></i>
        </a>
        <a data-toggle=\"ajax\" data-target=\"CampaignEvent_<?php echo \$event['id']; ?>\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"<?php echo \$view['router']->path(\$route, ['objectAction' => 'delete', 'objectId' => \$event['id'], 'campaignId' => \$campaignId]); ?>\"  class=\"btn btn-delete btn-danger btn-xs\">
            <i class=\"fa fa-times\"></i>
        </a>
    </div>
</div>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Views/Event/generic.html.php";
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
        return new Source("", "@bundles/CampaignBundle/Views/Event/generic.html.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Views/Event/generic.html.php");
    }
}
