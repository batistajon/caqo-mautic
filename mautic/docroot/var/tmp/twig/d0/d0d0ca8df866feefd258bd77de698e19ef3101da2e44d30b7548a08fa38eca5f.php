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

/* @bundles/PluginBundle/Views/Integration/grid.html.php */
class __TwigTemplate_9a0bc4e018ca0f5c4961f034e5221c61e037b9fa7e9d82203b9f8d21c6d1beee extends Template
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
    \$view->extend('MauticPluginBundle:Integration:index.html.php');
}
?>
<?php if (count(\$items)): ?>
<div class=\"pa-md bg-auto\">
    <div class=\"row shuffle-integrations native-integrations\">
            <?php foreach (\$items as \$item):
                if (array_key_exists(\$item['plugin'], \$plugins)) {
                    \$pluginTitle = \$plugins[\$item['plugin']]['name'].' - '.\$item['display'];
                } else {
                    \$pluginTitle = \$item['name'].' - '.\$item['display'];
                }
                ?>
                <div class=\"shuffle shuffle-item grid ma-10 pull-left text-center integration plugin<?php echo \$item['plugin']; ?> integration-<?php echo \$item['name']; ?> <?php if (!\$item['enabled']) {
                    echo  'integration-disabled';
                } ?>\">
                    <div class=\"panel ovf-h pa-10\">

                        <a href=\"<?php echo \$view['router']->path((\$item['isBundle'] ? 'mautic_plugin_info' : 'mautic_plugin_config'), ['name' => \$item['name']]); ?>\" data-prevent-dismiss=\"true\" data-toggle=\"ajaxmodal\" data-target=\"#IntegrationEditModal\" data-header=\"<?php echo \$item['display']; ?>\"<?php if (\$item['isBundle']) {
                    echo ' data-footer=\"false\"';
                } ?>>
                            <p><img style=\"height: 78px;\" class=\"img img-responsive\" src=\"<?php echo \$view['assets']->getUrl(\$item['icon']); ?>\" /></p>
                            <h5 class=\"mt-20\">
                                <span class=\"ellipsis\" data-toggle=\"tooltip\" title=\"<?php echo \$pluginTitle; ?>\"><?php echo \$item['display']; ?>
                                </span>
                            </h5>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
</div>
<?php echo \$view->render('MauticCoreBundle:Helper:modal.html.php', [
    'id'            => 'IntegrationEditModal',
    'footerButtons' => true,
]); ?>

<?php else: ?>
    <?php echo \$view->render('MauticCoreBundle:Helper:noresults.html.php', [
        'message' => 'mautic.integrations.noresults',
        'tip'     => 'mautic.integration.noresults.tip',
    ]); ?>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Views/Integration/grid.html.php";
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
        return new Source("", "@bundles/PluginBundle/Views/Integration/grid.html.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Views/Integration/grid.html.php");
    }
}
