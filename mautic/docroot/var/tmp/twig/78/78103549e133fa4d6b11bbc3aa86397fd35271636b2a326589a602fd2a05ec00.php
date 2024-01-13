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

/* @bundles/PageBundle/Views/Result/export.html.php */
class __TwigTemplate_af2eccd5d1d666f96e009935efe87f28087999362483c32b9a03f7c6a65dc03c extends Template
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
\$view->extend('MauticCoreBundle:Default:slim.html.php');
\$view['slots']->set('pageTitle', \$pageTitle);
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.page.result.header.index', [
    '%name%' => \$page->getName(),
]));
?>

<div class=\"pageresults\">
    <table class=\"table table-hover table-striped table-bordered pageresult-list\">
        <thead>
        <tr>
            <th class=\"col-pageresult-id\"></th>
            <th class=\"col-pageresult-leadId\"><?php echo \$view['translator']->trans('mautic.lead.report.contact_id'); ?></th>
            <th class=\"col-pageresult-formId\"><?php echo \$view['translator']->trans('mautic.form.report.form_id'); ?></th>
            <th class=\"col-pageresult-date\"><?php echo \$view['translator']->trans('mautic.form.result.thead.date'); ?></th>
            <th class=\"col-pageresult-ip\"><?php echo \$view['translator']->trans('mautic.core.ipaddress'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach (\$results as \$item):?>
            <tr>
                <td><?php echo \$item['id']; ?></td>
                <td><?php echo \$item['leadId']; ?></td>
                <td><?php echo \$item['formId']; ?></td>
                <td><?php echo \$view['date']->toFull(\$item['dateSubmitted'], 'UTC'); ?></td>
                <td><?php echo \$item['ipAddress']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Views/Result/export.html.php";
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
        return new Source("", "@bundles/PageBundle/Views/Result/export.html.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Views/Result/export.html.php");
    }
}
