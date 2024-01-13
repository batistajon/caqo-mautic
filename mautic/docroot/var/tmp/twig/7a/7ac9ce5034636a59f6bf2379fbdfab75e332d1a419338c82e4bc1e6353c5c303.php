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

/* @bundles/LeadBundle/Views/Import/list.html.php */
class __TwigTemplate_e43ba2537f43d89bc0153d00d2531365bd27febc8b88721e1e7ab3c3a81ea41f extends Template
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
if ('index' == \$tmpl):
    \$view->extend('MauticLeadBundle:Import:index.html.php');
endif;
?>

<?php if (count(\$items)): ?>
<div class=\"table-responsive\">
    <table class=\"table table-hover table-striped table-bordered\" id=\"importTable\">
        <thead>
            <tr>
                <?php
                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => \$sessionVar,
                    'orderBy'    => \$tablePrefix.'.status',
                    'text'       => 'mautic.lead.import.status',
                    'class'      => 'col-status',
                ]);

                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => \$sessionVar,
                    'orderBy'    => \$tablePrefix.'.originalFile',
                    'text'       => 'mautic.lead.import.source.file',
                    'class'      => 'col-original-file',
                ]);

                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'text'  => 'mautic.lead.import.runtime',
                    'class' => 'col-runtime',
                ]);

                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'text'  => 'mautic.lead.import.progress',
                    'class' => 'col-progress',
                ]);

                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => \$sessionVar,
                    'orderBy'    => \$tablePrefix.'.lineCount',
                    'text'       => 'mautic.lead.import.line.count',
                    'class'      => 'col-line-count',
                ]);

                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => \$sessionVar,
                    'orderBy'    => \$tablePrefix.'.insertedCount',
                    'text'       => 'mautic.lead.import.inserted.count',
                    'class'      => 'col-inserted-count',
                ]);

                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => \$sessionVar,
                    'orderBy'    => \$tablePrefix.'.updatedCount',
                    'text'       => 'mautic.lead.import.updated.count',
                    'class'      => 'col-updated-count',
                ]);

                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => \$sessionVar,
                    'orderBy'    => \$tablePrefix.'.ignoredCount',
                    'text'       => 'mautic.lead.import.ignored.count',
                    'class'      => 'col-ignored-count',
                ]);

                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => \$sessionVar,
                    'orderBy'    => \$tablePrefix.'.createdByUser',
                    'text'       => 'mautic.core.create.by.past.tense',
                    'class'      => 'col-created visible-md visible-lg',
                ]);

                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => \$sessionVar,
                    'orderBy'    => \$tablePrefix.'.dateAdded',
                    'text'       => 'mautic.core.date.added',
                    'class'      => 'col-date-added visible-md visible-lg',
                    'default'    => true,
                ]);

                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => \$sessionVar,
                    'orderBy'    => \$tablePrefix.'.id',
                    'text'       => 'mautic.core.id',
                    'class'      => 'col-lead-id visible-md visible-lg',
                ]);
                ?>
            </tr>
        </thead>
        <tbody>
        <?php echo \$view->render('MauticLeadBundle:Import:list_rows.html.php', [
            'items'           => \$items,
            'permissions'     => \$permissions,
            'indexRoute'      => \$indexRoute,
            'permissionBase'  => \$permissionBase,
            'translationBase' => \$translationBase,
            'actionRoute'     => \$actionRoute,
        ]); ?>
        </tbody>
    </table>
</div>
<div class=\"panel-footer\">
    <?php echo \$view->render('MauticCoreBundle:Helper:pagination.html.php', [
        'totalItems' => \$totalItems,
        'page'       => \$page,
        'limit'      => \$limit,
        'menuLinkId' => \$indexRoute,
        'baseUrl'    => \$view['router']->path(\$indexRoute, ['object' => \$app->getRequest()->get('object', 'contacts')]),
        'sessionVar' => \$sessionVar,
    ]); ?>
</div>
<?php else: ?>
<?php echo \$view->render('MauticCoreBundle:Helper:noresults.html.php'); ?>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Import/list.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Import/list.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Import/list.html.php");
    }
}
