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

/* @bundles/NotificationBundle/Views/Notification/preview.html.php */
class __TwigTemplate_8600092f4a744f41d165a87e3dabd4eebb33f6c3d68d84520ce4c305b28366f8 extends Template
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
<label>Preview</label>
<div id=\"notification-preview\" class=\"panel panel-default\">
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"icon height-auto text-center\">
                <span class=\"fa fa-bell fs-48\"></span>
            </div>
            <div class=\"text height-auto bg-white\">
                <h4>
                    <?php
                    if (\$notification->getHeading()) {
                        echo \$notification->getHeading();
                    } else {
                        echo 'Your notification header';
                    }
                    ?>  
                </h4>
                <p>
                    <?php
                    if (\$notification->getMessage()) {
                        echo \$notification->getMessage();
                    } else {
                        echo 'The message body of your notification';
                    }?>  
                </p>
                <span><?php echo \$_SERVER['HTTP_HOST']; ?></span>
            </div>
        </div>
        <?php if (\$url && \$button) : ?>
            <hr>
            <a href=\"<?php echo \$url; ?>\"><?php echo \$button; ?></a>
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
        return "@bundles/NotificationBundle/Views/Notification/preview.html.php";
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
        return new Source("", "@bundles/NotificationBundle/Views/Notification/preview.html.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Views/Notification/preview.html.php");
    }
}
