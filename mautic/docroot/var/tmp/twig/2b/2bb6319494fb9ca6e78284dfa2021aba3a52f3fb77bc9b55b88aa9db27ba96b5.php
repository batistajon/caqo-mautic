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

/* @bundles/AssetBundle/Views/Remote/list.html.php */
class __TwigTemplate_8ded565df5fb117456f83339727c230bd3560847210787839d4c4b3ffead4934 extends Template
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
/** @var \\Gaufrette\\Filesystem \$connector */
/** @var \\MauticPlugin\\MauticCloudStorageBundle\\Integration\\CloudStorageIntegration \$integration */
if (count(\$items)): ?>
    <div class=\"panel panel-primary mb-0\">
        <div class=\"panel-body\">
            <input type='text' class='remote-file-search form-control mb-lg' autocomplete='off' placeholder=\"<?php echo \$view['translator']->trans('mautic.core.search.placeholder'); ?>\" />

            <div class=\"list-group remote-file-list\">
                <?php if (array_key_exists('dirs', \$items)) : ?>
                    <?php foreach (\$items['dirs'] as \$item) : ?>
                        <a class=\"list-group-item\" href=\"#\" onclick=\"Mautic.updateRemoteBrowser('<?php echo \$integration->getName(); ?>', '/<?php echo rtrim(\$item, '/'); ?>');\">
                            <?php echo \$item; ?>
                        </a>
                    <?php endforeach; ?>
                    <?php foreach (\$items['keys'] as \$item) : ?>
                        <a class=\"list-group-item\" href=\"#\" onclick=\"Mautic.selectRemoteFile('<?php echo \$integration->getPublicUrl(\$item); ?>');\">
                            <?php echo \$item; ?>
                        </a>
                    <?php endforeach; ?>
                <?php else : ?>
                    <?php foreach (\$items as \$item) : ?>
                        <?php if (\$connector->getAdapter()->isDirectory(\$item)) : ?>
                            <a class=\"list-group-item\" href=\"#\" onclick=\"Mautic.updateRemoteBrowser('<?php echo \$integration->getName(); ?>', '/<?php echo rtrim(\$item, '/'); ?>');\">
                                <?php echo \$item; ?>
                            </a>
                        <?php else : ?>
                            <a class=\"list-group-item\" href=\"#\" onclick=\"Mautic.selectRemoteFile('<?php echo \$integration->getPublicUrl(\$item); ?>');\">
                                <?php echo \$item; ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php else: ?>
    <?php echo \$view->render('MauticCoreBundle:Helper:noresults.html.php', ['message' => 'mautic.asset.remote.no_results']); ?>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Views/Remote/list.html.php";
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
        return new Source("", "@bundles/AssetBundle/Views/Remote/list.html.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Views/Remote/list.html.php");
    }
}
