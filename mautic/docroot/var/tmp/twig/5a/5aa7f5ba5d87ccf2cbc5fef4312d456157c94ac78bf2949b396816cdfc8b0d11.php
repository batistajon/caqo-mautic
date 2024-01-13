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

/* @bundles/EmailBundle/Views/FormTheme/EmailSendList/emailsend_list_row.html.php */
class __TwigTemplate_7b5391875dcf7ff6f6a92ff91fab62578b327d3df48c503c637fcca15bcbb296 extends Template
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
    <div class=\"col-xs-<?php echo isset(\$form['email_type']) ? 7 : 12; ?>\">
        <?php echo \$view['form']->row(\$form['email']); ?>
    </div>
    <?php if (isset(\$form['email_type'])): ?>
        <div class=\"col-xs-5\">
            <?php echo \$view['form']->row(\$form['email_type']); ?>
        </div>
    <?php endif; ?>
    <?php if (isset(\$form['priority'])): ?>
        <div id=\"priority\" class=\"col-xs-5 queue_hide\">
            <?php echo \$view['form']->row(\$form['priority']); ?>
        </div>
    <?php endif; ?>
    <?php if (isset(\$form['attempts'])): ?>
        <div id=\"attempts\" class=\"col-xs-5 queue_hide\">
            <?php echo \$view['form']->row(\$form['attempts']); ?>
        </div>
    <?php endif; ?>
</div>
<div class=\"row\">
    <div class=\"col-xs-12 mt-lg\">
        <div class=\"mt-3\">
            <?php echo \$view['form']->row(\$form['newEmailButton']); ?>
            <?php echo \$view['form']->row(\$form['editEmailButton']); ?>
            <?php echo \$view['form']->row(\$form['previewEmailButton']); ?>
        </div>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Views/FormTheme/EmailSendList/emailsend_list_row.html.php";
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
        return new Source("", "@bundles/EmailBundle/Views/FormTheme/EmailSendList/emailsend_list_row.html.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Views/FormTheme/EmailSendList/emailsend_list_row.html.php");
    }
}
