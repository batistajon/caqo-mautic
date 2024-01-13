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

/* @bundles/CoreBundle/Views/SortablePanels/panel.html.php */
class __TwigTemplate_e9a8d32322fdebff013f8133c446bfc51a5cbba47bdf072ddea006c821706674 extends Template
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
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

\$templateVariables = [
    'panelId' => \$panelId,
    'panel'   => \$panel,
];

if (isset(\$panel['templateVariables'])) {
    \$templateVariables = array_merge(\$templateVariables, \$panel['templateVariables']);
}

\$actionsTemplate = empty(\$panel['actionsTemplate']) ?
    'MauticCoreBundle:SortablePanels:actions.html.php' : \$panel['actionsTemplate'];
?>

<div class=\"panel<?php if (isset(\$panel['class'])) {
    echo ' '.\$panel['class'];
} ?>\" data-sortable-id=\"panel_<?php echo \$panelId; ?>\">
    <div class=\"sortable-panel-wrapper\">
        <?php echo \$view->render(\$actionsTemplate, \$templateVariables); ?>
        <div class=\"row ml-0 mr-0 sortable-panel-content\">
            <?php
            if (isset(\$panel['template'])):
            echo \$view->render(\$panel['template'], \$templateVariables);
            else:
            echo '<span class=\"sortable-panel-label\">'.(isset(\$panel['label']) ? \$panel['label'] : '').'</span>';
            endif;
            ?>
        </div>
        <?php if (!empty(\$panel['footer']) || !empty(\$panel['footerTemplate'])): ?>
        <div class=\"panel-footer sortable-panel-footer\">
            <?php
            if (!empty(\$panel['footer'])):
            echo \$panel['footer'];
            endif;

            if (!empty(\$panel['footerTemplate'])):
                echo \$view->render(\$panel['footerTemplate'], \$templateVariables);
            endif;
            ?>
        </div>
        <?php endif; ?>
    </div>

</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/SortablePanels/panel.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/SortablePanels/panel.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/SortablePanels/panel.html.php");
    }
}
