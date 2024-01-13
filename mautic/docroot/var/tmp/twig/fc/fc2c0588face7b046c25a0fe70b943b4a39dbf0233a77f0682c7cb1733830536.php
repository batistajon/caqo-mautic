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

/* @bundles/CoreBundle/Views/Notification/flash_messages.html.php */
class __TwigTemplate_2a4db720735377f43ea09c32005e5812bf255bfb59cc77275aaf955950161389 extends Template
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
if (!isset(\$dismissible)) {
    \$dismissible = '';
}

if (!isset(\$alertType)) {
    \$alertType = 'growl';
}

\$alertClasses = ('growl' == \$alertType) ?
    ['notice' => 'alert-growl',   'warning' => 'alert-growl',   'error' => 'alert-growl'] :
    ['notice' => 'alert-success', 'warning' => 'alert-warning', 'error' => 'alert-danger'];

if (empty(\$flashes)) {
    \$flashes = \$app->getSession() ? \$view['session']->getFlashes() : [];
}
?>
<?php foreach (\$flashes as \$type => \$messages): ?>
<?php \$message = (is_array(\$messages)) ? \$messages[0] : \$messages; ?>
<div class=\"alert <?php echo \$alertClasses[\$type].\$dismissible; ?> alert-new\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"><i class=\"fa fa-times\"></i></button>
    <span><?php echo \$message; ?></span>
</div>
<?php endforeach; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Notification/flash_messages.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Notification/flash_messages.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Notification/flash_messages.html.php");
    }
}
