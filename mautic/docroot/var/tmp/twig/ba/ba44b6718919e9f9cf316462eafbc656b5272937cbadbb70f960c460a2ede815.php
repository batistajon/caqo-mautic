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

/* @bundles/DynamicContentBundle/Views/FormTheme/DynamicContentDecisionList/dynamiccontentdecision_list_row.html.php */
class __TwigTemplate_f62bc4168ac6737648368a12e2957bd2277f6e4a13c5a1e97fe68cac33fa32b3 extends Template
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
?>

<div class=\"row\">
    <div class=\"col-xs-8\">
        <?php echo \$view['form']->row(\$form['dynamicContent']); ?>
    </div>
    <div class=\"col-xs-4 mt-lg\">
        <div class=\"mt-3\">
            <?php echo \$view['form']->row(\$form['newDynamicContentButton']); ?>
        </div>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/Views/FormTheme/DynamicContentDecisionList/dynamiccontentdecision_list_row.html.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Views/FormTheme/DynamicContentDecisionList/dynamiccontentdecision_list_row.html.php", "/var/www/html/mautic/docroot/app/bundles/DynamicContentBundle/Views/FormTheme/DynamicContentDecisionList/dynamiccontentdecision_list_row.html.php");
    }
}
