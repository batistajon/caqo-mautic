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

/* @bundles/PageBundle/Views/Trackable/click_counts.html.php */
class __TwigTemplate_2569461ce5df2db4e25e018e937102d99a2a2b0b347700751d822fde2d7fa86a extends Template
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
        echo "<?php if (!empty(\$trackables)): ?>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-striped table-bordered click-list\">
            <thead>
            <tr>
                <td><?php echo \$view['translator']->trans('mautic.trackable.click_url'); ?></td>
                <td><?php echo \$view['translator']->trans('mautic.trackable.click_count'); ?></td>
                <td><?php echo \$view['translator']->trans('mautic.trackable.click_unique_count'); ?></td>
                <?php echo \$view['content']->getCustomContent('click_counts_headers', \$mauticTemplateVars); ?>
                <td><?php echo \$view['translator']->trans('mautic.trackable.click_track_id'); ?></td>
            </tr>
            </thead>
            <tbody>
                <?php
                    \$totalClicks       = 0;
                    \$totalUniqueClicks = 0;
                    foreach (\$trackables as \$link):
                        \$totalClicks += \$link['hits'];
                        \$totalUniqueClicks += \$link['unique_hits'];
                        ?>
                        <tr>
                            <td class=\"long-text\"><a href=\"<?php echo \$link['url']; ?>\"><?php echo \$link['url']; ?></a></td>
                            <td class=\"text-center\"><?php echo \$link['hits']; ?></td>
                            <td class=\"text-center\">
                                <span class=\"mt-xs label label-primary has-click-event clickable-stat\">
                        <?php if (isset(\$channel) && isset(\$entity)): ?>
                            <a href=\"<?php echo \$view['router']->path(
                                'mautic_contact_index',
                                ['search' => \$view['translator']->trans('mautic.lead.lead.searchcommand.page_source').':'.\$channel.' '.\$view['translator']->trans('mautic.lead.lead.searchcommand.page_source_id').':'.\$entity->getId().' '.\$view['translator']->trans('mautic.lead.lead.searchcommand.page_id').':'.\$link['id']]
                            ); ?>\" data-toggle=\"tooltip\"
                               title=\"<?php echo \$view['translator']->trans('mautic.email.stat.simple.tooltip'); ?>\">
                               <?php echo \$link['unique_hits']; ?>
                            </a>
                        <?php else: ?>
                            <?php echo \$link['unique_hits']; ?>
                        <?php endif; ?>
                        </span>
                            </td>
                            <?php echo \$view['content']->getCustomContent('click_counts', array_merge(\$mauticTemplateVars, ['redirect_id' => \$link['redirect_id']])); ?>
                            <td><?php echo \$link['redirect_id']; ?></td>
                        </tr>
                <?php endforeach; ?>

                <tr>
                    <td class=\"long-text\"><?php echo \$view['translator']->trans('mautic.trackable.total_clicks'); ?></td>
                    <td class=\"text-center\"><?php echo \$totalClicks; ?></td>
                    <td class=\"text-center\">
                        <span class=\"mt-xs label label-primary has-click-event clickable-stat\">
                  <?php if (isset(\$channel) && isset(\$entity)): ?>
                      <a href=\"<?php echo \$view['router']->path(
                          'mautic_contact_index',
                          ['search' => \$view['translator']->trans('mautic.lead.lead.searchcommand.page_source').':'.\$channel.' '.\$view['translator']->trans('mautic.lead.lead.searchcommand.page_source_id').':'.\$entity->getId()]
                      ); ?>\" data-toggle=\"tooltip\"
                         title=\"<?php echo \$view['translator']->trans('mautic.email.stat.simple.tooltip'); ?>\">
                        <?php echo \$totalUniqueClicks; ?>
                            </a>
                  <?php else: ?>
                      <?php echo \$totalUniqueClicks; ?>
                  <?php endif; ?>
                        </span>
                    </td>
                    <td></td>
                </tr>

            </tbody>
        </table>
    </div>
<?php else: ?>
    <?php echo \$view->render(
        'MauticCoreBundle:Helper:noresults.html.php',
        [
            'header'  => 'mautic.trackable.click_counts.header_none',
            'message' => 'mautic.trackable.click_counts.none',
        ]
    ); ?>
    <div class=\"clearfix\"></div>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Views/Trackable/click_counts.html.php";
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
        return new Source("", "@bundles/PageBundle/Views/Trackable/click_counts.html.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Views/Trackable/click_counts.html.php");
    }
}
