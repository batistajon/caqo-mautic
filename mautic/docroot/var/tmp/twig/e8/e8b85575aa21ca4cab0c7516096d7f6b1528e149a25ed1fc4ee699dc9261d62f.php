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

/* @bundles/PluginBundle/Views/FormTheme/Integration/_integration_details_supportedFeatures_row.html.php */
class __TwigTemplate_15fa1c17be1bda5673ebb0b7c51752b910ea273c9a359c73b3e9355f6e0ac129 extends Template
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
\$attr      = \$form->vars['attr'];
\$builtin   = (isset(\$formSettings['builtin_features'])) ? \$formSettings['builtin_features'] : [];
\$showLabel = (count(\$builtin) !== count(\$form->children));
?>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <?php if (\$showLabel): ?>
            <h4 class=\"mb-sm\"><?php echo \$view['translator']->trans(\$form->vars['label']); ?></h4>
        <?php endif; ?>
        <?php if (!empty(\$formNotes['supported_features'])): ?>
            <div class=\"alert alert-<?php echo \$formNotes['supported_features']['type']; ?>\">
                <?php echo \$view['translator']->trans(\$formNotes['supported_features']['note']); ?>
            </div>
        <?php endif; ?>
        <?php foreach (\$form->children as \$child): ?>
            <?php if (!in_array(\$child->vars['value'], \$builtin)): ?>
            <div class=\"checkbox\" >
                <label>
                    <?php echo \$view['form']->widget(\$child, ['attr' => \$attr]); ?>
                    <?php echo \$view['translator']->trans(\$child->vars['label']); ?>
                </label>
            </div>
            <?php else: ?>
                <?php \$child->isRendered(); ?>
                <input type=\"hidden\" id=\"<?php echo \$child->vars['id']; ?>\" name=\"<?php echo \$child->vars['full_name']; ?>\" value=\"<?php echo \$view->escape(\$child->vars['value']); ?>\" />
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Views/FormTheme/Integration/_integration_details_supportedFeatures_row.html.php";
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
        return new Source("", "@bundles/PluginBundle/Views/FormTheme/Integration/_integration_details_supportedFeatures_row.html.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Views/FormTheme/Integration/_integration_details_supportedFeatures_row.html.php");
    }
}
