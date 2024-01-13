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

/* @bundles/CoreBundle/Views/Notification/flashes.html.php */
class __TwigTemplate_c2fe211595e55fbc2efaff58cdafa254171830e6f2cecb61e8c22bc5d1fcd27f extends Template
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
if (!isset(\$alertType)) {
    \$alertType = 'growl';
}

?>
<div id=\"flashes\"<?php echo ('growl' == \$alertType) ? ' class=\"alert-growl-container\"' : ''; ?>>
    <?php echo \$view->render('MauticCoreBundle:Notification:flash_messages.html.php', [
        'dismissible' => (empty(\$notdismissible)) ? ' alert-dismissible' : '',
        'alertType'   => \$alertType,
    ]); ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Notification/flashes.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Notification/flashes.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Notification/flashes.html.php");
    }
}
