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

/* @bundles/LeadBundle/Views/FormTheme/ActionUpdateCompany/updatecompany_action_widget.html.php */
class __TwigTemplate_6783be4e725ff39c2bba13b52ddcb07418de05fd5f327583e9e01397145eb9bd extends Template
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
        <h4 class=\"mb-sm\"><?php echo \$view['translator']->trans('mautic.lead.company.update.action.help'); ?></h4>
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
        return "@bundles/LeadBundle/Views/FormTheme/ActionUpdateCompany/updatecompany_action_widget.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/FormTheme/ActionUpdateCompany/updatecompany_action_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/FormTheme/ActionUpdateCompany/updatecompany_action_widget.html.php");
    }
}
