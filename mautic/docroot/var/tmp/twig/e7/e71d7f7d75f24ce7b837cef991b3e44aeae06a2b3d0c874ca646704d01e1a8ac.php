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

/* @bundles/LeadBundle/Views/Social/index.html.php */
class __TwigTemplate_109540921bf550aee8e22f95bb54e4c0774b6482f7877f2a5699c72fec105b48 extends Template
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
<?php if (empty(\$socialProfiles)): ?>
<div class=\"alert alert-warning col-md-6 col-md-offset-3 mt-md\">
    <h4><?php echo \$view['translator']->trans('mautic.lead.socialprofiles.header'); ?></h4>
    <p><a href=\"javascript: void(0);\" onclick=\"Mautic.refreshLeadSocialProfile('', <?php echo \$lead->getId(); ?>, event);\"><?php echo \$view['translator']->trans('mautic.lead.socialprofiles.noresults'); ?></a></p>
</div>
<?php else: ?>
<?php \$count = 0; ?>
<div class=\"row\">
<?php foreach (\$socialProfiles as \$integrationName => \$details): ?>
    <?php if (\$count > 0 && 0 == \$count % 2): echo '</div><div class=\"row\">'; endif; ?>
    <div class=\"col-md-6\">
        <div class=\"panel panel-default panel-<?php echo strtolower(\$integrationName); ?>\">
            <div class=\"panel-heading pr-0\">
                <h3 class=\"panel-title\"><?php echo \$view['translator']->trans('mautic.integration.'.\$integrationName); ?></h3>
                <div class=\"panel-toolbar text-right\">
                    <a href=\"javascript:void(0);\" class=\"btn\" data-toggle=\"tooltip\" onclick=\"Mautic.refreshLeadSocialProfile('<?php echo \$integrationName; ?>', '<?php echo \$lead->getId(); ?>', event);\" title=\"<?php echo \$view['translator']->trans('mautic.lead.lead.social.lastupdate', ['%datetime%' => \$view['date']->toFullConcat(\$details['lastRefresh'], 'utc')]); ?>\">
                        <i class=\"text-white fa fa-refresh\"></i>
                    </a>
                    <!--<a href=\"javascript:void(0);\" class=\"btn\" data-toggle=\"panelcollapse\"><i class=\"text-white fa fa-angle-up\"></i></a>-->
                    <a href=\"javascript:void(0);\" class=\"btn\" onclick=\"Mautic.clearLeadSocialProfile('<?php echo \$integrationName; ?>', '<?php echo \$lead->getId(); ?>', event);\" data-toggle=\"tooltip\" title=\"<?php echo \$view['translator']->trans('mautic.lead.lead.social.removecache'); ?>\">
                        <i class=\"text-white fa fa-times\"></i>
                    </a>
                    <!-- trickery to allow tooltip and onclick for close button -->
                    <a class=\"hide <?php echo \$integrationName.'-panelremove'; ?>\" data-toggle=\"panelremove\" data-parent=\".col-md-6\">&amp;</a>
                </div>
            </div>
             <div class=\"panel-collapse pull out\" id=\"<?php echo \"{\$integrationName}CompleteProfile\"; ?>\">
                <?php echo \$view->render(\$details['social_profile_template'], [
                'lead'              => \$lead,
                'details'           => \$details,
                'integrationName'   => \$integrationName,
                'socialProfileUrls' => \$socialProfileUrls,
            ]); ?>
            </div>
        </div>
    </div>
    <?php ++\$count; ?>
    <?php endforeach; ?>
</div>
<?php endif; ?>
<?php
\$view['slots']->append('modal', \$view->render('MauticCoreBundle:Helper:modal.html.php', [
    'id'      => 'socialImageModal',
    'body'    => '<img class=\"img-responsive img-thumbnail\" />',
    'header'  => false,
    'padding' => 'np',
]));
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Social/index.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Social/index.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Social/index.html.php");
    }
}
