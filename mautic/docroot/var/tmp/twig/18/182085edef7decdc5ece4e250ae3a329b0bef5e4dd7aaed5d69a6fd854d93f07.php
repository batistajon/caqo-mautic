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

/* @bundles/AssetBundle/Views/Asset/preview.html.php */
class __TwigTemplate_97c00193de6b158436cdb705d8b720af26cf62387585010b78fcd98075b7f67f extends Template
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

<h5 class=\"fw-sb mb-xs\"><?php echo \$view['translator']->trans('mautic.asset.asset.preview'); ?></h5>
<div class=\"text-center\">
    <?php if (\$activeAsset->isImage()): ?>
        <img src=\"<?php echo \$assetDownloadUrl.'?stream=1'; ?>\" alt=\"<?php echo \$view->escape(\$activeAsset->getTitle()); ?>\" class=\"img-thumbnail\" />
    <?php elseif ('pdf' == strtolower(\$activeAsset->getFileType())) : ?>
        <iframe src=\"<?php echo \$assetDownloadUrl.'?stream=1'; ?>#view=FitH\" class=\"col-sm-12\"></iframe>
    <?php elseif (0 === strpos(\$activeAsset->getMime(), 'video') || in_array(\$activeAsset->getExtension(), ['mpg', 'mpeg', 'mp4', 'webm'])): ?>
        <video src=\"<?php echo \$assetDownloadUrl.'?stream=1'; ?>\" controls>
            <?php echo \$view['translator']->trans('mautic.asset.no_video_support'); ?>
        </video>
    <?php elseif (0 === strpos(\$activeAsset->getMime(), 'audio') || in_array(\$activeAsset->getExtension(), ['mp3', 'ogg', 'wav'])): ?>
        <audio controls>
            <source src=\"<?php echo \$assetDownloadUrl.'?stream=1'; ?>\" type=\"<?php echo \$activeAsset->getMime(); ?>\">
            <?php echo \$view['translator']->trans('mautic.asset.no_audio_support'); ?>
        </audio>
    <?php else: ?>
        <i class=\"<?php echo \$activeAsset->getIconClass(); ?> fa-5x\"></i>
    <?php endif; ?>
</div>
<div class=\"clearfix\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Views/Asset/preview.html.php";
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
        return new Source("", "@bundles/AssetBundle/Views/Asset/preview.html.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Views/Asset/preview.html.php");
    }
}
