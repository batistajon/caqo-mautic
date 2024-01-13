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

/* @bundles/FormBundle/Views/FormTheme/SubmitAction/form_submitaction_sendemail_widget.html.php */
class __TwigTemplate_37e5a6e632458b31ef6a3ed629b468ab193e8891a7cefe83bd294a73b435a380 extends Template
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
    <div class=\"col-sm-8\">
        <?php echo \$view['form']->row(\$form['subject']); ?>
    </div>
    <div class=\"col-sm-4\">
        <?php echo \$view['form']->row(\$form['immediately']); ?>
        <?php echo \$view['form']->row(\$form['set_replyto']); ?>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-sm-8\" id=\"emailMessage\">
        <?php echo \$view['form']->row(\$form['message']); ?>
    </div>
    <div class=\"col-sm-4\">
        <?php echo \$view['form']->row(\$form['email_to_owner']); ?>
        <?php echo \$view['form']->row(\$form['copy_lead']); ?>
        <label class=\"control-label\"><?php echo \$view['translator']->trans('mautic.form.action.sendemail.dragfield'); ?></label>
        <div id=\"formFieldTokens\" class=\"list-group\" style=\"max-height: 250px; overflow-y: auto;\">
            <?php foreach (\$formFields as \$token => \$field): ?>
            <a class=\"list-group-item ellipsis\" href=\"#\" onclick=\"Mautic.insertTextInEditor(mQuery('#formaction_properties_message'), '<?php echo \$token; ?>');\"><?php echo \$field; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php echo \$view['form']->row(\$form['templates']); ?>
<?php echo \$view['form']->row(\$form['to']); ?>
<?php echo \$view['form']->row(\$form['cc']); ?>
<?php echo \$view['form']->row(\$form['bcc']); ?>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/FormTheme/SubmitAction/form_submitaction_sendemail_widget.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/FormTheme/SubmitAction/form_submitaction_sendemail_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/FormTheme/SubmitAction/form_submitaction_sendemail_widget.html.php");
    }
}
