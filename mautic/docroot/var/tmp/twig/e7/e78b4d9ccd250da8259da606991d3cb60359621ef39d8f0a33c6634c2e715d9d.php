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

/* @bundles/EmailBundle/Views/FormTheme/Config/monitored_mailboxes_widget.html.php */
class __TwigTemplate_be6f00830d5b7c90d3a56043c190019ec92b9f0eebf34288af7109acb2cab4ed extends Template
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
?>

    <div class=\"row\">
        <?php if ('general' != \$mailbox): ?>
        <div class=\"col-md-6\">
            <?php echo \$view['form']->row(\$form['folder']); ?>
        </div>
        <div class=\"col-md-6\">
            <?php echo \$view['form']->row(\$form['override_settings']); ?>
        </div>

        <?php else: ?>
        <div class=\"col-md-6\">
            <?php echo \$view['form']->row(\$form['address']); ?>
        </div>

        <div class=\"col-md-6 pt-lg\" id=\"<?php echo \$mailbox; ?>TestButtonContainer\">
            <div class=\"button_container\">
                <?php echo \$view['form']->widget(\$form['test_connection_button']); ?>
                <span class=\"fa fa-spinner fa-spin hide\"></span>
            </div>
            <div class=\"help-block\"></div>
        </div>
        <?php endif; ?>
    </div>

    <?php if ('general' != \$mailbox): ?>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <?php echo \$view['form']->row(\$form['address']); ?>
        </div>

        <div class=\"col-md-6 pt-lg\" id=\"<?php echo \$mailbox; ?>TestButtonContainer\" data-show-on='{\"config_emailconfig_monitored_email_<?php echo \$mailbox; ?>_override_settings_1\": \"checked\"}'>
            <div class=\"button_container\">
                <?php echo \$view['form']->widget(\$form['test_connection_button']); ?>
                <span class=\"fa fa-spinner fa-spin hide\"></span>
            </div>
            <div class=\"help-block\"></div>
        </div>
    </div>
    <?php endif; ?>

    <div class=\"row\">
        <div class=\"col-sm-12 col-md-6\">
            <?php echo \$view['form']->row(\$form['host']); ?>
        </div>
        <div class=\"col-sm-4 col-md-2\">
            <?php echo \$view['form']->row(\$form['port']); ?>
        </div>
        <?php if (extension_loaded('openssl')) : ?>
        <div class=\"col-sm-8 col-md-4\">
            <?php echo \$view['form']->row(\$form['encryption']); ?>
        </div>
        <?php endif; ?>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <?php echo \$view['form']->row(\$form['user']); ?>
        </div>
        <div class=\"col-md-6\">
            <?php echo \$view['form']->row(\$form['password']); ?>
        </div>
    </div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Views/FormTheme/Config/monitored_mailboxes_widget.html.php";
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
        return new Source("", "@bundles/EmailBundle/Views/FormTheme/Config/monitored_mailboxes_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Views/FormTheme/Config/monitored_mailboxes_widget.html.php");
    }
}
