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

/* @bundles/CampaignBundle/Views/Source/index.html.php */
class __TwigTemplate_881e79edaf5fe5a8a656a6d6d37eb723564549cd267ea0179e57b4742920ce86 extends Template
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
<?php if (empty(\$update)): ?>
<div id=\"CampaignEvent_<?php echo \$sourceType; ?>\" data-type=\"source\" class=\"draggable list-campaign-source list-campaign-leadsource\">
<?php endif; ?>
    <div class=\"campaign-event-content\">
        <div><span class=\"campaign-event-name ellipsis\"><i class=\"mr-sm fa fa-<?php echo ('lists' == \$sourceType) ? 'list' : 'pencil-square-o'; ?>\"></i><?php echo \$names; ?></span></div>
    </div>
<?php if (empty(\$update)): ?>
    <div class=\"campaign-event-buttons hide\">
        <a data-toggle=\"ajaxmodal\" data-prevent-dismiss=\"true\" data-target=\"#CampaignEventModal\" href=\"<?php echo \$view['router']->path('mautic_campaignsource_action', ['objectAction' => 'edit', 'objectId' => \$campaignId, 'sourceType' => \$sourceType]); ?>\" class=\"btn btn-primary btn-xs btn-edit\">
            <i class=\"fa fa-pencil\"></i>
        </a>
        <a data-toggle=\"ajax\" data-target=\"CampaignEvent_<?php echo \$sourceType; ?>\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"<?php echo \$view['router']->path('mautic_campaignsource_action', ['objectAction' => 'delete', 'objectId' => \$campaignId, 'sourceType' => \$sourceType]); ?>\"  class=\"btn btn-delete btn-danger btn-xs\">
            <i class=\"fa fa-times\"></i>
        </a>
    </div>
</div>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Views/Source/index.html.php";
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
        return new Source("", "@bundles/CampaignBundle/Views/Source/index.html.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Views/Source/index.html.php");
    }
}
