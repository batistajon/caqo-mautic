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

/* @bundles/LeadBundle/Views/Lead/dnc_large.html.php */
class __TwigTemplate_af057f36e6785aa5ca5b85983306bbe8f8b17325dcb85c65bae5497dcdeff336 extends Template
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
?>

<div id=\"bounceLabel<?php echo \$doNotContact->getId(); ?>\">
    <div class=\"panel-heading text-center\">
        <h4 class=\"fw-sb\">
            <?php if (\\Mautic\\LeadBundle\\Entity\\DoNotContact::UNSUBSCRIBED == \$doNotContact->getReason()): ?>
                <span class=\"label label-danger\" data-toggle=\"tooltip\" title=\"<?php echo \$view['lead_dnc_reason']->toText(\$doNotContact->getReason()); ?>\">
                                <?php echo \$view['translator']->trans('mautic.lead.do.not.contact_channel', ['%channel%'=> strtoupper(\$doNotContact->getChannel())]); ?>
                            </span>

            <?php elseif (\\Mautic\\LeadBundle\\Entity\\DoNotContact::MANUAL == \$doNotContact->getReason()): ?>
                <span class=\"label label-danger\" data-toggle=\"tooltip\" title=\"<?php echo \$view['lead_dnc_reason']->toText(\$doNotContact->getReason()); ?>\">
                                <?php echo \$view['translator']->trans('mautic.lead.do.not.contact_channel', ['%channel%'=> strtoupper(\$doNotContact->getChannel())]); ?>
                                    <span data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"<?php echo \$view['translator']->trans('mautic.lead.remove_dnc_status'); ?>\">
                                    <i class=\"fa fa-times has-click-event\" onclick=\"Mautic.removeBounceStatus(this, <?php echo \$doNotContact->getId(); ?>);\"></i>
                                </span>
                            </span>

            <?php elseif (\\Mautic\\LeadBundle\\Entity\\DoNotContact::BOUNCED == \$doNotContact->getReason()): ?>
                <span class=\"label label-warning\" data-toggle=\"tooltip\" title=\"<?php echo \$view->escape(\$doNotContact->getComments()); ?>\">
                                <?php echo \$view['translator']->trans('mautic.lead.do.not.contact_bounced_channel', ['%channel%'=> strtoupper(\$doNotContact->getChannel())]); ?>
                                    <span data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"<?php echo \$view['translator']->trans('mautic.lead.remove_dnc_status'); ?>\">
                                    <i class=\"fa fa-times has-click-event\" onclick=\"Mautic.removeBounceStatus(this, <?php echo \$doNotContact->getId(); ?>);\"></i>
                                </span>
                            </span>
            <?php endif; ?>
        </h4>
        <hr>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Lead/dnc_large.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Lead/dnc_large.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Lead/dnc_large.html.php");
    }
}
