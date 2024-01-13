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

/* @bundles/ChannelBundle/Views/SubscribedEvents/Timeline/queued_messages.html.php */
class __TwigTemplate_9931e697725fd3b9817ef5eb70ed5d3ead92f759771738cfa806c5af1002d8f7 extends Template
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

<?php if (\$item = ((isset(\$event['extra'])) ? \$event['extra']['log'] : false)): ?>
    <table class=\"table table-striped table-sm table-condensed\">
        <thead>
        <tr>
            <th><?php echo \$view['translator']->trans('mautic.queued.message.timeline.channel'); ?></th>
            <th><?php echo \$view['translator']->trans('mautic.queued.message.timeline.attempts'); ?></th>
            <th><?php echo \$view['translator']->trans('mautic.queued.message.timeline.date.added'); ?></th>
            <th><?php echo \$view['translator']->trans('mautic.queued.message.timeline.rescheduled'); ?></th>
            <th><?php echo \$view['translator']->trans('mautic.queued.message.timeline.status'); ?></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope=\"row\"><?php echo \$view['channel']->getChannelLabel(\$item['channelName']); ?></th>
            <td><?php echo \$item['attempts']; ?></td>
            <td><?php if (\$item['dateAdded']) : echo \$view['date']->toFullConcat(\$item['dateAdded'], 'UTC'); endif; ?></td>
            <td><?php  if (\$item['scheduledDate']) : echo \$view['date']->toFullConcat(\$item['scheduledDate'], 'UTC'); endif; ?></td>
            <td id=\"queued-status-<?php echo \$item['id']; ?>\">
                <?php echo \$view['translator']->trans('mautic.message.queue.status.'.\$item['status'], [], 'javascript'); ?>
            </td>
            <td>
                <?php if ('pending' == \$item['status']) : ?>
                <button type=\"button\" id=\"queued-message-<?php echo \$item['id']; ?>\" class=\"btn btn-default btn-nospin\"  onclick=\"Mautic.cancelQueuedMessageEvent(<?php echo \$item['id']; ?>)\" data-toggle=\"tooltip\" title=\"<?php echo \$view['translator']->trans('mautic.queued.message.event.cancel'); ?>\">
                    <i class=\"fa fa-times text-danger\"></i>
                </button>
                <?php endif; ?>
            </td>
        </tr>
        </tbody>
    </table>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Views/SubscribedEvents/Timeline/queued_messages.html.php";
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
        return new Source("", "@bundles/ChannelBundle/Views/SubscribedEvents/Timeline/queued_messages.html.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Views/SubscribedEvents/Timeline/queued_messages.html.php");
    }
}
