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

/* @bundles/LeadBundle/Views/LeadCampaigns/index.html.php */
class __TwigTemplate_96fd4392bc2046577e98083e5e6dd21e28791186d257a90ef5ea2d04c513836f extends Template
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
\$leadId   = \$lead->getId();
\$leadName = \$lead->getPrimaryIdentifier();
?>
<ul class=\"list-group\">
    <?php foreach (\$campaigns as \$c):
        \$switch  = \$c['inCampaign'] ? 'fa-toggle-on' : 'fa-toggle-off';
        \$bgClass = \$c['inCampaign'] ? 'text-success' : 'text-danger';
    ?>
    <li class=\"list-group-item\">
        <i class=\"fa fa-lg fa-fw <?php echo \$switch.' '.\$bgClass; ?>\" id=\"leadCampaignToggle<?php echo \$c['id']; ?>\" onclick=\"Mautic.toggleLeadCampaign('leadCampaignToggle<?php echo \$c['id']; ?>', <?php echo \$leadId; ?>, <?php echo \$c['id']; ?>);\"></i>
        <a  data-dismiss=\"modal\" class=\"pull-right\" href=\"<?php echo \$view['router']->url('mautic_campaign_action', ['objectAction' => 'view', 'objectId' => \$c['id']]); ?>\" data-toggle=\"ajax\"><span class=\"label label-primary\"><?php echo \$view['translator']->trans('mautic.core.id'); ?>: <?php echo \$c['id']; ?></span></a>
        <span> <?php echo \$c['name']; ?></span>
    </li>
    <?php endforeach; ?>
</ul>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/LeadCampaigns/index.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/LeadCampaigns/index.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/LeadCampaigns/index.html.php");
    }
}
