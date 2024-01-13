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

/* @bundles/PluginBundle/Views/Integration/index.html.php */
class __TwigTemplate_f6724cea42ef8f854427392197289bee7936faf60f189924cc21c12397b9c8ee extends Template
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
\$view['slots']->set('mauticContent', 'integration');

\$header = \$view['translator']->trans('mautic.plugin.manage.plugins');
if (\$pluginFilter) {
    \$filterValue = \$pluginFilter['id'];
    \$header .= ' - '.\$pluginFilter['name'];
} else {
    \$filterValue = '';
}
\$view['slots']->set('headerTitle', \$header);

\$view['slots']->set('actions', \$view->render('MauticCoreBundle:Helper:page_actions.html.php', [
    'customButtons' => [
        [
            'attr' => [
                'data-toggle' => 'ajax',
                'href'        => \$view['router']->path('mautic_plugin_reload'),
            ],
            'btnText'   => \$view['translator']->trans('mautic.plugin.reload.plugins'),
            'iconClass' => 'fa fa-cubes',
            'tooltip'   => 'mautic.plugin.reload.plugins.tooltip',
        ],
    ],
]));
?>

<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
    <div class=\"panel-body\">
        <div class=\"box-layout\">
            <div class=\"row\">
                <div class=\"col-xs-3 va-m\">
                    <select id=\"integrationFilter\" onchange=\"Mautic.filterIntegrations(true);\" class=\"form-control\" data-placeholder=\"<?php echo \$view['translator']->trans('mautic.integration.filter.all'); ?>\">
                        <option value=\"\"></option>
                        <?php foreach (\$plugins as \$a): ?>
                        <option<?php echo (\$filterValue === \$a['id']) ? ' selected' : ''; ?> value=\"<?php echo \$view->escape(\$a['id']); ?>\">
                            <?php echo \$a['name']; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
    </div>

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
        return "@bundles/PluginBundle/Views/Integration/index.html.php";
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
        return new Source("", "@bundles/PluginBundle/Views/Integration/index.html.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Views/Integration/index.html.php");
    }
}
