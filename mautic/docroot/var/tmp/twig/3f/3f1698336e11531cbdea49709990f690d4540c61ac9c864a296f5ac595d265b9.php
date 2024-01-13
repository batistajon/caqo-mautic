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

/* @bundles/LeadBundle/Views/Lead/grid.html.php */
class __TwigTemplate_9b4b9478053b0dc213df2db725a11c0c083ddaec08f19086e3a898dcf36cea60 extends Template
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
if ('index' == \$tmpl) {
    \$view->extend('MauticLeadBundle:Lead:index.html.php');
}
?>

<div class=\"pa-md bg-auto\">
    <?php if (count(\$items)): ?>
        <div class=\"row shuffle-grid\">
            <?php
            foreach (\$items as \$item):
                echo \$view->render(
                    'MauticLeadBundle:Lead:grid_card.html.php',
                    [
                        'contact'       => \$item,
                        'noContactList' => (isset(\$noContactList)) ? \$noContactList : [],
                    ]
                );
            endforeach;
            ?>
        </div>
    <?php else: ?>
        <?php echo \$view->render('MauticCoreBundle:Helper:noresults.html.php', ['header' => 'mautic.lead.grid.noresults.header', 'message' => 'mautic.lead.grid.noresults.message']); ?>
        <div class=\"clearfix\"></div>
    <?php endif; ?>
</div>
<?php if (count(\$items)): ?>
    <div class=\"panel-footer\">
        <?php
        if (!isset(\$route)):
            \$route = (isset(\$link)) ? \$link : 'mautic_contact_index';
        endif;
        if (!isset(\$routeParameters)):
            \$routeParameters = [];
        endif;
        if (isset(\$objectId)):
            \$routeParameters['objectId'] = \$objectId;
        endif;

        echo \$view->render(
            'MauticCoreBundle:Helper:pagination.html.php',
            [
                'totalItems' => \$totalItems,
                'page'       => \$page,
                'limit'      => \$limit,
                'baseUrl'    => \$view['router']->path(\$route, \$routeParameters),
                'tmpl'       => (!in_array(\$tmpl, ['grid', 'index'])) ? \$tmpl : \$indexMode,
                'sessionVar' => (isset(\$sessionVar)) ? \$sessionVar : 'lead',
                'target'     => (!empty(\$target)) ? \$target : '.page-list',
            ]
        );
        ?>
    </div>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Lead/grid.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Lead/grid.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Lead/grid.html.php");
    }
}
