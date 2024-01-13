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

/* @bundles/FormBundle/Views/Builder/action.html.php */
class __TwigTemplate_cc0c681f11aea8f22f628f4e5a6726eacff914385b9fcd5e22da4f4cf53a65c3 extends Template
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
\$template   = '<div class=\"col-md-6\">{content}</div>';
\$properties = (isset(\$form['properties'])) ? \$form['properties'] : [];
?>

<div class=\"bundle-form\">
    <div class=\"bundle-form-header\">
        <h3><?php echo \$actionHeader; ?></h3>
    </div>

    <?php echo \$view['form']->start(\$form); ?>
    <div class=\"row pa-md\">
        <?php echo \$view['form']->row(\$form['name']); ?>
        <?php echo \$view['form']->row(\$form['description']); ?>
        <?php echo \$view['form']->row(\$form['properties']); ?>
    </div>
    <?php echo \$view['form']->end(\$form); ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/Builder/action.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Builder/action.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Builder/action.html.php");
    }
}
