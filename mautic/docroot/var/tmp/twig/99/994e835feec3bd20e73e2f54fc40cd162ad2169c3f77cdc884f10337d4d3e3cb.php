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

/* @bundles/EmailBundle/Views/FormTheme/Config/monitored_email_widget.html.php */
class __TwigTemplate_1269ab45077e77209a7232e3ceb9088583552aa13914bdc09a3509e3fbc1b619 extends Template
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
 * @copyright   2015 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
foreach (\$form->children as \$child): ?>
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            <?php echo \$view['translator']->trans(\$child->vars['label']); ?>
        </h3>
    </div>
    <div class=\"panel-body\">
        <?php \$tooltip = \$view['translator']->hasId(\$child->vars['label'].'.tooltip') ? \$view['translator']->trans(\$child->vars['label'].'.tooltip') : ''; ?>
        <?php if (\$tooltip): ?>
            <p><?php echo \$tooltip; ?></p>
        <?php endif; ?>
        <?php echo \$view['form']->widget(\$child); ?>
    </div>
</div>
<?php endforeach; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Views/FormTheme/Config/monitored_email_widget.html.php";
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
        return new Source("", "@bundles/EmailBundle/Views/FormTheme/Config/monitored_email_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Views/FormTheme/Config/monitored_email_widget.html.php");
    }
}
