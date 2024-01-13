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

/* @bundles/CoreBundle/Views/Standard/index.html.php */
class __TwigTemplate_a211bb160f33dd3c2b9ef73252c8b56e098f454c48826b7d4b56f2f423641868 extends Template
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
if (!\$view['slots']->get('mauticContent')) {
    if (isset(\$mauticContent)) {
        \$view['slots']->set('mauticContent', \$mauticContent);
    }
}

if (!\$view['slots']->get('headerTitle')) {
    if (!isset(\$headerTitle)) {
        \$headerTitle = 'Mautic';
    }
    \$view['slots']->set('headerTitle', \$view['translator']->trans(\$headerTitle));
}

\$view['slots']->set(
    'actions',
    \$view->render(
        'MauticCoreBundle:Helper:page_actions.html.php',
        [
            'templateButtons' => [
                'new' => \$permissions[\$permissionBase.':create'],
            ],
            'actionRoute'     => \$actionRoute,
            'indexRoute'      => \$indexRoute,
            'translationBase' => \$translationBase,
        ]
    )
);
?>

<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
    <?php echo \$view->render(
        'MauticCoreBundle:Helper:list_toolbar.html.php',
        [
            'searchValue'      => \$searchValue,
            'searchHelp'       => isset(\$searchHelp) ? \$searchHelp : '',
            'action'           => \$currentRoute,
            'actionRoute'      => \$actionRoute,
            'indexRoute'       => \$indexRoute,
            'translationBase'  => \$translationBase,
            'preCustomButtons' => (isset(\$toolBarButtons)) ? \$toolBarButtons : null,
            'templateButtons'  => [
                'delete' => \$permissions[\$permissionBase.':delete'],
            ],
            'filters' => (isset(\$filters)) ? \$filters : [],
        ]
    ); ?>

    <div class=\"page-list\">
        <?php echo \$view['content']->getCustomContent('content.above', \$mauticTemplateVars); ?>
        <?php \$view['slots']->output('_content'); ?>
        <?php echo \$view['content']->getCustomContent('content.below', \$mauticTemplateVars); ?>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Standard/index.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Standard/index.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Standard/index.html.php");
    }
}
