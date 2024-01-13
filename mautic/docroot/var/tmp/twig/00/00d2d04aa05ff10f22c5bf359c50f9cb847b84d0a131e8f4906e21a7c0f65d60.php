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

/* @bundles/LeadBundle/Views/Import/list_rows.html.php */
class __TwigTemplate_d3e103f6fb647f7ba062dacca9652d1164d7daf3585ca3ee4d7dec958aa925b1 extends Template
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

/** @var \\Mautic\\LeadBundle\\Entity\\Import \$item */
?>
<?php foreach (\$items as \$item): ?>
    <?php
        \$objectRoute = null;
        switch (\$item->getObject()) {
            case 'lead':
                \$objectRoute = 'mautic_contact_index';
                break;
        }
    ?>
    <tr>
        <td class=\"col-actions text-center\">
            <span class=\"label label-<?php echo \$item->getSatusLabelClass(); ?>\">
                <?php echo \$view['translator']->trans('mautic.lead.import.status.'.\$item->getStatus()); ?>
            </span>
        </td>
        <td>
            <div>
                <?php if (!in_array(\$item->getStatus(), [\$item::FAILED, \$item::IMPORTED, \$item::MANUAL]) && \$permissions[\$permissionBase.':publish']): ?>
                <?php echo \$view->render(
                    'MauticCoreBundle:Helper:publishstatus_icon.html.php',
                    ['item' => \$item, 'model' => 'lead.import']
                ); ?>
                <?php endif; ?>
                <?php if (\$view['security']->hasEntityAccess(true, \$permissions[\$permissionBase.':viewother'], \$item->getCreatedBy())) : ?>
                    <a href=\"<?php echo \$view['router']->path(
                        \$actionRoute,
                        ['objectAction' => 'view', 'objectId' => \$item->getId(), 'object' => \$app->getRequest()->get('object', 'contacts')]
                    ); ?>\" data-toggle=\"ajax\">
                        <?php echo \$item->getName(); ?>
                    </a>
                <?php else : ?>
                    <?php echo \$item->getName(); ?>
                <?php endif; ?>
            </div>
        </td>
        <td class=\"visible-md visible-lg\"><?php echo \$item->getRunTime() ? \$view['date']->formatRange(\$item->getRunTime()) : ''; ?></td>
        <td class=\"visible-md visible-lg\"><?php echo \$item->getProgressPercentage(); ?>%</td>
        <td class=\"visible-md visible-lg\">
            <?php if (null !== \$objectRoute) : ?>
                <span class=\"mt-xs label label-primary has-click-event clickable-stat\">
                    <a href=\"<?php echo \$view['router']->path(
                        \$objectRoute,
                        ['search' => \$view['translator']->trans('mautic.lead.lead.searchcommand.import_id').':'.\$item->getId()]
                    ); ?>\"><?php echo \$item->getLineCount(); ?>
                    </a>
                </span>
            <?php else : ?>
                <?php echo \$item->getLineCount(); ?>
            <?php endif; ?>
        </td>
        <td class=\"visible-md visible-lg\">
            <?php if (null !== \$objectRoute) : ?>
                <span class=\"mt-xs label label-primary has-click-event clickable-stat\">
                    <a href=\"<?php echo \$view['router']->path(
                        \$objectRoute,
                        ['search' => \$view['translator']->trans('mautic.lead.lead.searchcommand.import_id').':'.\$item->getId().' '.\$view['translator']->trans('mautic.lead.lead.searchcommand.import_action').':inserted']
                    ); ?>\"><?php echo \$item->getInsertedCount(); ?>
                    </a>
                </span>
            <?php else : ?>
                <?php echo \$item->getInsertedCount(); ?>
            <?php endif; ?>
        </td>
        <td class=\"visible-md visible-lg\">
            <?php if (null !== \$objectRoute) : ?>
                <span class=\"mt-xs label label-primary has-click-event clickable-stat\">
                    <a href=\"<?php echo \$view['router']->path(
                        \$objectRoute,
                        ['search' => \$view['translator']->trans('mautic.lead.lead.searchcommand.import_id').':'.\$item->getId().' '.\$view['translator']->trans('mautic.lead.lead.searchcommand.import_action').':updated']
                    ); ?>\"><?php echo \$item->getUpdatedCount(); ?>
                    </a>
                </span>
            <?php else : ?>
                <?php echo \$item->getUpdatedCount(); ?>
            <?php endif; ?>
        </td>
        <td class=\"visible-md visible-lg\"><?php echo \$item->getIgnoredCount(); ?></td>
        <td class=\"visible-md visible-lg\"><?php echo \$item->getCreatedByUser(); ?></td>
        <td class=\"visible-md visible-lg\">
            <abbr title=\"<?php echo \$view['date']->toFull(\$item->getDateAdded()); ?>\">
                <?php echo \$view['date']->toText(\$item->getDateAdded()); ?>
            </abbr>
        </td>
        <td class=\"visible-md visible-lg\"><?php echo \$item->getId(); ?></td>
    </tr>
<?php endforeach; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Import/list_rows.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Import/list_rows.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Import/list_rows.html.php");
    }
}
