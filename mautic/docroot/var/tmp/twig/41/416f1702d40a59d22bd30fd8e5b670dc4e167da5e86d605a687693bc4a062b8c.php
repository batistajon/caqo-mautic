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

/* @bundles/PluginBundle/Views/FormTheme/Integration/_integration_details_featureSettings_row.html.php */
class __TwigTemplate_5d773a5812456fb30028c5ca60de8d8200c0503f85b6130f0fabb16f4282efa1 extends Template
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
?>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <h4 class=\"mb-sm mt-lg\">
            <?php echo \$view['translator']->trans(\$form->vars['label']); ?>
        </h4>
        <?php if (!empty(\$formNotes['features'])): ?>
            <div class=\"alert alert-<?php echo \$formNotes['features']['type']; ?>\">
                <?php echo \$view['translator']->trans(\$formNotes['features']['note']); ?>
            </div>
        <?php endif; ?>

        <?php echo \$view['form']->widget(\$form); ?>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Views/FormTheme/Integration/_integration_details_featureSettings_row.html.php";
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
        return new Source("", "@bundles/PluginBundle/Views/FormTheme/Integration/_integration_details_featureSettings_row.html.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Views/FormTheme/Integration/_integration_details_featureSettings_row.html.php");
    }
}
