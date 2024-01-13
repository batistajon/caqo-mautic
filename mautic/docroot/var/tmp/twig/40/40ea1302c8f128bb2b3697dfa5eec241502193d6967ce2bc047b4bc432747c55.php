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

/* @bundles/LeadBundle/Views/FormTheme/FormActionCreateLead/_formaction_properties_mappedFields_row.html.php */
class __TwigTemplate_5c893babd3888ac1d81bbe6710b336ca4306bbfe2d661d4fcb658b6e8dffe6f1 extends Template
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
        <h4 class=\"mb-sm\"><?php echo \$view['translator']->trans('mautic.lead.lead.submitaction.createlead.help'); ?></h4>
        <div class=\"alert alert-warning\"><?php echo \$view['translator']->trans('mautic.lead.lead.submitaction.createlead.help2'); ?></div>
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
        return "@bundles/LeadBundle/Views/FormTheme/FormActionCreateLead/_formaction_properties_mappedFields_row.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/FormTheme/FormActionCreateLead/_formaction_properties_mappedFields_row.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/FormTheme/FormActionCreateLead/_formaction_properties_mappedFields_row.html.php");
    }
}
