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

/* @bundles/LeadBundle/Views/Note/index.html.php */
class __TwigTemplate_97a078257197db5099e13285f2521925824e5bf6aff823612cd0e3751da6a6b3 extends Template
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
<div class=\"box-layout mb-lg\">
\t<div class=\"col-xs-10 va-m\">
        <form action=\"<?php echo \$view['router']->path('mautic_contactnote_index', ['page' => \$page, 'leadId' => \$lead->getId(), 'tmpl' => 'list']); ?>\" class=\"panel\" id=\"note-filters\" method=\"post\">
            <div class=\"form-control-icon pa-xs\">
                <input type=\"text\" name=\"search\" value=\"<?php echo \$view->escape(\$search); ?>\" id=\"NoteFilter\" class=\"form-control bdr-w-0\" placeholder=\"<?php echo \$view['translator']->trans('mautic.core.search.placeholder'); ?>\" data-toggle=\"livesearch\" data-target=\"#NoteList\" data-action=\"<?php echo \$view['router']->path('mautic_contactnote_index', ['leadId' => \$lead->getId(), 'page' => 1]); ?>\">
                <span class=\"the-icon fa fa-search text-muted mt-xs\"></span><!-- must below `form-control` -->
            </div>
            <input type=\"hidden\" name=\"leadId\" id=\"leadId\" value=\"<?php echo \$view->escape(\$lead->getId()); ?>\" />
            <div class=\"panel-footer text-muted\">
                <?php foreach (\$noteTypes as \$typeKey => \$typeName) : ?>
                    <div class=\"checkbox-inline custom-primary\">
                        <label class=\"mb-0\">
                            <input name=\"noteTypes[]\" type=\"checkbox\" value=\"<?php echo \$view->escape(\$typeKey); ?>\"<?php echo in_array(\$typeKey, \$noteType) ? ' checked' : ''; ?> />
                            <span class=\"mr-0\"></span>
                            <?php echo \$view['translator']->trans(\$typeName); ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>
        </form>
\t</div>
\t<div class=\"col-xs-2 va-t\">
\t\t<a class=\"btn btn-primary btn-leadnote-add pull-right\" href=\"<?php echo \$view['router']->path('mautic_contactnote_action', ['leadId' => \$lead->getId(), 'objectAction' => 'new']); ?>\" data-toggle=\"ajaxmodal\" data-target=\"#MauticSharedModal\" data-header=\"<?php echo \$view['translator']->trans('mautic.lead.note.header.new'); ?>\"><i class=\"fa fa-plus fa-lg\"></i> <?php echo \$view['translator']->trans('mautic.lead.add.note'); ?></a>
\t</div>
</div>

<div id=\"NoteList\">
    <?php \$view['slots']->output('_content'); ?>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Note/index.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Note/index.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Note/index.html.php");
    }
}
