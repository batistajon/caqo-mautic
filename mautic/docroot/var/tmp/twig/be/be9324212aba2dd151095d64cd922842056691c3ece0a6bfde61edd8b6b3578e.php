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

/* @bundles/NotificationBundle/Views/MobileNotification/preview.html.php */
class __TwigTemplate_39ad74a228ab3c0e549149eac791ebe1348a2495bd1525f36ad867e598b952ac extends Template
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
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
/* @var \\Mautic\\NotificationBundle\\Entity\\Notification \$notification */
\$url    = \$notification->getUrl();
\$button = \$notification->getButton();

?>
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            <?php echo \$notification->getHeading(); ?>
            <?php if (\$url) : ?>
            <span class=\"pull-right\">
                <a href=\"<?php echo \$url; ?>\" target=\"_blank\"><span class=\"fa fa-external-link\"></span></a>
            </span>
            <?php endif; ?>
        </h3>
    </div>
    <div class=\"panel-body\">
        <p><?php echo \$notification->getMessage(); ?></p>
        <?php if (\$url && \$button) : ?>
            <br>
            <p><a href=\"<?php echo \$url; ?>\" class=\"btn btn-primary\"><?php echo \$button; ?></a></p>
        <?php endif; ?>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Views/MobileNotification/preview.html.php";
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
        return new Source("", "@bundles/NotificationBundle/Views/MobileNotification/preview.html.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Views/MobileNotification/preview.html.php");
    }
}
