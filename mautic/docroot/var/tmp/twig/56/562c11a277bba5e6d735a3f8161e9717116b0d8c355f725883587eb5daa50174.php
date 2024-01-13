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

/* @bundles/AssetBundle/Views/Remote/browse.html.php */
class __TwigTemplate_4468ee3745f5a47900481d787112e1f511f43b7da90e66e7c1334d086fa6edcf extends Template
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
if ('index' == \$tmpl) :
\$view->extend('MauticCoreBundle:Default:content.html.php');
\$view['slots']->set('mauticContent', 'asset');
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.asset.remote.file.browse'));
?>

<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
    <div class=\"page-list\">
<?php endif; ?>
        <?php if (count(\$integrations)): ?>
            <!-- start: box layout -->
            <div class=\"box-layout\">
                       <!-- step container -->
                <div class=\"col-md-3 bg-white\">
                    <div class=\"pt-md pr-md pb-md\">
                        <ul class=\"list-group list-group-tabs\">
                            <?php \$step = 1; ?>
                            <?php /** @var \\Mautic\\PluginBundle\\Integration\\AbstractIntegration \$integration */ ?>
                            <?php foreach (\$integrations as \$integration): ?>
                                <li class=\"list-group-item<?php if (1 === \$step) {
    echo ' active';
} ?>\" id=\"tab<?php echo \$integration->getName(); ?>\">
                                    <a href=\"#\" class=\"steps\" onclick=\"Mautic.updateRemoteBrowser('<?php echo \$integration->getName(); ?>');\">
                                        <?php echo \$integration->getDisplayName(); ?>
                                    </a>
                                </li>
                                <?php ++\$step; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <!--/ step container -->

                <!-- container -->
                <div class=\"col-md-9 bg-auto bdr-l\">
                    <div id=\"remoteFileBrowser\">
                        <div class=\"alert alert-warning col-md-6 col-md-offset-3 mt-md\">
                            <p><?php echo \$view['translator']->trans('mautic.asset.remote.select_service'); ?></p>
                        </div>
                    </div>
                </div>
                <!--/ end: container -->
            </div>
            <!--/ end: box layout -->
        <?php endif; ?>
<?php if ('index' == \$tmpl) : ?>
    </div>
</div>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Views/Remote/browse.html.php";
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
        return new Source("", "@bundles/AssetBundle/Views/Remote/browse.html.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Views/Remote/browse.html.php");
    }
}
