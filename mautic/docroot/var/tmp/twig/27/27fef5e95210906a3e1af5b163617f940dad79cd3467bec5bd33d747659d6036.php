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

/* @bundles/SmsBundle/Views/Sms/list_stats.html.php */
class __TwigTemplate_fab1f88137cf5a85057846f69fa47591f484ee25c4c9865f1a7ab8169211b77c extends Template
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
 * @copyright   2019 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
/** @var \\Mautic\\SmsBundle\\Entity\\Sms \$item */
\$type = \$item->getSmsType();
?>

<td class=\"visible-sm visible-md visible-lg col-stats\" data-stats=\"<?php echo \$item->getId(); ?>\">

    <?php if ('list' == \$type): ?>
        <span class=\"mt-xs label label-default has-click-event clickable-stat<?php echo \$item->getPendingCount() > 0 && 'list' === \$item->getSmsType() ? '' : ' hide'; ?>\"\"
              id=\"pending-<?php echo \$item->getId(); ?>\"
              data-toggle=\"tooltip\"
              title=\"<?php echo \$view['translator']->trans('mautic.channel.stat.leadcount.tooltip'); ?>\">
                            <a href=\"<?php echo \$view['router']->path(
                                'mautic_contact_index',
                                [
                                    'search' => \$view['translator']->trans(
                                            'mautic.lead.lead.searchcommand.sms_pending'
                                        ).':'.\$item->getId(),
                                ]
                            ); ?>\"><?php echo \$view['translator']->trans(
                                    'mautic.sms.stat.leadcount',
                                    ['%count%' => \$item->getPendingCount()]
                                ); ?></a>
                        </span>
    <?php endif; ?>

    <span class=\"mt-xs label label-warning has-click-event clickable-stat\"
          id=\"sent-count-<?php echo \$item->getId(); ?>\"
          data-toggle=\"tooltip\"
          title=\"<?php echo \$view['translator']->trans('mautic.channel.stat.leadcount.tooltip'); ?>\">
                            <a href=\"<?php echo \$view['router']->path(
                                'mautic_contact_index',
                                [
                                    'search' => \$view['translator']->trans(
                                            'mautic.lead.lead.searchcommand.sms_sent'
                                        ).':'.\$item->getId(),
                                ]
                            ); ?>\"><?php echo \$view['translator']->trans(
                                    'mautic.sms.stat.sentcount',
                                    ['%count%' => \$item->getSentCount(true)]
                                ); ?></a>
                        </span>
</td>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Views/Sms/list_stats.html.php";
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
        return new Source("", "@bundles/SmsBundle/Views/Sms/list_stats.html.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Views/Sms/list_stats.html.php");
    }
}
