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

/* @bundles/CoreBundle/Views/Slots/channelfrequency.html.php */
class __TwigTemplate_4a801ee7e0886cf43c99b55d6cf78f593569c63b5d0bc4cee0b54c9a8cad097b extends Template
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

\$channelNumber = 0;
?>
<?php if (isset(\$form)) : ?>
<table class=\"table table-striped\">
    <?php foreach (\$form['lead_channels']['subscribed_channels']->vars['choices'] as \$key=>\$channel):
        \$contactMe   = isset(\$leadChannels[\$channel->value]);
        \$checked     = \$contactMe ? 'checked' : '';
        \$channelName = strtolower(\$view['channel']->getChannelLabel(\$channel->value));
        ?>
        <tr>
            <td>
                <div class=\"text-left\">
                    <input type=\"hidden\" id=\"<?php echo \$channel->value; ?>\"
                           name=\"lead_contact_frequency_rules[lead_channels][subscribed_channels][<?php echo \$key; ?>]\"
                           value=\"\">
                    <input type=\"checkbox\" id=\"<?php echo \$channel->value; ?>\"
                           name=\"lead_contact_frequency_rules[lead_channels][subscribed_channels][<?php echo \$key; ?>]\"
                           onclick=\"togglePreferredChannel(this.value);\"
                           value=\"<?php echo \$view->escape(\$channel->value); ?>\" <?php echo \$checked; ?>>
                    <label for=\"<?php echo \$channel->value; ?>\" id=\"is-contactable-<?php echo \$channel->value; ?>\" data-channel=\"<?php echo \$channelName; ?>\">
                        <?php echo \$view['translator']->trans('mautic.lead.contact.me.label', ['%channel%' => \$channelName]); ?>
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id=\"frequency_<?php echo \$channel->value; ?>\" class=\"text-left row\">
                    <?php
                    if (\$showContactFrequency && isset(\$form['lead_channels']['frequency_number_'.\$channel->value]) && isset(\$form['lead_channels']['frequency_time_'.\$channel->value])):?>
                        <div class=\"col-md-6\">
                            <label class=\"text-muted label1\"><?php echo \$view['translator']->trans(\$form['lead_channels']['frequency_number_'.\$channel->value]->vars['label']); ?></label>
                            <?php echo \$view['form']->widget(\$form['lead_channels']['frequency_number_'.\$channel->value]); ?>
                            <?php echo \$view['form']->label(\$form['lead_channels']['frequency_time_'.\$channel->value]); ?>
                            <?php echo \$view['form']->widget(\$form['lead_channels']['frequency_time_'.\$channel->value]); ?>
                        </div>
                    <?php else:
                        unset(\$form['lead_channels']['frequency_time_'.\$channel->value]);
                        unset(\$form['lead_channels']['frequency_number_'.\$channel->value]);
                    endif; ?>
                    <?php if (\$showContactPauseDates && isset(\$form['lead_channels']['contact_pause_start_date_'.\$channel->value]) && isset(\$form['lead_channels']['contact_pause_end_date_'.\$channel->value])):?>
                        <div class=\"col-md-6\">
                            <label class=\"text-muted label3\"><?php echo \$view['translator']->trans('mautic.lead.frequency.dates.label'); ?></label>
                            <?php echo \$view['form']->widget(\$form['lead_channels']['contact_pause_start_date_'.\$channel->value]); ?>
                            <?php echo \$view['form']->label(\$form['lead_channels']['contact_pause_end_date_'.\$channel->value]); ?>
                            <?php echo \$view['form']->widget(\$form['lead_channels']['contact_pause_end_date_'.\$channel->value]); ?>
                        </div>
                        <?php
                    else:
                        unset(\$form['lead_channels']['contact_pause_start_date_'.\$channel->value]);
                        unset(\$form['lead_channels']['contact_pause_end_date_'.\$channel->value]);
                    endif; ?>
                </div>
            </td>
        </tr>
    <?php unset(\$form['lead_channels']['subscribed_channels']); ?>
    <?php endforeach; ?>
</table>
<?php else : ?>
<table class=\"table table-striped\">
    <tbody>
    <tr>
        <td>
            <div class=\"text-left\">
                <input type=\"checkbox\" checked=\"\">
                <label class=\"control-label\">
                    <?php echo \$view['translator']->trans('mautic.lead.contact.me.label'); ?></label>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div id=\"frequency_email\" class=\"text-left row\">
                <div class=\"col-xs-6\">
                    <label class=\"text-muted label1\"><?php echo \$view['translator']->trans('mautic.lead.list.frequency.number'); ?></label>
                    <input type=\"text\" class=\"frequency form-control\">
                    <label class=\"text-muted fw-n frequency-label label2\"><?php echo \$view['translator']->trans('mautic.lead.list.frequency.times'); ?></label>
                    <select class=\"form-control\">
                        <option value=\"\" selected=\"selected\"></option>
                    </select></div>
                <div class=\"col-xs-6\">
                    <label class=\"text-muted label3\"><?php echo  \$view['translator']->trans('mautic.lead.frequency.dates.label'); ?></label>
                    <input type=\"date\" class=\"form-control\">
                    <label class=\"frequency-label text-muted fw-n label4\"><?php echo  \$view['translator']->trans('mautic.lead.frequency.contact.end.date'); ?></label>
                    <input type=\"date\" class=\"form-control\">
                </div>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Slots/channelfrequency.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Slots/channelfrequency.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Slots/channelfrequency.html.php");
    }
}
