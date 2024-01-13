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

/* @bundles/FormBundle/Views/FormTheme/SubmitAction/submit_action_repost_widget.html.php */
class __TwigTemplate_3419f9a95e8c849d91a61135a2c7e89e286839edcc12a1217ebaf734d97c908e extends Template
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
        <?php echo \$view['form']->row(\$form['post_url']); ?>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <?php echo \$view['form']->row(\$form['failure_email']); ?>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <?php echo \$view['form']->row(\$form['authorization_header']); ?>
    </div>
</div>

<?php unset(\$form['post_url'], \$form['failure_email'], \$form['authorization_header']); ?>

<h4><?php echo \$view['translator']->trans('mautic.form.action.repost.field_mapping'); ?></h4>
<div class=\"row mt-lg\">
    <?php foreach (\$form as \$child): ?>
    <div class=\"col-sm-6\">
        <?php echo \$view['form']->row(\$child); ?>
    </div>
    <?php endforeach; ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/FormTheme/SubmitAction/submit_action_repost_widget.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/FormTheme/SubmitAction/submit_action_repost_widget.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/FormTheme/SubmitAction/submit_action_repost_widget.html.php");
    }
}
