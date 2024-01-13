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

/* @bundles/ChannelBundle/Views/SubscribedEvents/Timeline/index.html.php */
class __TwigTemplate_6677bb239fc07cdadccd5b6b93ddd872922662f8ec2f401cb5b674de07d12fa0 extends Template
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

\$extra            = \$event['extra'];
\$log              = \$extra['log'];
\$eventType        = \$log['type'];
\$eventSettings    = \$extra['campaignEventSettings'];
\$messageSettings  = \$eventSettings['action'][\$eventType]['timelineTemplateVars']['messageSettings'];
\$getChannelOutput = function (\$channel) use (\$view, \$event, \$log, \$eventSettings) {
    \$log['metadata'] = \$log['metadata'][\$channel];

    if (!empty(\$log['metadata']['dnc'])) {
        switch (\$log['metadata']['dnc']) {
            case \\Mautic\\LeadBundle\\Entity\\DoNotContact::BOUNCED:
                \$msg = 'mautic.lead.event.donotcontact_bounced';
                break;
            case \\Mautic\\LeadBundle\\Entity\\DoNotContact::UNSUBSCRIBED:
                \$msg = 'mautic.lead.event.donotcontact_unsubscribed';
                break;
            case \\Mautic\\LeadBundle\\Entity\\DoNotContact::MANUAL:
                \$msg = 'mautic.lead.event.donotcontact_manual';
                break;
        }

        return \$view['translator']->trans(\$msg);
    }

    \$template                     = 'MauticCampaignBundle:SubscribedEvents\\Timeline:index.html.php';
    \$channelEvent                 = \$event;
    \$channelEvent['extra']['log'] = \$log;
    \$vars                         = [
        'event' => \$channelEvent,
    ];

    // Successful send through this channel
    if (!empty(\$messageSettings[\$channel]['campaignAction'])) {
        \$eventType = \$messageSettings[\$channel]['campaignAction'];
        if (!empty(\$eventSettings['action'][\$eventType]['timelineTemplate'])) {
            \$template = \$eventSettings['action'][\$eventType]['timelineTemplate'];
        }
        if (!empty(\$eventSettings['action'][\$eventType]['timelineTemplateVars'])) {
            \$vars['event']['extra'] = array_merge(
                \$vars['event']['extra'],
                \$eventSettings['action'][\$eventType]['timelineTemplateVars']
            );
        }
    }

    return \$view->render(\$template, \$vars);
};
\$counter = count(\$extra['log']['metadata']);
?>

<?php foreach (\$extra['log']['metadata'] as \$channel => \$results): ?>
    <?php if (isset(\$messageSettings[\$channel])): ?>
        <h4><?php echo \$messageSettings[\$channel]['label']; ?></h4>
        <?php echo \$getChannelOutput(\$channel); ?>
        <?php --\$counter; ?>
        <?php if (\$counter > 0): ?>
            <hr/>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Views/SubscribedEvents/Timeline/index.html.php";
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
        return new Source("", "@bundles/ChannelBundle/Views/SubscribedEvents/Timeline/index.html.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Views/SubscribedEvents/Timeline/index.html.php");
    }
}
