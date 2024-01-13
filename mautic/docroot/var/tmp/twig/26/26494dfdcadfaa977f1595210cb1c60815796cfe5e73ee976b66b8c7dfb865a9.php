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

/* @bundles/AssetBundle/Views/SubscribedEvents/Search/global.html.php */
class __TwigTemplate_285e9f2be3d54b45013424f2d9429faa0814dab7ce30040d5e345e4b7d49e761 extends Template
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
<?php if (!empty(\$showMore)): ?>
<a href=\"<?php echo \$view['router']->url('mautic_asset_index', ['search' => \$searchString]); ?>\" data-toggle=\"ajax\">
    <span><?php echo \$view->escape(\$view['translator']->trans('mautic.core.search.more', ['%count%' => \$remaining])); ?></span>
</a>
<?php else: ?>
<a href=\"<?php echo \$view['router']->url('mautic_asset_action', ['objectAction' => 'view', 'objectId' => \$asset->getId()]); ?>\" data-toggle=\"ajax\">
    <?php echo \$view->escape(\$asset->getTitle()); ?>
    <span class=\"label label-default pull-right\" data-toggle=\"tooltip\" title=\"<?php echo \$view['translator']->trans('mautic.asset.downloadcount'); ?>\" data-placement=\"left\">
        <?php echo \$asset->getDownloadCount(); ?>
    </span>
</a>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Views/SubscribedEvents/Search/global.html.php";
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
        return new Source("", "@bundles/AssetBundle/Views/SubscribedEvents/Search/global.html.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Views/SubscribedEvents/Search/global.html.php");
    }
}
