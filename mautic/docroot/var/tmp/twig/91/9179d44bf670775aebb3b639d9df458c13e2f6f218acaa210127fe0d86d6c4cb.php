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

/* @bundles/LeadBundle/Views/Import/progress.html.php */
class __TwigTemplate_edd670620bcab1d121385025aa68cd78e440b9089550b9738e5de94271abbfaa extends Template
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
\$view->extend('MauticCoreBundle:Default:content.html.php');

\$object     = \$app->getRequest()->get('object', 'contacts');
\$objectName = \$view['translator']->trans(\$objectName);

\$view['slots']->set('mauticContent', 'leadImport');
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.lead.import.leads', ['%object%' => \$objectName]));

\$percent    = \$progress->toPercent();
\$id         = (\$complete) ? 'leadImportProgressComplete' : 'leadImportProgress';
\$header     = (\$complete) ? 'mautic.lead.import.success' : 'mautic.lead.import.donotleave';
?>

<div class=\"row ma-lg\" id=\"<?php echo \$id; ?>\">
    <div class=\"col-sm-offset-3 col-sm-6 text-center\">
        <div class=\"panel panel-<?php echo (\$complete) ? 'success' : 'danger'; ?>\">
            <div class=\"panel-heading\">

                <h4 class=\"panel-title\"><?php echo \$view['translator']->trans(\$header, ['object' => \$object]); ?></h4>
            </div>
            <div class=\"panel-body\">
                <?php if (!\$complete): ?>
                    <h4><?php echo \$view['translator']->trans('mautic.lead.import.inprogress'); ?></h4>
                <?php else: ?>
                    <h4>
                        <?php echo \$view['translator']->trans(
                            'mautic.lead.import.stats',
                            [
                            '%merged%'  => \$import->getUpdatedCount(),
                            '%created%' => \$import->getInsertedCount(),
                            '%ignored%' => \$import->getIgnoredCount(),
                            ]
                        ); ?>
                    </h4>
                <?php endif; ?>
                <div class=\"progress mt-md\" style=\"height:50px;\">
                    <div class=\"progress-bar-import progress-bar progress-bar-striped<?php if (!\$complete) {
                            echo ' active';
                        } ?>\" role=\"progressbar\" aria-valuenow=\"<?php echo \$progress->getDone(); ?>\" aria-valuemin=\"0\" aria-valuemax=\"<?php echo \$progress->getTotal(); ?>\" style=\"width: <?php echo \$percent; ?>%; height: 50px;\">
                        <span class=\"sr-only\"><?php echo \$percent; ?>%</span>
                    </div>
                </div>
            </div>
            <?php if (!empty(\$failedRows)): ?>
                <ul class=\"list-group\">
                    <?php foreach (\$failedRows as \$row): ?>
                        <?php \$lineNumber = isset(\$row['properties']['line']) ? \$row['properties']['line'] : 'N/A'; ?>
                        <?php \$failure    = isset(\$row['properties']['error']) ? \$row['properties']['error'] : 'N/A'; ?>
                        <li class=\"list-group-item text-left\">
                            <a target=\"_new\" class=\"text-danger\">
                                <?php echo \"(#\$lineNumber) \$failure\"; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div class=\"panel-footer\">
                <p class=\"small\"><span class=\"imported-count\"><?php echo \$progress->getDone(); ?></span> / <span class=\"total-count\"><?php echo \$progress->getTotal(); ?></span></p>
                <?php if (!\$complete): ?>
                    <div>
                        <a class=\"btn btn-danger\" href=\"<?php echo \$view['router']->path(
                            'mautic_import_action',
                            ['objectAction' => 'cancel', 'object' => \$object]
                        ); ?>\" data-toggle=\"ajax\">
                            <?php echo \$view['translator']->trans('mautic.core.form.cancel'); ?>
                        </a>
                        <a class=\"btn btn-primary\" href=\"<?php echo \$view['router']->path(
                            'mautic_import_action',
                            ['objectAction' => 'queue', 'object' => \$object]
                        ); ?>\" data-toggle=\"ajax\">
                            <?php echo \$view['translator']->trans('mautic.lead.import.queue.btn'); ?>
                        </a>
                    </div>
                <?php else: ?>
                    <div>
                        <a class=\"btn btn-success\" href=\"<?php echo \$view['router']->path(\$indexRoute, \$indexRouteParams); ?>\" data-toggle=\"ajax\">
                            <?php echo \$view['translator']->trans('mautic.lead.list.view', ['%objects%' => \$objectName]); ?>
                        </a>
                        <a class=\"btn btn-success\" href=\"<?php echo \$view['router']->path('mautic_import_index', ['object' => \$object]); ?>\" data-toggle=\"ajax\">
                            <?php echo \$view['translator']->trans('mautic.lead.view.imports'); ?>
                        </a>
                        <a class=\"btn btn-success\" href=\"<?php echo \$view['router']->path(
                            'mautic_import_action',
                            ['objectAction' => 'view', 'objectId' => \$import->getId(), 'object' => \$object]
                        ); ?>\" data-toggle=\"ajax\">
                            <?php echo \$view['translator']->trans('mautic.lead.import.result.info', ['%import%' => \$import->getName()]); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Import/progress.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Import/progress.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Import/progress.html.php");
    }
}
