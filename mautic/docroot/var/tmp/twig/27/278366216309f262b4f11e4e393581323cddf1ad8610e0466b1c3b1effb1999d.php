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

/* @bundles/LeadBundle/Views/Timeline/index.html.php */
class __TwigTemplate_d82c00f28821c8344359a475e1095315eef4a87332f85b02cd61dec62b463902 extends Template
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

<!-- filter form -->
<form method=\"post\" action=\"<?php echo \$view['router']->path('mautic_contacttimeline_action', ['leadId' => \$lead->getId()]); ?>\" class=\"panel\" id=\"timeline-filters\">
    <div class=\"form-control-icon pa-xs\">
        <input type=\"text\" class=\"form-control bdr-w-0\" name=\"search\" id=\"search\" placeholder=\"<?php echo \$view['translator']->trans('mautic.core.search.placeholder'); ?>\" value=\"<?php echo \$view->escape(\$events['filters']['search']); ?>\">
        <span class=\"the-icon fa fa-search text-muted mt-xs\"></span>
    </div>
    <?php if (isset(\$events['types']) && is_array(\$events['types'])) : ?>
        <div class=\"history-search panel-footer text-muted\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <select name=\"includeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\" data-placeholder=\"<?php echo \$view['translator']->trans('mautic.lead.lead.filter.bundles.include.placeholder'); ?>\">
                        <?php foreach (\$events['types'] as \$typeKey => \$typeName) : ?>
                            <option value=\"<?php echo \$view->escape(\$typeKey); ?>\"<?php echo in_array(\$typeKey, \$events['filters']['includeEvents']) ? ' selected' : ''; ?> >
                                <?php echo \$typeName; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class=\"col-sm-5\">
                    <select name=\"excludeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\" data-placeholder=\"<?php echo \$view['translator']->trans('mautic.lead.lead.filter.bundles.exclude.placeholder'); ?>\">
                        <?php foreach (\$events['types'] as \$typeKey => \$typeName) : ?>
                            <option value=\"<?php echo \$view->escape(\$typeKey); ?>\"<?php echo in_array(\$typeKey, \$events['filters']['excludeEvents']) ? ' selected' : ''; ?> >
                                <?php echo \$typeName; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class=\"col-sm-2\">
                    <a class=\"btn btn-default btn-block\" href=\"<?php echo \$view['router']->url('mautic_contact_timeline_export_action', ['leadId' => \$lead->getId()]); ?>\" data-toggle=\"download\">
                        <span>
                            <i class=\"fa fa-download\"></i> <span class=\"hidden-xs hidden-sm\"><?php echo \$view['translator']->trans('mautic.core.export'); ?></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <input type=\"hidden\" name=\"leadId\" id=\"leadId\" value=\"<?php echo \$view->escape(\$lead->getId()); ?>\" />
</form>

<script>
    mauticLang['showMore'] = '<?php echo \$view['translator']->trans('mautic.core.more.show'); ?>';
    mauticLang['hideMore'] = '<?php echo \$view['translator']->trans('mautic.core.more.hide'); ?>';
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
        return "@bundles/LeadBundle/Views/Timeline/index.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Timeline/index.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Timeline/index.html.php");
    }
}
