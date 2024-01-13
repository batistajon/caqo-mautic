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

/* @bundles/CampaignBundle/Views/Campaign/events.html.php */
class __TwigTemplate_b99f366bc287e4f7dd91ba59d77430fa0db6ebab53aa03b1b98e7b79dba6fe65 extends Template
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
<?php if (!empty(\$events) && is_array(\$events)) : ?>
<!-- start: trigger type event -->
<ul class=\"list-group campaign-event-list\">
    <?php foreach (\$events as \$event) : ?>
        <?php \$typeClass    = ('action' === \$event['eventType'] && 'no' === \$event['decisionPath']) ? 'danger' : 'success'; ?>
        <?php \$percentLabel = ('danger' === \$typeClass) ? 'mautic.report.campaign.no.percent' : 'mautic.report.campaign.yes.percent'; ?>
        <?php \$percentProp  = ('danger' === \$typeClass) ? 'noPercent' : 'yesPercent'; ?>
        <li class=\"list-group-item bg-auto bg-light-xs\">
            <div class=\"progress-bar progress-bar-<?php echo \$typeClass; ?>\" style=\"width:<?php echo \$event['yesPercent']; ?>%; left: 0;\"></div>
            <div class=\"progress-bar progress-bar-danger\" style=\"width:<?php echo \$event['noPercent']; ?>%; left: <?php echo \$event['yesPercent']; ?>%\"></div>
            <div class=\"box-layout\">
                <div class=\"visible-sm visible-md visible-lg col-stats\">
                    <span class=\"mt-xs label label-<?php echo \$typeClass; ?>\" data-toggle=\"tooltip\" title=\"<?php echo \$view['translator']->trans(\$percentLabel); ?>\">
                        <?php echo \$event[\$percentProp].'%'; ?>
                    </span>
                    <?php if ('action' !== \$event['eventType']): ?>
                    <span class=\"label label-danger\" data-toggle=\"tooltip\" title=\"<?php echo \$view['translator']->trans('mautic.report.campaign.no.percent'); ?>\">
                        <?php echo \$event['noPercent'].'%'; ?>
                    </span>
                    <?php endif; ?>
                <span class=\"mt-xs label label-warning\" data-toggle=\"tooltip\" title=\"<?php echo \$view['translator']->trans('mautic.report.campaign.completed.actions'); ?>\">
                    <?php echo \$event['logCountProcessed']; ?>
                </span>
                <span class=\"mt-xs label label-default\"  data-toggle=\"tooltip\" title=\"<?php echo \$view['translator']->trans('mautic.report.campaign.pending.actions'); ?>\">
                    <?php echo \$event['logCountForPending']; ?>
                </span>
                </div>
                    <div class=\"col-md-5 va-m\">
                    <h5 class=\"fw-sb text-primary mb-xs\">
                        <?php echo \$event['name']; ?>
                        <?php if ('action' !== \$event['eventType']): ?>
                        <small class=\"text-muted\"><?php echo \$event['percent']; ?>%</small>
                        <?php endif; ?>

                    </h5>
                    <h6 class=\"text-white dark-sm\"><?php echo \$event['description']; ?></h6>
                </div>
                <div class=\"col-md-3 va-m text-right\">
                    <em class=\"text-white dark-sm\"><?php echo \$view['translator']->trans('mautic.campaign.'.\$event['type']); ?></em>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
<!--/ end: trigger type event -->
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Views/Campaign/events.html.php";
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
        return new Source("", "@bundles/CampaignBundle/Views/Campaign/events.html.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Views/Campaign/events.html.php");
    }
}
