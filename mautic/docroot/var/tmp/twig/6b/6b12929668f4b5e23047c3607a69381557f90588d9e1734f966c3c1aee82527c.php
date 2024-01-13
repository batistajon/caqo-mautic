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

/* @bundles/WebhookBundle/Views/FormTheme/Config/_config_webhookconfig_widget.html.php */
class __TwigTemplate_037189fb30136bf797b3a964f0a2f832cb427c7549d5caa7a8f2738ca4ba4de8 extends Template
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

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><?php echo \$view['translator']->trans('mautic.config.tab.webhookconfig'); ?></h3>
    </div>
    <div class=\"panel-body\">
        <?php foreach (\$form->children as \$f): ?>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <?php echo \$view['form']->row(\$f); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Views/FormTheme/Config/_config_webhookconfig_widget.html.php";
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
        return new Source("", "@bundles/WebhookBundle/Views/FormTheme/Config/_config_webhookconfig_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Views/FormTheme/Config/_config_webhookconfig_widget.html.php");
    }
}