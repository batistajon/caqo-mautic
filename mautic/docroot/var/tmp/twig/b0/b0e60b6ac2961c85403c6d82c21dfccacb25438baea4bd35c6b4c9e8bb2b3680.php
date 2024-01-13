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

/* @bundles/LeadBundle/Views/Timeline/plugin_index.html.php */
class __TwigTemplate_9a9b48fb31f832afe6b8968f8ac5a3a70d271271c30e0514f05c811ddd326ffd extends Template
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
\$view->extend('MauticCoreBundle:Default:slim.html.php');
?>
<style>
    .container {
        margin: auto !important;
    }
</style>
<!-- filter form -->
<form method=\"post\" action=\"<?php echo isset(\$lead) ? \$view['router']->path(
    'mautic_plugin_timeline_view', ['leadId' => \$lead->getId(), 'integration' => \$integration]
) : \$view['router']->path('mautic_plugin_timeline_index', ['integration' => \$integration]); ?>\" class=\"panel\" id=\"timeline-filters\">
    <div class=\"form-control-icon pa-xs\">
        <input type=\"text\" class=\"form-control bdr-w-0\" name=\"search\" id=\"search\" placeholder=\"<?php echo \$view['translator']->trans('mautic.core.search.placeholder'); ?>\" value=\"<?php echo \$view->escape(\$events['filters']['search']); ?>\">
        <span class=\"the-icon fa fa-search text-muted mt-xs\"></span>
    </div>
    <?php if (isset(\$events['types']) && is_array(\$events['types'])) : ?>
        <div class=\"history-search panel-footer text-muted\">
            <div class=\"col-xs-6\">
                <select name=\"includeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\" data-placeholder=\"<?php echo \$view['translator']->trans('mautic.lead.lead.filter.bundles.include.placeholder'); ?>\">
                    <?php foreach (\$events['types'] as \$typeKey => \$typeName) : ?>
                        <option value=\"<?php echo \$view->escape(\$typeKey); ?>\"<?php echo in_array(\$typeKey, \$events['filters']['includeEvents']) ? ' selected' : ''; ?> >
                            <?php echo \$typeName; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class=\"col-xs-6\">
                <select name=\"excludeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\" data-placeholder=\"<?php echo \$view['translator']->trans('mautic.lead.lead.filter.bundles.exclude.placeholder'); ?>\">
                    <?php foreach (\$events['types'] as \$typeKey => \$typeName) : ?>
                        <option value=\"<?php echo \$view->escape(\$typeKey); ?>\"<?php echo in_array(\$typeKey, \$events['filters']['excludeEvents']) ? ' selected' : ''; ?> >
                            <?php echo \$typeName; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    <?php endif; ?>

    <?php if (isset(\$lead)) : ?>
        <input type=\"hidden\" name=\"leadId\" id=\"leadId\" value=\"<?php echo \$view->escape(\$lead->getId()); ?>\"/>
    <?php endif; ?>
</form>

<script>
    mauticLang['showMore'] = '<?php echo \$view['translator']->trans('mautic.core.more.show'); ?>';
    mauticLang['hideMore'] = '<?php echo \$view['translator']->trans('mautic.core.more.hide'); ?>';

    var timelineForm = mQuery('#timeline-filters');
    if (timelineForm.length) {
        timelineForm.on('change', function() {
            timelineForm.submit();
        }).on('keyup', function() {
            timelineForm.delay(200).submit();
        }).on('submit', function(e) {
            e.preventDefault();
            Mautic.refreshLeadTimeline(timelineForm);
        });

    }
</script>

<div id=\"timeline-table\">
    <?php \$view['slots']->output('_content'); ?>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Timeline/plugin_index.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Timeline/plugin_index.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Timeline/plugin_index.html.php");
    }
}
