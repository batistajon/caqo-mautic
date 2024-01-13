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

/* @bundles/NotificationBundle/Views/FormTheme/NotificationSendList/notificationsend_list_row.html.php */
class __TwigTemplate_0a2b1ef0a0b06dedc21f9c52b66362523c98cde443808d96da6ffa05dde2c964 extends Template
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
    <div class=\"col-xs-8\">
        <?php echo \$view['form']->row(\$form['notification']); ?>
    </div>
    <div class=\"col-xs-4 mt-lg\">
        <div class=\"mt-3\">
            <?php echo \$view['form']->row(\$form['newNotificationButton']); ?>
        </div>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Views/FormTheme/NotificationSendList/notificationsend_list_row.html.php";
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
        return new Source("", "@bundles/NotificationBundle/Views/FormTheme/NotificationSendList/notificationsend_list_row.html.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Views/FormTheme/NotificationSendList/notificationsend_list_row.html.php");
    }
}
