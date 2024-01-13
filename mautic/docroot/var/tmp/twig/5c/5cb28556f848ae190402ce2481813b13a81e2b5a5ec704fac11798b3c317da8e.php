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

/* @bundles/CategoryBundle/Views/Category/index.html.php */
class __TwigTemplate_197423fb77e6fe545c252dad463f3be71c20fe376e0d0d8aaae7a7a4d2eb58b7 extends Template
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
\$view['slots']->set('mauticContent', 'category');
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.category.header.index'));

\$view['slots']->set('actions', \$view->render('MauticCoreBundle:Helper:page_actions.html.php', [
    'templateButtons' => [
       'new' => \$permissions[\$permissionBase.':create'],
    ],
    'routeBase' => 'category',
    'query'     => ['bundle' => \$bundle, 'show_bundle_select' => true],
    'editMode'  => 'ajaxmodal',
    'editAttr'  => [
        'data-target' => '#MauticSharedModal',
        'data-header' => \$view['translator']->trans('mautic.category.header.new'),
        'data-toggle' => 'ajaxmodal',
    ],
]));
?>

<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
    <?php //TODO - Restore these buttons to the listactions when custom content is supported
    /*<div class=\"btn-group\">
        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i></button>
        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-archive\"></i></button>
    </div>*/ ?>
    <?php echo \$view->render('MauticCoreBundle:Helper:list_toolbar.html.php', [
        'searchValue' => \$searchValue,
        'searchHelp'  => 'mautic.category.help.searchcommands',
        'filters'     => [
            'bundle' => [
                'options'         => \$categoryTypes,
                'values'          => [\$bundle],
                'translateLabels' => true,
            ],
        ],
        'action' => \$currentRoute,
    ]); ?>

    <div class=\"page-list\">
        <?php \$view['slots']->output('_content'); ?>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Views/Category/index.html.php";
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
        return new Source("", "@bundles/CategoryBundle/Views/Category/index.html.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/Views/Category/index.html.php");
    }
}
