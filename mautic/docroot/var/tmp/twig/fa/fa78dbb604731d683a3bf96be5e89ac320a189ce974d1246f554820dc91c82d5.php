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

/* @bundles/AssetBundle/Views/SubscribedEvents/Timeline/index.html.php */
class __TwigTemplate_a7f9fe05e99bc00c96e09e4ff1aa65f29fc77afd12d212b9c922cd7fbec25c71 extends Template
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
?>

<div>
<?php echo \$view->render('MauticAssetBundle:Asset:preview.html.php', ['activeAsset' => \$event['extra']['asset'], 'assetDownloadUrl' => \$view['router']->url(
    'mautic_asset_action',
    ['objectAction' => 'preview', 'objectId' => \$event['extra']['asset']->getId()]
)]); ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Views/SubscribedEvents/Timeline/index.html.php";
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
        return new Source("", "@bundles/AssetBundle/Views/SubscribedEvents/Timeline/index.html.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Views/SubscribedEvents/Timeline/index.html.php");
    }
}
