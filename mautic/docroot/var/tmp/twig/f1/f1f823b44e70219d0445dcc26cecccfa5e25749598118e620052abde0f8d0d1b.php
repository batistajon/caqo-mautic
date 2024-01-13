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

/* @bundles/PageBundle/Views/Result/list.html.php */
class __TwigTemplate_c3cfcd771af1cfd56475497e314e2ea0c03047cdb4cdd17e29b8afc510be2ecf extends Template
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
 * @copyright   2021 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
if ('index' == \$tmpl):
    \$view->extend('MauticPageBundle:Result:index.html.php');
endif;

\$pageId = \$activePage->getId();
?>
<div class=\"table-responsive table-responsive-force\">
    <table class=\"table table-hover table-striped table-bordered pageresult-list\" id=\"pageResultsTable\">
        <thead>
            <tr>
                <?php
                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => 'pageresult.'.\$pageId,
                    'orderBy'    => 's.id',
                    'text'       => 'mautic.form.report.submission.id',
                    'class'      => 'col-pageresult-id',
                    'filterBy'   => 's.id',
                ]);

                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => 'pageresult.'.\$pageId,
                    'orderBy'    => 's.lead_id',
                    'text'       => 'mautic.lead.report.contact_id',
                    'class'      => 'col-pageresult-lead-id',
                    'filterBy'   => 's.lead_id',
                ]);

                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => 'pageresult.'.\$pageId,
                    'orderBy'    => 's.form_id',
                    'text'       => 'mautic.form.report.form_id',
                    'class'      => 'col-pageresult-form-id',
                    'filterBy'   => 's.form_id',
                ]);

                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => 'pageresult.'.\$pageId,
                    'orderBy'    => 's.date_submitted',
                    'text'       => 'mautic.form.result.thead.date',
                    'class'      => 'col-pageresult-date',
                    'default'    => true,
                    'filterBy'   => 's.date_submitted',
                    'dataToggle' => 'date',
                ]);

                echo \$view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => 'pageresult.'.\$pageId,
                    'orderBy'    => 'i.ip_address',
                    'text'       => 'mautic.core.ipaddress',
                    'class'      => 'col-pageresult-ip',
                    'filterBy'   => 'i.ip_address',
                ]);
                ?>
            </tr>
        </thead>
        <tbody>
        <?php if (count(\$items)): ?>
        <?php foreach (\$items as \$item): ?>
            <?php \$item['name'] = \$view['translator']->trans('mautic.form.form.results.name', ['%id%' => \$item['id']]); ?>
            <tr>
                <td><?php echo \$view->escape(\$item['id']); ?></td>
                <td>
                    <?php if (!empty(\$item['leadId'])): ?>
                    <a href=\"<?php echo \$view['router']->path('mautic_contact_action', ['objectAction' => 'view', 'objectId' => \$item['leadId']]); ?>\" data-toggle=\"ajax\">
                        <?php echo \$view->escape(\$item['leadId']); ?>
                    </a>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if (!empty(\$item['formId'])): ?>
                    <a href=\"<?php echo \$view['router']->path('mautic_form_action', ['objectAction' => 'view', 'objectId' => \$item['formId']]); ?>\" data-toggle=\"ajax\">
                        <?php echo \$view->escape(\$item['formId']); ?>
                    </a>
                    <?php endif; ?>
                </td>
                <td><?php echo \$view['date']->toFull(\$item['dateSubmitted'], 'UTC'); ?></td>
                <td><?php echo \$view->escape(\$item['ipAddress']); ?></td>
            </tr>
        <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan=\"4\">
                    <?php echo \$view->render('MauticCoreBundle:Helper:noresults.html.php'); ?>
                </td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
<div class=\"panel-footer\">
    <?php echo \$view->render('MauticCoreBundle:Helper:pagination.html.php', [
        'totalItems' => \$totalCount,
        'page'       => \$page,
        'limit'      => \$limit,
        'baseUrl'    => \$view['router']->path('mautic_page_results', ['objectId' => \$activePage->getId()]),
        'sessionVar' => 'pageresult.'.\$pageId,
    ]); ?>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Views/Result/list.html.php";
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
        return new Source("", "@bundles/PageBundle/Views/Result/list.html.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Views/Result/list.html.php");
    }
}
