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

/* @bundles/AssetBundle/Views/Asset/form.html.php */
class __TwigTemplate_b50a18b5ca2b204a8d33fb901a022c8f621ccd42aba5a41d8b9e4a042fbbeee3 extends Template
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
\$view->extend('MauticCoreBundle:Default:content.html.php');
\$header = (\$activeAsset->getId()) ?
    \$view['translator']->trans('mautic.asset.asset.menu.edit',
        ['%name%' => \$activeAsset->getTitle()]) :
    \$view['translator']->trans('mautic.asset.asset.menu.new');
\$view['slots']->set('headerTitle', \$header);
\$view['slots']->set('mauticContent', 'asset');
?>
<script>
\t<?php echo 'mauticAssetUploadEndpoint = \"'.\$uploadEndpoint.'\";'; ?>
\t<?php echo 'mauticAssetUploadMaxSize = '.\$maxSize.';'; ?>
\t<?php echo 'mauticAssetUploadMaxSizeError = \"'.\$maxSizeError.'\";'; ?>
\t<?php echo 'mauticAssetUploadExtensions = \"'.\$extensions.'\";'; ?>
\t<?php echo 'mauticAssetUploadExtensionError = \"'.\$extensionError.'\";'; ?>
</script>
<?php echo \$view['form']->start(\$form); ?>
<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- container -->
    <div class=\"col-md-9 bg-auto height-auto bdr-r\">
        <div class=\"pa-md\">
\t        <div class=\"row\">
\t\t        <div class=\"col-md-6\">
\t\t\t\t\t<div class=\"col-md-7 pl-0\">
\t\t\t\t\t\t<?php echo \$view['form']->row(\$form['storageLocation']); ?>
\t\t\t\t\t</div>
\t\t\t        <div class=\"col-md-5 text-left mt-lg<?php if (\$startOnLocal) {
    echo ' hide';
} ?>\" id=\"remote-button\">
\t\t\t\t\t\t<?php if (\$integrations) : ?>
\t\t\t\t\t\t\t<a data-toggle=\"ajaxmodal\" data-target=\"#RemoteFileModal\" data-header=\"<?php echo \$view['translator']->trans('mautic.asset.remote.file.browse'); ?>\" href=\"<?php echo \$view['router']->path('mautic_asset_remote'); ?>?tmpl=modal\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t<?php echo \$view['translator']->trans('mautic.asset.remote.file.browse'); ?>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t<?php endif; ?>
\t\t\t\t\t</div>
\t\t\t        <div id=\"storage-local\"<?php if (!\$startOnLocal) {
    echo ' class=\"hide\"';
} ?>>
\t\t\t\t        <div class=\"row\">
\t\t\t\t\t        <div class=\"form-group col-xs-12 \">
\t\t\t\t\t\t        <?php echo \$view['form']->label(\$form['tempName']); ?>
\t\t\t\t\t\t        <?php echo \$view['form']->widget(\$form['tempName']); ?>
\t\t\t\t\t\t        <?php echo \$view['form']->errors(\$form['tempName']); ?>
\t\t\t\t\t\t        <div class=\"help-block mdropzone-error\"></div>
\t\t\t\t\t\t        <div class=\"mdropzone text-center\" id=\"dropzone\">
\t\t\t\t\t\t        \t<div class=\"dz-message\">
\t\t\t\t\t\t        \t\t<h4><?php echo \$view['translator']->trans('mautic.asset.drop.file.here'); ?></h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t        </div>
\t\t\t\t        </div>
\t\t\t        </div>
\t\t\t        <div id=\"storage-remote\"<?php if (\$startOnLocal) {
    echo ' class=\"hide\"';
} ?>>
\t\t\t\t        <?php echo \$view['form']->row(\$form['remotePath']); ?>
\t\t\t        </div>
\t\t    \t</div>
\t\t    \t<div class=\"col-md-6\">
\t\t    \t\t<div class=\"row\">
\t\t\t\t    \t<div class=\"form-group col-xs-12 preview\">
\t\t\t\t    \t\t<?php echo \$view->render('MauticAssetBundle:Asset:preview.html.php', ['activeAsset' => \$activeAsset, 'assetDownloadUrl' => \$view['router']->url(
                                'mautic_asset_action',
                                ['objectAction' => 'preview', 'objectId' => \$activeAsset->getId()]
                            )]); ?>
\t\t\t    \t\t</div>
\t\t    \t\t</div>
\t\t    \t</div>
\t\t    </div>
\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<?php echo \$view['form']->row(\$form['title']); ?>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<?php echo \$view['form']->row(\$form['alias']); ?>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <?php echo \$view['form']->row(\$form['description']); ?>
                </div>
            </div>
\t\t</div>
\t</div>
 \t<div class=\"col-md-3 bg-white height-auto\">
\t\t<div class=\"pr-lg pl-lg pt-md pb-md\">
\t\t\t<?php
                echo \$view['form']->row(\$form['category']);
                echo \$view['form']->row(\$form['language']);
                echo \$view['form']->row(\$form['isPublished']);
                echo \$view['form']->row(\$form['publishUp']);
                echo \$view['form']->row(\$form['publishDown']);
                echo \$view['form']->row(\$form['disallow']);
            ?>
\t\t</div>
\t</div>
</div>
<?php echo \$view['form']->end(\$form); ?>

<?php if (\$integrations) : ?>
\t<?php echo \$view->render('MauticCoreBundle:Helper:modal.html.php', [
        'id'            => 'RemoteFileModal',
        'size'          => 'lg',
        'footerButtons' => true,
    ]); ?>
<?php endif; ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Views/Asset/form.html.php";
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
        return new Source("", "@bundles/AssetBundle/Views/Asset/form.html.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Views/Asset/form.html.php");
    }
}
