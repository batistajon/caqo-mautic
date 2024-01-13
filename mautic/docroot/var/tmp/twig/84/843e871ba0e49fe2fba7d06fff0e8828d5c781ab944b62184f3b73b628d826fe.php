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

/* @bundles/LeadBundle/Views/FormTheme/ActionUpdateLead/updatelead_action_widget.html.php */
class __TwigTemplate_881da2fc6cef9465aa03b2d2f7f6707ff657f8736c76980c8ae5270cd1d2f9bd extends Template
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
    <div class=\"col-xs-12\">
        <h4 class=\"mb-sm\"><?php echo \$view['translator']->trans('mautic.lead.lead.update.action.help'); ?></h4>
    </div>
<?php foreach (\$form->children as \$child): ?>
    <div class=\"form-group col-xs-6\">
        <?php echo \$view['form']->label(\$child); ?>
        <?php echo \$view['form']->widget(\$child); ?>
    </div>
<?php endforeach; ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/FormTheme/ActionUpdateLead/updatelead_action_widget.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/FormTheme/ActionUpdateLead/updatelead_action_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/FormTheme/ActionUpdateLead/updatelead_action_widget.html.php");
    }
}
